<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package landing Lite
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function landing_pageasy_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'render'    => 'landing_pageasy_infinite_scroll_render',
		'footer'    => 'site-footer',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'landing_pageasy_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function landing_pageasy_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_pageasy() ) :
		    landing_pageasy_archive_post();
		else :
		    landing_pageasy_archive_post();
		endif;
	}
}
