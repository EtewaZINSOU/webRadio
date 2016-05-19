<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Posts Slider Chat Post Format Template
 * Created by CMSMasters
 * 
 */


global $cmsms_post_metadata;


$cmsms_metadata = explode(',', $cmsms_post_metadata);

$excerpt = in_array('excerpt', $cmsms_metadata) ? true : false;
$date = in_array('date', $cmsms_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsms_metadata))) ? true : false;
$author = in_array('author', $cmsms_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsms_metadata))) ? true : false;
$likes = in_array('likes', $cmsms_metadata) ? true : false;

?>

<!--_________________________ Start Chat Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_post_cont">
	<?php
		cmsms_post_heading(get_the_ID(), 'h4');
		
		
		if ($date || $author || $categories) {
			echo '<div class="cmsms_post_cont_info entry-meta">';
				
				$date ? cmsms_slider_post_date('post') : '';
				
				$author ? cmsms_slider_post_author('post') : '';
				
				$categories ? cmsms_slider_post_category('post') : '';
				
			echo '</div>';
		}
		
		
		$excerpt ? cmsms_slider_post_format_chat() : '';
		
		
		if ($likes || $comments) {
			echo '<footer class="cmsms_slider_post_footer entry-meta">' . 
				'<div class="cmsms_slider_post_meta_info">';
					
					$comments ? cmsms_slider_post_comments('post') : '';
					
					$likes ? cmsms_slider_post_like('post') : '';
					
			echo '</div>' . 
			'</footer>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

