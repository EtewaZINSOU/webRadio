<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Blog Archives Page Template
 * Created by CMSMasters
 * 
 */


get_header();


list($cmsms_layout) = cmsms_theme_page_layout_scheme();


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsms_layout == 'r_sidebar') {
	echo '<div class="content cmsms_archive entry" role="main">' . "\n\t";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo '<div class="content cmsms_archive entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content cmsms_archive entry" role="main">' . "\n\t";
}


echo '<div class="blog portfolio cmsms_profile vertical">' . "\n";


if (!have_posts()) : 
	echo '<h2>' . esc_html__('No posts found', 'dental-clinic') . '</h2>';
else : 
	while (have_posts()) : the_post();
		if (get_post_type() == 'project') {
			get_template_part('framework/postType/portfolio/page/grid/standard');
		} elseif (get_post_type() == 'profile') {
			get_template_part('framework/postType/profile/page/vertical');
		} elseif (get_post_type() == 'post') {
			if (get_post_format() != '') {
				get_template_part('framework/postType/blog/page/default/' . get_post_format());
			} else {
				get_template_part('framework/postType/blog/page/default/standard');
			}
		} else {
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_default_type'); ?>>
				<div class="cmsms_post_cont">
				<?php
					if (!post_password_required() && has_post_thumbnail()) {
						cmsms_thumb(get_the_ID(), 'post-thumbnail', true, false, true, false, true, true, false);
					}
					
					
					echo '<span class="cmsms_post_format_img ' . (is_sticky() ? 'cmsms_theme_icon_stick' : 'cmsms_theme_icon_std') . '"></span>';
					
					
					cmsms_post_heading(get_the_ID(), 'h2');
					
					
					echo '<div class="cmsms_post_cont_info entry-meta">' . 
						'<div class="cmsms_post_meta_info">';
							
							cmsms_post_comments('page');
							
						echo '</div>';
						
						
						cmsms_post_date('page', 'default');
						
						cmsms_post_author('page');
						
					echo '</div>';
					
					
					cmsms_post_exc_cont();
					
					
					echo '<footer class="cmsms_post_footer entry-meta">';
						
						cmsms_post_more(get_the_ID());
						
					echo '</footer>';
				?>
				</div>
			</article>
		<?php
		}
	endwhile;
	
	
	echo pagination();
endif;


echo '</div>' . "\n" . 
'</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsms_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar fl" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

