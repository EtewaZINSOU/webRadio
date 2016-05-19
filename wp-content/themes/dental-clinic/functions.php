<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


// Current Theme Constants
if (!defined('CMSMS_SHORTNAME')) {
	define('CMSMS_SHORTNAME', 'dental-clinic');
}

if (!defined('CMSMS_FULLNAME')) {
	define('CMSMS_FULLNAME', 'Dental Clinic');
}



/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('cmsms_system_fonts_list')) {
	function cmsms_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('cmsms_google_fonts_list')) {
	function cmsms_google_fonts_list() {
		$fonts = array( 
			'' => __('None', 'dental-clinic'), 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic' => 'Roboto', 
			'Roboto+Condensed:400,400italic,700,700italic' => 'Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,700,700italic' => 'Open Sans', 
			'Open+Sans+Condensed:300,300italic,700' => 'Open Sans Condensed', 
			'Droid+Sans:400,700' => 'Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic' => 'Droid Serif', 
			'PT+Sans:400,400italic,700,700italic' => 'PT Sans', 
			'PT+Sans+Caption:400,700' => 'PT Sans Caption', 
			'PT+Sans+Narrow:400,700' => 'PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic' => 'PT Serif', 
			'Ubuntu:400,400italic,700,700italic' => 'Ubuntu', 
			'Ubuntu+Condensed' => 'Ubuntu Condensed', 
			'Headland+One' => 'Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic' => 'Source Sans Pro', 
			'Lato:400,400italic,700,700italic' => 'Lato', 
			'Cuprum:400,400italic,700,700italic' => 'Cuprum', 
			'Oswald:300,400,700' => 'Oswald', 
			'Oxygen:300,400,700' => 'Oxygen', 
			'Yanone+Kaffeesatz:300,400,700' => 'Yanone Kaffeesatz', 
			'Lobster' => 'Lobster', 
			'Lobster+Two:400,400italic,700,700italic' => 'Lobster Two', 
			'Questrial' => 'Questrial', 
			'Raleway:300,400,500,600,700' => 'Raleway', 
			'Dosis:300,400,500,700' => 'Dosis', 
			'Cutive+Mono' => 'Cutive Mono', 
			'Quicksand:300,400,700' => 'Quicksand', 
			'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic' => 'Titillium Web', 
			'Montserrat:400,700' => 'Montserrat', 
			'Cookie' => 'Cookie', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Font Weights List
if (!function_exists('cmsms_font_weight_list')) {
	function cmsms_font_weight_list() {
		$list = array( 
			'normal' => 	'normal', 
			'100' => 		'100', 
			'200' => 		'200', 
			'300' => 		'300', 
			'400' => 		'400', 
			'500' => 		'500', 
			'600' => 		'600', 
			'700' => 		'700', 
			'800' => 		'800', 
			'900' => 		'900', 
			'bold' => 		'bold', 
			'bolder' => 	'bolder', 
			'lighter' => 	'lighter', 
		);
		
		
		return $list;
	}
}



// Theme Settings Font Styles List
if (!function_exists('cmsms_font_style_list')) {
	function cmsms_font_style_list() {
		$list = array( 
			'normal' => 	'normal', 
			'italic' => 	'italic', 
			'oblique' => 	'oblique', 
			'inherit' => 	'inherit', 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('cmsms_text_transform_list')) {
	function cmsms_text_transform_list() {
		$list = array( 
			'none' => 'none', 
			'uppercase' => 'uppercase', 
			'lowercase' => 'lowercase', 
			'capitalize' => 'capitalize', 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('cmsms_text_decoration_list')) {
	function cmsms_text_decoration_list() {
		$list = array( 
			'none' => 'none', 
			'underline' => 'underline', 
			'overline' => 'overline', 
			'line-through' => 'line-through', 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('cmsms_custom_color_schemes_list')) {
	function cmsms_custom_color_schemes_list() {
		$list = array( 
			'first' => __('Custom 1', 'dental-clinic'), 
			'second' => __('Custom 2', 'dental-clinic'), 
			'third' => __('Custom 3', 'dental-clinic'), 
			'fourth' => __('Custom 4', 'dental-clinic'), 
			'fifth' => __('Custom 5', 'dental-clinic') 
		);
		
		
		return $list;
	}
}



// WP Color Picker Palettes
if (!function_exists('cmsms_color_picker_palettes')) {
	function cmsms_color_picker_palettes() {
		$palettes = array( 
			'#000000', 
			'#ffffff', 
			'#d43c18', 
			'#5173a6', 
			'#959595', 
			'#c0c0c0', 
			'#f4f4f4', 
			'#e1e1e1' 
		);
		
		
		return $palettes;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/



// Theme Plugin Support Constants
if (!defined('CMSMS_PAYPALDONATIONS') && class_exists('PayPalDonations')) {
	define('CMSMS_PAYPALDONATIONS', true);
} elseif (!defined('CMSMS_PAYPALDONATIONS')) {
	define('CMSMS_PAYPALDONATIONS', false);
}



// Theme Image Thumbnails Size
if (!function_exists('cmsms_image_thumbnail_list')) {
	function cmsms_image_thumbnail_list() {
		$list = array( 
			'small-thumb' => array( 
				'width' => 		55, 
				'height' => 	55, 
				'crop' => 		true 
			), 
			'square-thumb' => array( 
				'width' => 		300, 
				'height' => 	300, 
				'crop' => 		true, 
				'title' => 		__('Square', 'dental-clinic') 
			), 
			'blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	325, 
				'crop' => 		true, 
				'title' => 		__('Masonry Blog', 'dental-clinic') 
			), 
			'project-thumb' => array( 
				'width' => 		580, 
				'height' => 	580, 
				'crop' => 		true, 
				'title' => 		__('Project', 'dental-clinic') 
			), 
			'project-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		__('Masonry Project', 'dental-clinic') 
			), 
			'post-thumbnail' => array( 
				'width' => 		820, 
				'height' => 	420, 
				'crop' => 		true, 
				'title' => 		__('Featured', 'dental-clinic') 
			), 
			'masonry-thumb' => array( 
				'width' => 		860, 
				'height' => 	9999, 
				'title' => 		__('Masonry', 'dental-clinic') 
			), 
			'full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	535, 
				'crop' => 		true, 
				'title' => 		__('Full', 'dental-clinic') 
			), 
			'project-full-thumb' => array( 
				'width' => 		800, 
				'height' => 	470, 
				'crop' => 		true, 
				'title' => 		__('Project Full', 'dental-clinic') 
			), 
			'full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		__('Masonry Full', 'dental-clinic') 
			) 
		);
		
		
		return $list;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('cmsms_all_color_schemes_list')) {
	function cmsms_all_color_schemes_list() {
		$list = array( 
			'default' => 		__('Default', 'dental-clinic'), 
			'header' => 		__('Header', 'dental-clinic'), 
			'header_top' => 	__('Header Top', 'dental-clinic'), 
			'header_bottom' => 	__('Header Bottom', 'dental-clinic'), 
			'footer' => 		__('Footer', 'dental-clinic') 
		);
		
		
		$out = array_merge($list, cmsms_custom_color_schemes_list());
		
		
		return $out;
	}
}



// Theme Settings Color Schemes List
if (!function_exists('cmsms_color_schemes_list')) {
	function cmsms_color_schemes_list() {
		$list = cmsms_all_color_schemes_list();
		
		
		unset($list['header']);
		
		unset($list['header_top']);
		
		unset($list['header_bottom']);
		
		
		$out = array_merge($list, cmsms_custom_color_schemes_list());
		
		
		return $out;
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('cmsms_color_schemes_defaults')) {
	function cmsms_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#959595', 
				'link' => 		'#07a7e3', 
				'hover' => 		'#c0c0c0', 
				'heading' => 	'#373f50', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#fafafa', 
				'border' => 	'#e5e5e5', 
				'secondary' => 	'#37d6c0' 
			), 
			'header' => array( // Header color scheme
				'color' => 					'#959595', 
				'link' => 					'#373f50', 
				'hover' => 					'#07a7e3', 
				'subtitle' => 				'#959595', 
				'bg' => 					'#ffffff', 
				'bg_scroll' => 				'#ffffff', 
				'hover_color' => 			'#ffffff', 
				'hover_bg' => 				'#07a7e3', 
				'hover_bg_sec' => 			'#37d6c0', 
				'border' => 				'#e5e5e5', 
				'dropdown_link' => 			'#888888', 
				'dropdown_hover' => 		'#ffffff', 
				'dropdown_subtitle' => 		'#bebebe', 
				'dropdown_bg' => 			'#ffffff', 
				'dropdown_hover_bg' => 		'#07a7e3', 
				'dropdown_hover_bg_sec' => 	'#37d6c0', 
				'dropdown_border' => 		'#e5e5e5' 
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 				'#959595', 
				'link' => 				'#151515', 
				'hover' => 				'#37d6c0', 
				'bg' => 				'#ffffff', 
				'border' => 			'#e5e5e5', 
				'dropdown_link' => 		'#151515', 
				'dropdown_hover' => 	'#37d6c0', 
				'dropdown_bg' => 		'#ffffff', 
				'dropdown_border' => 	'#e5e5e5' 
			), 
			'header_bottom' => array( // Header Bottom color scheme
				'color' => 					'#959595', 
				'link' => 					'#373f50', 
				'hover' => 					'#07a7e3', 
				'subtitle' => 				'#959595', 
				'bg' => 					'#ffffff', 
				'bg_scroll' => 				'#ffffff', 
				'hover_bg' => 				'#ffffff', 
				'border' => 				'#e5e5e5', 
				'dropdown_link' => 			'#373f50', 
				'dropdown_hover' => 		'#ffffff', 
				'dropdown_subtitle' => 		'#bebebe', 
				'dropdown_bg' => 			'#ffffff', 
				'dropdown_hover_bg' => 		'#07a7e3', 
				'dropdown_hover_bg_sec' => 	'#37d6c0', 
				'dropdown_border' => 		'#e5e5e5' 
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'rgba(255,255,255,0.3)', 
				'link' => 		'rgba(255,255,255,0.5)', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#444f5d', 
				'alternate' => 	'rgba(255,255,255,0.1)', 
				'border' => 	'rgba(255,255,255,0.1)', 
				'secondary' => 	'#37d6c0'
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'#ffffff', 
				'link' => 		'#ffffff', 
				'hover' => 		'rgba(255,255,255,0.5)', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#07a7e3', 
				'alternate' => 	'#ffffff', 
				'border' => 	'rgba(255,255,255,0.5)', 
				'secondary' => 	'#37d6c0' 
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'#ffffff', 
				'link' => 		'#ffffff', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'rgba(7,167,227,0.75)', 
				'alternate' => 	'rgba(255,255,255,0)', 
				'border' => 	'rgba(255,255,255,0.45)', 
				'secondary' => 	'rgba(255,255,255,0.61)' 
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'#ffffff', 
				'link' => 		'#ffffff', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#3d3d3d', 
				'alternate' => 	'#3d3d3d', 
				'border' => 	'#ffffff', 
				'secondary' => 	'#fcfcfc' 
			), 
			'fourth' => array( // custom color scheme 4
				'color' => 		'#ffffff', 
				'link' => 		'#ffffff', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#959595', 
				'bg' => 		'rgba(255,255,255,0.38)', 
				'alternate' => 	'#ffffff', 
				'border' => 	'rgba(255,255,255,0.49)', 
				'secondary' => 	'#37d6c0' 
			), 
			'fifth' => array( // custom color scheme 5
				'color' => 		'#ffffff', 
				'link' => 		'rgba(255,255,255,0.86)', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'rgba(255,255,255,0.25)', 
				'alternate' => 	'rgba(255,255,255,0)', 
				'border' => 	'rgba(255,255,255,0.33)', 
				'secondary' => 	'rgba(255,255,255,0.86)' 
			) 
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
if (!defined('CMSMS_FRAMEWORK')) {
	define('CMSMS_FRAMEWORK', get_template_directory() . '/framework');
}

if (!defined('CMSMS_ADMIN')) {
	define('CMSMS_ADMIN', CMSMS_FRAMEWORK . '/admin');
}

if (!defined('CMSMS_SETTINGS')) {
	define('CMSMS_SETTINGS', CMSMS_ADMIN . '/settings');
}

if (!defined('CMSMS_OPTIONS')) {
	define('CMSMS_OPTIONS', CMSMS_ADMIN . '/options');
}

if (!defined('CMSMS_ADMIN_INC')) {
	define('CMSMS_ADMIN_INC', CMSMS_ADMIN . '/inc');
}

if (!defined('CMSMS_CLASS')) {
	define('CMSMS_CLASS', CMSMS_FRAMEWORK . '/class');
}

if (!defined('CMSMS_FUNCTION')) {
	define('CMSMS_FUNCTION', CMSMS_FRAMEWORK . '/function');
}


if (!defined('CMSMS_COMPOSER')) {
	define('CMSMS_COMPOSER', get_template_directory() . '/cmsms-c-c');
}



// Load Framework Parts
require_once(CMSMS_SETTINGS . '/cmsms-theme-settings.php');

require_once(CMSMS_OPTIONS . '/cmsms-theme-options.php');

require_once(CMSMS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMS_ADMIN_INC . '/plugin-activator.php');

require_once(CMSMS_CLASS . '/likes-posttype.php');

require_once(CMSMS_CLASS . '/twitteroauth.php');

require_once(CMSMS_CLASS . '/widgets.php');

require_once(CMSMS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMS_FUNCTION . '/likes.php');

require_once(CMSMS_FUNCTION . '/pagination.php');

require_once(CMSMS_FUNCTION . '/single-comment.php');

require_once(CMSMS_FUNCTION . '/theme-functions.php');

require_once(CMSMS_FUNCTION . '/theme-fonts.php');

require_once(CMSMS_FUNCTION . '/theme-colors-primary.php');

require_once(CMSMS_FUNCTION . '/theme-colors-secondary.php');

require_once(CMSMS_FUNCTION . '/template-functions.php');

require_once(CMSMS_FUNCTION . '/template-functions-post.php');

require_once(CMSMS_FUNCTION . '/template-functions-project.php');

require_once(CMSMS_FUNCTION . '/template-functions-profile.php');

require_once(CMSMS_FUNCTION . '/template-functions-shortcodes.php');

require_once(CMSMS_FUNCTION . '/template-functions-widgets.php');


if (class_exists('Cmsms_Content_Composer')) {
	require_once(CMSMS_COMPOSER . '/filters/cmsms-c-c-atts-filters.php');
}



//include the WPML installer in the theme
include get_template_directory() . '/installer/loader.php';

WP_Installer_Setup($wp_installer_instance,  
    array(
        'plugins_install_tab' => 1,   // optional, default value: 1
        'affiliate_id' => '46196',   // optional, default value: empty
        'affiliate_key' => 'N9YfTTsunQtc',   // optional, default value: empty
        'src_name' => 'Dental Clinic',   // optional, default value: empty, needed for coupons
        'src_author' => 'Cmsmasters',// optional, default value: empty, needed for coupons
        'repositories_include' => array('wpml') // optional, default to empty (show all)
    )
); 



// Load Theme Local File
if (!function_exists('cmsms_load_theme_textdomain')) {
	function cmsms_load_theme_textdomain() {
		$locale = get_locale();
		
		
		load_theme_textdomain('dental-clinic', CMSMS_FRAMEWORK . '/languages');
		
		
		$locale_file = CMSMS_FRAMEWORK . '/languages/' . $locale . '.php';
		
		
		if (is_readable($locale_file)) {
			require_once($locale_file);
		}
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'cmsms_load_theme_textdomain')) {
	add_action('after_setup_theme', 'cmsms_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('cmsms_theme_activation')) {
	function cmsms_theme_activation() {
		if (get_option('cmsms_active_theme') != CMSMS_SHORTNAME) {
			add_option('cmsms_active_theme', CMSMS_SHORTNAME, '', 'yes');
			
			
			cmsms_add_global_options();
			
			cmsms_regenerate_styles();
			
			cmsms_add_global_icons();
			
			flush_rewrite_rules();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsms-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'cmsms_theme_activation');



// Framework Deactivation
if (!function_exists('cmsms_theme_deactivation')) {
	function cmsms_theme_deactivation() {
		delete_option('cmsms_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'cmsms_theme_deactivation')) {
	add_action('switch_theme', 'cmsms_theme_deactivation');
}
