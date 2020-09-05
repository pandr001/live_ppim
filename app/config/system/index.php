<?php
session_start();
ob_start();
date_default_timezone_set('Etc/GMT-8');
$chop = -strlen(basename($_SERVER['SCRIPT_NAME']));
define('DOC_ROOT',substr($_SERVER['SCRIPT_FILENAME'],0,$chop));
define('URL_ROOT',substr($_SERVER['SCRIPT_NAME'],0,$chop));
define('URL','http://' . $_SERVER['HTTP_HOST'] . URL_ROOT);
define('MAIN_URL','http://' . $_SERVER['SERVER_NAME']);
$a = -strlen($_SERVER['SCRIPT_NAME']);
define('SERVER_URL',substr($_SERVER['SCRIPT_FILENAME'],0,$a));
$b = -strlen(basename(SERVER_URL));
define('DOC_URL',substr(SERVER_URL,0,$b));
?>