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
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qbehaviour_certaintywithstudentfbdeferred\privacy;

use question_attempt;
use question_attempt_step;
use qbehaviour_certaintywithstudentfbdeferred\certaintylevel;

/**
 * General Data Protection Regulation compliance implementation class definition.
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider extends \qbehaviour_studentfeedbackdeferred\privacy\provider
               implements \core_privacy\local\metadata\provider,
                          \core_privacy\local\request\plugin\provider,
                          \core_privacy\local\request\core_userlist_provider {

    /**
     * @var string $behaviourname The name for this question behaviour. Used for inheritance, it overrides the parent one.
     */
    public static $behaviourname = 'certaintywithstudentfbdeferred';

    /**
     * {@inheritDoc}
     */
    protected static function behaviour_vars() {
        return array_merge(parent::behaviour_vars(), [ '-certainty' ]);
    }

    /**
     * {@inheritDoc}
     * @param question_attempt $qa The question attempt to retrieve data for.
     */
    protected static function get_by_question_question_attempt_data(question_attempt $qa) {
        $data = parent::get_by_question_question_attempt_data($qa);
        if (($certainty = $qa->get_last_behaviour_var('certainty')) !== null) {
            $data->certainty = certaintylevel::get_levels()[$certainty]->label;
        }
        return $data;
    }

    /**
     * {@inheritDoc}
     * @param question_attempt_step $step The question attempt step to retrieve data for.
     */
    protected static function get_question_attempt_step_data(question_attempt_step $step) {
        $stepdata = parent::get_question_attempt_step_data($step);
        if (($certainty = $step->get_behaviour_var('certainty')) !== null) {
            $stepdata->certainty = certaintylevel::get_levels()[$certainty]->label;
        }
        return $stepdata;
    }

}
