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
 * Strings for component 'enrol_temporaryaccess', language 'en'
 * @package    enrol_temporaryaccess
 * @copyright  Astor Bizard, 2022
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Temporary access';

$string['cantenrol'] = 'Enrolment is disabled, inactive or unavailable';
$string['cantenrolcapabilitymissing'] = 'You cannot access the course, as you lack the following permissions: {$a}';
$string['defaultcaps'] = 'Default required capabilities';
$string['defaultcaps_desc'] = 'A comma-separated list of capability names, eg. "moodle/category:viewhiddencategories".';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select default role to be assigned to users using this enrolment method.';
$string['enrolicon'] = 'Course enrol icon';
$string['enrolicon_desc'] = 'Icon to be displayed on site page for courses with this enrolment method.<br>
Please specify a valid FontAwesome icon name. You can also leave this field blank to use an image:
name it <samp>enrolicon</samp> and put it under the <samp>enrol/temporaryaccess/pix/</samp> folder.<br>
Note: you may need to purge caches of your site for this change to actually take effect.';
$string['enrolme'] = 'Access';
$string['gotoenrolmentpage'] = 'Go back to enrolment page';
$string['invalidcapability'] = 'Invalid capability identifier: {$a}';
$string['password'] = 'Access key';
$string['password_help'] = 'If a value is supplied, users will have to provide the password in order to access the course via this method.<br>
If no value is supplied, no password will be required.';
$string['passwordinvalid'] = 'Invalid access key';
$string['privacy:metadata'] = 'The Temporary access enrolment plugin does not store any personal data.';
$string['role'] = 'Role assignation';
$string['role_help'] = 'What role should be assigned to users who access the course via this enrolment method?';
$string['requiredcapabilities'] = 'Required capabilities';
$string['requiredcapabilities_help'] = 'Only users with all the selected capabilities will be able to access the course via this method.<br>
As capabilities must be held before accessing the course, they usually should be held at system or course category level.';
$string['requirepassword'] = 'Require access key';
$string['requirepassword_desc'] = 'If checked, any new instances of this enrolment method will be required to set an access key.';
$string['showunavailableenrolform'] = 'Display unavailable enrol instance form';
$string['showunavailableenrolform_desc'] = 'If checked, an unavailable enrol instance form will be displayed collapsed with a message explaining why it is unavailable.<br>
If not, unavailable enrol instances forms will not be displayed at all.';
$string['status'] = 'Enabled';
$string['status_help'] = 'If not enabled, no user will be able to access the course via this enrolment method.';
$string['temporaryaccess:config'] = 'Configure Temporary access enrol instances';
$string['temporaryaccess:manage'] = 'Manage users enrolled via Temporary access';
$string['tempswitchback'] = 'Switch back to my normal role';
$string['tempswitchtorole'] = 'Temporarily switch to {$a} role';
$string['usepasswordpolicy'] = 'Use password policy';
$string['usepasswordpolicy_desc'] = 'Use standard password policy for access keys.';
