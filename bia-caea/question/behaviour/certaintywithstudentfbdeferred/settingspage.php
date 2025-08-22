<?php
// This file is part of Moodle - https://moodle.org/
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
 * Admin settings externalpage.
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2024 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../../config.php');

use qbehaviour_certaintywithstudentfbdeferred\locallib;

global $CFG, $PAGE, $OUTPUT, $SITE;
require_once($CFG->libdir . '/adminlib.php');

$context = context_system::instance();
$PAGE->set_context(context_system::instance());
if (empty(admin_get_root(false, false)->locate(qbehaviour_certaintywithstudentfbdeferred\locallib::SETTINGSPAGE))) {
    // This page has not been added to admin tree for some reason (see MDL-68335, maybe local_certaintysettings is missing).
    require_login();
    require_capability('moodle/site:config', $context);
    $PAGE->set_pagelayout('admin');
    $PAGE->set_url(new moodle_url('/question/behaviour/certaintywithstudentfbdeferred/settingspage.php'));
    $PAGE->set_title("$SITE->shortname: " . get_string('pluginsettings', locallib::COMPONENT));
    $PAGE->set_heading($SITE->fullname);
    $PAGE->navbar->add(get_string('administrationsite'), new moodle_url('/admin/search.php'));
} else {
    // This does setup the page and does all the login and access checks.
    admin_externalpage_setup(locallib::SETTINGSPAGE);
}

$form = new qbehaviour_certaintywithstudentfbdeferred\settingsform();

if (($fromform = $form->get_data()) !== null) {
    // Form is submitted and validated, save settings and redirect.
    unset($fromform->submitbutton); // Not a setting!
    foreach ($fromform as $field => $value) {
        set_config($field, $value, locallib::COMPONENT);
    }
    redirect($PAGE->url, get_string('changessaved'), null, \core\output\notification::NOTIFY_SUCCESS);
    die();
} else if ($form->is_cancelled()) {
    // Form is cancelled, redirect to main admin page.
    redirect(new moodle_url('/admin/search.php'));
    die();
} else if ($form->is_submitted() && !$form->is_validated()) {
    \core\notification::add(get_string('settingsformerrors', locallib::COMPONENT),
            \core\output\notification::NOTIFY_ERROR);
}

// Form is not to be processed right now, display the page.
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginsettings', locallib::COMPONENT));
// Put existing data into form and display it.
$form->set_data(get_config(locallib::COMPONENT));
$form->display();
echo $OUTPUT->footer();
