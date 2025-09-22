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
 * Callbacks used by Moodle API.
 * @package    enrol_temporaryaccess
 * @copyright  Astor Bizard, 2022
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Temporary access enrol plugin definition.
 * @copyright  Astor Bizard, 2022
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class enrol_temporaryaccess_plugin extends enrol_plugin {

    /**
     * @var string The database field we use to store required capabilities for enrol instances.
     */
    const CAPABILITIES_FIELD = 'customtext1';

    /**
     * {@inheritDoc}
     * @see enrol_plugin::get_info_icons()
     *
     * @param array $instances all enrol instances of this type in one course
     */
    public function get_info_icons(array $instances) {
        $icons = array();
        foreach ($instances as $instance) {
            $icons[] = new pix_icon('enrolicon', $this->get_instance_name($instance), 'enrol_temporaryaccess');
        }
        return $icons;
    }

    /**
     * {@inheritDoc}
     * @see enrol_plugin::get_instance_name()
     *
     * @param stdClass $instance
     */
    public function get_instance_name($instance) {
        global $DB;

        if (empty($instance->name)) {
            if (!empty($instance->roleid) && $role = $DB->get_record('role', array('id' => $instance->roleid))) {
                $role = ' (' . role_get_name($role, context_course::instance($instance->courseid, IGNORE_MISSING)) . ')';
            } else {
                $role = '';
            }
            $enrol = $this->get_name();
            return get_string('pluginname', 'enrol_'.$enrol) . $role;
        } else {
            return format_string($instance->name);
        }
    }

    /**
     * {@inheritDoc}
     * @see enrol_plugin::show_enrolme_link()
     *
     * @param stdClass $instance
     */
    public function show_enrolme_link(stdClass $instance) {
        return $this->can_self_enrol($instance, false) === true;
    }

    /**
     * Return true if we can add a new instance to this course.
     *
     * @param int $courseid
     * @return boolean
     */
    public function can_add_instance($courseid) {
        $context = context_course::instance($courseid, MUST_EXIST);
        return has_capability('moodle/course:enrolconfig', $context) && has_capability('enrol/temporaryaccess:config', $context);
    }

    /**
     * Enrol current user to course
     *
     * @param stdClass $instance enrolment instance
     */
    public function enrol_current_user(stdClass $instance) {
        $context = context_course::instance($instance->courseid, MUST_EXIST);
        load_temp_course_role($context, $instance->roleid);
    }

    /**
     * {@inheritDoc}
     * @see enrol_plugin::enrol_page_hook()
     *
     * @param stdClass $instance
     */
    public function enrol_page_hook(stdClass $instance) {
        global $OUTPUT, $SESSION;

        $enrolstatus = $this->can_self_enrol($instance);
        $form = new enrol_temporaryaccess\access_form($enrolstatus, null, $instance);

        $instanceid = optional_param('instance', 0, PARAM_INT);
        if ($enrolstatus === true && $instanceid == $instance->id && ($form->get_data()) !== null) {
            $this->enrol_current_user($instance);
            if (!empty($SESSION->wantsurl)) {
                $destination = $SESSION->wantsurl;
                unset($SESSION->wantsurl);
            } else {
                $destination = new moodle_url('/course/view.php?id=' . $instance->courseid);
            }
            redirect($destination);
        }

        if ($enrolstatus === true || get_config('enrol_temporaryaccess', 'showunavailableenrolform')) {
            $html = $OUTPUT->box($form->render());
        } else {
            $html = '';
        }

        return $html;
    }

    /**
     * Checks if user can access the course via the given instance.
     *
     * @param stdClass $instance enrolment instance
     * @param bool $checkuserenrolment if true will check if user enrolment is inactive.
     *             used by navigation to improve performance.
     * @return bool|string true if successful, else error message or false.
     */
    public function can_self_enrol(stdClass $instance, $checkuserenrolment = true) {
        global $DB, $OUTPUT, $USER;

        if ($checkuserenrolment) {
            if (isguestuser()) {
                // Can not enrol guest.
                return get_string('noguestaccess', 'enrol') . $OUTPUT->continue_button(get_login_url());
            }
            // Check if user is already enroled.
            if ($DB->get_record('user_enrolments', array('userid' => $USER->id, 'enrolid' => $instance->id))) {
                return get_string('cantenrol', 'enrol_temporaryaccess');
            }
        }

        if (!enrol_is_enabled($this->get_name()) || $instance->status != ENROL_INSTANCE_ENABLED) {
            return get_string('cantenrol', 'enrol_temporaryaccess');
        }

        $context = context_course::instance($instance->courseid);
        if (!empty(get_user_accessdata($USER->id)['ra'][$context->path][$instance->roleid])) {
            return get_string('cantenrol', 'enrol_temporaryaccess');
        }

        if (!empty($instance->{self::CAPABILITIES_FIELD})) {
            $missingcaps = array();
            foreach (explode(',', $instance->{self::CAPABILITIES_FIELD}) as $cap) {
                if (!has_capability($cap, $context)) {
                    $missingcaps[] = get_capability_string($cap);
                }
            }
            if ($missingcaps) {
                return get_string('cantenrolcapabilitymissing', 'enrol_temporaryaccess', html_writer::alist($missingcaps));
            }
        }

        return true;
    }

    /**
     * Return information for enrolment instance containing list of parameters required
     * for enrolment, name of enrolment plugin etc.
     *
     * @param stdClass $instance enrolment instance
     * @return stdClass instance info.
     */
    public function get_enrol_info(stdClass $instance) {

        $instanceinfo = new stdClass();
        $instanceinfo->id = $instance->id;
        $instanceinfo->courseid = $instance->courseid;
        $instanceinfo->type = $this->get_name();
        $instanceinfo->name = $this->get_instance_name($instance);
        $instanceinfo->status = $this->can_self_enrol($instance);

        return $instanceinfo;
    }

    /**
     * Add new instance of enrol plugin with default settings.
     * @param stdClass $course
     * @return int id of new instance
     */
    public function add_default_instance($course) {
        $defaults = $this->get_instance_defaults();
        return $this->add_instance($course, $defaults);
    }

    /**
     * {@inheritDoc}
     * @see enrol_plugin::get_instance_defaults()
     */
    public function get_instance_defaults() {
        $fields = array();

        $fields['status'] = ENROL_INSTANCE_ENABLED;
        $fields['roleid'] = $this->get_config('defaultroleid');
        $fields[self::CAPABILITIES_FIELD] = $this->get_config('defaultcaps');

        return $fields;
    }

    /**
     * Restore instance and map settings.
     *
     * @param restore_enrolments_structure_step $step
     * @param stdClass $data
     * @param stdClass $course
     * @param int $oldid
     */
    public function restore_instance(restore_enrolments_structure_step $step, stdClass $data, $course, $oldid) {
        global $DB;
        if ($step->get_task()->get_target() == backup::TARGET_NEW_COURSE) {
            $merge = false;
        } else {
            $merge = array(
                'courseid'   => $data->courseid,
                'enrol'      => $this->get_name(),
                'status'     => $data->status,
                'roleid'     => $data->roleid,
            );
        }
        if ($merge && $instances = $DB->get_records('enrol', $merge, 'id')) {
            $instance = reset($instances);
            $instanceid = $instance->id;
        } else {
            $instanceid = $this->add_instance($course, (array)$data);
        }
        $step->set_mapping('enrol', $oldid, $instanceid);
    }

    /**
     * {@inheritDoc}
     * @see enrol_plugin::can_delete_instance()
     *
     * @param stdClass $instance
     */
    public function can_delete_instance($instance) {
        $context = context_course::instance($instance->courseid);
        return has_capability('enrol/temporaryaccess:config', $context);
    }

    /**
     * {@inheritDoc}
     * @see enrol_plugin::can_hide_show_instance()
     *
     * @param stdClass $instance
     */
    public function can_hide_show_instance($instance) {
        $context = context_course::instance($instance->courseid);

        if (!has_capability('enrol/temporaryaccess:config', $context)) {
            return false;
        }

        // If the instance is currently disabled, before it can be enabled,
        // we must check whether the password meets the password policies.
        if ($instance->status == ENROL_INSTANCE_DISABLED) {
            if (empty($instance->password) && $this->get_config('requirepassword')) {
                return false;
            }

            // Only check the password if it is set.
            if (!empty($instance->password) && $this->get_config('usepasswordpolicy')) {
                $errmsg = '';
                if (!check_password_policy($instance->password, $errmsg)) {
                    return false;
                }
            }
        }

        return true;

    }

    /**
     * We are a good plugin and don't invent our own UI/validation code path.
     *
     * @return boolean
     */
    public function use_standard_editing_ui() {
        return true;
    }

    /**
     * Add elements to the edit instance form.
     *
     * @param stdClass $instance
     * @param MoodleQuickForm $mform
     * @param context $context
     * @return bool
     */
    public function edit_instance_form($instance, MoodleQuickForm $mform, $context) {
        $mform->addElement('text', 'name', get_string('custominstancename', 'enrol'),
                array('size' => '20', 'maxlength' => '255'));
        $mform->setType('name', PARAM_TEXT);
        $mform->addRule('name', get_string('maximumchars', '', 255), 'maxlength', 255, 'server');

        $mform->addElement('select', 'status', get_string('status', 'enrol_temporaryaccess'),
                array(ENROL_INSTANCE_ENABLED => get_string('yes'), ENROL_INSTANCE_DISABLED => get_string('no')));
        $mform->addHelpButton('status', 'status', 'enrol_temporaryaccess');

        $roles = $this->extend_assignable_roles($context, $instance);
        $mform->addElement('select', 'roleid', get_string('role', 'enrol_temporaryaccess'), $roles);
        $mform->addHelpButton('roleid', 'role', 'enrol_temporaryaccess');

        $mform->addElement('passwordunmask', 'password', get_string('password', 'enrol_temporaryaccess'),
                array('size' => '20', 'maxlength' => '50'));
        $mform->addRule('password', get_string('maximumchars', '', 50), 'maxlength', 50, 'server');
        $mform->addHelpButton('password', 'password', 'enrol_temporaryaccess');
        // If we have a new instance and the password is required - make sure it is set. For existing
        // instances we do not force the password to be required as it may have been set to empty before
        // the password was required. We check in the validation function whether this check is required
        // for existing instances.
        // See /enrol/guest/lib.php.
        if (empty($instance->id) && $this->get_config('requirepassword')) {
            $mform->addRule('password', get_string('required'), 'required', null);
        }

        $allcaps = get_all_capabilities();
        $caps = array();
        foreach ($allcaps as $capinfo) {
            if ($capinfo['contextlevel'] == CONTEXT_SYSTEM || $capinfo['contextlevel'] == CONTEXT_COURSECAT) {
                $caps[$capinfo['name']] = $capinfo['name'] . ' - ' . get_capability_string($capinfo['name']);
            }
        }
        $mform->addElement('autocomplete', self::CAPABILITIES_FIELD,
                get_string('requiredcapabilities', 'enrol_temporaryaccess'), $caps, array('multiple' => true));

        $mform->addHelpButton(self::CAPABILITIES_FIELD, 'requiredcapabilities', 'enrol_temporaryaccess');
    }

    /**
     * Perform custom validation of the data used to edit the instance.
     *
     * @param array $data array of ("fieldname"=>value) of submitted data
     * @param array $files array of uploaded files "element_name"=>tmp_file_path
     * @param object $instance The instance loaded from the DB
     * @param context $context The context of the instance we are editing
     * @return array of "element_name"=>"error_description" if there are errors,
     *         or an empty array if everything is OK.
     * @return void
     */
    public function edit_instance_validation($data, $files, $instance, $context) {
        $errors = array();

        // Now these ones are checked by quickforms, but we may be called by the upload enrolments tool, or a webservive.
        if (core_text::strlen($data['name']) > 255) {
            $errors['name'] = get_string('err_maxlength', 'form', 255);
        }

        if ($data['status'] == ENROL_INSTANCE_ENABLED) {
            if ($this->get_config('requirepassword') && trim($data['password']) == '') {
                $errors['password'] = get_string('required');
            } else if ($this->get_config('usepasswordpolicy') && trim($data['password']) != '') {
                $errmsg = '';
                if (!check_password_policy($data['password'], $errmsg)) {
                    $errors['password'] = $errmsg;
                }
            }
        }

        if (!empty($data[self::CAPABILITIES_FIELD])) {
            foreach ($data[self::CAPABILITIES_FIELD] as $cap) {
                if (get_capability_info($cap) === null) {
                    $errors[self::CAPABILITIES_FIELD] = get_string('invalidcapability', 'enrol_temporaryaccess', $cap);
                    break;
                }
            }
        }

        $context = context_course::instance($instance->courseid);
        $validroles = array_keys($this->extend_assignable_roles($context, $instance));
        $tovalidate = array(
            'name' => PARAM_TEXT,
            'status' => array(ENROL_INSTANCE_ENABLED, ENROL_INSTANCE_DISABLED),
            'roleid' => $validroles
        );
        $typeerrors = $this->validate_param_types($data, $tovalidate);
        $errors = array_merge($errors, $typeerrors);

        return $errors;
    }

    /**
     * Add new instance of enrol plugin.
     * @param object $course
     * @param array $fields instance fields
     * @return int id of new instance, null if can not be created
     */
    public function add_instance($course, array $fields = null) {
        if (isset($fields[self::CAPABILITIES_FIELD]) && is_array($fields[self::CAPABILITIES_FIELD])) {
            $fields[self::CAPABILITIES_FIELD] = implode(',', $fields[self::CAPABILITIES_FIELD]);
        }

        return parent::add_instance($course, $fields);
    }

    /**
     * Update instance of enrol plugin.
     * @param stdClass $instance
     * @param stdClass $data modified instance fields
     * @return boolean
     */
    public function update_instance($instance, $data) {
        if (isset($data->{self::CAPABILITIES_FIELD}) && is_array($data->{self::CAPABILITIES_FIELD})) {
            $data->{self::CAPABILITIES_FIELD} = implode(',', $data->{self::CAPABILITIES_FIELD});
        }

        return parent::update_instance($instance, $data);
    }

    /**
     * Returns the list of assignable roles (as returned by get_assignable_roles()),
     * extended with an eventual role if instance is currently set to a role not present in that list.
     *
     * @param context $context Most likely the course context.
     * @param stdClass $instance The enrol instance record.
     * @return array An array of assignable roles, usable for menus in configuration and validation.
     */
    protected function extend_assignable_roles($context, $instance) {
        global $DB;

        $roles = get_assignable_roles($context, ROLENAME_BOTH);
        if (isset($instance->roleid)) {
            $defaultrole = $instance->roleid;
            if (!isset($roles[$defaultrole]) && ($role = $DB->get_record('role', array('id' => $defaultrole)))) {
                $roles[$defaultrole] = role_get_name($role, $context, ROLENAME_BOTH);
            }
        }
        return $roles;
    }
}

