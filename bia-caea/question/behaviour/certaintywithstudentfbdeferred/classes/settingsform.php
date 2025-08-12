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

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/formslib.php');

use moodle_url;
use moodleform;

/**
 * Admin settings form definition.
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2024 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class settingsform extends moodleform {

    /**
     * @var array Required javascript for the form, it will be included when the form is displayed.
     */
    protected $javascript = [];

    /**
     * @var array Presets for certainty levels settings.
     */
    public const PRESETS = [
            'recommended' => [
                    'randomlabel' => 'random_alt',
                    'randompercentage' => '0%',
                    'randomcategory' => certaintylevel::CATEGORYRANDOM,
                    'unsurelabel' => 'unsure',
                    'unsurepercentage' => '30%',
                    'unsurecategory' => certaintylevel::CATEGORYUNSURE,
                    'quiteunsurelabel' => 'quiteunsure',
                    'quiteunsurepercentage' => '60%',
                    'quiteunsurecategory' => certaintylevel::CATEGORYUNSURE,
                    'quitesurelabel' => 'quitesure',
                    'quitesurepercentage' => '80%',
                    'quitesurecategory' => certaintylevel::CATEGORYSURE,
                    'almostsurelabel' => 'almostsure',
                    'almostsurepercentage' => '95%',
                    'almostsurecategory' => certaintylevel::CATEGORYSURE,
                    'surelabel' => 'sure',
                    'surepercentage' => '100%',
                    'surecategory' => certaintylevel::CATEGORYSURE,
            ],
            'alternative' => [
                    'randomlabel' => 'random_alt',
                    'randompercentage' => '0%',
                    'randomcategory' => certaintylevel::CATEGORYRANDOM,
                    'unsurelabel' => 'unsure',
                    'unsurepercentage' => '20%',
                    'unsurecategory' => certaintylevel::CATEGORYUNSURE,
                    'quiteunsurelabel' => 'quiteunsure',
                    'quiteunsurepercentage' => '40%',
                    'quiteunsurecategory' => certaintylevel::CATEGORYUNSURE,
                    'quitesurelabel' => 'quitesure',
                    'quitesurepercentage' => '60%',
                    'quitesurecategory' => certaintylevel::CATEGORYUNSURE,
                    'almostsurelabel' => 'almostsure',
                    'almostsurepercentage' => '80%',
                    'almostsurecategory' => certaintylevel::CATEGORYSURE,
                    'surelabel' => 'sure',
                    'surepercentage' => '100%',
                    'surecategory' => certaintylevel::CATEGORYSURE,
            ],
            'default' => [
                    'randomlabel' => 'random',
                    'randompercentage' => '≤50%',
                    'randomcategory' => certaintylevel::CATEGORYRANDOM,
                    'unsurelabel' => 'unsure',
                    'unsurepercentage' => '60%',
                    'unsurecategory' => certaintylevel::CATEGORYUNSURE,
                    'quiteunsurelabel' => 'quiteunsure',
                    'quiteunsurepercentage' => '70%',
                    'quiteunsurecategory' => certaintylevel::CATEGORYUNSURE,
                    'quitesurelabel' => 'quitesure',
                    'quitesurepercentage' => '80%',
                    'quitesurecategory' => certaintylevel::CATEGORYSURE,
                    'almostsurelabel' => 'almostsure',
                    'almostsurepercentage' => '90%',
                    'almostsurecategory' => certaintylevel::CATEGORYSURE,
                    'surelabel' => 'sure',
                    'surepercentage' => '100%',
                    'surecategory' => certaintylevel::CATEGORYSURE,
            ],
    ];

    /**
     * @var array Defaults for answer classes colors.
     */
    public const COLORDEFAULTS = [
            'unexpectederror' => '#FF0000',
            'allegederror' => '#FFB6C1',
            'declaredignorance' => '#DDDDDD',
            'unsureknowledge' => '#98FB98',
            'sureknowledge' => '#008000',
    ];

    /**
     * {@inheritDoc}
     * @see moodleform::definition()
     */
    protected function definition() {
        global $OUTPUT;

        $mform = $this->_form;

        $mform->addElement('header', '', get_string('settings:certaintylevels', locallib::COMPONENT));

        $presetbuttons = [];
        foreach (static::PRESETS as $name => $preset) {
            $js = '';
            foreach ($preset as $field => $value) {
                $js .= "document.getElementsByName('$field')[0].value='$value';";
            }
            $label = get_string('settings:preset:' . $name, locallib::COMPONENT);
            $presetbuttons[] = '<button type="button" class="btn btn-secondary m-1" onclick="' . $js . '">' . $label . '</button>';
        }
        $mform->addElement('static', null, get_string('settings:loadpresets', locallib::COMPONENT),
                '<div class="btn-toolbar">' . implode('', $presetbuttons) . '</div>');

        $langpackurl = (new moodle_url('/admin/tool/customlang/index.php'))->out();
        $mform->addElement('static', null, null, get_string('settings:certaintylevelsinfo', locallib::COMPONENT, $langpackurl));

        $certaintycategories = [
                certaintylevel::CATEGORYRANDOM => get_string('declaredignorance', locallib::COMPONENT),
                certaintylevel::CATEGORYUNSURE => get_string('unsureknowledge', locallib::COMPONENT) .
                        ' / ' . get_string('allegederror', locallib::COMPONENT),
                certaintylevel::CATEGORYSURE => get_string('sureknowledge', locallib::COMPONENT) .
                        ' / ' . get_string('unexpectederror', locallib::COMPONENT),
        ];
        foreach (certaintylevel::get_levels() as $i => $certaintylevel) {
            $group = [];
            $levelname = $certaintylevel->name;
            $labelchoices = [ $levelname => get_string($levelname, locallib::COMPONENT) ];
            if (get_string_manager()->string_exists($levelname . '_alt', locallib::COMPONENT)) {
                $labelchoices[$levelname . '_alt'] = get_string($levelname . '_alt', locallib::COMPONENT);
            }
            $group[] =& $mform->createElement('select', $levelname . 'label',
                    get_string('settings:label', locallib::COMPONENT), $labelchoices);
            $mform->setDefault($levelname . 'label', static::PRESETS['recommended'][$levelname . 'label']);
            if (get_string_manager()->string_exists($levelname . '_open', locallib::COMPONENT)) {
                $openlabel = get_string($levelname . '_open', locallib::COMPONENT);
                $group[] =& $mform->createElement('advcheckbox', $levelname . 'useopenlabel',
                        get_string('settings:useopenlabela', locallib::COMPONENT, $openlabel));
                $mform->setDefault($levelname . 'useopenlabel', 1);
                $group[] =& $mform->createElement('html', $OUTPUT->help_icon('settings:useopenlabel', locallib::COMPONENT));
            }

            $group[] =& $mform->createElement('html', '<div class="w-100"></div>'); // Acts as a line break.

            $group[] =& $mform->createElement('text', $levelname . 'percentage',
                    get_string('settings:percentage', locallib::COMPONENT), [ 'size' => 6 ]);
            $mform->setType($levelname . 'percentage', PARAM_TEXT);
            $mform->setDefault($levelname . 'percentage', static::PRESETS['recommended'][$levelname . 'percentage']);
            $options = $certaintycategories;
            if ($i > 0) {
                // Only the first certainty level can be categorized as declared ignorance.
                unset($options[certaintylevel::CATEGORYRANDOM]);
            }
            $group[] =& $mform->createElement('select', $levelname . 'category',
                    get_string('settings:answercategorization', locallib::COMPONENT), $options);
            $mform->setDefault($levelname . 'category', static::PRESETS['recommended'][$levelname . 'category']);
            $mform->addGroup($group, $levelname, get_string('settings:certaintylevela', locallib::COMPONENT, $i + 1), '', false);
        }

        $mform->addElement('header', '', get_string('settings:answerclasses', locallib::COMPONENT));

        $mform->addElement('static', null, null, get_string('settings:answerclassesinfo', locallib::COMPONENT, $langpackurl));
        foreach (answerclass::get_classes() as $answerclass) {
            $colorfield = $mform->addElement('text', $answerclass->name . 'color', $answerclass->label);
            $colorfield->_generateId();
            $mform->setType($answerclass->name . 'color', PARAM_RAW);
            $mform->setDefault($answerclass->name . 'color', static::COLORDEFAULTS[$answerclass->name]);
            $colorfieldid = $colorfield->getAttribute('id');
            $defaultlabel = '<span class="text-muted align-middle align-self-center mx-1">' .
                                get_string('defaultsettinginfo', 'admin', static::COLORDEFAULTS[$answerclass->name]) .
                            '</span>';
            $colorpickerdiv = '<div class="admin_colourpicker"></div>';
            $html = $defaultlabel . '<div class="w-100"></div>' . $colorpickerdiv;
            $this->javascript[] = "document.getElementById('$colorfieldid').insertAdjacentHTML('afterend', '$html');";
            $this->javascript[] = [ 'func' => 'M.util.init_colour_picker', 'args' => [ $colorfieldid ] ];
        }

        $mform->addElement('header', '', get_string('settings:studentfeedback', locallib::COMPONENT));

        $fbgroup = [];
        foreach (answerclass::get_classes() as $answerclass) {
            $fbgroup[] =& $mform->createElement('advcheckbox', $answerclass->name . 'enablefb', null, $answerclass->label);
            $mform->setDefault($answerclass->name . 'enablefb', 1);
        }
        $mform->addGroup($fbgroup, 'enablefbforclasses', get_string('settings:enablefbforclasses', locallib::COMPONENT),
                '<br>', false);
        $mform->addHelpButton('enablefbforclasses', 'settings:enablefbforclasses', locallib::COMPONENT);

        $this->add_action_buttons();
    }

    /**
     * {@inheritDoc}
     * @param array $data array of ("fieldname"=>value) of submitted data
     * @param array $files array of uploaded files "element_name"=>tmp_file_path
     * @see moodleform::validation()
     */
    public function validation($data, $files) {
        $errors = parent::validation($data, $files);
        $categoriesorder = [ certaintylevel::CATEGORYRANDOM, certaintylevel::CATEGORYUNSURE, certaintylevel::CATEGORYSURE ];
        $prev = null;
        foreach (certaintylevel::get_levels() as $certaintylevel) {
            $current = array_search($data[$certaintylevel->name . 'category'], $categoriesorder);
            if ($prev !== null && $current < $prev) {
                $errors[$certaintylevel->name] = get_string('settings:error:categoryorder', locallib::COMPONENT);
            }
            $prev = $current;
        }
        return $errors;
    }

    /**
     * {@inheritDoc}
     * @see moodleform::display()
     */
    public function display() {
        global $PAGE;
        parent::display();
        // Include required javascript.
        foreach ($this->javascript as $js) {
            if (is_string($js)) {
                $PAGE->requires->js_init_code($js);
            } else {
                $PAGE->requires->js_init_call($js['func'], $js['args']);
            }
        }
    }
}
