<?php

// Preview Check
function bard_is_preview() {
	$theme    	  = wp_get_theme();
	$theme_name   = $theme->get( 'TextDomain' );
	$active_theme = bard_get_raw_option( 'template' );
	return apply_filters( 'bard_is_preview', ( $active_theme != strtolower( $theme_name ) && ! is_child_theme() ) );
}

// Get Raw Options
function bard_get_raw_option( $opt_name ) {
	$alloptions = wp_cache_get( 'alloptions', 'options' );
	$alloptions = maybe_unserialize( $alloptions );
	return isset( $alloptions[ $opt_name ] ) ? maybe_unserialize( $alloptions[ $opt_name ] ) : false;
}

// Random Images
function bard_get_preview_img_src( $i = 0 ) {
	// prevent infinite loop
	if ( 6 == $i ) {
		return '';
	}

	$path = get_template_directory() . '/assets/images/';

	// Build or re-build the global dem img array
	if ( ! isset( $GLOBALS['bard_preview_images'] ) || empty( $GLOBALS['bard_preview_images'] ) ) {
		$imgs       = array( 'image_1.jpg', 'image_2.jpg', 'image_3.jpg', 'image_4.jpg', 'image_5.jpg', 'image_6.jpg', 'image_7.jpg' );
		$candidates = array();

		foreach ( $imgs as $img ) {
			$candidates[] = $img;
		}
		$GLOBALS['bard_preview_images'] = $candidates;
	}
	$candidates = $GLOBALS['bard_preview_images'];
	// get a random image name
	$rand_key = array_rand( $candidates );
	$img_name = $candidates[ $rand_key ];

	// if file does not exists, reset the global and recursively call it again
	if ( ! file_exists( $path . $img_name ) ) {
		unset( $GLOBALS['bard_preview_images'] );
		$i++;
		return bard_get_preview_img_src( $i );
	}

	// unset all sizes of the img found and update the global
	$new_candidates = $candidates;
	foreach ( $candidates as $_key => $_img ) {
		if ( substr( $_img, 0, strlen( "{$img_name}" ) ) === "{$img_name}" ) {
			unset( $new_candidates[ $_key ] );
		}
	}
	$GLOBALS['bard_preview_images'] = $new_candidates;
	return get_template_directory_uri() . '/assets/images/' . $img_name;
}

// Featured Images
function bard_preview_thumbnail( $input ) {
	if ( empty( $input ) && bard_is_preview() ) {
		$placeholder = bard_get_preview_img_src();
		return '<img src="' . esc_url( $placeholder ) . '" class="attachment-bard-blog size-bard-blog wp-post-image">';
	}
	return $input;
}
add_filter( 'post_thumbnail_html', 'bard_preview_thumbnail' );

// Widgets
function bard_preview_right_sidebar() {
	the_widget('WP_Widget_Recent_Posts', 'title=' . esc_html__('Recent Posts', 'bard'), 'before_title=<div class="widget-title"><h4>&after_title=</h4></div>&before_widget=<div class="bard-widget widget_recent_entries">&after_widget=</div>');
	the_widget('WP_Widget_Archives', 'title=' . esc_html__('Archives', 'bard'), 'before_title=<div class="widget-title"><h4>&after_title=</h4></div>&before_widget=<div class="bard-widget widget_archive">&after_widget=</div>');
	the_widget('WP_Widget_Categories', 'title=' . esc_html__('Categories', 'bard'), 'before_title=<div class="widget-title"><h4>&after_title=</h4></div>&before_widget=<div class="bard-widget widget_categories">&after_widget=</div>');
}

function bard_preview_alt_sidebar() {
	the_widget('WP_Widget_Search', 'title=' . esc_html__('', 'bard'), 'before_title=<div class="widget-title"><h4>&after_title=</h4></div>&before_widget=<div class="bard-widget widget_search">&after_widget=</div>');
	the_widget('WP_Widget_Pages', 'title=' . esc_html__('Pages', 'bard'), 'before_title=<div class="widget-title"><h4>&after_title=</h4></div>&before_widget=<div class="bard-widget widget_pages">&after_widget=</div>');
	the_widget('WP_Widget_Archives', 'title=' . esc_html__('Archives', 'bard'), 'before_title=<div class="widget-title"><h4>&after_title=</h4></div>&before_widget=<div class="bard-widget widget_archive">&after_widget=</div>');
}

function bard_preview_footer_widgets() {
	the_widget('WP_Widget_Recent_Posts', 'title=' . esc_html__('Recent Posts', 'bard'), 'before_title=<div class="alt-widget-title"><h4>&after_title=</h4></div>&before_widget=<div class="bard-widget widget_recent_entries">&after_widget=</div>');
	the_widget('WP_Widget_Archives', 'title=' . esc_html__('Archives', 'bard'), 'before_title=<div class="alt-widget-title"><h4>&after_title=</h4></div>&before_widget=<div class="bard-widget widget_archive">&after_widget=</div>');
	the_widget('WP_Widget_Categories', 'title=' . esc_html__('Categories', 'bard'), 'before_title=<div class="alt-widget-title"><h4>&after_title=</h4></div>&before_widget=<div class="bard-widget widget_categories">&after_widget=</div>');
}


// Main Menu
function bard_preview_navigation(){
    $pages = get_pages();  

	foreach ( $pages as $page ) {
		$menu_name = esc_html($page->post_title);
		$menu_link = get_page_link( $page->ID );

		if ( get_the_ID() == $page->ID ) {
			$current_class = "current_page_item current-menu-item";
		} else {
			$current_class = '';
		}

		$menu_class = "page-item-" . $page->ID;
		echo "<li class='page_item ". esc_attr($menu_class) ." $current_class'><a href='". esc_url($menu_link) ."'>". esc_html($menu_name) ."</a></li>";
	}
}