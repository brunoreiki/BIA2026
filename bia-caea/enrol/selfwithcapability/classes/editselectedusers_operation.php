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
 * A bulk operation for the manual enrolment plugin to edit selected users.
 *
 * @package enrol_selfwithcapability
 * @copyright 2022 Astor Bizard, 2018 Farhan Karmali
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace enrol_selfwithcapability;

use enrol_self_editselectedusers_operation;

/**
 * A bulk operation for the manual enrolment plugin to edit selected users.
 *
 * @package enrol_selfwithcapability
 * @copyright 2022 Astor Bizard, 2018 Farhan Karmali
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class editselectedusers_operation extends enrol_self_editselectedusers_operation {

    /**
     * Processes the bulk operation request for the given userids with the provided properties.
     *
     * @param \course_enrolment_manager $manager
     * @param array $users
     * @param \stdClass $properties The data returned by the form.
     */
    public function process(\course_enrolment_manager $manager, array $users, \stdClass $properties) {
        global $DB, $USER;

        if (!has_capability("enrol/selfwithcapability:manage", $manager->get_context())) {
            return false;
        }

        // Get all of the user enrolment id's.
        $ueids = [];
        foreach ($users as $user) {
            foreach ($user->enrolments as $enrolment) {
                // Check that each instance is manageable by the current user.
                if (!$this->plugin->allow_manage($enrolment)) {
                    return false;
                }
                $ueids[] = $enrolment->id;
            }
        }

        // Collect the known properties.
        $status = $properties->status;
        $timestart = $properties->timestart;
        $timeend = $properties->timeend;

        list($ueidsql, $params) = $DB->get_in_or_equal($ueids, SQL_PARAMS_NAMED);

        $updatesql = [];
        if ($status == ENROL_USER_ACTIVE || $status == ENROL_USER_SUSPENDED) {
            $updatesql[] = 'status = :status';
            $params['status'] = (int)$status;
        }
        if (!empty($timestart)) {
            $updatesql[] = 'timestart = :timestart';
            $params['timestart'] = (int)$timestart;
        }
        if (!empty($timeend)) {
            $updatesql[] = 'timeend = :timeend';
            $params['timeend'] = (int)$timeend;
        }
        if (empty($updatesql)) {
            return true;
        }

        // Update the modifierid.
        $updatesql[] = 'modifierid = :modifierid';
        $params['modifierid'] = (int)$USER->id;

        // Update the time modified.
        $updatesql[] = 'timemodified = :timemodified';
        $params['timemodified'] = time();

        // Build the SQL statement.
        $updatesql = join(', ', $updatesql);
        $sql = "UPDATE {user_enrolments}
                   SET $updatesql
                 WHERE id $ueidsql";

        if ($DB->execute($sql, $params)) {
            foreach ($users as $user) {
                foreach ($user->enrolments as $enrolment) {
                    // Trigger event.
                    $event = \core\event\user_enrolment_updated::create(
                        [
                            'objectid' => $enrolment->id,
                            'courseid' => $enrolment->enrolmentinstance->courseid,
                            'context' => $manager->get_context(),
                            'relateduserid' => $user->id,
                            'other' => [ 'enrol' => 'selfwithcapability' ],
                        ]
                    );
                    $event->trigger();
                }
                // User enrolments have changed, so mark user as dirty.
                mark_user_dirty($user->id);

                \core_course_category::user_enrolment_changed($enrolment->enrolmentinstance->courseid, $user->id,
                        $properties->status, $properties->timestart, $properties->timeend);
            }
            return true;
        }

        return false;
    }
}
