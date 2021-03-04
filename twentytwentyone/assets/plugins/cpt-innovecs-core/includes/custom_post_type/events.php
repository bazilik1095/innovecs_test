<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! class_exists( 'Cpt_Innovecs_Events' ) ) {

	class Cpt_Innovecs_Events  {

		public function __construct() {

			add_action( 'init', array( $this, 'cpt_innovecs_events' ) );
		}

		/**
		* Include required files
		*
		* @return void
		*/

		public function cpt_innovecs_events() {

			$args = array(
				'labels' => array(
					'name' => __('Innovecs Events'),
					'singular_name' => __('Event'),
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array("slug" => "events"), 
				'supports' => array('thumbnail','editor','title','custom-fields')
			);
			register_post_type( 'events' , $args );
		}
	}
}

new Cpt_Innovecs_Events();
