/*
** Scripts within the customizer controls window.
*/

(function( $ ) {
	wp.customize.bind( 'ready', function() {

	/*
	** Reusable Functions
	*/
		// Label
		function bard_customizer_label( id, title, video ) {

			var video_icon = '';

			if ( video !== '' ) {
				video_icon = '<a href="'+ video +'" target="_blank" title="Video Tutorial">Video Guide <span class="dashicons dashicons-video-alt3 video-tutorial"></span></a>';
			}

			if ( id === 'custom_logo' || id === 'site_icon' || id === 'background_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title + video_icon +'</li>');
			} else {
				$( '#customize-control-bard_options-'+ id ).before('<li class="tab-title customize-control">'+ title + video_icon +'</li>');
			}
			
		}

		// Checkbox Label
		function bard_customizer_checkbox_label( id, video ) {

			var id = '#customize-control-bard_options-'+ id;

			var video_icon = '';

			if ( video !== '' ) {
				video_icon = '<a href="'+ video +'" target="_blank" title="Video Tutorial">Video Guide <span class="dashicons dashicons-video-alt3 video-tutorial"></span></a>';
			}		

			$( id ).addClass('tab-title').append( video_icon );

			// on change
			$( id ).find('input[type="checkbox"]').change(function() {
				if ( $(this).is(':checked') ) {
					$(this).closest('li').parent('ul').find('li').not( '.section-meta,.tab-title'+ id ).find('.control-lock').remove();
				} else {
					$(this).closest('li').parent('ul').find('li').not( '.section-meta,.tab-title'+ id ).append('<div class="control-lock"></div>');
				}
			});

			// on load
			if ( ! $( id ).find('input[type="checkbox"]').is(':checked') ) {
				$( id ).closest('li').parent('ul').find('li').not( '.section-meta,.tab-title'+ id ).append('<div class="control-lock"></div>');
			}

		}

		// Select
		function bard_customizer_select( select, children, value ) {

			// on change
			$( '#customize-control-bard_options-'+ select ).find('select').change(function() {
				if ( $(this).val() === value ) {
					$(children).show();
				} else {
					$(children).hide();
				}
			});

			// on load
			if ( $( '#customize-control-bard_options-'+ select ).find('select').val() === value ) {
				$(children).show();
			} else {
				$(children).hide();
			}

		}


	/*
	** Tabs
	*/

		// Colors
		bard_customizer_label( 'colors_content_accent', 'General', 'https://www.youtube.com/watch?v=IIq2RwzUJA0' );
		bard_customizer_label( 'background_image', 'Body Background', '' );

		// General Layouts
		bard_customizer_label( 'general_sidebar_width', 'General', 'https://www.youtube.com/watch?v=8rvjmsWy_Ok' );
		bard_customizer_label( 'general_home_layout', 'Page Layouts', '' );
		bard_customizer_label( 'general_header_width', 'Boxed Controls', '' );
		bard_customizer_label( 'general_instagram_style', 'Instagram Widget', '' );

		// Page Header
		bard_customizer_checkbox_label( 'header_image_label', 'https://www.youtube.com/watch?v=9K27xZgVaVo' );

		// Site Identity
		bard_customizer_label( 'custom_logo', 'Logo Setup', 'https://www.youtube.com/watch?v=BxHuvY5JF0o' );
		bard_customizer_label( 'site_icon', 'Favicon', '' );

		// Main Navigation
		bard_customizer_checkbox_label( 'main_nav_label', '' );

		// Featured Slider
		bard_customizer_checkbox_label( 'featured_slider_label', 'https://www.youtube.com/watch?v=KAQYPbs9yn0' );

		// Featured Links
		bard_customizer_checkbox_label( 'featured_links_label', 'https://www.youtube.com/watch?v=WN-6fG7_IXg' );
		bard_customizer_label( 'featured_links_title_1', 'Featured Link #1', '' );
		bard_customizer_label( 'featured_links_title_2', 'Featured Link #2', '' );
		bard_customizer_label( 'featured_links_title_3', 'Featured Link #3', '' );

		// Blog Page
		bard_customizer_label( 'blog_page_full_width_post', 'General', 'https://www.youtube.com/watch?v=v6LhYA4nYpQ&t=1s' );
		bard_customizer_label( 'blog_page_show_dropcaps', 'Post Elements', '' );

		// Single Page
		bard_customizer_label( 'single_page_show_featured_image', 'Post Elements', '' );
		bard_customizer_label( 'single_page_related_title', 'Post Footer', '' );
		
		// Social Media
		bard_customizer_label( 'social_media_icon_1', 'Social Icon #1', 'https://www.youtube.com/watch?v=sdqxPuVJyrk' );
		bard_customizer_label( 'social_media_icon_2', 'Social Icon #2', '' );
		bard_customizer_label( 'social_media_icon_3', 'Social Icon #3', '' );
		bard_customizer_label( 'social_media_icon_4', 'Social Icon #4', '' );

		// Typography
		bard_customizer_label( 'typography_logo_family', 'Logo', '' );
		bard_customizer_label( 'typography_nav_family', 'Navigation', '' );

		// Footer
		bard_customizer_label( 'page_footer_logo', 'Footer', 'https://www.youtube.com/watch?v=trgc2BnKuZI' );

		// Contditional Logics
		bard_customizer_select( 'featured_slider_display', '#customize-control-bard_options-featured_slider_category', 'category' );
		bard_customizer_select( 'blog_page_post_description', '#customize-control-bard_options-blog_page_excerpt_length,#customize-control-bard_options-blog_page_grid_excerpt_length', 'excerpt' );


		// Add bottom space to tabs
		$('.tab-title').prev('li').not('.customize-section-description-container').css( 'padding-bottom', '20px' );


	/*
	** Fixes
	*/
	$('#customize-control-display_header_text').find('input').change(function(){
		var blogname = $('#customize-control-blogname').find('input').val();
		$('#customize-control-blogname').find('input').val( blogname + ' ').trigger('keyup');
		$('#customize-control-blogname').find('input').val( blogname ).trigger('keyup');
	});

	}); // wp.customize ready
})( jQuery );
