<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_general_tabs() {
	$cmsms_option = cmsms_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'dental-clinic');
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'dental-clinic');
	}
	
	$tabs['header'] = esc_attr__('Header', 'dental-clinic');
	$tabs['content'] = esc_attr__('Content', 'dental-clinic');
	$tabs['footer'] = esc_attr__('Footer', 'dental-clinic');
	
	return $tabs;
}


function cmsms_options_general_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'dental-clinic');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'dental-clinic');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'dental-clinic');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'dental-clinic');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'dental-clinic');
		
		break;
	}
	
	return $sections;
} 


function cmsms_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_theme_layout', 
			'title' => __('Theme Layout', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'liquid', 
			'choices' => array( 
				__('Liquid', 'dental-clinic') . '|liquid', 
				__('Boxed', 'dental-clinic') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_type', 
			'title' => __('Logo Type', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				__('Image', 'dental-clinic') . '|image', 
				__('Text', 'dental-clinic') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_url', 
			'title' => __('Logo Image', 'dental-clinic'), 
			'desc' => __('Choose your website logo image.', 'dental-clinic'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_url_retina', 
			'title' => __('Retina Logo Image', 'dental-clinic'), 
			'desc' => __('Choose logo image for retina displays.', 'dental-clinic'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_title', 
			'title' => __('Logo Title', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : CMSMS_FULLNAME), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_subtitle', 
			'title' => __('Logo Subtitle', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_custom_color', 
			'title' => __('Custom Text Colors', 'dental-clinic'), 
			'desc' => __('enable', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_title_color', 
			'title' => __('Logo Title Color', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_logo_subtitle_color', 
			'title' => __('Logo Subtitle Color', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		if (!function_exists('has_site_icon') || !has_site_icon()) {
			$options[] = array( 
				'section' => 'general_section', 
				'id' => CMSMS_SHORTNAME . '_favicon', 
				'title' => __('Favicon', 'dental-clinic'), 
				'desc' => __('show', 'dental-clinic'), 
				'type' => 'checkbox', 
				'std' => 1 
			);
			
			$options[] = array( 
				'section' => 'general_section', 
				'id' => CMSMS_SHORTNAME . '_favicon_url', 
				'title' => __('Favicon URL', 'dental-clinic'), 
				'desc' => __('Choose your website favicon image url.', 'dental-clinic'), 
				'type' => 'upload', 
				'std' => '|' . get_template_directory_uri() . '/img/favicon.ico', 
				'frame' => 'select', 
				'multiple' => false 
			);
		}
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_col', 
			'title' => __('Background Color', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_img_enable', 
			'title' => __('Background Image Visibility', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_img', 
			'title' => __('Background Image', 'dental-clinic'), 
			'desc' => __('Choose your custom website background image url.', 'dental-clinic'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_rep', 
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
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_pos', 
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
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_att', 
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
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_size', 
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
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_fixed_header', 
			'title' => __('Fixed Header', 'dental-clinic'), 
			'desc' => __('enable', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_overlaps', 
			'title' => __('Header Overlaps Content', 'dental-clinic'), 
			'desc' => __('enable', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line', 
			'title' => __('Top Line', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_height', 
			'title' => __('Top Height', 'dental-clinic'), 
			'desc' => __('pixels', 'dental-clinic'), 
			'type' => 'number', 
			'std' => '36', 
			'min' => '30' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line_short_info', 
			'title' => __('Top Short Info', 'dental-clinic'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'dental-clinic') . '</strong>', 
			'type' => 'textarea', 
			'std' => '<div class="adr cmsms-icon-location-7"><a href="#"><span class="locality">Brooklyn</span>, NY <span class="postal-code">10036</span>, <span class="country-name">United States</span></a></div><div class="email cmsms-icon-mail-1"><a href="mailto:example@dental-clinic.com">example@dental-clinic.com</a></div>', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line_add_cont', 
			'title' => __('Top Additional Content', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				__('None', 'dental-clinic') . '|none', 
				__('Top Line Social Icons', 'dental-clinic') . '|social', 
				__('Top Line Navigation', 'dental-clinic') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_styles', 
			'title' => __('Header Styles', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'l_nav', 
			'choices' => array( 
				__('Default Style', 'dental-clinic') . '|default', 
				__('Compact Style Left Navigation', 'dental-clinic') . '|l_nav', 
				__('Compact Style Right Navigation', 'dental-clinic') . '|r_nav', 
				__('Compact Style Center Navigation', 'dental-clinic') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_mid_height', 
			'title' => __('Header Middle Height', 'dental-clinic'), 
			'desc' => __('pixels', 'dental-clinic'), 
			'type' => 'number', 
			'std' => '105', 
			'min' => '80' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_bot_height', 
			'title' => __('Header Bottom Height', 'dental-clinic'), 
			'desc' => __('pixels', 'dental-clinic'), 
			'type' => 'number', 
			'std' => '46', 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_search', 
			'title' => __('Header Search', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_add_cont', 
			'title' => __('Header Additional Content', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cust_html', 
			'choices' => array( 
				__('None', 'dental-clinic') . '|none', 
				__('Header Social Icons', 'dental-clinic') . '|social', 
				__('Header Custom HTML', 'dental-clinic') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_add_cont_cust_html', 
			'title' => __('Header Custom HTML', 'dental-clinic'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'dental-clinic') . '</strong>', 
			'type' => 'textarea', 
			'std' => '<h4 class="call_us"><span class="cmsms-icon-phone-4">Call Us:  1-800-123-1234</span></h4>', 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_layout', 
			'title' => __('Layout Type by Default', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'dental-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'dental-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'dental-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_archives_layout', 
			'title' => __('Archives Layout Type', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'dental-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'dental-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'dental-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_search_layout', 
			'title' => __('Search Layout Type', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'dental-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'dental-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'dental-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_other_layout', 
			'title' => __('Other Layout Type', 'dental-clinic'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'dental-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'dental-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'dental-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_alignment', 
			'title' => __('Heading Alignment by Default', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'left', 
			'choices' => array( 
				__('Left', 'dental-clinic') . '|left', 
				__('Right', 'dental-clinic') . '|right', 
				__('Center', 'dental-clinic') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_scheme', 
			'title' => __('Heading Custom Color Scheme by Default', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'first', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_image_enable', 
			'title' => __('Heading Background Image Visibility by Default', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_image', 
			'title' => __('Heading Background Image by Default', 'dental-clinic'), 
			'desc' => __('Choose your custom heading background image by default.', 'dental-clinic'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_repeat', 
			'title' => __('Heading Background Repeat by Default', 'dental-clinic'), 
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
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_attachment', 
			'title' => __('Heading Background Attachment by Default', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				__('Scroll', 'dental-clinic') . '|scroll', 
				__('Fixed', 'dental-clinic') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_size', 
			'title' => __('Heading Background Size by Default', 'dental-clinic'), 
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
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_color', 
			'title' => __('Heading Background Color Overlay by Default', 'dental-clinic'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_height', 
			'title' => __('Heading Height by Default', 'dental-clinic'), 
			'desc' => __('pixels', 'dental-clinic'), 
			'type' => 'number', 
			'std' => '80', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_breadcrumbs', 
			'title' => __('Breadcrumbs Visibility by Default', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_scheme', 
			'title' => __('Bottom Custom Color Scheme', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_sidebar', 
			'title' => __('Bottom Sidebar Visibility by Default', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_sidebar_layout', 
			'title' => __('Bottom Sidebar Layout by Default', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '14141414', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_scheme', 
			'title' => __('Footer Custom Color Scheme', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_type', 
			'title' => __('Footer Type', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'small', 
			'choices' => array( 
				__('Default', 'dental-clinic') . '|default', 
				__('Small', 'dental-clinic') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_additional_content', 
			'title' => __('Footer Additional Content', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'nav', 
			'choices' => array( 
				__('None', 'dental-clinic') . '|none', 
				__('Footer Navigation', 'dental-clinic') . '|nav', 
				__('Social Icons', 'dental-clinic') . '|social', 
				__('Custom HTML', 'dental-clinic') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_fixed_footer', 
			'title' => __('Fixed Footer', 'dental-clinic'), 
			'desc' => __('enable', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_height', 
			'title' => __('Footer Height', 'dental-clinic'), 
			'desc' => __('pixels', 'dental-clinic'), 
			'type' => 'number', 
			'std' => '450', 
			'min' => '200' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_logo', 
			'title' => __('Footer Logo', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_logo_url', 
			'title' => __('Footer Logo', 'dental-clinic'), 
			'desc' => __('Choose your website footer logo image.', 'dental-clinic'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_logo_url_retina', 
			'title' => __('Footer Logo for Retina', 'dental-clinic'), 
			'desc' => __('Choose your website footer logo image for retina.', 'dental-clinic'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_nav', 
			'title' => __('Footer Navigation', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_social', 
			'title' => __('Footer Social Icons', 'dental-clinic'), 
			'desc' => __('show', 'dental-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_html', 
			'title' => __('Footer Custom HTML', 'dental-clinic'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'dental-clinic') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_copyright', 
			'title' => __('Copyright Text', 'dental-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ' &copy; 2015 ' . CMSMS_FULLNAME, 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

