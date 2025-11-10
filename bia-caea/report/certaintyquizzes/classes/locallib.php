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

namespace report_certaintyquizzes;

/**
 * Utility class for the plugin.
 * @package    report_certaintyquizzes
 * @copyright  2025 Astor Bizard
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class locallib {

    // TODO: add list of all comments for student in single student view.
    // TODO: view all general feedback on quiz on Single Quiz report.
    // TODO: view all feedback on a question, classified by chosen answer (and certainty level?).

    /**
     * @var string Frankenstyle name of this plugin
     */
    public const COMPONENT = 'report_certaintyquizzes';

    /**
     * @var string Frankenstyle name of this plugin
     */
    public const BEHAVIOURCOMPONENT = \qbehaviour_certaintywithstudentfbdeferred\locallib::COMPONENT;

    /**
     * Render a chart hidden behind a loading icon. Loading icon has to be removed via javascript (caller responsibility).
     * @param \core\chart_base $chart The chart to render.
     * @param string $identifier The data-role attribute to the chart container (will be prefixed by plugin frankenstyle name).
     * @return string HTML fragment.
     */
    public static function render_chart_with_loading_icon(\core\chart_base $chart, $identifier) {
        global $OUTPUT;
        return $OUTPUT->render_from_template(static::BEHAVIOURCOMPONENT . '/loadingchart', [
                'content' => $OUTPUT->render($chart),
                'role' => static::COMPONENT . '_' . $identifier,
        ]);
    }

    /**
     * Fetch specific attempt (best, last, first) on given quiz for specified users.
     * @param int $quizid The quiz id (id in quiz table, not cmid).
     * @param string $attempttype One of 'best', 'last', 'first'.
     * @param array|null $userids User ids to retrieve attempts of. Defaults to all users with finished, real attempts on the quiz.
     * @return array Records of quiz attempts, indexed by user ids.
     */
    public static function get_specific_attempt($quizid, $attempttype, $userids = null) {
        global $DB;

        if ($userids === null) {
            $sql = "SELECT userid
                      FROM {quiz_attempts}
                     WHERE preview = 0 AND quiz = :quizid AND timefinish > 0
                  GROUP BY userid";
            $userids = $DB->get_fieldset_sql($sql, [ 'quizid' => $quizid ]);
        }

        if (empty($userids)) {
            return [];
        }

        if ($attempttype == 'latest') { // Last attempt.
            $function = 'MAX';
            $field = 'timefinish';
        } else if ($attempttype == 'bestgrade') { // Best attempt.
            $function = 'MAX';
            $field = 'sumgrades';
        } else { // First attempt.
            $function = 'MIN';
            $field = 'timefinish';
        }

        list($insql, $params) = $DB->get_in_or_equal($userids, SQL_PARAMS_NAMED);
        $sql = "SELECT qa.userid, qa.id, qa.uniqueid, qa.attempt, MAX(qa3.attempt) as totalattempts
                  FROM {quiz_attempts} qa
                  JOIN (SELECT userid, quiz, $function($field) AS $field
                          FROM {quiz_attempts}
                      GROUP BY quiz, userid
                       ) qa2 ON qa2.userid = qa.userid AND qa2.quiz = qa.quiz AND qa2.$field = qa.$field
                  JOIN (SELECT userid, quiz, attempt
                          FROM {quiz_attempts}
                       ) qa3 ON qa3.userid = qa.userid AND qa3.quiz = qa.quiz
                 WHERE qa.userid $insql AND qa.quiz = :quizid AND qa.timefinish > 0 AND qa.preview = 0
              GROUP BY qa.userid";
        $params['quizid'] = $quizid;
        return $DB->get_records_sql($sql, $params);
    }

    /**
     * Check if course contains any quiz with a certainty behaviour.
     * @param int $courseid Course ID.
     * @return bool Whether course contains at least one such quiz.
     */
    public static function certainty_quizzes_exist_in_course($courseid) {
        global $DB;
        $sql = "SELECT id
                  FROM {quiz}
                 WHERE course = :courseid
                       AND preferredbehaviour IN ('certaintywithstudentfeedback','certaintywithstudentfbdeferred')";
        return $DB->record_exists_sql($sql, [ 'courseid' => $courseid ]);
    }

    /**
     * Check if course contains any attempted quiz with a certainty behaviour (counts only finished, real attempts).
     * @param int $courseid Course ID.
     * @param int|null $userid If provided, check for attempts of the given user only, else check for all users.
     * @return bool Whether course contains at least one such attempt.
     */
    public static function attempts_exist_for_certainty_quizzes_in_course($courseid, $userid = null) {
        global $DB;
        $sql = "SELECT qa.id
                  FROM {quiz} quiz
                  JOIN {quiz_attempts} qa ON qa.quiz = quiz.id
                 WHERE quiz.course = :courseid AND qa.preview = 0 AND qa.timefinish > 0
                       AND quiz.preferredbehaviour IN ('certaintywithstudentfeedback','certaintywithstudentfbdeferred')";
        $params = [ 'courseid' => $courseid ];
        if ($userid !== null) {
            $sql .= " AND qa.userid = :userid";
            $params['userid'] = $userid;
        }
        return $DB->record_exists_sql($sql, $params);
    }
}
