<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function cmsms_theme_fonts() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body, 
	blockquote footer, 
	.cmsms_breadcrumbs .cmsms_breadcrumbs_inner, 
	.cmsms_breadcrumbs .cmsms_breadcrumbs_inner a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	q, 
	.cmsms_post_comments:before, 
	.cmsmsLike:before {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] . "px;
	}
	
	.tweet_list .tweet_text,
	.tweet_list .tweet_text a,
	.cmsms_post_cont_info, 
	.cmsms_posts_slider .post .cmsms_slider_post_content, 
	.cmsms_posts_slider .post .cmsms_slider_post_quote_author, 
	.widget_nav_menu ul ul li a, 
	.widget_nav_menu ul ul ul li a, 
	.widget_nav_menu ul ul ul ul li a, 
	.widget_nav_menu ul ul ul ul ul li a, 
	#wp-calendar th, 
	#wp-calendar td { 
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	.tweet_list .tweet_text,
	.tweet_list .tweet_text a {
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] - 2) . "px;
	}
	
	.widget_nav_menu ul ul ul li a, 
	.widget_nav_menu ul ul ul ul li a, 
	.widget_nav_menu ul ul ul ul ul li a { 
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
	}
	
	.gallery .gallery-item .gallery-caption,
	.cmsms_gallery li.cmsms_caption figcaption,
	.wp-caption .wp-caption-text {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 1) . "px;
	}
	
	q, 
	.cmsmsLike:before,
	.cmsms_post_comments:before, 
	.contact_widget_name.cmsms_theme_icon_person:before, 
	.contact_widget_email.cmsms_theme_icon_user_mail:before, 
	.contact_widget_phone.cmsms_theme_icon_user_phone:before, 
	.adress_wrap.cmsms_theme_icon_user_address:before {
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px !important;
	}
	
	.details_item_desc_like,
	.details_item_desc_comments, 
	.post .cmsms_post_meta_info {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
	}
	/* Finish Content Font */


	/* Start Link Font */
	a, 
	.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item > a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_link_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_link_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_text_decoration'] . ";
	}
	
	.cmsms_post_cont_info, 
	.cmsms_post_cont_info a, 
	.cmsms_project_cont_info, 
	.cmsms_project_cont_info a, 
	.pj_ddn .cmsms_project_category, 
	.pj_ddn .cmsms_project_category a, 
	.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item > a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] - 1) . "px;
	}
	
	a:hover {
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	#navigation > li > a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_text_transform'] . ";
	}
	
	#navigation > li > a > span:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] + 3) . "px;
	}
	
	#navigation li > a .cmsms-resp-nav-toggle:before {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] . "px;
	}
	
	#navigation > li.menu-item-icon > a > span > span.nav_subtitle,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
		padding-left:" . ceil(((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] + 3) * 1.4) . "px;
	}
	
	body.rtl #navigation > li.menu-item-icon > a > span > span.nav_subtitle,
	body.rtl #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
		padding-right:" . ceil(((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] + 3) * 1.4) . "px;
		padding-left:0; /* static */
	}
	
	#navigation > li > a[data-tag]:before,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[data-tag]:before {
		margin-top:" . round(((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] - ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] - 2)) / 2) . "px;
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a {
		font-weight:700; /* static */
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header nav #navigation li a {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] - 1) . "px;
			font-weight:400; /* static */
		}
		
		html #page #header nav #navigation li li li a {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] - 3) . "px;
		}
		
		html #page #header nav #navigation > li.menu-item-hide-text > a > span,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-hide-text > a > span {
			font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] . "px;
			line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] . "px;
		}
		
		html #page #header nav #navigation > li.menu-item-icon > a > span > span.nav_subtitle,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
			padding-left:" . ceil(((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] + 3) * 1.4) . "px;
		}
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	#navigation ul li a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a {
		font-weight:700; /* static */
	}
	
	#navigation > li > a > span > span.nav_subtitle,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle, 
	#navigation li > a[data-tag]:before {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] - 1) . "px;
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
		font-weight:400; /* static */
	}
	
	#navigation > li > a > span > span.nav_subtitle {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] - 2) . "px;
		font-weight:400; /* static */
	}
	
	#navigation ul li a span:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] + 3) . "px;
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] + 4) . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header nav #navigation > li.menu-item-hide-text > a > span > span.nav_subtitle,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-hide-text > a > span > span.nav_subtitle {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] - 2) . "px;
			line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] - 2) . "px;
		}
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	#header .logo .title,
	.cmsms_pricing_table .cmsms_currency,
	.cmsms_pricing_table .cmsms_price,
	.cmsms_pricing_table .cmsms_coins,
	.post.format-aside .cmsms_post_cont .cmsms_post_content,
	.post.format-status .cmsms_post_cont .cmsms_post_content, 
	.cmsms_search_post .cmsms_search_post_title, 
	.cmsms_search_post .cmsms_search_post_title a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.cmsms_dropcap {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'] . ";
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.cmsms_icon_list_items.cmsms_icon_list_icon_type_number .cmsms_icon_list_item .cmsms_icon_list_icon:before,
	.cmsms_icon_box.box_icon_type_number:before,
	.cmsms_icon_box.cmsms_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'] . ";
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_style'] . ";
	}
	
	.cmsms_dropcap.type1 {
		font-size:36px; /* static */
	}
	
	.cmsms_dropcap.type2 {
		font-size:20px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 14) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 20) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] + 30) . "px;
	}
	
	.cmsms_pricing_table .cmsms_currency,
	.cmsms_pricing_table .cmsms_price,
	.cmsms_pricing_table .cmsms_coins {
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] * 2) . "px;
	}
	
	.cmsms_pricing_table .cmsms_price {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] * 2 + 16) . "px;
		font-weight:300;
	}
	
	.cmsms_pricing_table .cmsms_currency,
	.cmsms_pricing_table .cmsms_coins {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] - 2) . "px;
		font-weight:300;
	}
	
	.cmsms_pricing_table .cmsms_pricing_item_inner:before, 
	.cmsms_profile.horizontal .profile:before {
		width:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] * 2 + 8) . "px;
		margin-left:-" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] + 4) . "px;
	}
	
	.cmsms_profile.vertical .profile:before {
		height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] * 2) . "px;
		margin-top:-" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] . "px;
	}
	
	.post .cmsms_post_format_img:before, 
	.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner:before {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] . "px;
	}
	
	.post .cmsms_post_format_img:before, 
	.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner:before {
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] . "px;
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.booking_title,
	.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap, 
	.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap, 
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_counter_wrap, 
	.cmsms_sitemap_wrap .cmsms_sitemap > li > a,
	.cmsms_search_post_number {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h2_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_text_decoration'] . ";
	}
	
	.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap {
		font-size:45px; /* static */
		line-height:60px; /* static */
		font-weight:300; /* static */
	}
	
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_counter_wrap, 
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] + 8) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] + 14) . "px;
	}
	
	.cmsms_counters.counters_type_horizontal .cmsms_counter_wrap .cmsms_counter.counter_has_icon .cmsms_counter_inner {
		padding-" . ((is_rtl()) ? 'right' : 'left') . ":" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] + 14) . "px;
	}
	
	.post .cmsms_post_cont .cmsms_post_title:before {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] . "px;
		margin-top:" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] - (int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size']) / 2) . "px;
	}
	
	.post.format-aside .cmsms_post_cont .cmsms_post_format_img, 
	.post.format-aside .cmsms_post_cont .cmsms_post_format_img:after, 
	.post.format-status .cmsms_post_cont .cmsms_post_format_img, 
	.post.format-status .cmsms_post_cont .cmsms_post_format_img:after, 
	.post.format-quote .cmsms_post_cont .cmsms_post_format_img, 
	.post.format-quote .cmsms_post_cont .cmsms_post_format_img:after {
		width:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . "px;
	}
	
	.post.format-aside .cmsms_post_cont .cmsms_post_format_img, 
	.post.format-status .cmsms_post_cont .cmsms_post_format_img, 
	.post.format-quote .cmsms_post_cont .cmsms_post_format_img {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . "px;
		margin-left:-" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] / 2) . "px;
	}
	
	.post.cmsms_masonry_type .cmsms_post_format_img:before, 
	.post.cmsms_puzzle_type .cmsms_post_format_img:before {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . "px;
	}
	
	.post.cmsms_masonry_type.format-aside .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_puzzle_type.format-aside .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_masonry_type.format-status .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_puzzle_type.format-status .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_masonry_type.format-quote .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_puzzle_type.format-quote .cmsms_post_cont .cmsms_post_format_img {
		bottom:-" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] + 16) . "px;
	}
	
	.post.cmsms_masonry_type.format-aside .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_puzzle_type.format-aside .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_masonry_type.format-aside .cmsms_post_cont .cmsms_post_format_img:after, 
	.post.cmsms_puzzle_type.format-aside .cmsms_post_cont .cmsms_post_format_img:after, 
	.post.cmsms_masonry_type.format-status .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_puzzle_type.format-status .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_masonry_type.format-status .cmsms_post_cont .cmsms_post_format_img:after, 
	.post.cmsms_puzzle_type.format-status .cmsms_post_cont .cmsms_post_format_img:after, 
	.post.cmsms_masonry_type.format-quote .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_puzzle_type.format-quote .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_masonry_type.format-quote .cmsms_post_cont .cmsms_post_format_img:after, 
	.post.cmsms_puzzle_type.format-quote .cmsms_post_cont .cmsms_post_format_img:after {
		width:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . "px;
	}
	
	.post.cmsms_masonry_type.format-aside .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_puzzle_type.format-aside .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_masonry_type.format-status .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_puzzle_type.format-status .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_masonry_type.format-quote .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_puzzle_type.format-quote .cmsms_post_cont .cmsms_post_format_img {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . "px;
		margin-left:-" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] / 2) . "px;
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.cmsms_post_info .cmsms_post_date .cmsms_year, 
	.post.cmsms_timeline_type.format-status .cmsms_post_cont .cmsms_post_content,
	.post.cmsms_timeline_type.format-aside .cmsms_post_cont .cmsms_post_content, 
	.cmsms_pricing_table .pricing_title {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	
	.post.format-quote .cmsms_post_cont .cmsms_quote_content, 
	.post.cmsms_timeline_type .cmsms_post_format_img:before, 
	.post.cmsms_timeline_type.format-quote .cmsms_post_cont .cmsms_quote_content, 
	.bypostauthor > .comment-body .alignleft:before {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
	}
	
	.post.format-quote .cmsms_post_cont .cmsms_quote_content, 
	.post.cmsms_timeline_type .cmsms_post_format_img:before, 
	.post.cmsms_timeline_type.format-quote .cmsms_post_cont .cmsms_quote_content, 
	.bypostauthor > .comment-body .alignleft:before {
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.post.cmsms_timeline_type.format-aside .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_timeline_type.format-status .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_timeline_type.format-quote .cmsms_post_cont .cmsms_post_format_img {
		bottom:-" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] + 11) . "px;
	}
	
	.portfolio .project .project_outer .project_inner .cmsms_project_header .cmsms_project_title {
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] - 2) . "px;
	}
	
	.cmsms_post_info .cmsms_post_date .cmsms_year {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] - 2) . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
	}
	
	.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_title:before {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
		margin-top:" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] - (int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size']) / 2) . "px;
	}
	
	.post.cmsms_timeline_type.format-aside .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_timeline_type.format-aside .cmsms_post_cont .cmsms_post_format_img:after, 
	.post.cmsms_timeline_type.format-status .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_timeline_type.format-status .cmsms_post_cont .cmsms_post_format_img:after, 
	.post.cmsms_timeline_type.format-quote .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_timeline_type.format-quote .cmsms_post_cont .cmsms_post_format_img:after, 
	.bypostauthor > .comment-body .alignleft:before {
		width:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.post.cmsms_timeline_type.format-aside .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_timeline_type.format-status .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_timeline_type.format-quote .cmsms_post_cont .cmsms_post_format_img, 
	.bypostauthor > .comment-body .alignleft:before {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.post.cmsms_timeline_type.format-aside .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_timeline_type.format-status .cmsms_post_cont .cmsms_post_format_img, 
	.post.cmsms_timeline_type.format-quote .cmsms_post_cont .cmsms_post_format_img {
		margin-left:-" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] / 2) . "px;
	}
	
	.blog.timeline .post .cmsms_post_info {
		width:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] + 40) . "px;
		height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] + 40) . "px;
	}
	
	.blog.timeline .post.cmsms_timeline_left .cmsms_post_info {
		right:-" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] + 40) / 2) . "px;
	}
	
	.blog.timeline .post.cmsms_timeline_right .cmsms_post_info {
		left:-" . (((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] + 40) / 2) . "px;
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a,  
	.cmsms_twitter .cmsms_twitter_item_content,
	.cmsms_twitter .cmsms_twitter_item_content a, 
	.cmsms_quotes h6.quote_title, 
	.widgettitle, 
	.post.cmsms_masonry_type.format-status .cmsms_post_cont .cmsms_post_content,
	.post.cmsms_puzzle_type.format-status .cmsms_post_cont .cmsms_post_content,
	.cmsms_posts_slider .post.format-status .cmsms_post_cont .cmsms_post_content, 
	.post.cmsms_masonry_type.format-aside .cmsms_post_cont .cmsms_post_content, 
	.post.cmsms_puzzle_type.format-aside .cmsms_post_cont .cmsms_post_content, 
	.cmsms_posts_slider .post.format-aside .cmsms_post_cont .cmsms_post_content, 
	.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > a, 
	.cmsms_sitemap_wrap .cmsms_sitemap_category > li > a, 
	.cmsms_quotes_slider.cmsms_quotes_slider_type_center .quote_content, 
	.cmsms_quotes_slider.cmsms_quotes_slider_type_center .quote_content a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	
	.post.cmsms_masonry_type.format-quote .cmsms_post_cont .cmsms_quote_content, 
	.post.cmsms_puzzle_type.format-quote .cmsms_post_cont .cmsms_quote_content, 
	.cmsms_posts_slider .post.format-quote .cmsms_post_cont .cmsms_quote_content {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . "px;
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a, 
	.cmsms_stats .cmsms_stat_wrap .cmsms_stat_title, 
	.cmsms_stats.stats_mode_bars .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap, 
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_title, 
	.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item > a,
	.post.format-chat .cmsms_post_cont .cmsms_chat .cmsms_chat_item .cmsms_chat_author_time .cmsms_chat_author, 
	.post_nav > span, 
	.post_nav > span a, 
	table caption, 
	table th, 
	table th a, 
	.cmsms_table tr.cmsms_table_row_header, 
	.cmsms_table tr.cmsms_table_row_header a, 
	.cmsms_table tr.cmsms_table_row_footer, 
	.cmsms_table tr.cmsms_table_row_footer a, 
	.cmsms_pricing_table .cmsms_period,
	.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.post.format-chat .cmsms_post_cont .cmsms_chat .cmsms_chat_item .cmsms_chat_author_time .cmsms_chat_time {
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] + 4) . "px;
	}
	
	.post_nav > span a {
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > a {
		line-height:26px; /* static */
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button, 
	dl dt, 
	table.shop_attributes th, 
	fieldset legend,
	.cmsms_post_read_more, 
	blockquote footer, 
	.cmsms_post_info .cmsms_post_date .cmsms_day_mon, 
	.post.cmsms_masonry_type.format-chat .cmsms_post_cont .cmsms_chat .cmsms_chat_item .cmsms_chat_author_time .cmsms_chat_author, 
	.post.cmsms_timeline_type.format-chat .cmsms_post_cont .cmsms_chat .cmsms_chat_item .cmsms_chat_author_time .cmsms_chat_author, 
	.post.cmsms_puzzle_type.format-chat .cmsms_post_cont .cmsms_chat .cmsms_chat_item .cmsms_chat_author_time .cmsms_chat_author, 
	.cmsms_posts_slider .post.format-chat .cmsms_post_cont .cmsms_chat .cmsms_chat_item .cmsms_chat_author_time .cmsms_chat_author, 
	.comment-edit-link, 
	.comment-reply-link, 
	#cancel-comment-reply-link, 
	.cmsms_search_post .cmsms_search_post_number_wrap .cmsms_post_type_label {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	
	.post.cmsms_masonry_type .cmsms_post_header .cmsms_post_subtitle, 
	.post.cmsms_timeline_type .cmsms_post_header .cmsms_post_subtitle, 
	.post.cmsms_puzzle_type .cmsms_post_header .cmsms_post_subtitle {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] - 1) . "px;
	}
	
	.cmsms_post_info .cmsms_post_date .cmsms_day_mon, 
	.cmsms_search_post .cmsms_search_post_number_wrap .cmsms_post_type_label {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] - 2) . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] . "px;
	}
	
	.post .cmsms_slider_post_header .cmsms_slider_post_subtitle {
		font-weight:400; /* static */
	}
	
	.post .cmsms_post_header .cmsms_post_subtitle, 
	.cmsms_search_post .cmsms_search_post_number_wrap .cmsms_post_type_label {
		text-transform:uppercase; /* static */
	}
	
	#cancel-comment-reply-link {
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsms_button,
	.cmsms_search_post_cont_info, 
	.cmsms_search_post_cont_info a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_button_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_button_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] . "px !important;
	}
	
	.cmsms_posts_slider .cmsms_slider_post_header .cmsms_slider_post_subtitle,
	.cmsms_search_post_cont_info, 
	.cmsms_search_post_cont_info a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] + 4) . "px;
	}
	
	.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item > a {
		line-height:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] + 2) . "px;
	}
	
	.cmsms_button.cmsms_but_icon_dark_bg, 
	.cmsms_button.cmsms_but_icon_light_bg, 
	.cmsms_button.cmsms_but_icon_divider, 
	.cmsms_button.cmsms_but_icon_inverse {
		padding-left:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsms_button.cmsms_but_icon_dark_bg:before, 
	.cmsms_button.cmsms_but_icon_light_bg:before, 
	.cmsms_button.cmsms_but_icon_divider:before, 
	.cmsms_button.cmsms_but_icon_inverse:before, 
	.cmsms_button.cmsms_but_icon_dark_bg:after, 
	.cmsms_button.cmsms_but_icon_light_bg:after, 
	.cmsms_button.cmsms_but_icon_divider:after, 
	.cmsms_button.cmsms_but_icon_inverse:after {
		width:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small,
	.meta_wrap,
	.meta_wrap a,
	form .formError .formErrorContent,
	.header_top_inner nav > div > ul > li a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_small_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_text_transform'] . ";
	}

	#navigation > li.menu-item-mega > div.menu-item-mega-container ul ul li.menu-item-mega-description span.menu-item-mega-description-container {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] . "px;
	}
	
	.cmsms_posts_slider .cmsms_slider_post_cont_info,
	.cmsms_posts_slider .cmsms_slider_post_cont_info a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] + 1) . "px;
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_small_font_system_font'] . " !important;
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] . "px !important;
	}
	
	.meta_wrap > div[class^=\"cmsms-icon-\"]:before,
	.meta_wrap > p[class^=\"cmsms-icon-\"]:before,
	.meta_wrap > span[class^=\"cmsms-icon-\"]:before,
	.meta_wrap > strong[class^=\"cmsms-icon-\"]:before,
	.meta_wrap > div[class*=\" cmsms-icon-\"]:before,
	.meta_wrap > p[class*=\" cmsms-icon-\"]:before,
	.meta_wrap > span[class*=\" cmsms-icon-\"]:before,
	.meta_wrap > strong[class*=\" cmsms-icon-\"]:before, 
	.meta_wrap > div[class^=\"cmsms_theme_icon_\"]:before,
	.meta_wrap > p[class^=\"cmsms_theme_icon_\"]:before,
	.meta_wrap > span[class^=\"cmsms_theme_icon_\"]:before,
	.meta_wrap > strong[class^=\"cmsms_theme_icon_\"]:before,
	.meta_wrap > div[class*=\" cmsms_theme_icon_\"]:before,
	.meta_wrap > p[class*=\" cmsms_theme_icon_\"]:before,
	.meta_wrap > span[class*=\" cmsms_theme_icon_\"]:before,
	.meta_wrap > strong[class*=\" cmsms_theme_icon_\"]:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] + 5) . "px;
	}

	.post.format-chat .cmsms_post_cont .cmsms_chat .cmsms_chat_item .cmsms_chat_author_time .cmsms_chat_time {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] - 1) . "px;
		font-weight:bold; /* static */
		text-transform:uppercase; /* static */
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header .header_top .header_top_outer .header_top_inner .header_top_right .nav_wrap nav #top_line_nav > li > a {
			font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] + 1) . "px;
			font-weight:700; /* static */
		}
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input[type=text],
	input[type=email],
	input[type=password],
	input[type=number],
	input[type=url],
	input[type=tel],
	input[type=search],
	textarea,
	select,
	option, 
	code {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_input_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_input_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input[type=text], 
	.gform_wrapper input[type=url], 
	.gform_wrapper input[type=email], 
	.gform_wrapper input[type=tel], 
	.gform_wrapper input[type=number], 
	.gform_wrapper input[type=password], 
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_system_font'] . ";
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";

	return $custom_css;
}

