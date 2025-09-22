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
 * selfwithcapability enrol plugin external functions
 *
 * @package    enrol_selfwithcapability
 * @copyright  2022 Astor Bizard, 2013 Rajesh Taneja <rajesh@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/externallib.php");

/**
 * selfwithcapability enrolment external functions.
 *
 * @package   enrol_selfwithcapability
 * @copyright 2022 Astor Bizard, 2012 Rajesh Taneja <rajesh@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since     Moodle 2.6
 */
class enrol_selfwithcapability_external extends external_api {

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.0
     */
    public static function enrol_user_parameters() {
        return new external_function_parameters(
            [
                'courseid' => new external_value(PARAM_INT, 'Id of the course'),
                'password' => new external_value(PARAM_RAW, 'Enrolment key', VALUE_DEFAULT, ''),
                'instanceid' => new external_value(PARAM_INT, 'Instance id of selfwithcapability enrolment.', VALUE_DEFAULT, 0),
            ]
        );
    }

    /**
     * selfwithcapability enrol the current user in the given course.
     *
     * @param int $courseid id of course
     * @param string $password enrolment key
     * @param int $instanceid instance id of selfwithcapability enrolment plugin
     * @return array of warnings and status result
     * @since Moodle 3.0
     * @throws moodle_exception
     */
    public static function enrol_user($courseid, $password = '', $instanceid = 0) {
        global $CFG;

        require_once($CFG->libdir . '/enrollib.php');

        $params = self::validate_parameters(self::enrol_user_parameters(),
                                            [
                                                'courseid' => $courseid,
                                                'password' => $password,
                                                'instanceid' => $instanceid,
                                            ]);

        $warnings = [];

        $course = get_course($params['courseid']);
        $context = context_course::instance($course->id);
        self::validate_context(context_system::instance());

        if (!$course->visible && !has_capability('moodle/course:viewhiddencourses', $context)) {
            throw new moodle_exception('coursehidden');
        }

        // Retrieve the selfwithcapability enrolment plugin.
        $enrol = enrol_get_plugin('selfwithcapability');
        if (empty($enrol)) {
            throw new moodle_exception('canntenrol', 'enrol_selfwithcapability');
        }

        // We can expect multiple selfwithcapability-enrolment instances.
        $instances = [];
        $enrolinstances = enrol_get_instances($course->id, true);
        foreach ($enrolinstances as $courseenrolinstance) {
            if ($courseenrolinstance->enrol == "selfwithcapability") {
                // Instance specified.
                if (!empty($params['instanceid'])) {
                    if ($courseenrolinstance->id == $params['instanceid']) {
                        $instances[] = $courseenrolinstance;
                        break;
                    }
                } else {
                    $instances[] = $courseenrolinstance;
                }

            }
        }
        if (empty($instances)) {
            throw new moodle_exception('canntenrol', 'enrol_selfwithcapability');
        }

        // Try to enrol the user in the instance/s.
        $enrolled = false;
        foreach ($instances as $instance) {
            $enrolstatus = $enrol->can_self_enrol($instance);
            if ($enrolstatus === true) {
                if ($instance->password && $params['password'] !== $instance->password) {

                    // Check if we are using group enrolment keys.
                    if ($instance->customint1) {
                        require_once($CFG->dirroot . '/enrol/self/locallib.php');

                        if (!enrol_self_check_group_enrolment_key($course->id, $params['password'])) {
                            $warnings[] = [
                                'item' => 'instance',
                                'itemid' => $instance->id,
                                'warningcode' => '2',
                                'message' => get_string('passwordinvalid', 'enrol_self'),
                            ];
                            continue;
                        }
                    } else {
                        if ($enrol->get_config('showhint')) {
                            $hint = core_text::substr($instance->password, 0, 1);
                            $warnings[] = [
                                'item' => 'instance',
                                'itemid' => $instance->id,
                                'warningcode' => '3',
                                'message' => s(get_string('passwordinvalidhint', 'enrol_self', $hint)), // No special HTML chars.
                            ];
                            continue;
                        } else {
                            $warnings[] = [
                                'item' => 'instance',
                                'itemid' => $instance->id,
                                'warningcode' => '4',
                                'message' => get_string('passwordinvalid', 'enrol_self'),
                            ];
                            continue;
                        }
                    }
                }

                // Do the enrolment.
                $data = [ 'enrolpassword' => $params['password'] ];
                $enrol->enrol_self($instance, (object) $data);
                $enrolled = true;
                break;
            } else {
                $warnings[] = [
                    'item' => 'instance',
                    'itemid' => $instance->id,
                    'warningcode' => '1',
                    'message' => strip_tags($enrolstatus), // Type of message is PARAM_TEXT, leads to error if HTML tags present.
                ];
            }
        }

        $result = [];
        $result['status'] = $enrolled;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 3.0
     */
    public static function enrol_user_returns() {
        return new external_single_structure(
            [
                'status' => new external_value(PARAM_BOOL, 'status: true if the user is enrolled, false otherwise'),
                'warnings' => new external_warnings(),
            ]
        );
    }
}
