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
     * @var int Currently requested user id.
     */
    protected $selecteduserid;

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
            $this->selecteduserid = optional_param('userid', 0, PARAM_INT);
            $this->users = $this->get_users_with_attempts_in_quizzes();
            if ($this->selecteduserid > 0) {
                $this->users[$this->selecteduserid]['selected'] = true;
            }
        } else {
            $this->selecteduserid = $USER->id;
            $this->users = [ $USER->id => [ 'id' => $USER->id, 'name' => fullname($USER), 'selected' => true ] ];
        }
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
                        'onlycurrentuser' => $this->onlycurrentuser,
                ]),
                $OUTPUT->render_from_template('report_certaintyquizzes/attemptselector', [
                        'attempttypes' => $this->attempttypes,
                ]) . $OUTPUT->help_icon('attempttype', locallib::COMPONENT),
        ];
    }

    /**
     * {@inheritDoc}
     * @see \report_certaintyquizzes\reports\report::validate_selectors()
     */
    public function validate_selectors() {
        return !empty($this->selecteduserid) &&
                in_array($this->attempttype, array_column($this->attempttypes, 'value'));
    }

    /**
     * {@inheritDoc}
     * @see \report_certaintyquizzes\reports\report::print_report()
     */
    public function print_report() {
        global $CFG, $OUTPUT, $PAGE;
        require_once($CFG->libdir . '/graphlib.php');

        if ($this->selecteduserid == -1) { // All users.
            $userids = array_keys($this->users);
        } else {
            $userids = [ $this->selecteduserid ];
        }

        $usersdata = array_fill_keys($userids, []);

        // Get quizzes in course order.
        $quiznames = [];
        foreach ($this->quizzes as $quiz) {
            $quiznames[] = get_string('labelvalue', 'moodle',
                    [ 'label' => get_string('modulename', 'mod_quiz'), 'value' => $quiz['title'] ]);
            $quizdata = [];
            foreach (locallib::get_specific_attempt($quiz['id'], $this->attempttype, $userids) as $userid => $attempt) {
                $usageid = $attempt->uniqueid;
                $attemptdata = \qbehaviour_certaintywithstudentfbdeferred\locallib::get_lucidity_indicators_for_attempt($usageid,
                        \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_GRADE |
                        \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_LUCIDITY |
                        \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_LUCIDITY_LABEL_COLOR |
                        \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_IGNORANCERATE
                        );
                $quizdata[$userid] = [
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
        $PAGE->requires->js_call_amd(locallib::COMPONENT . '/studentsalongcourse', 'postprocess',
                [ $hasdeclaredignorance, $userids, array_column($this->quizzes, 'id'), $this->attempttype ]);
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
            return get_string('valueforuser', locallib::COMPONENT,
                    [
                            'value' => get_string($stridentifier, $component),
                            'user' => $username,
                    ]);
        }
    }
}
