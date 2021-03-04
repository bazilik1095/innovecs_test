<?php

/**
 * Class description
 *
 * @link       https://innovecs.com/
 * @since      1.0.0
 *
 * @package    cpt-innovecs-core
 * @subpackage cpt-innovecs-core/includes
 * @license    GPL-2.0+
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Initialize plugin
 *
 * @return void
 */

if ( ! class_exists( 'Cpt_Innovecs_Core' ) ) {

	/**
	 * Define Cpt_Innovecs_Core class
	*/

	class Cpt_Innovecs_Core {

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
		public function __construct() {
			$this->includes();
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
			add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );
		}

		/**
		* Include required files
		*
		* @return void
		*/

		public function includes() {

			require_once CPT_INNOVECS_PATH . 'includes/custom_post_type/events.php';
		}

		/**
		 * Load the plugin text domain for translation.
		 *
		 * @since    1.0.0
		 */
		public function load_plugin_textdomain() {

			load_plugin_textdomain(
				'cpt_innovecs_core',
				false,
				CPT_INNOVECS_PATH . '/languages/'
			);
		}

		/**
		 * Register the stylesheets for the admin area.
		 *
		 * @since    1.0.0
		 */
		public function enqueue_styles() {

			wp_enqueue_style( 				
				'cpt_innovecs_core_style',
				CPT_INNOVECS_URL . 'assets/css/style.css',
				array(),
				CPT_INNOVECS_VERSION
			);

			wp_enqueue_style('cpt_innovecs_core_style');

		}
	}
}

new Cpt_Innovecs_Core();




