<?php
defined('MOODLE_INTERNAL') || die();

function xmldb_enrol_leeloolxp_enroll_upgrade($oldversion) {
    global $CFG, $DB;
    $dbman = $DB->get_manager();
    return true;
}
