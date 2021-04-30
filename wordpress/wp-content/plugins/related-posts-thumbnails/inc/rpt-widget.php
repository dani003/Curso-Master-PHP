<?php


/**
 * Get Related posts Thumbnails function to get the thumbnails
 *
 * @return void
 */
function get_related_posts_thumbnails() {
	global $related_posts_thumbnails;
	echo $related_posts_thumbnails->get_html();
}

/**
 * Related Posts Widget, will be displayed on post page
 */
class RelatedPostsThumbnailsWidget extends WP_Widget {

	function __construct() {
		$args = array(
			'classname' => 'relpoststh_widget',
		);
		parent::__construct( false, 'Related Posts Thumbnails', $args );
	}

	/**
	 * Show Widget 
	 *
	 * @param $args
	 * @param $instance
	 * 
	 * @return void
	 */
	function widget( $args, $instance ) {
		if ( is_single() && ! is_page() ) { // display on post page only
			extract( $args );
			$title = apply_filters( 'widget_title', $instance['title'] );
			echo $before_widget;
			if ( $title ) {
				echo $before_title . $title . $after_title; }
			get_related_posts_thumbnails();
			echo $after_widget;
		}
	}

	/**
	 * Widget Instance update
	 *
	 * @param $new_instance
	 * @param $old_instance
	 * 
	 * @return $instance
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		return $instance;
	}

	/**
	 * Widget Form 
	 *
	 * @param $instance
	 * 
	 * @return void
	 */
	function form( $instance ) {
		$title = !empty( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?> <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
		<?php
	}
} // class RelatedPostsThumbnailsWidget


/**
 * Register Widget.
 *
 * @version 1.9.0
 * 
 */
function register_wpb_rpt_widget() {
    register_widget( 'RelatedPostsThumbnailsWidget' );
}
add_action( 'widgets_init', 'register_wpb_rpt_widget' );

?>
