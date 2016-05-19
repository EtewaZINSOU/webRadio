<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Project Options Functions
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


$cmsms_global_bottom_sidebar = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar']) && $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';

$cmsms_global_bottom_sidebar_layout = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar_layout'])) ? $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar_layout'] : '14141414';

$cmsms_global_portfolio_project_title = (isset($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_title']) && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_title'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_title'] == 1) ? 'true' : 'false') : 'true';

$cmsms_global_portfolio_project_details_title = (isset($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_details_title']) && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_details_title'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_details_title'] : __('Project details', 'dental-clinic');

$cmsms_global_portfolio_project_share_box = (isset($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_share_box']) && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_share_box'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_share_box'] == 1) ? 'true' : 'false') : 'true';

$cmsms_global_portfolio_project_author_box = (isset($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_author_box']) && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_author_box'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_author_box'] == 1) ? 'true' : 'false') : 'true';

$cmsms_global_bg = (isset($cmsms_option[CMSMS_SHORTNAME . '_theme_layout']) && $cmsms_option[CMSMS_SHORTNAME . '_theme_layout'] === 'boxed') ? true : false;

$cmsms_global_portfolio_more_projects_box = (isset($cmsms_option[CMSMS_SHORTNAME . '_portfolio_more_projects_box'])) ? $cmsms_option[CMSMS_SHORTNAME . '_portfolio_more_projects_box'] : 'related';


$cmsms_option_name = 'cmsms_project_';


$tabs_array = array();


$tabs_array['cmsms_project'] = array( 
	'label' => esc_html__('Project', 'dental-clinic'), 
	'value'	=> 'cmsms_project' 
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


$custom_project_meta_fields = array( 
	array( 
		'id'	=> 'cmsms_project_images', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> __('Project Images', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'images', 
		'type'	=> 'images_list', 
		'hide'	=> '', 
		'std'	=> '', 
		'frame' => 'post', 
		'multiple' => true 
	), 
	array( 
		'label'	=> __('Number of Columns', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'columns', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> 'three', 
		'options' => array( 
			'three' => array( 
				'label' => __('Three', 'dental-clinic'), 
				'value'	=> 'three' 
			), 
			'two' => array( 
				'label' => __('Two', 'dental-clinic'), 
				'value'	=> 'two' 
			), 
			'one' => array( 
				'label' => __('One', 'dental-clinic'), 
				'value'	=> 'one' 
			) 
		) 
	),
	array( 
		'id'	=> 'cmsms_project_images', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsms_project_video', 
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
		'id'	=> 'cmsms_project_video', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> $cmsms_option_name . 'tabs', 
		'type'	=> 'tabs', 
		'std'	=> 'cmsms_project', 
		'options' => $tabs_array 
	), 
	array( 
		'id'	=> 'cmsms_project', 
		'type'	=> 'tab_start', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> __('Project Title', 'dental-clinic'), 
		'desc'	=> __('Show', 'dental-clinic'), 
		'id'	=> $cmsms_option_name . 'title', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_portfolio_project_title 
	),  
	array( 
		'label'	=> __('Project Size', 'dental-clinic'), 
		'desc'	=> __('Recomended Featured Image dimensions', 'dental-clinic') . ' - ', 
		'id'	=> $cmsms_option_name . 'size', 
		'type'	=> 'radio_img_pj', 
		'hide'	=> '', 
		'std'	=> 'one_x_one', 
		'options' => array( 
			'one_x_one' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/one_x_one.jpg', 
				'size' => '580 x 580', 
				'label' => '1 x 1', 
				'value'	=> 'one_x_one' 
			), 
			'one_x_two' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/one_x_two.jpg', 
				'size' => '580 x 1160', 
				'label' => '1 x 2', 
				'value'	=> 'one_x_two' 
			), 
			'one_x_three' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/one_x_three.jpg', 
				'size' => '580 x 1740', 
				'label' => '1 x 3', 
				'value'	=> 'one_x_three' 
			), 
			'two_x_one' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/two_x_one.jpg', 
				'size' => '580 x 290', 
				'label' => '2 x 1', 
				'value'	=> 'two_x_one' 
			), 
			'two_x_two' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/two_x_two.jpg', 
				'size' => '580 x 580', 
				'label' => '2 x 2', 
				'value'	=> 'two_x_two' 
			), 
			'two_x_three' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/two_x_three.jpg', 
				'size' => '580 x 870', 
				'label' => '2 x 3', 
				'value'	=> 'two_x_three' 
			), 
			'three_x_one' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/three_x_one.jpg', 
				'size' => '870 x 290', 
				'label' => '3 x 1', 
				'value'	=> 'three_x_one' 
			), 
			'three_x_two' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/three_x_two.jpg', 
				'size' => '870 x 580', 
				'label' => '3 x 2', 
				'value'	=> 'three_x_two' 
			), 
			'three_x_three' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/three_x_three.jpg', 
				'size' => '870 x 870', 
				'label' => '3 x 3', 
				'value'	=> 'three_x_three' 
			), 
			'four_x_four' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/four_x_four.jpg', 
				'size' => '1160 x 1160', 
				'label' => '4 x 4', 
				'value'	=> 'four_x_four' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Project Details Title', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'details_title', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_portfolio_project_details_title 
	), 
	array( 
		'label'	=> __('Project Info', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'features', 
		'type'	=> 'repeatable_multiple', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __("Project Link Text", 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'link_text', 
		'type'	=> 'text', 
		'hide'	=> '', 
		'std'	=> __('View Project', 'dental-clinic') 
	), 
	array( 
		'label'	=> __("Project Link URL", 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'link_url', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> '', 
		'desc'	=> __('Redirect to project link URL instead of opening project page', 'dental-clinic'), 
		'id'	=> $cmsms_option_name . 'link_redirect', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> __("Project Link Target", 'dental-clinic'), 
		'desc'	=> __('Open link in a new tab', 'dental-clinic'), 
		'id'	=> $cmsms_option_name . 'link_target', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> __('Project Features 1 Title', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'features_one_title', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Project Features 1', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'features_one', 
		'type'	=> 'repeatable_multiple', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Project Features 2 Title', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'features_two_title', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Project Features 2', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'features_two', 
		'type'	=> 'repeatable_multiple', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Project Features 3 Title', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'features_three_title', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Project Features 3', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'features_three', 
		'type'	=> 'repeatable_multiple', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Sharing Box', 'dental-clinic'), 
		'desc'	=> __('Show', 'dental-clinic'), 
		'id'	=> $cmsms_option_name . 'sharing_box', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_portfolio_project_share_box 
	), 
	array( 
		'label'	=> __('About Author Box', 'dental-clinic'), 
		'desc'	=> __('Show', 'dental-clinic'), 
		'id'	=> $cmsms_option_name . 'author_box', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_portfolio_project_author_box 
	), 
	array( 
		'label'	=> __('More Projects Box', 'dental-clinic'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'more_posts', 
		'type'	=> 'select', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_portfolio_more_projects_box, 
		'options' => array( 
			'related' => array( 
				'label' => __('Show Related Projects', 'dental-clinic'), 
				'value'	=> 'related' 
			), 
			'popular' => array( 
				'label' => __('Show Popular Projects', 'dental-clinic'), 
				'value'	=> 'popular' 
			), 
			'recent' => array( 
				'label' => __('Show Recent Projects', 'dental-clinic'), 
				'value'	=> 'recent' 
			), 
			'hide' => array( 
				'label' => __('Hide More Projects Box', 'dental-clinic'), 
				'value'	=> 'hide' 
			) 
		) 
	), 
	array( 
		'id'	=> 'cmsms_project', 
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

