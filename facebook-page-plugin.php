<?php
/**
 * Plugin Name: Facebook Page Plugin
 * Description: Display a Facebook Page (likebox) and time line in widget
 * Version: 1.0
 * Author: Benjamin Mercer
 *
 **/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Include Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/facebook-page-plugin-scripts.php');

// Include Class
require_once(plugin_dir_path(__FILE__) . '/includes/facebook-page-plugin-class.php');

// Register Widget
function register_facebook_page_plugin() {
	register_widget('Facebook_Page_Plugin_Widget');
}

add_action('widgets_init', 'register_facebook_page_plugin');