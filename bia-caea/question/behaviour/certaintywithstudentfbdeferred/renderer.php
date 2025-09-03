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
 * Defines the renderer for the deferred feedback with certainty and student feedback behaviour.
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

use qbehaviour_certaintywithstudentfbdeferred\answersubcategory;
use qbehaviour_certaintywithstudentfbdeferred\certaintylevel;
use qbehaviour_certaintywithstudentfbdeferred\locallib;

require_once(__DIR__ . '/../studentfeedbackdeferred/renderer.php');

/**
 * Renderer for outputting parts of a question belonging to the deferred feedback with certainty and student feedback behaviour.
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qbehaviour_certaintywithstudentfbdeferred_renderer extends qbehaviour_studentfeedbackdeferred_renderer {
    /**
     * {@inheritDoc}
     * @see qbehaviour_renderer::controls()
     * @param question_attempt $qa a question attempt.
     * @param question_display_options $options controls what should and should not be displayed.
     */
    public function controls(question_attempt $qa, question_display_options $options) {
        // Controls for this behaviour are only the table for certainty selection.

        $templatedata = new stdClass();
        $templatedata->controlname = $qa->get_behaviour_field_name('certainty');
        $templatedata->readonly = $options->readonly;
        $templatedata->addprompt = $qa->get_state() == question_state::$invalid &&
                !$qa->get_last_step()->has_behaviour_var('certainty');
        $templatedata->certaintylevels = [];

        $current = $qa->get_last_behaviour_var('certainty', -1);
        foreach (certaintylevel::get_levels() as $i => $certaintylevel) {
            $level = new stdClass();
            $level->i = $i;
            $level->name = $certaintylevel->label;
            if ($certaintylevel->useopenlabel && !in_array($qa->get_question()->get_type_name(), [ 'truefalse', 'multichoice' ])) {
                // This is an open question, use open label.
                $level->name = get_string($certaintylevel->name . '_open', locallib::COMPONENT);
            }
            $level->checked = ($current == $i);
            $level->percentage = $certaintylevel->percentage;
            $templatedata->certaintylevels[] = $level;
        }

        return $this->output->render_from_template(locallib::COMPONENT . '/certaintyselection', $templatedata);
    }

    /**
     * Defines feedback display after a question has been submitted, giving information about answer categorization.
     * @param question_attempt $qa a question attempt.
     * @param question_display_options $options controls what should and should not be displayed.
     * @return string HTML fragment for our feedback.
     */
    protected function behaviour_feedback(question_attempt $qa, question_display_options $options) {
        $feedback = '';
        if ($options->correctness == question_display_options::VISIBLE) {
            // Display a sentence describing the category of the answer (given correctness and certainty).
            $subcategory = answersubcategory::subcategorize_answer($qa);
            if ($subcategory !== null) {
                $feedback .= html_writer::div('', 'chip', [ 'style' => 'background-color:' . $subcategory->color ]);
                $feedback .= $subcategory->detailedlabel;
            }
        }
        return $feedback;
    }

    /**
     * {@inheritDoc}
     * @see qbehaviour_renderer::feedback()
     * @param question_attempt $qa a question attempt.
     * @param question_display_options $options controls what should and should not be displayed.
     */
    public function feedback(question_attempt $qa, question_display_options $options) {
        // Add behaviour information about certainty.
        $feedback = $this->behaviour_feedback($qa, $options);

        // Add student feedback field if needed.
        $subcategory = answersubcategory::subcategorize_answer($qa);
        if ($subcategory !== null && $subcategory->answerclass->feedbackfield) {
            $feedback .= $this->student_feedback($qa, $options);
        }

        return $feedback;
    }
}
