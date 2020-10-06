<?php
defined('MOODLE_INTERNAL') || die();

$capabilities = array(
    /* Manage user leeloolxp_enroll-enrolments. */
    'enrol/leeloolxp_enroll:manage' => array(

        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW,
        )
    ),
);
