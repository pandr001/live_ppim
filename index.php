<?php
$index='/index.php';
require_once 'setup'.$index; 
require_once 'conn'.$index;
require_once 'app'.$index;
$app = New App;
// dmarkdevin-framework using php 
// email me at dmarkdevin@gmail.com
//improve by calajosh@gmail.com
//note: this order 'setup', 'conn','app' should be followed respectively