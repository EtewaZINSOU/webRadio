<?php
/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function cmsms_theme_colors_secondary() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version 	1.0.0
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

/***************** Start Header Color Scheme Rules ******************/

	/* Start Header Content Color */
	.header_mid,
	.header_mid_inner .social_wrap a, 
	.header_mid_inner .search_wrap.search_opened .search_bar_wrap button:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_color']) . "
	}
	/* Finish Header Content Color */
	
	
	/* Start Header Primary Color */
	.header_mid a,
	.header_mid h1 a:hover,
	.header_mid h2 a:hover,
	.header_mid h3 a:hover,
	.header_mid h4 a:hover,
	.header_mid h5 a:hover,
	.header_mid h6 a:hover,
	.header_mid .color_2,
	.header_mid h1,
	.header_mid h2,
	.header_mid h3,
	.header_mid h4,
	.header_mid h5,
	.header_mid h6,
	.header_mid h1 a,
	.header_mid h2 a,
	.header_mid h3 a,
	.header_mid h4 a,
	.header_mid h5 a,
	.header_mid h6 a,
	.header_mid #navigation > li > a,
	.header_mid_inner .social_wrap a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
	}
	
	.header_mid .button:hover,
	.header_mid #navigation > li > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
	}
	/* Finish Header Primary Color */
	
	
	/* Start Header Rollover Color */
	.header_mid_inner .search_wrap button:before,
	.header_mid a:hover,
	.header_mid #navigation > li > a:hover,
	.header_mid #navigation > li.current-menu-item > a,
	.header_mid #navigation > li.current_page_item > a,
	.header_mid #navigation > li.menu-item-highlight > a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
		}
	}
	
	.header_mid .button,
	.header_mid #navigation > li > a > span.nav_bg_clr,
	.header_mid #navigation > li.menu-item-highlight > a > span.nav_bg_clr,
	.header_mid #navigation > li > a[data-tag]:hover:before,
	.header_mid #navigation > li.current-menu-item > a[data-tag]:before,
	.header_mid #navigation > li.menu-item-highlight > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li:hover > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
		}
	}
	/* Finish Header Rollover Color */
	
	
	/* Start Header Subtitle Color */
	.header_mid #navigation > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_subtitle']) . "
	}
	/* Finish Header Subtitle Color */
	
	
	/* Start Header Background Color */
	.header_mid .button,
	.header_mid .button:hover,
	.header_mid #navigation > li > a[data-tag]:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bg']) . "
	}
	
	.header_mid input[type=text]:focus,
	.header_mid input[type=number]:focus,
	.header_mid input[type=email]:focus,
	.header_mid input[type=password]:focus,
	.header_mid input[type=search]:focus,
	.header_mid textarea:focus,
	.header_mid_outer {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bg']) . "
	}
	/* Finish Header Background Color */
	
	
	/* Start Header Background Color on Scroll */
	.header_mid_scroll .header_mid_outer {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bg_scroll']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid_outer {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bg_scroll']) . "
		}
	}
	/* Finish Header Background Color on Scroll */
	
	
	/* Start Header Current Item Color */
	@media only screen and (min-width: 1024px) {
		.header_mid_inner #navigation > li.current-menu-item > a, 
		.header_mid_inner #navigation > li.current-menu-ancestor > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover_color']) . "
		}
	}
	/* Finish Header Current Item Color */
	
	
	/* Start Header Current Item Secondary Background Color */
	.call_us *[class^=\"cmsms-icon-\"]:before, 
	.call_us *[class*=\" cmsms-icon-\"]:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg_sec']) . "
	}
	
	.header_mid input[type=text]:focus,
	.header_mid input[type=email]:focus,
	.header_mid input[type=password]:focus,
	.header_mid input[type=search]:focus,
	.header_mid textarea:focus {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg_sec']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid_inner #navigation > li.current-menu-item > a, 
		.header_mid_inner #navigation > li.current-menu-ancestor > a {
			background: " . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg'] . ";
			background: -webkit-gradient(linear, left top, right top, from(" . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg'] . "), to(" . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg_sec'] . ")); 
			background: -webkit-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg_sec'] . "); 
			background: -moz-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg_sec'] . "); 
			background: -ms-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg_sec'] . "); 
			background: -o-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg_sec'] . "); 
			background: linear-gradient(to right, " . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg_sec'] . ");
		}
	}
	/* Finish Header Current Item Secondary Rollover Background Color */
	
	
	/* Start Header Borders Color */
	.header_mid input[type=text],
	.header_mid input[type=number],
	.header_mid input[type=email],
	.header_mid input[type=password],
	.header_mid input[type=search],
	.header_mid input[type=submit],
	.header_mid textarea,
	.header_mid select,
	.header_mid option {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_border']) . "
	}
	
	.header_mid hr,
	.header_mid .cmsms_divider {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_header_border']) . "
	}
	/* Finish Header Borders Color */
	
	
	/* Start Header Dropdown Link Color */
	.header_mid #navigation > li:not(.menu-item-mega) ul li > a[data-tag]:hover:before, 
	.header_mid #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:before,
	.header_mid #navigation > li:not(.menu-item-mega) ul li.menu-item-highlight > a[data-tag]:before,
	.header_mid #navigation > li.menu-item-mega li li:hover > a[data-tag]:hover:before,
	.header_mid #navigation > li.menu-item-mega li li.current-menu-item > a[data-tag]:before, 
	.header_mid #navigation > li.menu-item-mega li li.menu-item-highlight > a[data-tag]:before,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children:hover > a,
	.header_mid #navigation ul li a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid .cmsms-resp-nav-toggle,
		.header_mid #navigation > li > a[data-tag]:hover:before,
		.header_mid #navigation > li.current-menu-item > a[data-tag]:before,
		.header_mid #navigation > li.current_page_item > a[data-tag]:before,
		.header_mid #navigation > li.menu-item-highlight > a[data-tag]:before,
		.header_mid #navigation > li > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_link']) . "
		}
	}
	
	.header_mid #navigation ul li > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_link']) . "
		}
	}
	/* Finish Header Dropdown Link Color */
	
	
	/* Start Header Dropdown Rollover Color */
	.header_mid #navigation ul li > a:hover,
	.header_mid #navigation ul li.current-menu-item > a,
	.header_mid #navigation ul li.current_page_item > a,
	.header_mid #navigation > li li.menu-item-highlight > a,
	.header_mid #navigation > li li.menu-item-highlight > a:hover,
	.header_mid #navigation > li.menu-item-mega li > a:hover,
	.header_mid #navigation > li.menu-item-mega li li > a:hover,
	.header_mid #navigation > li.menu-item-mega > ul > li > a,
	.header_mid #navigation > li.menu-item-mega > ul > li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li.current-menu-ancestor > a,
		.header_mid #navigation ul li.current-menu-ancestor > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children.current-menu-ancestor > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children:hover > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children > a:hover,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-has-children > a[href]:hover,
		.header_mid #navigation > li > a:hover,
		.header_mid #navigation > li.current-menu-item > a,
		.header_mid #navigation > li.current_page_item > a,
		.header_mid #navigation > li.menu-item-highlight > a,
		.header_mid #navigation > li > a:hover > span > span.nav_subtitle,
		.header_mid #navigation > li.current-menu-item > a > span > span.nav_subtitle,
		.header_mid #navigation > li.current_page_item > a > span > span.nav_subtitle,
		.header_mid #navigation > li.menu-item-highlight > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-ancestor > a,
		.header_mid #navigation ul li.current-menu-ancestor > a,
		.header_mid #navigation > li.current-menu-ancestor > a,
		.header_mid #navigation > li.current-menu-ancestor > a > span > span.nav_subtitle,
		.header_mid #navigation > li.menu-item-mega > ul > li > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a,
		.header_mid #navigation ul li:hover > a,
		.header_mid #navigation > li li.menu-item-highlight:hover > a,
		.header_mid #navigation > li.menu-item-mega li:hover > a,
		.header_mid #navigation > li.menu-item-mega > ul > li:hover > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li:hover > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}
	
	.header_mid #navigation > li:not(.menu-item-mega) ul li > a[data-tag]:hover:before, 
	.header_mid #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:before,
	.header_mid #navigation > li:not(.menu-item-mega) ul li.menu-item-highlight > a[data-tag]:before,
	.header_mid #navigation > li.menu-item-mega li li:hover > a[data-tag]:hover:before,
	.header_mid #navigation > li.menu-item-mega li li.current-menu-item > a[data-tag]:before, 
	.header_mid #navigation > li.menu-item-mega li li.menu-item-highlight > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a[data-tag]:hover:before,
		.header_mid #navigation > li.current-menu-item > a[data-tag]:before,
		.header_mid #navigation > li.current_page_item > a[data-tag]:before,
		.header_mid #navigation > li.menu-item-highlight > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li:not(.menu-item-mega) ul li:hover > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}
	/* Finish Header Dropdown Rollover Color */
	
	
	/* Start Header Dropdown Subtitle Color */
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_subtitle']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_subtitle']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_subtitle']) . "
		}
	}
	/* Finish Header Dropdown Subtitle Color */
	
	
	/* Start Header Dropdown Background Color */
	.header_mid #navigation ul li > a[data-tag]:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a[data-tag]:before {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
		}
	}
	
	.header_mid input[type=text],
	.header_mid input[type=number],
	.header_mid input[type=email],
	.header_mid input[type=password],
	.header_mid input[type=search],
	.header_mid input[type=submit],
	.header_mid button,
	.header_mid textarea,
	.header_mid select,
	.header_mid option,
	.header_mid #navigation ul,
	.header_mid #navigation > li.menu-item-mega li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header .header_mid nav .cmsms-resp-nav-toggle,
		.header_mid #navigation {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li.menu-item-mega li:hover > a {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
		}
	}
	/* Finish Header Dropdown Background Color */
	
	
	/* Start Header Dropdown Rollover Background Color */
	.header_mid #navigation ul li > a:after {
		background: " . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg'] . ";
		background: -webkit-gradient(linear, left top, right top, from(" . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg'] . "), to(" . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg_sec'] . ")); 
		background: -webkit-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg_sec'] . "); 
		background: -moz-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg_sec'] . "); 
		background: -ms-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg_sec'] . "); 
		background: -o-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg_sec'] . "); 
		background: linear-gradient(to right, " . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg_sec'] . ");
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a:hover,
		.header_mid #navigation > li.current-menu-item > a,
		.header_mid #navigation > li.current_page_item > a,
		.header_mid #navigation > li > a > span.nav_bg_clr,
		.header_mid #navigation > li.menu-item-highlight > a > span.nav_bg_clr, 
		.header_mid #navigation > li.menu-item-mega > div > ul > li > a:hover, 
		.header_mid #navigation > li.menu-item-mega > div > ul > li.current-menu-item > a {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover_bg']) . "
		}
	}
	/* Finish Header Dropdown Rollover Background Color */
	
	
	/* Start Header Dropdown Borders Color */
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation .cmsms-resp-nav-toggle, 
		.header_mid #navigation li a, 
		.header_mid #navigation > li > a:hover,
		.header_mid #navigation > li.current-menu-item > a,
		.header_mid #navigation > li.current_page_item > a {
			" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_border']) . "
		}
	}
	/* Finish Header Dropdown Borders Color */
	
	
	/* Start Header Custom Rules */
	.header_mid ::selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bg']) . "
	}
	
	.header_mid ::-moz-selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bg']) . "
	}
	";
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_shadow']) {
	$custom_css .= "
	.header_mid #navigation > li:not(.menu-item-mega) ul,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container {
		-webkit-box-shadow:0 1px 7px 0 rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_shadow_opacity'] / 100) . ");
		-moz-box-shadow:0 1px 7px 0 rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_shadow_opacity'] / 100) . ");
		box-shadow:0 1px 7px 0 rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_shadow_opacity'] / 100) . ");
	}
	";
	}
	
	
	$custom_css .= "
	/* Finish Header Custom Rules */

