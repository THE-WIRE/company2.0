<?php
/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 09-Sep-16
 * Time: 2:33 AM
 */

require_once('../lib/ezSQL/shared/ez_sql_core.php');
require_once('../lib/ezSQL/mysqli/ez_sql_mysqli.php');

define('DBUSER', 'u401895710_ucoy');
define('DBPASS', 'Success@1996');
define('DBNAME', 'u401895710_coy');
define('DBHOST', 'localhost');

$db = new ezSQL_mysqli(DBUSER, DBPASS, DBNAME, DBHOST);