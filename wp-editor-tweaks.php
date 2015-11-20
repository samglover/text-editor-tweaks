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
    'wpet_settings_section',
    'WordPress Editor Tweaks',
    'wpet_section_callback_function',
    'writing'
  );

  add_settings_field(
    'wpet_visual_font',
    'Select Visual editor font',
    'wpet_visual_font_callback_function',
    'writing',
    'wpet_settings_section'
  );

  register_setting( 'writing', 'wpet_visual_font' );


  add_settings_field(
    'wpet_visual_font_size',
    'Select Visual editor font size',
    'wpet_visual_font_size_callback_function',
    'writing',
    'wpet_settings_section'
  );

  register_setting( 'writing', 'wpet_visual_font_size' );


  add_settings_field(
    'wpet_text_font',
    'Select Text editor font',
    'wpet_text_font_callback_function',
    'writing',
    'wpet_settings_section'
  );

  register_setting( 'writing', 'wpet_text_font' );


  add_settings_field(
    'wpet_text_font_size',
    'Select Text editor font size',
    'wpet_text_font_size_callback_function',
    'writing',
    'wpet_settings_section'
  );

  register_setting( 'writing', 'wpet_text_font_size' );

}

add_action( 'admin_init', 'wpet_settings_api_init' );


function wpet_section_callback_function() {
  echo '<p>Select fonts and base font sizes to use in the post editor.</p>';
}

function wpet_setting_callback_function() {
  echo '<input name="wpet_settings_name" id="wpet_settings_name" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'wpet_settings_name' ), false ) . ' /> Explanation text';
}

function wpet_visual_font_callback_function() {
  /* Fonts for Visual editor */

  $visual_font = array(
    'Libre Baskerville',
    'Lora',
    'Open Sans',
    'Source Sans Pro',
    'Ubuntu'
  );

  echo '<select name="wpet_visual_font" id="wpet_visual_font">';

  foreach ( $visual_font as $value ) {

    $checked = ' ';

    if ( get_option( $value['id'] ) == $option_value ) {
      $checked = ' checked="checked" ';
    } elseif (get_option($value['id']) === FALSE && $value['std'] == $option_value){
      $checked = ' checked="checked" ';
    } else {
      $checked = ' ';
    }

    echo '<option value="' . $value . '" ' . selected( $options['wpet_visual_font'], 'Libre Baskerville' )

  }




    <option value="libre-baskerville" <?php selected( $options['wpet_visual_font'], 'Libre Baskerville' ); ?>>Libre Baskerville</option>
    <option value="lora" <?php selected( $options['wpet_visual_font'], 'Lora' ); ?>>Lora</option>
    <option value="open-sans" <?php selected( $options['wpet_visual_font'], 'Open Sans' ); ?>>Open Sans</option>
    <option value="source-sans-pro" <?php selected( $options['wpet_visual_font'], 'Source Sans Pro' ); ?>>Source Sans Pro</option>
    <option value="ubuntu" <?php selected( $options['wpet_visual_font'], 'Ubuntu' ); ?>>Ubuntu</option>

  echo '</select>';
}

function wpet_visual_font_size_callback_function() {
  /* Base font size for Visual editor */
  <select name="wpet_visual_font_size" id="wpet_visual_font_size">
    <option value="14px" <?php selected( $options['wpet_visual_font_size'], '14px' ); ?>>14px</option>
    <option value="16px" <?php selected( $options['wpet_visual_font_size'], '16px' ); ?>>16px</option>
    <option value="18px" <?php selected( $options['wpet_visual_font_size'], '18px' ); ?>>18px</option>
    <option value="20px" <?php selected( $options['wpet_visual_font_size'], '20px' ); ?>>20px</option>
  </select>
}

function wpet_text_font_callback_function() {
  /* Fonts for Text editor */
  <select name="wpet_text_font" id="wpet_text_font">
    <option value="inconsolata" <?php selected( $options['wpet_text_font'], 'Inconsolata' ); ?>>Inconsolata</option>
    <option value="roboto-mono" <?php selected( $options['wpet_text_font'], 'Roboto Mono' ); ?>>Roboto Mono</option>
    <option value="source-code-pro" <?php selected( $options['wpet_text_font'], 'Source Code Pro' ); ?>>Source Code Pro</option>
    <option value="ubuntu-mono" <?php selected( $options['wpet_text_font'], 'Ubuntu Mono' ); ?>>Ubuntu Mono</option>
  </select>
}

function wpet_text_font_size_callback_function() {
  /* Base font size for Text editor */
  <select name="wpet_text_font_size" id="wpet_text_font_size">
    <option value="14px" <?php selected( $options['wpet_text_font_size'], '14px' ); ?>>14px</option>
    <option value="16px" <?php selected( $options['wpet_text_font_size'], '16px' ); ?>>16px</option>
    <option value="18px" <?php selected( $options['wpet_text_font_size'], '18px' ); ?>>18px</option>
    <option value="20px" <?php selected( $options['wpet_text_font_size'], '20px' ); ?>>20px</option>
  </select>
}


/*--------------------------------------------------
Add Stylesheet for the Visual Editor
--------------------------------------------------*/

function wpet_visual_editor_styles( $mce_css ) {

  $visual_font = get_option('wpet_visual_font');

  switch ($text_font) {
    case 'Libre Baskerville';
      $text_font = 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700,700italic';
      break;
    case 'Lora';
      $text_font = 'https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic';
      break;
    case 'Open Sans';
      $text_font = 'https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic';
      break;
    case 'Source Sans Pro';
      $text_font = 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,700italic';
      break;
    case 'Ubuntu';
      $text_font = 'https://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,700italic';
      break;
    default:
      $text_font = 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700,700italic';
  }

	if ( ! empty( $mce_css ) )
		$mce_css .= ',';

	$mce_css .= str_replace( ',', '%2C', $visual_font );
  $mce_css .= ',' . plugins_url( 'wpet-visual-editor-styles.php', __FILE__ );
	return $mce_css;
}

add_filter( 'mce_css', 'wpet_visual_editor_styles' );


/*--------------------------------------------------
Add Stylesheet for the WordPress Text Editor
--------------------------------------------------*/

function wpet_text_editor_styles() {

  $text_font = get_option('wpet_text_font');

  switch ($text_font) {
    case 'Inconsolata';
      $text_font = 'https://fonts.googleapis.com/css?family=Inconsolata';
      break;
    case 'Roboto Mono';
      $text_font = 'https://fonts.googleapis.com/css?family=Roboto+Mono';
      break;
    case 'Source Code Pro';
      $text_font = 'https://fonts.googleapis.com/css?family=Source+Code+Pro';
      break;
    case 'Ubuntu Mono';
      $text_font = 'https://fonts.googleapis.com/css?family=Ubuntu+Mono';
      break;
    default:
      $text_font = 'https://fonts.googleapis.com/css?family=Source+Code+Pro';
  }

  wp_enqueue_style('editor-styles', $text_font);
  wp_enqueue_style('editor-styles', plugins_url('wpet-text-editor-styles.php', __FILE__));
}

add_action('admin_enqueue_scripts', 'wpet_text_editor_styles');
add_action('login_enqueue_scripts', 'wpet_text_editor_styles');

?>
