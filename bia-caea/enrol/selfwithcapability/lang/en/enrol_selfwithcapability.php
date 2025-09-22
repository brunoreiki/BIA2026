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
 * Strings for component 'enrol_selfwithcapability', language 'en'.
 *
 * @package    enrol_selfwithcapability
 * @copyright  2022 Astor Bizard, 2010 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Self enrolment with capability';
$string['pluginname_desc'] = 'An enrolment method that behaves like self-enrolment, with additional settings to require capabilities in order to enrol.';

$string['canntenrol'] = 'Enrolment is disabled or inactive';
$string['canntenrolcapabilitymissing'] = 'You cannot enrol, as you lack the following permissions: {$a}';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned by default to users during self enrolment.';
$string['expirymessageenrollersubject'] = 'Enrolment expiry notification';
$string['expirymessageenrollerbody'] = 'Enrolment in the course \'{$a->course}\' will expire within the next {$a->threshold} for the following users:

{$a->users}

To extend their enrolment, go to {$a->extendurl}';
$string['expirymessageenrolledsubject'] = 'Enrolment expiry notification';
$string['expirymessageenrolledbody'] = 'Dear {$a->user},

This is a notification that your enrolment in the course \'{$a->course}\' is due to expire on {$a->timeend}.

If you need help, please contact {$a->enroller}.';
$string['invalidcapability'] = 'Invalid capability identifier: {$a}';
$string['messageprovider:expiry_notification'] = 'Selfwithcapability enrolment expiry notifications';
$string['privacy:metadata'] = 'The Self enrolment with capability plugin does not store any personal data.';
$string['requiredcapabilities'] = 'Required capabilities';
$string['requiredcapabilities_help'] = 'Only users with all the selected capabilities will be able to enrol themselves via this method.<br>
These capabilities must be held either at system or course category level.';
$string['selfwithcapability:config'] = 'Configure selfwithcapability enrol instances';
$string['selfwithcapability:manage'] = 'Manage enrolled users';
$string['selfwithcapability:unenrol'] = 'Unenrol users from course';
$string['selfwithcapability:unenrolself'] = 'Unenrol self from the course';
$string['sendexpirynotificationstask'] = "Selfwithcapability enrolment send expiry notifications task";
$string['showhint'] = 'Show hint';
$string['showhint_desc'] = 'Show first letter of the access key.';
$string['showunavailableenrolform'] = 'Display unavailable enrol instance form';
$string['showunavailableenrolform_desc'] = 'If checked, an unavailable enrol instance form will be displayed collapsed with a message explaining why it is unavailable.<br>
If not, unavailable enrol instances forms will not be displayed at all.';
$string['status'] = 'Allow existing enrolments';
$string['status_desc'] = 'Enable self enrolment with capability method in new courses.';
$string['syncenrolmentstask'] = 'Synchronise selfwithcapability enrolments task';
