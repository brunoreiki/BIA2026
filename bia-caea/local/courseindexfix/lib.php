<?php
defined('MOODLE_INTERNAL') || die();

function local_courseindexfix_before_footer() {
    global $PAGE;
    // Always load; lightweight and guarded in JS.
    $PAGE->requires->js_call_amd('local_courseindexfix/fix_index', 'init');
}

function local_courseindexfix_extend_navigation_course(navigation_node $navigation, stdClass $course, context $context) {
    global $PAGE;
    $PAGE->requires->js_call_amd('local_courseindexfix/fix_index', 'init');
}

function local_courseindexfix_extend_settings_navigation(settings_navigation $settingsnav, context $context) {
    global $PAGE;
    $PAGE->requires->js_call_amd('local_courseindexfix/fix_index', 'init');
}
