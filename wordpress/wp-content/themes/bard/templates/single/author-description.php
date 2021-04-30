<?php

$authordesc = get_the_author_meta( 'description' );

if ( ! empty( $authordesc ) ) : ?>

<div class="author-description">  

	<a class="author-avatar" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) )); ?>">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
	</a>

	<h3><?php the_author_posts_link(); ?></h3>

	<p><?php the_author_meta( 'description' ); ?></p>

</div>

<?php endif; ?>