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
 * Entry point for adding settings page to the admin tree.
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2024 Astor Bizard
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

use qbehaviour_certaintywithstudentfbdeferred\locallib;

// Only add the page if it is not added yet (so we don't break anything when MDL-68335 is fixed.
if ($hassiteconfig && empty($ADMIN->locate(locallib::SETTINGSPAGE))) {
    $ADMIN->add('qbehavioursettings', new admin_externalpage(
            locallib::SETTINGSPAGE,
            get_string('pluginsettings', locallib::COMPONENT),
            new moodle_url('/question/behaviour/certaintywithstudentfbdeferred/settingspage.php')
    ));
}
