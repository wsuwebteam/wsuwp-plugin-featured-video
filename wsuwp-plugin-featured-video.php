<?php
/**
 * Plugin Name: (Beta) WSUWP Featured Video
 * Plugin URI: https://github.com/wsuwebteam/wsuwp-plugin-featured-video
 * Description: Adds featured video support to post types.
 * Version: 0.0.1
 * Requires PHP: 7.3
 * Author: Washington State University, Danial Bleile
 * Author URI: https://web.wsu.edu/
 * Text Domain: wsuwp-plugin-featured-video
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'after_setup_theme', 'wsuwp_plugin_featured_video_init' );

function wsuwp_plugin_featured_video_init() {

	// Initiate plugin
	include_once __DIR__ . '/includes/plugin.php';

}
