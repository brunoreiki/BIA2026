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
 * General Data Protection Regulation directive compliance.
 * @package    qbehaviour_studentfeedbackdeferred
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qbehaviour_studentfeedbackdeferred\privacy;

use core_privacy\local\metadata\collection;
use core_privacy\local\request\approved_contextlist;
use core_privacy\local\request\approved_userlist;
use core_privacy\local\request\contextlist;
use core_privacy\local\request\userlist;
use core_privacy\local\request\writer;
use context;
use context_module;
use question_attempt;
use question_attempt_step;
use question_engine;
use stdClass;

/**
 * General Data Protection Regulation compliance implementation class definition.
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\provider,
                          \core_privacy\local\request\plugin\provider,
                          \core_privacy\local\request\core_userlist_provider {

    /**
     * @var string $behaviourname The name for this question behaviour. Used for inheritance of this class.
     */
    public static $behaviourname = 'studentfeedbackdeferred';

    /**
     * Returns the fields and user preferences which are considered personal data.
     *
     * @param collection $collection a reference to the collection to use to store the metadata.
     * @return collection the updated collection of metadata items.
     */
    public static function get_metadata(collection $collection): collection {
        $collection->add_database_table(
                'question_attempt_step_data',
                [
                        'name' => 'privacy:metadata:name',
                        'value' => 'privacy:metadata:value',
                ],
                'privacy:metadata:attemptstepdata');
        return $collection;
    }

    /**
     * Returns the list of behaviour vars containing personal data this plugin manages.
     *
     * @return string[]
     */
    protected static function behaviour_vars() {
        return [ '-_generalstudentfeedback', '-_studentfeedback' ];
    }

    /**
     * Updates userlist context with all user who hold any personal data in a specific context.
     *
     * @param userlist $userlist The context information to get information for and user list to append data to.
     */
    public static function get_users_in_context(userlist $userlist) {
        global $DB;
        $context = $userlist->get_context();

        if ($context->contextlevel != CONTEXT_MODULE) {
            return;
        }

        $params = [
                $context->instanceid,
                static::$behaviourname,
        ];

        list($invars, $inparams) = $DB->get_in_or_equal(static::behaviour_vars(), SQL_PARAMS_QM);
        foreach ($inparams as $param) {
            $params[] = $param;
        }

        $sql = "SELECT DISTINCT qqa.userid
                  FROM {quiz_attempts} qqa
                  JOIN {course_modules} cm ON cm.instance = qqa.quiz
                  JOIN {modules} m ON m.id = cm.module AND m.name = 'quiz'
                  JOIN {question_attempts} qa ON qa.questionusageid = qqa.uniqueid
                  JOIN {question_attempt_steps} qas ON qas.questionattemptid = qa.id
                  JOIN {question_attempt_step_data} qasd ON qasd.attemptstepid = qas.id
                 WHERE cm.id = ? AND qa.behaviour = ? AND qasd.name {$invars}";
        $userlist->add_from_sql('userid', $sql, $params);
    }

    /**
     * Delete multiple users within a single context.
     *
     * @param approved_userlist $userlist The approved context and user information to delete information for.
     */
    public static function delete_data_for_users(approved_userlist $userlist) {
        global $DB;

        $context = $userlist->get_context();

        if ($userlist->count() === 0 || $context->contextlevel != CONTEXT_MODULE) {
            return;
        }

        $params = [
                $context->instanceid,
                static::$behaviourname,
        ];

        list($invars, $inparams) = $DB->get_in_or_equal(static::behaviour_vars(), SQL_PARAMS_QM);
        foreach ($inparams as $param) {
            $params[] = $param;
        }

        list($inusers, $inparams) = $DB->get_in_or_equal($userlist->get_userids(), SQL_PARAMS_QM);
        foreach ($inparams as $param) {
            $params[] = $param;
        }

        $sql = "SELECT qasd.id
                  FROM {quiz_attempts} qqa
                  JOIN {course_modules} cm ON cm.instance = qqa.quiz
                  JOIN {modules} m ON m.id = cm.module AND m.name = 'quiz'
                  JOIN {question_attempts} qa ON qa.questionusageid = qqa.uniqueid
                  JOIN {question_attempt_steps} qas ON qas.questionattemptid = qa.id
                  JOIN {question_attempt_step_data} qasd ON qasd.attemptstepid = qas.id
                 WHERE cm.id = ? AND qa.behaviour = ? AND qasd.name {$invars} AND qqa.userid {$inusers}";

        $attemptstepdataids = $DB->get_record_sql($sql, $params);

        $DB->delete_records_list('question_attempt_step_data', 'id', $attemptstepdataids);
    }

    /**
     * Delete all user data for the specified user, in the specified contexts.
     *
     * @param approved_contextlist $contextlist a list of contexts approved for deletion.
     */
    public static function delete_data_for_user(approved_contextlist $contextlist) {
        global $DB;

        if ($contextlist->count() === 0) {
            return;
        }

        $userid = $contextlist->get_user()->id;

        $params = [
                static::$behaviourname,
                $userid,
                CONTEXT_MODULE,
        ];

        list($invars, $inparams) = $DB->get_in_or_equal(static::behaviour_vars(), SQL_PARAMS_QM);
        foreach ($inparams as $param) {
            $params[] = $param;
        }

        list($insql, $inparams) = $DB->get_in_or_equal($contextlist->get_contextids(), SQL_PARAMS_QM);
        foreach ($inparams as $param) {
            $params[] = $param;
        }

        $sql = "SELECT qasd.id
                  FROM {quiz_attempts} qqa
                  JOIN {course_modules} cm ON cm.instance = qqa.quiz
                  JOIN {modules} m ON m.id = cm.module AND m.name = 'quiz'
                  JOIN {context} ctx ON ctx.instanceid = cm.id
                  JOIN {question_attempts} qa ON qa.questionusageid = qqa.uniqueid
                  JOIN {question_attempt_steps} qas ON qas.questionattemptid = qa.id
                  JOIN {question_attempt_step_data} qasd ON qasd.attemptstepid = qas.id
                 WHERE qa.behaviour = ? AND qqa.userid = ? AND ctx.contextlevel = ? AND qasd.name {$invars} AND ctx.id {$insql}";

        $attemptstepdataids = $DB->get_record_sql($sql, $params);

        $DB->delete_records_list('question_attempt_step_data', 'id', $attemptstepdataids);
    }

    /**
     * Delete all data for all users in the specified context.
     *
     * @param context $context the context to delete in.
     */
    public static function delete_data_for_all_users_in_context(context $context) {
        global $DB;

        if ($context->contextlevel != CONTEXT_MODULE) {
            return;
        }

        $params = [
                $context->instanceid,
                static::$behaviourname,
        ];

        list($invars, $inparams) = $DB->get_in_or_equal(static::behaviour_vars(), SQL_PARAMS_QM);
        foreach ($inparams as $param) {
            $params[] = $param;
        }

        $sql = "SELECT qasd.id
                  FROM {quiz_attempts} qqa
                  JOIN {course_modules} cm ON cm.instance = qqa.quiz
                  JOIN {modules} m ON m.id = cm.module AND m.name = 'quiz'
                  JOIN {question_attempts} qa ON qa.questionusageid = qqa.uniqueid
                  JOIN {question_attempt_steps} qas ON qas.questionattemptid = qa.id
                  JOIN {question_attempt_step_data} qasd ON qasd.attemptstepid = qas.id
                 WHERE cm.id = ? AND qa.behaviour = ? AND qasd.name {$invars}";

        $attemptstepdataids = $DB->get_record_sql($sql, $params);

        $DB->delete_records_list('question_attempt_step_data', 'id', $attemptstepdataids);
    }

    /**
     * Returns the personal data for a question attempt to a specific question that this plugin manages.
     * @param question_attempt $qa The question attempt to retrieve data for.
     * @return stdClass Personal data for the question attempt.
     */
    protected static function get_by_question_question_attempt_data(question_attempt $qa) {
        $data = new stdClass();
        $studentfeedback = $qa->get_last_behaviour_var('_studentfeedback', null);
        if ($studentfeedback !== null) {
            $data->studentfeedback = $studentfeedback;
        }
        return $data;
    }

    /**
     * Returns the personal data for a quiz attempt that this plugin manages.
     * @param question_attempt $qa The question attempt of the first question of the quiz to retrieve data for.
     * @return stdClass Personal data for the quiz attempt.
     */
    protected static function get_global_question_attempt_data(question_attempt $qa) {
        $generalstudentfeedback = $qa->get_last_behaviour_var('_generalstudentfeedback', null);
        if ($generalstudentfeedback !== null) {
            $behaviourdata = new stdClass();
            $behaviourdata->generalstudentfeedback = $generalstudentfeedback;
            return $behaviourdata;
        } else {
            return null;
        }
    }

    /**
     * Returns the personal data for a question attempt step to a specific question that this plugin manages.
     * @param question_attempt_step $step The question attempt step to retrieve data for.
     * @return stdClass Personal data for the question attempt step.
     */
    protected static function get_question_attempt_step_data(question_attempt_step $step) {
        $stepdata = new stdClass();
        if ($step->has_behaviour_var('_studentfeedback')) {
            $stepdata->studentfeedback = $step->get_behaviour_var('_studentfeedback');
        }
        return $stepdata;
    }

    /**
     * Export personal data for the given approved_contextlist.
     * User and context information is contained within the contextlist.
     *
     * @param approved_contextlist $contextlist a list of contexts for export.
     */
    public static function export_user_data(approved_contextlist $contextlist) {
        global $DB;

        if ($contextlist->count() === 0) {
            return;
        }

        $userid = $contextlist->get_user()->id;

        $params = [
                static::$behaviourname,
                $userid,
                CONTEXT_MODULE,
        ];

        list($insql, $inparams) = $DB->get_in_or_equal($contextlist->get_contextids(), SQL_PARAMS_QM);
        foreach ($inparams as $param) {
            $params[] = $param;
        }

        $sql = "SELECT qqa.*, cm.id as cmid
                  FROM {quiz_attempts} qqa
                  JOIN {course_modules} cm ON cm.instance = qqa.quiz
                  JOIN {modules} m ON m.id = cm.module AND m.name = 'quiz'
                  JOIN {context} ctx ON ctx.instanceid = cm.id
                  JOIN {question_attempts} qa ON qa.questionusageid = qqa.uniqueid
                 WHERE qa.behaviour = ? AND qqa.userid = ? AND ctx.contextlevel = ? AND ctx.id {$insql}
              GROUP BY qqa.uniqueid";

        $attempts = $DB->get_records_sql($sql, $params);

        foreach ($attempts as $attempt) {
            $context = context_module::instance($attempt->cmid);
            $contentwriter = writer::with_context($context);

            $qubaid = $attempt->uniqueid;
            $quba = question_engine::load_questions_usage_by_activity($qubaid);

            $usagecontext = \mod_quiz\privacy\helper::get_quiz_attempt_subcontext($attempt, $contextlist->get_user());

            // Export to [Quiz/Attempts/#/Behaviour/].
            $behaviourcontext = array_merge($usagecontext, [
                    get_string('privacy:behaviourpath', 'qbehaviour_studentfeedbackdeferred'),
            ]);

            foreach ($quba->get_attempt_iterator() as $qa) {
                $slotno = $qa->get_slot();
                // Export question data to [Quiz/Attempts/#/Behaviour/#/data.json].
                $questionnocontext = array_merge($behaviourcontext, [$slotno]);

                $data = static::get_by_question_question_attempt_data($qa);
                $contentwriter->export_data($questionnocontext, $data);

                // Export general student feedback to [Quiz/Attempts/#/Behaviour/data.json].
                $behaviourdata = static::get_global_question_attempt_data($qa);
                if ($behaviourdata !== null) {
                    $contentwriter->export_data($behaviourcontext, $behaviourdata);
                }

                // Export steps data to [Quiz/Attempts/#/Behaviour/#/steps.json].
                $attemptdata = new stdClass();
                $attemptdata->steps = [];

                $stepno = 0;
                foreach ($qa->get_step_iterator() as $step) {
                    $stepno++;

                    $stepdata = static::get_question_attempt_step_data($step);
                    $attemptdata->steps[$stepno] = $stepdata;
                }
                if (!empty($attemptdata->steps)) {
                    $contentwriter->export_related_data($questionnocontext, 'steps', $attemptdata);
                }
            }
        }
    }

    /**
     * Get the list of contexts that contain user information for the specified user.
     *
     * @param int $userid the userid.
     * @return contextlist the list of contexts containing user info for the user.
     */
    public static function get_contexts_for_userid(int $userid): contextlist {
        global $DB;
        $contextlist = new contextlist();

        $params = [
                static::$behaviourname,
                $userid,
                CONTEXT_MODULE,
        ];

        list($invars, $inparams) = $DB->get_in_or_equal(static::behaviour_vars(), SQL_PARAMS_QM);
        foreach ($inparams as $param) {
            $params[] = $param;
        }

        $sql = "SELECT DISTINCT ctx.id
                  FROM {context} ctx
                  JOIN {course_modules} cm ON cm.id = ctx.instanceid
                  JOIN {modules} m ON m.id = cm.module AND m.name = 'quiz'
                  JOIN {quiz_attempts} qqa ON qqa.quiz = cm.instance
                  JOIN {question_attempts} qa ON qa.questionusageid = qqa.uniqueid
                  JOIN {question_attempt_steps} qas ON qas.questionattemptid = qa.id
                  JOIN {question_attempt_step_data} qasd ON qasd.attemptstepid = qas.id
                 WHERE qa.behaviour = ? AND qqa.userid = ? AND ctx.contextlevel = ? AND qasd.name {$invars}";

        $contextlist->add_from_sql($sql, $params);

        return $contextlist;
    }

}
