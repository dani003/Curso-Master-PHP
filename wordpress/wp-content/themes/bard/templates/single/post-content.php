<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php

if ( have_posts() ) :

	// Loop Start
	while ( have_posts() ) :

		the_post();

?>	

	<?php if ( bard_options( 'single_page_show_featured_image' ) === true ) : ?>
	<div class="post-media">
		<?php the_post_thumbnail('bard-full-thumbnail'); ?>
	</div>
	<?php endif; ?>

	<header class="post-header">

		<?php if ( bard_options( 'single_page_show_categories' ) === true ) : ?>
		<div class="post-categories"><?php the_category( ',&nbsp;&nbsp;' ); ?></div>
		<?php endif; ?>

		<?php if ( get_the_title() ) : ?>
		<h1 class="post-title"><?php the_title(); ?></h1>
		<?php endif; ?>
		
		<span class="border-divider"></span>

		<div class="post-meta clear-fix">
			<?php if ( bard_options( 'single_page_show_date' ) === true ) : ?>
			<span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
			<?php endif; ?>
		</span>
		
	</header>

	<div class="post-content">

		<?php

		// The Post Content
		the_content('');

		// Post Pagination
		$defaults = array(
			'before' => '<p class="single-pagination">'. esc_html__( 'Pages:', 'bard' ),
			'after' => '</p>'
		);

		wp_link_pages( $defaults );

		?>
	</div>

	<footer class="post-footer">

		<?php the_tags( '<div class="post-tags">','','</div>' ); ?>

		<?php if ( bard_options( 'single_page_show_author' ) === true ) : ?>
		<span class="post-author"><?php esc_html_e( 'By', 'bard' ); ?>&nbsp;<?php the_author_posts_link(); ?></span>
		<?php endif; ?>

		<?php

		if ( bard_options( 'single_page_show_comments' ) === true && comments_open() ) {
			comments_popup_link( esc_html__( '0 Comments', 'bard' ), esc_html__( '1 Comment', 'bard' ), '% '. esc_html__( 'Comments', 'bard' ), 'post-comments');
		}

		?>
		
	</footer>

<?php

	endwhile; // Loop End
endif; // have_posts()

?>

</article>