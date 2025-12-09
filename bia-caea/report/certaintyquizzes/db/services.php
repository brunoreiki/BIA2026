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
 * Web services declaration.
 * @package    report_certaintyquizzes
 * @copyright  2025 Astor Bizard, 2024 Loic Delon
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$functions = [
        'report_certaintyquizzes_get_question_data' => [
                'classname'    => 'report_certaintyquizzes\external\get_question_data',
                'description'  => 'Get certainty data about a specific question.',
                'type'         => 'read',
                'ajax'         => true,
                'capabilities' => 'report/certaintyquizzes:view,mod/quiz:viewreports',
                'services' => [
                        MOODLE_OFFICIAL_MOBILE_SERVICE,
                ],
        ],
        'report_certaintyquizzes_get_users_attempts_data' => [
                'classname'    => 'report_certaintyquizzes\external\get_users_attempts_data',
                'description'  => 'Get summary information on some quiz attempts.',
                'type'         => 'read',
                'ajax'         => true,
                'capabilities' => 'report/certaintyquizzes:view,mod/quiz:viewreports',
                'services' => [
                        MOODLE_OFFICIAL_MOBILE_SERVICE,
                ],
        ],
];
