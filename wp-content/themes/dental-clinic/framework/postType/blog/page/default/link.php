<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Blog Page Default Link Post Format Template
 * Created by CMSMasters
 * 
 */


global $cmsms_metadata;


$cmsms_post_metadata = explode(',', $cmsms_metadata);


$date = (in_array('date', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsms_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$author = (in_array('author', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsms_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$likes = (in_array('likes', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$tags = (get_the_tags() && (in_array('tags', $cmsms_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$more = (in_array('more', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;


$cmsms_post_link_text = get_post_meta(get_the_ID(), 'cmsms_post_link_text', true);

$cmsms_post_link_address = get_post_meta(get_the_ID(), 'cmsms_post_link_address', true);


if ($cmsms_post_link_text == '') {
	$cmsms_post_link_text = esc_html__('Enter link text', 'dental-clinic');
}


if ($cmsms_post_link_address == '') {
	$cmsms_post_link_address = '#';
}

?>

<!--_________________________ Start Link Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_default_type'); ?>>
	<div class="cmsms_post_cont">
	<?php 
		echo '<span class="cmsms_post_format_img ' . (is_sticky() ? 'cmsms_theme_icon_stick' : 'cmsms_theme_icon_link') . '"></span>';
		
		
		echo '<header class="cmsms_post_header entry-header">';
			
			if (!post_password_required()) {
				echo '<h2 class="cmsms_post_title entry-title">' . 
					'<a href="' . esc_url($cmsms_post_link_address) . '" target="_blank">' . esc_html($cmsms_post_link_text) . '</a>' . 
				'</h2>' . 
				'<h6 class="cmsms_post_subtitle">- ' . $cmsms_post_link_address . ' -</h6>';
			} else {
				echo '<h2 class="cmsms_post_title entry-title">' . esc_html($cmsms_post_link_text) . '</h2>';
			}
			
		echo '</header>';
		
		
		if ($date || $author || $categories || $tags || $likes || $comments) {
			echo '<div class="cmsms_post_cont_info entry-meta' . ((!$more && theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
				
				if ($comments || $likes) {
					echo '<div class="cmsms_post_meta_info">';
						
						$comments ? cmsms_post_comments('page') : '';
						
						$likes ? cmsms_post_like('page') : '';
						
					echo '</div>';
				}
				
				
				$date ? cmsms_post_date('page', 'default') : '';
				
				$author ? cmsms_post_author('page') : '';
				
				$categories ? cmsms_post_category('page') : '';
				
				$tags ? cmsms_post_tags('page') : '';
				
			echo '</div>';
		}
		
		
		cmsms_post_exc_cont(); 
		
		
		if ($more) {
			echo '<footer class="cmsms_post_footer entry-meta">';
				
				$more ? cmsms_post_more(get_the_ID()) : '';
				
			echo '</footer>';
		} elseif (!$more && theme_excerpt(20, false) != '') {
			echo '<div class="pb_10"></div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Link Article _________________________ -->

