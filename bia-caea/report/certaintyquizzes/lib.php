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
 * Callbacks used by Moodle API.
 * @package    report_certaintyquizzes
 * @copyright  2025 Astor Bizard, 2024 Loic Delon
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use report_certaintyquizzes\locallib;

/**
 * Add report to "Reports" navigation.
 * @param navigation_node $navigation The navigation node to extend
 * @param stdClass $course The course for the report
 * @param context $context The context of the course
 */
function report_certaintyquizzes_extend_navigation_course($navigation, $course, $context) {
    if ($course->id != SITEID && $context->contextlevel === CONTEXT_COURSE
            && locallib::certainty_quizzes_exist_in_course($course->id)
            && (has_capability('report/certaintyquizzes:view', $context)
                    || has_capability('report/certaintyquizzes:viewself', $context))) {
        $name = get_string('pluginname', locallib::COMPONENT);
        $url = new moodle_url('/report/certaintyquizzes/index.php', [ 'courseid' => $course->id ]);
        $navlocation = $navigation->find('coursereports', navigation_node::TYPE_CONTAINER);
        if ($navlocation === false) {
            $navlocation = $navigation;
        }
        $navlocation->add($name, $url, navigation_node::TYPE_SETTING, null, null, new pix_icon('i/report', ''));
    }
}
