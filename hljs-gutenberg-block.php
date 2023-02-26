<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://github.com/artixzenevich
 * @since             1.0.0
 * @package           Hljs_Gutenberg_Block
 *
 * @wordpress-plugin
 * Plugin Name:       Highlight Gutenberg Block
 * Plugin URI:        https://https://github.com/artixzenevich
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Artik Zenevich
 * Author URI:        https://https://github.com/artixzenevich
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hljs-gutenberg-block
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
define( 'HLJS_GUTENBERG_BLOCK_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hljs-gutenberg-block-activator.php
 */
function activate_hljs_gutenberg_block() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hljs-gutenberg-block-activator.php';
	Hljs_Gutenberg_Block_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hljs-gutenberg-block-deactivator.php
 */
function deactivate_hljs_gutenberg_block() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hljs-gutenberg-block-deactivator.php';
	Hljs_Gutenberg_Block_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hljs_gutenberg_block' );
register_deactivation_hook( __FILE__, 'deactivate_hljs_gutenberg_block' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hljs-gutenberg-block.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hljs_gutenberg_block() {

	$plugin = new Hljs_Gutenberg_Block();
	$plugin->run();

}
run_hljs_gutenberg_block();
