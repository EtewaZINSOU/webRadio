<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Blog Page Masonry Standard Post Format Template
 * Created by CMSMasters
 * 
 */


global $cmsms_metadata;


$cmsms_post_metadata = explode(',', $cmsms_metadata);


$date = (in_array('date', $cmsms_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsms_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsms_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsms_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsms_post_metadata) || is_home()) ? true : false;
$tags = (get_the_tags() && (in_array('tags', $cmsms_post_metadata) || is_home())) ? true : false;
$more = (in_array('more', $cmsms_post_metadata) || is_home()) ? true : false;


$post_sort_categs = get_the_terms(0, 'category');

if ($post_sort_categs != '') {
	$post_categs = '';
	
	foreach ($post_sort_categs as $post_sort_categ) {
		$post_categs .= ' ' . $post_sort_categ->slug;
	}
	
	$post_categs = ltrim($post_categs, ' ');
}

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_masonry_type'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<div class="cmsms_post_cont">
	<?php
		if (!post_password_required() && has_post_thumbnail()) {
			cmsms_thumb(get_the_ID(), 'blog-masonry-thumb', true, false, true, false, true, true, false);
		}
		
		
		echo '<span class="cmsms_post_format_img cmsms_theme_icon_std"></span>';
		
		
		cmsms_post_heading(get_the_ID(), 'h4');
		
		
		if ($author || $categories || $tags) {
			echo '<div class="cmsms_post_cont_info entry-meta' . ((!$more && theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
				
				$author ? cmsms_post_author('page') : '';
				
				$categories ? cmsms_post_category('page') : '';
				
				$tags ? cmsms_post_tags('page') : '';
				
			echo '</div>';
		}
		
		
		cmsms_post_exc_cont();
		
		
		if ($more || $date || $likes || $comments) {
			echo '<footer class="cmsms_post_footer entry-meta">';
				
				$more ? cmsms_post_more(get_the_ID()) : '';
				
				echo '<div class="cmsms_post_footer_info' . ((!$more) ? ' no_mt' : '') . '">';
					
					
					if ($comments || $likes) {
						echo '<div class="cmsms_post_meta_info">';
							
							$comments ? cmsms_post_comments('page') : '';
							
							$likes ? cmsms_post_like('page') : '';
							
						echo '</div>';
					}
					
					
					$date ? cmsms_post_date('page', 'default') : '';
					
				echo '</div>' . 
			'</footer>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

