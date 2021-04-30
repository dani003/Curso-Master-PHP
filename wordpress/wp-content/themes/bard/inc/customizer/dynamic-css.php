<?php

function bard_dynamic_css() {


/*
** Reusable Functions =====
*/

// true/false validaiton
function bard_true_false( $option ) {
	if ( $option === true ) {
		return true;
	} else {
		return false;
	}
}

// CSS
$css = '';

/*
** Colors =====
*/

	// Body
	if ( ! get_theme_mod('background_color') ) {
		$css .= '
			body {
				background-color: #ffffff;
			}
		';
	}

	// Top Bar
	$css .= '

		#top-bar {
		  background-color: #ffffff;
		}

		#top-bar a {
		  color: #000000;
		}

		#top-bar a:hover,
		#top-bar li.current-menu-item > a,
		#top-bar li.current-menu-ancestor > a,
		#top-bar .sub-menu li.current-menu-item > a,
		#top-bar .sub-menu li.current-menu-ancestor> a {
		  color: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}
		
		#top-menu .sub-menu,
		#top-menu .sub-menu a {
		  	background-color: #ffffff;
			border-color: '. esc_html(bard_hex2rgba( '#000000', 0.05 )) .';
		}
	';

	// Page Header
	$header_text_color = get_header_textcolor();

	if ( $header_text_color === 'blank' ) {
		$css .= '
			.header-logo a,
			.site-description,
			.header-socials-icon {
				color: #111111;
			}

			.site-description:before,
			.site-description:after {
				background: #111111;
			}
		';	
	} else {
		$css .= '
			.header-logo a,
			.site-description,
			.header-socials-icon {
				color: #'. esc_html( $header_text_color ) .';
			}

			.site-description:before,
			.site-description:after {
				background: #'. esc_html( $header_text_color ) .';
			}
		';			
	}

	// Header Text Hover Color
	$css .= '
		.header-logo a:hover,
		.header-socials-icon:hover {
			color: '. esc_html(bard_options( 'colors_header_text_hover' )) .';
		}
	';

	$css .= '
		.entry-header {
			background-color: '. esc_html(bard_options( 'colors_header_bg' )) .';
		}
	';
	
	// Main Navigation
	$css .= '
		#main-nav {
			background-color: #ffffff;
			box-shadow: 0px 1px 5px '. esc_html(bard_hex2rgba( '#000000', 0.1 )) .';
		}

		#main-nav a,
		#main-nav .svg-inline--fa,
		#main-nav #s {
			color: #000000;
		}

		.main-nav-sidebar div span,
		.sidebar-alt-close-btn span,
		.btn-tooltip {
			background-color: #000000;
		}

		.btn-tooltip:before {
			border-top-color: #000000;
		}

		#main-nav a:hover,
		#main-nav .svg-inline--fa:hover,
		#main-nav li.current-menu-item > a,
		#main-nav li.current-menu-ancestor > a,
		#main-nav .sub-menu li.current-menu-item > a,
		#main-nav .sub-menu li.current-menu-ancestor > a {
			color: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}

		.main-nav-sidebar:hover div span {
			background-color: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}

		#main-menu .sub-menu,
		#main-menu .sub-menu a {
			background-color: #ffffff;
			border-color: '. esc_html(bard_hex2rgba( '#000000', 0.05 )) .';
		}

		#main-nav #s {
			background-color: #ffffff;
		}

		#main-nav #s::-webkit-input-placeholder { /* Chrome/Opera/Safari */
			color: '. esc_html(bard_hex2rgba( '#000000', 0.7 )) .';
		}
		#main-nav #s::-moz-placeholder { /* Firefox 19+ */
			color: '. esc_html(bard_hex2rgba( '#000000', 0.7 )) .';
		}
		#main-nav #s:-ms-input-placeholder { /* IE 10+ */
			color: '. esc_html(bard_hex2rgba( '#000000', 0.7 )) .';
		}
		#main-nav #s:-moz-placeholder { /* Firefox 18- */
			color: '. esc_html(bard_hex2rgba( '#000000', 0.7 )) .';
		}
	';

	// Content
	$css .= '
		/* Background */
		.sidebar-alt,
		.main-content,
		.featured-slider-area,
		#featured-links,
		.page-content select,
		.page-content input,
		.page-content textarea {
			background-color: '. esc_html(bard_options( 'colors_content_bg' )) .';
		}

		.featured-link .cv-inner {
			border-color: '. esc_html(bard_hex2rgba( bard_options( 'colors_content_bg' ), 0.4 )) .';
		}

		.featured-link:hover .cv-inner {
			border-color: '. esc_html(bard_hex2rgba( bard_options( 'colors_content_bg' ), 0.8 )) .';
		}

		#featured-links h6 {
			background-color: #ffffff;
			color: #000000;
		}

		/* Text */
		.page-content,
		.page-content select,
		.page-content input,
		.page-content textarea,
		.page-content .post-author a,
		.page-content .bard-widget a,
		.page-content .comment-author {
			color: #464646;
		}

		/* Title */
		.page-content h1,
		.page-content h2,
		.page-content h3,
		.page-content h4,
		.page-content h5,
		.page-content h6,
		.page-content .post-title a,
		.page-content .post-author a,
		.page-content .author-description h3 a,
		.page-content .related-posts h5 a,
		.page-content .blog-pagination .previous-page a,
      	.page-content .blog-pagination .next-page a,
      	blockquote,
		.page-content .post-share a,
		.page-content .read-more a {
			color: #030303;
		}

		.widget_wysija .widget-title h4:after {
			background-color: #030303;
		}

		.page-content .read-more a:hover,
		.page-content .post-title a:hover {
			color: '. esc_html( bard_hex2rgba( '#030303', 0.75 ) ) .';
		}
	
		/* Meta */
		.page-content .post-author,
		.page-content .post-comments,
		.page-content .post-date,
		.page-content .post-meta,
		.page-content .post-meta a,
		.page-content .related-post-date,
		.page-content .comment-meta a,
		.page-content .author-share a,
		.page-content .post-tags a,
		.page-content .tagcloud a,
		.widget_categories li,
		.widget_archive li,
		.ahse-subscribe-box p,
		.rpwwt-post-author,
		.rpwwt-post-categories,
		.rpwwt-post-date,
		.rpwwt-post-comments-number,
		.copyright-info,
		#page-footer .copyright-info a,
		.footer-menu-container,
		#page-footer .footer-menu-container a,
		.single-navigation span,
		.comment-notes {
			color: #a1a1a1;
		}

		.page-content input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
		  color: #a1a1a1;
		}
		.page-content input::-moz-placeholder { /* Firefox 19+ */
		  color: #a1a1a1;
		}
		.page-content input:-ms-input-placeholder { /* IE 10+ */
		  color: #a1a1a1;
		}
		.page-content input:-moz-placeholder { /* Firefox 18- */
		  color: #a1a1a1;
		}
		
	
		/* Accent */
		a,
		.post-categories,
		#page-wrap .bard-widget.widget_text a,
		.scrolltop,
		.required {
			color: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}
		
		/* Disable TMP
		.page-content .elementor a,
		.page-content .elementor a:hover {
			color: inherit;
		}
		*/

		.ps-container > .ps-scrollbar-y-rail > .ps-scrollbar-y,
		.read-more a:after {
			background: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}

		a:hover,
		.scrolltop:hover {
			color: '. esc_html(bard_hex2rgba( bard_options( 'colors_content_accent' ), 0.8 )) .';
		}

		blockquote {
			border-color: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}

		.widget-title h4 {
		  border-top-color: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}


		/* Selection */
		::-moz-selection {
			color: #ffffff;
			background: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}
		::selection {
			color: #ffffff;
			background: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}

		/* Border */
		.page-content .post-footer,
		.blog-list-style,
		.page-content .author-description,
		.page-content .related-posts,
		.page-content .entry-comments,
		.page-content .bard-widget li,
		.page-content #wp-calendar,
		.page-content #wp-calendar caption,
		.page-content #wp-calendar tbody td,
		.page-content .widget_nav_menu li a,
		.page-content .tagcloud a,
		.page-content select,
		.page-content input,
		.page-content textarea,
		.post-tags a,
		.gallery-caption,
		.wp-caption-text,
		table tr,
		table th,
		table td,
		pre,
		.single-navigation {
			border-color: #e8e8e8;
		}

		#main-menu > li:after,
		.border-divider,
		hr {
			background-color: #e8e8e8;
		}

		/* Buttons */
		.widget_search .svg-fa-wrap,
		.widget_search #searchsubmit,
		.wp-block-search button,
		.page-content .submit,
		.page-content .blog-pagination.numeric a,
		.page-content .post-password-form input[type="submit"],
		.page-content .wpcf7 [type="submit"] {
			color: #ffffff;
			background-color: #333333;
		}
		.page-content .submit:hover,
		.page-content .blog-pagination.numeric a:hover,
		.page-content .blog-pagination.numeric span,
		.page-content .bard-subscribe-box input[type="submit"],
		.page-content .widget_wysija input[type="submit"],
		.page-content .post-password-form input[type="submit"]:hover,
		.page-content .wpcf7 [type="submit"]:hover {
			color: #ffffff;
			background-color: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}


		/* Image Overlay */
		.image-overlay,
		#infscr-loading,
		.page-content h4.image-overlay {
			color: #ffffff;
			background-color: '. esc_html(bard_hex2rgba( '#494949', 0.2 )) .';
		}

		.image-overlay a,
		.post-slider .prev-arrow,
		.post-slider .next-arrow,
		.page-content .image-overlay a,
		#featured-slider .slider-dots {
			color: #ffffff;
		}

		.slide-caption {
			background: '. esc_html(bard_hex2rgba( '#ffffff', 0.95 )) .';
		}

		#featured-slider .prev-arrow,
		#featured-slider .next-arrow,
		#featured-slider .slick-active,
		.slider-title:after {
			background: #ffffff;
		}
	';

	// Footer
	$css .= '	
		.footer-socials,
		.footer-widgets {
			background: #ffffff;
		}

		.instagram-title {
			background: '. esc_html(bard_hex2rgba( '#ffffff', 0.85 )) .';
		}

		#page-footer,
		#page-footer a,
		#page-footer select,
		#page-footer input,
		#page-footer textarea {
			color: #222222;
		}

		#page-footer #s::-webkit-input-placeholder { /* Chrome/Opera/Safari */
		  color: #222222;
		}
		#page-footer #s::-moz-placeholder { /* Firefox 19+ */
		  color: #222222;
		}
		#page-footer #s:-ms-input-placeholder { /* IE 10+ */
		  color: #222222;
		}
		#page-footer #s:-moz-placeholder { /* Firefox 18- */
		  color: #222222;
		}

		/* Title */
		#page-footer h1,
		#page-footer h2,
		#page-footer h3,
		#page-footer h4,
		#page-footer h5,
		#page-footer h6,
		#page-footer .footer-socials a  {
			color: #111111;
		}

		#page-footer a:hover {
			color: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}

		/* Border */
		#page-footer a,
		#page-footer .bard-widget li,
		#page-footer #wp-calendar,
		#page-footer #wp-calendar caption,
		#page-footer #wp-calendar tbody td,
		#page-footer .widget_nav_menu li a,
		#page-footer select,
		#page-footer input,
		#page-footer textarea,
		#page-footer .widget-title h4:before,
		#page-footer .widget-title h4:after,
		.alt-widget-title,
		.footer-widgets {
			border-color: #e8e8e8;
		}
		
		.sticky,
		.footer-copyright,
		.bard-widget.widget_wysija {
			background-color: #f6f6f6;
		}

	';

	// Preloader
	$css .= '
		.bard-preloader-wrap {
			background-color: #ffffff;
		}
	';


