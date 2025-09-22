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
 * A page that displays the enrol form, and (temporarily) enrols user if form is submitted (and validated, in case of a password).
 * @package    enrol_temporaryaccess
 * @copyright  Astor Bizard, 2022
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

$courseid = required_param('id', PARAM_INT);
$instanceid = required_param('instance', PARAM_INT);
$course = get_course($courseid);

require_login($course);

global $DB, $OUTPUT, $PAGE;
$plugin = enrol_get_plugin('temporaryaccess');
$instance = $DB->get_record('enrol', array('id' => $instanceid));

$enrolstatus = $plugin->can_self_enrol($instance);

$form = new enrol_temporaryaccess\access_form($enrolstatus, null, $instance);

if ($enrolstatus !== true) {
    redirect(new moodle_url('/course/view.php?id=' . $courseid), $enrolstatus, null, \core\output\notification::NOTIFY_ERROR);
    die();
}

if (!$instance->password || $form->get_data() !== null) {
    $plugin->enrol_current_user($instance);
    redirect(new moodle_url('/course/view.php?id=' . $courseid));
    die();
} else {
    $title = $plugin->get_instance_name($instance);
    $PAGE->set_context(context_course::instance($courseid));
    $PAGE->set_title($title);
    $PAGE->set_pagelayout('incourse');
    $PAGE->set_heading($title);
    $PAGE->set_url('/enrol/temporaryaccess/tempenrol.php?id=' . $courseid . '&instance=' . $instanceid);
    echo $OUTPUT->header();
    echo $OUTPUT->heading($title);
    echo $OUTPUT->box($form->render());
    echo $OUTPUT->footer();
}
