<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/lincoln-howard-jr
 * @since             1.0.0
 * @package           Gmu_Jwst
 *
 * @wordpress-plugin
 * Plugin Name:       JWST Visualizer
 * Plugin URI:        https://github.com/lincoln-howard-jr/gmu-jwst
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Lincoln Howard
 * Author URI:        https://github.com/lincoln-howard-jr
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gmu-jwst
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GMU_JWST_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gmu-jwst-activator.php
 */
function activate_gmu_jwst() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gmu-jwst-activator.php';
	Gmu_Jwst_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gmu-jwst-deactivator.php
 */
function deactivate_gmu_jwst() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gmu-jwst-deactivator.php';
	Gmu_Jwst_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gmu_jwst' );
register_deactivation_hook( __FILE__, 'deactivate_gmu_jwst' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gmu-jwst.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gmu_jwst() {

	$plugin = new Gmu_Jwst();
	$plugin->run();

}
run_gmu_jwst();
