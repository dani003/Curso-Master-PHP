<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
get_header('shop'); ?>
<div id="page">
	<article id="content" class="article">
		<div id="content_box" >
			<?php do_action('woocommerce_before_main_content'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php woocommerce_get_template_part( 'content', 'single-product' ); ?>
				<?php endwhile; // end of the loop. ?>
			<?php do_action('woocommerce_after_main_content'); ?>
		</div>
	</article>
	<?php /*do_action('woocommerce_sidebar');*/ ?>
	<?php get_sidebar(); ?>
</div>	
<?php get_footer(); ?>
