<?php
$cfg='config/';
$cr='core';
$f=$cr.'/functions';
require_once $cfg.'system'.$index;
require_once $cfg.'db'.$index;
require_once $cfg.'define'.$index;
require_once $cr.'/app'.$index;
require_once $cr.'/controller'.$index;
require_once $f.$index;
require_once $f.'/db'.$index;
require_once $f.'/email'.$index;
require_once $f.'/form'.$index;
require_once $f.'/init'.$index;
?>