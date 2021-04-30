<?php

// Get Previous and Next Posts
$prev_post = get_adjacent_post(false, '', true);
$next_post = get_adjacent_post(false, '', false);

?>

<div class="single-navigation">
	<!-- Previous Post -->
	<?php if ( ! empty( $prev_post ) ) : ?>
	<div class="previous-post">
		<a href="<?php echo esc_url( get_permalink($prev_post->ID) ); ?>" title="<?php echo esc_attr($prev_post->post_title); ?>">
		<?php echo get_the_post_thumbnail($prev_post->ID, 'bard-single-navigation'); ?>
		</a>
		<div>
			<span><i class="fas fa-long-arrow-alt-left"></i>&nbsp;<?php esc_html_e( 'Previous', 'bard' ) ?></span>
			<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" title="<?php echo esc_attr($prev_post->post_title); ?>">
				<h5><?php echo esc_html( $prev_post->post_title ); ?></h5>
			</a>
		</div>
	</div>
	<?php endif; ?>

	<!-- Next Post -->
	<?php if ( ! empty( $next_post ) ) : ?>
	<div class="next-post">
		<a href="<?php echo esc_url( get_permalink($next_post->ID) ); ?>" title="<?php echo esc_attr($next_post->post_title); ?>">
		<?php echo get_the_post_thumbnail($next_post->ID, 'bard-single-navigation'); ?>
		</a>
		<div>
			<span><?php esc_html_e( 'Newer', 'bard' ) ?>&nbsp;<i class="fas fa-long-arrow-alt-right"></i></span>
			<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" title="<?php echo esc_attr($next_post->post_title); ?>">
				<h5><?php echo esc_html( $next_post->post_title ); ?></h5>		
			</a>
		</div>
	</div>
	<?php endif; ?>
</div>