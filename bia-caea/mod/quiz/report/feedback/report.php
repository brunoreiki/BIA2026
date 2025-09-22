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
 * This file defines the quiz_feedback report class.
 * @package   quiz_feedback
 * @copyright 2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_quiz\local\reports\attempts_report;

/**
 * Report class definition for the feedback export quiz report.
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quiz_feedback_report extends attempts_report {

    /**
     * Returns whether this report makes any sense with the given behaviour.
     * Used for inheritance of this class.
     * @param string $behaviour
     * @return boolean
     */
    protected static function is_compatible_behaviour($behaviour) {
        return $behaviour == 'studentfeedbackdeferred' || $behaviour == 'studentfeedbackimmediate';
    }

    /**
     * Returns a formatted list of question data fields.
     * Used for inheritance of this class.
     * @param number $questionnumber Question number
     * @return string[]
     */
    protected static function get_report_question_fields($questionnumber) {
        return [
                'question' => get_string('questionx', 'question', $questionnumber),
                'response' => get_string('responsex', 'quiz_feedback', $questionnumber),
                'correctness' => get_string('correctnessx', 'quiz_feedback', $questionnumber),
                'studentfeedback' => get_string('studentfeedbackx', 'quiz_feedback', $questionnumber),
        ];
    }

    /**
     * Display the report.
     * @param object $quiz this quiz.
     * @param object $cm the course-module for this quiz.
     * @param object $course the course we are in.
     */
    public function display($quiz, $cm, $course) {
        global $CFG, $DB;

        $pluginname = substr(get_class($this), 0, -7);
        $reportname = substr($pluginname, 5);

        if (!static::is_compatible_behaviour($quiz->preferredbehaviour)) {
            $url = new moodle_url($CFG->wwwroot . '/mod/quiz/view.php', [ 'id' => $cm->id ]);
            if (get_string_manager()->string_exists('incompatiblebehaviour', $pluginname)) {
                $reason = get_string('incompatiblebehaviour', $pluginname);
            } else {
                $reason = get_string('incompatiblebehaviour', 'quiz_feedback');
            }
            redirect($url, $reason, null, \core\output\notification::NOTIFY_ERROR);
        }

        require_once(__DIR__ . '/../' . $reportname . '/' . $reportname . '_form.php');

        list($currentgroup, $studentsjoins, $groupstudentsjoins, $allowedjoins) = $this->init(
                $reportname, 'quiz_' . $reportname . '_settings_form', $quiz, $cm, $course);

        require_once(__DIR__ . '/../' . $reportname . '/' . $reportname . '_options.php');
        $optionsclass = 'quiz_' . $reportname . '_options';
        $options = new $optionsclass($reportname, $quiz, $cm, $course);

        if ($fromform = $this->form->get_data()) {
            $options->process_settings_from_form($fromform);
        } else {
            $options->process_settings_from_params();
        }

        $this->form->set_data($options->get_initial_form_data());

        // Load the required questions.
        $questions = quiz_report_get_significant_questions($quiz);

        // Prepare for downloading, if applicable.
        $courseshortname = format_string($course->shortname, true, [ 'context' => context_course::instance($course->id) ]);
        require_once(__DIR__ . '/../' . $reportname . '/' . $reportname . '_table.php');
        $tableclass = 'quiz_' . $reportname . '_table';
        $table = new $tableclass($quiz, $this->context, $this->qmsubselect,
                $options, $groupstudentsjoins, $studentsjoins, $questions, $options->get_url());
        $filename = quiz_report_download_filename(get_string($reportname . 'filename', $pluginname),
                $courseshortname, $quiz->name);
        $table->is_downloading($options->download, $filename,
                $courseshortname . ' ' . format_string($quiz->name, true));
        if ($table->is_downloading()) {
            raise_memory_limit(MEMORY_EXTRA);
        }

        $this->hasgroupstudents = false;
        if (!empty($groupstudentsjoins->joins)) {
            $sql = "SELECT DISTINCT u.id
                      FROM {user} u
                    $groupstudentsjoins->joins
                     WHERE $groupstudentsjoins->wheres";
            $this->hasgroupstudents = $DB->record_exists_sql($sql, $groupstudentsjoins->params);
        }
        $hasstudents = false;
        if (!empty($studentsjoins->joins)) {
            $sql = "SELECT DISTINCT u.id
                    FROM {user} u
                    $studentsjoins->joins
                    WHERE $studentsjoins->wheres";
            $hasstudents = $DB->record_exists_sql($sql, $studentsjoins->params);
        }
        if ($options->attempts == self::ALL_WITH) {
            // This option is only available to users who can access all groups in
            // groups mode, so setting allowed to empty (which means all quiz attempts
            // are accessible, is not a security porblem.
            $allowedjoins = new \core\dml\sql_join();
        }

        $this->process_actions($quiz, $cm, $currentgroup, $groupstudentsjoins, $allowedjoins, $options->get_url());

        $hasquestions = quiz_has_questions($quiz->id);

        // Start output.
        if (!$table->is_downloading()) {
            // Only print headers if not asked to download data.
            $this->print_standard_header_and_messages($cm, $course, $quiz,
                    $options, $currentgroup, $hasquestions, $hasstudents);

            // Print the display options.
            $this->form->display();
        }

        $hasstudents = $hasstudents && (!$currentgroup || $this->hasgroupstudents);
        if ($hasquestions && ($hasstudents || $options->attempts == self::ALL_WITH)) {

            $table->setup_sql_queries($allowedjoins);

            if (!$table->is_downloading()) {
                // Print information on the grading method.
                if ($strattempthighlight = quiz_report_highlighting_grading_method(
                        $quiz, $this->qmsubselect, $options->onlygraded)) {
                    echo '<div class="quizattemptcounts">' . $strattempthighlight . '</div>';
                }
            }

            // Define table columns.
            $columns = [];
            $headers = [];

            if (!$table->is_downloading() && $options->checkboxcolumn) {
                $columns[] = 'checkbox';
                $headers[] = null;
            }

            $this->add_user_columns($table, $columns, $headers);
            $this->add_state_column($columns, $headers);

            $this->add_time_columns($columns, $headers);

            $this->add_grade_columns($quiz, $options->usercanseegrades, $columns, $headers, false);

            if ($options->showstudentfeedback) {
                $columns[] = 'generalstudentfeedback1';
                $headers[] = get_string('generalstudentfeedback', 'quiz_feedback');
                $table->no_sorting('generalstudentfeedback1'); // Do not sort by text fields.
            }
            foreach ($questions as $id => $question) {
                foreach (static::get_report_question_fields($question->number) as $columnname => $header) {
                    if (!isset($options->{'show' . $columnname}) || $options->{'show' . $columnname}) {
                        $columns[] = $columnname . $id;
                        $headers[] = $header;
                        $table->no_sorting($columnname . $id); // Do not sort by text fields.
                    }
                }
            }

            $this->set_up_table_columns($table, $columns, $headers, $this->get_base_url(), $options, true);
            $table->set_attribute('id', $reportname);

            $table->out($options->pagesize, true);
        }
    }
}
