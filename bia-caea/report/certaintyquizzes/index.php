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
 * Main report page.
 * @package    report_certaintyquizzes
 * @copyright  2025 Astor Bizard, 2024 Loic Delon
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use report_certaintyquizzes\reports;
use report_certaintyquizzes\locallib;

require_once(__DIR__ . '/../../config.php');

global $OUTPUT, $PAGE, $USER;

$courseid = required_param('courseid', PARAM_INT);
$requestedreport = optional_param('report', 'studentsalongcourse', PARAM_TEXT);

$course = get_course($courseid);

require_login($course);

$PAGE->set_course($course);

$canviewall = has_capability('report/certaintyquizzes:view', $PAGE->context);

if (!$canviewall) {
    require_capability('report/certaintyquizzes:viewself', $PAGE->context);
    $requestedreport = 'studentsalongcourse';
}

// Build report.
if ($requestedreport === 'studentsalongcourse') {
    $report = new reports\studentsalongcourse($courseid);
} else {
    $report = new reports\singlequiz($courseid);
}

$PAGE->set_pagelayout('report');
$url = new moodle_url('/report/certaintyquizzes/index.php', [ 'courseid' => $courseid, 'report' => $requestedreport ]);
$url->params($report->get_url_params());
$PAGE->set_url($url);
$coursename = format_string($course->fullname);
$PAGE->set_title($coursename . ' - ' . get_string('pluginname', locallib::COMPONENT));
$PAGE->set_heading($coursename);

if (!locallib::certainty_quizzes_exist_in_course($courseid)) {
    // No quiz with certainty behaviour in course.
    echo $OUTPUT->header();
    echo $OUTPUT->notification(get_string('nocertaintyquizincourse', locallib::COMPONENT), 'info', false);
    echo $OUTPUT->continue_button(new moodle_url('/course/view.php', [ 'id' => $courseid ]));
    echo $OUTPUT->footer();
    die();
} else if (!locallib::attempts_exist_for_certainty_quizzes_in_course($courseid, $canviewall ? null : $USER->id)) {
    // No attempt on quizzes with certainty behaviour in course.
    echo $OUTPUT->header();
    echo $OUTPUT->notification(get_string('noattemptoncertaintyquizzesincourse', locallib::COMPONENT), 'info', false);
    echo $OUTPUT->continue_button(new moodle_url('/course/view.php', [ 'id' => $courseid ]));
    echo $OUTPUT->footer();
    die();
}

echo $OUTPUT->header();
if ($canviewall) {
    echo $OUTPUT->render_from_template(locallib::COMPONENT . '/report_toggler', [
            'courseid' => $courseid,
            $report->get_type() => true,
    ]);
}
echo $OUTPUT->heading($report->get_title());
$report->print_selectors();
if ($report->validate_selectors()) {
    $report->print_report();
}
echo $OUTPUT->footer();
