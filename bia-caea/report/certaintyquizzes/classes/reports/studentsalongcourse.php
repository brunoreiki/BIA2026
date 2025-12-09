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
use qbehaviour_certaintywithstudentfbdeferred\declaredignoranceclass;
use qbehaviour_certaintywithstudentfbdeferred\lucidityclass;
use report_certaintyquizzes\locallib;

/**
 * "Evolution along Quizzes" certainty report, showing information about grade and lucidity index on all course Quiz activities.
 * @package    report_certaintyquizzes
 * @copyright  2025 Astor Bizard, 2024 Loic Delon
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class studentsalongcourse extends report {
    /**
     * @var array Eligible users for showing the report.
     */
    protected $users;

    /**
     * @var array Eligible groups for showing the report.
     */
    protected $groups;

    /**
     * @var int Currently requested user id.
     */
    protected $selecteduserid;

    /**
     * @var int Currently requested group id.
     */
    protected $selectedgroupid;

    /**
     * @var bool Whether capabilities of current user restrict them to seeing only their own data.
     */
    protected $onlycurrentuser;

    /**
     * Constructor.
     * @param int $courseid Current course ID.
     */
    public function __construct($courseid) {
        global $USER;
        parent::__construct($courseid);
        $this->onlycurrentuser = !has_capability('report/certaintyquizzes:view', \context_course::instance($this->courseid));
        if (!$this->onlycurrentuser) {
            $selected = optional_param('users', '', PARAM_RAW);
            if (substr($selected, 0, 1) === 'g') {
                $this->selectedgroupid = (int)(substr($selected, 1));
                $this->selecteduserid = -1;
            } else if (substr($selected, 0, 1) === 'u') {
                $this->selecteduserid = (int)(substr($selected, 1));
                $this->selectedgroupid = 0;
            }
            $this->users = $this->get_users_with_attempts_in_quizzes();
            if ($this->selecteduserid > 0 && isset($this->users[$this->selecteduserid])) {
                $this->users[$this->selecteduserid]['selected'] = true;
            }
            $this->groups = $this->get_groups_with_attempts_in_quizzes(array_keys($this->users));
            if ($this->selectedgroupid > 0 && isset($this->groups[$this->selectedgroupid])) {
                $this->groups[$this->selectedgroupid]['selected'] = true;
            }
        } else {
            $this->selecteduserid = $USER->id;
            $this->selectedgroupid = 0;
            $this->users = [ $USER->id => [ 'id' => $USER->id, 'name' => fullname($USER), 'selected' => true ] ];
            $this->groups = [];
        }
    }

    /**
     * {@inheritDoc}
     * @see \report_certaintyquizzes\reports\report::get_url_params()
     */
    public function get_url_params() {
        $params = parent::get_url_params();
        if (!$this->onlycurrentuser) {
            if ($this->selectedgroupid > 0) {
                $params['users'] = 'g' . $this->selectedgroupid;
            } else if ($this->selecteduserid != 0) {
                $params['users'] = 'u' . $this->selecteduserid;
            }
        }
        return $params;
    }

    /**
     * {@inheritDoc}
     * @see \report_certaintyquizzes\reports\report::get_selectors()
     */
    public function get_selectors() {
        global $OUTPUT;
        return [
                $OUTPUT->render_from_template('report_certaintyquizzes/usersselector', [
                        'users' => array_values($this->users),
                        'groups' => array_values($this->groups),
                        'onlycurrentuser' => $this->onlycurrentuser,
                        'hasgroups' => !empty($this->groups),
                ]) . ($this->onlycurrentuser ? '' : $OUTPUT->help_icon('users', locallib::COMPONENT)),
                $OUTPUT->render_from_template('report_certaintyquizzes/attemptselector', [
                        'attempttypes' => $this->attempttypes,
                ]) . ($this->onlycurrentuser ? '' : $OUTPUT->help_icon('attempttype', locallib::COMPONENT)),
        ];
    }

    /**
     * {@inheritDoc}
     * @see \report_certaintyquizzes\reports\report::validate_selectors()
     */
    public function validate_selectors() {
        return (
                $this->selecteduserid == -1 || isset($this->users[$this->selecteduserid])
                || !empty($this->selectedgroupid) && isset($this->groups[$this->selectedgroupid])
                )
                && in_array($this->attempttype, array_column($this->attempttypes, 'value'));
    }

    /**
     * {@inheritDoc}
     * @see \report_certaintyquizzes\reports\report::print_report()
     */
    public function print_report() {
        global $CFG, $OUTPUT, $PAGE;
        require_once($CFG->libdir . '/graphlib.php');

        if ($this->selectedgroupid > 0) { // Group selected.
            $userids = $this->groups[$this->selectedgroupid]['members'];
        } else if ($this->selecteduserid == -1) { // All users.
            $userids = array_keys($this->users);
        } else {
            $userids = [ $this->selecteduserid ];
        }

        $usersdata = array_fill_keys($userids, []);

        // Get quizzes in course order.
        $quiznames = [];
        foreach ($this->quizzes as $quiz) {
            $quiznames[] = get_string('labelvalue', 'moodle', [
                    'label' => get_string('modulename', 'mod_quiz'),
                    'value' => $quiz['title'],
            ]);
            $quizdata = [];
            foreach (locallib::get_specific_attempts($quiz['id'], $this->attempttype, $userids) as $attempt) {
                $usageid = $attempt->uniqueid;
                $attemptdata = \qbehaviour_certaintywithstudentfbdeferred\locallib::get_lucidity_indicators_for_attempt(
                    $usageid,
                    \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_GRADE |
                    \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_LUCIDITY |
                    \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_LUCIDITY_LABEL_COLOR |
                    \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_IGNORANCERATE
                );
                $quizdata[$attempt->userid] = [
                        'grade' => $attemptdata->gradeover100,
                        'gradecolor' => $attemptdata->ignorancerateindicatorcolor,
                        'declaredignorancerate' => $attemptdata->declaredignorancerate,
                        'lucidityindex' => $attemptdata->lucidityindex,
                        'lucidityindexcolor' => $attemptdata->lucidityindicatorcolor,
                        'lucidityindexlabel' => $attemptdata->lucidityindicatorlabel,
                ];
            }
            foreach ($userids as $userid) {
                if (isset($quizdata[$userid])) {
                    $usersdata[$userid][] = $quizdata[$userid];
                } else {
                    // Pad default values for users with no attempt on the quiz.
                    $usersdata[$userid][] = [
                            'grade' => null,
                            'gradecolor' => '#000000',
                            'declaredignorancerate' => null,
                            'lucidityindex' => null,
                            'lucidityindexcolor' => '#000000',
                            'lucidityindexlabel' => null,
                    ];
                }
            }
        }

        $hasdeclaredignorance = \qbehaviour_certaintywithstudentfbdeferred\locallib::exists_level_of_declared_ignorance();

        $gradeschart = new \core\chart_line();
        $gradeschart->set_labels($quiznames);
        $gradeschart->set_title(get_string('grades'));
        $gradeschart->set_legend_options([ 'display' => false ]);
        $luciditychart = new \core\chart_line();
        $luciditychart->set_labels($quiznames);
        $luciditychart->set_title(get_string('lucidityindex', locallib::BEHAVIOURCOMPONENT));
        $luciditychart->set_legend_options([ 'display' => false ]);
        foreach ($usersdata as $userid => $userdata) {
            $username = $this->users[$userid]['name'];
            $gradesseries = new \core\chart_series(
                $this->get_chart_label_for_user('gradenoun', '', $username),
                array_column($userdata, 'grade')
            );
            $gradesseries->set_colors(array_column($userdata, 'gradecolor'));
            $gradeschart->add_series($gradesseries);
            if ($hasdeclaredignorance) {
                $gradeschart->add_series(new \core\chart_series(
                    $this->get_chart_label_for_user('declaredignorancerate', locallib::BEHAVIOURCOMPONENT, $username),
                    array_column($userdata, 'declaredignorancerate')
                ));
            }
            $lucidityseries = new \core\chart_series(
                $this->get_chart_label_for_user('lucidityindex', locallib::BEHAVIOURCOMPONENT, $username),
                array_column($userdata, 'lucidityindex')
            );
            $lucidityseries->set_colors(array_column($userdata, 'lucidityindexcolor'));
            $luciditychart->add_series($lucidityseries);
            $luciditychart->add_series(new \core\chart_series(
                $this->get_chart_label_for_user('metacognitiveindicator', locallib::BEHAVIOURCOMPONENT, $username),
                array_column($userdata, 'lucidityindexlabel')
            ));
        }

        echo locallib::render_chart_with_loading_icon($gradeschart, 'grades-evolution-chart');
        echo $OUTPUT->render_from_template(locallib::BEHAVIOURCOMPONENT . '/declaredignoranceindicators', [
                'hasdeclaredignorance' => $hasdeclaredignorance,
                'declaredignoranceindicators' => declaredignoranceclass::classes_for_template(),
                'circleonly' => true,
        ]);
        echo '<hr>';
        echo locallib::render_chart_with_loading_icon($luciditychart, 'lucidity-evolution-chart');
        echo $OUTPUT->render_from_template(locallib::BEHAVIOURCOMPONENT . '/lucidityindicators', [
                'lucidityindicators' => lucidityclass::classes_for_template($hasdeclaredignorance),
                'circleonly' => true,
        ]);

        $PAGE->requires->strings_for_js([
                'gradeover100',
        ], locallib::COMPONENT);
        $PAGE->requires->strings_for_js([
                'clickfordetails',
                'lucidityindex',
                'declaredignoranceratea',
        ], locallib::BEHAVIOURCOMPONENT);
        $PAGE->requires->js_call_amd(locallib::COMPONENT . '/studentsalongcourse', 'postprocess', [
                $hasdeclaredignorance,
                $userids,
                array_column($this->quizzes, 'id'),
                $this->attempttype,
        ]);

        if ($this->selecteduserid > 0) {
            // Only one user selected - show a recap of all comments.
            echo '<hr>';
            $this->print_user_comments_summary($this->selecteduserid);
        }
    }

    /**
     * Build label for chart data with an indicator name and an user name.
     * @param string $stridentifier String identifier.
     * @param string $component Component of string identifier.
     * @param string $username Full user name.
     * @return string The built label.
     */
    protected function get_chart_label_for_user($stridentifier, $component, $username) {
        if ($this->onlycurrentuser) {
            // Only current user allowed, only display raw label.
            return get_string($stridentifier, $component);
        } else {
            return get_string('valueforuser', locallib::COMPONENT, [
                    'value' => get_string($stridentifier, $component),
                    'user' => $username,
            ]);
        }
    }

    /**
     * Print a summary containing all feedback submitted by given user on course quizzes.
     * @param int $userid The user ID to consider.
     */
    protected function print_user_comments_summary($userid) {
        global $PAGE;
        echo '<details id="report_certaintyquizzes-all-feedback">';
        echo '<summary class="h3">' . get_string('alluserfeedback', locallib::COMPONENT) . '</summary>';
        echo '<ul>';
        $attemptfeedbackexists = false;
        foreach ($this->quizzes as $quiz) {
            $userfeedbacks = [];
            $hasfeedback = false;
            foreach (locallib::get_specific_attempts($quiz['id'], 'all', [ $userid ]) as $attempt) { // Take all attempts.
                $quba = question_engine::load_questions_usage_by_activity($attempt->uniqueid);
                $attemptfeedbacks = [];
                // Gather general feedback.
                $generalfeedback = $quba->get_question_attempt(1)->get_last_behaviour_var('_generalstudentfeedback');
                if ($generalfeedback !== null) {
                    $attemptfeedbacks[] = $generalfeedback;
                    $hasfeedback = true;
                }
                foreach ($quba->get_attempt_iterator() as $qa) {
                    // Gather by-question feedback.
                    $questionfeedback = $qa->get_last_behaviour_var('_studentfeedback');
                    if ($questionfeedback !== null) {
                        $question = $qa->get_question(false);
                        $attemptfeedbacks[] = [
                                'questiontext' => format_text($question->questiontext, $question->questiontextformat),
                                'answersummary' => $qa->get_response_summary(),
                                'feedback' => $questionfeedback,
                        ];
                        $hasfeedback = true;
                    }
                }
                $userfeedbacks[] = [
                        'id' => $attempt->id,
                        'num' => $attempt->attempt,
                        'feedbacks' => $attemptfeedbacks,
                ];
            }
            echo '<li class="mb-1">';
            $title = get_string('labelvalue', '', [ 'label' => get_string('modulename', 'mod_quiz'), 'value' => $quiz['title'] ]);
            echo \html_writer::span($title, 'h5');
            if (!$hasfeedback) {
                // No feedback at all on this quiz.
                echo ' - ' . get_string('nofeedbackonquiz', locallib::COMPONENT);
            } else {
                $attempts = [];
                foreach ($userfeedbacks as $attemptdata) {
                    if (!$attemptdata['feedbacks']) {
                        // No feedback at all on this attempt.
                        continue;
                    }
                    $attempturl = new \moodle_url('/mod/quiz/review.php', [ 'attempt' => $attemptdata['id'] ]);
                    $attemptlink = \html_writer::link($attempturl, get_string('showthatattempt', locallib::BEHAVIOURCOMPONENT));
                    $attempttitle = \html_writer::span(get_string('attempt', 'mod_quiz', $attemptdata['num']), 'h6');
                    $questions = [];
                    foreach ($attemptdata['feedbacks'] as $feedback) {
                        if (is_array($feedback)) {
                            $questions[] = get_string('labelvalue', '', [
                                    'label' => '<em>' . get_string('question') . '</em>',
                                    'value' => $feedback['questiontext'],
                            ]) . '<br>' . get_string('labelvalue', '', [
                                    'label' => '<em>' . get_string('submittedanswer', locallib::COMPONENT) . '</em>',
                                    'value' => $feedback['answersummary'],
                            ]) . '<br>' . get_string('labelvalue', '', [
                                    'label' => '<b>' . get_string('submittedfeedback', locallib::COMPONENT) . '</b>',
                                    'value' => $feedback['feedback'],
                            ]);
                        } else {
                            $questions[] = get_string('labelvalue', '', [
                                    'label' => '<b>' . get_string('generalfeedbackforattempt', locallib::COMPONENT) . '</b>',
                                    'value' => $feedback,
                            ]);
                        }
                    }
                    $attempthtml = '<details><summary>' . $attempttitle . ' (' . $attemptlink . ')</summary>';
                    $attempthtml .= \html_writer::alist($questions);
                    $attempthtml .= '</details>';
                    $attempts[] = $attempthtml;
                    $attemptfeedbackexists = true;
                }
                echo \html_writer::alist($attempts);
            }
            echo '</li>';
        }
        echo '</ul>';
        echo '</details>';
        if ($attemptfeedbackexists) {
            $PAGE->requires->js_call_amd(locallib::COMPONENT . '/studentsalongcourse', 'managemultidetails');
        }
    }
}
