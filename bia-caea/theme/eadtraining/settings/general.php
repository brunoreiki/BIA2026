<?php
// This file is part of Moodle - http://moodle.org/
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
 * General file
 *
 * @package   theme_eadtraining
 * @copyright 2025 Eduardo Kraus {@link http://eduardokraus.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

global $CFG, $OUTPUT, $PAGE;
require_once("{$CFG->dirroot}/theme/eadtraining/lib.php");

$page = new admin_settingpage("theme_eadtraining_general",
    get_string("generalsettings", "theme_eadtraining"));

$url = "{$CFG->wwwroot}/theme/eadtraining/quickstart/#brandcolor";
$setting = new admin_setting_heading("theme_eadtraining_quickstart_brandcolor", "",
    get_string("quickstart_settings_link", "theme_eadtraining", $url));
$page->add($setting);

$htmlselect = "<link rel=\"stylesheet\" href=\"{$CFG->wwwroot}/theme/eadtraining/scss/colors.css\" />";
$config = get_config("theme_eadtraining");
if (!isset($config->startcolor[2])) {
    $htmlselect .= "\n\n" . $OUTPUT->render_from_template("theme_eadtraining/settings/colors", [
            "startcolor" => true,
            "colors" => theme_eadtraining_colors(),
        ]);

    $setting = new admin_setting_configtext("theme_eadtraining/startcolor",
        get_string('brandcolor', 'theme_boost'),
        get_string('brandcolor_desc', 'theme_eadtraining') . "<div class='mb-3'>{$htmlselect}</div>",
        "#1a2a6c");
    $PAGE->requires->js_call_amd("theme_eadtraining/settings", "minicolors", [$setting->get_id()]);
    $setting->set_updatedcallback("theme_eadtraining_change_color");
    $page->add($setting);
} else {
    $htmlselect .= "\n\n" . $OUTPUT->render_from_template("theme_eadtraining/settings/colors", [
            "brandcolor" => true,
            "colors" => theme_eadtraining_colors(),
        ]);

    // We use an empty default value because the default colour should come from the preset.
    $setting = new admin_setting_configtext("theme_boost/brandcolor",
        get_string('brandcolor', 'theme_eadtraining'),
        get_string('brandcolor_desc', 'theme_eadtraining') . "<div class='mb-3'>{$htmlselect}</div>",
        '#1a2a6c');
    $setting->set_updatedcallback("theme_eadtraining_change_color");
    $page->add($setting);
    $PAGE->requires->js_call_amd("theme_eadtraining/settings", "minicolors", [$setting->get_id()]);
}

$page->add(new admin_setting_configcheckbox("theme_eadtraining/brandcolor_background_menu",
    get_string("brandcolor_background_menu", "theme_eadtraining"),
    get_string("brandcolor_background_menu_desc", "theme_eadtraining"), 0));

// Background image setting.
$name = "theme_eadtraining/backgroundimage";
$title = get_string("backgroundimage", "theme_eadtraining");
$description = get_string("backgroundimage_desc", "theme_eadtraining");
$setting = new admin_setting_configstoredfile($name, $title, $description, "backgroundimage");
$setting->set_updatedcallback("theme_reset_all_caches");
$page->add($setting);

// Login Background image setting.
$name = "theme_eadtraining/loginbackgroundimage";
$title = get_string("loginbackgroundimage", "theme_eadtraining");
$description = get_string("loginbackgroundimage_desc", "theme_eadtraining");
$setting = new admin_setting_configstoredfile($name, $title, $description, "loginbackgroundimage");
$setting->set_updatedcallback("theme_reset_all_caches");
$page->add($setting);

$settings->add($page);
