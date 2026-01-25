<?php
// This file is part of Moodle - http://moodle.org/
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
 * Event triggered when a user updates their feedback for a question attempt.
 * @package    qbehaviour_studentfeedbackdeferred
 * @copyright  2024 Astor Bizard
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qbehaviour_studentfeedbackdeferred\event;

/**
 * Event triggered when a user updates their feedback for a question attempt.
 * Required data for event creation: relateduserid, other['attemptid'] (quiz attempt id), other['qattemptid'] (question attempt id).
 * @copyright  2024 Astor Bizard
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class student_question_feedback_updated extends \core\event\base {

    /**
     * Init method.
     */
    protected function init() {
        $this->data['crud'] = 'u';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
    }

    /**
     * Returns description of what happened.
     * @return string
     */
    public function get_description() {
        return "The user with id '$this->relateduserid' has updated their feedback for question attempt with id " .
            "'" . $this->other['qattemptid'] . "' within the quiz with course module id '$this->contextinstanceid'.";
    }

    /**
     * Returns localised general event name.
     * @return string
     */
    public static function get_name() {
        return get_string('eventstudentquestionfeedbackupdated', 'qbehaviour_studentfeedbackdeferred');
    }

    /**
     * Returns relevant URL.
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/mod/quiz/review.php',
                [ 'attempt' => $this->other['attemptid'], 'cmid' => $this->contextinstanceid ]);
    }

    /**
     * Custom validation.
     * @throws \coding_exception
     */
    protected function validate_data() {
        parent::validate_data();

        if (!isset($this->relateduserid)) {
            throw new \coding_exception('The \'relateduserid\' must be set.');
        }

        if (!array_key_exists('attemptid', $this->other)) {
            throw new \coding_exception('The \'attemptid\' value must be set in other.');
        }

        if (!array_key_exists('qattemptid', $this->other)) {
            throw new \coding_exception('The \'qattemptid\' value must be set in other.');
        }
    }

    /**
     * {@inheritDoc}
     * @see \core\event\base::get_other_mapping()
     */
    public static function get_other_mapping() {
        return [
                'attemptid' => [ 'db' => 'quiz_attempts', 'restore' => 'quiz_attempt' ],
                'qattemptid' => [ 'db' => 'question_attempts', 'restore' => 'question_attempt' ],
        ];
    }
}
