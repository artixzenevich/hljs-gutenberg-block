<?php

/**
 * @link              https://https://github.com/artixzenevich
 * @since             1.0.0
 * @package           Hljs_Gutenberg_Block
 *
 * @wordpress-plugin
 * Plugin Name:       Highlight Gutenberg Block
 * Plugin URI:        https://https://github.com/artixzenevich
 * Description:       A plugin for the Gutenberg editor that uses the highlightjs library to set syntax highlighting for the code block.
 * Version:           1.0.0
 * Author:            Artik Zenevich
 * Author URI:        https://https://github.com/artixzenevich
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hljs-gutenberg-block
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('HLJS_GUTENBERG_BLOCK_VERSION', '1.0.0');

function hljs_script()
{
	wp_enqueue_script('hljs_gutenberg_block_script', plugin_dir_url(__FILE__) . 'inc/hljs.js');
}
https: //ucsol.ru/?yclid=7710547526903176844

function hljs_style()
{
	wp_enqueue_style('hljs_gutenberg_block_style', plugin_dir_url(__FILE__) . 'inc/styles/base16/gruvbox-dark-pale.min.css');
}

add_action('wp_enqueue_scripts', 'hljs_script');
add_action('wp_enqueue_scripts', 'hljs_style');

require plugin_dir_path(__FILE__) . 'admin/class-hljs-gutenberg-block-admin.php';

$hljs_gutenberg_block_admin = new Hljs_Gutenber_Block_Admin();
