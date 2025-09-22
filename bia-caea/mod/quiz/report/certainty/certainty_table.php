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
 * Report table for the certainty export quiz report.
 * @package    quiz_certainty
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../feedback/feedback_table.php');

use mod_quiz\local\reports\attempts_report_table;
use qbehaviour_certaintywithstudentfbdeferred\certaintylevel;

/**
 * Report table class definition for the certainty export quiz report.
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quiz_certainty_table extends quiz_feedback_table {

    /**
     * @var string $tableid Name of the report table. Used for inheritance, it overrides the parent one.
     */
    protected static $tableid = 'mod-quiz-report-certainty-report';

    /**
     * {@inheritDoc}
     * @see quiz_feedback_table::get_data_fields()
     */
    protected static function get_data_fields() {
        $datafields = parent::get_data_fields();
        $datafields['certainty'] = '-certainty';
        return $datafields;
    }

    /**
     * Process a tagged data column, replacing it using attempt step data.
     * @param object $stepdata Attempt step data to replace tagged data.
     * @param string $field Attempt step data field or behaviour var.
     * @return string Processed data.
     */
    public function process_data_column($stepdata, $field) {
        global $DB;
        if ($field == '-certainty') {
            $behaviourvar = $field;
            // Retrieve all steps data for this behaviour var, to get the last one.
            $sql = "SELECT qasd.*
                       FROM {question_attempt_step_data} qasd
                       JOIN {question_attempt_steps} qas ON qas.id = qasd.attemptstepid
                       JOIN {question_attempts} qa ON qa.id = qas.questionattemptid
                       WHERE qas.questionattemptid = ? AND qasd.name = ?
                       ORDER BY qasd.attemptstepid";
            $attemptdata = $DB->get_records_sql($sql, [ $stepdata->questionattemptid, $behaviourvar ]);

            $lastvar = '-';
            foreach ($attemptdata as $data) {
                // Loop to get last var.
                $lastvar = $data->value;
            }

            if ($lastvar != '-') {
                // Format certainty to a readable name.
                $certainty = certaintylevel::get_levels()[$lastvar];
                $value = $certainty->percentage . ' (' . certaintylevel::get_levels()[$lastvar]->label . ')';
            } else {
                $value = $lastvar;
            }
            return trim($value);
        } else {
            return parent::process_data_column($stepdata, $field);
        }
    }

    /**
     * {@inheritDoc}
     * @see attempts_report_table::requires_extra_data()
     */
    protected function requires_extra_data() {
        return true;
    }
}
