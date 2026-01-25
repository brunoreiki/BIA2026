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
 * Defines the renderer for the deferred feedback with student feedback behaviour.
 * @package    qbehaviour_studentfeedbackdeferred
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_quiz\quiz_attempt;

/**
 * Renderer for outputting parts of a question belonging to the deferred feedback with student feedback behaviour.
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qbehaviour_studentfeedbackdeferred_renderer extends qbehaviour_renderer {

    /**
     * Generates a text box for student feedback after a question has been submitted.
     * @param question_attempt $qa a question attempt.
     * @param question_display_options $options controls what should and should not be displayed.
     * @return string HTML fragment for the text box.
     */
    protected function student_feedback(question_attempt $qa, question_display_options $options) {
        if (!$qa->get_state()->is_finished()) {
            return '';
        }

        $divid = $qa->get_outer_question_div_unique_id() . '_studentfeedback';
        $qastepid = $qa->get_last_step()->get_id();
        $quizattempt = quiz_attempt::create_from_usage_id($qa->get_usage_id());
        $ownattempt = $quizattempt->is_own_attempt();

        if ($ownattempt) {
            $this->page->requires->js_call_amd('qbehaviour_studentfeedbackdeferred/studentfeedback',
                    'setupForQuestion', [ $divid, $qastepid ]);
        }
        // For naming conventions about _, see question_attempt_step.
        $current = $qa->get_last_behaviour_var('_studentfeedback');
        if ($current === null) {
            $current = '';
        }
        $templatecontext = new stdClass();
        $templatecontext->divid = $divid;
        $templatecontext->value = $current;
        $templatecontext->ownattempt = $ownattempt;
        $templatecontext->general = false;
        return $this->output->render_from_template('qbehaviour_studentfeedbackdeferred/studentfeedback', $templatecontext);
    }

    /**
     * {@inheritDoc}
     * @see qbehaviour_renderer::feedback()
     * @param question_attempt $qa a question attempt.
     * @param question_display_options $options controls what should and should not be displayed.
     */
    public function feedback(question_attempt $qa, question_display_options $options) {
        return $this->student_feedback($qa, $options);
    }
}
