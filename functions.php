<?php
/**
 * Plugin Name: Instagram Rest API 
 * Description: Exposes an endpoint for the plugin wd instagram feed.
 * Version: 0.1
 * Author: Bowriverstudio
 * Author URI: http://bowriverstudio.com
 * License: GPL2
 */
 
 
if( !defined( 'ABSPATH' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit;
}

require __DIR__ . '/rest/feed.php';

