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
 * Administration plugin-specific settings definition.
 * @package    enrol_temporaryaccess
 * @copyright  Astor Bizard, 2022
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configcheckbox(
            'enrol_temporaryaccess/requirepassword',
            get_string('requirepassword', 'enrol_temporaryaccess'),
            get_string('requirepassword_desc', 'enrol_temporaryaccess'),
            0
            ));

    $settings->add(new admin_setting_configcheckbox(
            'enrol_temporaryaccess/usepasswordpolicy',
            get_string('usepasswordpolicy', 'enrol_temporaryaccess'),
            get_string('usepasswordpolicy_desc', 'enrol_temporaryaccess'),
            0
            ));

    $settings->add(new admin_setting_configtext(
            'enrol_temporaryaccess/enrolicon',
            get_string('enrolicon', 'enrol_temporaryaccess'),
            get_string('enrolicon_desc', 'enrol_temporaryaccess'),
            'fa-clock-o',
            PARAM_ALPHANUMEXT
            ));

    $settings->add(new admin_setting_configcheckbox(
            'enrol_temporaryaccess/showunavailableenrolform',
            get_string('showunavailableenrolform', 'enrol_temporaryaccess'),
            get_string('showunavailableenrolform_desc', 'enrol_temporaryaccess'),
            1
            ));

    $settings->add(new admin_setting_heading('enrol_temporaryaccess_defaults',
            get_string('enrolinstancedefaults', 'admin'), get_string('enrolinstancedefaults_desc', 'admin')));

    if (!during_initial_install()) {
        $options = get_default_enrol_roles(context_system::instance());
        $students = get_archetype_roles('student');
        $student = reset($students);
        $settings->add(new admin_setting_configselect('enrol_temporaryaccess/defaultroleid',
                get_string('defaultrole', 'enrol_temporaryaccess'), get_string('defaultrole_desc', 'enrol_temporaryaccess'),
                $student->id, $options));

        $settings->add(new admin_setting_configtext('enrol_temporaryaccess/defaultcaps',
                get_string('defaultcaps', 'enrol_temporaryaccess'), get_string('defaultcaps_desc', 'enrol_temporaryaccess'),
                '', PARAM_RAW_TRIMMED, 60));
    }
}
