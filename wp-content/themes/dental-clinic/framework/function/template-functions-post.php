<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Template Functions for Blog & Post
 * Created by CMSMasters
 * 
 */


/* Get Posts Heading Function */
function cmsms_post_heading($cmsms_id, $tag = 'h1', $show = true) { 
	$out = '<header class="cmsms_post_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsms_post_title entry-title">' . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsms_title($cmsms_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Heading Without Link Function */
function cmsms_post_title_nolink($cmsms_id, $tag = 'h1', $show = true) { 
	$out = '<' . esc_html($tag) . ' class="cmsms_post_title entry-title">' . 
		cmsms_title($cmsms_id, false) . 
	'</' . esc_html($tag) . '>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Date Function */
function cmsms_post_date($template_type = 'page', $layout_type = 'default', $show = true) {
	if ($template_type == 'page') {
		if ($layout_type == 'default') {
			$out = '<span class="cmsms_post_date">' . 
				esc_html__('On', 'dental-clinic') . ' ' . 
				'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
					esc_html(get_the_date()) . 
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					esc_html(get_the_modified_date()) . 
				'</abbr>' . 
			'</span>';
		} elseif ($layout_type == 'timeline') {
			$out = '<span class="cmsms_post_date">' . 
				'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
					'<span class="cmsms_year">' . esc_html(get_the_date('Y')) . '</span>' . 
					'<span class="cmsms_day_mon">' . esc_html(get_the_date('M j')) . '</span>' . 
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					esc_html(get_the_modified_date()) . 
				'</abbr>' . 
			'</span>';
		}
	} elseif ($template_type == 'post') {
		$cmsms_option = cmsms_get_global_options();
		
		$out = '';
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_date']) {
			$out .= '<span class="cmsms_post_date">' . 
				esc_html__('On', 'dental-clinic') . ' ' . 
				'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
					esc_html(get_the_date()) . 
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					esc_html(get_the_modified_date()) . 
				'</abbr>' . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Author Function */
function cmsms_post_author($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsms_post_user_name">' . 
			esc_html__('By', 'dental-clinic') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'dental-clinic') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsms_option = cmsms_get_global_options();
		$out = '';
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_author']) {
			$out .= '<span class="cmsms_post_user_name">' . 
				esc_html__('By', 'dental-clinic') . ' ' . 
				'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'dental-clinic') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Category Function */
function cmsms_post_category($template_type = 'page', $show = true) {
	if (get_the_category()) {
		if ($template_type == 'page') {
			$out = '<span class="cmsms_post_category">' . 
				esc_html__('In', 'dental-clinic') . ' ' . 
				get_the_category_list(', ') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsms_option = cmsms_get_global_options();
			$out = '';
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_cat']) {
				$out .= '<span class="cmsms_post_category">' . 
					esc_html__('In', 'dental-clinic') . ' ' . 
					get_the_category_list(', ') . 
				'</span>';
			}
		} elseif ($template_type == 'related'){
			$out = '<span class="cmsms_post_category">' . 
				get_the_category_list(', ') . 
			'</span>';
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts Tags Function */
function cmsms_post_tags($template_type = 'page', $show = true) {
	if (get_the_tags()) {
		if ($template_type == 'page') {
			$out = '<span class="cmsms_post_tags">' . 
				get_the_tag_list(__('Tags', 'dental-clinic') . ' ', ', ', '') . 
			'</span>';
		} else if ($template_type == 'post') {
			$cmsms_option = cmsms_get_global_options();
			$out = '';
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_tag']) {
				$out .= '<span class="cmsms_post_tags">' . 
					get_the_tag_list(__('Tags', 'dental-clinic') . ' ', ', ', '') . 
				'</span>';
			}
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts Content/Excerpt Function */
function cmsms_post_exc_cont($show = true) {
	$out = '';
	
	$post_excerpt = wpautop(theme_excerpt(20, false));
	
	if ($post_excerpt != '') {
		$out = cmsms_divpdel('<div class="cmsms_post_content entry-content">' . "\n" . 
			wpautop(theme_excerpt(20, false)) . 
		'</div>' . "\n");
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Like Function */
function cmsms_post_like($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = cmsmsLike(false);
	} elseif ($template_type == 'post') {
		$cmsms_option = cmsms_get_global_options();
		$out = '';
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_like']) {
			$out = cmsmsLike(false);
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Comments Function */
function cmsms_post_comments($template_type = 'page', $show = true) {
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = '<a class="cmsms_post_comments cmsms_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'dental-clinic') . ' ' . esc_attr(get_the_title()) . '">' . 
				'<span>' . esc_html(get_comments_number()) . '</span>' . 
			'</a>';
		} elseif ($template_type == 'post') {
			$cmsms_option = cmsms_get_global_options();
			$out = '';
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_comment']) {
				$out = '<a class="cmsms_post_comments cmsms_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'dental-clinic') . ' ' . esc_attr(get_the_title()) . '">' . 
					'<span>' . esc_html(get_comments_number()) . '</span>' . 
				'</a>';
			}
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts More Button/Link Function */
function cmsms_post_more($cmsms_id, $show = true) {
	$cmsms_post_read_more = get_post_meta($cmsms_id, 'cmsms_post_read_more', true);
	
	
	if ($cmsms_post_read_more == '') {
		$cmsms_post_read_more = esc_attr__('Continue reading', 'dental-clinic');
	}
	
	
	$out = '<a class="cmsms_post_read_more" href="' . esc_url(get_permalink($cmsms_id)) . '">' . esc_html($cmsms_post_read_more) . '</a>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Chat Post Function */
function cmsms_post_format_chat($show = true) {
	$out = '<dl class="cmsms_chat chat">';
	$stanzas = get_the_post_format_chat();

	foreach ($stanzas as $stanza) {
		foreach ($stanza as $row) {
			$time = '';
			if (!empty($row['time']))
				$time = sprintf('<time class="cmsms_chat_time chat-timestamp">%s</time>', esc_html($row['time']));

			$out .= sprintf(
				'<div class="cmsms_chat_item">
					<dt class="cmsms_chat_author_time chat-author chat-author-%1$s vcard">%2$s <cite class="cmsms_chat_author fn">%3$s</cite></dt>
					<dd class="cmsms_chat_text chat-text">%4$s</dd>
				</div>',
				esc_attr(sanitize_title_with_dashes($row['author'])), 
				$time,
				esc_html($row['author']),
				$row['message']
			);
		}
	}

	$out .= '</dl>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Post Format Icon Placeholder Function */
function cmsms_post_format_icon_placeholder($cmsms_id, $format = 'std', $show = true) {
	$out = '<figure>' . 
		'<a href="' . esc_url(get_permalink()) . '" title="' . cmsms_title($cmsms_id, false) . '" class="preloader cmsms_theme_icon_' . esc_attr($format) . '"></a>' . 
	'</figure>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}

