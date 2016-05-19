<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Posts Slider Gallery Post Format Template
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
$more = in_array('more', $cmsms_metadata) ? true : false;


$cmsms_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_post_images', true))));


?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_slider_post_cont">
	<?php 
		if (!post_password_required()) {
			echo '<div class="thumb_wrap">';
				
				if (sizeof($cmsms_post_images) >= 1) {
					cmsms_thumb(get_the_ID(), 'square-thumb', true, false, true, true, true, true, $cmsms_post_images[0]);
				} elseif (has_post_thumbnail()) {
					cmsms_thumb(get_the_ID(), 'square-thumb', true, false, true, false, true, true, false);
				}
				
			echo '</div>';
		}
		
		
		echo '<div class="cmsms_slider_post_cont_wrap">';
			
			cmsms_slider_post_heading(get_the_ID(), 'post', 'h4');
			
			
			if ($date || $author || $categories) {
				echo '<div class="cmsms_post_cont_info entry-meta">';
					
					$date ? cmsms_slider_post_date('post') : '';
					
					$author ? cmsms_slider_post_author('post') : '';
					
					$categories ? cmsms_slider_post_category('post') : '';
					
				echo '</div>';
			}
			
			
			$excerpt ? cmsms_slider_post_exc_cont('post') : '';
			
			
			if ($more || $likes || $comments) {
				echo '<footer class="cmsms_slider_post_footer entry-meta">';
					
					if ($likes || $comments) {
						echo '<div class="cmsms_slider_post_meta_info">';
							
							$comments ? cmsms_slider_post_comments('post') : '';
							
							$likes ? cmsms_slider_post_like('post') : '';
							
						echo '</div>';
					}
					
					
					$more ? cmsms_slider_post_more(get_the_ID()) : '';
					
				echo '</footer>';
			}
			
		echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

