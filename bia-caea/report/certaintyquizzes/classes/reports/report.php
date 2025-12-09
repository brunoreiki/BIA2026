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

use report_certaintyquizzes\locallib;

/**
 * Base class for certainty quizzes reports.
 * @package    report_certaintyquizzes
 * @copyright  2025 Astor Bizard, 2024 Loic Delon
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class report {
    /**
     * @var int Current course ID.
     */
    protected $courseid;

    /**
     * @var array Eligible quizzes in course (quizzes with a certainty behaviour).
     */
    protected $quizzes;

    /**
     * @var array Available attempt types to be requested.
     */
    protected $attempttypes;

    /**
     * @var string Currently requested attempt type.
     */
    protected $attempttype;

    /**
     * Constructor.
     * @param int $courseid Current course ID.
     */
    public function __construct($courseid) {
        global $DB;
        $this->courseid = $courseid;
        $this->attempttype = optional_param('attempttype', 'latest', PARAM_TEXT);

        $sql = "SELECT id
                  FROM {quiz}
                 WHERE course = ? AND preferredbehaviour IN ('certaintywithstudentfeedback','certaintywithstudentfbdeferred')";
        $certaintyquizids = $DB->get_records_sql($sql, [ $this->courseid ]);
        $this->quizzes = [];
        // Get quizzes in course order.
        $allquizzes = get_fast_modinfo($this->courseid, -1)->get_instances_of('quiz');
        foreach ($allquizzes as $quiz) {
            if (!isset($certaintyquizids[$quiz->instance])) {
                // Filter out quizzes that are not using a certainty behaviour.
                continue;
            }
            $this->quizzes[$quiz->instance] = [
                    'id' => $quiz->instance,
                    'title' => $quiz->get_formatted_name(),
            ];
        }

        $this->attempttypes = [];
        foreach ([ 'latest', 'bestgrade', 'first' ] as $attempttype) {
            $this->attempttypes[] = [
                    'value' => $attempttype,
                    'label' => get_string('attempttype' . $attempttype, locallib::COMPONENT),
                    'selected' => $this->attempttype == $attempttype,
            ];
        }
    }

    /**
     * Report short identifier (used as shorthand for string identifiers, templates, etc.).
     * @return string Report short identifier. Defaults to unqualified class name.
     */
    public function get_type() {
        return substr(strrchr(get_class($this), '\\'), 1);
    }

    /**
     * Report localized title.
     * @return string Report localized title.
     */
    public function get_title() {
        return get_string('labelvalue', 'moodle', [
                'label' => get_string('pluginname', locallib::COMPONENT),
                'value' => get_string($this->get_type(), locallib::COMPONENT),
        ]);
    }

    /**
     * Return url parameters managed by this report, to be declared with $PAGE->set_url().
     * @return array Associative array of parameters.
     */
    public function get_url_params() {
        return [ 'attempttype' => $this->attempttype ];
    }

    /**
     * Return an array of selectors to be used by print_selectors().
     * @return array of HTML fragments.
     */
    abstract public function get_selectors();

    /**
     * Validate that user-provided data regarding selectors is correct.
     * @return bool Whether all is correct or not.
     */
    abstract public function validate_selectors();

    /**
     * Print report selectors form.
     */
    public function print_selectors() {
        global $OUTPUT;
        echo $OUTPUT->render_from_template(locallib::COMPONENT . '/reportselectors', [
                'courseid' => $this->courseid,
                'report' => $this->get_type(),
                'selectors' => $this->get_selectors(),
        ]);
    }

    /**
     * Print the actual report. Should only be called once validate_selectors() returns true.
     */
    abstract public function print_report();

    /**
     * Fetch users that have finished, real attempts on at least one of the given quizzes.
     * @param array|int|null $quizids One or several quiz ids to fetch data for.
     *                                Defaults to eligible quizzes in course (quizzes with a certainty behaviour).
     * @return array of users with 'id' and 'name' (user full name) fields.
     */
    protected function get_users_with_attempts_in_quizzes($quizids = null) {
        global $DB;
        if ($quizids === null) {
            $quizids = array_column($this->quizzes, 'id');
        }
        if (empty($quizids)) {
            return [];
        }
        $users = [];
        // Fetch all users with relevant quiz attempts in this course.
        $fields = "u." . implode(", u.", \core_user\fields::get_name_fields());
        [ $insql, $params ] = $DB->get_in_or_equal($quizids, SQL_PARAMS_NAMED);
        $sql = "SELECT u.id, $fields
                  FROM {quiz_attempts} qa
                  JOIN {quiz} quiz ON quiz.id = qa.quiz
                  JOIN {user} u ON u.id = qa.userid
                 WHERE quiz.id $insql AND qa.preview = 0 AND qa.timefinish > 0
              GROUP BY u.id
              ORDER BY u.lastname, u.firstname, u.id";
        foreach ($DB->get_records_sql($sql, $params) as $user) {
            $users[$user->id] = [
                    'id' => $user->id,
                    'name' => fullname($user),
            ];
        }
        return $users;
    }

    /**
     * Fetch groups that have finished, real attempts on at least one of the eligible quizzes in course.
     * @param array|null $useridswithattempts User IDs with attempts, if already fetched (use for optimization).
     * @return array of groups with 'id', 'name' and 'members' (list of user ids) fields.
     */
    protected function get_groups_with_attempts_in_quizzes($useridswithattempts = null) {
        if ($useridswithattempts === null) {
            $useridswithattempts = array_keys($this->get_users_with_attempts_in_quizzes());
        }
        $groups = [];
        foreach (groups_get_all_groups($this->courseid, 0, 0, "g.*", true) as $group) {
            $relevantuserids = array_intersect($group->members, $useridswithattempts);
            if (empty($relevantuserids)) {
                // No user with attempt in this group.
                continue;
            }
            $groups[$group->id] = [
                    'id' => $group->id,
                    'name' => format_string($group->name),
                    'members' => $relevantuserids,
            ];
        }
        return $groups;
    }
}
