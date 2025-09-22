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
 * Report options form for the certainty export quiz report.
 * @package    quiz_certainty
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../feedback/feedback_form.php');

use mod_quiz\local\reports\attempts_report;

/**
 * Report options form class definition.
 *
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quiz_certainty_settings_form extends quiz_feedback_settings_form {

    /**
     * {@inheritDoc}
     * @see quiz_feedback_settings_form::other_preference_fields()
     * @param MoodleQuickForm $mform
     */
    protected function other_preference_fields(MoodleQuickForm $mform) {
        parent::other_preference_fields($mform);
        $mform->addElement('advcheckbox', 'certainty', '', get_string('studentcertainty', 'quiz_certainty'));
        $mform->disabledIf('certainty', 'attempts', 'eq', attempts_report::ENROLLED_WITHOUT);
    }
}
