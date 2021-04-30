		</div><!-- .page-content -->

		<!-- Page Footer -->
		<footer id="page-footer" class="<?php echo esc_attr(bard_options( 'general_footer_width' )) === 'boxed' ? 'boxed-wrapper ': ''; ?>clear-fix">
				
			<?php

			// Instagram Widget
			get_template_part( 'templates/sidebars/instagram', 'widget' );

			// Footer Socials
			if ( bard_options( 'page_footer_show_socials' ) === true ) {
				bard_social_media( 'footer-socials', true );
			}
			
			// Footer Widgets
			echo get_template_part( 'templates/sidebars/footer', 'widgets' );

			$footer_logo = wp_get_attachment_image_src( bard_options( 'page_footer_logo' ), 'full' );

			?>
			
			<div class="footer-copyright">

				<div class="page-footer-inner <?php echo bard_options( 'general_footer_width' ) === 'contained' ? 'boxed-wrapper': ''; ?>">
					
					<!-- Footer Logo -->
					<?php if ( bard_options( 'page_footer_logo' ) != '' ) : ?>
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo('name') ); ?>">
							<img src="<?php echo esc_url( $footer_logo[0] ); ?>" width="<?php echo esc_attr( $footer_logo[1] ); ?>" height="<?php echo esc_attr( $footer_logo[2] ); ?>" alt="<?php esc_attr( bloginfo('name') ); ?>">
						</a>
					</div>
					<?php endif; ?>
					
					<div class="copyright-info">
						<?php

						$copyright = bard_options( 'page_footer_copyright' );
						$copyright = str_replace( '$year', date_i18n( 'Y' ), $copyright );
						$copyright = str_replace( '$copy', '&copy;', $copyright );

						echo wp_kses_post( $copyright );

						if ( $copyright !== '' ) {
							esc_html_e( ' | ', 'bard' );
						}

						?>

						<span class="credit">
							<?php
							$theme_data	= wp_get_theme();
							/* translators: %1$s: theme name, %2$s link, %3$s theme author */
							printf( __( '%1$s Theme by <a href="%2$s">%3$s.</a>', 'bard' ), esc_html( $theme_data->Name ), esc_url( 'http://wp-royal.com/' ), $theme_data->Author );
							?>
						</span>

						<?php 
							wp_nav_menu( array(
								'theme_location' 	=> 'footer',
								'menu_id' 		 	=> 'footer-menu',
								'menu_class' 		=> '',
								'container' 	 	=> 'nav',
								'container_class'	=> 'footer-menu-container',
								'depth'				=> 1,
								'fallback_cb' 		=> false
							) );
						?>
					</div>
			
					<?php if ( bard_options('page_footer_show_scrolltop') === true ) : ?>
					<span class="scrolltop">
						<span class="icon-angle-up"></span>
						<span><?php esc_html_e( 'Back to top', 'bard' ); ?></span>
					</span>
					<?php endif; ?>
					
				</div>

			</div><!-- .boxed-wrapper -->

		</footer><!-- #page-footer -->

	</div><!-- #page-wrap -->

<?php wp_footer(); ?>

</body>
</html>