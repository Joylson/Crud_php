<?php
/**
 * Created by PhpStorm.
 * User: Joylson
 * Date: 02/04/2018
 * Time: 15:10
 */

define('DB_NAME', 'crud_php');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
if ( !defined('BASEURL') )
    define('BASEURL', '/Crud-php/');
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . 'inc/database.php');
