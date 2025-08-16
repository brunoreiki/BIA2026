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

use question_attempt;

/**
 * Answer subcategory (detailed classification given correctness and certainty level) definition.
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2024 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class answersubcategory {

    /**
     * @var number Index of this subcategory in the array of all subcategories
     */
    public $index;

    /**
     * @var string Localized detailed label describing this subcategory
     */
    public $detailedlabel;

    /**
     * @var answerclass Answer class this subcategory belongs to
     */
    public $answerclass;

    /**
     * @var certaintylevel Certainty level associated with this subcategory
     */
    public $certaintylevel;

    /**
     * @var string CSS color (this is just a pointer to the answer class color for convenience)
     */
    public $color;

    /**
     * Constructor
     * @param number $index Index in the array of all subcategories
     * @param string $detailedlabel Localized detailed label
     * @param answerclass $answerclass Answer class the subcategory belongs to
     * @param certaintylevel $certaintylevel Certainty level associated with the subcategory
     */
    public function __construct($index, $detailedlabel, $answerclass, $certaintylevel) {
        $this->index = $index;
        $this->detailedlabel = $detailedlabel;
        $this->answerclass = $answerclass;
        $this->certaintylevel = $certaintylevel;
        $this->color = $answerclass->color;
    }

    /**
     * Get all answer subcategories. The result is cached for performances.
     * @return answersubcategory[]
     */
    public static function get_subcategories() {
        static $subcategories;
        if (empty($subcategories)) {
            $categoriesbycorrectness = [ 'incorrect' => [], 'neutral' => [], 'correct' => [] ];
            foreach (certaintylevel::get_levels() as $certaintylevel) {
                if ($certaintylevel->category === certaintylevel::CATEGORYRANDOM) {
                    // Declared ignorance.
                    $categoriesbycorrectness['neutral'][] = new answersubcategory(
                            0,
                            get_string('declaredignorance_details', locallib::COMPONENT),
                            answerclass::get_classes()[2],
                            $certaintylevel
                            );
                } else {
                    foreach ([ 0 => 'incorrect', 1 => 'correct' ] as $iscorrect => $cat) {
                        $correctness = '<b class="text-' . ($iscorrect ? 'success' : 'danger') . '">' .
                                            get_string($iscorrect ? 'correct' : 'incorrect', locallib::COMPONENT) .
                                        '</b>';
                        $details = get_string('answercategorydetails', locallib::COMPONENT, [
                                'youranswer' => get_string('answer', locallib::COMPONENT, $correctness),
                                'certainty' => get_string($certaintylevel->name . '_details', locallib::COMPONENT),
                        ]);
                        $classoffset = [ certaintylevel::CATEGORYUNSURE => 1, certaintylevel::CATEGORYSURE => 2 ];
                        if (locallib::exists_level_of_declared_ignorance()) {
                            $classid = 2 + ($iscorrect ? 1 : -1) * ($classoffset[$certaintylevel->category]);
                        } else {
                            $classid = ($iscorrect ? 1 : 2) + ($iscorrect ? 1 : -1) * ($classoffset[$certaintylevel->category]);
                        }
                        $answerclass = answerclass::get_classes()[$classid];
                        $categoriesbycorrectness[$cat][] = new answersubcategory(
                                0,
                                get_string($answerclass->name . '_details', locallib::COMPONENT, $details),
                                $answerclass,
                                $certaintylevel
                                );
                    }
                }
            }
            $subcategories = array_merge(
                    array_reverse($categoriesbycorrectness['incorrect']),
                    $categoriesbycorrectness['neutral'],
                    $categoriesbycorrectness['correct']
                    );
            foreach ($subcategories as $i => &$subcategory) {
                $subcategory->index = $i;
            }
        }
        return $subcategories;
    }

    /**
     * Categorizes an answer.
     * @param question_attempt $qa The question attempt that has been answered.
     * @return answersubcategory|null The answer subcategory, or null if not relevant.
     */
    public static function subcategorize_answer(question_attempt $qa) {
        $certainty = $qa->get_last_behaviour_var('certainty');
        if ($certainty === null) {
            return null;
        }
        $iscorrect = $qa->get_state()->is_correct();
        $offset = locallib::exists_level_of_declared_ignorance() || !$iscorrect ? -1 : 0;
        return static::get_subcategories()[count(certaintylevel::get_levels()) + $offset + ($iscorrect ? 1 : -1) * $certainty];
    }

}
