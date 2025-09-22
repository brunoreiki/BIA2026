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
 * Enrol form. It can be locked if capability is missing, or display (or not) a password prompt.
 * @package    enrol_temporaryaccess
 * @copyright  Astor Bizard, 2022
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace enrol_temporaryaccess;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once("$CFG->libdir/formslib.php");

/**
 * Enrol form definition.
 * @copyright  Astor Bizard, 2022
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class access_form extends \moodleform {
    /**
     * @var \stdClass Enrol instance record.
     */
    protected $instance;

    /**
     * @var boolean Whether the user can enrol using this instance.
     */
    protected $canenrol;

    /**
     * @var mixed If $canenrol is not true, stores information on why.
     * @see \enrol_plugin::can_self_enrol()
     */
    protected $info = null;

    /**
     * Constructor. This just stores a few information before calling the parent constructor, which will call definition().
     * @param bool|string $enrolstatus The result of enrol_plugin::can_self_enrol()
     * @param mixed $action Form action
     * @param mixed $customdata Enrol instance record
     */
    public function __construct($enrolstatus, $action = null, $customdata = null) {
        $this->instance = $customdata;
        if (!($this->canenrol = ($enrolstatus === true))) {
            $this->info = $enrolstatus;
        }
        parent::__construct($action, $customdata);
    }

    /**
     * Overriding this function to get unique form id for multiple temporaryaccess enrolments.
     *
     * @return string form identifier
     */
    protected function get_form_identifier() {
        return parent::get_form_identifier() . '_' . $this->instance->id;
    }

    /**
     * {@inheritDoc}
     * @see \moodleform::definition()
     */
    public function definition() {
        global $OUTPUT;
        $mform = $this->_form;
        $plugin = enrol_get_plugin('temporaryaccess');

        $heading = $plugin->get_instance_name($this->instance);
        if (!$this->canenrol) {
            $heading .= $OUTPUT->pix_icon('locked', get_string('notavailable'), 'enrol_temporaryaccess');
        }
        $mform->addElement('header', 'temporaryaccessheader', $heading);
        $mform->setExpanded('temporaryaccessheader', $this->canenrol);

        if ($this->canenrol) {
            if ($this->instance->password) {
                // Change the id of self access key input as there can be multiple Temporary access enrolment methods.
                $mform->addElement('password', 'accesspassword', get_string('password', 'enrol_temporaryaccess'),
                        array('id' => 'accesspassword_'.$this->instance->id));
            }

            $this->add_action_buttons(false, get_string('enrolme', 'enrol_temporaryaccess'));

            $mform->addElement('hidden', 'id');
            $mform->setType('id', PARAM_INT);
            $mform->setDefault('id', $this->instance->courseid);

            $mform->addElement('hidden', 'instance');
            $mform->setType('instance', PARAM_INT);
            $mform->setDefault('instance', $this->instance->id);
        } else {
            $mform->addElement('static', 'info', '', $this->info);
        }

    }

    /**
     * {@inheritDoc}
     * @see \moodleform::validation()
     *
     * @param array $data
     * @param array $files
     */
    public function validation($data, $files) {
        $errors = parent::validation($data, $files);

        if (!$this->canenrol) {
            $errors['info'] = $this->info;
        }

        if ($this->instance->password && $data['accesspassword'] !== $this->instance->password) {
            $errors['accesspassword'] = get_string('passwordinvalid', 'enrol_temporaryaccess');
        }

        return $errors;
    }
}
