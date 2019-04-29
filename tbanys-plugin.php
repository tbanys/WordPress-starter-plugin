<?php 
/**
 * @package tbanysPlugin
 */

/*
Plugin Name: tbanys Plugin
Plugin URI: tbanys.com
Description: Development plugin
Version: 1.0.0
Author: Tautvydas Banys
License: GPLv2 or later
Text Domain: tbanys-plugin
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

// Require once the Composer Autoload
if( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
  require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

// Define CONSTANTS
define( 'PLUGIN_PATH',  plugin_dir_path(__FILE__) );
define( 'PLUGIN_URL',  plugin_dir_url(__FILE__) );
define( 'PLUGIN', plugin_basename( __FILE__ ) );

use Inc\Base\Activate;
use Inc\Base\Deactivate;
/**
 * The code that runs during plugin activation
 */
function activate_tbanys_plugin() {
	Activate::activate();
}
/**
 * The code that runs during plugin deactivation
 */
function deactivate_tbanys_plugin() {
	Deactivate::deactivate();
}
register_activation_hook( __FILE__, 'activate_tbanys_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_tbanys_plugin' );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists('Inc\\Init') ) {
  Inc\Init::register_services();
}