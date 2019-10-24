<?php
/*** *** *** *** *** ***
* @package   Quadodo Login Script
* @file      database_info.php
* @author    Douglas Rennehan
* @generated October 24th, 2019
* @link      http://www.quadodo.net
*** *** *** *** *** ***
* Comments are always before the code they are commenting
*** *** *** *** *** ***/
if (!defined('QUADODO_IN_SYSTEM')) {
exit;
}

define('SYSTEM_INSTALLED', true);
$database_prefix = 'qls_';
$database_type = 'MySQLi';
$database_server_name = 'database';
$database_username = 'pcmuser';
$database_password = 'ChangeMe7492#&!';
$database_name = 'pcm';
$database_port = 3306;

/**
 * Use persistent connections?
 * Change to true if you have a high load
 * on your server, but it's not really needed.
 */
$database_persistent = false;
?>