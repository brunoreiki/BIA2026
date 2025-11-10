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
 * AJAX calls for this component.
 * @copyright  2025 Astor Bizard, 2024 Loic Delon
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import Ajax from 'core/ajax';

export default {
    getQuestionData: function(courseid, quizid, questionid, attempttype) {
        return Ajax.call([{
            methodname: 'report_certaintyquizzes_get_question_data',
            args: {
                courseid,
                quizid,
                questionid,
                attempttype,
            },
        }])[0];
    },
    getUsersAttemptsData: function(courseid, quizid, attempttype, userids, sortcolumn) {
        return Ajax.call([{
            methodname: 'report_certaintyquizzes_get_users_attempts_data',
            args: {
                courseid,
                quizid,
                attempttype,
                userids,
                sortcolumn,
            },
        }])[0];
    },
};
