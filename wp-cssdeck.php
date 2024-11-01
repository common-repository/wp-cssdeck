<?php
/*
Plugin Name: CSSDeck
Plugin URI:  https://wordpress.org/plugins/wp-cssdeck/
Description: Embed HTML5, CSS3, JS demos and codecasts from CSSDeck.com into your WordPress site.
Version:     1.0
Author:      Rami Yushuvaev
Author URI:  https://GenerateWP.com/
Text Domain: wp-cssdeck
*/



/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Include plugin files
 */
include_once ( plugin_dir_path( __FILE__ ) . 'includes/i18n.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/embed.php' );
