<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Question behaviour type for deferred feedback with certainty and student feedback behaviour.
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2025 Astor Bizard, 2024 Loic Delon
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

use core\chart_bar;
use core\chart_line;
use core\chart_series;
use qbehaviour_certaintywithstudentfbdeferred\answerclass;
use qbehaviour_certaintywithstudentfbdeferred\answersubcategory;
use qbehaviour_certaintywithstudentfbdeferred\certaintylevel;
use qbehaviour_certaintywithstudentfbdeferred\declaredignoranceclass;
use qbehaviour_certaintywithstudentfbdeferred\locallib;
use qbehaviour_certaintywithstudentfbdeferred\lucidityclass;

require_once(__DIR__ . '/../studentfeedbackdeferred/behaviourtype.php');

/**
 * Question behaviour type information for deferred feedback with certainty and student feedback behaviour.
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qbehaviour_certaintywithstudentfbdeferred_type extends qbehaviour_studentfeedbackdeferred_type {

    /**
     * {@inheritDoc}
     * @see question_behaviour_type::is_archetypal()
     */
    public function is_archetypal() {
        return true;
    }

    /**
     * {@inheritDoc}
     * @see question_behaviour_type::can_questions_finish_during_the_attempt()
     */
    public function can_questions_finish_during_the_attempt() {
        return false;
    }

    /**
     * {@inheritDoc}
     * @param question_usage_by_activity $quba the usage to provide summary data for.
     * @param question_display_options $options options about what to display.
     * @see question_behaviour_type::summarise_usage()
     */
    public function summarise_usage(question_usage_by_activity $quba, question_display_options $options) {
        global $OUTPUT, $CFG, $PAGE, $DB;
        $summarydata = parent::summarise_usage($quba, $options);

        if ($options->marks < question_display_options::MARK_AND_MAX) {
            return $summarydata;
        }

        require_once($CFG->libdir . '/graphlib.php');
        $nlevels = count(certaintylevel::get_levels());
        $ncategories = count(answersubcategory::get_subcategories());
        $hasdeclaredignorance = locallib::exists_level_of_declared_ignorance();

        $oursummary = '';
        $nquestions = $quba->question_count();

        // Select all quiz attempts that are from the same user and on the same quiz than the one we are looking at.
        $sql = "SELECT q2.id, q2.uniqueid as usageid, q2.attempt as attemptnum, q2.sumgrades, q2.timefinish
                  FROM {quiz_attempts} q1
                  JOIN {quiz_attempts} q2 ON q2.userid = q1.userid AND q2.quiz = q1.quiz
                 WHERE q1.uniqueid = ? AND q2.timefinish > 0
              ORDER BY q2.timefinish";
        $quizattempts = $DB->get_records_sql($sql, [ $quba->get_id() ]);

        $nattempts = count($quizattempts);
        $attemptsdata = [];

        foreach ($quizattempts as $quizattempt) {
            $attemptdata = locallib::get_lucidity_indicators_for_attempt($quizattempt->usageid);
            $attemptdata->attempturl = (new moodle_url('/mod/quiz/review.php', [ 'attempt' => $quizattempt->id ]))->out();
            $attemptdata->iscurrentattempt = $quizattempt->usageid == $quba->get_id();
            $attemptdata->chartshape = $attemptdata->iscurrentattempt ? 'rectRot' : 'circle';
            $attemptdata->cssshape = $attemptdata->iscurrentattempt ? 'rotated-square' : 'circle';
            $attemptdata->attemptnum = $quizattempt->attemptnum;
            $attemptdata->attempttitle = get_string('attempttitle', locallib::COMPONENT, [
                    'num' => $quizattempt->attemptnum,
                    'attemptcount' => $nattempts,
                    'date' => userdate($quizattempt->timefinish, get_string('strftimedatefullshort', 'langconfig')),
            ]);
            $attemptsdata[$quizattempt->usageid] = $attemptdata;
        }

        if (!isset($attemptsdata[$quba->get_id()])) {
            // Should not happen unless attempt is not finished (and in that case we should not reach this line).
            return $summarydata;
        }
        $attemptindicators = $attemptsdata[$quba->get_id()];
        $attempti = $attemptindicators->attemptnum;

        if ($nattempts > 1) {
            $oursummary .= html_writer::tag('h4', get_string('thisattemptdetail', locallib::COMPONENT, $attempti));
        }

        $linktoreport = false;
        $reportcertaintyquizzesplugin = core_plugin_manager::instance()->get_plugin_info('report_certaintyquizzes');
        if ($reportcertaintyquizzesplugin !== null) {
            // Search for attempts on other quizzes with certainty behaviours in the course.
            // If there are any, display a link to the report.
            $sql = "SELECT qa2.id, qa2.userid, quiz2.course
                      FROM {quiz_attempts} qa1
                      JOIN {quiz} quiz1 ON quiz1.id = qa1.quiz
                      JOIN {quiz} quiz2 ON quiz2.course = quiz1.course
                      JOIN {quiz_attempts} qa2 ON qa2.quiz = quiz2.id AND qa2.userid = qa1.userid
                     WHERE qa1.uniqueid = ? AND qa2.timefinish > 0 AND qa2.preview = 0
                           AND quiz2.preferredbehaviour IN ('certaintywithstudentfeedback','certaintywithstudentfbdeferred')
                  GROUP BY quiz2.id";
            $attemptsonotherquizzes = $DB->get_records_sql($sql, [ $quba->get_id() ]);
            if (count($attemptsonotherquizzes) > 1) {
                $oneattempt = reset($attemptsonotherquizzes);
                $reporturl = new moodle_url('/report/certaintyquizzes/index.php',
                        [ 'courseid' => $oneattempt->course, 'report' => 'studentsalongcourse', 'userid' => $oneattempt->userid ]);
                $linktoreport = html_writer::link($reporturl, get_string('viewcoursereport', locallib::COMPONENT),
                        [ 'class' => 'btn btn-secondary' ]);
            }
        }

        $suffix = $hasdeclaredignorance ? '' : '_nodi';
        $rates = [
                'min' => certaintylevel::get_levels()[$hasdeclaredignorance ? 1 : 0]->percentage,
                'max' => certaintylevel::get_levels()[$nlevels - 1]->percentage,
        ];
        $dirhelpicon = new help_icon('declaredignorancerate', locallib::COMPONENT, certaintylevel::get_levels()[0]->label);
        $crhelpicon = new help_icon('confidencerate' . $suffix, locallib::COMPONENT, $rates);
        $irhelpicon = new help_icon('imprudencerate' . $suffix, locallib::COMPONENT, $rates);
        $oursummary .= $OUTPUT->render_from_template(locallib::COMPONENT . '/attemptindicators',
                [
                        'nrightanswers' => $attemptindicators->nright,
                        'nwronganswers' => $attemptindicators->nwrong,
                        'hasdeclaredignorance' => $hasdeclaredignorance,
                        'ndeclaredignorance' => $hasdeclaredignorance ? $attemptindicators->subcategorysizes[$nlevels - 1] : null,
                        'nquestions' => $nquestions,
                        'declaredignorancerate' => $attemptindicators->declaredignorancerate,
                        'declaredignorancerate_help' => $OUTPUT->render($dirhelpicon),
                        'confidencerate' => $attemptindicators->confidencerate,
                        'confidencerate_help' => $OUTPUT->render($crhelpicon),
                        'imprudencerate' => $attemptindicators->imprudencerate,
                        'imprudencerate_help' => $OUTPUT->render($irhelpicon),
                        'lucidityindex' => $attemptindicators->lucidityindex,
                        'lucidityindex_help' => $OUTPUT->help_icon('lucidityindex' . $suffix, locallib::COMPONENT),
                        'linktoreport' => $linktoreport,
                ]);

        // Draw this attempt summary chart.
        $chart = new chart_bar();
        $chart->set_labels(array_map('strip_tags', array_column(answersubcategory::get_subcategories(), 'detailedlabel')));

        if ($hasdeclaredignorance) {
            $objectives = [
                    [ 0, 0.3, 1, 3, 8, null, null, null, null, null, null ],
                    [ null, null, null, null, null, null, 2, 3, 5, 10, 24 ],
            ];
        } else {
            $objectives = [
                    [ 0, 0.3, 1, 2.5, 6.2, 13, null, null, null, null, null, null ],
                    [ null, null, null, null, null, null, 1.5, 2, 3, 5, 10, 24 ],
            ];
        }

        // Determine objective according to number of right and wrong answers.
        $coef = ($attemptindicators->nwrong + $attemptindicators->nright) / array_sum(array_map('array_sum', $objectives)) * 0.5;
        $objectivemap = function($x) use($coef) {
            return ($x === null) ? null : $x * $coef;
        };

        $expectedtrendcolor = 'black';
        foreach ($objectives as $objective) {
            $objective = array_map($objectivemap, $objective);
            $objectiveseries = new chart_series(get_string('expectedtrend', locallib::COMPONENT), $objective);
            $objectiveseries->set_type(chart_series::TYPE_LINE);
            $objectiveseries->set_smooth(true);
            $objectiveseries->set_color($expectedtrendcolor);
            $objectiveseries->set_labels(null);
            $chart->add_series($objectiveseries);
        }

        $mainseries = new chart_series(get_string('numofanswers', locallib::COMPONENT), $attemptindicators->subcategorysizes);
        $mainseries->set_colors(array_column(answersubcategory::get_subcategories(), 'color'));
        $chart->add_series($mainseries);

        // Remove default legend and display our custom legend.
        $chart->set_legend_options([ 'display' => false ]);
        $toplegendcontext = new stdClass();
        $toplegendcontext->displaydeclaredignorance = $hasdeclaredignorance;
        foreach (answerclass::get_classes() as $answerclass) {
            $toplegendcontext->{$answerclass->name . 'color'} = $answerclass->color;
        }
        $toplegendcontext->expectedtrendcolor = $expectedtrendcolor;
        $toplegendcontext->expectedtrendhelpicon = $OUTPUT->help_icon('expectedtrend', locallib::COMPONENT);
        $toplegend = $OUTPUT->render_from_template(locallib::COMPONENT . '/charttoplegend', $toplegendcontext);

        $bottomlegendcontext = new stdClass();
        $bottomlegendcontext->answercategoriespercentages = [];
        foreach (answersubcategory::get_subcategories() as $answersubcategory) {
            $bottomlegendcontext->answercategoriespercentages[] = $answersubcategory->certaintylevel->percentage;
        }
        $bottomlegendcontext->answerclasses = [];
        $i = 0;
        foreach (answerclass::get_classes() as $answercategory) {
            $class = new stdClass();
            $class->display = $answercategory->nsubcategories > 0;
            $class->spacepercentage = $answercategory->nsubcategories * round(100.0 / $ncategories);
            $class->numanswers = array_sum(array_slice($attemptindicators->subcategorysizes, $i, $answercategory->nsubcategories));
            if ($class->numanswers > 1) {
                $str = $answercategory->name . 'plural';
            } else if ($class->numanswers == 1) {
                $str = $answercategory->name;
            } else {
                $str = 'no' . $answercategory->name;
            }
            $class->name = get_string($str, locallib::COMPONENT);
            $bottomlegendcontext->answerclasses[] = $class;
            $i += $answercategory->nsubcategories;
        }

        // Insert custom legend between chart and chart data table.
        $renderedchart = $OUTPUT->render($chart);
        $sep = strpos($renderedchart, '<div class="chart-table');
        $legend = $OUTPUT->render_from_template(locallib::COMPONENT . '/chartbottomlegend', $bottomlegendcontext);
        $oursummary .= $OUTPUT->render_from_template(locallib::COMPONENT . '/loadingchart', [
                'content' => $toplegend . substr($renderedchart, 0, $sep) . $legend . substr($renderedchart, $sep),
                'role' => locallib::COMPONENT . '_this-attempt-chart',
        ]);

        if ($nattempts > 1) {
            // Draw student grades progress chart.
            $gradeschart = new chart_line();
            $gradeschart->set_labels(range(1, $nattempts));
            $gradeschart->set_legend_options([ 'display' => false ]);
            $gradeschart->set_title(get_string('grades'));
            $gradeschartseries = new chart_series(get_string('gradenoun'), array_column($attemptsdata, 'gradeover100'));
            $gradeschartseries->set_colors(array_column($attemptsdata, 'ignorancerateindicatorcolor'));
            $gradeschart->add_series($gradeschartseries);
            if ($hasdeclaredignorance) {
                $gradeslabelsseries = new \core\chart_series(get_string('declaredignorancerate', locallib::COMPONENT),
                        array_column($attemptsdata, 'declaredignorancerate'));
                $gradeschart->add_series($gradeslabelsseries);
            }

            // Draw student lucidity index progress chart.
            $luciditychart = new chart_line();
            $luciditychart->set_labels(range(1, $nattempts));
            $luciditychart->set_legend_options([ 'display' => false ]);
            $luciditychart->set_title(get_string('lucidityindex', locallib::COMPONENT));
            $luciditychartseries = new chart_series(get_string('lucidityindex', locallib::COMPONENT),
                    array_column($attemptsdata, 'lucidityindex'));
            $luciditychartseries->set_colors(array_column($attemptsdata, 'lucidityindicatorcolor'));
            $luciditychart->add_series($luciditychartseries);

            $luciditylabelsseries = new \core\chart_series(get_string('metacognitiveindicator', locallib::COMPONENT),
                    array_column($attemptsdata, 'lucidityindicatorlabel'));
            $luciditychart->add_series($luciditylabelsseries);

            $oursummary .= $OUTPUT->render_from_template(locallib::COMPONENT . '/charts', [
                    'attemptnum' => $attempti,
                    'grade_progress_chart' => locallib::render_loading_chart($gradeschart, 'grades-chart'),
                    'lucidity_progress_chart' => locallib::render_loading_chart($luciditychart, 'lucidity-chart'),
                    'attemptcount' => $nattempts,
                    'questioncount' => $nquestions,
                    'hasdeclaredignorance' => $hasdeclaredignorance,
                    'lucidityindicators' => lucidityclass::classes_for_template($hasdeclaredignorance),
                    'declaredignoranceindicators' => declaredignoranceclass::classes_for_template(),
                    'attemptsdata' => array_values($attemptsdata),
            ]);
        }

        $summarydata[locallib::COMPONENT . '_summary'] = [
                'title' => get_string('behavioursummary', locallib::COMPONENT),
                'content' => html_writer::div($oursummary, 'qbehaviour-certaintywithstudentfbdeferred'),
        ];

        // Put student feedback field after the chart.
        if (isset($summarydata['qbehaviour_studentfeedbackdeferred_summary'])) {
            $feedbackfield = $summarydata['qbehaviour_studentfeedbackdeferred_summary'];
            unset($summarydata['qbehaviour_studentfeedbackdeferred_summary']);
            $summarydata['qbehaviour_studentfeedbackdeferred_summary'] = $feedbackfield;
        }

        $PAGE->requires->strings_for_js([
                'clickfordetails',
                'declaredignoranceratea',
                'numofanswers',
        ], locallib::COMPONENT);
        $PAGE->requires->strings_for_js([
                'attemptnumber',
                'attempt',
        ], 'mod_quiz');
        $PAGE->requires->js_call_amd(locallib::COMPONENT . '/chart_postprocessing', 'postprocessing',
                [ array_column($attemptsdata, 'chartshape'), $hasdeclaredignorance ]);

        return $summarydata;
    }
}
