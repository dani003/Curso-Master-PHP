/*
** Instantly live-update customizer settings in the preview for improved user experience.
*/

(function( $ ) {

/*
** Colors
*/

	// Header
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( val ) {
			if ( 'blank' === val ) {
				
				var css = '\
				.header-logo a,.site-description,\
				.header-socials-icon {\
					color: '+  $('.site-description').css('color') +' ;\
				}\
				.site-description:before,\
				.site-description:after {\
					background: '+  $('.site-description').css('color') +' ;\
				}\
				';
				$( 'body' ).removeClass( 'title-tagline-shown' );
				$( 'body' ).addClass( 'title-tagline-hidden' );
			
			} else {
				
				var css = '\
				.header-logo a,.site-description,\
				.header-socials-icon {\
					color: '+  val +' ;\
				}\
				.site-description:before,\
				.site-description:after {\
					background: '+  val +' ;\
				}\
				';
				$( 'body' ).removeClass( 'title-tagline-hidden' );
				$( 'body' ).addClass( 'title-tagline-shown' );
			
			}

			bardStyle( 'colors_header_text', css );
		});
	});

	// Header Text Hover Color
	bardLivePreview( 'colors_header_text_hover', function( val ) {

		var css = '\
		.header-logo a:hover,\
		.header-socials-icon:hover {\
			color: '+ val +' ;\
		}';

		bardStyle( 'colors_header_text_hover', css );

	});

	// Header Background Color
	bardLivePreview( 'colors_header_bg', function( val ) {
		$('.entry-header').css( 'background-color', val );
	});

	// Accent Color
	bardLivePreview( 'colors_content_accent', function( val ) {
		var selectors = '\
			.page-content .post-title a,\
			.page-content .post-comments,\
			.page-content .post-author a,\
			.page-content .post-share a,\
		 	.page-content .bard-widget a,\
			.page-content .related-posts h5 a,\
			.page-content .author-description h3 a,\
			.page-content .blog-pagination a,\
			.page-content .post-date,\
			.page-content .post-author,\
			.page-content .related-post-date,\
			.page-content .comment-meta a,\
			.page-content .author-share a,\
			.page-content .slider-title a,\
			.page-content .slider-categories a,\
			.page-content .slider-read-more a,\
			.page-content .read-more a\
		';

		$( '.page-content a' ).not( selectors ).css( 'color', val );

		/* Disable TMP
		$( '.page-content .elementor a' ).css( 'color', 'inherit' );
		*/
		
		var css = '\
		#top-bar a:hover,\
		#top-bar li.current-menu-item > a,\
		#top-bar li.current-menu-ancestor > a,\
		#top-bar .sub-menu li.current-menu-item > a,\
		#top-bar .sub-menu li.current-menu-ancestor> a,\
		#main-nav a:hover,\
		#main-nav .svg-inline--fa:hover,\
		#main-nav li.current-menu-item > a,\
		#main-nav li.current-menu-ancestor > a,\
		#main-nav .sub-menu li.current-menu-item > a,\
		#main-nav .sub-menu li.current-menu-ancestor > a,\
		.post-categories,\
		#page-footer a:hover,\
		#page-wrap .bard-widget.widget_text a,\
		.page-content .rpwwt-widget a,\
		.scrolltop,\
		.required,\
		.woocommerce .star-rating::before,\
		.woocommerce .star-rating span::before,\
		.woocommerce .page-content ul.products li.product .button,\
		.page-content .woocommerce ul.products li.product .button,\
		.page-content .woocommerce-MyAccount-navigation-link.is-active a,\
		.page-content .woocommerce-MyAccount-navigation-link a:hover,\
		.woocommerce-message::before {\
		color: '+ val +' ;\
		}';

		css += '\
		.main-nav-sidebar:hover div span,\
		.ps-container > .ps-scrollbar-y-rail > .ps-scrollbar-y,\
		.read-more a:after,\
		.page-content .submit:hover,\
		.page-content .blog-pagination.numeric a:hover,\
		.page-content .blog-pagination.numeric span,\
		.page-content .bard-subscribe-box input[type="submit"],\
		.page-content .widget_wysija input[type="submit"],\
		.page-content .post-password-form input[type="submit"]:hover,\
		.page-content .wpcf7 [type="submit"]:hover,\
		p.demo_store,\
		.woocommerce-store-notice,\
		.woocommerce span.onsale,\
		.page-content .woocommerce input.button:hover,\
		.page-content .woocommerce a.button:hover,\
		.page-content .woocommerce a.button.alt:hover,\
		.page-content .woocommerce button.button.alt:hover,\
		.page-content .woocommerce input.button.alt:hover,\
		.page-content .woocommerce #respond input#submit.alt:hover,\
		.woocommerce .page-content .woocommerce-message .button:hover,\
		.woocommerce .page-content a.button.alt:hover,\
		.woocommerce .page-content button.button.alt:hover,\
		.woocommerce .page-content #respond input#submit:hover,\
		.woocommerce .page-content .widget_price_filter .button:hover,\
		.woocommerce .page-content .woocommerce-message .button:hover,\
		.woocommerce-page .page-content .woocommerce-message .button:hover {\
			background-color: '+ val +';\
		}';

		css += '\
		blockquote {\
			border-color: '+ val +';\
		}';

		css += '\
		.widget-title h4 {\
			border-top-color: '+ val +';\
		}';

		css += '\
		::-moz-selection {\
			background: '+ val +';\
		}\
		::selection {\
			background: '+ val +';\
		}';

		css += '\
		.scrolltop:hover {\
			color: '+ bardHex2Rgba( val, 0.8 ) +';\
		}';	

		bardStyle( 'colors_content_accent', css );
	});


/*
** Page Header
*/

	bardLivePreview( 'title_tagline_logo_width', function( val ) {
		$( '.logo-img' ).css( 'max-width', val +'px' );
	});


/*
** Typography
*/

	// Menu Italic
	bardLivePreview( 'typography_nav_italic', function( val ) {
		if ( val === true ) {
			$( '#top-menu li a,	#main-menu li a, #mobile-menu li' ).css( 'font-style', 'italic' );
		} else {
			$( '#top-menu li a,	#main-menu li a, #mobile-menu li' ).css( 'font-style', 'normal' );
		}
	});

	// Menu Uppercase
	bardLivePreview( 'typography_nav_uppercase', function( val ) {
		if ( val === true ) {
			$( '#top-menu li a,	#main-menu li a, #mobile-menu li' ).css( 'text-transform', 'uppercase' );
		} else {
			$( '#top-menu li a,	#main-menu li a, #mobile-menu li' ).css( 'text-transform', 'none' );
		}
	});

	
/*
** Custom Functions
*/
	// Previewer
	function bardLivePreview( control, func ) {
		wp.customize( 'bard_options['+ control +']', function( value ) {
			value.bind( function( val ) {
				func( val );
			} );
		} );
	}

	// convert hex color to rgba
	function bardHex2Rgba( hex, opacity ) {
		if ( typeof(hex) === 'undefined' ) {
		 return;
		}

		var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec( hex ),
			rgba = 'rgba( '+ parseInt( result[1], 16 ) +', '+ parseInt( result[2], 16 ) +', '+ parseInt( result[3], 16 ) +', '+ opacity +')';

		// return converted RGB
		return rgba;
	}

	// Style Tag
	function bardStyle( id, css ) {
		if ( $( '#'+ id ).length === 0 ) {
			$('head').append('<style id="'+ id +'"></style>')
		}

		$( '#'+ id ).text( css );
	}

} )( jQuery );