/***************** Finish Header Color Scheme Rules ******************/



/***************** Start Header Bottom Color Scheme Rules ******************/

	/* Start Header Bottom Content Color */
	.header_bot, 
	.header_bot .social_wrap a, 
	.header_bot .search_wrap .search_bar_wrap button:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_color']) . "
	}
	/* Finish Header Bottom Content Color */
	
	
	/* Start Header Bottom Primary Color */
	.header_bot a,
	.header_bot h1 a:hover,
	.header_bot h2 a:hover,
	.header_bot h3 a:hover,
	.header_bot h4 a:hover,
	.header_bot h5 a:hover,
	.header_bot h6 a:hover,
	.header_bot .color_2,
	.header_bot h1,
	.header_bot h2,
	.header_bot h3,
	.header_bot h4,
	.header_bot h5,
	.header_bot h6,
	.header_bot h1 a,
	.header_bot h2 a,
	.header_bot h3 a,
	.header_bot h4 a,
	.header_bot h5 a,
	.header_bot h6 a,
	.header_bot #navigation > li > a,
	.header_bot .social_wrap a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_link']) . "
	}
	
	.header_bot .button:hover,
	.header_bot #navigation > li > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_link']) . "
	}
	
	.header_bot input[type=text]:focus,
	.header_bot input[type=email]:focus,
	.header_bot input[type=password]:focus,
	.header_bot input[type=search]:focus,
	.header_bot textarea:focus {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_link']) . "
	}
	/* Finish Header Bottom Primary Color */
	
	
	/* Start Header Bottom Rollover Color */
	.header_bot a:hover,
	.header_bot .button,
	.header_bot #navigation > li > a:hover,
	.header_bot #navigation > li.current-menu-item > a,
	.header_bot #navigation > li.current_page_item > a,
	.header_bot #navigation > li.menu-item-highlight > a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li.current-menu-ancestor > a,
		.header_bot #navigation > li.current-menu-ancestor > a > span > span.nav_subtitle,
		.header_bot #navigation > li:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_hover']) . "
		}
	}
	
	.header_bot #navigation > li > a > span.nav_bg_clr,
	.header_bot #navigation > li.menu-item-highlight > a > span.nav_bg_clr, 
	.header_bot #navigation > li > a[data-tag]:hover:before, 
	.header_bot #navigation > li.current-menu-item > a[data-tag]:before,
	.header_bot #navigation > li.menu-item-highlight > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li:hover > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_hover']) . "
		}
	}
	/* Finish Header Bottom Rollover Color */
	
	
	/* Start Header Bottom Subtitle Color */
	.header_bot #navigation > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_subtitle']) . "
	}
	/* Finish Header Bottom Subtitle Color */
	
	
	/* Start Header Bottom Background Color */
	.header_bot #navigation > li > a[data-tag]:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_bg']) . "
	}
	
	.header_bot input[type=text]:focus,
	.header_bot input[type=number]:focus,
	.header_bot input[type=email]:focus,
	.header_bot input[type=password]:focus,
	.header_bot input[type=search]:focus,
	.header_bot textarea:focus,
	.header_bot_outer {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_bg']) . "
	}
	/* Finish Header Bottom Background Color */
	
	
	/* Start Header Bottom Background Color on Scroll */
	.header_bot_scroll .header_bot_outer {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_bg_scroll']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot_outer {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_bg_scroll']) . "
		}
	}
	/* Finish Header Bottom Background Color on Scroll */
	
	
	/* Start Header Bottom Rollover Background Color */
	.header_bot .search_wrap.search_opened .search_bar_wrap, 
	.header_bot .search_wrap .search_bar_wrap input[type=text],
	.header_bot .search_wrap .search_bar_wrap input[type=text]:focus {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_hover_bg']) . "
	}
	
	@media only screen and (max-width: 767px) {
		#header .header_bot .search_wrap .search_bar_wrap {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover_bg']) . "
		}
	}
	/* Finish Header Bottom Rollover Background Color */
	
	
	/* Start Header Borders Color */
	.header_bot .search_wrap .search_bar_wrap {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_border']) . "
	}
	
	.header_bot,
	.header_bot input[type=text],
	.header_bot input[type=number],
	.header_bot input[type=email],
	.header_bot input[type=password],
	.header_bot input[type=seach],
	.header_bot input[type=submit],
	.header_bot button,
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_border']) . "
	}
	
	.header_bot hr,
	.header_bot .cmsms_divider {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_border']) . "
	}
	/* Finish Header Bottom Borders Color */
	
	
	/* Start Header Bottom Dropdown Link Color */
	.header_bot #navigation > li:not(.menu-item-mega) ul li > a[data-tag]:hover:before, 
	.header_bot #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:before,
	.header_bot #navigation > li:not(.menu-item-mega) ul li.menu-item-highlight > a[data-tag]:before,
	.header_bot #navigation > li.menu-item-mega li li:hover > a[data-tag]:hover:before,
	.header_bot #navigation > li.menu-item-mega li li.current-menu-item > a[data-tag]:before, 
	.header_bot #navigation > li.menu-item-mega li li.menu-item-highlight > a[data-tag]:before,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-has-children > a[href]:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children:hover > a,
	.header_bot #navigation ul li a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation .cmsms-resp-nav-toggle,
		.header_bot #navigation > li > a[data-tag]:hover:before,
		.header_bot #navigation > li.current-menu-item > a[data-tag]:before,
		.header_bot #navigation > li.current_page_item > a[data-tag]:before,
		.header_bot #navigation > li.menu-item-highlight > a[data-tag]:before,
		.header_bot #navigation > li > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_link']) . "
		}
	}
	
	.header_bot #navigation ul li > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_link']) . "
		}
	}
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-ancestor.menu-item-has-children > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_link']) . "
		}
	}
	/* Finish Header Bottom Dropdown Link Color */
	
	
	/* Start Header Bottom Dropdown Rollover Color */
	.header_bot #navigation ul li > a:hover,
	.header_bot #navigation ul li.current-menu-item > a,
	.header_bot #navigation ul li.current_page_item > a,
	.header_bot #navigation > li li.menu-item-highlight > a,
	.header_bot #navigation > li li.menu-item-highlight > a:hover,
	.header_bot #navigation > li.menu-item-mega li > a:hover,
	.header_bot #navigation > li.menu-item-mega li li > a:hover,
	.header_bot #navigation > li.menu-item-mega > ul > li > a,
	.header_bot #navigation > li.menu-item-mega > ul > li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li.current-menu-ancestor > a,
		.header_bot #navigation ul li.current-menu-ancestor > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children.current-menu-ancestor > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children:hover > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children > a:hover,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-has-children > a[href]:hover,
		.header_bot #navigation > li > a:hover,
		.header_bot #navigation > li.current-menu-item > a,
		.header_bot #navigation > li.current_page_item > a,
		.header_bot #navigation > li.menu-item-highlight > a,
		.header_bot #navigation > li > a:hover > span > span.nav_subtitle,
		.header_bot #navigation > li.current-menu-item > a > span > span.nav_subtitle,
		.header_bot #navigation > li.current_page_item > a > span > span.nav_subtitle,
		.header_bot #navigation > li.menu-item-highlight > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li.menu-item-mega > ul > li > a,
		.header_bot #navigation ul li:hover > a,
		.header_bot #navigation > li li.menu-item-highlight:hover > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-ancestor > a,
		.header_bot #navigation ul li.current-menu-ancestor > a,
		.header_bot #navigation > li.menu-item-mega li:hover > a,
		.header_bot #navigation > li.menu-item-mega > ul > li:hover > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li:hover > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
	}
	
	.header_bot #navigation > li:not(.menu-item-mega) ul li > a[data-tag]:hover:before, 
	.header_bot #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:before,
	.header_bot #navigation > li:not(.menu-item-mega) ul li.menu-item-highlight > a[data-tag]:before,
	.header_bot #navigation > li.menu-item-mega li li:hover > a[data-tag]:hover:before,
	.header_bot #navigation > li.menu-item-mega li li.current-menu-item > a[data-tag]:before, 
	.header_bot #navigation > li.menu-item-mega li li.menu-item-highlight > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a[data-tag]:hover:before,
		.header_bot #navigation > li.current-menu-item > a[data-tag]:before,
		.header_bot #navigation > li.current_page_item > a[data-tag]:before,
		.header_bot #navigation > li.menu-item-highlight > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li:not(.menu-item-mega) ul li:hover > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
	}
	/* Finish Header Bottom Dropdown Rollover Color */
	
	
	/* Start Header Bottom Dropdown Subtitle Color */
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_subtitle']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_subtitle']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_subtitle']) . "
		}
	}
	/* Finish Header Bottom Dropdown Subtitle Color */
	
	
	/* Start Header Bottom Dropdown Background Color */
	.header_bot #navigation ul li > a[data-tag]:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a[data-tag]:before {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
		}
	}
	
	.header_bot input[type=text],
	.header_bot input[type=number],
	.header_bot input[type=email],
	.header_bot input[type=password],
	.header_bot input[type=search],
	.header_bot input[type=submit],
	.header_bot button,
	.header_bot textarea,
	.header_bot select,
	.header_bot option,
	.header_bot #navigation ul,
	.header_bot #navigation > li.menu-item-mega li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header .header_bot nav .cmsms-resp-nav-toggle,
		.header_bot #navigation {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li.menu-item-mega li:hover > a {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
		}
	}
	/* Finish Header Bottom Dropdown Background Color */
	
	
	/* Start Header Bottom Dropdown Rollover Background Color */
	.header_bot #navigation ul li > a:after {
		background: " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . ";
		background: -webkit-gradient(linear, left top, right top, from(" . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . "), to(" . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg_sec'] . ")); 
		background: -webkit-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg_sec'] . "); 
		background: -moz-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg_sec'] . "); 
		background: -ms-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg_sec'] . "); 
		background: -o-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg_sec'] . "); 
		background: linear-gradient(to right, " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg_sec'] . ");
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a > span.nav_bg_clr,
		.header_bot #navigation > li.menu-item-highlight > a > span.nav_bg_clr {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg']) . "
		}
		
		.header_bot #navigation > li > a:after {
			background: " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . ";
			background: -webkit-gradient(linear, left top, right top, from(" . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . "), to(" . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg_sec'] . ")); 
			background: -webkit-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg_sec'] . "); 
			background: -moz-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg_sec'] . "); 
			background: -ms-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg_sec'] . "); 
			background: -o-linear-gradient(left, " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg_sec'] . "); 
			background: linear-gradient(to right, " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg'] . ", " . $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover_bg_sec'] . ");
		}
	}
	/* Finish Header Bottom Dropdown Rollover Background Color */
	
	
	/* Start Header Bottom Dropdown Borders Color */
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation .cmsms-resp-nav-toggle,
		.header_bot #navigation li a, 
		.header_bot #navigation > li > a:hover,
		.header_bot #navigation > li.current-menu-item > a,
		.header_bot #navigation > li.current_page_item > a {
			" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_border']) . "
		}
	}
	/* Finish Header Bottom Dropdown Borders Color */
	
	
	/* Start Header Bottom Custom Rules */
	.header_bot ::selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_bg']) . "
	}
	
	.header_bot ::-moz-selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_bg']) . "
	}
	";
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_shadow']) {
	$custom_css .= "
	.header_bot #navigation > li:not(.menu-item-mega) ul,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container {
		-webkit-box-shadow:0 1px 7px 0 rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_shadow_opacity'] / 100) . ");
		-moz-box-shadow:0 1px 7px 0 rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_shadow_opacity'] / 100) . ");
		box-shadow:0 1px 7px 0 rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_shadow_opacity'] / 100) . ");
	}
	";
	}
	
	
	$custom_css .= "
	/* Finish Header Bottom Custom Rules */

