<?php

/*
Plugin Name: WP Editor Tweaks
Plugin URI: http://wordpress.org/plugins/wp-editor-tweaks/
Description: Styling tweaks for the WordPress text editor.
Author: Sam Glover
Version: 1.3.4
Author URI: http://samglover.net
*/

/*--------------------------------------------------
Add Stylesheet for the WordPress Text Editor
--------------------------------------------------*/

function custom_text_editor_styles() {
  wp_enqueue_style('editor-styles', plugins_url('wpet-text-editor-styles.css', __FILE__));
}

add_action('admin_enqueue_scripts', 'custom_text_editor_styles');
add_action('login_enqueue_scripts', 'custom_text_editor_styles');


/*--------------------------------------------------
Add Stylesheet for the TinyMCE/Visual Editor
--------------------------------------------------*/

function plugin_mce_css( $mce_css ) {
	if ( ! empty( $mce_css ) )
		$mce_css .= ',';
	$mce_css .= plugins_url( 'wpet-tinymce-editor-styles.css', __FILE__ );
	return $mce_css;
}

add_filter( 'mce_css', 'plugin_mce_css' );

?>