/**
 * Definition of Fontawesome icons mapping.
 * @return string[] Fontawesome icons mapping.
 */
function enrol_temporaryaccess_get_fontawesome_icon_map() {
    return [
            'enrol_temporaryaccess:enrolicon' => get_config('enrol_temporaryaccess', 'enrolicon'),
            'enrol_temporaryaccess:locked' => 'fa-lock'
    ];
}

/**
 * Extension of the course menu, to add options to either temporarily swap to role, swap back or return to the enrolment page.
 * @param navigation_node $parentnode
 * @param stdClass $course
 * @param context_course $context
 */
function enrol_temporaryaccess_extend_navigation_course(navigation_node $parentnode, stdClass $course, context_course $context) {
    global $USER, $DB, $PAGE;

    $courseid = $course->id;
    $instances = enrol_get_instances($courseid, true);
    $plugin = enrol_get_plugin('temporaryaccess');
    foreach ($instances as $instance) {
        if ($instance->enrol !== $plugin->get_name()) {
            continue;
        }
        if (has_capability('moodle/role:switchroles', $context) && isset(get_switchable_roles($context)[$instance->roleid])) {
            // User can switch to the target role - no need to offer the access.
            continue;
        }
        if ($plugin->can_self_enrol($instance) === true && $PAGE->pagetype !== 'enrol-index') {
            $url = new moodle_url('/enrol/temporaryaccess/tempenrol.php', array('id' => $courseid, 'instance' => $instance->id));
            $role = $DB->get_record('role', array('id' => $instance->roleid));
            $parentnode->add(get_string('tempswitchtorole', 'enrol_temporaryaccess', role_get_name($role)),
                    $url, navigation_node::TYPE_SETTING, null, null, new pix_icon('i/user', ''));
        } else if (!empty(get_user_accessdata($USER->id)['ra'][$context->path][$instance->roleid])) {
            $str = is_enrolled($context) ? 'tempswitchback' : 'gotoenrolmentpage';
            $url = new moodle_url('/enrol/temporaryaccess/tempunenrol.php', array('id' => $courseid, 'instance' => $instance->id));
            $parentnode->add(get_string($str, 'enrol_temporaryaccess'),
                    $url, navigation_node::TYPE_SETTING, null, null, new pix_icon('i/user', ''));
        }
    }
}
