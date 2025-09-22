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
 * Report options form for the feedback export quiz report.
 * @package    quiz_feedback
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_quiz\local\reports\attempts_report;
use mod_quiz\local\reports\attempts_report_options_form;

/**
 * Report options form class definition.
 *
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quiz_feedback_settings_form extends attempts_report_options_form {

    /**
     * {@inheritDoc}
     * @see attempts_report_options_form::other_preference_fields()
     * @param MoodleQuickForm $mform
     */
    protected function other_preference_fields(MoodleQuickForm $mform) {
        $mform->addGroup([
                $mform->createElement('advcheckbox', 'questiontext', '',
                        get_string('questiontext', 'quiz')),
                $mform->createElement('advcheckbox', 'response', '',
                        get_string('response', 'quiz')),
                $mform->createElement('advcheckbox', 'correctness', '',
                        get_string('correctness', 'quiz_feedback')),
                $mform->createElement('advcheckbox', 'studentfeedback', '',
                        get_string('studentfeedback', 'quiz_feedback')),
        ], 'coloptions', get_string('includefields', 'quiz_feedback'), [ ' ' ], false);
        $mform->disabledIf('questiontext', 'attempts', 'eq', attempts_report::ENROLLED_WITHOUT);
        $mform->disabledIf('response', 'attempts', 'eq', attempts_report::ENROLLED_WITHOUT);
        $mform->disabledIf('correctness', 'attempts', 'eq', attempts_report::ENROLLED_WITHOUT);
        $mform->disabledIf('studentfeedback', 'attempts', 'eq', attempts_report::ENROLLED_WITHOUT);
    }

    /**
     * Validate form data.
     *
     * @param array $data array of ("fieldname"=>value) of submitted data
     * @param array $files array of uploaded files "element_name"=>tmp_file_path
     * @return array of "element_name"=>"error_description" if there are errors,
     *         or an empty array if everything is OK (true allowed for backwards compatibility too).
     */
    public function validation($data, $files) {
        $errors = parent::validation($data, $files);

        if ($data['attempts'] != attempts_report::ENROLLED_WITHOUT && !(
                $data['questiontext'] || $data['response'] || $data['correctness'] || $data['studentfeedback'])) {
            $errors['coloptions'] = get_string('reportmustselectstate', 'quiz');
        }

        return $errors;
    }
}
