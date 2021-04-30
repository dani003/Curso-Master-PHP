<?php if ( bard_options( 'main_nav_label' ) === true ) : ?>
	
<div id="main-nav" class="clear-fix">

	<div <?php echo esc_attr(bard_options( 'general_header_width' )) === 'contained' ? 'class="boxed-wrapper"': ''; ?>>	
		
		<div class="main-nav-buttons">

			<!-- Alt Sidebar Icon -->
			<?php if ( bard_options( 'main_nav_show_sidebar' ) === true ) : ?>
			<div class="main-nav-sidebar">
				<span class="btn-tooltip"><?php esc_html_e( 'Alt Sidebar', 'bard' ); ?></span>
				<div>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<?php endif; ?>

			<!-- Random Post Button -->			
			<?php if ( bard_options( 'main_nav_show_random_btn' ) === true ) : ?>
				<?php bard_random_post_button(); ?>
			<?php endif; ?>
			
		</div>

		<!-- Icons -->
		<div class="main-nav-icons">
			<?php if ( bard_options( 'main_nav_show_search' ) === true ) : ?>
			<div class="main-nav-search">
				<span class="btn-tooltip"><?php esc_html_e( 'Search', 'bard' ); ?></span>
				<i class="fas fa-search"></i>
				<i class="fas fa-times"></i>
				<?php get_search_form(); ?>
			</div>
			<?php endif; ?>
		</div>


		<!-- Mobile Menu Button -->
		<span class="mobile-menu-btn">
			<i class="fas fa-chevron-down"></i>
		</span>

		<?php // Navigation Menus

		wp_nav_menu( array(
			'theme_location' 	=> 'main',
			'menu_id'        	=> 'main-menu',
			'menu_class' 		=> '',
			'container' 	 	=> 'nav',
			'container_class'	=> 'main-menu-container',
			'fallback_cb' 		=> 'bard_main_menu_fallback'
		) );
		
		$mobile_menu_location = 'main';
		$mobile_menu_items = '';

		if ( bard_options( 'main_nav_merge_menu' ) === true ) {
			$mobile_menu_items = wp_nav_menu( array(
				'theme_location' => 'top',
				'container'		 => '',
				'items_wrap' 	 => '%3$s',
				'echo'			 => false,
				'fallback_cb'	 => false,
			) );

			if ( ! has_nav_menu('main') ) {
				$mobile_menu_location = 'top';
				$mobile_menu_items = '';
			}
		}
		

		wp_nav_menu( array(
			'theme_location' 	=> $mobile_menu_location,
			'menu_id'        	=> 'mobile-menu',
			'menu_class' 		=> '',
			'container' 	 	=> 'nav',
			'container_class'	=> 'mobile-menu-container',
			'items_wrap' 		=> '<ul id="%1$s" class="%2$s">%3$s '. $mobile_menu_items .'</ul>',
			'fallback_cb'	    => false,
		) );

		?>

	</div>

</div><!-- #main-nav -->

<?php endif; ?>