/*
** General Layouts =====
*/

	// Blog Gutter
	$blog_page_gutter_horz = 32;
	$blog_page_gutter_vert = 35;

	// Site Width
	$css .= '
		.boxed-wrapper {
			max-width: 1160px;
		}
	';
	
	// Sidebar Width
	$css .= '
		.sidebar-alt {
			max-width: '. ( (int)bard_options( 'general_sidebar_width' ) + 70 ) .'px;
			left: -'. ( (int)bard_options( 'general_sidebar_width' ) + 70 ) .'px; 
			padding: 85px 35px 0px;
		}

		.sidebar-left,
		.sidebar-right {
			width: '. ( (int)bard_options( 'general_sidebar_width' ) + $blog_page_gutter_horz ) .'px;
		}
	';

	// Both Sidebars
	if ( is_active_sidebar( 'sidebar-left' ) && is_active_sidebar( 'sidebar-right' ) ) {
		$css .= '
			.main-container {
				width: calc(100% - '. ( ( (int)bard_options( 'general_sidebar_width' ) + $blog_page_gutter_horz ) * 2 ) .'px);
				width: -webkit-calc(100% - '. ( ( (int)bard_options( 'general_sidebar_width' ) + $blog_page_gutter_horz ) * 2 ) .'px);
			}
		';

	// Left or Right
	} else if ( is_active_sidebar( 'sidebar-left' ) || is_active_sidebar( 'sidebar-right' ) || bard_is_preview() ) {
		$css .= '
			.main-container {
				width: calc(100% - '. ( (int)bard_options( 'general_sidebar_width' ) + $blog_page_gutter_horz ) .'px);
				width: -webkit-calc(100% - '. ( (int)bard_options( 'general_sidebar_width' ) + $blog_page_gutter_horz ) .'px);
			}
		';

	// No Sidebars
	} else {
		$css .= '
			.main-container {
				width: 100%;
			}
		';
	}

	// Padding
	$css .= '
		#top-bar > div,
		#main-nav > div,
		#featured-links,
		.main-content,
		.page-footer-inner,
		.featured-slider-area.boxed-wrapper {
			padding-left: 40px;
			padding-right: 40px;
		}
	';

	// List Layout
	if ( strpos( bard_options( 'general_home_layout' ), 'list' ) !== false ) {
		$css .= '
			.blog-list-style {
				width: 100%;
				padding-bottom: 35px;
			}

			.blog-list-style .has-post-thumbnail .post-media {
				float: left;
				max-width: 300px;
				width: 100%;
			}

			.blog-list-style .has-post-thumbnail .post-content-wrap {
				width: calc(100% - 300px);
				width: -webkit-calc(100% - 300px);
				float: left;
				padding-left: 32px;
			}

			.blog-list-style .post-header, 
			.blog-list-style .read-more {
				text-align: left;
			}
		';

		if ( is_rtl() ) {
			$css .= '
				.blog-list-style .post-media {
					float: right;
				}

				.blog-list-style .post-content-wrap {
					float: right;
					padding-left: 0;
					padding-right: 32px;

				}

				.blog-list-style .post-header, 
				.blog-list-style .read-more {
					text-align: right;
				}
			';

		}
	}

	// Instagram Widget
	if ( 'theme' === bard_options( 'general_instagram_style' ) ) {
		$css .= '
			.bard-instagram-widget #sb_instagram {
			  max-width: none !important;
			}

			.bard-instagram-widget #sbi_images {
			  display: -webkit-box;
			  display: -ms-flexbox;
			  display: flex;
			}

			.bard-instagram-widget #sbi_images .sbi_photo {
			  height: auto !important;
			}

			.bard-instagram-widget #sbi_images .sbi_photo img {
			  display: block !important;
			}

			.bard-widget #sbi_images .sbi_photo {
			  height: auto !important;
			}

			.bard-widget #sbi_images .sbi_photo img {
			  display: block !important;
			}
		';
	}


