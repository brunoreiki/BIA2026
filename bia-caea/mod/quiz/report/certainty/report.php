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
 * This file defines the quiz_certainty report class.
 * @package   quiz_certainty
 * @copyright 2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../feedback/report.php');

/**
 * Report class definition for the certainty export quiz report.
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quiz_certainty_report extends quiz_feedback_report {

    /**
     * Returns whether this report makes any sense with the given behaviour.
     * Used for inheritance.
     * @param string $behaviour
     * @return boolean
     */
    protected static function is_compatible_behaviour($behaviour) {
        return $behaviour == 'certaintywithstudentfeedback' || $behaviour == 'certaintywithstudentfbdeferred';
    }

    /**
     * Returns a formatted list of question data fields.
     * Used for inheritance.
     * @param number $questionnumber Question number
     * @return string[]
     */
    protected static function get_report_question_fields($questionnumber) {
        $questionfields = parent::get_report_question_fields($questionnumber);
        // Add certainty field, if possible before student feedback (in order to keep order consistency).
        if (isset($questionfields['studentfeedback'])) {
            $studentfeedback = $questionfields['studentfeedback'];
            unset($questionfields['studentfeedback']);
        }
        $questionfields['certainty'] = get_string('certaintyx', 'quiz_certainty', $questionnumber);
        if (isset($studentfeedback)) {
            $questionfields['studentfeedback'] = $studentfeedback;
        }
        return $questionfields;
    }
}
