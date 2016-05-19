<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Template Functions
 * Created by CMSMasters
 * 
 */


/* Get Logo Function */
function cmsms_logo() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$header_mid_height = (($cmsms_option[CMSMS_SHORTNAME . '_header_mid_height'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_header_mid_height'] : '95');
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_logo_type'] == 'text') {
		if ($cmsms_option[CMSMS_SHORTNAME . '_logo_title'] != '') {
			$blog_title = $cmsms_option[CMSMS_SHORTNAME . '_logo_title'];
		} else {
			$blog_title = (get_bloginfo('name')) ? get_bloginfo('name') : CMSMS_FULLNAME;
		}
		
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_logo_subtitle'] != '') {
			$blog_descr = $cmsms_option[CMSMS_SHORTNAME . '_logo_subtitle'];
		} else {
			$blog_descr = (get_bloginfo('description')) ? get_bloginfo('description') : esc_html__('Default Logo Subtitle', 'dental-clinic');
		}
		
		
		echo '<a href="' . esc_url(home_url('/')) . '/" title="' . esc_attr($blog_title) . '" class="logo">' . "\n\t" . 
			'<span class="logo_aligner"></span>' . 
			'<span class="logo_text_wrap">' . 
				'<span class="title">' . esc_html($blog_title) . '</span>' . "\n" . 
				($cmsms_option[CMSMS_SHORTNAME . '_logo_subtitle'] ? '<span class="title_text">' . esc_html($blog_descr) . '</span>' : '') . 
			'</span>' . 
		'</a>';
	} else {
		if ($cmsms_option[CMSMS_SHORTNAME . '_logo_url'] == '') {
			echo '<a href="' . esc_url(home_url('/')) . '/" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
				'<img src="' . esc_url(get_template_directory_uri()) . '/img/logo.png" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\n\t" . 
				'<img class="logo_retina" src="' . esc_url(get_template_directory_uri()) . '/img/logo_retina.png" alt="' . esc_attr(get_bloginfo('name')) . '" width="220" height="30" />' . "\r" . 
			'</a>' . "\n";
			
			
			$logo_def_style_width = (int) ($header_mid_height * (220 / 30));
			
			
			echo "
<style type=\"text/css\">
	.header_mid .header_mid_inner .logo_wrap {
		width : {$logo_def_style_width}px;
	}
</style>
";
			
			
			echo "
<style type=\"text/css\">
	.header_mid_inner .logo .logo_retina {
		width : 220px;
	}
</style>
";
		} else {
			$logo_img = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_logo_url']);
			
			
			if (is_numeric($logo_img[0])) {
				$logo_img_url = wp_get_attachment_image_src((int) $logo_img[0], 'full');
			}
			
			
			$logo_img_width = ((is_numeric($logo_img[0])) ? (int) $logo_img_url[1] : '220');
			
			$logo_img_height = ((is_numeric($logo_img[0])) ? (int) $logo_img_url[2] : '30');
			
			
			if ($logo_img_height >= $header_mid_height) {
				$logo_style_width = (int) ($header_mid_height * ($logo_img_width / $logo_img_height));
			} else {
				$logo_style_width = $logo_img_width;
			}
			
			
			echo "
<style type=\"text/css\">
	.header_mid .header_mid_inner .logo_wrap {
		width : {$logo_style_width}px;
	}
</style>
";
			
			
			echo '<a href="' . esc_url(home_url('/')) . '/" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
				'<img src="' . ((is_numeric($logo_img[0])) ? esc_url($logo_img_url[0]) : esc_url($logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_logo_url_retina'] != '') {
				$logo_img_retina = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_logo_url_retina']);
			
				if (is_numeric($logo_img_retina[0])) {
					$logo_img_retina_url = wp_get_attachment_image_src((int) $logo_img_retina[0], 'full');
				}
				
				$logo_img_retina_width = ((is_numeric($logo_img_retina[0])) ? ((int) $logo_img_retina_url[1] / 2) : '220');
				
				$logo_img_retina_height = ((is_numeric($logo_img_retina[0])) ? ((int) $logo_img_retina_url[2] / 2) : '30');
				
				
				echo "
<style type=\"text/css\">
	.header_mid_inner .logo .logo_retina {
		width : {$logo_img_retina_width}px;
	}
</style>
";
				
				
				echo '<img class="logo_retina" src="' . 
				((is_numeric($logo_img_retina[0])) ? esc_url($logo_img_retina_url[0]) : esc_url($logo_img_retina[1])) . 
				'" alt="' . esc_attr(get_bloginfo('name')) . 
				'" width="' . esc_attr($logo_img_retina_width) . 
				'" height="' . esc_attr($logo_img_retina_height) . 
				'" />' . "\r";
			} else {
				echo '<img class="logo_retina" src="' . ((is_numeric($logo_img[0])) ? esc_url($logo_img_url[0]) : esc_url($logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			}
			
			
			echo '</a>' . "\n";
		}
	}
}



/* Get Footer Logo Function */
function cmsms_footer_logo() {
	$cmsms_option = cmsms_get_global_options();
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_footer_logo_url'] == '') {
		echo '<a href="' . esc_url(home_url('/')) . '/" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
			'<img src="' . esc_url(get_template_directory_uri()) . '/img/logo_footer.png" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\n\t" . 
			'<img class="footer_logo_retina" src="' . esc_url(get_template_directory_uri()) . '/img/logo_footer_retina.png" alt="' . esc_attr(get_bloginfo('name')) . '" width="220" height="30" />' . "\r" . 
		'</a>' . "\n";
		
		
		echo "
<style type=\"text/css\">
.footer_inner .logo .footer_logo_retina {
	width : 220px;
}
</style>
";
	} else {
		$footer_logo_img = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_footer_logo_url']);
		
		
		if (is_numeric($footer_logo_img[0])) {
			$footer_logo_img_url = wp_get_attachment_image_src((int) $footer_logo_img[0], 'full');
		}
		
		
		echo '<a href="' . esc_url(home_url('/')) . '/" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
			'<img src="' . ((is_numeric($footer_logo_img[0])) ? esc_url($footer_logo_img_url[0]) : esc_url($footer_logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
		
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_footer_logo_url_retina'] != '') {
			$footer_logo_img_retina = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_footer_logo_url_retina']);
		
			if (is_numeric($footer_logo_img_retina[0])) {
				$footer_logo_img_retina_url = wp_get_attachment_image_src((int) $footer_logo_img_retina[0], 'full');
			}
			
			$footer_logo_img_retina_width = ((is_numeric($footer_logo_img_retina[0])) ? ((int) $footer_logo_img_retina_url[1] / 2) : '220');
			
			$footer_logo_img_retina_height = ((is_numeric($footer_logo_img_retina[0])) ? ((int) $footer_logo_img_retina_url[2] / 2) : '30');
			
			
			echo '<img class="footer_logo_retina" src="' . 
			((is_numeric($footer_logo_img_retina[0])) ? esc_url($footer_logo_img_retina_url[0]) : esc_url($footer_logo_img_retina[1])) . 
			'" alt="' . esc_attr(get_bloginfo('name')) . 
			'" width="' . esc_attr($footer_logo_img_retina_width) . 
			'" height="' . esc_attr($footer_logo_img_retina_height) . 
			'" />' . "\r";
		} else {
			echo '<img class="footer_logo_retina" src="' . ((is_numeric($footer_logo_img[0])) ? esc_url($footer_logo_img_url[0]) : esc_url($footer_logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
		}
		
		
		echo '</a>' . "\n";
	}
}



/* Get Favicon Function */
function cmsms_favicon() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$favicon_img = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_favicon_url']);
	
	if (is_numeric($favicon_img[0])) {
		$favicon_img_url = wp_get_attachment_image_src((int) $favicon_img[0], 'full');
	}
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_favicon']) {
		if (is_numeric($favicon_img[0])) {
			echo '<link rel="shortcut icon" href="' . esc_url($favicon_img_url[0]) . '" type="image/x-icon" />';
		} else {
			echo '<link rel="shortcut icon" href="' . esc_url(get_template_directory_uri()) . '/img/favicon.ico" type="image/x-icon" />';
		}
	}
}



/* Get Page Heading Function */
function cmsms_page_heading() {
	$cmsms_option = cmsms_get_global_options();
	
	
	if (is_singular()) {
		$cmsms_page_id = get_the_ID();
	} 
	
	
	$cmsms_heading = '';
	
	if (
		is_singular() 
	) {
		$cmsms_heading = get_post_meta($cmsms_page_id, 'cmsms_heading', true);
	}
	
	
	if (
		$cmsms_heading != '' && 
		(
			is_singular() 
		)
	) {
		$cmsms_heading_block_disabled = get_post_meta($cmsms_page_id, 'cmsms_heading_block_disabled', true);
		$cmsms_header_overlaps = get_post_meta($cmsms_page_id, 'cmsms_header_overlaps', true);
		
		$cmsms_heading_height = get_post_meta($cmsms_page_id, 'cmsms_heading_height', true);
		$cmsms_heading_alignment = get_post_meta($cmsms_page_id, 'cmsms_heading_alignment', true);
		$cmsms_heading_scheme = get_post_meta($cmsms_page_id, 'cmsms_heading_scheme', true);
		$cmsms_heading_bg_color = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_color', true);
		$cmsms_heading_bg_img_enable = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_img_enable', true);
		$cmsms_heading_bg_img = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_img', true);
		$cmsms_heading_bg_rep = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_rep', true);
		$cmsms_heading_bg_att = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_att', true);
		$cmsms_heading_bg_size = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_size', true);
		
		$cmsms_heading_title = get_post_meta($cmsms_page_id, 'cmsms_heading_title', true);
		$cmsms_heading_subtitle = get_post_meta($cmsms_page_id, 'cmsms_heading_subtitle', true);
		$cmsms_heading_icon = get_post_meta($cmsms_page_id, 'cmsms_heading_icon', true);
		
		$cmsms_breadcrumbs = get_post_meta($cmsms_page_id, 'cmsms_breadcrumbs', true);
	} else {
		$cmsms_heading = 'default';
		$cmsms_heading_block_disabled = 'false';
		$cmsms_header_overlaps = $cmsms_option[CMSMS_SHORTNAME . '_header_overlaps'] ? 'true' : 'false';
		
		$cmsms_heading_height = $cmsms_option[CMSMS_SHORTNAME . '_heading_height'];
		$cmsms_heading_alignment = $cmsms_option[CMSMS_SHORTNAME . '_heading_alignment'];
		$cmsms_heading_scheme = $cmsms_option[CMSMS_SHORTNAME . '_heading_scheme'];
		$cmsms_heading_bg_color = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color'];
		$cmsms_heading_bg_img_enable = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable'] ? 'true' : 'false';
		$cmsms_heading_bg_img = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image'];
		$cmsms_heading_bg_rep = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat'];
		$cmsms_heading_bg_att = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment'];
		$cmsms_heading_bg_size = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size'];
		
		$cmsms_breadcrumbs = $cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs'] ? 'true' : 'false';
	}
	
	
	list($cmsms_layout) = cmsms_theme_page_layout_scheme();
	
	
	if (
		$cmsms_heading_block_disabled == 'true' && 
		$cmsms_layout == 'fullwidth' && 
		$cmsms_header_overlaps == 'true' 
	) {
		echo "";
	} else {
		$options_img = explode('|', $cmsms_heading_bg_img);
		
		
		if (is_numeric($options_img[0])) {
			$options_img_url = wp_get_attachment_image_src((int) $options_img[0], 'full');
		}
		
		
		echo "<style type=\"text/css\">";
		
		
		if ($cmsms_heading_bg_img_enable == 'true' && $cmsms_heading_bg_img != '') {
			echo ".headline_outer {
				background-image:url(" . ((is_numeric($options_img[0])) ? esc_url($options_img_url[0]) : esc_url($options_img[0])) . ");
				background-repeat:{$cmsms_heading_bg_rep};
				background-attachment:{$cmsms_heading_bg_att};
				background-size:{$cmsms_heading_bg_size};
			}";
		}
		
		
		echo ".headline_color {
				background-color:{$cmsms_heading_bg_color};
			}
			.headline_aligner, 
			.cmsms_breadcrumbs_aligner {
				min-height:{$cmsms_heading_height}px;
			}
			@media only screen and (max-width: 540px) {
				.cmsms_breadcrumbs_aligner {
					min-height:auto;
				}
			}
		</style>
		<div class=\"headline cmsms_color_scheme_{$cmsms_heading_scheme}\">
			<div class=\"headline_outer\">
				<div class=\"headline_color\"></div>";
		
		
		if ($cmsms_heading != 'disabled') {
			echo "<div class=\"headline_inner align_{$cmsms_heading_alignment}\">
				<div class=\"headline_aligner\"></div>" . 
				'<div class="headline_text' . (($cmsms_heading == 'custom') ? (($cmsms_heading_icon != '') ? ' headline_icon ' . $cmsms_heading_icon : '') . (($cmsms_heading_subtitle != '') ? ' headline_subtitle' : '') : '') . '">';
			
			
			if ($cmsms_heading == 'custom') {
				if ($cmsms_heading_subtitle == '') {
					echo '<h1 class="entry-title">' . (($cmsms_heading_title != '') ? esc_html($cmsms_heading_title) : esc_html(get_the_title())) . '</h1>';
				} else {
					echo '<h1 class="entry-title">' . (($cmsms_heading_title != '') ? esc_html($cmsms_heading_title) : esc_html(get_the_title())) . '</h1>' . 
						'<h4 class="entry-subtitle">' . esc_html(str_replace("\n", "<br />", $cmsms_heading_subtitle)) . '</h4>';
				}
			} elseif (is_archive() || is_search()) {
				echo '<h1 class="entry-title">';
				
				
				if (is_search()) {
					global $wp_query;
					
					
					if (!empty($wp_query->found_posts)) {
						echo esc_html(sprintf(_n('1 search result for: %2$s', '%1$d search results for: %2$s', $wp_query->found_posts, 'dental-clinic'), $wp_query->found_posts, get_search_query()));
					} else {
						echo sprintf(esc_html__('0 search results for: %s', 'dental-clinic'), get_search_query());
					}
				} elseif (is_archive()) {
					if (is_author()) {
						if (get_the_author_meta('first_name') != '' || get_the_author_meta('last_name') != '') {
							echo sprintf(esc_html__('Author: %1$s (%2$s %3$s)', 'dental-clinic'), '<span class="vcard">' . get_the_author() . '</span>', get_the_author_meta('first_name'), get_the_author_meta('last_name'));
						} else {
							echo sprintf(esc_html__('Author: %s', 'dental-clinic'), '<span class="vcard">' . get_the_author() . '</span>');
						}
					} else {
						echo esc_html(get_the_archive_title());
					}
				}
				
				
				echo '</h1>';
			} elseif ($cmsms_heading == 'default') {
				echo the_title('<h1 class="entry-title">', '</h1>', false);
			}
			
			
			echo '</div>';
			
			
			if ( 
				!is_front_page() && 
				$cmsms_breadcrumbs == 'true'
			) {
				echo '<div class="cmsms_breadcrumbs">' . 
					'<div class="cmsms_breadcrumbs_aligner"></div>' . 
					'<div class="cmsms_breadcrumbs_inner">';
				
				
				if (function_exists('yoast_breadcrumb')) {
					$yoast_enable = get_option('wpseo_internallinks');
					
					
					if ($yoast_enable['breadcrumbs-enable']) {
						yoast_breadcrumb();
					} else {
						breadcrumbs();
					}
				} else {
					breadcrumbs();
				}
				
				
				echo '</div>' . 
				'</div>';
			}
			
			
			echo "</div>";
		}
		
		
			echo "</div>
		</div>";
	}
}



/* Get Social Icons Function */
function cmsms_social_icons() {
	$cmsms_option = cmsms_get_global_options();
	
	
	echo '<div class="social_wrap">' . "\n" . 
		'<div class="social_wrap_inner">' . "\n" . 
			'<ul>' . "\n";
	
	
	foreach ($cmsms_option[CMSMS_SHORTNAME . '_social_icons'] as $cmsms_social_icons) {
		$cmsms_social_icon = explode('|', str_replace(' ', '', $cmsms_social_icons));
		
		
		echo '<li>' . "\n\t" . 
			'<a href="' . esc_url($cmsms_social_icon[1]) . '" class="' . esc_attr($cmsms_social_icon[0]) . '" title="' . esc_attr($cmsms_social_icon[2]) . '"' . (($cmsms_social_icon[3] == 'true') ? ' target="_blank"' : '') . '></a>' . "\r" . 
		'</li>' . "\n";
	}
	
	
	echo '</ul>' . "\r" . 
		'</div>' . "\r" . 
	'</div>' . "\r";
}



/* Get Posts Thumbnail Function */
function cmsms_thumb($cmsms_id, $type = 'post-thumbnail', $link = true, $group = false, $preload = true, $highImg = false, $fullwidth = true, $show = true, $attachment = false, $unique = false, $link_icon = false, $placeholder_icon = 'cmsms_theme_icon_image') {
	$args = array( 
		'class' => (($fullwidth) ? 'full-width' : ''), 
		'alt' => cmsms_title($cmsms_id, false), 
		'title' => cmsms_title($cmsms_id, false) 
	);
	
	
	$link_href = ($attachment) ? wp_get_attachment_image_src((int) $attachment, 'full') : wp_get_attachment_image_src((int) get_post_thumbnail_id($cmsms_id), 'full');
	
	
	if (!$unique) {
		$unique_id = uniqid();
	} else {
		$unique_id = $unique;
	}
	
	
	$out = '<figure class="cmsms_img_wrap">' . 
		'<a href="' . (($link) ? get_permalink() : $link_href[0]) . '"' . 
		' title="' . cmsms_title($cmsms_id, false) . '"' . 
		(($group) ? ' rel="ilightbox[' . $group . '_' . $unique_id . ']"' : '') . 
		' class="cmsms_img_link' . 
		(($preload) ? ' preloader' . (($highImg) ? ' highImg' : '') : '') . 
		($link_icon ? ' ' . $link_icon : '') . 
		'">';
	
	
	if ($attachment) {
		$out .= wp_get_attachment_image($attachment, (($type) ? $type : 'full'), false, $args);
	} elseif (has_post_thumbnail($cmsms_id)) {
		$out .= get_the_post_thumbnail($cmsms_id, (($type) ? $type : 'full'), $args);
	} else {
		$out .= '<span class="img_placeholder ' . $placeholder_icon . '"></span>';
	}
	
	
	$out .= '</a>' . 
	'</figure>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Thumbnail With Rollover Function */
function cmsms_thumb_rollover($cmsms_id, $type = 'post-thumbnail', $rollover = true, $open_link = true, $group = false, $attachment_images = false, $attachment_video_type = false, $attachment_video_link = false, $attachment_video_links = false, $highImg = false, $show = true, $link_redirect = false, $link_url = false, $placeholder_icon = 'cmsms_theme_icon_image') {
	$cmsms_title = cmsms_title($cmsms_id, false);

	$args = array( 
		'class' => 'full-width', 
		'alt' => $cmsms_title, 
		'title' => $cmsms_title 
	);
	
	$unique_id = uniqid();
	
	
	$out = '<figure class="cmsms_img_rollover_wrap preloader' . (($highImg) ? ' highImg' : '') . '">';
	
	
	if (has_post_thumbnail($cmsms_id)) {
		$out .= get_the_post_thumbnail($cmsms_id, (($type) ? $type : 'full'), $args);
		
		$cmsms_image_link = wp_get_attachment_image_src((int) get_post_thumbnail_id($cmsms_id), 'full');
	} elseif ($attachment_images && $attachment_images[0] != '' && sizeof($attachment_images) > 0) {
		$out .= wp_get_attachment_image($attachment_images[0], (($type) ? $type : 'full'), false, $args);
		
		$cmsms_image_link = wp_get_attachment_image_src((int) $attachment_images[0], 'full');
	} else {
		$out .= '<span class="img_placeholder ' . $placeholder_icon . '"></span>';
		
		$cmsms_image_link = '';
	}
	
	
	$is_video_selfhosted = false;
	
	
	if (
		$attachment_video_type == 'selfhosted' && 
		!empty($attachment_video_links) && 
		sizeof($attachment_video_links) > 0
	) {
		$is_video_selfhosted = true;
		
		
		$shv_out = 'href="' . esc_url($attachment_video_links[0]) . '"';
		
		
		$shvl_out = '';
		
		
		unset($attachment_video_links[0]);
		
		
		foreach($attachment_video_links as $attachment_video_link_url) {
			$video_format = substr(strrchr($attachment_video_link_url, '.'), 1);
			
			$shvl_out .= $video_format . ":'{$attachment_video_link_url}', ";
		}
		
		
		$shv_out .= ' data-options="' . 
			'html5video: {' . 
				substr($shvl_out, 0, -2) . 
			'}' . 
		'"';
	}
	
	
	if ($rollover) {
		$out .= '<div class="cmsms_img_rollover">';
		
		if (
			$group && 
			(
				(
					$attachment_video_type == 'embedded' && 
					$attachment_video_link != ''
				) || 
				$is_video_selfhosted || 
				$cmsms_image_link != ''
			)
		) {
			$out .= '<a ' . ($is_video_selfhosted ? $shv_out : 'href="' . ((!$attachment_video_link) ? esc_url($cmsms_image_link[0]) : embedConvert($attachment_video_link)) . '"') . ' rel="ilightbox[' . esc_attr($cmsms_id) . '_' . $unique_id . ']" title="' . esc_attr($cmsms_title) . '" class="cmsms_image_link' . (($open_link) ? '' : ' no_open_link') . '"><span class="cmsms_theme_icon_lightbox"></span></a>';
		}
		
		
		if ($open_link) {
			$out .= '<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink($cmsms_id))) . '" title="' . esc_attr($cmsms_title) . '" class="cmsms_open_link"><span class="cmsms_theme_icon_link_pj"></span></a>';
		}
		
		$out .= '</div>';
	} elseif ($open_link) {
		$out .= '<div class="cmsms_img_rollover">' . 
			'<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink($cmsms_id))) . '" title="' . esc_attr($cmsms_title) . '" class="cmsms_open_post_link"></a>' . 
		'</div>';
	}
	
	
	$out .= '</figure>';
	
	
	if ($group && $attachment_images && sizeof($attachment_images) > 1) {
		if (!has_post_thumbnail($cmsms_id)) {
			unset($attachment_images[0]);
		}
		
		$out .= '<div class="dn">';
		
		foreach ($attachment_images as $attachment_image) {
			$attachment_image_link = wp_get_attachment_image_src((int) $attachment_image, 'full');
			
			$out .= '<figure>' . 
				'<a href="' . esc_url($attachment_image_link[0]) . '" rel="ilightbox[' . esc_attr($cmsms_id) . '_' . $unique_id . ']" title="' . esc_attr($cmsms_title) . '" class="preloader highImg">' . 
					wp_get_attachment_image($attachment_image, 'full', false, $args) . 
				'</a>' . 
			'</figure>';
		}
		
		$out .= '</div>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Small Thumbnail Function */
function cmsms_thumb_small($cmsms_id, $type = 'post', $w = 100, $h = 100, $show = true) {
	$out = '<figure class="alignleft">' . 
		'<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsms_title($cmsms_id, false) . '">';

		$args = array( 
			'alt' => cmsms_title($cmsms_id, false), 
			'title' => cmsms_title($cmsms_id, false), 
			'style' => 'width:' . $w . 'px; height:' . $h . 'px;' 
		);
		
		
		if (has_post_thumbnail()) {
			$out .= get_the_post_thumbnail($cmsms_id, 'square-thumb', $args);
		} elseif ($type == 'post') { // Post type - post
			if (get_post_format() == 'aside') {
				$out .= '<span class="img_placeholder cmsms_theme_icon_aside"></span>';
			} elseif (get_post_format() == 'audio') {
				$out .= '<span class="img_placeholder cmsms_theme_icon_audio"></span>';
			} elseif (get_post_format() == 'chat') {
				$out .= '<span class="img_placeholder cmsms_theme_icon_chat"></span>';
			} elseif (get_post_format() == 'gallery') {
				$cmsms_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta($cmsms_id, 'cmsms_post_images', true))));
				
				$cmsms_post_image = $cmsms_post_images[0];
				
				if (isset($cmsms_post_image) && $cmsms_post_image != '') {
					$out .= wp_get_attachment_image($cmsms_post_image, 'square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsms_theme_icon_gallery"></span>';
				}
			} elseif (get_post_format() == 'image') {
				$cmsms_post_image = get_post_meta($cmsms_id, 'cmsms_post_image_link', true);
				
				if (isset($cmsms_post_image) && $cmsms_post_image != '') {
					$out .= wp_get_attachment_image($cmsms_post_image, 'square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsms_theme_icon_image"></span>';
				}
			} elseif (get_post_format() == 'link') {
				$out .= '<span class="img_placeholder cmsms_theme_icon_link"></span>';
			} elseif (get_post_format() == 'quote') {
				$out .= '<span class="img_placeholder cmsms_theme_icon_comment"></span>';
			} elseif (get_post_format() == 'status') {
				$out .= '<span class="img_placeholder cmsms_theme_icon_person"></span>';
			} elseif (get_post_format() == 'video') {
				$out .= '<span class="img_placeholder cmsms_theme_icon_video"></span>';
			} else {
				$out .= '<span class="img_placeholder cmsms_theme_icon_std"></span>';
			}
		} elseif ($type == 'project') { // Post type - project
			if (get_post_format() == 'gallery' || get_post_format() == 'standard') {
				$cmsms_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta($cmsms_id, 'cmsms_project_images', true))));
				
				$cmsms_project_image = $cmsms_project_images[0];
				
				if (isset($cmsms_project_image) && $cmsms_project_image != '') {
					$out .= wp_get_attachment_image($cmsms_project_image, 'square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsms_theme_icon_gallery"></span>';
				}
			} else {
				$out .= '<span class="img_placeholder cmsms_theme_icon_video"></span>';
			}
		} elseif ($type == 'profile') { // Post type - profile
			$out .= '<span class="img_placeholder cmsms_theme_icon_person"></span>';
		}
		
		$out .= '</a>' . 
	'</figure>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Title Function */
function cmsms_title($cmsms_id, $show = true) { 
	$cmsms_heading = get_post_meta($cmsms_id, 'cmsms_heading', true);
	
	$cmsms_heading_title = get_post_meta($cmsms_id, 'cmsms_heading_title', true);
	
	$out = '';
	
	if ($cmsms_heading == 'custom' && $cmsms_heading_title != '') {
		$out .= esc_attr($cmsms_heading_title);
	} else {
		$out .= esc_attr(strip_tags(get_the_title($cmsms_id) ? get_the_title($cmsms_id) : $cmsms_id));
	} 
    
	
    if ($show) {
        echo $out;
    } else {
        return $out;
    }
}



/* Get Heading Function */
function cmsms_heading($cmsms_id, $tag = 'h1', $show = true) { 
	$out = '<header class="entry-header">' . 
		'<' . esc_html($tag) . ' class="entry-title">' . 
			'<a href="' . esc_url(get_permalink()) . '">' . esc_attr(cmsms_title($cmsms_id, false)) . '</a>' . 
		'</' . esc_attr($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}





/****************************** Blog, Portfolio, Profiles Single Functions ******************************/

/* Get Previous & Next Post Links Function */
function cmsms_prev_next_posts() {
	$cmsms_post_type = get_post_type();

	$published_posts = wp_count_posts($cmsms_post_type)->publish;
	
	
	if ($published_posts > 1) {
		echo '<aside class="post_nav">';
		
		
		next_post_link('<span class="cmsms_next_post cmsms_theme_icon_slide_' . (!is_rtl() ? 'next' : 'prev') . '">%link</span>');
		
		previous_post_link('<span class="cmsms_prev_post cmsms_theme_icon_slide_' . (!is_rtl() ? 'prev' : 'next') . '">%link</span>');
		
		
		echo '</aside>';
	}
}



/* Get Sharing Box Function */
function cmsms_sharing_box($title_box = false, $tag = 'h3') {
	echo '<aside class="share_posts">';
		if ($title_box) {
			echo '<' . $tag . ' class="share_posts_title">' . esc_html($title_box) . '</' . $tag . '>';
		}
?>	
		<div class="fl share_posts_item">
			<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en"><?php esc_html_e('Tweet', 'dental-clinic'); ?></a>
			<script type="text/javascript">
				!function (d, s, id) { 
					var js = undefined, 
						fjs = d.getElementsByTagName(s)[0];
					
					if (d.getElementById(id)) { 
						d.getElementById(id).parentNode.removeChild(d.getElementById(id));
					}
					
					js = d.createElement(s);
					js.id = id;
					js.src = '//platform.twitter.com/widgets.js';
					
					fjs.parentNode.insertBefore(js, fjs);
				} (document, 'script', 'twitter-wjs');
			</script>
		</div>
		<div class="fl share_posts_item">
			<div class="g-plusone" data-size="medium"></div>
			<script type="text/javascript">
				(function () { 
					var po = document.createElement('script'), 
						s = document.getElementsByTagName('script')[0];
					
					po.type = 'text/javascript';
					po.async = true;
					po.src = 'https://apis.google.com/js/plusone.js';
					
					s.parentNode.insertBefore(po, s);
				} )();
			</script>
		</div>
		<div class="fl share_posts_item">
			<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink(get_the_ID())); ?>" class="pin-it-button" count-layout="horizontal">
				<img border="0" src="//assets.pinterest.com/images/PinExt.png" title="<?php esc_html_e('Pin It', 'dental-clinic'); ?>" />
			</a>
			<script type="text/javascript">
				(function (d, s, id) { 
					var js = undefined, 
						fjs = d.getElementsByTagName(s)[0];
					
					if (d.getElementById(id)) { 
						d.getElementById(id).parentNode.removeChild(d.getElementById(id));
					}
					
					js = d.createElement(s);
					js.id = id;
					js.src = '//assets.pinterest.com/js/pinit.js';
					
					fjs.parentNode.insertBefore(js, fjs);
				} (document, 'script', 'pinterest-wjs'));
			</script>
		</div>
		<div class="fl share_posts_item">
			<div class="fb-like" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial"></div>
			<script type="text/javascript">
				(function (d, s, id) { 
					var js = undefined, 
						fjs = d.getElementsByTagName(s)[0];
					
					if (d.getElementById(id)) { 
						d.getElementById(id).parentNode.removeChild(d.getElementById(id));
					}
					
					js = d.createElement(s);
					js.id = id;
					js.src = '//connect.facebook.net/en_US/all.js#xfbml=1';
					
					fjs.parentNode.insertBefore(js, fjs);
				} (document, 'script', 'facebook-jssdk'));
			</script>
		</div>
		<div class="cl"></div>
<?php 
	echo '</aside>' . "\n";
}



/* Get About Author Box Function */
function cmsms_author_box($title_box = false, $tag = 'h3') {
	$user_email = get_the_author_meta('user_email');
	
	
	$user_first_name = get_the_author_meta('first_name') ? get_the_author_meta('first_name') : false;
	
	$user_last_name = get_the_author_meta('last_name') ? get_the_author_meta('last_name') : false;
	
	$user_url = get_the_author_meta('url') ? get_the_author_meta('url') : false;
	
	$user_description = get_the_author_meta('description') ? get_the_author_meta('description') : false;
	
	
	echo '<aside class="about_author">';
	
	
	if ($title_box) {
		echo '<' . $tag . ' class="about_author_title">' . esc_html($title_box) . '</' . $tag . '>';
	}
	
	
	echo '<div class="about_author_inner">';
	
	
	$out = '';
	
	
	if ($user_first_name) {
		$out .= $user_first_name;
	}
	
	
	if ($user_first_name && $user_last_name) {
		$out .= ' ' . $user_last_name;
	} elseif ($user_last_name) {
		$out .= $user_last_name;
	}
	
	
	if (get_the_author() && ($user_first_name || $user_last_name)) {
		$out .= ' (';
	}
	
	
	if (get_the_author()) {
		$out .= get_the_author();
	}
	
	
	if (get_the_author() && ($user_first_name || $user_last_name)) {
		$out .= ')';
	}
	
	
	echo '<figure class="alignleft">' . 
		get_avatar($user_email, 130, get_option('avatar_default')) . 
	'</figure>' . 
	'<div class="ovh">';
	
	
	if ($out != '') {
		echo '<h3 class="vcard author"><span class="fn" rel="author">' . esc_html($out) . '</span></h3>';
	}
	
	
	if ($user_description) {
		echo '<p>' . str_replace("\n", '<br />', $user_description) . '</p>';
	}
	
	
	if ($user_url) {
		echo '<a href="' . esc_url($user_url) . '" title="' . esc_attr(get_the_author()) . ' ' . esc_attr__('website', 'dental-clinic') . '" target="_blank">' . esc_html($user_url) . '</a>';
	}
	
	
	echo '</div>' . 
		'</div>' . 
	'</aside>';
}



/* Get More Posts Slider Function */
if (!function_exists('cmsms_related')) {

function cmsms_related($tag = 'h5', $box_type = false, $tgsarray = null, $items_number = 5, $pause_time = 5, $type = 'post', $taxonomy = null) {
	if ( 
		($box_type == 'related' && !empty($tgsarray)) || 
		$box_type == 'popular' || 
		$box_type == 'recent' 
	) {
		$autoplay = ((int) $pause_time > 0) ? $pause_time * 1000 : 'false';
		
		
		$r_args = array( 
			'posts_per_page' => $items_number, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => 1, 
			'post__not_in' => array(get_the_ID()), 
			'post_type' => $type 
		);
		
		
		if ($box_type == 'related' && !empty($tgsarray)) {
			if ($type == 'post') {
				$r_args['tag__in'] = $tgsarray;
			} elseif ($type != 'post' && $taxonomy) {
				$r_args['tax_query'] = array( 
					array( 
						'taxonomy' => $taxonomy, 
						'field' => 'term_id', 
						'terms' => $tgsarray 
					) 
				);
			}
		} elseif ($box_type == 'popular') {
			$r_args['order'] = 'DESC';
			
			$r_args['orderby'] = 'meta_value';
			
			$r_args['meta_key'] = 'cmsms_likes';
		}
		
		
		$r_query = new WP_Query($r_args);
		
		$cmsms_project_link_url = get_post_meta(get_the_ID(), 'cmsms_project_link_url', true);

		$cmsms_project_link_redirect = get_post_meta(get_the_ID(), 'cmsms_project_link_redirect', true);


		$cmsms_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_project_images', true))));
		
		echo "
<aside class=\"cmsms_single_slider\">";
	
	
	echo "
	<script type=\"text/javascript\">
		jQuery(document).ready(function () { 
			var container = jQuery('.cmsms_single_slider_wrap'), 
				containerWidth = container.width(), 
				contentWrap = container.closest('.content_wrap'), 
				firstPost = container.find('.cmsms_single_slider_post'), 
				postMinWidth = Number(firstPost.css('minWidth').replace('px', '')), 
				itemsNumber = 3;
			
			
			if (contentWrap.hasClass('fullwidth')) {
				itemsNumber = 4;
			} else if (contentWrap.hasClass('r_sidebar') || contentWrap.hasClass('l_sidebar')) {
				itemsNumber = 3;
			}
			
			
			jQuery('.cmsms_single_slider_wrap').owlCarousel( {
				items : 				itemsNumber, 
				itemsDesktop : 			false,
				itemsDesktopSmall : 	[1024, 4], 
				itemsTablet : 			[950, 3], 
				itemsMobile : 			[540, 2], 
				transitionStyle : 		false, 
				rewindNav : 			true, 
				slideSpeed : 			200, 
				paginationSpeed : 		800, 
				rewindSpeed : 			1000, 
				autoPlay : 				{$autoplay}, 
				stopOnHover : 			true, 
				autoHeight : 			true, 
				addClassActive : 		true, 
				responsiveBaseWidth : 	'.cmsms_single_slider_wrap', 
				pagination : 			false, 
				navigation : 			true, 
				navigationText : [ 
					'<span class=\"cmsms_prev_arrow\"><span></span></span>', 
					'<span class=\"cmsms_next_arrow\"><span></span></span>' 
				] 
			} );
		} );	
	</script>
	";
	
	
	echo "<{$tag}>";
		
		if ($type == 'post') {
			if ($box_type == 'related') {
				esc_attr_e('Related Posts', 'dental-clinic');
			} elseif ($box_type == 'popular') {
				esc_attr_e('Popular Posts', 'dental-clinic');
			} elseif ($box_type == 'recent') {
				esc_attr_e('Recent Posts', 'dental-clinic');
			}
		} else {
			if ($box_type == 'related') {
				esc_attr_e('Related Projects', 'dental-clinic');
			} elseif ($box_type == 'popular') {
				esc_attr_e('Popular Projects', 'dental-clinic');
			} elseif ($box_type == 'recent') {
				esc_attr_e('Recent Projects', 'dental-clinic');
			}
		}
		
		
		echo "</{$tag}>
	<div class=\"cmsms_single_slider_inner\">
		<div class=\"cmsms_single_slider_wrap\">";
		
		
		if ($r_query->have_posts()) :
			while ($r_query->have_posts()) : $r_query->the_post();
				echo "
			<div class=\"cmsms_single_slider_post\">
				<div class=\"cmsms_single_slider_post_content\">";
					cmsms_thumb_rollover(get_the_ID(), 'project-thumb', true, true, true, $cmsms_project_images, false, false, false, false, true, $cmsms_project_link_redirect, $cmsms_project_link_url);
				
				
				echo "
					<div class=\"related_posts_item_wrap\">" .
						"<h5 class=\"related_posts_item_title\">" . 
							"<a href=\"" . esc_url(get_permalink()) . "\" title=\"" . cmsms_title(get_the_ID(), false) . "\">" . cmsms_title(get_the_ID(), false) . "</a>" . 
						"</h5>";
					
					if ($type == 'post') {
						cmsms_post_category('related', 'related');
					} else {
						cmsms_project_category(get_the_ID(), 'pj-categs', 'page');
					}
				
				echo "</div>";
				
				
				echo "</div>
			</div>";
			endwhile;
		else :
			echo "
			<h5>";
			
			
			if ($type == 'post') {
				esc_html_e('No related posts found', 'dental-clinic');
			} else {
				esc_html_e('No related projects found', 'dental-clinic');
			}
			
			
			echo "</h5>";
		endif;
		
		
		wp_reset_postdata();
		
		
		echo "
		</div>
	</div>
</aside>
";
	}
}

}



/* Get Posts Author Avatar Function */
function cmsms_author_avatar($template_type = 'page') {
	$user_email = get_the_author_meta('user_email') ? get_the_author_meta('user_email') : false;
	
	
	if ($template_type == 'page') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	} else if ($template_type == 'post') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	}
}

