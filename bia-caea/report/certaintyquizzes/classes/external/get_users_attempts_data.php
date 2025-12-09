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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace report_certaintyquizzes\external;

use core_external\external_api;
use core_external\external_description;
use core_external\external_function_parameters;
use core_external\external_multiple_structure;
use core_external\external_value;
use report_certaintyquizzes\locallib;

/**
 * AJAX webservice returning attempt data details for given quiz, users and attempt type.
 * @package    report_certaintyquizzes
 * @copyright  2025 Astor Bizard, 2024 Loic Delon
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class get_users_attempts_data extends external_api {
    /**
     * Parameters for execute().
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
                'courseid' => new external_value(PARAM_INT, 'Course ID'),
                'quizid' => new external_value(PARAM_INT, 'Quiz ID in quiz table'),
                'attemptids' => new external_multiple_structure(new external_value(PARAM_INT, 'Attempt ID'), 'Attempt IDs'),
                'sortcolumn' => new external_value(PARAM_TEXT, 'Sort column for result (one of grade or lucidityindex)'),
        ]);
    }

    /**
     * Return attempt data details for given quiz, users and attempt type.
     * @param int $courseid Course ID.
     * @param int $quizid Quiz ID (id in quiz table).
     * @param array $attemptids Attempt IDs.
     * @param string $sortcolumn Sort column for result (one of grade or lucidityindex).
     */
    public static function execute($courseid, $quizid, $attemptids, $sortcolumn) {
        global $CFG, $DB;
        require_once($CFG->dirroot . '/question/engine/lib.php');
        require_once($CFG->libdir . '/graphlib.php');

        [ $courseid, $quizid, $attemptids, $sortcolumn ] = array_values(self::validate_parameters(self::execute_parameters(), [
                'courseid' => $courseid,
                'quizid' => $quizid,
                'attemptids' => $attemptids,
                'sortcolumn' => $sortcolumn,
        ]));
        $context = \context_course::instance($courseid);
        self::validate_context($context);
        require_capability('report/certaintyquizzes:view', $context);
        require_capability('mod/quiz:viewreports', $context);

        // Security check to ensure the capabilities we required actually cover the quiz.
        if ($DB->get_field('quiz', 'course', [ 'id' => $quizid ]) != $courseid) {
            throw new \invalid_parameter_exception('Invalid quiz id / course id combination.');
        }

        $hasdeclaredignorance = \qbehaviour_certaintywithstudentfbdeferred\locallib::exists_level_of_declared_ignorance();
        $table = new \html_table();
        $table->head = [
                get_string('defaultcoursestudent'),
                get_string('attemptnumber', 'mod_quiz'),
                get_string('gradeover100', locallib::COMPONENT),
                get_string('lucidityindex', locallib::BEHAVIOURCOMPONENT),
                get_string('metacognitiveindicators', locallib::BEHAVIOURCOMPONENT),
        ];
        $table->headspan = [
                1,
                1,
                1,
                1,
                $hasdeclaredignorance ? 2 : 1,
        ];
        $table->attributes['class'] = 'student-attempts-table';
        $table->responsive = false;

        [ $insql, $params ] = $DB->get_in_or_equal($attemptids, SQL_PARAMS_NAMED);
        $sql = "SELECT qa.id, qa.uniqueid, qa.userid, qa.attempt, MAX(qa2.attempt) as total
                  FROM {quiz_attempts} qa
                  JOIN (SELECT userid, quiz, attempt
                         FROM {quiz_attempts}
                       ) qa2 ON qa2.userid = qa.userid AND qa2.quiz = qa.quiz
                 WHERE qa.id $insql AND qa.quiz = :quizid
              GROUP BY qa.id";
        $params['quizid'] = $quizid;
        $attempts = $DB->get_records_sql($sql, $params);
        foreach ($attempts as $attempt) {
            $userid = $attempt->userid;
            $fullname = fullname(\core_user::get_user($userid, implode(',', \core_user\fields::get_name_fields())));
            $attemptnum = get_string('attemptxofy', locallib::COMPONENT, [ 'x' => $attempt->attempt, 'y' => $attempt->total ]);
            $attemptdata = \qbehaviour_certaintywithstudentfbdeferred\locallib::get_lucidity_indicators_for_attempt(
                $attempt->uniqueid,
                \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_GRADE |
                \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_LUCIDITY |
                \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_LUCIDITY_LABEL_COLOR |
                \qbehaviour_certaintywithstudentfbdeferred\locallib::INDICATOR_IGNORANCERATE
            );

            $row = [
                    \html_writer::link(new \moodle_url('/user/profile.php', [ 'id' => $userid, 'course' => $courseid ]), $fullname),
                    \html_writer::link(new \moodle_url('/mod/quiz/review.php', [ 'attempt' => $attempt->id ]), $attemptnum),
                    $attemptdata->gradeover100,
                    $attemptdata->lucidityindex,
            ];

            if ($hasdeclaredignorance) {
                $dircircle = \html_writer::span(
                    '',
                    'circle-indicator mr-2',
                    [ 'style' => '--shape-color:' . $attemptdata->ignorancerateindicatorcolor ]
                );
                $ignoranceratelabel = get_string('dira', locallib::COMPONENT, $attemptdata->declaredignorancerate);
                $row[] = \html_writer::div($dircircle . $ignoranceratelabel, 'd-flex align-items-center text-nowrap text-left');
            }

            $answerclasscircle = \html_writer::span(
                '',
                'circle-indicator mr-2',
                [ 'style' => '--shape-color:' . $attemptdata->lucidityindicatorcolor ]
            );
            $row[] = \html_writer::div(
                $answerclasscircle . $attemptdata->lucidityindicatorlabel,
                'd-flex align-items-center text-left'
            );

            $table->data[] = $row;
        }

        if (in_array($sortcolumn, [ 'grade', 'lucidityindex' ])) {
            $i = $sortcolumn === 'grade' ? 2 : 3;
            usort($table->data, function ($row1, $row2) use ($i) {
                return $row1[$i] - $row2[$i];
            });
        }

        return \html_writer::table($table);
    }

    /**
     * Return types for execute().
     * @return external_description
     */
    public static function execute_returns() {
        return new external_value(PARAM_RAW, 'HTML fragment of attempts data table');
    }
}
