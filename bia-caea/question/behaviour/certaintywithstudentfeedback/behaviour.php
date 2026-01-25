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
 * Question behaviour where students can submit questions one at a time for immediate feedback.
 *
 * They can also give their certainty that their answer will be evaluated as correct,
 * as well as an optional feedback after each question or after their attempt.
 * @package    qbehaviour_certaintywithstudentfeedback
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../studentfeedbackimmediate/behaviour.php');

/**
 * Question behaviour for immediate feedback with certainty and student feedback.
 * @see qbehaviour_immediatefeedback
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qbehaviour_certaintywithstudentfeedback extends qbehaviour_studentfeedbackimmediate {

    /**
     * {@inheritDoc}
     * @see qbehaviour_immediatefeedback::get_expected_data()
     */
    public function get_expected_data() {
        return array_merge(parent::get_expected_data(), array(
                'certainty' => PARAM_RAW
        ));
    }

    /**
     * {@inheritDoc}
     * @see question_behaviour_with_save::is_complete_response()
     * @param question_attempt_step $pendingstep contains the new responses.
     */
    protected function is_complete_response(question_attempt_step $pendingstep) {
        return parent::is_complete_response($pendingstep) && $pendingstep->has_behaviour_var('certainty');
    }

    /**
     * {@inheritDoc}
     * @see question_behaviour_with_save::is_same_response()
     * @param question_attempt_step $pendingstep contains the new responses.
     */
    protected function is_same_response(question_attempt_step $pendingstep) {
        return parent::is_same_response($pendingstep) &&
            $pendingstep->get_behaviour_var('certainty') === $this->qa->get_last_step()->get_behaviour_var('certainty');
    }

    /**
     * {@inheritDoc}
     * @see question_behaviour::get_our_resume_data()
     */
    protected function get_our_resume_data() {
        $data = array();
        $lastcertainty = $this->qa->get_last_behaviour_var('certainty');
        if ($lastcertainty) {
            $data['-certainty'] = $lastcertainty;
        }
        return $data;
    }
}
