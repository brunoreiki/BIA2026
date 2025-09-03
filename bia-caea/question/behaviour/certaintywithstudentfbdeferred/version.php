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
 * Plug-in version and dependencies description.
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2025062501;
$plugin->requires  = 2023100900; // Moodle 4.3.
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = '1.5 for Moodle 4.3+';
$plugin->component = 'qbehaviour_certaintywithstudentfbdeferred';

$plugin->dependencies = [ 'qbehaviour_studentfeedbackdeferred' => 2021120700 ];
