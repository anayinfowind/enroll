<?php
defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    // General settings.

    $settings->add( new admin_setting_configtext(
        // This is the reference you will use to your configuration
        'enrol_leeloolxp_enroll/leeloolxp_licensekey',
        // This is the friendly title for the config, which will be displayed
        get_string('licenseid', 'enrol_leeloolxp_enroll'),
        // This is helper text for this config field
        get_string('licenseid_desc', 'enrol_leeloolxp_enroll'),
        // This is the default value
        '0',
        // This is the type of Parameter this config is
        PARAM_TEXT
    ) );

}
