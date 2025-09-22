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
 * Class to store the options for a quiz_certainty_report.
 *
 * @package   quiz_certainty
 * @copyright 2012 The Open University, 2022 Astor Bizard
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../feedback/feedback_options.php');

/**
 * Class to store the options for a quiz_certainty_report.
 *
 * @copyright 2012 The Open University, 2022 Astor Bizard
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quiz_certainty_options extends quiz_feedback_options {

    /** @var bool whether to show the students' certainty columns. */
    public $showcertainty = true;

    /**
     * {@inheritDoc}
     * @see quiz_feedback_options::get_url_params()
     */
    protected function get_url_params() {
        $params = parent::get_url_params();
        $params['certainty'] = $this->showcertainty;
        return $params;
    }

    /**
     * {@inheritDoc}
     * @see quiz_feedback_options::get_initial_form_data()
     */
    public function get_initial_form_data() {
        $toform = parent::get_initial_form_data();
        $toform->certainty = $this->showcertainty;
        return $toform;
    }

    /**
     * {@inheritDoc}
     * @see quiz_feedback_options::setup_from_form_data()
     * @param object $fromform The data from $mform->get_data() from the settings form.
     */
    public function setup_from_form_data($fromform) {
        parent::setup_from_form_data($fromform);
        $this->showcertainty = $fromform->certainty;
    }

    /**
     * {@inheritDoc}
     * @see quiz_feedback_options::setup_from_params()
     */
    public function setup_from_params() {
        parent::setup_from_params();
        $this->showcertainty = optional_param('certainty', $this->showcertainty, PARAM_BOOL);
    }

    /**
     * {@inheritDoc}
     * @see quiz_feedback_options::setup_from_user_preferences()
     */
    public function setup_from_user_preferences() {
        parent::setup_from_user_preferences();
        $this->showcertainty = get_user_preferences('quiz_report_certainty_certainty', $this->showcertainty);
    }

    /**
     * {@inheritDoc}
     * @see quiz_feedback_options::update_user_preferences()
     */
    public function update_user_preferences() {
        parent::update_user_preferences();
        set_user_preference('quiz_report_certainty_certainty', $this->showcertainty);
    }
}
