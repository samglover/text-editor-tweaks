<?php

/*
Plugin Name: Text Editor Tweaks
Plugin URI: http://lawyerist.com
Description: Styling tweaks for the WordPress text editor.
Author: Sam Glover
Version: 1.0
Author URI: http://samglover.net
*/

function custom_text_editor_styles() {
    wp_enqueue_style('editor-styles', plugins_url('text-editor-styles.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'custom_text_editor_styles');
add_action('login_enqueue_scripts', 'custom_text_editor_styles');

?>