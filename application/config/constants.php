<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
  |--------------------------------------------------------------------------
  | File and Directory Modes
  |--------------------------------------------------------------------------
  |
  | These prefs are used when checking and setting modes when working
  | with the file system.  The defaults are fine on servers with proper
  | security, but you may wish (or even need) to change the values in
  | certain environments (Apache running a separate process for each
  | user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
  | always be used to set the mode correctly.
  |
 */
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
  |--------------------------------------------------------------------------
  | File Stream Modes
  |--------------------------------------------------------------------------
  |
  | These modes are used when working with fopen()/popen()
  |
 */

define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');
define('FACEBOOK_APPID', '288958441281557');
define('FACEBOOK_APPSECRET', 'ae0928bf170bbc810cae8dd7b7bc5cc2');
define('FACEBOOK_ACCESS_TOKEN', 'CAACEdEose0cBALfvWjm0PiKZAdRSFRL0dZAIiM36WZChtelNxLjUuMqgfowgVxiwPZA4gDyi9uELvGmfB7RqCyLkBYALF9mC6fQj1lnPuZBPeMZCZBy33fBlW64dgqOdX69ZB0Jwc6QljwgPZBwdG2QOw857qpIUS7kadgNwZBxEs3i4OCbPZCewC6YdIH4lZBN3Jr8ZD');

/* End of file constants.php */
/* Location: ./application/config/constants.php */