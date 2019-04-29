<?php 
/**
 * @package  TbanysPlugin
 */
namespace Inc\Base;
/**
* 
*/
class Enqueue
{
	public function register() {
    add_action( 'admin_enqueue_scripts', array($this, 'enqueue') );
  }
  
  function enqueue() {
    wp_enqueue_style( 'mypluginstyle', PLUGIN_URL . 'assets/style.css' );
    wp_enqueue_script( 'mypluginscript', PLUGIN_URL . 'assets/myscript.js' );
  }
}