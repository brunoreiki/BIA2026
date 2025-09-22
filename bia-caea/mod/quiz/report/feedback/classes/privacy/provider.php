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
 * General Data Protection Regulation directive compliance.
 * @package    quiz_feedback
 * @copyright  2018 Andrew Nicols <andrew@nicols.co.uk>, 2022 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace quiz_feedback\privacy;

use core_privacy\local\metadata\collection;
use core_privacy\local\request\writer;
use core_privacy\local\request\transform;

/**
 * Privacy Subsystem for quiz_feedback with user preferences.
 * @copyright  2018 Andrew Nicols <andrew@nicols.co.uk>, 2022 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\provider,
                          \core_privacy\local\request\user_preference_provider {

    /**
     * Returns meta data about this system.
     *
     * @param collection $collection The initialised collection to add items to.
     * @return collection A listing of user data stored through this system.
     */
    public static function get_metadata(collection $collection): collection {
        $collection->add_user_preference('quiz_report_feedback_questiontext', 'privacy:preference:questiontext');
        $collection->add_user_preference('quiz_report_feedback_response', 'privacy:preference:response');
        $collection->add_user_preference('quiz_report_feedback_correctness', 'privacy:preference:correctness');
        $collection->add_user_preference('quiz_report_feedback_studentfeedback', 'privacy:preference:studentfeedback');
        return $collection;
    }

    /**
     * Export all user preferences for the plugin.
     *
     * @param int $userid The userid of the user whose data is to be exported.
     */
    public static function export_user_preferences(int $userid) {
        $preferences = [ 'questiontext', 'response', 'correctness', 'studentfeedback' ];

        foreach ($preferences as $key) {
            $preference = get_user_preferences("quiz_report_feedback_{$key}", null, $userid);
            if (null !== $preference) {
                $desc = get_string("privacy:preference:{$key}", 'quiz_feedback');
                writer::export_user_preference('quiz_feedback', $key, transform::yesno($preference), $desc);
            }
        }
    }
}