/*
** Top Bar =====
*/

	if ( bard_options( 'main_nav_label' ) === true || ! has_nav_menu('top') || bard_options( 'top_bar_show_menu' ) === false ) {
		$css .= "
		@media screen and ( max-width: 979px ) {
			.top-bar-socials {
				float: none !important;
			}

			.top-bar-socials a {
				line-height: 40px !important;
			}
		}";
	}


/*
** Header Image =====
*/
	// Height / Background
	$css .= '
		.entry-header {
			height: 450px;
			background-image: url('. esc_url( get_header_image() ) .');
			background-size: '. esc_html(bard_options( 'header_image_bg_image_size' )) .';

		}
	';

	// Center if cover
	if ( esc_html(bard_options( 'header_image_bg_image_size' )) === 'cover' ) {
		$css .= '
			.entry-header {
				background-position: center center;
			}
		';		
	}

	// Header Logo
	$css .= '
		.logo-img {
			max-width: '. (int)bard_options( 'title_tagline_logo_width' ) .'px;
		}
	';

	// Parallax
	if ( bard_options( 'header_image_parallax' ) === true ) {
		$css .= '
			.entry-header {
				background-color: transparent !important;
				background-image: none;
			}
		';	
	}

	// Disable Tooltips
	if ( bard_options( 'header_image_label' ) !== true && bard_options('top_bar_label') !== true ) {
		$css .= '
			.btn-tooltip {
				display: none !important;
			}
		';		
	}


