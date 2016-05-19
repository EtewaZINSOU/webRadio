<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Content Composer Tabs Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();


global $style_tab, 
	$out_tabs, 
	$tabs_mode, 
	$tab_active, 
	$tab_counter;


$tab_counter++;


if ($custom_colors == 'true') { 
	$style_tab .= "\n" . '#cmsms_tabs_list_item_' . $unique_id . ':hover:before,' . 
	'#cmsms_tabs_list_item_' . $unique_id . '.current_tab:before { ' . 
		"\n\t" . cmsms_color_css('background-color', $bg_color) . 
	"\n" . '} ' . "\n";
}


$out_tabs .= '<li id="cmsms_tabs_list_item_' . $unique_id . '" class="cmsms_tabs_list_item' . 
(($tab_active == $tab_counter) ? ' current_tab' : '') . 
'">' . "\n" . 
	'<a href="#"' . 
	(($icon != '') ? ' class="' . esc_attr($icon) . '"' : '') . 
	'>' . "\n" . 
		'<span>' . esc_html($title) . '</span>' . "\n" . 
	'</a>' . "\n" . 
'</li>';


$out = '<div id="cmsms_tab_' . $unique_id . '" class="cmsms_tab' . 
(($tab_active == $tab_counter) ? ' active_tab' : '') . 
(($classes != '') ? ' ' . esc_attr($classes) : '') . 
'">' . "\n" . 
	cmsms_divpdel('<div class="cmsms_tab_inner">' . "\n" . 
		do_shortcode(wpautop($content)) . 
	'</div>' . "\n") . 
'</div>';

