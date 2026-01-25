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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace report_certaintyquizzes\reports;

use question_engine;
use stdClass;
use qbehaviour_certaintywithstudentfbdeferred\answerclass;
use qbehaviour_certaintywithstudentfbdeferred\answersubcategory;
use report_certaintyquizzes\locallib;

/**
 * "Single Quiz" certainty report, showing detailed information on a specific Quiz activity.
 * @package    report_certaintyquizzes
 * @copyright  2025 Astor Bizard, 2024 Loic Delon
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class singlequiz extends report {
    /**
     * @var string Currently requested interval for grades and lucidity index.
     */
    protected $selectedinterval;

    /**
     * @var string Currently requested quiz id.
     */
    protected $quizid;

    /**
     * @var array Internal storage of attempts and question usages, for performance.
     */
    protected $usages;

    /**
     * @var array Eligible groups for showing the report.
     */
    protected $groups;

    /**
     * @var int Currently requested group id.
     */
    protected $selectedgroupid;

    /**
     * Constructor.
     * @param int $courseid Current course ID.
     */
    public function __construct($courseid) {
        parent::__construct($courseid);
        $this->quizid = optional_param('quizid', 0, PARAM_INT);
        $this->selectedinterval = optional_param('interval', 20, PARAM_INT);
        $this->usages = null;
        $this->groups = $this->get_groups_with_attempts_in_quizzes();
        $this->selectedgroupid = optional_param('group', 0, PARAM_INT);
        if ($this->selectedgroupid > 0 && isset($this->groups[$this->selectedgroupid])) {
            $this->groups[$this->selectedgroupid]['selected'] = true;
        }
        $this->attempttypes[] = [
                'value' => 'all',
                'label' => get_string('attempttypeall', locallib::COMPONENT),
                'selected' => $this->attempttype == 'all',
        ];
    }

    /**
     * {@inheritDoc}
     * @see \report_certaintyquizzes\reports\report::get_url_params()
     */
    public function get_url_params() {
        $params = parent::get_url_params();
        if ($this->quizid) {
            $params['quizid'] = $this->quizid;
        }
        $params['interval'] = $this->selectedinterval;
        if ($this->selectedgroupid > 0) {
            $params['group'] = $this->selectedgroupid;
        }
        return $params;
    }

    /**
     * {@inheritDoc}
     * @see \report_certaintyquizzes\reports\report::get_selectors()
     */
    public function get_selectors() {
        global $OUTPUT;
        $intervals = [
                50 => [ 'value' => 50 ],
                25 => [ 'value' => 25 ],
                20 => [ 'value' => 20 ],
                10 => [ 'value' => 10 ],
                5 => [ 'value' => 5 ],
        ];
        $intervals[$this->selectedinterval]['selected'] = true;
        if ($this->quizid && isset($this->quizzes[$this->quizid])) {
            $this->quizzes[$this->quizid]['selected'] = true;
        }

        $requestedinvalid = optional_param('quizid', -1, PARAM_INT) == 0; // Parameter is present (requested) and invalid (0).
        $selectors = [
                $OUTPUT->render_from_template('report_certaintyquizzes/quizselector', [
                        'quizs' => array_values($this->quizzes),
                        'invalid' => $requestedinvalid,
                ]),
        ];
        if (!empty(groups_get_all_groups($this->courseid))) {
            // There are groups in the course.
            if (empty($this->groups)) {
                // We most likely are in separate groups mode, and no attempts are present in user groups.
                \core\notification::add(get_string('noattemptinyourgroups', 'report_certaintyquizzes'), 'error');
            } else {
                $aag = has_capability('moodle/site:accessallgroups', \context_course::instance($this->courseid));
                $groupmode = get_course($this->courseid)->groupmode;
                $separategroups = $groupmode == SEPARATEGROUPS && !$aag;
                // Display the groups selector, even if no relevant group exists, to let teachers know that the filter exists.
                $selectors = array_merge($selectors, [
                        $OUTPUT->render_from_template('report_certaintyquizzes/groupselector', [
                                'groups' => array_values($this->groups),
                                'separategroups' => $separategroups,
                                'onlycurrentgroup' => $separategroups && count($this->groups) == 1,
                        ]) . $OUTPUT->help_icon('group', locallib::COMPONENT),
                ]);
            }
        }
        $selectors = array_merge($selectors, [
                $OUTPUT->render_from_template('report_certaintyquizzes/attemptselector', [
                        'attempttypes' => $this->attempttypes,
                ]) . $OUTPUT->help_icon('attempttype', locallib::COMPONENT),
                $OUTPUT->render_from_template('report_certaintyquizzes/intervalselector', [
                        'intervals' => array_values($intervals),
                ]) . $OUTPUT->help_icon('interval', locallib::COMPONENT),
        ]);

        return $selectors;
    }

    /**
     * {@inheritDoc}
     * @see \report_certaintyquizzes\reports\report::validate_selectors()
     */
    public function validate_selectors() {
        return !empty($this->quizid) && isset($this->quizzes[$this->quizid]) &&
                (empty($this->selectedgroupid) || isset($this->groups[$this->selectedgroupid])) &&
                in_array($this->attempttype, array_column($this->attempttypes, 'value')) &&
                $this->selectedinterval > 0;
    }

    /**
     * Load once question usages for each user.
     */
    protected function prepare_usages() {
        global $CFG;
        require_once($CFG->dirroot . '/question/engine/lib.php');
        $this->usages = [];
        if ($this->selectedgroupid > 0) {
            $userids = $this->groups[$this->selectedgroupid]['members'];
        } else {
            $userids = array_keys($this->get_users_with_attempts_in_quizzes([ $this->quizid ]));
        }
        foreach (locallib::get_specific_attempts($this->quizid, $this->attempttype, $userids) as $attempt) {
            $this->usages[] = (object)[
                    'attempt' => $attempt,
                    'quba' => question_engine::load_questions_usage_by_activity($attempt->uniqueid),
            ];
        }
    }

    /**
     * Compute required data for grade and lucidity index per interval charts.
     * @return stdClass containing labels and charts data.
     */
    protected function compute_students_data() {
        $interval = $this->selectedinterval; // Just to shorten the variable name because it is used quite a lot below.

        $gradeintervals = array_fill_keys(range(0, 100 - $interval, $interval), []);
        $lucidityintervals = array_fill_keys(range(0, 100 - $interval, $interval), []);

        foreach ($this->usages as $usage) {
            $attemptdata = \qbehaviour_certaintywithstudentfbdeferred\locallib::get_lucidity_indicators_for_attempt(
                $usage->quba,
                \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_GRADE |
                \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_LUCIDITY
            );

            // Classify grade.
            $grade = (int) $attemptdata->gradeover100;
            $gradeintervals[min(100 - $interval, $grade - ($grade % $interval))][] = $usage->attempt->id;

            // Classify lucidity index.
            if (is_numeric($attemptdata->lucidityindex)) {
                $lucidity = (int) floor((float) $attemptdata->lucidityindex);
                $lucidityintervals[min(100 - $interval, $lucidity - (($lucidity + 100) % $interval))][] = $usage->attempt->id;
            }
        }

        $quizdata = new stdClass();
        foreach ($gradeintervals as $i => $attemptids) {
            // Inclusive for last interval.
            $quizdata->gradeintervals[] = '[' . $i . ', ' . ($i + $interval) . ($i == 100 - $interval ? ']' : '[');
            $quizdata->attemptidsbygradeinterval[] = $attemptids;
        }

        foreach ($lucidityintervals as $i => $attemptids) {
            // Inclusive for last interval.
            $quizdata->lucidityintervals[] = '[' . $i . ', ' . ($i + $interval) . ($i == 100 - $interval ? ']' : '[');
            $quizdata->attemptidsbylucidityinterval[] = $attemptids;
        }

        return $quizdata;
    }

    /**
     * Compute required data for per-question charts.
     * @return array containing questions charts data.
     */
    protected function compute_questions_data() {
        $questionsdata = [];

        foreach ($this->usages as $usage) {
            foreach ($usage->quba->get_attempt_iterator() as $qa) {
                $question = $qa->get_question();

                if (!isset($questionsdata[$question->id])) {
                    $questionsdata[$question->id] = [
                            'id' => $question->id,
                            'title' => format_string($question->name),
                            'text' => $question->format_questiontext($qa),
                            'totalcorrect' => 0,
                            'usageids' => [],
                    ];
                    foreach (answerclass::get_classes() as $answerclass) {
                        $questionsdata[$question->id]['n' . $answerclass->name] = 0;
                    }
                }

                $questionsdata[$question->id]['usageids'][] = $usage->quba->get_id();
                $questionsdata[$question->id]['totalcorrect'] += $qa->get_fraction() == $qa->get_max_fraction() ? 1 : 0;

                $subcategory = answersubcategory::subcategorize_answer($qa);
                if ($subcategory !== null) {
                    $questionsdata[$question->id]['n' . $subcategory->answerclass->name] += 1;
                }
            }
        }

        return array_values($questionsdata);
    }

    /**
     * {@inheritDoc}
     * @see \report_certaintyquizzes\reports\report::print_report()
     */
    public function print_report() {
        global $PAGE, $CFG, $OUTPUT;

        $this->prepare_usages();

        if (empty($this->usages)) {
            echo $OUTPUT->notification(get_string('noattemptonquiz', locallib::COMPONENT), 'info', false);
            return;
        }

        require_once($CFG->libdir . '/graphlib.php');

        $quizdata = $this->compute_students_data();

        $studentsgradeschart = new \core\chart_bar();
        $studentsgradeschart->set_labels($quizdata->gradeintervals);
        $studentsgradeschart->add_series(new \core\chart_series(
            get_string('numofstudents', locallib::COMPONENT),
            array_map('count', $quizdata->attemptidsbygradeinterval)
        ));
        $studentsgradeschart->set_legend_options([ 'display' => false ]);
        $studentsgradeschart->set_title(get_string('studentsbygrade', locallib::COMPONENT));

        echo $OUTPUT->render_from_template('report_certaintyquizzes/charts_with_sidebar', [
                'name' => 'grades',
                'charts' => [ locallib::render_chart_with_loading_icon($studentsgradeschart, 'students-by-grade') ],
        ]);

        echo '<hr>';

        if (reset($this->usages)->quba->question_count() < 10) {
            echo '<i class="icon fa fa-exclamation-circle text-info" role="presentation"></i>';
            echo get_string('lucidityindexdisclaimer', locallib::BEHAVIOURCOMPONENT);
        }

        $studentsluciditychart = new \core\chart_bar();
        $studentsluciditychart->set_labels($quizdata->lucidityintervals);
        $studentsluciditychart->add_series(new \core\chart_series(
            get_string('numofstudents', locallib::COMPONENT),
            array_map('count', $quizdata->attemptidsbylucidityinterval)
        ));
        $studentsluciditychart->set_legend_options([ 'display' => false ]);
        $studentsluciditychart->set_title(get_string('studentsbylucidity', locallib::COMPONENT));

        echo $OUTPUT->render_from_template('report_certaintyquizzes/charts_with_sidebar', [
                'name' => 'lucidity',
                'charts' => [ locallib::render_chart_with_loading_icon($studentsluciditychart, 'students-by-lucidity') ],
        ]);

        echo '<hr>';

        $questionsdata = $this->compute_questions_data();

        $questionsgradeschart = new \core\chart_bar();
        $questionsgradeschart->set_labels(array_column($questionsdata, 'title'));
        $questionsgradeschart->add_series(new \core\chart_series(
            get_string('numstudentswithcorrectanswer', locallib::COMPONENT),
            array_column($questionsdata, 'totalcorrect')
        ));
        $questionsgradeschart->set_legend_options(['display' => false]);
        $questionsgradeschart->set_title(get_string('numcorrectbyquestion', locallib::COMPONENT));

        $gradebyquestionchart = locallib::render_chart_with_loading_icon($questionsgradeschart, 'grade-by-question-chart');

        $answerclasseschart = new \core\chart_bar();
        $answerclasseschart->set_labels(array_column($questionsdata, 'title'));
        foreach (answerclass::get_classes() as $answerclass) {
            $series = new \core\chart_series(
                get_string($answerclass->name . 'plural', locallib::BEHAVIOURCOMPONENT),
                array_column($questionsdata, 'n' . $answerclass->name)
            );
            $series->set_color($answerclass->color);
            $answerclasseschart->add_series($series);
        }
        $answerclasseschart->set_stacked(true);
        $answerclasseschart->set_title(get_string('answercategoriesbyquestion', locallib::COMPONENT));

        $certaintybyquestionchart = locallib::render_chart_with_loading_icon($answerclasseschart, 'certainty-by-question-chart');

        echo $OUTPUT->render_from_template('report_certaintyquizzes/charts_with_sidebar', [
                'name' => 'question',
                'charts' => [ $gradebyquestionchart, '<hr>', $certaintybyquestionchart ],
        ]);

        $PAGE->requires->strings_for_js([
                'gradeover100',
                'numofstudents',
        ], locallib::COMPONENT);
        $PAGE->requires->strings_for_js([
                'clickfordetails',
                'lucidityindex',
                'numofanswers',
        ], locallib::BEHAVIOURCOMPONENT);
        $PAGE->requires->strings_for_js([
                'answer',
                'closebuttontitle',
                'next',
                'previous',
                'question',
        ], 'moodle');
        $PAGE->requires->js_call_amd(
            locallib::COMPONENT . '/singlequiz',
            'postprocess',
            [
                    [ 'courseid' => $this->courseid, 'quizid' => $this->quizid ],
                    $quizdata->attemptidsbygradeinterval,
                    $quizdata->attemptidsbylucidityinterval,
                    count($this->usages),
                    array_column($questionsdata, 'id'),
                    array_column($questionsdata, 'usageids'),
            ]
        );

        echo '<hr>';

        $generalfeedbacks = [];
        foreach ($this->usages as $usage) {
            $generalfeedback = $usage->quba->get_question_attempt(1)->get_last_behaviour_var('_generalstudentfeedback');
            if ($generalfeedback !== null) {
                $reviewurl = new \moodle_url('/mod/quiz/review.php', [ 'attempt' => $usage->attempt->id ]);
                $nameandlink = locallib::attempt_link_with_hidden_name($reviewurl, $usage->attempt->userid);
                $generalfeedbacks[] = $generalfeedback . ' ' . $nameandlink;
            }
        }
        echo \html_writer::div(get_string('generalfeedbackforattempts', locallib::COMPONENT), 'h3');
        if (!empty($generalfeedbacks)) {
            echo locallib::show_names_button('general-feedbacks');
            echo \html_writer::alist($generalfeedbacks, [ 'id' => 'general-feedbacks' ]);
        } else {
            $infoicon = $OUTPUT->pix_icon('i/info', get_string('info'), 'moodle', [ 'class' => 'text-info' ]);
            echo \html_writer::div($infoicon . get_string('nogeneralfeedbackonattempts', locallib::COMPONENT));
        }
    }
}
