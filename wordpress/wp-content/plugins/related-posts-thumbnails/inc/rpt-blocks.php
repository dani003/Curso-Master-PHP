<?php
/**
 * Enqueue block editor only JavaScript and CSS.
 *
 */
function enqueue_block_editor_assets() {
	$block_path = 'assets/blocks/js/blocks.editor.js';
	$style_path = 'assets/blocks/css/blocks.editor.min.css';

	// Enqueue the bundled block JS file
	wp_enqueue_script( 'rpt-blocks-js', RELATED_POSTS_THUMBNAILS_URI.$block_path, array('wp-i18n', 'wp-element', 'wp-blocks', 'wp-components', 'wp-editor'), RELATED_POSTS_THUMBNAILS_VERSION );

	// Enqueue optional editor only styles
	wp_enqueue_style( 'rpt-blocks-editor-css', RELATED_POSTS_THUMBNAILS_URI.$style_path, array(), RELATED_POSTS_THUMBNAILS_VERSION );
}

add_action('enqueue_block_editor_assets', 'enqueue_block_editor_assets');

/**
 * Create related posts block category.
 *
 */
function rpt_block_category( $categories ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'related-post-thumbnails-blocks',
				'title' => __( 'Related Posts Thumbnails', 'related-post-thumbnails' ),
			),
		)
	);
}

add_filter( 'block_categories', 'rpt_block_category', 10, 2);

/* * * * * * * * * *
* Dynamic Block
* * * * * * * * * */

add_action('plugins_loaded', 'register_rpt_dynamic_block');

/**
 * Register the dynamic block.
 *
 * @since 2.0.0
 *
 * @return void
 */
function register_rpt_dynamic_block() {
	// Only load if Gutenberg is available.
	if (!function_exists('register_block_type')) {
	return;
	}

	// Hook server side rendering into render callback
	register_block_type('related-post-thumbnails/rpt-block', array(
	'render_callback' => 'render_rpt_dynamic_block'
	));
}

/**
 * Server rendering render_callback
 * @param $atts block attributes.
 *  
 */
function render_rpt_dynamic_block( $atts ) {
	$posts_number = 3;
	$posts_sort   = 'random';
	$main_title   = '';

	if ( ! empty( $atts ) ) {
		$posts_number = isset($atts['postNumber']) ? $atts['postNumber'] : $posts_number;
		$posts_sort   = isset($atts['postSort']) ? $atts['postSort'] : $posts_sort;
		$main_title   = isset($atts['mainTitle']) ? str_replace( ' ', '_', $atts['mainTitle'] ) : $main_title;
	}

	return do_shortcode( '[related-posts-thumbnails posts_number=' . $posts_number . ' posts_sort=' . $posts_sort . ' main_title=' . $main_title . ']' );
}

?>
