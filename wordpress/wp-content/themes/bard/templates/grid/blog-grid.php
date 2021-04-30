<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>

	<div class="post-media">
		<a href="<?php echo esc_url( get_permalink() ); ?>"></a>
		<?php the_post_thumbnail('bard-grid-thumbnail'); ?>
	</div>
	
	<header class="post-header">

		<?php if ( bard_options( 'blog_page_show_categories' ) === true ) : ?>
		<div class="post-categories"><?php the_category( ',&nbsp;&nbsp;' ); ?></div>
		<?php endif; ?>

		<?php if ( get_the_title() ) : ?>
		<h2 class="post-title">
			<a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a>
		</h2>
		<?php endif; ?>

		<span class="border-divider"></span>

		<?php if ( bard_options( 'blog_page_show_comments' ) ): ?>
		<div class="post-meta clear-fix">
			<?php
			if ( bard_options( 'blog_page_show_comments' ) === true && comments_open() ) {
				comments_popup_link( esc_html__( '0 Comments', 'bard' ), esc_html__( '1 Comment', 'bard' ), '% '. esc_html__( 'Comments', 'bard' ), 'post-comments');
			}
			?>
		</div>
		<?php endif; ?>
		
	</header>

	<?php if ( bard_options( 'blog_page_post_description' ) !== 'none' ) : ?>
	<div class="post-content">
		<?php
			if ( bard_options( 'blog_page_post_description' ) === 'content' ) {
				the_content('');
			} elseif ( bard_options( 'blog_page_post_description' ) === 'excerpt' ) {
				bard_excerpt( 40 );
			}
		?>
	</div>
	<?php endif; ?>

	<footer class="post-footer">

		<?php if ( bard_options( 'blog_page_show_author' ) === true ) : ?>
		<span class="post-author">
			<span><?php echo esc_html__( 'By ', 'bard' ); ?></span>
			<?php the_author_posts_link(); ?>
		</span>
		<?php endif; ?>

		<?php if ( bard_options( 'blog_page_show_date' ) === true ) : ?>
		<span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
		<?php endif; ?>

	</footer>

</article>