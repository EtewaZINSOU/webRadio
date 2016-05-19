<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Post Options Functions
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


$cmsms_global_blog_post_layout = (isset($cmsms_option[CMSMS_SHORTNAME . '_blog_post_layout']) && $cmsms_option[CMSMS_SHORTNAME . '_blog_post_layout'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_blog_post_layout'] : 'r_sidebar';

$cmsms_global_bottom_sidebar = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar']) && $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';

$cmsms_global_bottom_sidebar_layout = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar_layout'])) ? $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar_layout'] : '14141414';

$cmsms_global_blog_post_title = (isset($cmsms_option[CMSMS_SHORTNAME . '_blog_post_title']) && $cmsms_option[CMSMS_SHORTNAME . '_blog_post_title'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_blog_post_title'] == 1) ? 'true' : 'false') : 'true';

$cmsms_global_blog_post_share_box = (isset($cmsms_option[CMSMS_SHORTNAME . '_blog_post_share_box']) && $cmsms_option[CMSMS_SHORTNAME . '_blog_post_share_box'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_blog_post_share_box'] == 1) ? 'true' : 'false') : 'true';

$cmsms_global_blog_post_author_box = (isset($cmsms_option[CMSMS_SHORTNAME . '_blog_post_author_box']) && $cmsms_option[CMSMS_SHORTNAME . '_blog_post_author_box'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_blog_post_author_box'] == 1) ? 'true' : 'false') : 'true';

$cmsms_global_bg = (isset($cmsms_option[CMSMS_SHORTNAME . '_theme_layout']) && $cmsms_option[CMSMS_SHORTNAME . '_theme_layout'] === 'boxed') ? true : false;

$cmsms_global_blog_more_posts_box = (isset($cmsms_option[CMSMS_SHORTNAME . '_blog_more_posts_box'])) ? $cmsms_option[CMSMS_SHORTNAME . '_blog_more_posts_box'] : 'related';

$cmsms_option_name = 'cmsms_post_';

$tabs_array = array();


$tabs_array['cmsms_post'] = array( 
	'label' => esc_html__('Post', 'dental-clinic'), 
	'value'	=> 'cmsms_post' 
);


$tabs_array['cmsms_layout'] = array( 
	'label' => esc_html__('Layout', 'dental-clinic'), 
	'value'	=> 'cmsms_layout' 
);


if ($cmsms_global_bg) {
	$tabs_array['cmsms_bg'] = array( 
		'label' => esc_html__('Background', 'dental-clinic'), 
		'value'	=> 'cmsms_bg' 
	);
}


$tabs_array['cmsms_heading'] = array( 
	'label' => esc_html__('Heading', 'dental-clinic'), 
	'value'	=> 'cmsms_heading' 
);


$custom_post_meta_fields = array( 
	array( 
		'id'	=> 'cmsms_post_aside', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> __('Aside Text', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'aside_text', 
		'type'	=> 'textarea', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'id'	=> 'cmsms_post_aside', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsms_post_status', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> __('Status Text', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'status_text', 
		'type'	=> 'textarea', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'id'	=> 'cmsms_post_status', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsms_post_chat', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> __('Chat Text', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'chat_text', 
		'type'	=> 'textarea', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'id'	=> 'cmsms_post_chat', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsms_post_quote', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> __('Quote Text', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'quote_text', 
		'type'	=> 'textarea', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Quote Author', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'quote_author', 
		'type'	=> 'text', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'id'	=> 'cmsms_post_quote', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsms_post_link', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> __('Link Text', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'link_text', 
		'type'	=> 'text', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Link Address', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'link_address', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'id'	=> 'cmsms_post_link', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsms_post_image', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> __('Post Image', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'image_link', 
		'type'	=> 'image', 
		'hide'	=> '', 
		'cancel' => 'true', 
		'std'	=> '', 
		'frame' => 'select', 
		'multiple' => false 
	), 
	array( 
		'id'	=> 'cmsms_post_image', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsms_post_gallery', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> __('Post Gallery', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'images', 
		'type'	=> 'images_list', 
		'hide'	=> '', 
		'std'	=> '', 
		'frame' => 'post', 
		'multiple' => true 
	), 
	array( 
		'id'	=> 'cmsms_post_gallery', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsms_post_video', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> __('Video Type', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'video_type', 
		'type'	=> 'radio', 
		'hide'	=> '', 
		'std'	=> 'embedded', 
		'options' => array( 
			'embedded' => array( 
				'label' => __('Embedded (YouTube, Vimeo)', 'dental-clinic'), 
				'value'	=> 'embedded' 
			), 
			'selfhosted' => array( 
				'label' => __('Self-Hosted', 'dental-clinic'), 
				'value'	=> 'selfhosted' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Embedded Video Link', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'video_link', 
		'type'	=> 'text_long', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Self-Hosted Video Links', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'video_links', 
		'type'	=> 'repeatable', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'id'	=> 'cmsms_post_video', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsms_post_audio', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> __('Audio Links', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'audio_links', 
		'type'	=> 'repeatable', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'id'	=> 'cmsms_post_audio', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsms_post_format', 
		'type'	=> 'content_start', 
		'box'	=> '' 
	), 
	array( 
		'id'	=> 'cmsms_post_format', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> $cmsms_option_name . 'tabs', 
		'type'	=> 'tabs', 
		'std'	=> 'cmsms_post', 
		'options' => $tabs_array 
	), 
	array( 
		'id'	=> 'cmsms_post', 
		'type'	=> 'tab_start', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> __('Post Title', 'dental-clinic'), 
		'desc'	=> __('Show', 'dental-clinic'), 
		'id'	=> $cmsms_option_name . 'title', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_blog_post_title 
	), 
	array( 
		'label'	=> __("'Read More' Buttons Text", 'dental-clinic'), 
		'desc'	=> __("Enter the 'Read More' button text that should be used in you blog shortcode", 'dental-clinic'), 
		'id'	=> $cmsms_option_name . 'read_more', 
		'type'	=> 'text', 
		'hide'	=> '', 
		'std'	=> __('Read More', 'dental-clinic') 
	), 
	array( 
		'label'	=> __('Sharing Box', 'dental-clinic'), 
		'desc'	=> __('Show', 'dental-clinic'), 
		'id'	=> $cmsms_option_name . 'sharing_box', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_blog_post_share_box 
	), 
	array( 
		'label'	=> __('About Author Box', 'dental-clinic'), 
		'desc'	=> __('Show', 'dental-clinic'), 
		'id'	=> $cmsms_option_name . 'author_box', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_blog_post_author_box 
	), 
	array( 
		'label'	=> __('More Posts Box', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'more_posts', 
		'type'	=> 'select', 
		'hide'	=> '', 
		'class'	=> 'cmsms_tr_highlight cmsms_tr_bdb', 
		'std'	=> $cmsms_global_blog_more_posts_box, 
		'options' => array( 
			'related' => array( 
				'label' => __('Show Related Posts Box', 'dental-clinic'), 
				'value'	=> 'related' 
			), 
			'popular' => array( 
				'label' => __('Show Popular Posts Box', 'dental-clinic'), 
				'value'	=> 'popular' 
			), 
			'recent' => array( 
				'label' => __('Show Recent Posts Box', 'dental-clinic'), 
				'value'	=> 'recent' 
			) 
		) 
	), 
	array( 
		'id'	=> 'cmsms_post', 
		'type'	=> 'tab_finish' 
	), 
	array( 
		'id'	=> 'cmsms_layout', 
		'type'	=> 'tab_start', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Page Color Scheme', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_page_scheme', 
		'type'	=> 'select_scheme', 
		'hide'	=> 'false', 
		'std'	=> 'default' 
	), 
	array( 
		'label'	=> __('Page Layout', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_layout', 
		'type'	=> 'radio_img', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_blog_post_layout, 
		'options' => array( 
			'r_sidebar' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg', 
				'label' => __('Right Sidebar', 'dental-clinic'), 
				'value'	=> 'r_sidebar' 
			), 
			'l_sidebar' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg', 
				'label' => __('Left Sidebar', 'dental-clinic'), 
				'value'	=> 'l_sidebar' 
			), 
			'fullwidth' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg', 
				'label' => __('Full Width', 'dental-clinic'), 
				'value'	=> 'fullwidth' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Choose Right\Left Sidebar', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_sidebar_id', 
		'type'	=> 'select_sidebar', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Bottom Sidebar', 'dental-clinic'), 
		'desc'	=> __('Show', 'dental-clinic'), 
		'id'	=> 'cmsms_bottom_sidebar', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_bottom_sidebar 
	), 
	array( 
		'label'	=> __('Choose Bottom Sidebar', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bottom_sidebar_id', 
		'type'	=> 'select_sidebar', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Choose Bottom Sidebar Layout', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bottom_sidebar_layout', 
		'type'	=> 'select', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bottom_sidebar_layout, 
		'options' => array( 
			'11' => array( 
				'label' => '1/1',
				'value'	=> '11' 
			), 
			'1212' => array( 
				'label' => '1/2 + 1/2',
				'value'	=> '1212' 
			), 
			'1323' => array( 
				'label' => '1/3 + 2/3',
				'value'	=> '1323' 
			), 
			'2313' => array( 
				'label' => '2/3 + 1/3',
				'value'	=> '2313' 
			), 
			'1434' => array( 
				'label' => '1/4 + 3/4',
				'value'	=> '1434' 
			), 
			'3414' => array( 
				'label' => '3/4 + 1/4',
				'value'	=> '3414' 
			), 
			'131313' => array( 
				'label' => '1/3 + 1/3 + 1/3',
				'value'	=> '131313' 
			), 
			'121414' => array( 
				'label' => '1/2 + 1/4 + 1/4',
				'value'	=> '121414' 
			), 
			'141214' => array( 
				'label' => '1/4 + 1/2 + 1/4',
				'value'	=> '141214' 
			), 
			'141412' => array( 
				'label' => '1/4 + 1/4 + 1/2',
				'value'	=> '141412' 
			), 
			'14141414' => array( 
				'label' => '1/4 + 1/4 + 1/4 + 1/4',
				'value'	=> '14141414' 
			) 
		) 
	), 
	array( 
		'id'	=> 'cmsms_layout', 
		'type'	=> 'tab_finish' 
	) 
);

