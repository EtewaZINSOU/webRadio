<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'dental-clinic');
	$tabs['icon'] = esc_attr__('Social Icons', 'dental-clinic');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'dental-clinic');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'dental-clinic');
	$tabs['error'] = esc_attr__('404', 'dental-clinic');
	$tabs['code'] = esc_attr__('Custom Codes', 'dental-clinic');
	$tabs['wpml'] = __('WPML Installer', 'dental-clinic');
	
	if (class_exists('Cmsms_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'dental-clinic');
	}
	
	return $tabs;
}


function cmsms_options_element_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'dental-clinic');
		
		break;
	case 'wpml':
		$sections = array();
		
		$sections['wpml_section'] = __('WPML Installer', 'dental-clinic');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'dental-clinic');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'dental-clinic');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'dental-clinic');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'dental-clinic');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'dental-clinic');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'dental-clinic');
		
		break;
	}
	
	return $sections;	
} 


function cmsms_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => CMSMS_SHORTNAME . '_sidebar', 
			'title' => __('Custom Sidebars', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'wpml':
		$options[] = array( 
			'section' => 'wpml_section', 
			'id' => CMSMS_SHORTNAME . '_wpml', 
			'title' => __('Add WPML Plugin', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'wpml', 
			'std' => '' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => CMSMS_SHORTNAME . '_social_icons', 
			'title' => __('Social Icons', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsms-icon-linkedin|#|' . __('Linkedin', 'dental-clinic') . '|true', 
				'cmsms-icon-facebook|#|' . __('Facebook', 'dental-clinic') . '|true', 
				'cmsms-icon-google-1|#|' . __('Google', 'dental-clinic') . '|true', 
				'cmsms-icon-twitter|#|' . __('Twitter', 'dental-clinic') . '|true', 
				'cmsms-icon-skype|#|' . __('Skype', 'dental-clinic') . '|true' 
			) 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_skin', 
			'title' => __('Skin', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				__('Dark', 'dental-clinic') . '|dark', 
				__('Light', 'dental-clinic') . '|light', 
				__('Mac', 'dental-clinic') . '|mac', 
				__('Metro Black', 'dental-clinic') . '|metro-black', 
				__('Metro White', 'dental-clinic') . '|metro-white', 
				__('Parade', 'dental-clinic') . '|parade', 
				__('Smooth', 'dental-clinic') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_path', 
			'title' => __('Path', 'dental-clinic'), 
			'desc' => __('Sets path for switching windows', 'dental-clinic'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				__('Vertical', 'dental-clinic') . '|vertical', 
				__('Horizontal', 'dental-clinic') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_infinite', 
			'title' => __('Infinite', 'dental-clinic'), 
			'desc' => __('Sets the ability to infinite the group', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_aspect_ratio', 
			'title' => __('Keep Aspect Ratio', 'dental-clinic'), 
			'desc' => __('Sets the resizing method used to keep aspect ratio within the viewport', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_mobile_optimizer', 
			'title' => __('Mobile Optimizer', 'dental-clinic'), 
			'desc' => __('Make lightboxes optimized for giving better experience with mobile devices', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_max_scale', 
			'title' => __('Max Scale', 'dental-clinic'), 
			'desc' => __('Sets the maximum viewport scale of the content', 'dental-clinic'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_min_scale', 
			'title' => __('Min Scale', 'dental-clinic'), 
			'desc' => __('Sets the minimum viewport scale of the content', 'dental-clinic'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_inner_toolbar', 
			'title' => __('Inner Toolbar', 'dental-clinic'), 
			'desc' => __('Bring buttons into windows, or let them be over the overlay', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_smart_recognition', 
			'title' => __('Smart Recognition', 'dental-clinic'), 
			'desc' => __('Sets content auto recognize from web pages', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_fullscreen_one_slide', 
			'title' => __('Fullscreen One Slide', 'dental-clinic'), 
			'desc' => __('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_fullscreen_viewport', 
			'title' => __('Fullscreen Viewport', 'dental-clinic'), 
			'desc' => __('Sets the resizing method used to fit content within the fullscreen mode', 'dental-clinic'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				__('Center', 'dental-clinic') . '|center', 
				__('Fit', 'dental-clinic') . '|fit', 
				__('Fill', 'dental-clinic') . '|fill', 
				__('Stretch', 'dental-clinic') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_toolbar', 
			'title' => __('Toolbar Controls', 'dental-clinic'), 
			'desc' => __('Sets buttons be available or not', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_arrows', 
			'title' => __('Arrow Controls', 'dental-clinic'), 
			'desc' => __('Enable the arrow buttons', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_fullscreen', 
			'title' => __('Fullscreen Controls', 'dental-clinic'), 
			'desc' => __('Sets the fullscreen button', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_thumbnail', 
			'title' => __('Thumbnails Controls', 'dental-clinic'), 
			'desc' => __('Sets the thumbnail navigation', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_keyboard', 
			'title' => __('Keyboard Controls', 'dental-clinic'), 
			'desc' => __('Sets the keyboard navigation', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_mousewheel', 
			'title' => __('Mouse Wheel Controls', 'dental-clinic'), 
			'desc' => __('Sets the mousewheel navigation', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_swipe', 
			'title' => __('Swipe Controls', 'dental-clinic'), 
			'desc' => __('Sets the swipe navigation', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_slideshow', 
			'title' => __('Slideshow Controls', 'dental-clinic'), 
			'desc' => __('Enable the slideshow feature and button', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_nav', 
			'title' => __('Website Pages', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_categs', 
			'title' => __('Blog Archives by Categories', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_tags', 
			'title' => __('Blog Archives by Tags', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_month', 
			'title' => __('Blog Archives by Month', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_pj_categs', 
			'title' => __('Portfolio Archives by Categories', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_pj_tags', 
			'title' => __('Portfolio Archives by Tags', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_color', 
			'title' => __('Text Color', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_color', 
			'title' => __('Background Color', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#07a7e3' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_img_enable', 
			'title' => __('Background Image Visibility', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_image', 
			'title' => __('Background Image', 'dental-clinic'), 
			'desc' => __('Choose your custom error page background image.', 'dental-clinic'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_rep', 
			'title' => __('Background Repeat', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				__('No Repeat', 'dental-clinic') . '|no-repeat', 
				__('Repeat Horizontally', 'dental-clinic') . '|repeat-x', 
				__('Repeat Vertically', 'dental-clinic') . '|repeat-y', 
				__('Repeat', 'dental-clinic') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_pos', 
			'title' => __('Background Position', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				__('Top Left', 'dental-clinic') . '|top left', 
				__('Top Center', 'dental-clinic') . '|top center', 
				__('Top Right', 'dental-clinic') . '|top right', 
				__('Center Left', 'dental-clinic') . '|center left', 
				__('Center Center', 'dental-clinic') . '|center center', 
				__('Center Right', 'dental-clinic') . '|center right', 
				__('Bottom Left', 'dental-clinic') . '|bottom left', 
				__('Bottom Center', 'dental-clinic') . '|bottom center', 
				__('Bottom Right', 'dental-clinic') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_att', 
			'title' => __('Background Attachment', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				__('Scroll', 'dental-clinic') . '|scroll', 
				__('Fixed', 'dental-clinic') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_size', 
			'title' => __('Background Size', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				__('Auto', 'dental-clinic') . '|auto', 
				__('Cover', 'dental-clinic') . '|cover', 
				__('Contain', 'dental-clinic') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_search', 
			'title' => __('Search Line', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_sitemap_button', 
			'title' => __('Sitemap Button', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_sitemap_link', 
			'title' => __('Sitemap Page URL', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_custom_css', 
			'title' => __('Custom CSS', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_custom_js', 
			'title' => __('Custom JavaScript', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_api_key', 
			'title' => __('Twitter API key', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_api_secret', 
			'title' => __('Twitter API secret', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_access_token', 
			'title' => __('Twitter Access token', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_access_token_secret', 
			'title' => __('Twitter Access token secret', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMS_SHORTNAME . '_recaptcha_public_key', 
			'title' => __('reCAPTCHA Public Key', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMS_SHORTNAME . '_recaptcha_private_key', 
			'title' => __('reCAPTCHA Private Key', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

