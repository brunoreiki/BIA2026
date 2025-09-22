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
 * Class to store the options for a quiz_feedback_report.
 *
 * @package   quiz_feedback
 * @copyright 2012 The Open University, 2022 Astor Bizard
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_quiz\local\reports\attempts_report_options;

/**
 * Class to store the options for a quiz_feedback_report.
 *
 * @copyright 2012 The Open University, 2022 Astor Bizard
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quiz_feedback_options extends attempts_report_options {

    /** @var bool whether to show the question text columns. */
    public $showquestion = true;

    /** @var bool whether to show the students' response columns. */
    public $showresponse = true;

    /** @var bool whether to show the correctness columns. */
    public $showcorrectness = true;

    /** @var bool whether to show the students' feedback columns. */
    public $showstudentfeedback = true;

    /**
     * {@inheritDoc}
     * @see attempts_report_options::get_url_params()
     */
    protected function get_url_params() {
        $params = parent::get_url_params();
        $params['questiontext'] = $this->showquestion;
        $params['response'] = $this->showresponse;
        $params['correctness'] = $this->showcorrectness;
        $params['studentfeedback'] = $this->showstudentfeedback;
        return $params;
    }

    /**
     * {@inheritDoc}
     * @see attempts_report_options::get_initial_form_data()
     */
    public function get_initial_form_data() {
        $toform = parent::get_initial_form_data();
        $toform->questiontext = $this->showquestion;
        $toform->response = $this->showresponse;
        $toform->correctness = $this->showcorrectness;
        $toform->studentfeedback = $this->showstudentfeedback;
        return $toform;
    }

    /**
     * {@inheritDoc}
     * @see attempts_report_options::setup_from_form_data()
     * @param object $fromform The data from $mform->get_data() from the settings form.
     */
    public function setup_from_form_data($fromform) {
        parent::setup_from_form_data($fromform);
        $this->showquestion = $fromform->questiontext;
        $this->showresponse = $fromform->response;
        $this->showcorrectness = $fromform->correctness;
        $this->showstudentfeedback = $fromform->studentfeedback;
    }

    /**
     * {@inheritDoc}
     * @see attempts_report_options::setup_from_params()
     */
    public function setup_from_params() {
        parent::setup_from_params();
        $this->showquestion = optional_param('questiontext', $this->showquestion, PARAM_BOOL);
        $this->showresponse = optional_param('response', $this->showresponse, PARAM_BOOL);
        $this->showcorrectness = optional_param('correctness', $this->showcorrectness, PARAM_BOOL);
        $this->showstudentfeedback = optional_param('studentfeedback', $this->showstudentfeedback, PARAM_BOOL);
    }

    /**
     * {@inheritDoc}
     * @see attempts_report_options::setup_from_user_preferences()
     */
    public function setup_from_user_preferences() {
        parent::setup_from_user_preferences();
        $this->showquestion = get_user_preferences('quiz_report_feedback_questiontext', $this->showquestion);
        $this->showresponse = get_user_preferences('quiz_report_feedback_response', $this->showresponse);
        $this->showcorrectness = get_user_preferences('quiz_report_feedback_correctness', $this->showcorrectness);
        $this->showstudentfeedback = get_user_preferences('quiz_report_feedback_studentfeedback', $this->showstudentfeedback);
    }

    /**
     * {@inheritDoc}
     * @see attempts_report_options::update_user_preferences()
     */
    public function update_user_preferences() {
        parent::update_user_preferences();
        set_user_preference('quiz_report_feedback_questiontext', $this->showquestion);
        set_user_preference('quiz_report_feedback_response', $this->showresponse);
        set_user_preference('quiz_report_feedback_correctness', $this->showcorrectness);
        set_user_preference('quiz_report_feedback_studentfeedback', $this->showstudentfeedback);
    }

    /**
     * {@inheritDoc}
     * @see attempts_report_options::resolve_dependencies()
     */
    public function resolve_dependencies() {
        parent::resolve_dependencies();
        if (!$this->showquestion && !$this->showresponse && !$this->showcorrectness && !$this->showstudentfeedback) {
            // We have to show at least something.
            $this->showresponse = true;
        }
    }
}
