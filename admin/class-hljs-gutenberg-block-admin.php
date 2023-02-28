<?php

/**
 *
 * @link       https://https://github.com/artixzenevich
 * @since      1.0.0
 *
 * @package    Hljs_Gutenberg_Block
 * @subpackage Hljs_Gutenberg_Block/admin
 */

/**
 *
 * @package    Hljs_Gutenberg_Block
 * @subpackage Hljs_Gutenberg_Block/admin
 * @author     Artik Zenevich <azenevich91@gmail.com>
 */
class Hljs_Gutenber_Block_Admin
{
	function __construct()
	{
		add_action('admin_menu', array($this, 'admin_settings_plug'));
	}

	function admin_settings_plug()
	{
		add_options_page('Highlight Gutenberg Settings', 'Highlight Gutenberg', 'manage_options', 'hljs-gutenberg-block', array($this, 'admin_html'));
	}

	function admin_html()
	{ ?>
		<h1>Hello world</h1>
<?php
	}
}
