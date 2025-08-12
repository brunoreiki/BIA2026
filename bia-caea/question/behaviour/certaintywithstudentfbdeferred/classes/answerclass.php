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
 * Answer class (classification given correctness and certainty level) definition.
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2024 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class answerclass {

    /**
     * @var string Name of the class ('unexpectederror', 'allegederror', 'declaredignorance', 'unsureknowledge', or 'sureknowledge')
     */
    public $name;

    /**
     * @var string Localized name of the class
     */
    public $label;

    /**
     * @var string|null Either 'correct' or 'incorrect', or null if this class describes a case where correctness does not matter
     */
    public $correctness;

    /**
     * @var string CSS color for this class
     */
    public $color;

    /**
     * @var bool Whether the student feedback field should be displayed under questions with answers of this class
     */
    public $feedbackfield;

    /**
     * @var number The number of answer subcategories that belong to this class
     */
    public $nsubcategories;

    /**
     * Constructor
     * @param string $name Name ('unexpectederror', 'allegederror', 'declaredignorance', 'unsureknowledge', or 'sureknowledge')
     * @param string $label Localized name
     * @param string|null $correctness Either 'correct' or 'incorrect', or null if correctness does not matter
     * @param string $color CSS color
     * @param boolean $feedbackfield Should the student feedback field be displayed under questions with answers of the class?
     * @param number $nsubcategories The number of answer subcategories that belong to the class
     */
    public function __construct($name, $label, $correctness, $color, $feedbackfield, $nsubcategories) {
        $this->name = $name;
        $this->label = $label;
        $this->correctness = $correctness;
        $this->color = $color;
        $this->feedbackfield = $feedbackfield;
        $this->nsubcategories = $nsubcategories;
    }

    /**
     * Get all answer classes. The result is cached for performances.
     * @return answerclass[]
     */
    public static function get_classes() {
        static $classes;
        if (empty($classes)) {
            $classes = [];
            $pluginconfig = get_config(locallib::COMPONENT);
            foreach ([ 'unexpectederror', 'allegederror', 'declaredignorance', 'unsureknowledge', 'sureknowledge' ] as $name) {
                $classes[] = new answerclass(
                        $name,
                        get_string($name, locallib::COMPONENT),
                        null, // We set correctness just below.
                        $pluginconfig->{$name . 'color'} ?? settingsform::COLORDEFAULTS[$name],
                        $pluginconfig->{$name . 'enablefb'} ?? 1,
                        0 // We set the number of subcategories just below.
                        );
            }
            $classes[0]->correctness = $classes[1]->correctness = 'incorrect';
            $classes[3]->correctness = $classes[4]->correctness = 'correct';
            foreach (certaintylevel::get_levels() as $certaintylevel) {
                if ($certaintylevel->category === certaintylevel::CATEGORYRANDOM) {
                    $classes[2]->nsubcategories ++;
                } else if ($certaintylevel->category === certaintylevel::CATEGORYUNSURE) {
                    $classes[1]->nsubcategories ++;
                    $classes[3]->nsubcategories ++;
                } else if ($certaintylevel->category === certaintylevel::CATEGORYSURE) {
                    $classes[0]->nsubcategories ++;
                    $classes[4]->nsubcategories ++;
                }
            }
            if (!locallib::exists_level_of_declared_ignorance()) {
                array_splice($classes, 2, 1);
            }
        }
        return $classes;
    }

}
