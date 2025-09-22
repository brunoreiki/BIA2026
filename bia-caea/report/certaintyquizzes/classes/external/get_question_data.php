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

use html_writer;
use qbehaviour_certaintywithstudentfbdeferred\answerclass;
use qbehaviour_certaintywithstudentfbdeferred\answersubcategory;
use report_certaintyquizzes\locallib;

/**
 * AJAX webservice returning detailed information about a question and answer category by chosen answer (for choices questions).
 * @package    report_certaintyquizzes
 * @copyright  2025 Astor Bizard, 2024 Loic Delon
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class get_question_data extends \external_api {

    /**
     * Parameters for execute().
     * @return \external_function_parameters
     */
    public static function execute_parameters() {
        return new \external_function_parameters([
                'courseid' => new \external_value(PARAM_INT, 'Course ID'),
                'quizid' => new \external_value(PARAM_INT, 'Quiz ID in quiz table'),
                'questionid' => new \external_value(PARAM_INT, 'Question ID'),
                'attempttype' => new \external_value(PARAM_TEXT, 'Attempt type (one of latest, first or best)'),
        ]);
    }

    /**
     * Return detailed information about a question and answer category by chosen answer (for choices questions).
     * @param int $courseid Course ID.
     * @param int $quizid Quiz ID (id in quiz table).
     * @param int $questionid Question ID.
     * @param string $attempttype Attempt type (one of latest, best, first).
     */
    public static function execute($courseid, $quizid, $questionid, $attempttype) {
        global $CFG;
        require_once($CFG->dirroot . '/question/engine/bank.php');
        require_once($CFG->dirroot . '/question/engine/lib.php');
        require_once($CFG->libdir . '/graphlib.php');

        [ $courseid, $quizid, $questionid, $attempttype ] = array_values(
                self::validate_parameters(self::execute_parameters(), [
                        'courseid' => $courseid,
                        'quizid' => $quizid,
                        'questionid' => $questionid,
                        'attempttype' => $attempttype,
                ])
        );
        $context = \context_course::instance($courseid);
        self::validate_context($context);
        require_capability('report/certaintyquizzes:view', $context);
        require_capability('mod/quiz:viewreports', $context);

        $userattempts = locallib::get_specific_attempt($quizid, $attempttype);
        $questionattempts = [];
        foreach ($userattempts as $userattempt) {
            $quba = \question_engine::load_questions_usage_by_activity($userattempt->uniqueid);
            foreach ($quba->get_attempt_iterator() as $qa) { // Look for the requested question in quiz attempt.
                if ($qa->get_question_id() == $questionid) {
                    $questionattempts[] = $qa;
                }
            }
        }

        $question = \question_bank::load_question($questionid);

        $questionsummary = html_writer::div(get_string('labelvalue', 'moodle',
                [ 'label' => get_string('question'), 'value' => format_string($question->name) ]), 'h6');
        $questionsummary .= '<p>' . format_text($question->questiontext, $question->questiontextformat) . '</p>';

        $answers = [];

        if ($question->get_type_name() === 'truefalse') {
            // Process answers.
            foreach ([ 'true', 'false' ] as $field) {
                $answers[$question->{$field . 'answerid'}] = [
                        'iscorrect' => ($question->rightanswer ? 'true' : 'false') === $field,
                        'text' => get_string($field, 'qtype_truefalse'),
                ];
            }
            $extractanswerid = function($questionattempt) use ($question) {
                $answer = $questionattempt->get_last_qt_var('answer', null);
                return $answer === null ? null : $question->{($answer ? 'true' : 'false') . 'answerid'};
            };
        } else if ($question->get_type_name() === 'multichoice' && $question instanceof \qtype_multichoice_single_question) {
            // Process answers.
            foreach ($question->answers as $answerid => $answer) {
                $answers[$answerid] = [
                        'iscorrect' => \question_state::graded_state_for_fraction($answer->fraction)->is_correct(),
                        'text' => trim($question->html_to_text($answer->answer, $answer->answerformat)),
                ];
            }
            $extractanswerid = function($questionattempt) {
                $answer = $questionattempt->get_last_qt_var('answer', null);
                return $answer === null ? null : explode(',', $questionattempt->get_last_qt_var('_order'))[$answer];
            };
        } else if ($question->get_type_name() === 'multichoice' && $question instanceof \qtype_multichoice_multi_question) {
            // Process answers.
            foreach ($question->answers as $answerid => $answer) {
                $answers[$answerid] = [
                        'percent' => ($answer->fraction * 100.0) . '%',
                        'text' => trim($question->html_to_text($answer->answer, $answer->answerformat)),
                ];
            }
            $extractanswerid = null; // We can't display a clear summary by answer because multiple answers are allowed.
        }

        // Sort answers by key so they appear on the original order even for shuffled choices.
        ksort($answers);

        if (empty($extractanswerid)) {
            // Not supported question type for details by answer. Simply return question summary.
            if (!empty($answers)) {
                // We have answers to display, add them to question summary.
                $answerssummary = [];
                foreach (array_values($answers) as $i => $answer) {
                    $answer['i'] = $i + 1;
                    $answerssummary[] = get_string('choicetitlepercent', locallib::COMPONENT, $answer);
                }
                $questionsummary .= html_writer::alist($answerssummary);
            }

            // Check if there is any feedback from students.
            $feedbacks = [];
            foreach ($questionattempts as $qa) {
                $studentfeedback = $qa->get_last_behaviour_var('_studentfeedback');
                if (!empty($studentfeedback)) {
                    $feedbacks[] = static::get_certainty_chip($qa) . '( ' . $qa->get_response_summary() . ' ) ' . $studentfeedback;
                }
            }
            if (!empty($feedbacks)) {
                sort($feedbacks); // Sort by answer class (hack using the color chip that was added).
                $questionsummary .= static::format_student_feedbacks($feedbacks);
            } else {
                $questionsummary .= html_writer::div(static::info_icon() . get_string('nofeedbackonquestion', locallib::COMPONENT));
            }

            return [
                    'chartdata' => '',
                    'questionsummary' => $questionsummary,
            ];
        }

        // Prepare chart labels and values.
        foreach ($answers as &$answerref) {
            $str = $answerref['iscorrect'] ? 'answerlabelcorrect' : 'answerlabelincorrect';
            $answerref['label'] = get_string($str, locallib::COMPONENT, $answerref['text']);
            foreach (answerclass::get_classes() as $answerclass) {
                $answerref['n' . $answerclass->name] = 0;
            }
            $answerref['feedbacks'] = [];
        }

        // Compute chart data.
        foreach ($questionattempts as $qa) {
            $answerid = $extractanswerid($qa);
            if ($answerid !== null) {
                $studentfeedback = $qa->get_last_behaviour_var('_studentfeedback');
                if (!empty($studentfeedback)) {
                    $answers[$answerid]['feedbacks'][] = static::get_certainty_chip($qa) . $studentfeedback;
                }
                $subcategory = answersubcategory::subcategorize_answer($qa);
                if ($subcategory !== null) {
                    $answers[$answerid]['n' . $subcategory->answerclass->name] += 1;
                }
            }
        }

        // Add answers to question summary.
        $answerssummary = [];
        foreach (array_values($answers) as $i => $answer) {
            $answer['i'] = $i + 1;
            $choicetitle = get_string($answer['iscorrect'] ? 'choicetitlecorrect' : 'choicetitle', locallib::COMPONENT, $answer);
            $answerssummary[] = html_writer::span($choicetitle, $answer['iscorrect'] ? 'text-success' : '');
        }
        $questionsummary .= html_writer::alist($answerssummary);

        if (array_sum(array_map('count', array_column($answers, 'feedbacks'))) > 0) {
            $feedbacks = [];
            foreach ($answers as $answer) {
                $answerfeedbacks = $answer['label'];
                if (!empty($answer['feedbacks'])) {
                    sort($answer['feedbacks']); // Sort by answer class (hack using the color chip that was added).
                    $answerfeedbacks .= html_writer::alist($answer['feedbacks']);
                } else {
                    $answerfeedbacks .= html_writer::div(get_string('nofeedbackonanswer', locallib::COMPONENT));
                }
                $feedbacks[] = $answerfeedbacks;
            }
            $questionsummary .= static::format_student_feedbacks($feedbacks);
        } else {
            $questionsummary .= html_writer::div(static::info_icon() . get_string('nofeedbackonquestion', locallib::COMPONENT));
        }

        $answerclasseschart = new \core\chart_bar();
        $answerclasseschart->set_labels(array_column($answers, 'label'));
        foreach (answerclass::get_classes() as $answerclass) {
            $series = new \core\chart_series(get_string($answerclass->name . 'plural', locallib::BEHAVIOURCOMPONENT),
                    array_column($answers, 'n' . $answerclass->name));
            $series->set_color($answerclass->color);
            $answerclasseschart->add_series($series);
        }
        $answerclasseschart->set_stacked(true);
        $answerclasseschart->set_title(get_string('answercategoriesbyanswer', locallib::COMPONENT));

        return [
                'chartdata' => json_encode($answerclasseschart),
                'questionsummary' => $questionsummary,
        ];
    }

    /**
     * @return \external_single_structure
     */
    public static function execute_returns() {
        return new \external_single_structure([
                'chartdata' => new \external_value(PARAM_RAW, 'JSON-encoded data to render a chart'),
                'questionsummary' => new \external_value(PARAM_RAW, 'HTML fragment of question summary'),
        ]);
    }

    private static function info_icon() {
        global $OUTPUT;
        return $OUTPUT->pix_icon('i/info', get_string('info'), 'moodle', [ 'class' => 'text-info' ]);
    }

    private static function format_student_feedbacks($feedbacks) {
        $html = '<details><summary>' . get_string('studentsfeedbackforquestion', locallib::COMPONENT) . '</summary>';
        $html .= html_writer::alist($feedbacks, [ 'class' => 'mx-2' ]);
        $html .= '</details>';
        return $html;
    }

    private static function get_certainty_chip($qa) {
        $subcategory = answersubcategory::subcategorize_answer($qa);
        if ($subcategory !== null) {
            return html_writer::div(
                    '',
                    'qbehaviour_certaintywithstudentfbdeferred-answerclasschip',
                    [
                            'style' => 'background-color:' . $subcategory->color,
                            'aria-label' => $subcategory->answerclass->label,
                            'title' => $subcategory->answerclass->label,
                    ]
                    );
        } else {
            return '';
        }
    }
}
