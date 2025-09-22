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
 * A bulk operation for the selfwithcapability enrolment plugin to delete selected users enrolments.
 *
 * @package enrol_selfwithcapability
 * @copyright 2022 Astor Bizard, 2018 Farhan Karmali
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace enrol_selfwithcapability;

use enrol_self_deleteselectedusers_operation;

/**
 * A bulk operation for the selfwithcapability enrolment plugin to delete selected users enrolments.
 *
 * @package enrol_selfwithcapability
 * @copyright 2022 Astor Bizard, 2018 Farhan Karmali
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class deleteselectedusers_operation extends enrol_self_deleteselectedusers_operation {

    /**
     * Processes the bulk operation request for the given userids with the provided properties.
     *
     * @param \course_enrolment_manager $manager
     * @param array $users
     * @param \stdClass $properties The data returned by the form.
     */
    public function process(\course_enrolment_manager $manager, array $users, \stdClass $properties) {
        if (!has_capability("enrol/selfwithcapability:unenrol", $manager->get_context())) {
            return false;
        }

        foreach ($users as $user) {
            foreach ($user->enrolments as $enrolment) {
                $plugin = $enrolment->enrolmentplugin;
                $instance = $enrolment->enrolmentinstance;
                if ($plugin->allow_unenrol_user($instance, $enrolment)) {
                    $plugin->unenrol_user($instance, $user->id);
                }
            }
        }

        return true;
    }
}
