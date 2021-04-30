$ = jQuery;

jQuery(document).ready(function( $ ) {
	"use strict";

/*
** Header Image =====
*/
	var entryHeader = $('.entry-header');
	
	// Parallax Effect
	if ( entryHeader.attr('data-parallax') == '1' ) {
		entryHeader.parallax({ imageSrc: entryHeader.attr('data-image') });
	}

/*
** Main Navigation =====
*/
	// Navigation Hover
	$('#top-menu, #main-menu').find('li').on('mouseenter', function() {
		$(this).children('.sub-menu').stop().fadeIn( 200 );
	}).on('mouseleave', function() {
		$(this).children('.sub-menu').stop().fadeOut( 200 );
	});

	// Mobile Menu
	$('.mobile-menu-btn').on( 'click', function() {
		$('.mobile-menu-container').slideToggle();
	});

	// Responsive Menu 
	$( '#mobile-menu .menu-item-has-children' ).prepend( '<div class="sub-menu-btn"></div>' );
	$( '#mobile-menu .sub-menu' ).before( '<span class="sub-menu-btn-icon icon-angle-down"></span>' );

	// Responsive sub-menu btn
	$('.sub-menu-btn').on( 'click', function(){
		$(this).closest('li').children('.sub-menu').slideToggle();
		$(this).closest('li').children('.sub-menu-btn-icon').toggleClass( 'fa-rotate-270' );
	});

	$( window ).on( 'resize', function() {
		if ( $('.main-menu-container').css('display') === 'block' ) {
			$( '.mobile-menu-container' ).css({ 'display' : 'none' });
		}
	});

	// Search Form
	$('.main-nav-icons').after($('.main-nav-search #searchform').remove());
	var mainNavSearch = $('#main-nav #searchform');
	
	mainNavSearch.find('#s').attr( 'placeholder', mainNavSearch.find('#s').data('placeholder') );

	$('.main-nav-search').on( 'click', function() {
		if ( mainNavSearch.css('display') === 'none' ) {
			mainNavSearch.fadeIn();
			$('.main-nav-search .svg-inline--fa:last-of-type').show();
			$('.main-nav-search .svg-inline--fa:first-of-type').hide();
		} else {
			mainNavSearch.fadeOut();
			$('.main-nav-search .svg-inline--fa:last-of-type').hide();
			$('.main-nav-search .svg-inline--fa:first-of-type').show();
		}
	});


/*
** Featured Slider =====
*/
	var RTL = false;
	if( $('html').attr('dir') == 'rtl' ) {
	RTL = true;
	}

	$('#featured-slider').slick({
		prevArrow: '<span class="prev-arrow icon-angle-left"></span>',
		nextArrow: '<span class="next-arrow icon-angle-right"></span>',
		dotsClass: 'slider-dots',
		adaptiveHeight: true,
		rtl: RTL,
		speed: 750,
  		customPaging: function(slider, i) {
            return '';
        }
	});


/*
** Sidebars =====
*/

	// Sidebar Alt Scroll
	$('.sidebar-alt').perfectScrollbar({
		suppressScrollX : true,
		includePadding : true,
		wheelSpeed: 3.5
	});

	// Sidebar Alt
	$('.main-nav-sidebar').on('click', function () {
		$('.sidebar-alt').css( 'left','0' );
		$('.sidebar-alt-close').fadeIn( 500 );
	});

	// Sidebar Alt Close
	function bardAltSidebarClose() {
		var leftPosition = parseInt( $( ".sidebar-alt" ).outerWidth(), 10 ) + 30;
		$('.sidebar-alt').css( 'left','-'+ leftPosition +'px' );
		$('.sidebar-alt-close').fadeOut( 500 );
	}
	
	$('.sidebar-alt-close, .sidebar-alt-close-btn').on('click', function () {
		bardAltSidebarClose();
	});

	// Instagram Columns
	var instagram = $( '.footer-instagram-widget .null-instagram-feed li a' ),
	instagramColumn = $( '.footer-instagram-widget .null-instagram-feed li' ).length;
	instagram.css({
		 'width'	: '' + 100 / instagramColumn +'%',
		 'opacity'	: '1'
	});

/*
** Scroll Top Button =====
*/

	$('.scrolltop').on( 'click', function() {
		$('html, body').animate( { scrollTop : 0 }, 800 );
		return false;
	});


/*
** Window Resize =====
*/

	$( window ).on( 'resize', function() {

		if ( $('.mobile-menu-btn').css('display') === 'none' ) {
			$( '.mobile-menu-container' ).css({ 'display' : 'none' });
		}
		
		bardstickySidebar();
		bardAltSidebarClose();
	});


/*
** Run Functions =====
*/
	// FitVids
	$('.slider-item, .post-media').fitVids();



}); // end dom ready


/*
** Window Load =====
*/

	$( window ).on( 'load', function() {
		bardstickySidebar();
		bardPreloader();
	});


/*
** Global Functions =====
*/
	// Preloader
	function bardPreloader() {
		if ( $('.bard-preloader-wrap').length ) {

			setTimeout(function(){
				$('.bard-preloader-wrap > div').fadeOut( 600 );
				$('.bard-preloader-wrap').fadeOut( 1500 );
			}, 300);

			if ( $('body').hasClass('elementor-editor-active') ) {
				setTimeout(function(){
					$('.bard-preloader-wrap > div').fadeOut( 600 );
					$('.bard-preloader-wrap').fadeOut( 1500 );
				}, 300);
			}

		}
	}

	// Sticky Sidebar
	function bardstickySidebar() {
		if ( $( '.main-content' ).data('sidebar-sticky') === 1 ) {		
			var SidebarOffset = 0;

			if ( $("#main-nav").attr( 'data-fixed' ) === '1' ) {
				SidebarOffset = 40;
			}

			$('.sidebar-left,.sidebar-right').stick_in_parent({
				parent: ".main-content",
				offset_top: SidebarOffset,
				spacer: '.sidebar-left-wrap,.sidebar-right-wrap'
			});

			if ( $('.mobile-menu-btn').css('display') !== 'none' ) {
				$('.sidebar-left,.sidebar-right').trigger("sticky_kit:detach");
			}
		}
	}