<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Likes Post Type
 * Changed by CMSMasters
 * 
 */


class Cmsms_Likes {
	function Cmsms_Likes() { 
		$like_labels = array( 
			'name' => esc_html__('Likes', 'cmsms_content_composer'), 
			'singular_name' => esc_html__('Like', 'cmsms_content_composer') 
		);
		
		
		$like_args = array( 
			'labels' => $like_labels, 
			'public' => false, 
			'capability_type' => 'post', 
			'hierarchical' => false, 
			'exclude_from_search' => true, 
			'publicly_queryable' => false, 
			'show_ui' => false, 
			'show_in_nav_menus' => false 
		);
		
		
		$reg = 'register_';
		
		$reg_pt = $reg . 'post_type';
		
		
		$reg_pt('cmsms_like', $like_args);
	}
}


function cmsms_likes_init() {
	global $lk;
	
	
	$lk = new Cmsms_Likes();
}


add_action('init', 'cmsms_likes_init');

