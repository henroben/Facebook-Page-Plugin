<?php

// Add Scripts
function fpp_add_sripts() {
	wp_enqueue_style('fpp_main_style', plugins_url() . '/facebook-page-plugin/css/style.css');
	wp_enqueue_script('fpp_main_script', plugins_url() . '/facebook-page-plugin/js/main.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'fpp_add_sripts');