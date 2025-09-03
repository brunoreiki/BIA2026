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

namespace qbehaviour_certaintywithstudentfbdeferred;

/**
 * Utility class for the plugin.
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2024 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class locallib {

    /**
     * @var string Frankenstyle name of this plugin
     */
    public const COMPONENT = 'qbehaviour_certaintywithstudentfbdeferred';

    /**
     * @var string Unique name for the settings page
     */
    public const SETTINGSPAGE = 'qbehaviour_certaintywithstudentfbdeferred';

    /**
     * Determine if the first certainty level is associated with declared ignorance
     * @return boolean
     */
    public static function exists_level_of_declared_ignorance() {
        return certaintylevel::get_levels()[0]->category === certaintylevel::CATEGORYRANDOM;
    }

    /** @var integer Compute grade for attempt. */
    public const INDICATOR_GRADE = 1;
    /** @var integer Compute lucidity index for attempt. */
    public const INDICATOR_LUCIDITY = 2;
    /** @var integer Compute lucidity label and color for attempt. */
    public const INDICATOR_LUCIDITY_LABEL_COLOR = 4;
    /** @var integer Compute confidence rate for attempt. */
    public const INDICATOR_CONFIDENCE = 8;
    /** @var integer Compute imprudence rate for attempt. */
    public const INDICATOR_IMPRUDENCE = 16;
    /** @var integer Compute declared ignorance rate and color for attempt. */
    public const INDICATOR_IGNORANCERATE = 32;

    /**
     * Compute all indicators regarding a quiz attempt.
     * @param \question_usage_by_activity|int $qubaorid Either a question usage or an usage id.
     * @param int $flags A combination of INDICATOR_XX constants, to only compute required indicators. Defaults to all indicators.
     * @return \stdClass An object containing all indicators for the attempt.
     */
    public static function get_lucidity_indicators_for_attempt($qubaorid, $flags = 65535) {
        global $CFG;
        require_once($CFG->dirroot . '/question/engine/questionusage.php');
        if ($qubaorid instanceof \question_usage_by_activity) {
            $quba = $qubaorid;
        } else {
            require_once($CFG->dirroot . '/question/engine/lib.php');
            $quba = \question_engine::load_questions_usage_by_activity($qubaorid);
        }
        $attemptdata = new \stdClass();
        $ncategories = count(answersubcategory::get_subcategories());
        $rightcertaintysum = 0;
        $wrongcertaintysum = 0;
        $attemptdata->subcategorysizes = array_fill(0, $ncategories, 0);
        $hasunexpectederror = false;
        $hasunsureknowledge = false;
        $attemptdata->nright = 0;
        $attemptdata->nwrong = 0;
        $attemptdata->nrandom = 0;
        if ($flags & (~ static::INDICATOR_GRADE)) { // Anything more than grade.
            foreach ($quba->get_attempt_iterator() as $qa) {
                $subcategory = answersubcategory::subcategorize_answer($qa);
                if ($subcategory !== null) {
                    $attemptdata->subcategorysizes[$subcategory->index] ++;
                    if ($subcategory->answerclass->correctness === 'incorrect') {
                        $attemptdata->nwrong ++;
                        if ($flags & (static::INDICATOR_IMPRUDENCE | static::INDICATOR_LUCIDITY)) {
                            $matches = null;
                            if (preg_match('/([0-9.,]+)\s*%/', $subcategory->certaintylevel->percentage, $matches)) {
                                $wrongcertaintysum += (float) $matches[1];
                            }
                        }
                        $hasunexpectederror = $hasunexpectederror || $subcategory->answerclass->name === 'unexpectederror';
                    } else if ($subcategory->answerclass->correctness === 'correct') {
                        $attemptdata->nright ++;
                        if ($flags & (static::INDICATOR_CONFIDENCE | static::INDICATOR_LUCIDITY)) {
                            $matches = null;
                            if (preg_match('/([0-9.,]+)\s*%/', $subcategory->certaintylevel->percentage, $matches)) {
                                $rightcertaintysum += (float) $matches[1];
                            }
                        }
                        $hasunsureknowledge = $hasunsureknowledge || $subcategory->answerclass->name !== 'sureknowledge';
                    } else {
                        $attemptdata->nrandom ++;
                    }
                }
            }
        }

        // Lucidity calculation.
        if ($flags & static::INDICATOR_CONFIDENCE) {
            if ($attemptdata->nright > 0) {
                $attemptdata->confidencerate = round($rightcertaintysum / $attemptdata->nright, 2) . '%';
            } else {
                $attemptdata->confidencerate = '-';
            }
        }
        if ($flags & static::INDICATOR_IMPRUDENCE) {
            if ($attemptdata->nwrong > 0) {
                $attemptdata->imprudencerate = round($wrongcertaintysum / $attemptdata->nwrong, 2) . '%';
            } else {
                $attemptdata->imprudencerate = '-';
            }
        }
        if ($flags & static::INDICATOR_LUCIDITY) {
            if ($attemptdata->nright > 0 || $attemptdata->nwrong > 0) {
                $nrelevantanswers = $attemptdata->nright + $attemptdata->nwrong;
                $attemptdata->lucidityindex = round(($rightcertaintysum - $wrongcertaintysum) / $nrelevantanswers, 2);
            } else if ($attemptdata->nrandom > 0) {
                $attemptdata->lucidityindex = 0;
            } else {
                // Can happen if quiz behaviour was changed.
                $attemptdata->lucidityindex = '-';
            }
        }

        if ($flags & static::INDICATOR_GRADE) {
            // Grade calculation.
            $totalmarks = $quba->get_total_mark();
            if ($totalmarks !== null) {
                $over = 0;
                foreach ($quba->get_attempt_iterator() as $qa) {
                    $over += $qa->get_max_mark();
                }
                $attemptdata->gradeover100 = round($totalmarks * 100.0 / $over, 2);
            } else {
                $attemptdata->gradeover100 = null;
            }
        }

        if ($flags & static::INDICATOR_LUCIDITY_LABEL_COLOR) {
            if ($hasunexpectederror) {
                // At least one unexpected error.
                $lucidityindicator = 'unexpectederror';
            } else if ($attemptdata->nwrong > 0) {
                // No unexpected error but wrong answers.
                $lucidityindicator = 'allegederror';
            } else if ($hasunsureknowledge) {
                // At least one unsecure knowledge, no wrong answers.
                $lucidityindicator = 'unsureknowledge';
            } else if ($attemptdata->nright > 0) {
                // Only well-founded knowledge.
                $lucidityindicator = 'sureknowledge';
            } else if ($attemptdata->nrandom > 0) {
                // Only declared ignorance.
                $lucidityindicator = 'declaredignorance';
            } else {
                // No certainty data - can happen if quiz behaviour was changed.
                $lucidityindicator = null;
            }
            if ($lucidityindicator !== null) {
                $lucidityclass = lucidityclass::get_classes()[$lucidityindicator];
                $attemptdata->lucidityindicatorlabel = $lucidityclass->label;
                $attemptdata->lucidityindicatorcolor = $lucidityclass->color;
            } else {
                $attemptdata->lucidityindicatorlabel = '';
                $attemptdata->lucidityindicatorcolor = '#dedede';
            }
        }

        if (static::exists_level_of_declared_ignorance()) {
            if ($flags & static::INDICATOR_IGNORANCERATE) {
                $declaredignorancerate = ($attemptdata->nrandom * 100.0) / $quba->question_count();
                if ($declaredignorancerate > 20) {
                    $dirindicator = 'high';
                } else if ($declaredignorancerate > 0) {
                    $dirindicator = 'moderate';
                } else {
                    $dirindicator = 'none';
                }
                $attemptdata->ignorancerateindicatorcolor = declaredignoranceclass::get_classes()[$dirindicator]->color;
                $attemptdata->declaredignorancerate = round($declaredignorancerate, 2) . '%';
            }
        } else {
            $attemptdata->nrandom = '-';
            if ($flags & static::INDICATOR_IGNORANCERATE) {
                $attemptdata->declaredignorancerate = '-';
                $attemptdata->ignorancerateindicatorcolor = '#dedede';
            }
        }

        return $attemptdata;
    }

    /**
     * Render a chart hidden behind a loading icon. Loading icon has to be removed via javascript (caller responsibility).
     * @param \core\chart_base $chart The chart to render.
     * @param string $identifier The data-role attribute to the chart container (will be prefixed by plugin frankenstyle name).
     * @return string HTML fragment.
     */
    public static function render_loading_chart($chart, $identifier) {
        global $OUTPUT;
        return $OUTPUT->render_from_template(static::COMPONENT . '/loadingchart', [
                'content' => $OUTPUT->render($chart),
                'role' => static::COMPONENT . '_' . $identifier,
        ]);
    }

}
