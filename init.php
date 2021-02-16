<?php
/*******************************************************************************
 * Obligatory WordPress plugin information
 ******************************************************************************/
/*
Plugin Name: WPPluginSkeleton
Plugin URI: https://www.chucksplayground.com
Description: Wordpress plugin skeleton using namespaces and other PHP 7.4+ features
Version: 1.0
Author: Chuck Hriczko
Author URI: https://www.chucksplayground.com
License: GPLv2
*/
//Include our autoload file
require 'vendor/autoload.php';

//Initialize our plugin
$wpdsCore = new \WPPluginSkeleton\Plugin\Core();