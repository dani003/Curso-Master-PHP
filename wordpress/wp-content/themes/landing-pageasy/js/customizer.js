/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
		wp.customize( 'social_media_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-branding .fa' ).css( {
				'border-color':to
			});
		} );
	} );
		wp.customize( 'social_media_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-branding .fa' ).css( {
				'color':to
			});
		} );
	} );
		wp.customize( 'header_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-branding .site-title, .site-branding .site-description, .site-title' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'top_header_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#site-header' ).css( {
				'background-color':to
			});
		} );
	} );

	wp.customize( 'sidebar_headline_color', function( value ) {
		value.bind( function( to ) {
			$( '#sidebars .widget h3, #sidebars .widget h3 a, #sidebars h3' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'sidebar_link_color', function( value ) {
		value.bind( function( to ) {
			$( '#sidebars .widget a, #sidebars a, #sidebars li a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'sidebar_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#sidebars .widget, #sidebars, #sidebars .widget li' ).css( {
				'color':to
			});
		} );
	} );

	wp.customize( 'post_page_background', function( value ) {
		value.bind( function( to ) {
			$( '#content, #comments, #commentsAdd, .related-posts, .single-post .post.excerpt, .postauthor' ).css( {
				'background':to
			});
		} );
	} );



	wp.customize( 'sidebar_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#sidebars .widget' ).css( {
				'background':to
			});
		} );
	} );

	wp.customize( 'all_blog_posts_text', function( value ) {
		value.bind( function( to ) {
			$( '.post.excerpt .post-content, .pagination a, .pagination2, .pagination .dots' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'all_blog_posts_headline', function( value ) {
		value.bind( function( to ) {
			$( '.post.excerpt h2.title a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'all_blog_posts_text', function( value ) {
		value.bind( function( to ) {
			$( '.pagination a, .pagination2, .pagination .dots' ).css( {
				'border-color':to
			});
		} );
	} );
	wp.customize( 'all_blog_posts_date', function( value ) {
		value.bind( function( to ) {
			$( 'span.entry-meta' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'post_page_headline', function( value ) {
		value.bind( function( to ) {
			$( '.article h1, .article h2, .article h3, .article h4, .article h5, .article h6, .total-comments, .article th' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'post_page_text', function( value ) {
		value.bind( function( to ) {
			$( '.article, .article p, .related-posts .title, .breadcrumb, .article #commentform textarea' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'post_page_link', function( value ) {
		value.bind( function( to ) {
			$( '.article a, .breadcrumb a, #commentform a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'post_page_link', function( value ) {
		value.bind( function( to ) {
			$( '#commentform input#submit, #commentform input#submit:hover' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'post_page_date', function( value ) {
		value.bind( function( to ) {
			$( '.post-date-landing, .comment time' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'footer_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.footer-widgets #pageasyform input[type="submit"], .footer-widgets #pageasyform input[type="submit"]:hover' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'footer_headline_color', function( value ) {
		value.bind( function( to ) {
			$( '.footer-widgets h3:after' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'footer_headline_color', function( value ) {
		value.bind( function( to ) {
			$( '.footer-widgets h3' ).css( {
				'color':to
			});
		} );
	} );



	wp.customize( 'all_blog_posts_bg', function( value ) {
		value.bind( function( to ) {
			$( '.pagination a, .pagination2, .pagination .dots, .post.excerpt' ).css( {
				'background':to
			});
		} );
	} );

	wp.customize( 'footer_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.footer-widgets .widget li, .footer-widgets .widget, #copyright-note, footer p' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'footer_link_color', function( value ) {
		value.bind( function( to ) {
			$( 'footer .widget a, #copyright-note a, #copyright-note a:hover, footer .widget a:hover, footer .widget li a:hover' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'upper_widgets_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.top-column-widget a, .top-column-widget a:hover, .top-column-widget a:active, .top-column-widget a:focus' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'upper_widgets_content_color', function( value ) {
		value.bind( function( to ) {
			$( '.top-column-widget, .upper-widgets-grid' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'upper_widgets_headlinke_color', function( value ) {
		value.bind( function( to ) {
			$( '.top-column-widget .widget.widget_rss h3 a, .upper-widgets-grid h3, .top-column-widget h3' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'navigation_frontpage_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.primary-navigation.header-activated #navigation a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'navigation_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#navigation.mobile-menu-wrapper' ).css( {
				'background-color':to
			});
		} );
	} );
	wp.customize( 'navigation_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.primary-navigation, .primary-navigation, #navigation ul ul li' ).css( {
				'background-color':to
			});
		} );
	} );
	wp.customize( 'navigation_link_color', function( value ) {
		value.bind( function( to ) {
			$( 'a#pull, #navigation .menu a, #navigation .menu a:hover, #navigation .menu .fa > a, #navigation .menu .fa > a, #navigation .toggle-caret, #navigation span.site-logo a, #navigation.mobile-menu-wrapper .site-logo a, .primary-navigation.header-activated #navigation ul ul li a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'footer_bg_color', function( value ) {
		value.bind( function( to ) {
			$( 'footer' ).css( {
				'background-color':to
			});
		} );
	} );
	wp.customize( 'footer_copyright_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.copyrights' ).css( {
				'background-color':to
			});
		} );
	} );




	wp.customize( 'all_blog_posts_btn_bg', function( value ) {
		value.bind( function( to ) {
			$( '.read-more, .read-more:hover, .read-more:active, .read-more:focus, .read-more:visited' ).css( {
				'background-color':to
			});
		} );
	} );
	wp.customize( 'all_blog_posts_btn_txt', function( value ) {
		value.bind( function( to ) {
			$( '.read-more, .read-more:hover, .read-more:active, .read-more:focus, .read-more:visited' ).css( {
				'color':to
			});
		} );
	} );





	wp.customize( 'upper_widgets_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.upper-widgets-grid-wrapper' ).css( {
				'background-color':to
			});
		} );
	} );
	wp.customize( 'header_right_button_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.header-button-solid, .header-button-solid:hover, .header-button-solid:active, .header-button-solid:focus' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'header_right_button_bg', function( value ) {
		value.bind( function( to ) {
			$( '.header-button-solid, .header-button-solid:hover, .header-button-solid:active, .header-button-solid:focus' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'header_left_button_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.header-button-border, .header-button-border:hover, .header-button-border:active, .header-button-border:focus' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'header_left_button_bg', function( value ) {
		value.bind( function( to ) {
			$( '.header-button-border, .header-button-border:hover, .header-button-border:active, .header-button-border:focus' ).css( {
				'border-color':to
			});
		} );
	} );



	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-branding .site-title, .site-branding .site-description, .site-title' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-branding .site-title, .site-branding .site-description, .site-title' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-branding .site-title, .site-branding .site-description, .site-title' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );
