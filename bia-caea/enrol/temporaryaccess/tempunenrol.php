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
 * A page that cancels the temporary enrolment of the user, then immediately redirects.
 * @package    enrol_temporaryaccess
 * @copyright  Astor Bizard, 2022
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

$courseid = required_param('id', PARAM_INT);
$instanceid = required_param('instance', PARAM_INT);
$course = get_course($courseid);
$context = context_course::instance($courseid);

require_login($course);

global $DB, $USER;
$instance = $DB->get_record('enrol', array('id' => $instanceid));

if (!empty(get_user_accessdata($USER->id)['ra'][$context->path][$instance->roleid])) {
    remove_temp_course_roles($context);
}

redirect(new moodle_url('/course/view.php?id=' . $courseid));
die();