/*
** Site Identity =====
*/

	// Logo &  Tagline
	if ( ! display_header_text() ) {
		$css .= '
			.header-logo a:not(.logo-img),
			.site-description {
				display: none;
			}
		';		
	}


/*
** Main Navigation =====
*/
	
	// Align
	$css .= '
		#main-nav {
			text-align: '. esc_html(bard_options( 'main_nav_align' )) .';
		}
	';

	if ( bard_options( 'main_nav_align' ) === 'center' ) {
		$css .= '	
			.main-nav-icons {
			  position: absolute;
			  top: 0px;
			  right: 40px;
			  z-index: 2;
			}

			.main-nav-buttons {
			  position: absolute;
			  top: 0px;
			  left: 40px;
			  z-index: 1;
			}

		';
	} else {
		$css .= '					
			.main-nav-buttons {
			 float: left;
			 margin-right: 20px;
			}

			.main-nav-icons {
			 float: right;
			 margin-left: 20px;
			}
		';
	}

	if ( bard_options( 'main_nav_show_sidebar' ) === false && bard_options( 'main_nav_show_random_btn' ) === false ) {
		$css .= '
			#main-menu {
				padding-left: 0 !important;
			}
		';
	}


/*
** Featured Links =====
*/
	// Layout
	$featured_links = array(
		esc_url(bard_options( 'featured_links_image_1' )),
		esc_url(bard_options( 'featured_links_image_2' )),
		esc_url(bard_options( 'featured_links_image_3' ))
	);

	$featured_links = count( array_filter( $featured_links ) );
	$featured_links_gutter = 0;

	// Gutter	
	$featured_links_gutter = 25;
	$css .= '
		#featured-links .featured-link {
			margin-right: '. $featured_links_gutter .'px;
		}
		#featured-links .featured-link:last-of-type {
			margin-right: 0;
		}
	';

	// Columns
	$css .= '
		#featured-links .featured-link {
			width: calc( (100% - '. ( ($featured_links - 1) * $featured_links_gutter ) .'px) / '. $featured_links .' - 1px);
			width: -webkit-calc( (100% - '. ( ($featured_links - 1) * $featured_links_gutter ) .'px) / '. $featured_links .'- 1px);
		}
	';

	if ( bard_options( 'featured_links_title_1' ) === '' ) {
		$css .= '
			.featured-link:nth-child(1) .cv-inner {
			    display: none;
			}
		';
	}

	if ( bard_options( 'featured_links_title_2' ) === '' ) {
		$css .= '
			.featured-link:nth-child(2) .cv-inner {
			    display: none;
			}
		';
	}
	
	if ( bard_options( 'featured_links_title_3' ) === '' ) {
		$css .= '
			.featured-link:nth-child(3) .cv-inner {
			    display: none;
			}
		';
	}


