<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://github.com/artixzenevich
 * @since      1.0.0
 *
 * @package    Hljs_Gutenberg_Block
 * @subpackage Hljs_Gutenberg_Block/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hljs_Gutenberg_Block
 * @subpackage Hljs_Gutenberg_Block/includes
 * @author     Artik Zenevich <azenevich91@gmail.com>
 */
class Hljs_Gutenberg_Block_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hljs-gutenberg-block',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
