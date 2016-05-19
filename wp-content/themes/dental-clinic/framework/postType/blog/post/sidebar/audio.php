<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Blog Post with Sidebar Audio Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


$cmsms_post_title = get_post_meta(get_the_ID(), 'cmsms_post_title', true);

$cmsms_post_audio_links = get_post_meta(get_the_ID(), 'cmsms_post_audio_links', true);

?>

<!--_________________________ Start Audio Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_post_cont">
	<?php 
		if ($cmsms_post_title == 'true') {
			echo '<span class="cmsms_post_format_img cmsms_theme_icon_audio"></span>' . 
			'<header class="cmsms_post_header entry-header">' . 
				cmsms_post_title_nolink(get_the_ID(), 'h2', false) . 
			'</header>';
		}
		
		
		if (!post_password_required() && !empty($cmsms_post_audio_links) && sizeof($cmsms_post_audio_links) > 0) {
			$attrs = array(
				'preload' => 'none'
			);
			
			
			foreach ($cmsms_post_audio_links as $cmsms_post_audio_link_url) {
				$attrs[substr(strrchr($cmsms_post_audio_link_url, '.'), 1)] = $cmsms_post_audio_link_url;
			}
			
			
			echo '<div class="cmsms_audio">' . 
				wp_audio_shortcode($attrs) . 
			'</div>';
		}
		
		
		if ( 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_date'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_author'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_cat'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_tag'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_like'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_comment'] 
		) {
			echo '<div class="cmsms_post_cont_info entry-meta' . ((get_the_content() == '') ? ' no_bdb' : '') . '">';
				
				if ( 
					$cmsms_option[CMSMS_SHORTNAME . '_blog_post_like'] || 
					$cmsms_option[CMSMS_SHORTNAME . '_blog_post_comment'] 
				) {
					echo '<div class="cmsms_post_meta_info">';
						
						cmsms_post_comments('post');
						
						cmsms_post_like('post');
						
					echo '</div>';
				}
				
				
				cmsms_post_date('post');
				
				cmsms_post_author('post');
				
				cmsms_post_category('post');
				
				cmsms_post_tags('post');
				
			echo '</div>';
		}
		
		
		if (get_the_content() != '') {
			echo '<div class="cmsms_post_content entry-content">';
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'dental-clinic') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => ' [ ', 
					'link_after' => ' ] ' 
				));
				
			echo '<div class="cl"></div>' . 
			'</div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Audio Article _________________________ -->

