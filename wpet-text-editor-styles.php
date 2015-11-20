<?php

header("Content-type: text/css; charset: UTF-8");

/* Variables */
$font = get_option('wpet_text_font');
$size = get_option('wpet_text_font_size');

?>

textarea.wp-editor-area {
	font-family: <?php echo ''' . $font . ''' ; ?>, sans-serif;
	font-size: <?php echo $size; ?>;
}
