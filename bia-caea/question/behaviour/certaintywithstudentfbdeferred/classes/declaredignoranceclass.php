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
 * Declared ignorance class (classification given declared ignorance rate) definition.
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2025 Astor Bizard
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class declaredignoranceclass {

    /**
     * @var array Default colors for declared ignorance rate classes.
     */
    protected const COLORDEFAULTS = [
            'none' => '#104862',
            'moderate' => '#4e93d9',
            'high' => '#e97132',
    ];

    /**
     * @var string Name of the class ('none', 'moderate', 'high')
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
     * @param string $name Name ('none', 'moderate', 'high')
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
     * @return declaredignoranceclass[]
     */
    public static function get_classes() {
        static $classes;
        if (empty($classes)) {
            $classes = [];
            $labelmapping = static::get_label_mapping();
            foreach ([ 'none', 'moderate', 'high' ] as $name) {
                $classes[$name] = new declaredignoranceclass(
                        $name,
                        $labelmapping[$name],
                        static::COLORDEFAULTS[$name],
                        );
            }
        }
        return $classes;
    }

    /**
     * Map level to localized label.
     * @return array Map levelname => localized label.
     */
    protected static function get_label_mapping() {
        return [
                'none' => get_string('nodeclaredignorance', locallib::COMPONENT),
                'moderate' => get_string('declaredignoranceratebelow', locallib::COMPONENT, '20%'),
                'high' => get_string('declaredignorancerateabove', locallib::COMPONENT, '20%'),
        ];
    }

    /**
     * Export declared ignorance rate classes to be used by templates.
     * @return array Template context for classes, an array of entries with [ 'label' => xxx, 'color' => yyy ].
     */
    public static function classes_for_template() {
        $context = [];
        foreach (static::get_classes() as $class) {
            $context[] = [
                    'label' => $class->label,
                    'color' => $class->color,
            ];
        }
        return $context;
    }

}
