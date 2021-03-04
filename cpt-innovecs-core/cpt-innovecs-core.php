<?php
/**
 * Plugin Name: 	Custom Post Type Innovecs Core
 * Plugin URI:
 * Description: 	Core plugin for Innovecs.
 * Version: 		1.0.0
 * Author: 			Innovecs
 * Author URI: 		https://innovecs.com/
 * Text Domain: 	cpt-innovecs-core
 * License: 		GPL-2.0+
 * License URI: 	http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: 	/languages
 *
 * @package cpt-innovecs-core
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
define( 'CPT_INNOVECS_FILE', __FILE__ );
define( 'CPT_INNOVECS_PATH', trailingslashit( plugin_dir_path( CPT_INNOVECS_FILE ) ) );
define( 'CPT_INNOVECS_URL', plugins_url( '/', CPT_INNOVECS_FILE ) );

define( 'CPT_INNOVECS_VERSION', '1.0.0' );


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require_once CPT_INNOVECS_PATH . 'includes/plugin.php';





