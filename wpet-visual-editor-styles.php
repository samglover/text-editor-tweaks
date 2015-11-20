<?php

header("Content-type: text/css; charset: UTF-8");

/* Variables */
$font = get_option('wpet_visual_font');
$size = get_option('wpet_visual_font_size');

?>

@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic);

body#tinymce {
	font-family: <?php echo ''' . $font . ''' ; ?>, sans-serif;
	font-size: <?php echo $size; ?>;
	font-variant-ligatures: common-ligatures;
}