/*
** Blog Page =====
*/

	// Gutter
	$css .= '
		.blog-grid > li {
			display: inline-block;
			vertical-align: top;
			margin-right: '. $blog_page_gutter_horz .'px;
			margin-bottom: '. $blog_page_gutter_vert .'px;
		}

		.blog-grid > li.blog-grid-style {
			width: calc((100% - '. $blog_page_gutter_horz .'px ) /2 - 1px);
			width: -webkit-calc((100% - '. $blog_page_gutter_horz .'px ) /2 - 1px);
		}

		@media screen and ( min-width: 979px ) {

			.blog-grid > .blog-list-style:nth-last-of-type(-n+1) {
				margin-bottom: 0;
			}

			.blog-grid > .blog-grid-style:nth-last-of-type(-n+2) {
			 	margin-bottom: 0;
			}
			
		}

		@media screen and ( max-width: 640px ) {
			.blog-grid > li:nth-last-of-type(-n+1) {
				margin-bottom: 0;
			}
		}

	';


	if ( is_home() && ! is_paged() && bard_full_width_post() ) {
		$css .= '
			.blog-grid > li:nth-of-type(2n+1) {
				margin-right: 0;
			}
		';
	} else {
		$css .= '
			.blog-grid > li:nth-of-type(2n+2) {
				margin-right: 0;
			}
		';
	}


	if ( is_rtl() ) {
		
		$css .= '
		.blog-grid > li {
			margin-right: 0;
			margin-left: 32px;
		}';

		if ( is_home() && ! is_paged() && bard_full_width_post() ) {
			$css .= '
				.blog-grid > li:nth-of-type(2n+1) {
					margin-left: 0;
				}
			';
		} else {
			$css .= '
				.blog-grid > li:nth-of-type(2n+2) {
					margin-left: 0;
				}
			';
		}

	}


	if ( is_active_sidebar( 'sidebar-left' ) && is_active_sidebar( 'sidebar-right' ) ) {
		$css .= '
			.sidebar-right {
				padding-left: ' . $blog_page_gutter_horz . 'px;
			}
			.sidebar-left {
				padding-right: ' . $blog_page_gutter_horz . 'px;
			}
		';
	} else if ( is_active_sidebar( 'sidebar-left' ) ) {
		$css .= '
			.sidebar-left {
				padding-right: ' . $blog_page_gutter_horz . 'px;
			}
		';
	} else if ( is_active_sidebar( 'sidebar-right' )  || bard_is_preview() ) {
		$css .= '
			.sidebar-right {
				padding-left: ' . $blog_page_gutter_horz . 'px;
			}
		';
	}

	// Blog Page Dropcaps
	if ( bard_options( 'blog_page_show_dropcaps' ) === true ) {
		$css .= "
			.home .post-content > p:first-of-type:first-letter,
			.archive .post-content > p:first-of-type:first-letter {
				float: left;
				margin: 6px 9px 0 -1px;
				font-family: 'Montserrat';
				font-weight: normal;
				font-style: normal;
				font-size: 81px;
				line-height: 65px;
				text-align: center;
				text-transform: uppercase;
				color: #030303;
			}

			@-moz-document url-prefix() {
				.home .post-content > p:first-of-type:first-letter,
				.archive .post-content > p:first-of-type:first-letter {
				    margin-top: 10px !important;
				}
			}
		";
	}

	// Single Page Dropcaps
	if ( bard_options( 'single_page_show_dropcaps' ) === true ) {
		$css .= "
			.blog-classic-style .post-content > p:first-of-type:first-letter,
			.single .post-content > p:not(.wp-block-tag-cloud):first-of-type:first-letter,
			article.page .post-content > p:first-child:first-letter {
			  	float: left;
				margin: 6px 9px 0 -1px;
				font-family: 'Montserrat';
			  	font-weight: normal;
				font-style: normal;
				font-size: 81px;
				line-height: 65px;
				text-align: center;
				text-transform: uppercase;
			}

			@-moz-document url-prefix() {
				.blog-classic-style .post-content > p:first-of-type:first-letter,
				.single .post-content > p:not(.wp-block-tag-cloud):first-of-type:first-letter,
				article.page .post-content > p:first-child:first-letter {
				    margin-top: 10px !important;
				}
			}
		";
	}


