<?php
/**
 * The template for displaying pageasy results pages.
 *
 * @package landing Lite
 */

get_header(); ?>
	<div id="page" class="pageasy-area">
		<div class="article">
			<?php if ( have_posts() ) :
				$landing_pageasy_full_posts = get_theme_mod('landing_pageasy_full_posts');
				while ( have_posts() ) : the_post();
					landing_pageasy_archive_post();
				endwhile;
				landing_pageasy_post_navigation();
			else : ?>
				<div class="single_post clear">
					<article id="content" class="article page">
						<header>
							<h1 class="title"><?php esc_html_e( 'Nothing Found', 'landing-pageasy' ); ?></h1>
						</header>
						<p><?php esc_html_e( 'Sorry, but nothing matched your pageasy terms. Please try again with some different keywords.', 'landing-pageasy' ); ?></p>
						<?php get_pageasy_form(); ?>
					</article>
				</div>
			<?php endif; ?>
		</div><!-- .article -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>
