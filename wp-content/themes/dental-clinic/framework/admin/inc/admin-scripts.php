<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Admin Panel Scripts & Styles
 * Created by CMSMasters
 * 
 */


function cmsmasters_admin_register($hook) {
	$screen = get_current_screen();
	
	
	wp_enqueue_style('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker-alpha', get_template_directory_uri() . '/framework/admin/inc/js/wp-color-picker-alpha.js', array('jquery', 'wp-color-picker'), '1.1.0', true);
	
	
	wp_enqueue_style('admin-icons-font', get_template_directory_uri() . '/framework/admin/inc/css/admin-icons-font.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('cmsms-lightbox', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmsLightbox.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('cmsms-lightbox-rtl', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmsLightbox-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('cmsms-uploader-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmsUploader.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('cmsms-uploader-js', 'cmsms_admin_uploader', array( 
		'choose' => 				esc_attr__('Choose image', 'dental-clinic'), 
		'insert' => 				esc_attr__('Insert image', 'dental-clinic'), 
		'remove' => 				esc_attr__('Remove', 'dental-clinic'), 
		'edit_gallery' => 			esc_attr__('Edit gallery', 'dental-clinic') 
	));
	
	
	wp_enqueue_script('cmsms-lightbox-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmsLightbox.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('cmsms-lightbox-js', 'cmsms_admin_lightbox', array( 
		'cancel' => 				esc_attr__('Cancel', 'dental-clinic'), 
		'insert' => 				esc_attr__('Insert', 'dental-clinic'), 
		'deselect' => 				esc_attr__('Deselect', 'dental-clinic'), 
		'choose_icon' => 			esc_attr__('Choose Icon', 'dental-clinic'), 
		'find_icons' => 			esc_attr__('Find icons', 'dental-clinic'), 
		'error_on_page' => 			esc_attr__("Error on page!\nReload page and try again.", 'dental-clinic') 
	));
	
	
	if ( 
		$hook == 'post.php' || 
		$hook == 'post-new.php' || 
		$hook == 'widgets.php' || 
		$hook == 'nav-menus.php' || 
		$screen->id == 'theme-settings_page_cmsms-settings-element' 
	) {
		cmsms_composer_icons();
		
		
		wp_enqueue_style('theme-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('theme-icons-custom', get_template_directory_uri() . '/css/fontello_custom.css', array(), '1.0.0', 'screen');
	}
	
	
	if ( 
		$hook == 'widgets.php' || 
		$hook == 'nav-menus.php' 
	) {
		wp_enqueue_media();
	}
	
	
	wp_enqueue_style('admin-theme-styles', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('admin-theme-styles-rtl', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('admin-theme-scripts', get_template_directory_uri() . '/framework/admin/inc/js/admin-theme-scripts.js', array('jquery'), '1.0.0', true);
	
	
	if ($hook == 'widgets.php') {
		wp_enqueue_style('widgets-styles', get_template_directory_uri() . '/framework/admin/inc/css/widgets-styles.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_script('widgets-scripts', get_template_directory_uri() . '/framework/admin/inc/js/widgets-scripts.js', array('jquery'), '1.0.0', true);
	}
}

add_action('admin_enqueue_scripts', 'cmsmasters_admin_register');

