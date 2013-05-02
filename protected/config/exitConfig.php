<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of config
 *
 * @author Kaia Ibrahim
 */
class exitConfig {
    /* 
	$smtpServer = 'smtp.dotroll.com';
    $config = array(
        'auth' => 'login',
        'username' => 'info@bogi-solutions.com',
        'password' => 'Naszta82',
        'port' => 25 //465
    );
	*/
    const APP_MAIL_SERVER = 'localhost';
    const APP_MAIL_AUTH = 'login';
    const APP_MAIL_USRNM = 'info@bogi-solutions.com';
    const APP_MAIL_PASSW = 'Naszta82';
    const APP_MAIL_PORT = 25;
	/*
    const APP_MAIL_SERVER = 'smtp.dotroll.com';
    const APP_MAIL_AUTH = 'login';
    const APP_MAIL_USRNM = 'info@bogi-solutions.com';
    const APP_MAIL_PASSW = 'Naszta82';
    const APP_MAIL_PORT = 25;
	*/
	/*
    const APP_MAIL_SERVER = 'smtp.dotroll.com';
    const APP_MAIL_AUTH = 'login';
    const APP_MAIL_USRNM = 'system@exitpointgames.hu';
    const APP_MAIL_PASSW = 'Csupisys82';
    const APP_MAIL_PORT = 25;
    
    const APP_MAIL_SERVER = 'mail.csupi.eu';
    const APP_MAIL_AUTH = 'login';
    const APP_MAIL_USRNM = 'info@exitpoint.hu';
    const APP_MAIL_PASSW = 'Bandita7521';
    const APP_MAIL_PORT = 587;
    */
    
    const MADNESS_START_HOUR = 16;
    const MADNESS_START_MINUTE = 00;
    const MADNESS_LONG_MINUTE = 60;
    const MADNESS_REST_MINUTE = 30;
    const MADNESS_DAILY_TIMES = 5;
    
    const RABBITHOLE_START_HOUR = 16;
    const RABBITHOLE_START_MINUTE = 15;
    const RABBITHOLE_LONG_MINUTE = 60;
    const RABBITHOLE_REST_MINUTE = 30;
    const RABBITHOLE_DAILY_TIMES = 5;
    
    const EXIT_SATURDAY_START_HOUR = 16;
    const EXIT_SATURDAY_START_MINUTE = 45;
    const EXIT_SATURDAY_START_LONG_MINUTE = 90;
    const EXIT_SATURDAY_DAILY_TIMES = 3;
    const EXIT_SATURDAY_STOP_HOUR = 21;
    const EXIT_SATURDAY_STOP_MINUTE = 15;
    
    const EXIT_WEEKDAY_START_HOUR = 12;
    const EXIT_WEEKDAY_START_MINUTE = 15;
    const EXIT_WEEKDAY_START_LONG_MINUTE = 90;
    const EXIT_WEEKDAY_DAILY_TIMES = 6;
    const EXIT_WEEKDAY_STOP_HOUR = 21;
    const EXIT_WEEKDAY_STOP_MINUTE = 15;
    
    const EXIT_SEASON_IN_DAY = 120;
    const EXIT_SEASON_ADD_DAY = -1; // default : -1 // Today
    
    const EXIT_FREE_APPOINTMENT = 1;
    const EXIT_RESERVED_APPOINTMENT = 2;
    const EXIT_BOOKED_APPOINTMENT = 3;
    const EXIT_OTHER_APPOINTMENT = 4;
    
    const PERSON_SHOWED_DIARY_INFO_NEW = '';
    const PERSON_SHOWED_DIARY_INFO_BOOKED = 'booked';
    
    const PERSON_SHOWED_DIARY_STATUS_NEW = 1;
    const PERSON_SHOWED_DIARY_STATUS_BOOKED = 0;
    
    const ROOM_MADNESS = 1;
    const ROOM_RABBITHOLE = 2;
    
    const ROOM_NAME_MADNESS = 'madness';
    const ROOM_NAME_RABBITHOLE = 'rabbithole';
}

?>
