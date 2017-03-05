<?php

class Facebook_Page_Plugin_Widget extends WP_Widget {
	// Constructor
	public function __construct() {
		parent::__construct(
			'facebook_page_plugin_widget', // base ID
			__('Facebook Page Plugin', 'fpp_domain'), // Name
			array('description' => __('Shows a Facebook page plugin in a widget', 'fpp_domain'))
		);
	}
	// Display Widget in front end
	public function widget( $args, $instance ) {
		parent::widget( $args, $instance );
	}

	// Backend Form
	public function form( $instance ) {
		return parent::form( $instance );
	}

	// Update Values
	public function update( $new_instance, $old_instance ) {
		return parent::update( $new_instance, $old_instance );
	}
}