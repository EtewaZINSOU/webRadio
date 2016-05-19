<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function cmsms_theme_colors_primary() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$cmsms_color_schemes = cmsms_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsms_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsms_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . (($scheme != 'default') ? ".cmsms_color_scheme_{$scheme}," : '') . "
	{$rule}input[type=text],
	{$rule}input[type=date],
	{$rule}input[type=tel],
	{$rule}input[type=number],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}input[type=search],
	{$rule}input[type=submit],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.tweet_list .tweet_text,
	{$rule}.cmsmsLike,
	{$rule}.cmsmsLike:hover,
	{$rule}.cmsms_post_comments,
	{$rule}.cmsms_post_comments:hover,
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont .cmsmsLike, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont .cmsmsLike:hover, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont .cmsms_post_comments, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont .cmsms_post_comments:hover, 
	{$rule}.profiles.opened-article .profile .cmsms_profile_header .cmsms_profile_subtitle, 
	{$rule}.cmsms_profile.vertical .profile .pl_img .pl_noimg, 
	{$rule}.cmsms_search_post .cmsms_post_cont_info,
	{$rule}.post.cmsms_search_post .cmsms_post_cont_info,
	{$rule}.cmsms_search_post .cmsms_post_footer_info,
	{$rule}.post.cmsms_search_post .cmsms_post_footer_info,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input:-moz-placeholder {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	{$rule}ul li:before,
	{$rule}.cmsms_twitter .owl-buttons > div:hover,
	{$rule}.search_bar_wrap button[type=submit]:before,
	{$rule}.post_nav > span:hover a,
	{$rule}.post_nav > span:hover:before,
	{$rule}.cmsms_clients_slider .owl-buttons > div:hover,
	{$rule}.cmsms_single_slider .owl-buttons > div:hover,
	" . (($scheme != 'default') ? "{$rule}.widget ul li a," : '') . "
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_center .owl-buttons > div:hover > span:before,
	{$rule}.cmsms_posts_slider .owl-buttons > div:hover > span:before,
	{$rule}.widget_pages li:hover a,
	{$rule}.twr_icon,
	{$rule}button:hover,
	{$rule}.button:hover,
	{$rule}.cmsms_button:hover,
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button,
	{$rule}.cmsms_paypal_donations > form:hover + .button,
	{$rule}.current > .button,
	{$rule}.button.current, 
	{$rule}.widget_custom_popular_projects_entries .owl-buttons > div:hover, 
	{$rule}.widget_custom_latest_projects_entries .owl-buttons > div:hover,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:after,
	{$rule}.cmsms-form-builder .check_parent input[type=\"checkbox\"] + label:after, 
	{$rule}.cmsms-form-builder .check_parent input[type=\"radio\"] + label:after,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:after,
	{$rule}.cmsms_notice .notice_close:hover,
	{$rule}.color_2,
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_image_link:hover, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_open_link:hover, 
	{$rule}.widget ul li a:hover,
	{$rule}.widget_nav_menu ul li.current-menu-item a,
	{$rule}.contact_widget_name:before, 
	{$rule}.contact_widget_url:before, 
	{$rule}.contact_widget_email:before,
	{$rule}.contact_widget_phone:before, 
	{$rule}.adress_wrap:before,
	{$rule}.cmsms_post_format_img,
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont a, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont .cmsmsLike:hover:before, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont .cmsmsLike.active:before, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont .cmsms_post_comments:hover:before, 
	{$rule}.cmsms_dropcap.type1, 
	{$rule}.tweet_time:before,
	{$rule}.tweet_list .tweet_text a,
	{$rule}.cmsms_icon_box.cmsms_icon_top:before,
	{$rule}.cmsms_icon_box.cmsms_icon_heading_left .icon_box_heading:before,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_icon:before,
	{$rule}.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner:before, 
	{$rule}.cmsms_post_comments:hover:before, 
	{$rule}#cancel-comment-reply-link, 
	{$rule}.cmsms_project_filter_list .button:hover, 
	{$rule}.cmsms_post_filter_list .button:hover, 
	{$rule}.cmsms_project_filter_list .current .button, 
	{$rule}.cmsms_post_filter_list .current .button, 
	{$rule}.img_placeholder_small:hover, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button,
	{$rule}.pl_subtitle, 
	{$rule}.cmsms_profile.vertical .profile .pl_img:hover .pl_noimg,
	{$rule}.cmsms_search .cmsms_search_post .cmsms_post_read_more, 
	{$rule}#wp-calendar thead th,
	{$rule}.widget_custom_booking_entries .button, 
	{$rule}.widget_custom_booking_entries input[type=submit], 
	{$rule}.widget_custom_booking_entries input[type=button], 
	{$rule}.widget_custom_booking_entries button,
	{$rule}.bypostauthor > .comment-body .alignleft:before, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > a:hover, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > a:hover, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap_category > li > a:hover, 
	{$rule}.blog.columns.puzzle .post figure:hover + .puzzle_post_content_wrapper .cmsms_post_title,  
	{$rule}.blog.columns.puzzle .post figure:hover + .puzzle_post_content_wrapper .cmsms_post_title a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	" . (($scheme == 'default') ? "mark," : '') . (($scheme != 'default') ? ".cmsms_color_scheme_{$scheme} mark," : '') . "
	{$rule}.owl-buttons > div:hover,
	{$rule}.cmsms_button,
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}button[disabled]:hover, 
	{$rule}input[type=submit][disabled]:hover,
	{$rule}.blog.columns.puzzle .post.format-aside .preloader, 
	{$rule}.cmsms_table tr.cmsms_table_row_header,
	{$rule}.cmsms_icon_box.cmsms_icon_box_top:before,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left_top:before,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left:before,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_bg .cmsms_icon_list_item .cmsms_icon_list_icon,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_item:hover .cmsms_icon_list_icon,
	{$rule}.cmsms_stats.stats_mode_bars .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button:hover,
	{$rule}.owl-page:hover, 
	{$rule}.owl-page.active, 
	{$rule}.cmsms_quotes .owl-page:hover,
	{$rule}.cmsms_quotes .owl-page.active, 
	{$rule}.post.format-aside .cmsms_post_cont, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers:hover, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers.current, 
	{$rule}.responsive_nav, 
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item.current_tab:before,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item:hover:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_project_filter_list .button, 
	{$rule}.cmsms_post_filter_list .button, 
	{$rule}.cmsms_project_filter_list .button:hover, 
	{$rule}.cmsms_post_filter_list .button:hover, 
	{$rule}.cmsms_project_filter_list .current .button, 
	{$rule}.cmsms_post_filter_list .current .button {
		background-color:transparent; /* static */
	}
	
	{$rule}.cmsms_twitter .owl-buttons > div:hover,
	{$rule}.widget_pages li:hover, 
	{$rule}.widget_nav_menu ul li a:hover,
	{$rule}.widget_custom_popular_projects_entries .owl-buttons > div:hover, 
	{$rule}.widget_custom_latest_projects_entries .owl-buttons > div:hover,
	{$rule}.post.format-aside .cmsms_post_cont,
	{$rule}.post_nav > span:hover:before,
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button,
	{$rule}.cmsms_paypal_donations > form:hover + .button,
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_center .owl-buttons > div:hover,
	{$rule}.cmsms_posts_slider .owl-buttons > div:hover,
	{$rule}.button:hover,
	{$rule}.current > .button,
	{$rule}.button.current,
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.cmsms_button:hover,
	{$rule}.owl-pagination .owl-page:hover, 
	{$rule}.owl-pagination .owl-page.active, 
	{$rule}.cmsms_clients_slider .owl-buttons > div:hover,
	{$rule}.cmsms_single_slider .owl-buttons > div:hover,
	{$rule}.cmsms_table tr.cmsms_table_row_header, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers.current,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers:hover,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_border .cmsms_icon_list_item .cmsms_icon_list_icon:after {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}a:hover,
	{$rule}.pl_social_list li a,
	" . (($scheme != 'default') ? "{$rule}.widget ul li a:hover," : '') . "
	{$rule}.cmsmsLike:before,
	{$rule}.cmsms_post_comments:before,
	{$rule}.cmsms_tabs.lpr .cmsms_tab li .published,
	{$rule}#wp-calendar caption:before,
	{$rule}.widget_archive li:before, 
	{$rule}.widget_categories li:before, 
	{$rule}.widget_recent_entries li:before,
	{$rule}.cmsms_clients_slider .owl-buttons > div,
	{$rule}.cmsms_single_slider .owl-buttons > div,
	{$rule}.widget_custom_popular_projects_entries .owl-buttons > div, 
	{$rule}.widget_custom_latest_projects_entries .owl-buttons > div,
	{$rule}{$rule}.cmsms_posts_slider .owl-buttons > div > span:before,
	{$rule}.tweet_time,
	{$rule}.cmsms_toggles .cmsms_toggles_filter > a.current_filter,
	{$rule}.search_bar_wrap button:before, 
	{$rule}.widget .owl-buttons,
	{$rule}.tweet_list .tweet_text a:hover,
	{$rule}.cmsms_quotes .owl-buttons,
	{$rule}.post .cmsms_post_cont_info,
	{$rule}.post .cmsms_post_footer_info,
	{$rule}.post .cmsms_post_header .cmsms_post_subtitle,
	{$rule}.post.format-chat .cmsms_post_cont .cmsms_chat_author_time .cmsms_chat_time, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont a:hover, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont .cmsms_post_cont_info, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont .cmsms_post_footer_info, 
	{$rule}.comment-content abbr, 
	{$rule}.cmsms_twitter .owl-buttons > div,
	{$rule}#cancel-comment-reply-link:hover, 
	{$rule}.img_placeholder_small,
	{$rule}.search_bar_wrap button[type=submit]:hover:before,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_list li a, 
	{$rule}.cmsms_search_post .cmsms_search_post_number_wrap .cmsms_post_type_label {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.blog.columns.puzzle .post .preloader {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}input[type=text]:focus,
	{$rule}input[type=date]:focus,
	{$rule}input[type=tel]:focus,
	{$rule}input[type=number]:focus,
	{$rule}input[type=email]:focus,
	{$rule}input[type=password]:focus,
	{$rule}input[type=search]:focus,
	{$rule}textarea:focus,
	{$rule}select:focus {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}blockquote,
	{$rule}fieldset legend,
	{$rule}.cmsms_counter_title,
	{$rule}.cmsms_img_caption,
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	" . (($scheme == 'default') ? "{$rule}.widget ul li a," : '') . "
	{$rule}.owl-buttons > div,
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_center .owl-buttons > div,
	{$rule}.cmsms_quotes .owl-buttons span:hover,
	{$rule}.cmsms_posts_slider .owl-buttons span:hover,
	{$rule}.post.format-aside .cmsms_post_cont a:hover, 
	{$rule}.post.format-aside .cmsms_post_cont .cmsms_post_meta_info a:hover:before, 
	{$rule}.post.format-aside .cmsms_post_cont .cmsms_post_meta_info a.cmsmsLike.active:before, 
	{$rule}.post.format-status .cmsms_post_cont .cmsms_post_content, 
	{$rule}.post.format-chat .cmsms_post_cont .cmsms_chat_author_time .cmsms_chat_author, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont .puzzle_post_content_wrap a:before, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont .cmsms_post_content, 
	{$rule}.post_nav a,
	{$rule}blockquote footer,
	{$rule}table caption,
	{$rule}li,
	{$rule}.cmsms_twitter .cmsms_twitter_item_content,
	{$rule}.cmsms_notice .notice_close,
	{$rule}.cmsms_project_filter_list .button, 
	{$rule}.cmsms_post_filter_list .button, 
	{$rule}.cmsms_table tr.cmsms_table_row_footer,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item a,
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_horizontal .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat_title,
	{$rule}.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap,
	{$rule}.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_counter_wrap, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title:hover > a,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title > a,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > a,
	{$rule}.project .cmsms_project_cont_info, 
	{$rule}.cmsms_img_wrap .img_placeholder:before, 
	{$rule}.cmsms_img_rollover_wrap .img_placeholder:before, 
	{$rule}#wp-calendar caption,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_period,
	{$rule}#header .logo, 
	{$rule}.cmsms_search .cmsms_search_post .cmsms_post_read_more:hover, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > a, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > a, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > ul li a:before, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap_category > li > a, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap_category > li > ul li a:before, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap_archive > li a:before,
	{$rule}code,
	{$rule}kbd,
	{$rule}pre,
	{$rule}samp	{
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > .cmsms_toggle_plus .cmsms_toggle_plus_hor,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > .cmsms_toggle_plus .cmsms_toggle_plus_vert, 
	{$rule}.cmsms_icon_list_items .cmsms_icon_list_item .cmsms_icon_list_icon,
	{$rule}.cmsms_search .cmsms_search_post .cmsms_search_post_number, 
	{$rule}.blog.columns.puzzle .post.format-status .preloader, 
	{$rule}form .formError .formErrorContent,
	{$rule}.responsive_nav:hover, 
	{$rule}.responsive_nav.active {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}.cmsms_button,
	{$rule}.owl-buttons > div:hover,
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}button[disabled]:hover, 
	{$rule}input[disabled]:hover,
	{$rule}mark,
	{$rule}.cmsms_profile .profile .pl_img a:before,
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_image_link, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_open_link, 
	{$rule}.cmsms_dropcap.type2, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button:hover, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .pricing_title, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .feature_list *, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_price_wrap .cmsms_currency, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_price_wrap .cmsms_price, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_price_wrap .cmsms_coins, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_price_wrap .cmsms_period, 
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item.current_tab a,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item a:hover,
	{$rule}.blog.timeline .post .cmsms_post_info, 
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsms_table tr.cmsms_table_row_header,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left_top:before,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left:before,
	{$rule}.cmsms_icon_box.cmsms_icon_box_top:before,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_border .cmsms_icon_list_item .cmsms_icon_list_icon:before,
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.cmsms_search .cmsms_search_post .cmsms_search_post_number, 
	{$rule}.responsive_nav:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.headline_outer {
		background: " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg'] . ";
		background: -webkit-gradient(linear, left top, right top, from(" . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg'] . "), to(" . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . ")); 
		background: -webkit-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . "); 
		background: -moz-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . "); 
		background: -ms-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . "); 
		background: -o-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . "); 
		background: linear-gradient(to right, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . ");
	}
	
	" . (($scheme == 'default') ? "body," : '') . (($scheme != 'default') ? ".cmsms_color_scheme_{$scheme}," : '') . "
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button,
	{$rule}.cmsms_paypal_donations > form:hover + .button,
	{$rule}.button:hover,
	{$rule}.current > .button,
	{$rule}.button.current,
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.cmsms_button:hover, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button,
	{$rule}.blog.columns.puzzle .post .puzzle_post_content_wrapper .cmsms_post_footer,
	{$rule}.cmsms_counters .cmsms_counter_wrap .cmsms_counter, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_pricing_item_inner,
	{$rule}.cmsms_quotes_slider .cmsms_quote_inner,
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_box .cmsms_quote_inner:before,
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_center .owl-buttons > div, 
	{$rule}.quote_grid .quotes_list .cmsms_quote,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item a,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > .cmsms_toggle_plus,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title > .cmsms_toggle_plus .cmsms_toggle_plus_hor,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title > .cmsms_toggle_plus .cmsms_toggle_plus_vert, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title:hover > .cmsms_toggle_plus .cmsms_toggle_plus_hor,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title:hover > .cmsms_toggle_plus .cmsms_toggle_plus_vert,
	{$rule}.cmsms_profile .profile,
	{$rule}.cmsms_notice,
	{$rule}.post .cmsms_post_cont, 
	{$rule}.owl-page, 
	{$rule}input[type=text],
	{$rule}input[type=date],
	{$rule}input[type=tel],
	{$rule}input[type=number],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}input[type=search],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.tweet_list li,
	{$rule}.cmsms_twitter .owl-buttons > div,
	{$rule}.widget_custom_latest_projects_entries .latest_pj_item,
	{$rule}.widget_custom_popular_projects_entries .popular_pj_item,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsms-form-builder .check_parent input[type=\"checkbox\"]+label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsms-form-builder .check_parent input[type=\"radio\"]+label:before,
	{$rule}.post_nav > span:before,
	{$rule}.widget_custom_popular_projects_entries .owl-buttons > div, 
	{$rule}.widget_custom_latest_projects_entries .owl-buttons > div,
	{$rule}.cmsms_icon_box.cmsms_icon_box_top,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left,
	{$rule}.cmsms_clients_slider .owl-buttons > div,
	{$rule}.cmsms_clients_slider .owl-buttons > div:hover,
	{$rule}.cmsms_single_slider .owl-buttons > div:hover,
	{$rule}.cmsms_posts_slider .owl-buttons > div,
	{$rule}.cmsms_posts_slider .owl-buttons > div:hover,
	{$rule}.about_author .about_author_inner,
	{$rule}.post_comments .commentlist .comment-body, 
	{$rule}.cmsms_table tr,
	{$rule}.portfolio.puzzle .project .project_outer .project_inner, 
	{$rule}.cmsms_img.with_caption,
	{$rule}.widget_nav_menu ul li a,
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	{$rule}.footer_bg,
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.search_bar_wrap,
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_image_link:hover, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_open_link:hover, 
	{$rule}.search_bar_wrap input[type=text],
	{$rule}.search_bar_wrap input[type=text]:focus,
	{$rule}.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.cmsms_quotes .owl-page,
	{$rule}.cmsms_single_slider .cmsms_single_slider_post_content,
	{$rule}.cmsms_profile.vertical .profile .pl_img .pl_noimg,
	{$rule}.portfolio .project .project_outer, 
	{$rule}.cmsms_posts_slider .project .slider_project_outer {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.owl-buttons > div {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . ", 0.8);
	}
	
	{$rule}.blog.columns.puzzle .post .puzzle_post_content_wrapper:before,
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_image_link, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_open_link, 
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_box .cmsms_quote_inner:after, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button:hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	@media only screen and (max-width: 540px) {
		{$rule}html #page .blog.columns.puzzle .post:nth-child(even) .puzzle_post_content_wrapper:before {
			border-bottom-color:" . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg'] . " !important;
		}
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.post.format-aside .cmsms_post_cont, 
	{$rule}.post.format-aside .cmsms_post_cont a, 
	{$rule}.post.format-aside .cmsms_post_cont a:before, 
	{$rule}.post.format-aside .cmsms_post_cont .cmsms_post_meta_info a:hover, 
	{$rule}.post.format-aside .cmsms_post_cont .cmsms_post_cont_info, 
	{$rule}.post.format-aside .cmsms_post_cont .cmsms_post_footer_info, 
	{$rule}.post.format-aside .cmsms_post_cont .cmsms_post_format_img:before, 
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_icon_wrap, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers:hover, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers.current, 
	{$rule}.blog.columns.puzzle .post .preloader:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}input[type=text]:focus,
	{$rule}input[type=date]:focus,
	{$rule}input[type=tel]:focus,
	{$rule}input[type=number]:focus,
	{$rule}input[type=email]:focus,
	{$rule}input[type=password]:focus,
	{$rule}input[type=search]:focus,
	{$rule}textarea:focus,
	{$rule}select:focus,
	{$rule}.blog.columns.puzzle .post.format-aside .cmsms_post_cont, 
	{$rule}.cmsms_featured_block,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_icon,
	{$rule}.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat canvas,
	{$rule}.post .wp-caption,  
	{$rule}.gallery-item .gallery-icon,
	{$rule}.gallery-item .gallery-caption,
	{$rule}code, 
	{$rule}fieldset,
	{$rule}fieldset legend,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers, 
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_horizontal .cmsms_stat_wrap:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_box .cmsms_quote:before,
	{$rule}.sidebar_sep:before,
	{$rule}.post.format-chat .cmsms_post_cont .cmsms_chat .cmsms_chat_item:before,
	{$rule}.blog.timeline:before, 
	{$rule}.cmsms_icon_list_items.cmsms_icon_list_type_block .cmsms_icon_list_item:before,
	{$rule}.post.cmsms_timeline_type:before, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	@media only screen and (max-width: 950px) {
		{$rule}.content_wrap .sidebar:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
		}
	}
	
	{$rule}.cmsms_table tr,
	{$rule}input[type=text],
	{$rule}input[type=date],
	{$rule}input[type=tel],
	{$rule}input[type=number],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}input[type=search],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.cmsms_archive .blog.portfolio > article,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsms-form-builder .check_parent input[type=\"checkbox\"]+label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsms-form-builder .check_parent input[type=\"radio\"]+label:before,
	{$rule}ul,
	{$rule}li,
	{$rule}.cmsms_twitter .owl-buttons > div,
	{$rule}.widget_custom_popular_projects_entries .owl-buttons > div, 
	{$rule}.widget_custom_latest_projects_entries .owl-buttons > div,
	{$rule}.widget_custom_latest_projects_entries .latest_pj_item,
	{$rule}.widget_custom_popular_projects_entries .popular_pj_item,
	{$rule}.cmsms_notice,
	{$rule}.post .cmsms_post_cont, 
	{$rule}.post_nav > span:before,
	{$rule}.profile .pl_img .pl_noimg,
	{$rule}.owl-pagination .owl-page,
	{$rule}.cmsms_clients_slider .owl-buttons > div,
	{$rule}.cmsms_counters .cmsms_counter_wrap .cmsms_counter, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_pricing_item_inner,
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_center .owl-buttons > div,
	{$rule}.cmsms_posts_slider .owl-buttons > div,
	{$rule}.cmsms_posts_slider .project .slider_project_outer .slider_project_inner,
	{$rule}.cmsms_quotes_slider .cmsms_quote_inner,
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_box .cmsms_quote_inner:before,
	{$rule}.cmsms_quotes_slider.cmsms_quotes_slider_type_box .cmsms_quote:after,
	{$rule}.quote_grid .quotes_list .cmsms_quote,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item a,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > .cmsms_toggle_plus,
	{$rule}.cmsms_profile .profile,
	{$rule}.about_author .about_author_inner,
	{$rule}.post_comments .commentlist .comment-body, 
	{$rule}.portfolio.large_gap.grid .project .project_outer, 
	{$rule}.search_bar_wrap,
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.cmsms_icon_wrap .cmsms_simple_icon, 
	{$rule}.cmsms_icon_box,
	{$rule}.cmsms_icon_box.cmsms_icon_box_top,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left,
	{$rule}.cmsms_icon_list_items.cmsms_icon_list_type_block .cmsms_icon_list_item,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_bg .cmsms_icon_list_icon:after,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_icon:after,
	{$rule}.cmsms_img.with_caption,
	{$rule}.img_placeholder,
	{$rule}.img_placeholder_small,
	{$rule}.widget_custom_popular_projects_entries .img_placeholder,
	{$rule}.widget_custom_latest_projects_entries .img_placeholder,
	{$rule}.cmsms_single_slider .cmsms_single_slider_post .related_posts_item_wrap,
	{$rule}.cmsms_single_slider .owl-buttons > div,
	{$rule}code, 
	{$rule}.tweet_list li,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers,
	{$rule}.widget_nav_menu ul li a {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.footer_bg, 
	{$rule}.post .cmsms_post_cont_info, 
	{$rule}.post .cmsms_post_footer_info, 
	{$rule}.post_nav,
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details .project_details_item, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_features .project_features_item, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_features .profile_features_item, 
	{$rule}.cmsms_search .cmsms_search_post .cmsms_post_cont_info, 
	{$rule}.cmsms_search .post.cmsms_search_post .cmsms_post_cont_info {
		" . cmsms_color_css('border-top-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.post.format-aside .cmsms_post_cont_info, 
	{$rule}.post.format-aside .cmsms_post_footer_info {
		border-top-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.2);
	}
	
	{$rule}.widget ul li,
	{$rule}hr,
	{$rule}.cmsms_divider,
	{$rule}.opened-article .post, 
	{$rule}.post .cmsms_post_cont_info, 
	{$rule}.post_nav,
	{$rule}.portfolio.opened-article .project .cmsms_project_header, 
	{$rule}.profiles.opened-article .profile .cmsms_profile_header, 
	{$rule}.cmsms_widget_divider {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.post.format-aside .cmsms_post_cont_info {
		border-bottom-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.2);
	}
	
	{$rule}.blog.columns.puzzle .post .cmsms_post_cont, 
	{$rule}.portfolio.small_gap .project .project_outer {
		-webkit-box-shadow:0 0 0 1px " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border'] . ";
		box-shadow:0 0 0 1px " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border'] . ";
	}
	/* Finish Borders Color */
	
	
	/* Srart Secondary Color */
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_list li a:hover,
	{$rule}.cmsmsLike:hover:before,
	{$rule}.cmsmsLike.active:before,
	{$rule}.pl_social_list li a:hover,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_currency, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_price, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_coins  {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title:hover > .cmsms_toggle_plus,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title .cmsms_toggle_plus,
	{$rule}.cmsms_quotes_slider .owl-pagination .owl-page:hover, 
	{$rule}.cmsms_quotes_slider .owl-pagination .owl-page.active {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.bottom_inner .widgettitle:before,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title:hover > .cmsms_toggle_plus,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title .cmsms_toggle_plus,
	{$rule}.cmsms_quotes_slider .owl-pagination .owl-page:hover, 
	{$rule}.cmsms_quotes_slider .owl-pagination .owl-page.active {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item:before,
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.cmsms_dropcap.type2 {
		background: " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . ";
		background: -webkit-gradient(linear, left top, right top, from(" . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . "), to(" . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . ")); 
		background: -webkit-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . "); 
		background: -moz-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . "); 
		background: -ms-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . "); 
		background: -o-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . "); 
		background: linear-gradient(to right, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . ");
	}
	
	{$rule}.cmsms_single_slider .cmsms_single_slider_post .cmsms_img_rollover:before,
	{$rule}.cmsms_hover_slider .cmsms_hover_slider_thumbs > li a:before,
	{$rule}.project_outer .cmsms_img_rollover:before, 
	{$rule}.slider_project_outer .cmsms_img_rollover:before, 	
	{$rule}.project_gallery_row .cmsms_img_rollover_wrap .cmsms_img_rollover:before,
	{$rule}.blog.timeline .post .cmsms_post_info, 
	{$rule}.blog.columns.puzzle .post .preloader:after, 
	{$rule}.cmsms_profile .profile .pl_img a:after, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_pricing_item_inner {
		background: " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . ";
		background: -webkit-gradient(linear, left bottom, left top, from(" . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . "), to(" . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . ")); 
		background: -webkit-linear-gradient(bottom, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . "); 
		background: -moz-linear-gradient(bottom, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . "); 
		background: -ms-linear-gradient(bottom, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . "); 
		background: -o-linear-gradient(bottom, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . "); 
		background: linear-gradient(to top, " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_secondary'] . ");
	}
	/* Finish Secondary Color */
	
	
	/* Start Custom Rules */
	{$rule}.widget_custom_booking_entries input[type=text],
	{$rule}.widget_custom_booking_entries input[type=date],
	{$rule}.widget_custom_booking_entries input[type=email], 
	{$rule}.widget_custom_booking_entries input[type=password], 
	{$rule}.widget_custom_booking_entries input[type=number],
	{$rule}.widget_custom_booking_entries input[type=search],
	{$rule}.widget_custom_booking_entries input[type=url],
	{$rule}.widget_custom_booking_entries input[type=tel],
	{$rule}.widget_custom_booking_entries textarea,
	{$rule}.widget_custom_booking_entries select {
		background-color:rgba(255, 255, 255, .1);
		border-color:rgba(255, 255, 255, .2);
		color:#ffffff;
	}
	
	{$rule}.widget_custom_booking_entries input[type=text]:focus,
	{$rule}.widget_custom_booking_entries input[type=date]:focus,
	{$rule}.widget_custom_booking_entries input[type=email]:focus, 
	{$rule}.widget_custom_booking_entries input[type=password]:focus, 
	{$rule}.widget_custom_booking_entries input[type=number]:focus,
	{$rule}.widget_custom_booking_entries input[type=search]:focus,
	{$rule}.widget_custom_booking_entries input[type=url]:focus,
	{$rule}.widget_custom_booking_entries input[type=tel]:focus,
	{$rule}.widget_custom_booking_entries textarea:focus,
	{$rule}.widget_custom_booking_entries select:focus {
		background-color:rgba(255, 255, 255, .2);
		border-color:rgba(255, 255, 255, .3);
	}
	
	{$rule}.widget_custom_booking_entries .select_arrow:after,
	{$rule}.widget_custom_booking_entries span.wpcf7-not-valid-tip,
	{$rule}.booking_title,
	{$rule}.widget_custom_booking_entries a,
	{$rule}.widget_custom_booking_entries li,
	{$rule}.widget_custom_booking_entries {
		color:#ffffff;
	}
	
	{$rule}.widget_custom_booking_entries input::-webkit-input-placeholder {
		color:#ffffff;
	}
	
	{$rule}.widget_custom_booking_entries input:-moz-placeholder {
		color:#ffffff;
	}
	
	{$rule}.widget_custom_booking_entries .button, 
	{$rule}.widget_custom_booking_entries input[type=submit], 
	{$rule}.widget_custom_booking_entries input[type=button], 
	{$rule}.widget_custom_booking_entries button {
		background:#ffffff;
		border-color:#ffffff;
	}
	
	{$rule}.widget_custom_booking_entries .button:hover, 
	{$rule}.widget_custom_booking_entries input[type=submit]:hover, 
	{$rule}.widget_custom_booking_entries input[type=button]:hover, 
	{$rule}.widget_custom_booking_entries button:hover {
		background:none;
		border-color:#ffffff;
		color:#ffffff;
	}
	
	{$rule}.widget_custom_booking_entries .widget_content li {
		border-top-color:rgba(255, 255, 255, .2);
	}
	
	{$rule}.widget_custom_booking_entries div.wpcf7-mail-sent-ok {
		border-color:#ffffff;
	}
	
	{$rule}::selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	";
	
	
	if ($scheme == 'default') {
	$custom_css .= "
	#slide_top {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0.5);
		border-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . ", 0.15);
	}
	";
	}
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsms_button.cmsms_but_bg_hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_bg_hover:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_bg_slide_left, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_right, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_top, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_bottom, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_vert, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_hor, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_diag {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_bg_slide_left:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_right:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_top:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_bottom:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_vert:hover, 
	{$rule}.cmsms_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_diag:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_left, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_right, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_top, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_bottom, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_expand_vert, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_expand_hor, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_expand_diag {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_bg_slide_left:after, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_right:after, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_top:after, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_bottom:after, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_vert:after, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_hor:after, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_diag:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_shadow {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_shadow:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_shadow {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_icon_dark_bg, 
	{$rule}.cmsms_button.cmsms_but_icon_light_bg, 
	{$rule}.cmsms_button.cmsms_but_icon_divider {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_dark_bg:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_light_bg:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_divider:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_dark_bg, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_light_bg, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_divider {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_divider:after {
		" . cmsms_color_css('border-right-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_inverse {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:hover:before, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_inverse:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:hover:after, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_inverse:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_icon_slide_left, 
	{$rule}.cmsms_button.cmsms_but_icon_slide_right {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_slide_left:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_slide_right:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_slide_left, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_slide_right {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_left, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_right, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_top, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_bottom {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_left:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_right:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_top:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_bottom:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_left, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_right, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_top, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_bottom {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return $custom_css;
}

