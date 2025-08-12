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
 * Lucidity class (classification given answer classes) definition.
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2025 Astor Bizard
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class lucidityclass {

    /**
     * @var string Name of the class ('unexpectederror', 'allegederror', 'declaredignorance', 'unsureknowledge', or 'sureknowledge')
     */
    public $name;

    /**
     * @var string Localized name of the class
     */
    public $label;

    /**
     * @var string CSS color for this class
     */
    public $color;

    /**
     * Constructor
     * @param string $name Name ('unexpectederror', 'allegederror', 'declaredignorance', 'unsureknowledge', or 'sureknowledge')
     * @param string $label Localized name
     * @param string $color CSS color
     */
    public function __construct($name, $label, $color) {
        $this->name = $name;
        $this->label = $label;
        $this->color = $color;
    }

    /**
     * Get all attempt classes. The result is cached for performances.
     * @return lucidityclass[]
     */
    public static function get_classes() {
        static $classes;
        if (empty($classes)) {
            $classes = [];
            $pluginconfig = get_config(locallib::COMPONENT);
            foreach ([ 'unexpectederror', 'allegederror', 'declaredignorance', 'unsureknowledge', 'sureknowledge' ] as $name) {
                $classes[$name] = new lucidityclass(
                        $name,
                        get_string('lucidityindicator' . $name, locallib::COMPONENT),
                        $pluginconfig->{$name . 'color'} ?? settingsform::COLORDEFAULTS[$name],
                        );
            }
        }
        return $classes;
    }

    /**
     * Export lucidity classes to be used by templates.
     * @param bool $withdeclaredignorance Whether the first answer class is declared ignorance.
     * @return array Template context for classes, an array of entries with [ 'label' => xxx, 'color' => yyy ].
     */
    public static function classes_for_template($withdeclaredignorance) {
        $keys = [ 'sureknowledge', 'unsureknowledge' ];
        if ($withdeclaredignorance) {
            $keys[] = 'declaredignorance';
        }
        $keys[] = 'allegederror';
        $keys[] = 'unexpectederror';
        $context = [];
        foreach ($keys as $key) {
            $class = static::get_classes()[$key];
            $context[] = [
                    'label' => $class->label,
                    'color' => $class->color,
            ];
        }
        return $context;
    }

}
