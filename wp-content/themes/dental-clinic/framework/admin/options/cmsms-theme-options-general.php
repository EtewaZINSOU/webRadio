<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Post, Page, Project & Profile General Options
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


$cmsms_global_bg_col = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_col']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_col'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_col'] : '#fefefe';
$cmsms_global_bg_img_enable = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable'] == 1) ? 'true' : 'false') : 'true';
$cmsms_global_bg_img = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_img']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_img'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_img'] : '';
$cmsms_global_bg_rep = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_rep']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_rep'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_rep'] : 'repeat';
$cmsms_global_bg_pos = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_pos']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_pos'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_pos'] : 'top center';
$cmsms_global_bg_att = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_att']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_att'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_att'] : 'scroll';
$cmsms_global_bg_size = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_size']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_size'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_size'] : 'auto';


$cmsms_global_heading_alignment = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_alignment']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_alignment'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_alignment'] : 'left';
$cmsms_global_heading_scheme = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_scheme']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_scheme'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_scheme'] : 'first';
$cmsms_global_heading_bg_img_enable = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable'] == 1) ? 'true' : 'false') : 'true';
$cmsms_global_heading_bg_img = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image'] : '';
$cmsms_global_heading_bg_rep = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat'] : 'repeat';
$cmsms_global_heading_bg_att = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment'] : 'scroll';
$cmsms_global_heading_bg_size = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size'] : 'cover';
$cmsms_global_heading_bg_color = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color'] : '';
$cmsms_global_heading_height = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_height']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_height'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_height'] : '';


$cmsms_global_breadcrumbs = (isset($cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs']) && $cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs'] == 1) ? 'true' : 'false') : 'true';


