<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/lincoln-howard-jr
 * @since      1.0.0
 *
 * @package    Gmu_Jwst
 * @subpackage Gmu_Jwst/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Gmu_Jwst
 * @subpackage Gmu_Jwst/includes
 * @author     Lincoln Howard <lincoln.c.howard.jr@gmail.com>
 */
class Gmu_Jwst_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'gmu-jwst',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
