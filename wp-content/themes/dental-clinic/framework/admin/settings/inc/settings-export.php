<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Theme Settings Exporter
 * Created by CMSMasters
 * 
 */


$parse_uri = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);

require_once($parse_uri[0] . 'wp-load.php');


header('Content-disposition: attachment; filename=theme-settings.txt');

header('Content-type: text/plain');


$cmsms_global_settings = array( 
	'cmsms_options_' . CMSMS_SHORTNAME . '_general', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_bg', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_header', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_content', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_footer', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_font_content', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_font_link', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_font_heading', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_font_other', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_element_sidebar', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_element_icon', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_element_lightbox', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_element_sitemap', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_element_error', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_element_code', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_element_recaptcha', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_single_post', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_single_project', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_single_profile', 
	'cmsms_options_' . CMSMS_SHORTNAME . '_single_campaign' 
);

$wp_global_settings = array( 
	'thumbnail_size_w', 
	'thumbnail_size_h', 
	'medium_size_w', 
	'medium_size_h', 
	'large_size_w', 
	'large_size_h', 
	'theme_mods_' . CMSMS_SHORTNAME, 
	'sidebars_widgets', 
	'widget_custom-advertisement', 
	'widget_akismet_widget', 
	'widget_archives', 
	'widget_calendar', 
	'widget_categories', 
	'widget_custom-contact-form', 
	'widget_custom-contact-info', 
	'widget_nav_menu', 
	'widget_custom-divider', 
	'widget_custom-video', 
	'widget_custom-facebook', 
	'widget_custom-flickr', 
	'widget_custom-html5-audio', 
	'widget_custom-html5-video', 
	'widget_custom-latest-projects', 
	'widget_layerslider_widget', 
	'widget_meta', 
	'widget_pages', 
	'widget_custom-popular-projects', 
	'widget_custom-posts-tabs', 
	'widget_custom-recent-comments', 
	'widget_custom-recent-posts', 
	'widget_rev-slider-widget', 
	'widget_rss', 
	'widget_search', 
	'widget_tag_cloud', 
	'widget_text', 
	'widget_custom-twitter', 
	'widget_icl_lang_sel_widget' 
);


$cmsms_global_colors = array();


foreach (cmsms_all_color_schemes_list() as $key => $value) {
	$cmsms_global_colors[] = 'cmsms_options_' . CMSMS_SHORTNAME . '_color_' . $key;
}


$options = array_merge($cmsms_global_settings, $cmsms_global_colors, $wp_global_settings);


$settings = array();


foreach ($options as $option) {
	if (get_option($option)) {
		$settings[$option] = get_option($option);
	}
}


$base = 'base64_';

$base_en = $base . 'encode';


$result = $base_en(json_encode($settings));


echo $result;

