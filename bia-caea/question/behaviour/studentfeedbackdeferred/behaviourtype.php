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
 * Question behaviour type for deferred feedback with student feedback behaviour.
 * @package    qbehaviour_studentfeedbackdeferred
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../deferredfeedback/behaviourtype.php');

use mod_quiz\quiz_attempt;

/**
 * Question behaviour type information for deferred feedback with student feedback behaviour.
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qbehaviour_studentfeedbackdeferred_type extends qbehaviour_deferredfeedback_type {

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
        return false;
    }

    /**
     * {@inheritDoc}
     * @see question_behaviour_type::summarise_usage()
     * @param question_usage_by_activity $quba the usage to provide summary data for.
     * @param question_display_options $options options about what to display.
     */
    public function summarise_usage(question_usage_by_activity $quba, question_display_options $options) {
        $summarydata = parent::summarise_usage($quba, $options);

        if ($options->marks < question_display_options::MARK_AND_MAX) {
            return $summarydata;
        }

        $oursummary = $this->general_student_feedback($quba);

        $summarydata['qbehaviour_studentfeedbackdeferred_summary'] = [
                'title' => get_string('behavioursummary', 'qbehaviour_studentfeedbackdeferred'),
                'content' => html_writer::div($oursummary, 'qbehaviour-studentfeedbackdeferred'),
        ];

        return $summarydata;
    }

    /**
     * Generates a text box for general student feedback after a quiz attempt.
     * @param question_usage_by_activity $quba the usage to provide a feedback box for.
     * @return string HTML fragment for the text box.
     */
    protected function general_student_feedback(question_usage_by_activity $quba) {
        global $PAGE, $OUTPUT;

        if ($quba->question_count() < 1) {
            return '';
        }

        // General student feedback is stored as a behaviour var for the first question of the attempt.
        $firstqa = $quba->get_question_attempt(1);

        $divid = 'qbehaviour_studentfeedbackdeferred_generalstudentfeedback';
        $qastepid = $firstqa->get_last_step()->get_id();
        $quizattempt = quiz_attempt::create_from_usage_id($firstqa->get_usage_id());
        $ownattempt = $quizattempt->is_own_attempt();

        if ($ownattempt) {
            $PAGE->requires->js_call_amd('qbehaviour_studentfeedbackdeferred/studentfeedback',
                    'setupForQuiz', [ $divid, $qastepid ]);
        }
        // For naming conventions about _, see question_attempt_step.
        $currentfeedback = $firstqa->get_last_behaviour_var('_generalstudentfeedback');
        if ($currentfeedback === null) {
            $currentfeedback = '';
        }
        $templatecontext = new stdClass();
        $templatecontext->divid = $divid;
        $templatecontext->value = $currentfeedback;
        $templatecontext->ownattempt = $ownattempt;
        $templatecontext->general = true;
        $templatecontext->query = '?' . $PAGE->url->get_query_string();
        return $OUTPUT->render_from_template('qbehaviour_studentfeedbackdeferred/studentfeedback', $templatecontext);
    }

}
