<?php

/*
Plugin Name: WP Editor Tweaks
Plugin URI: http://wordpress.org/plugins/wp-editor-tweaks/
Description: Styling tweaks for the WordPress text editor.
Author: Sam Glover
Version: 1.4
Author URI: http://samglover.net
*/


/*--------------------------------------------------
Admin Options
--------------------------------------------------*/

function wpet_settings_api_init() {

  add_settings_section(
    'wpet_setting_section',
    'WordPress Editor Tweaks',
    'wpet_section_callback_function',
    'writing'
  );

  add_settings_field(
    'wpet_tinymce_font',
    'Select Visual editor font',
    'wpet_tinymce_font_callback_function',
    'writing',
    'wpet_setting_section'
  );

  register_setting( 'writing', 'wpet_tinymce_font' );


  add_settings_field(
    'wpet_tinymce_font_size',
    'Select Visual editor base font size',
    'wpet_tinymce_font_size_callback_function',
    'writing',
    'wpet_setting_section'
  );

  register_setting( 'writing', 'wpet_tinymce_font_size' );


  add_settings_field(
    'wpet_text_font',
    'Select Text editor font',
    'wpet_text_font_callback_function',
    'writing',
    'wpet_setting_section'
  );

  register_setting( 'writing', 'wpet_text_font' );


  add_settings_field(
    'wpet_text_font_size',
    'Select Text editor font size',
    'wpet_text_font_size_callback_function',
    'writing',
    'wpet_setting_section'
  );

  register_setting( 'writing', 'wpet_text_font_size' );

}

add_action( 'admin_init', 'wpet_settings_api_init' );


function wpet_section_callback_function() {
  echo '<p>Select fonts and base font sizes to use in the post editor.</p>';
}

function wpet_setting_callback_function() {
  echo '<input name="wpet_setting_name" id="wpet_setting_name" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'wpet_setting_name' ), false ) . ' /> Explanation text';
}

function wpet_tinymce_font_callback_function() {
  /* Fonts for Visual editor */
  <select name="wpet_tinymce_font" id="wpet_tinymce_font">
    <option value="libre-baskerville" <?php selected( $options['wpet_tinymce_font'], 'libre-baskerville' ); ?>>Libre Baskerville</option>
    <option value="lora" <?php selected( $options['wpet_tinymce_font'], 'lora' ); ?>>Lora</option>
    <option value="open-sans" <?php selected( $options['wpet_tinymce_font'], 'open-sans' ); ?>>Open Sans</option>
    <option value="source-sans-pro" selected="selected" <?php selected( $options['wpet_tinymce_font'], 'source-sans-pro' ); ?>>Source Sans Pro</option>
    <option value="ubuntu" <?php selected( $options['wpet_tinymce_font'], 'ubuntu' ); ?>>Ubuntu</option>
  </select>
}

function wpet_tinymce_font_size_callback_function() {
  /* Base font size for Visual editor */
  <select name="wpet_tinymce_font_size" id="wpet_tinymce_font_size">
    <option value="14px" <?php selected( $options['wpet_tinymce_font_size'], '14px' ); ?>>14px</option>
    <option value="16px" <?php selected( $options['wpet_tinymce_font_size'], '16px' ); ?>>16px</option>
    <option value="18px" selected="selected" <?php selected( $options['wpet_tinymce_font_size'], '18px' ); ?>>18px</option>
    <option value="20px" <?php selected( $options['wpet_tinymce_font_size'], '20px' ); ?>>20px</option>
  </select>
}

function wpet_text_font_callback_function() {
  /* Fonts for Text editor */
  <select name="wpet_text_font" id="wpet_text_font">
    <option value="droid-sans-mono" <?php selected( $options['wpet_text_font'], 'droid-sans-mono' ); ?>>Droid Sans Mono</option>
    <option value="inconsolata" <?php selected( $options['wpet_text_font'], 'inconsolata' ); ?>>Inconsolata</option>
    <option value="roboto-mono" <?php selected( $options['wpet_text_font'], 'roboto-mono' ); ?>>Roboto Mono</option>
    <option value="source-code-pro" selected="selected" <?php selected( $options['wpet_text_font'], 'source-code-pro' ); ?>>Source Code Pro</option>
    <option value="ubuntu-mono" <?php selected( $options['wpet_text_font'], 'ubuntu-mono' ); ?>>Ubuntu Mono</option>
  </select>
}

function wpet_text_font_size_callback_function() {
  /* Base font size for Text editor */
  <select name="wpet_text_font_size" id="wpet_text_font_size">
    <option value="14px" <?php selected( $options['wpet_text_font_size'], '14px' ); ?>>14px</option>
    <option value="16px" selected="selected" <?php selected( $options['wpet_text_font_size'], '16px' ); ?>>16px</option>
    <option value="18px" <?php selected( $options['wpet_text_font_size'], '18px' ); ?>>18px</option>
    <option value="20px" <?php selected( $options['wpet_text_font_size'], '20px' ); ?>>20px</option>
  </select>
}


=======
Version: 1.3.2
Author URI: http://samglover.net
*/

>>>>>>> master
/*--------------------------------------------------
Add Stylesheet for the WordPress Text Editor
--------------------------------------------------*/

<<<<<<< HEAD
function wpet_text_editor_styles() {
  wp_enqueue_style('editor-styles', plugins_url('wpet-text-editor-styles.css', __FILE__));
}

add_action('admin_enqueue_scripts', 'wpet_text_editor_styles');
add_action('login_enqueue_scripts', 'wpet_text_editor_styles');
=======
function custom_text_editor_styles() {
  wp_enqueue_style('editor-styles', plugins_url('wpet-text-editor-styles.css', __FILE__));
}

add_action('admin_enqueue_scripts', 'custom_text_editor_styles');
add_action('login_enqueue_scripts', 'custom_text_editor_styles');
>>>>>>> master


/*--------------------------------------------------
Add Stylesheet for the TinyMCE/Visual Editor
--------------------------------------------------*/

<<<<<<< HEAD
function wpet_tinymce_css( $mce_css ) {
	if ( ! empty( $mce_css ) )
		$mce_css .= ',';

	$mce_css .= plugins_url( 'wpet-tinymce-editor-styles.css', __FILE__ );

	return $mce_css;
}
add_filter( 'mce_css', 'wpet_tinymce_css' );
=======
function plugin_mce_css( $mce_css ) {
	if ( ! empty( $mce_css ) )
		$mce_css .= ',';
	$mce_css .= plugins_url( 'wpet-tinymce-editor-styles.css', __FILE__ );
	return $mce_css;
}

add_filter( 'mce_css', 'plugin_mce_css' );
>>>>>>> master

?>