/*
** Responsive =====
*/
	// Featured Slider
	if ( bard_options( 'responsive_featured_slider' ) !== true ) {
		$css .= '
		@media screen and ( max-width: 768px ) {
			.featured-slider-area {
				display: none;
			}
		}
		';
	}

	// Featured Links
	if ( bard_options( 'responsive_featured_links' ) !== true ) {
		$css .= '
		@media screen and ( max-width: 768px ) {
			#featured-links {
				display: none;
			}
		}
		';
	}

	// Related Posts
	if ( bard_options( 'responsive_related_posts' ) !== true ) {
		$css .= '
		@media screen and ( max-width: 640px ) {
			.related-posts {
				display: none;
			}
		}
		';
	}


/*
** Typography =====
*/
	// Logo & Tagline
	$css .= "
		.header-logo a {
			font-family: '". str_replace( '+', ' ', esc_html(bard_options( 'typography_logo_family' )) ) ."';
		}
	";

	// Top Bar
	$css .= "
		#top-menu li a {
			font-family: '". str_replace( '+', ' ', esc_html(bard_options( 'typography_nav_family' )) ) ."';
		}
	";

	// Main Navigation
	$css .= "	
		#main-menu li a {
			font-family: '". str_replace( '+', ' ', esc_html(bard_options( 'typography_nav_family' )) ) ."';
		}

		#mobile-menu li {
			font-family: '". str_replace( '+', ' ', esc_html(bard_options( 'typography_nav_family' )) ) ."';
		}
	";
	
	// Italic
	if ( bard_options( 'typography_nav_italic' ) === true ) {
		$css .= "
			#top-menu li a,
			#main-menu li a,
			#mobile-menu li {
				font-style: italic;
			}
		";
	}

	// Uppercase
	if ( bard_options( 'typography_nav_uppercase' ) === true ) {
		$css .= "
			#top-menu li a,
			#main-menu li a,
			#mobile-menu li {
				text-transform: uppercase;
			}
		";
	}


