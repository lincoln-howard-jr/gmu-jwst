<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/lincoln-howard-jr
 * @since      1.0.0
 *
 * @package    Gmu_Jwst
 * @subpackage Gmu_Jwst/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Gmu_Jwst
 * @subpackage Gmu_Jwst/admin
 * @author     Lincoln Howard <lincoln.c.howard.jr@gmail.com>
 */
class Gmu_Jwst_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gmu_Jwst_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gmu_Jwst_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/gmu-jwst-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gmu_Jwst_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gmu_Jwst_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */


	}

	public function create_admin_page () {
		/**
		 * This function creates the admin page, but there's no real purpose for an admin page yet
		 */
		add_menu_page( 'JWST Visualizer', 'JWST', 'manage_options', 'gmu-jwst-admin-page', 'partials/gmu-jwst-admin-display.php', 'dashicons-admin-site-alt3', null );
	}

}
