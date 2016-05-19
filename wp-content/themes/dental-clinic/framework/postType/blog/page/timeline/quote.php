<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Blog Page Timeline Quote Post Format Template
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


$cmsms_post_quote_text = get_post_meta(get_the_ID(), 'cmsms_post_quote_text', true);

$cmsms_post_quote_author = get_post_meta(get_the_ID(), 'cmsms_post_quote_author', true);

?>

<!--_________________________ Start Quote Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_timeline_type'); ?>>
	<div class="cmsms_post_info entry-meta">
		<?php $date ? cmsms_post_date('page', 'timeline') : ''; ?>
	</div>
	<div class="cmsms_post_cont">
	<?php 
		if ($author || $categories || $tags) {
			echo '<div class="cmsms_post_cont_info entry-meta">';
				
				$author ? cmsms_post_author('page') : '';
				
				$categories ? cmsms_post_category('page') : '';
				
				$tags ? cmsms_post_tags('page') : '';
				
				
				echo '<div class="cl"></div>' . 
				'<span class="cmsms_post_format_img cmsms_theme_icon_comment"></span>' . 
			'</div>';
		} else {
			echo '<span class="cmsms_post_format_img cmsms_theme_icon_comment"></span>';
		}
		
		
		echo '<div class="cmsms_post_content">' . 
				'<div class="cmsms_post_content_aligner"></div>';
		
		
		if (!post_password_required()) {
			echo '<blockquote class="entry-content cmsms_quote_content">';
			
				if ($cmsms_post_quote_text != '') {
					echo '<p>' . str_replace("\n", '<br />', $cmsms_post_quote_text) . '</p>';
				} else {
					echo '<p>' . theme_excerpt(55, false) . '</p>';
				}
				
				
				if ($cmsms_post_quote_author != '') {
					echo '<footer class="cmsms_quote_info">';
						
						if ($cmsms_post_quote_author != '' && !post_password_required()) {
							echo '<span class="cmsms_quote_author">' . esc_html($cmsms_post_quote_author) . '</span>' . "\n";
						}
						
					echo '</footer>';
				}
				
			echo '</blockquote>';
		} else {
			echo '<p>' . esc_html__('There is no excerpt because this is a protected post.', 'dental-clinic') . '</p>';
		}
		
		
		echo '<h1 class="entry-title dn">' . cmsms_title(get_the_ID(), false) . '</h1>' . 
		'</div>';
		
		
		if ($likes || $comments) {
			echo '<footer class="cmsms_post_footer entry-meta">' . 
				'<div class="cmsms_post_footer_info">';
				
				if ($comments || $likes) {
					echo '<div class="cmsms_post_meta_info">';
						
						$comments ? cmsms_post_comments('page') : '';
						
						$likes ? cmsms_post_like('page') : '';
						
					echo '</div>';
				}
				
			echo '</div>' . 
			'</footer>';
		}
	?>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Quote Article _________________________ -->

