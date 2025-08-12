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
 * Defines the renderer for the immediate feedback with student feedback behaviour.
 * @package    qbehaviour_studentfeedbackimmediate
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../studentfeedbackdeferred/renderer.php');

/**
 * Renderer for outputting parts of a question belonging to the immediate feedback with student feedback behaviour.
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qbehaviour_studentfeedbackimmediate_renderer extends qbehaviour_studentfeedbackdeferred_renderer {
    /**
     * {@inheritDoc}
     * @see qbehaviour_renderer::controls()
     * @param question_attempt $qa a question attempt.
     * @param question_display_options $options controls what should and should not be displayed.
     */
    public function controls(question_attempt $qa, question_display_options $options) {
        return parent::controls($qa, $options) . $this->submit_button($qa, $options);
    }
}
