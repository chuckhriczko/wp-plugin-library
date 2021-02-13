<?php
/*******************************************************************************
 * Obligatory WordPress plugin information
 ******************************************************************************/
/*
Plugin Name: Wordpress Plugin Skeleton
Plugin URI: https://www.chucksplayground.com
Description: Wordpress plugin skeleton that uses composer and features such as 
PHP namespaces, typed functions and interfaces
Version: 1.0
Author: Chuck Hriczko
Author URI: https://www.chucksplayground.com
License: GPLv2
*/
//Include our autoload file
require 'vendor/autoload.php';

//Import our core namespace
use \WPPlugin\Plugin\Core;

///Initialize our plugin
Core::init();
