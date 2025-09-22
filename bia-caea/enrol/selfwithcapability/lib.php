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
 * selfwithcapability enrolment plugin.
 *
 * @package    enrol_selfwithcapability
 * @copyright  2022 Astor Bizard, 2010 Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../self/lib.php');

/**
 * selfwithcapability enrolment plugin implementation.
 * @author Astor Bizard, Petr Skoda
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class enrol_selfwithcapability_plugin extends enrol_self_plugin {

    /**
     * @var string The database field we use to store required capabilities for enrol instances.
     */
    const CAPABILITIES_FIELD = 'customtext2';

    /**
     * Returns optional enrolment information icons.
     *
     * This is used in course list for quick overview of enrolment options.
     *
     * We are not using single instance parameter because sometimes
     * we might want to prevent icon repetition when multiple instances
     * of one type exist. One instance may also produce several icons.
     *
     * @param array $instances all enrol instances of this type in one course
     * @return array of pix_icon
     */
    public function get_info_icons(array $instances) {
        $key = false;
        $nokey = false;
        foreach ($instances as $instance) {
            if ($this->can_self_enrol($instance, false) !== true) {
                // User can not enrol himself.
                // Note that we do not check here if user is already enrolled for performance reasons -
                // such check would execute extra queries for each course in the list of courses and
                // would hide self-enrolment icons from guests.
                continue;
            }
            if ($instance->password || $instance->customint1) {
                $key = true;
            } else {
                $nokey = true;
            }
        }
        $icons = [];
        if ($nokey) {
            $icons[] = new pix_icon('withoutkey', get_string('pluginname', 'enrol_self'), 'enrol_selfwithcapability');
        }
        if ($key) {
            $icons[] = new pix_icon('withkey', get_string('pluginname', 'enrol_self'), 'enrol_selfwithcapability');
        }
        return $icons;
    }

    /**
     * Return true if we can add a new instance to this course.
     *
     * @param int $courseid
     * @return boolean
     */
    public function can_add_instance($courseid) {
        $context = context_course::instance($courseid, MUST_EXIST);
        return has_capability('moodle/course:enrolconfig', $context) && has_capability('enrol/selfwithcapability:config', $context);
    }

    /**
     * Creates course enrol form, checks if form submitted
     * and enrols user if necessary. It can also redirect.
     *
     * @param stdClass $instance
     * @return string html text, usually a form in a text box
     */
    public function enrol_page_hook(stdClass $instance) {
        global $OUTPUT;

        $enrolstatus = $this->can_self_enrol($instance);

        if (true === $enrolstatus) {
            // This user can self enrol using this instance.
            $form = new enrol_selfwithcapability\enrol_form(null, $instance);
            $instanceid = optional_param('instance', 0, PARAM_INT);
            if ($instance->id == $instanceid) {
                if ($data = $form->get_data()) {
                    $this->enrol_self($instance, $data);
                }
            }

            $html = $OUTPUT->box($form->render());

        } else if (get_config('enrol_selfwithcapability', 'showunavailableenrolform')) {
            // This user can not self enrol using this instance. Using an empty form to keep
            // the UI consistent with other enrolment plugins that returns a form.
            $data = new stdClass();
            $data->header = $this->get_instance_name($instance);
            $data->info = $enrolstatus;

            // The can_self_enrol call returns a button to the login page if the user is a
            // guest, setting the login url to the form if that is the case.
            $url = isguestuser() ? get_login_url() : null;
            $form = new enrol_selfwithcapability\empty_form($url, $data);

            $html = $OUTPUT->box($form->render());

        } else {
            $html = '';
        }

        return $html;
    }

    /**
     * Checks if user can self enrol.
     *
     * @param stdClass $instance enrolment instance
     * @param bool $checkuserenrolment if true will check if user enrolment is inactive.
     *             used by navigation to improve performance.
     * @return bool|string true if successful, else error message or false.
     */
    public function can_self_enrol(stdClass $instance, $checkuserenrolment = true) {
        $status = parent::can_self_enrol($instance, $checkuserenrolment);

        if ($status === true && !empty($instance->{self::CAPABILITIES_FIELD})) {
            $missingcaps = [];
            foreach (explode(',', $instance->{self::CAPABILITIES_FIELD}) as $cap) {
                if (!has_capability($cap, context_coursecat::instance(get_course($instance->courseid)->category))) {
                    $missingcaps[] = get_capability_string($cap);
                }
            }
            if ($missingcaps) {
                return get_string('canntenrolcapabilitymissing', 'enrol_selfwithcapability', html_writer::alist($missingcaps));
            }
        }

        return $status;
    }

    /**
     * Returns defaults for new instances.
     * @return array
     */
    public function get_instance_defaults() {
        $fields = parent::get_instance_defaults();

        $fields[self::CAPABILITIES_FIELD] = ''; // No capability required by default.

        return $fields;
    }

    /**
     * Unenrol users who did not log in or access course in a long time.
     *
     * @param progress_trace $trace
     * @param int $courseid one course, empty mean all
     * @return int 0 means ok, 1 means error, 2 means plugin disabled
     */
    public function sync(progress_trace $trace, $courseid = null) {
        global $DB;

        if (!enrol_is_enabled('selfwithcapability')) {
            $trace->finished();
            return 2;
        }

        // Unfortunately this may take a long time, execution can be interrupted safely here.
        core_php_time_limit::raise();
        raise_memory_limit(MEMORY_HUGE);

        $trace->output('Verifying selfwithcapability enrolments...');

        $params = [ 'now' => time(), 'courselevel' => CONTEXT_COURSE ];
        $coursesql = "";
        if ($courseid) {
            $coursesql = "AND e.courseid = :courseid";
            $params['courseid'] = $courseid;
        }

        // Note: the logic of selfwithcapability enrolment guarantees that user logged in at least once (=== u.lastaccess set)
        // and that user accessed course at least once too (=== user_lastaccess record exists).

        // First deal with users that did not log in for a really long time - they do not have user_lastaccess records.
        $sql = "SELECT e.*, ue.userid
                  FROM {user_enrolments} ue
                  JOIN {enrol} e ON (e.id = ue.enrolid AND e.enrol = 'selfwithcapability' AND e.customint2 > 0)
                  JOIN {user} u ON u.id = ue.userid
                 WHERE :now - u.lastaccess > e.customint2
                       $coursesql";
        $rs = $DB->get_recordset_sql($sql, $params);
        foreach ($rs as $instance) {
            $userid = $instance->userid;
            unset($instance->userid);
            $this->unenrol_user($instance, $userid);
            $days = $instance->customint2 / 86400;
            $trace->output("Unenrolling user $userid from course $instance->courseid" .
                            " as they did not log in for at least $days days.", 1);
        }
        $rs->close();

        // Now unenrol from course user did not visit for a long time.
        $sql = "SELECT e.*, ue.userid
                  FROM {user_enrolments} ue
                  JOIN {enrol} e ON (e.id = ue.enrolid AND e.enrol = 'selfwithcapability' AND e.customint2 > 0)
                  JOIN {user_lastaccess} ul ON (ul.userid = ue.userid AND ul.courseid = e.courseid)
                 WHERE :now - ul.timeaccess > e.customint2
        $coursesql";
        $rs = $DB->get_recordset_sql($sql, $params);
        foreach ($rs as $instance) {
            $userid = $instance->userid;
            unset($instance->userid);
            $this->unenrol_user($instance, $userid);
            $days = $instance->customint2 / 86400;
            $trace->output("Unenrolling user $userid from course $instance->courseid" .
                            " as they did not access the course for at least $days days.", 1);
        }
        $rs->close();

        $trace->output('...selfwithcapability enrolment updates finished.');
        $trace->finished();

        $this->process_expirations($trace, $courseid);

        return 0;
    }

    /**
     * Returns the user who is responsible for selfwithcapability enrolments in given instance.
     *
     * Usually it is the first editing teacher - the person with "highest authority"
     * as defined by sort_by_roleassignment_authority() having 'enrol/selfwithcapability:manage'
     * capability.
     *
     * @param int $instanceid enrolment instance id
     * @return stdClass user record
     */
    protected function get_enroller($instanceid) {
        global $DB;

        if ($this->lasternollerinstanceid == $instanceid && $this->lasternoller) {
            return $this->lasternoller;
        }

        $instance = $DB->get_record('enrol', [ 'id' => $instanceid, 'enrol' => $this->get_name() ], '*', MUST_EXIST);
        $context = context_course::instance($instance->courseid);

        if ($users = get_enrolled_users($context, 'enrol/selfwithcapability:manage')) {
            $users = sort_by_roleassignment_authority($users, $context);
            $this->lasternoller = reset($users);
            unset($users);
        } else {
            $this->lasternoller = enrol_plugin::get_enroller($instanceid);
        }

        $this->lasternollerinstanceid = $instanceid;

        return $this->lasternoller;
    }

    /**
     * Is it possible to delete enrol instance via standard UI?
     *
     * @param stdClass $instance
     * @return bool
     */
    public function can_delete_instance($instance) {
        return has_capability('enrol/selfwithcapability:config', context_course::instance($instance->courseid));
    }

    /**
     * Is it possible to hide/show enrol instance via standard UI?
     *
     * @param stdClass $instance
     * @return bool
     */
    public function can_hide_show_instance($instance) {
        $context = context_course::instance($instance->courseid);

        if (!has_capability('enrol/selfwithcapability:config', $context)) {
            return false;
        }

        // If the instance is currently disabled, before it can be enabled,
        // we must check whether the password meets the password policies.
        if ($instance->status == ENROL_INSTANCE_DISABLED) {
            if ($this->get_config('requirepassword')) {
                if (empty($instance->password)) {
                    return false;
                }
            }
            // Only check the password if it is set.
            if (!empty($instance->password) && $this->get_config('usepasswordpolicy')) {
                $errmsg = null;
                if (!check_password_policy($instance->password, $errmsg)) {
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * The selfwithcapability enrollment plugin has several bulk operations that can be performed.
     * @param course_enrolment_manager $manager
     * @return array
     */
    public function get_bulk_operations(course_enrolment_manager $manager) {
        $context = $manager->get_context();
        $bulkoperations = [];
        if (has_capability("enrol/selfwithcapability:manage", $context)) {
            $bulkoperations['editselectedusers'] = new enrol_selfwithcapability\editselectedusers_operation($manager, $this);
        }
        if (has_capability("enrol/selfwithcapability:unenrol", $context)) {
            $bulkoperations['deleteselectedusers'] = new enrol_selfwithcapability\deleteselectedusers_operation($manager, $this);
        }
        return $bulkoperations;
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
        parent::edit_instance_form($instance, $mform, $context);

        $allcaps = get_all_capabilities();
        $caps = [];
        foreach ($allcaps as $capinfo) {
            if ($capinfo['contextlevel'] == CONTEXT_SYSTEM || $capinfo['contextlevel'] == CONTEXT_COURSECAT) {
                $caps[$capinfo['name']] = $capinfo['name'] . ' - ' . get_capability_string($capinfo['name']);
            }
        }
        $element =& $mform->createElement('autocomplete', self::CAPABILITIES_FIELD,
                get_string('requiredcapabilities', 'enrol_selfwithcapability'), $caps, [ 'multiple' => true ]);

        $mform->insertElementBefore($element, 'enrolperiod');

        $mform->addHelpButton(self::CAPABILITIES_FIELD, 'requiredcapabilities', 'enrol_selfwithcapability');
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
        $errors = parent::edit_instance_validation($data, $files, $instance, $context);

        if (!empty($data[self::CAPABILITIES_FIELD])) {
            foreach ($data[self::CAPABILITIES_FIELD] as $cap) {
                if (get_capability_info($cap) === null) {
                    $errors[self::CAPABILITIES_FIELD] = get_string('invalidcapability', 'enrol_selfwithcapability', $cap);
                    break;
                }
            }
        }

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
}
/**
 * Get icon mapping for font-awesome.
 */
function enrol_selfwithcapability_get_fontawesome_icon_map() {
    return [
            'enrol_selfwithcapability:locked' => 'fa-lock',
    ];
}
