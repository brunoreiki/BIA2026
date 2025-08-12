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
 * Question behaviour type for immediate feedback with certainty and student feedback behaviour.
 * @package    qbehaviour_certaintywithstudentfeedback
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../certaintywithstudentfbdeferred/behaviourtype.php');

/**
 * Question behaviour type information for immediate feedback with certainty and student feedback behaviour.
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qbehaviour_certaintywithstudentfeedback_type extends qbehaviour_certaintywithstudentfbdeferred_type {

    /**
     * {@inheritDoc}
     * @see question_behaviour_type::is_archetypal()
     */
    public function is_archetypal() {
        return true;
    }

    /**
     * {@inheritDoc}
     * @see question_behaviour_type::can_questions_finish_during_the_attempt()
     */
    public function can_questions_finish_during_the_attempt() {
        return true;
    }

    /**
     * {@inheritDoc}
     * @see question_behaviour_type::get_unused_display_options()
     */
    public function get_unused_display_options() {
        return array();
    }
}
