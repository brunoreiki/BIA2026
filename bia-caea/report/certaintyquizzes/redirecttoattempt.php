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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Page redirecting to requested quiz attempt.
 * @package     report_certaintyquizzes
 * @copyright   2025 Astor Bizard
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use report_certaintyquizzes\locallib;

require_once(__DIR__ . '/../../config.php');

require_login(); // No advanced checks needed as we are only redirecting.

$quizid = required_param('quizid', PARAM_INT);
$attempttype = required_param('attempttype', PARAM_RAW);
$userid = required_param('userid', PARAM_INT);

$attempts = locallib::get_specific_attempts($quizid, $attempttype, $userid);
redirect(new moodle_url('/mod/quiz/review.php', [ 'attempt' => reset($attempts)->id ]));

die();
