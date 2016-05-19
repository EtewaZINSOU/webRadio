<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * TGM-Plugin-Activation 2.5.2
 * Created by CMSMasters
 * 
 */


locate_template('/framework/class/class-tgm-plugin-activation.php', true, true);


function cmsms_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> 'CMSMasters Content Composer', 
			'slug'					=> 'cmsms-content-composer', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsms-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '1.4.9', 
			'force_activation'		=> true, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> 'CMSMasters Mega Menu', 
			'slug'					=> 'cmsms-mega-menu', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsms-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.4', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> 'CMSMasters Contact Form Builder', 
			'slug'					=> 'cmsms-contact-form-builder', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsms-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.3.4', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name' 					=> 'LayerSlider WP', 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '5.6.2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> 'Revolution Slider', 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.0.8.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> 'Contact Form 7', 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> 'WordPress SEO by Yoast', 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> 'PayPal Donations', 
			'slug' 					=> 'paypal-donations', 
			'required'				=> false 
		) 
	);
	
	
	$config = array( 
		'id' => 				'dental-clinic', 
		'default_path' => 		'', 
		'menu' => 				'theme-required-plugins', 
		'parent_slug' => 		'themes.php', 
		'capability' => 		'edit_theme_options', 
		'has_notices' => 		true, 
		'dismissable' => 		true, 
		'dismiss_msg' => 		'', 
		'is_automatic' => 		false, 
		'message' => 			'', 
		'strings' => 			array( 
			'page_title' => 						__('Theme Required & Recommended Plugins', 'dental-clinic'), 
			'menu_title' => 						__('Theme Plugins', 'dental-clinic'), 
			'installing' => 						__('Installing Plugin: %s', 'dental-clinic'), 
			'oops' => 								__('Something went wrong with the plugin API.', 'dental-clinic'), 
			'notice_can_install_required' => 		_n_noop(
				'This theme requires the following plugin: %1$s.', 
				'This theme requires the following plugins: %1$s.', 
				'dental-clinic'
			), 
			'notice_can_install_recommended' => 	_n_noop(
				'This theme recommends the following plugin: %1$s.', 
				'This theme recommends the following plugins: %1$s.', 
				'dental-clinic'
			), 
			'notice_cannot_install' => 				_n_noop(
				'Sorry, but you do not have the correct permissions to install the %1$s plugin.', 
				'Sorry, but you do not have the correct permissions to install the %1$s plugisn.', 
				'dental-clinic'
			), 
			'notice_ask_to_update' => 				_n_noop(
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 
				'dental-clinic'
			), 
			'notice_ask_to_update_maybe' => 		_n_noop(
				'There is an update available for: %1$s.', 
				'There are updates available for the following plugins: %1$s.', 
				'dental-clinic'
			), 
			'notice_cannot_update' => 				_n_noop(
				'Sorry, but you do not have the correct permissions to update the %1$s plugin.', 
				'Sorry, but you do not have the correct permissions to update the %1$s plugins.', 
				'dental-clinic'
			), 
			'notice_can_activate_required' => 		_n_noop(
				'The following required plugin is currently inactive: %1$s.', 
				'The following required plugins are currently inactive: %1$s.', 
				'dental-clinic'
			), 
			'notice_can_activate_recommended' => 	_n_noop(
				'The following recommended plugin is currently inactive: %1$s.', 
				'The following recommended plugins are currently inactive: %1$s.', 
				'dental-clinic'
			), 
			'notice_cannot_activate' => 			_n_noop(
				'Sorry, but you do not have the correct permissions to activate the %1$s plugin.', 
				'Sorry, but you do not have the correct permissions to activate the %1$s plugins.', 
				'dental-clinic'
			), 
			'install_link' => 						_n_noop(
				'Begin installing plugin', 
				'Begin installing plugins', 
				'dental-clinic'
			), 
			'update_link' => 						_n_noop(
				'Begin updating plugin', 
				'Begin updating plugins', 
				'dental-clinic'
			), 
			'activate_link' => 						_n_noop(
				'Begin activating plugin', 
				'Begin activating plugins', 
				'dental-clinic'
			), 
			'return' => 							__('Return to Theme Required & Recommended Plugins', 'dental-clinic'), 
			'dashboard' => 							__('Return to the dashboard', 'dental-clinic'), 
			'plugin_activated' => 					__('Plugin activated successfully.', 'dental-clinic'), 
			'activated_successfully' => 			__('The following plugin was activated successfully:', 'dental-clinic'), 
			'plugin_already_active' => 				__('No action taken. Plugin %1$s was already active.', 'dental-clinic'), 
			'plugin_needs_higher_version' => 		__('Plugin not activated. A higher version of %1$s is needed for this theme. Please update the plugin.', 'dental-clinic'), 
			'complete' => 							__('All plugins installed and activated successfully. %1$s', 'dental-clinic'), 
			'dismiss' => 							__('Dismiss this notice', 'dental-clinic'), 
			'contact_admin' => 						__('Please contact the administrator of this site for help.', 'dental-clinic'), 
			'nag_type' => 							'updated' 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'cmsms_register_theme_plugins');

