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
 * Ajax script to submit student feedback for a question or a quiz.
 * @package    qbehaviour_studentfeedbackdeferred
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define( 'AJAX_SCRIPT', true );

require_once(dirname(__FILE__) . '/../../../../config.php');

require_login();

$outcome = new stdClass();
$outcome->success = true;
$outcome->error = '';
try {
    if (data_submitted() === false || !confirm_sesskey()) {
        throw new moodle_exception('invaliddataorsesskey', 'qbehaviour_studentfeedbackdeferred');
    }

    global $DB, $USER;
    $qasid = required_param( 'qasid', PARAM_INT );
    $feedback = urldecode(required_param( 'feedback', PARAM_TEXT ));
    $isgeneral = required_param( 'isgeneral', PARAM_BOOL );

    // Check permissions and user.
    $sql = "SELECT qza.userid, c.instanceid as cmid, qza.id as quizattemptid, qa.id as questionattemptid
              FROM {question_attempt_steps} qas
              JOIN {question_attempts} qa ON qa.id = qas.questionattemptid
              JOIN {question_usages} qu ON qu.id = qa.questionusageid
              JOIN {quiz_attempts} qza ON qza.uniqueid = qu.id
              JOIN {context} c ON c.id = qu.contextid
             WHERE qas.id = ?";
    $attemptstep = $DB->get_record_sql($sql, [ $qasid ], MUST_EXIST);
    $userid = $attemptstep->userid;
    $context = context_module::instance($attemptstep->cmid);

    if ($userid != $USER->id ||
            (!has_capability('mod/quiz:attempt', $context) && !has_capability('mod/quiz:preview', $context))) {
        throw new moodle_exception('cannotsubmitfeedback', 'qbehaviour_studentfeedbackdeferred');
    }

    $table = 'question_attempt_step_data';
    // Create or update behaviour var studentfeedback or generalstudentfeedback.
    // For naming conventions about -_, see question_attempt_step.
    $params = [ 'attemptstepid' => $qasid ];
    if ($isgeneral) {
        $params['name'] = '-_generalstudentfeedback';
    } else {
        $params['name'] = '-_studentfeedback';
    }
    $currentrecord = $DB->get_record($table, $params);
    if ($currentrecord === false) {
        $newrecord = array_merge($params, [ 'value' => $feedback ]);
        $outcome->success = $DB->insert_record($table, $newrecord, false);
    } else {
        $currentrecord->value = $feedback;
        $outcome->success = $DB->update_record($table, $currentrecord);
    }
    if ($outcome->success) {
        if ($isgeneral) {
            $event = \qbehaviour_studentfeedbackdeferred\event\student_general_feedback_updated::create([
                    'relateduserid' => $userid,
                    'other' => [ 'attemptid' => $attemptstep->quizattemptid ],
                    'context' => $context,
            ]);
        } else {
            $event = \qbehaviour_studentfeedbackdeferred\event\student_question_feedback_updated::create([
                    'relateduserid' => $userid,
                    'other' => [ 'attemptid' => $attemptstep->quizattemptid, 'qattemptid' => $attemptstep->questionattemptid ],
                    'context' => $context,
            ]);
        }
        $event->trigger();
    }

} catch ( Exception $e ) {
    $outcome->success = false;
    $outcome->error = $e->getMessage();
}
echo json_encode( $outcome );
die();