/*
** Page Footer =====
*/

	// Widget Columns
	$css .= '
		.footer-widgets .page-footer-inner > .bard-widget {
			width: 30%;
			margin-right: 5%;
		}

		.footer-widgets .page-footer-inner > .bard-widget:nth-child(3n+3) {
			margin-right: 0;
		}

		.footer-widgets .page-footer-inner > .bard-widget:nth-child(3n+4) {
			clear: both;
		}
	';


/*
** Woocommerce =====
*/

	/* Text */
	$css .= '
		.woocommerce div.product .stock,
		.woocommerce div.product p.price,
		.woocommerce div.product span.price,
		.woocommerce ul.products li.product .price,
		.woocommerce-Reviews .woocommerce-review__author,
		.woocommerce form .form-row .required,
		.woocommerce form .form-row.woocommerce-invalid label,
		.woocommerce .page-content div.product .woocommerce-tabs ul.tabs li a {
		    color: #464646;
		}

		.woocommerce a.remove:hover {
		    color: #464646 !important;
		}
	';

	/* Meta */
	$css .= '
		.woocommerce a.remove,
		.woocommerce .product_meta,
		.page-content .woocommerce-breadcrumb,
		.page-content .woocommerce-review-link,
		.page-content .woocommerce-breadcrumb a,
		.page-content .woocommerce-MyAccount-navigation-link a,
		.woocommerce .woocommerce-info:before,
		.woocommerce .page-content .woocommerce-result-count,
		.woocommerce-page .page-content .woocommerce-result-count,
		.woocommerce-Reviews .woocommerce-review__published-date,
		.woocommerce .product_list_widget .quantity,
		.woocommerce .widget_products .amount,
		.woocommerce .widget_price_filter .price_slider_amount,
		.woocommerce .widget_recently_viewed_products .amount,
		.woocommerce .widget_top_rated_products .amount,
		.woocommerce .widget_recent_reviews .reviewer {
		    color: #a1a1a1;
		}

		.woocommerce a.remove {
		    color: #a1a1a1 !important;
		}
	';

	/* Accent */
	$css .= '
		p.demo_store,
		.woocommerce-store-notice,
		.woocommerce span.onsale {
		   background-color: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}

		.woocommerce .star-rating::before,
		.woocommerce .star-rating span::before,
		.woocommerce .page-content ul.products li.product .button,
		.page-content .woocommerce ul.products li.product .button,
		.page-content .woocommerce-MyAccount-navigation-link.is-active a,
		.page-content .woocommerce-MyAccount-navigation-link a:hover,
		.woocommerce-message::before {
		   color: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}
	';

	/* Border Color */
	$css .= '
		.woocommerce form.login,
		.woocommerce form.register,
		.woocommerce-account fieldset,
		.woocommerce form.checkout_coupon,
		.woocommerce .woocommerce-info,
		.woocommerce .woocommerce-error,
		.woocommerce .woocommerce-message,
		.woocommerce .widget_shopping_cart .total,
		.woocommerce.widget_shopping_cart .total,
		.woocommerce-Reviews .comment_container,
		.woocommerce-cart #payment ul.payment_methods,
		#add_payment_method #payment ul.payment_methods,
		.woocommerce-checkout #payment ul.payment_methods,
		.woocommerce div.product .woocommerce-tabs ul.tabs::before,
		.woocommerce div.product .woocommerce-tabs ul.tabs::after,
		.woocommerce div.product .woocommerce-tabs ul.tabs li,
		.woocommerce .woocommerce-MyAccount-navigation-link,
		.select2-container--default .select2-selection--single {
			border-color: #e8e8e8;
		}

		.woocommerce-cart #payment,
		#add_payment_method #payment,
		.woocommerce-checkout #payment,
		.woocommerce .woocommerce-info,
		.woocommerce .woocommerce-error,
		.woocommerce .woocommerce-message,
		.woocommerce div.product .woocommerce-tabs ul.tabs li {
			background-color: '. esc_html(bard_hex2rgba( '#e8e8e8', 0.3 )) .';
		}

		.woocommerce-cart #payment div.payment_box::before,
		#add_payment_method #payment div.payment_box::before,
		.woocommerce-checkout #payment div.payment_box::before {
			border-color: '. esc_html(bard_hex2rgba( '#e8e8e8', 0.5 )) .';
		}

		.woocommerce-cart #payment div.payment_box,
		#add_payment_method #payment div.payment_box,
		.woocommerce-checkout #payment div.payment_box {
			background-color: '. esc_html(bard_hex2rgba( '#e8e8e8', 0.5 )) .';
		}
	';

	/* Buttons */
	$css .= '
		.page-content .woocommerce input.button,
		.page-content .woocommerce a.button,
		.page-content .woocommerce a.button.alt,
		.page-content .woocommerce button.button.alt,
		.page-content .woocommerce input.button.alt,
		.page-content .woocommerce #respond input#submit.alt,
		.woocommerce .page-content .widget_product_search input[type="submit"],
		.woocommerce .page-content .woocommerce-message .button,
		.woocommerce .page-content a.button.alt,
		.woocommerce .page-content button.button.alt,
		.woocommerce .page-content #respond input#submit,
		.woocommerce .page-content .widget_price_filter .button,
		.woocommerce .page-content .woocommerce-message .button,
		.woocommerce-page .page-content .woocommerce-message .button {
			color: #ffffff;
			background-color: #333333;
		}

		.page-content .woocommerce input.button:hover,
		.page-content .woocommerce a.button:hover,
		.page-content .woocommerce a.button.alt:hover,
		.page-content .woocommerce button.button.alt:hover,
		.page-content .woocommerce input.button.alt:hover,
		.page-content .woocommerce #respond input#submit.alt:hover,
		.woocommerce .page-content .woocommerce-message .button:hover,
		.woocommerce .page-content a.button.alt:hover,
		.woocommerce .page-content button.button.alt:hover,
		.woocommerce .page-content #respond input#submit:hover,
		.woocommerce .page-content .widget_price_filter .button:hover,
		.woocommerce .page-content .woocommerce-message .button:hover,
		.woocommerce-page .page-content .woocommerce-message .button:hover {
			color: #ffffff;
			background-color: '. esc_html(bard_options( 'colors_content_accent' )) .';
		}

	';


