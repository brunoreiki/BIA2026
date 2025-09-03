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
 * Certainty level definition.
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2024 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class certaintylevel {

    /**
     * @var string Name of this certainty level ('random', 'unsure', 'quiteunsure', 'quitesure', 'almostsure', or 'sure')
     */
    public $name;

    /**
     * @var string Localized name of this certainty level
     */
    public $label;

    /**
     * @var string Percentage associated with this certainty level
     */
    public $percentage;

    /**
     * @var string Category defining how answers with this certainty level will be classified (one of certaintylevel::CAT...)
     */
    public $category;

    /**
     * @var bool Whether alternative label should be used for open questions
     */
    public $useopenlabel;

    /**
     * @var string Category classifying answers as declared ignorance
     */
    public const CATEGORYRANDOM = 'catrandom';

    /**
     * @var string Category classifying answers as presumed errors / unsecure knowledge
     */
    public const CATEGORYUNSURE = 'catunsure';

    /**
     * @var string Category classifying answers as unexpected errors / well-founded knowledge
     */
    public const CATEGORYSURE = 'catsure';

    /**
     * Constructor
     * @param string $name Name ('random', 'unsure', 'quiteunsure', 'quitesure', 'almostsure', or 'sure')
     * @param string $label Localized name
     * @param string $percentage Percentage associated with the certainty level
     * @param string $category How will answers with the certainty level be classified? (one of certaintylevel::CAT...)
     * @param boolean $useopenlabel Should alternative label be used for open questions?
     */
    public function __construct($name, $label, $percentage, $category, $useopenlabel) {
        $this->name = $name;
        $this->label = $label;
        $this->percentage = $percentage;
        $this->category = $category;
        $this->useopenlabel = $useopenlabel;
    }

    /**
     * Get all certainty levels. The result is cached for performances.
     * @return certaintylevel[]
     */
    public static function get_levels() {
        static $levels;
        if (empty($levels)) {
            $levels = [];
            $pluginconfig = get_config(locallib::COMPONENT);
            $defaults = settingsform::PRESETS['recommended'];
            foreach ([ 'random', 'unsure', 'quiteunsure', 'quitesure', 'almostsure', 'sure' ] as $name) {
                $openlabelexists = get_string_manager()->string_exists($name . '_open', locallib::COMPONENT);
                $levels[] = new certaintylevel(
                        $name,
                        get_string($pluginconfig->{$name . 'label'} ?? $defaults[$name . 'label'], locallib::COMPONENT),
                        $pluginconfig->{$name . 'percentage'} ?? $defaults[$name . 'percentage'],
                        $pluginconfig->{$name . 'category'} ?? $defaults[$name . 'category'],
                        ($pluginconfig->{$name . 'useopenlabel'} ?? true) && $openlabelexists
                        );
            }
        }
        return $levels;
    }

}
