<?php

$featured_links_image_1 = wp_get_attachment_image_src( bard_options( 'featured_links_image_1' ), 'full' );
$featured_links_image_2 = wp_get_attachment_image_src( bard_options( 'featured_links_image_2' ), 'full' );
$featured_links_image_3 = wp_get_attachment_image_src( bard_options( 'featured_links_image_3' ), 'full' );

?>

<div id="featured-links" class="<?php echo esc_attr(bard_options( 'general_links_width' )) === 'boxed' ? ' boxed-wrapper': ''; ?> clear-fix">

	<!-- Link 1 -->
	<?php if ( isset($featured_links_image_1[0]) ): ?>
	<div class="featured-link">
		<img src="<?php echo esc_url( $featured_links_image_1[0] ); ?>" width="<?php echo esc_attr( $featured_links_image_1[1] ); ?>" height="<?php echo esc_attr( $featured_links_image_1[2] ); ?>" alt="<?php echo esc_attr( bard_options( 'featured_links_title_1' ) ); ?>">
		<a href="<?php echo esc_url( bard_options( 'featured_links_url_1' ) ); ?>">
			<div class="cv-outer">
				<div class="cv-inner">
					<h6><?php echo esc_html( bard_options( 'featured_links_title_1' ) ); ?></h6>
				</div>
			</div>
		</a>
	</div>
	<?php endif; ?>
	
	<!-- Link 2 -->
	<?php if ( isset($featured_links_image_2[0]) ): ?>
	<div class="featured-link">
		<img src="<?php echo esc_url( $featured_links_image_2[0] ); ?>" width="<?php echo esc_attr( $featured_links_image_2[1] ); ?>" height="<?php echo esc_attr( $featured_links_image_2[2] ); ?>" alt="<?php echo esc_attr( bard_options( 'featured_links_title_2' ) ); ?>">
		<a href="<?php echo esc_url( bard_options( 'featured_links_url_2' ) ); ?>">
			<div class="cv-outer">
				<div class="cv-inner">
					<h6><?php echo esc_html( bard_options( 'featured_links_title_2' ) ); ?></h6>
				</div>
			</div>
		</a>
	</div>
	<?php endif; ?>
	
	<!-- Link 3 -->
	<?php if ( isset($featured_links_image_3[0]) ): ?>
	<div class="featured-link">
		<img src="<?php echo esc_url( $featured_links_image_3[0] ); ?>" width="<?php echo esc_attr( $featured_links_image_3[1] ); ?>" height="<?php echo esc_attr( $featured_links_image_3[2] ); ?>" alt="<?php echo esc_attr( bard_options( 'featured_links_title_3' ) ); ?>">
		<a href="<?php echo esc_url( bard_options( 'featured_links_url_3' ) ); ?>">
			<div class="cv-outer">
				<div class="cv-inner">
					<h6><?php echo esc_html( bard_options( 'featured_links_title_3' ) ); ?></h6>
				</div>
			</div>
		</a>
	</div>
	<?php endif; ?>

</div><!-- #featured-links -->