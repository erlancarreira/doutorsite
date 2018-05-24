<?php
require 'environment.php';

global $config;
$config = array();
define("BASE_URL", "http://localhost/doutorsite/");
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'doutorsite';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'doutorsite';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
?>