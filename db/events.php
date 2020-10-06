<?php
defined('MOODLE_INTERNAL') || die();

$observers = array(
    array(                  
        'eventname'   => '\core\event\course_module_viewed',
        'callback'    => 'enrol_leeloolxp_enroll_observer::viewed_activity',
    ),

   

    
   array(
        'eventname'   => '\core\event\group_member_added',
        'callback'    => 'enrol_leeloolxp_enroll_observer::group_member_added',
    ),

    array(
        'eventname'   => '\core\event\user_updated',
        'callback'    => 'enrol_leeloolxp_enroll_observer::edit_user',
    ),

     
    array(
        'eventname'   => '\core\event\role_assigned',
        'callback'    => 'enrol_leeloolxp_enroll_observer::role_assign',
    ),

    

    array(
        'eventname'   => '\core\event\course_module_completion_updated',
        'callback'    => 'enrol_leeloolxp_enroll_observer::completion_updated',
    )

);