/***************** Finish Header Bottom Color Scheme Rules ******************/



/***************** Start Header Top Color Scheme Rules ******************/

	/* Start Header Top Content Color */
	.header_top,
	.header_top_inner .meta_wrap, 
	.header_top_inner .social_wrap a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_color']) . "
	}
	/* Finish Header Top Content Color */
	
	
	/* Start Header Top Primary Color */
	.header_top a,
	.header_top h1 a:hover,
	.header_top h2 a:hover,
	.header_top h3 a:hover,
	.header_top h4 a:hover,
	.header_top h5 a:hover,
	.header_top h6 a:hover,
	.header_top .color_2,
	.header_top h1,
	.header_top h2,
	.header_top h3,
	.header_top h4,
	.header_top h5,
	.header_top h6,
	.header_top h1 a,
	.header_top h2 a,
	.header_top h3 a,
	.header_top h4 a,
	.header_top h5 a,
	.header_top h6 a,
	.header_top_inner .meta_wrap a, 
	.responsive_top_nav, 
	.header_top #top_line_nav > li > a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
	}
	
	.header_top .button:hover {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
	}
	
	.header_top input[type=text]:focus,
	.header_top input[type=number]:focus,
	.header_top input[type=email]:focus,
	.header_top input[type=password]:focus,
	.header_top input[type=search]:focus,
	.header_top textarea:focus {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
	}
	/* Finish Header Top Primary Color */
	
	
	/* Start Header Top Rollover Color */
	.meta_wrap > div[class^=\"cmsms-icon-\"]:before,
	.meta_wrap > div[class^=\"cmsms_theme_icon_\"]:before,
	.meta_wrap > div[class*=\"cmsms-icon-\"]:before,
	.meta_wrap > div[class*=\"cmsms_theme_icon_\"]:before,
	.responsive_top_nav:hover,
	.responsive_top_nav.active, 
	.header_top a:hover,
	.header_top .button,
	.header_top_inner .meta_wrap a:hover, 
	.header_top_inner .social_wrap a:hover, 
	.header_top #top_line_nav > li > a:hover,
	.header_top #top_line_nav > li.current-menu-item > a,
	.header_top #top_line_nav > li.current_page_item > a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav > li:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_hover']) . "
		}
	}
	
	.header_top_but .cmsms_top_arrow_pixel, 
	.header_top_but .cmsms_bot_arrow_pixel {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_hover']) . "
	}
	
	.header_top_but .cmsms_top_arrow_pixel:before, 
	.header_top_but .cmsms_top_arrow_pixel:after, 
	.header_top_but .cmsms_top_arrow_pixel span:before, 
	.header_top_but .cmsms_top_arrow_pixel span:after, 
	.header_top_but .cmsms_bot_arrow_pixel:before, 
	.header_top_but .cmsms_bot_arrow_pixel:after, 
	.header_top_but .cmsms_bot_arrow_pixel span:before, 
	.header_top_but .cmsms_bot_arrow_pixel span:after {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_hover']) . "
	}
	/* Finish Header Top Rollover Color */
	
	
	/* Start Header Top Background Color */
	.header_top #top_line_nav > li > a > span.cmsms_count {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_bg']) . "
	}
	
	.header_top input[type=text]:focus,
	.header_top input[type=number]:focus,
	.header_top input[type=email]:focus,
	.header_top input[type=password]:focus,
	.header_top input[type=search]:focus,
	.header_top textarea:focus,
	.header_top {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_bg']) . "
	}
	/* Finish Header Top Background Color */
	
	
	/* Start Header Top Borders Color */
	.header_top input[type=text],
	.header_top input[type=number],
	.header_top input[type=email],
	.header_top input[type=password],
	.header_top input[type=search],
	.header_top input[type=submit],
	.header_top button,
	.header_top textarea,
	.header_top select,
	.header_top option {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_border']) . "
	}
	
	.header_top,
	.header_top hr,
	.header_top .cmsms_divider {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_border']) . "
	}
	/* Finish Header Top Borders Color */
	
	
	/* Start Header Top Dropdown Link Color */
	.header_top #top_line_nav ul li a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top #top_line_nav > li > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_link']) . "
		}
	}
	/* Finish Header Top Dropdown Link Color */
	
	
	/* Start Header Top Dropdown Rollover Color */
	.header_top #top_line_nav ul li > a:hover,
	.header_top #top_line_nav ul li.current-menu-item > a,
	.header_top #top_line_nav ul li.current_page_item > a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top #top_line_nav > li > a:hover,
		.header_top #top_line_nav > li.current-menu-item > a,
		.header_top #top_line_nav > li.current_page_item > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_hover']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav ul li:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_hover']) . "
		}
	}
	/* Finish Header Top Dropdown Rollover Color */
	
	
	/* Start Header Top Dropdown Background Color */
	.header_top input[type=text],
	.header_top input[type=number],
	.header_top input[type=email],
	.header_top input[type=password],
	.header_top input[type=search],
	.header_top input[type=submit],
	.header_top button,
	.header_top textarea,
	.header_top select,
	.header_top option {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top #top_line_nav {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav ul {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_bg']) . "
		}
	}
	/* Finish Header Top Dropdown Background Color */
	
	
	/* Start Header Top Dropdown Border Color */
	.responsive_top_nav {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_border']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top .header_top_outer .header_top_inner .header_top_left, 
		.header_top .header_top_outer .header_top_inner .header_top_right, 
		.header_top #top_line_nav li a, 
		.header_top #top_line_nav > li > a:hover,
		.header_top #top_line_nav > li.current-menu-item > a,
		.header_top #top_line_nav > li.current_page_item > a {
			" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_border']) . "
		}
	}
	
	.header_top #top_line_nav ul li a {
		" . cmsms_color_css('border-top-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_border']) . "
	}
	/* Finish Header Top Dropdown Border Color */
	
	
	/* Start Header Top Custom Rules */
	.header_top ::selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_bg']) . "
	}
	
	.header_top ::-moz-selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_bg']) . "
	}
	";
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_shadow']) {
	$custom_css .= "
	.header_top_inner nav > div > ul > li ul {
		-webkit-box-shadow:0 1px 7px 0 rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_shadow_opacity'] / 100) . ");
		-moz-box-shadow:0 1px 7px 0 rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_shadow_opacity'] / 100) . ");
		box-shadow:0 1px 7px 0 rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_shadow_opacity'] / 100) . ");
	}
	";
	}
	
	
	$custom_css .= "
	/* Finish Header Top Custom Rules */

/***************** Finish Header Top Color Scheme Rules ******************/

";
	
	
	return $custom_css;
}