$custom_general_meta_fields = array( 
	array( 
		'id'	=> 'cmsms_bg', 
		'type'	=> 'tab_start', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Background', 'dental-clinic'), 
		'desc'	=> __('Use Default', 'dental-clinic'), 
		'id'	=> 'cmsms_bg_default', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> __('Background Color', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bg_col', 
		'type'	=> 'color', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bg_col 
	), 
	array( 
		'label'	=> __('Background Image Visibility', 'dental-clinic'), 
		'desc'	=> __('Show', 'dental-clinic'), 
		'id'	=> 'cmsms_bg_img_enable', 
		'type'	=> 'checkbox', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bg_img_enable 
	), 
	array( 
		'label'	=> __('Background Image', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bg_img', 
		'type'	=> 'image', 
		'hide'	=> 'true', 
		'cancel' => '', 
		'std'	=> $cmsms_global_bg_img, 
		'frame' => 'select', 
		'multiple' => false 
	), 
	array( 
		'label'	=> __('Background Repeat', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bg_rep', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bg_rep, 
		'options' => array( 
			'no-repeat' => array( 
				'label' => __('No Repeat', 'dental-clinic'), 
				'value'	=> 'no-repeat' 
			), 
			'repeat-x' => array( 
				'label' => __('Repeat Horizontally', 'dental-clinic'), 
				'value'	=> 'repeat-x' 
			), 
			'repeat-y' => array( 
				'label' => __('Repeat Vertically', 'dental-clinic'), 
				'value'	=> 'repeat-y' 
			), 
			'repeat' => array( 
				'label' => __('Repeat', 'dental-clinic'), 
				'value'	=> 'repeat' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Background Position', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bg_pos', 
		'type'	=> 'select', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bg_pos, 
		'options' => array( 
			'top left' => array( 
				'label' => __('Top Left', 'dental-clinic'), 
				'value'	=> 'top left' 
			), 
			'top center' => array( 
				'label' => __('Top Center', 'dental-clinic'), 
				'value'	=> 'top center' 
			), 
			'top right' => array( 
				'label' => __('Top Right', 'dental-clinic'), 
				'value'	=> 'top right' 
			), 
			'center left' => array( 
				'label' => __('Center Left', 'dental-clinic'), 
				'value'	=> 'center left' 
			), 
			'center center' => array( 
				'label' => __('Center Center', 'dental-clinic'), 
				'value'	=> 'center center' 
			), 
			'center right' => array( 
				'label' => __('Center Right', 'dental-clinic'), 
				'value'	=> 'center right' 
			), 
			'bottom left' => array( 
				'label' => __('Bottom Left', 'dental-clinic'), 
				'value'	=> 'bottom left' 
			), 
			'bottom center' => array( 
				'label' => __('Bottom Center', 'dental-clinic'), 
				'value'	=> 'bottom center' 
			), 
			'bottom right' => array( 
				'label' => __('Bottom Right', 'dental-clinic'), 
				'value'	=> 'bottom right' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Background Attachment', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bg_att', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bg_att, 
		'options' => array( 
			'scroll' => array( 
				'label' => __('Scroll', 'dental-clinic'), 
				'value'	=> 'scroll' 
			), 
			'fixed' => array( 
				'label' => __('Fixed', 'dental-clinic'), 
				'value'	=> 'fixed' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Background Size', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bg_size', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bg_size, 
		'options' => array( 
			'auto' => array( 
				'label' => __('Auto', 'dental-clinic'), 
				'value'	=> 'auto' 
			), 
			'cover' => array( 
				'label' => __('Cover', 'dental-clinic'), 
				'value'	=> 'cover' 
			), 
			'contain' => array( 
				'label' => __('Contain', 'dental-clinic'), 
				'value'	=> 'contain' 
			)
		) 
	), 
	array( 
		'id'	=> 'cmsms_bg', 
		'type'	=> 'tab_finish' 
	), 
	array( 
		'id'	=> 'cmsms_heading', 
		'type'	=> 'tab_start', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Heading Text', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading', 
		'type'	=> 'radio', 
		'hide'	=> '', 
		'std'	=> 'disabled', 
		'options' => array( 
			'default' => array( 
				'label' => __('Default', 'dental-clinic'), 
				'value'	=> 'default' 
			), 
			'custom' => array( 
				'label' => __('Custom', 'dental-clinic'), 
				'value'	=> 'custom' 
			), 
			'disabled' => array( 
				'label' => __('Disabled', 'dental-clinic'), 
				'value'	=> 'disabled' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Heading Title', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_title', 
		'type'	=> 'text_long', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Heading Subtitle', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_subtitle', 
		'type'	=> 'textarea', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Heading Icon', 'dental-clinic'), 
		'desc'	=> __('Choose your custom icon for this heading', 'dental-clinic'), 
		'id'	=> 'cmsms_heading_icon', 
		'type'	=> 'icon', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Heading Alignment', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_alignment', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_alignment, 
		'options' => array( 
			'left' => array( 
				'label' => __('Left', 'dental-clinic'), 
				'value'	=> 'left' 
			), 
			'right' => array( 
				'label' => __('Right', 'dental-clinic'), 
				'value'	=> 'right' 
			), 
			'center' => array( 
				'label' => __('Center', 'dental-clinic'), 
				'value'	=> 'center' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Heading Color Scheme', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_scheme', 
		'type'	=> 'select_scheme', 
		'hide'	=> 'false', 
		'std'	=> $cmsms_global_heading_scheme 
	), 
	array( 
		'label'	=> __('Heading Background Image Visibility', 'dental-clinic'), 
		'desc'	=> __('Show', 'dental-clinic'), 
		'id'	=> 'cmsms_heading_bg_img_enable', 
		'type'	=> 'checkbox', 
		'hide'	=> 'false', 
		'std'	=> $cmsms_global_heading_bg_img_enable 
	), 
	array( 
		'label'	=> __('Heading Background Image', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_bg_img', 
		'type'	=> 'image', 
		'hide'	=> 'true', 
		'cancel' => '', 
		'std'	=> $cmsms_global_heading_bg_img, 
		'frame' => 'select', 
		'multiple' => false 
	), 
	array( 
		'label'	=> __('Heading Background Repeat', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_bg_rep', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_bg_rep, 
		'options' => array( 
			'no-repeat' => array( 
				'label' => __('No Repeat', 'dental-clinic'), 
				'value'	=> 'no-repeat' 
			), 
			'repeat-x' => array( 
				'label' => __('Repeat Horizontally', 'dental-clinic'), 
				'value'	=> 'repeat-x' 
			), 
			'repeat-y' => array( 
				'label' => __('Repeat Vertically', 'dental-clinic'), 
				'value'	=> 'repeat-y' 
			), 
			'repeat' => array( 
				'label' => __('Repeat', 'dental-clinic'), 
				'value'	=> 'repeat' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Heading Background Attachment', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_bg_att', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_bg_att, 
		'options' => array( 
			'scroll' => array( 
				'label' => __('Scroll', 'dental-clinic'), 
				'value'	=> 'scroll' 
			), 
			'fixed' => array( 
				'label' => __('Fixed', 'dental-clinic'), 
				'value'	=> 'fixed' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Heading Background Size', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_bg_size', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_bg_size, 
		'options' => array( 
			'auto' => array( 
				'label' => __('Auto', 'dental-clinic'), 
				'value'	=> 'auto' 
			), 
			'cover' => array( 
				'label' => __('Cover', 'dental-clinic'), 
				'value'	=> 'cover' 
			), 
			'contain' => array( 
				'label' => __('Contain', 'dental-clinic'), 
				'value'	=> 'contain' 
			)
		) 
	),
	array( 
		'label'	=> __('Heading Background Color Overlay', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_bg_color', 
		'type'	=> 'rgba', 
		'hide'	=> 'false', 
		'std'	=> $cmsms_global_heading_bg_color 
	), 
	array( 
		'label'	=> __('Heading Height', 'dental-clinic'), 
		'desc'	=> __('pixels', 'dental-clinic'), 
		'id'	=> 'cmsms_heading_height', 
		'type'	=> 'number', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_height, 
		'min' 	=> '0', 
		'max' 	=> '', 
		'step' 	=> '' 
	), 
	array( 
		'label'	=> __('Breadcrumbs', 'dental-clinic'), 
		'desc'	=> __('Show', 'dental-clinic'), 
		'id'	=> 'cmsms_breadcrumbs', 
		'type'	=> 'checkbox', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_breadcrumbs 
	), 
	array( 
		'id'	=> 'cmsms_heading', 
		'type'	=> 'tab_finish' 
	) 
);


$custom_meta_fields = $custom_general_meta_fields;

