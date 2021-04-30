<?php if ( bard_options( 'top_bar_label' ) === true ) : ?>

<div id="top-bar" class="clear-fix">
	<div <?php echo esc_attr(bard_options( 'general_header_width' )) === 'contained' ? 'class="boxed-wrapper"': ''; ?>>
		
		<?php

		// Social Icons
		bard_social_media( 'top-bar-socials', false );

		// Menu
		wp_nav_menu( array(
			'theme_location' 	=> 'top',
			'menu_id' 		 	=> 'top-menu',
			'menu_class' 		=> '',
			'container' 	 	=> 'nav',
			'container_class'	=> 'top-menu-container',
			'fallback_cb' 		=> 'bard_top_menu_fallback'
		) );

		if ( bard_options( 'main_nav_label' ) === false && has_nav_menu('top') ) { ?>
				
			<!-- Mobile Menu Button -->
			<span class="mobile-menu-btn">
				<i class="fa fa-bars"></i>
			</span>

			<?php

			// Mobile Menu
			wp_nav_menu( array(
				'theme_location' 	=> 'top',
				'menu_id'        	=> 'mobile-menu',
				'menu_class' 		=> '',
				'container' 	 	=> 'nav',
				'container_class'	=> 'mobile-menu-container',
				'fallback_cb' 		=> false
			) );
		}

		?>

	</div>
</div><!-- #top-bar -->

<?php endif; ?>