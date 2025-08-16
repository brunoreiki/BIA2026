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
 * Question behaviour where students submit their whole quiz attempt, and then every question is graded.
 *
 * They can also give an optional feedback after their attempt, for each question and for the whole quiz attempt.
 * @package    qbehaviour_studentfeedbackdeferred
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../deferredfeedback/behaviour.php');

/**
 * Question behaviour for deferred feedback with student feedback.
 * @see qbehaviour_deferredfeedback
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qbehaviour_studentfeedbackdeferred extends qbehaviour_deferredfeedback {

    /**
     * {@inheritDoc}
     * @see question_behaviour::get_expected_data()
     */
    public function get_expected_data() {
        return array_merge(parent::get_expected_data(), [
                'studentfeedback' => PARAM_TEXT,
                'generalstudentfeedback' => PARAM_TEXT,
        ]);
    }

    /**
     * {@inheritDoc}
     * @see question_behaviour::get_our_resume_data()
     */
    protected function get_our_resume_data() {
        $data = parent::get_our_resume_data();
        if (($lastcomment = $this->qa->get_last_behaviour_var('_studentfeedback')) !== null) {
            $data['-_studentfeedback'] = $lastcomment;
        }
        if (($lastglobalcomment = $this->qa->get_last_behaviour_var('_generalstudentfeedback')) !== null) {
            $data['-_generalstudentfeedback'] = $lastglobalcomment;
        }
        return $data;
    }
}
