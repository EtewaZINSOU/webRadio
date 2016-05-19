<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */

/* // Sc Name Shortcode Attributes Filter
add_filter('sc_name_atts_filter', 'sc_name_atts');

function sc_name_atts() { // copy default atts from shortcodes.php in plugin folder, paste here and add custom atts
	return array( 
		'attr_name_1' => 				'attr_std_val_1', 
		'attr_name_2' => 				'attr_std_val_2', 
		'attr_name_3' => 				'attr_std_val_3', 
		...
		'custom_attr_name_1' => 		'custom_attr_val_1', 
		'custom_attr_name_2' => 		'custom_attr_val_2', 
		'custom_attr_name_3' => 		'custom_attr_val_3' 
	);
} */


/* Register Admin Panel JS Scripts */
function register_admin_js_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('composer-shortcodes-extend', get_template_directory_uri() . '/cmsms-c-c/js/cmsms-c-c-shortcodes-extend.js', array('cmsms_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
			'blog_field_layout_mode_puzzle' => 		esc_attr__('Puzzle', 'dental-clinic'), 
			'quotes_field_slider_type_title' => 	esc_attr__('Slider Type', 'dental-clinic'), 
			'quotes_field_slider_type_descr' => 	esc_attr__('Choose your quotes slider style type', 'dental-clinic'), 
			'quotes_field_type_choice_box' => 		esc_attr__('Boxed', 'dental-clinic'), 
			'quotes_field_type_choice_center' => 	esc_attr__('Centered', 'dental-clinic')  
		));
	}
}

add_action('admin_enqueue_scripts', 'register_admin_js_scripts');


// Quotes Shortcode Attributes Filter
add_filter('cmsms_quotes_atts_filter', 'cmsms_quotes_atts');

function cmsms_quotes_atts() {
	return array( 
		'mode' => 				'grid', 
		'type' => 				'boxed', 
		'columns' => 			'2', 
		'speed' => 				'10', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}

