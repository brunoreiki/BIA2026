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
 * Report table for the feedback export quiz report.
 * @package    quiz_feedback
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_quiz\local\reports\attempts_report_options;
use mod_quiz\local\reports\attempts_report_table;

/**
 * Report table class definition for the feedback export quiz report.
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quiz_feedback_table extends attempts_report_table {

    /**
     * @var string $tableid Name of the report table. Used for inheritance of this class.
     */
    protected static $tableid = 'mod-quiz-report-feedback-report';

    /**
     * Constructor
     * @param object $quiz
     * @param context $context
     * @param string $qmsubselect
     * @param attempts_report_options $options
     * @param \core\dml\sql_join $groupstudentsjoins Contains joins, wheres, params
     * @param \core\dml\sql_join $studentsjoins Contains joins, wheres, params
     * @param array $questions
     * @param moodle_url $reporturl
     */
    public function __construct($quiz, $context, $qmsubselect,
            $options, $groupstudentsjoins, $studentsjoins, $questions, $reporturl) {
        parent::__construct(static::$tableid, $quiz , $context,
                $qmsubselect, $options, $groupstudentsjoins, $studentsjoins, $questions, $reporturl);
    }

    /**
     * {@inheritDoc}
     * @see table_sql::build_table()
     */
    public function build_table() {
        if (!$this->rawdata) {
            return;
        }

        $this->strtimeformat = get_string('strftimedatetime', 'langconfig');
        parent::build_table();
    }

    /**
     * Returns the list of fields containing attempt data.
     * Used for inheritance of this class.
     * @return string[]
     */
    protected static function get_data_fields() {
        return [
                'question' => 'questionsummary',
                'response' => 'responsesummary',
                'correctness' => 'correctness',
                'studentfeedback' => '-_studentfeedback',
                'generalstudentfeedback' => '-_generalstudentfeedback',
        ];
    }

    /**
     * {@inheritDoc}
     * @see flexible_table::other_cols()
     * @param string $column Table column name.
     * @param object $attempt Quiz attempt data (one attempt per row).
     */
    public function other_cols($column, $attempt) {
        // Column names / fields to search for.
        $datafields = static::get_data_fields();

        foreach ($datafields as $datafield => $attemptfield) {
            $matches = [];
            if (preg_match('/^' . $datafield . '(\d+)$/', $column, $matches)) {
                // This column is a data column.
                $slot = $matches[1];
                if ($attempt->usageid == 0 || !isset($this->lateststeps[$attempt->usageid][$slot])) {
                    return '-'; // No data available.
                } else {
                    $stepdata = $this->lateststeps[$attempt->usageid][$slot];
                    return $this->process_data_column($stepdata, $attemptfield);
                }
            }
        }

        return null;
    }

    /**
     * Process a tagged data column, replacing it using attempt step data.
     * @param object $stepdata Attempt step data to replace tagged data.
     * @param string $field Attempt step data field or behaviour var.
     * @return string Processed data.
     */
    public function process_data_column($stepdata, $field) {
        global $DB;

        $icon = '';
        if (substr($field, 0, 1) == '-') { // It is a behaviour var.
            $behaviourvar = $field;
            // Retrieve all steps data for this behaviour var, to get the last one.
            $sql = "SELECT qasd.*
                       FROM {question_attempt_step_data} qasd
                       JOIN {question_attempt_steps} qas ON qas.id = qasd.attemptstepid
                       JOIN {question_attempts} qa ON qa.id = qas.questionattemptid
                       WHERE qas.questionattemptid = ? AND qasd.name = ?
                       ORDER BY qasd.attemptstepid";
            $attemptdata = $DB->get_records_sql($sql, [ $stepdata->questionattemptid, $behaviourvar ]);

            // Retrieve last var.
            $value = !empty($attemptdata) ? end($attemptdata)->value : '-';

        } else if ($field == 'correctness') {
            $icon = $this->icon_for_fraction($stepdata->fraction);
            $value = get_string(question_state::graded_state_for_fraction($stepdata->fraction)->get_feedback_class(), 'question');
        } else {
            // This is a step data field, use it as-is.
            $value = $stepdata->$field;
            if (is_null($value)) {
                return '-';
            }
        }

        $value = trim($value);

        if (!$this->is_downloading() || $this->is_downloading() == 'html') {
            $value = s($value);
        }

        return $icon . $value;
    }

    /**
     * {@inheritDoc}
     * @see attempts_report_table::requires_extra_data()
     */
    protected function requires_extra_data() {
        return true;
    }
}
