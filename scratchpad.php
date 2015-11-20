<?php

function create_section_for_category_select($page_section,$value) {
		create_opening_tag($value);
		$all_categoris='';
			echo '<div class="wrap" id="'.$value['id'].'" >'."\n";
			echo '<h2>Theme Options</h2> '."\n" .'
				<p><strong>'.$page_section.':</strong></p>';
				echo "<select id='".$value['id']."' class='post_form' name='".$value['id']."' value='true'>\n";
				echo "<option id='all' value=''>All</option>";
			foreach ($value['options'] as $option_value => $option_list) {
				$checked = ' ';
				echo 'value_id=' . $value['id'] .' value_id=' . get_option($value['id']) . ' options_value=' . $option_value;
				if (get_option($value['id']) == $option_value) {
					$checked = ' checked="checked" ';
				}
				else if (get_option($value['id']) === FALSE && $value['std'] == $option_value){
					$checked = ' checked="checked" ';
				}
				else {
					$checked = '';
				}
				echo '<option value="'.$option_list['name'].'" class="level-0" '.$checked.' number="'.($option_list['number']).'" />'.$option_list['name']."</option>\n";
				//$all_categoris .= $option_list['name'] . ',';
			}
			echo "</select>\n </div>";
			//echo '<script>jQuery("#all").val("'.$all_categoris.'")</\script>';
		create_closing_tag($value);
	 }

?>