/*
** Preloader =====
*/

	$css .= '#loadFacebookG{width:35px;height:35px;display:block;position:relative;margin:auto}.facebook_blockG{background-color:#00a9ff;border:1px solid #00a9ff;float:left;height:25px;margin-left:2px;width:7px;opacity:.1;animation-name:bounceG;-o-animation-name:bounceG;-ms-animation-name:bounceG;-webkit-animation-name:bounceG;-moz-animation-name:bounceG;animation-duration:1.235s;-o-animation-duration:1.235s;-ms-animation-duration:1.235s;-webkit-animation-duration:1.235s;-moz-animation-duration:1.235s;animation-iteration-count:infinite;-o-animation-iteration-count:infinite;-ms-animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;-moz-animation-iteration-count:infinite;animation-direction:normal;-o-animation-direction:normal;-ms-animation-direction:normal;-webkit-animation-direction:normal;-moz-animation-direction:normal;transform:scale(0.7);-o-transform:scale(0.7);-ms-transform:scale(0.7);-webkit-transform:scale(0.7);-moz-transform:scale(0.7)}#blockG_1{animation-delay:.3695s;-o-animation-delay:.3695s;-ms-animation-delay:.3695s;-webkit-animation-delay:.3695s;-moz-animation-delay:.3695s}#blockG_2{animation-delay:.496s;-o-animation-delay:.496s;-ms-animation-delay:.496s;-webkit-animation-delay:.496s;-moz-animation-delay:.496s}#blockG_3{animation-delay:.6125s;-o-animation-delay:.6125s;-ms-animation-delay:.6125s;-webkit-animation-delay:.6125s;-moz-animation-delay:.6125s}@keyframes bounceG{0%{transform:scale(1.2);opacity:1}100%{transform:scale(0.7);opacity:.1}}@-o-keyframes bounceG{0%{-o-transform:scale(1.2);opacity:1}100%{-o-transform:scale(0.7);opacity:.1}}@-ms-keyframes bounceG{0%{-ms-transform:scale(1.2);opacity:1}100%{-ms-transform:scale(0.7);opacity:.1}}@-webkit-keyframes bounceG{0%{-webkit-transform:scale(1.2);opacity:1}100%{-webkit-transform:scale(0.7);opacity:.1}}@-moz-keyframes bounceG{0%{-moz-transform:scale(1.2);opacity:1}100%{-moz-transform:scale(0.7);opacity:.1}}';




// return generated & compressed CSS
echo '<style id="bard_dynamic_css">'. str_replace( array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css ) .'</style>'; 


} // end bard_dynamic_css()
add_action( 'wp_head', 'bard_dynamic_css' );