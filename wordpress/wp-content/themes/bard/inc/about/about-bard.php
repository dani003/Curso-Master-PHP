<?php // About Bard

// Add About Bard Page
function bard_about_page() {
	add_theme_page( esc_html__( 'About Bard', 'bard' ), esc_html__( 'About Bard', 'bard' ), 'edit_theme_options', 'about-bard', 'bard_about_page_output' );
}
add_action( 'admin_menu', 'bard_about_page' );

// Render About Bard HTML
function bard_about_page_output() {

	$theme_data	 = wp_get_theme();

?>
	<div class="wrap">
		<h1>
			<?php /* translators: %s theme name */
				printf( esc_html__( 'Welcome to %s', 'bard' ), esc_html( $theme_data->Name ) );
			?>
		</h1>
		<p class="welcome-text">
			<?php /* translators: %s theme name */
					printf( esc_html__( '%s theme is one of the most Popular Free WordPress theme of 2017-2021 years. To understand better what the theme can offer, please click the button below.', 'bard' ), esc_html( $theme_data->Name ) );
				?>
				<br><br><a href="<?php echo esc_url('https://wp-royal.com/themes/bard-free/demo/?ref=bard-free-backend-about-theme-prev-btn'); ?>" class="button button-primary button-hero" target="_blank"><?php esc_html_e( 'Theme Demo Preview', 'bard' ); ?></a>
		</p><br>

		<?php

		// Get Active Tab
		if ( isset($_GET[ 'tab' ]) ) {
			$active_tab = sanitize_key($_GET[ 'tab' ]);
		} else {
			$active_tab = 'bard_tab_1';
		}


		?>

		<!-- Tabs -->
		<div class="nav-tab-wrapper">
			<a href="?page=about-bard&tab=bard_tab_1" class="nav-tab <?php echo $active_tab == 'bard_tab_1' ? 'nav-tab-active' : ''; ?>">
				<?php esc_html_e( 'Getting Started', 'bard' ); ?>
			</a>
			<a href="?page=about-bard&tab=bard_tab_2" class="nav-tab <?php echo $active_tab == 'bard_tab_2' ? 'nav-tab-active' : ''; ?>">
				<span class="dashicons dashicons-video-alt3"></span><?php esc_html_e( 'Video Tutorials', 'bard' ); ?>
			</a>
			<a href="?page=about-bard&tab=bard_tab_3" class="nav-tab <?php echo $active_tab == 'bard_tab_3' ? 'nav-tab-active' : ''; ?>">
				<?php esc_html_e( 'Useful Plugins', 'bard' ); ?>
			</a>
			<a href="?page=about-bard&tab=bard_tab_4" class="nav-tab <?php echo $active_tab == 'bard_tab_4' ? 'nav-tab-active' : ''; ?>">
				<?php esc_html_e( 'Support', 'bard' ); ?>
			</a>
			<a href="?page=about-bard&tab=bard_tab_5" class="nav-tab <?php echo $active_tab == 'bard_tab_5' ? 'nav-tab-active' : ''; ?>">
				<span class="dashicons dashicons-star-filled"></span> <?php esc_html_e( 'Free vs Pro', 'bard' ); ?>
			</a>
		</div>

		<!-- Tab Content -->
		<?php if ( $active_tab == 'bard_tab_1' ) : ?>

			<div class="three-columns-wrap">

				<br>

				<div class="column-width-3 docs-desc">
					<h3><?php esc_html_e( 'Documentation', 'bard' ); ?></h3>
					<p>
						<?php /* translators: %s theme name */
						printf( esc_html__( 'Need more details? Please check our full documentation for detailed information on how to use %s.', 'bard' ), esc_html( $theme_data->Name ) );
					?>
					</p>
					<a target="_blank" href="<?php echo esc_url('https://wp-royal.com/themes/bard/docs/?ref=bard-free-backend-about-docs/'); ?>" class="button button-primary"><?php esc_html_e( 'Read Full Documentation', 'bard' ); ?></a>
					<a target="_blank" href="<?php echo esc_url('https://www.youtube.com/watch?v=E8vmC4BPU0U'); ?>" class="button button-primary insta"><span class="dashicons dashicons-video-alt3"></span><?php esc_html_e( 'Setup Instagram', 'bard' ); ?></a>
				</div>

				<div class="column-width-3">
					<h3><?php esc_html_e( 'Demo Content', 'bard' ); ?></h3>
					<p>
						<?php esc_html_e( 'If you are a WordPress beginner it\'s highly recommended to install the theme Demo Content. This file includes: Menus, Posts, Pages, Widgets, etc.', 'bard' ); ?>
					</p>

					<?php if ( is_plugin_active( 'bard-extra/bard-extra.php' ) ) : ?>
						<a href="<?php echo admin_url( '/admin.php?page=bard-extra' ); ?>" class="button button-primary demo-import"><?php esc_html_e( 'Go to Import page', 'bard' ); ?></a>
					<?php elseif ( bard_check_installed_plugin( 'bard-extra', 'bard-extra' ) ) : ?>
						<button class="button button-primary demo-import" id="bard-demo-content-act"><?php esc_html_e( 'Activate Demo Import Plugin', 'bard' ); ?></button>
					<?php else: ?>
						<button class="button button-primary demo-import" id="bard-demo-content-inst"><?php esc_html_e( 'Install Demo Import Plugin', 'bard' ); ?></button>
					<?php endif; ?>

					<a href="<?php echo esc_url('https://youtu.be/_XnzQ_nU7r8') ?>" target="_blank" class="button button-primary import-video"><span class="dashicons dashicons-video-alt3"></span><?php esc_html_e( 'Demo Import Video Tutorial', 'bard' ); ?></a>
				</div>

				<div class="column-width-3">
					<h3><?php esc_html_e( 'Theme Customizer', 'bard' ); ?></h3>
					<p>
					<?php /* translators: %s theme name */
						printf( esc_html__( '%s supports the Theme Customizer for all theme settings. Click "Customize" to personalize your site.', 'bard' ), esc_html( $theme_data->Name ) );
					?>
					</p>
					<a target="_blank" href="<?php echo esc_url( wp_customize_url() );?>" class="button button-primary"><?php esc_html_e( 'Start Customizing', 'bard' ); ?></a>
				</div>

			</div>

			<!-- Predefined Styles -->
			<div class="four-columns-wrap">
			
			<hr>
			
				<h2><?php esc_html_e( 'Bard Pro - Predefined Styles', 'bard' ); ?></h2>
				<p>
					<?php /* translators: %s link */
						printf( __( 'Bard Pro\'s powerful setup allows you to easily create unique looking sites. Here are a few included examples that can be installed with one click in the Pro Version. More details in the <a href="%s" target="_blank" >Theme Documentation</a>', 'bard' ), esc_url('https://wp-royal.com/themes/bard/docs/?ref=bard-free-backend-about-predefined-styles#predefined') );
					?>
				</p>

				<div class="column-width-4">
					<div class="active-style"><?php esc_html_e( 'Active', 'bard' ); ?></div>
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/main.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Main', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/demo/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/food.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Food', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/food/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/lifestyle.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Lifestyle', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/lifestyle/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/dark.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Dark', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/color-black/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>	
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/img1.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Style 1', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/typography-v1/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/img2.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Style 2', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/sample-v3/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/img3.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Style 3', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/columns2-sidebar/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/img4.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Style 4', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/sample-v5/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/img5.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Style 5', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/color-colorful/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/img6.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Style 6', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/columns4/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/img7.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Style 7', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/columns3-sidebar/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/img8.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Style 8', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/color-black-white/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/img9.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Style 9', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/columns3-nsidebar/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>
				<div class="column-width-4">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/img10.jpg'; ?>" alt="">
					<div>
						<h2><?php esc_html_e( 'Style 10', 'bard' ); ?></h2>
						<a href="<?php echo esc_url('https://wp-royal.com/themes/bard-pro/columns2-nsidebar/?ref=bard-free-backend-about-predefined-styles'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'bard' ); ?></a>
					</div>
				</div>

			</div>
		
		<?php elseif ( $active_tab == 'bard_tab_2' ) : ?>

			<div class="four-columns-wrap video-tutorials">

				<div class="column-width-4">
					<h3><?php esc_html_e( 'Demo Content', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://youtu.be/_XnzQ_nU7r8"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
					<a class="button button-secondary" href="<?php echo esc_url(admin_url('themes.php?page=about-bard&tab=bard_tab_1')); ?>"></span><?php esc_html_e( 'Get Started', 'bard' ); ?></a>
				</div>
				<div class="column-width-4">
					<h3><?php esc_html_e( 'Setup Instagram Widget', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://www.youtube.com/watch?v=E8vmC4BPU0U"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
				</div>
				<div class="column-width-4">
					<h3><?php esc_html_e( 'Setup Menu', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://www.youtube.com/watch?v=9M38Z2CLKOg"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
					<a class="button button-secondary" target="_blank" href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"></span><?php esc_html_e( 'Customize', 'bard' ); ?></a>
				</div>
				<div class="column-width-4">
					<h3><?php esc_html_e( 'Setup Logo Image', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://www.youtube.com/watch?v=BxHuvY5JF0o"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
					<a class="button button-secondary" target="_blank" href="<?php echo esc_url(admin_url('customize.php?autofocus[section]=title_tagline')); ?>"></span><?php esc_html_e( 'Customize', 'bard' ); ?></a>
				</div>
				<div class="column-width-4">
					<h3><?php esc_html_e( 'Setup Social Media', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://www.youtube.com/watch?v=sdqxPuVJyrk"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
					<a class="button button-secondary" target="_blank" href="<?php echo esc_url(admin_url('customize.php?autofocus[section]=bard_social_media')); ?>"></span><?php esc_html_e( 'Customize', 'bard' ); ?></a>
				</div>
				<div class="column-width-4">
					<h3><?php esc_html_e( 'Setup Copyright', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://www.youtube.com/watch?v=trgc2BnKuZI"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
					<a class="button button-secondary" target="_blank" href="<?php echo esc_url(admin_url('customize.php?autofocus[section]=bard_page_footer')); ?>"></span><?php esc_html_e( 'Customize', 'bard' ); ?></a>
				</div>
				<div class="column-width-4">
					<h3><?php esc_html_e( 'Setup Colors', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://www.youtube.com/watch?v=IIq2RwzUJA0"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
					<a class="button button-secondary" target="_blank" href="<?php echo esc_url(admin_url('customize.php?autofocus[section]=bard_colors')); ?>"></span><?php esc_html_e( 'Customize', 'bard' ); ?></a>
				</div>
				<div class="column-width-4">
					<h3><?php esc_html_e( 'Setup Header Image', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://www.youtube.com/watch?v=9K27xZgVaVo"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
					<a class="button button-secondary" target="_blank" href="<?php echo esc_url(admin_url('customize.php?autofocus[section]=header_image')); ?>"></span><?php esc_html_e( 'Customize', 'bard' ); ?></a>
				</div>
				<div class="column-width-4">
					<h3><?php esc_html_e( 'Setup Random Header Images', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://www.youtube.com/watch?v=sayr8QwpbrM"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
					<a class="button button-secondary" target="_blank" href="<?php echo esc_url(admin_url('customize.php?autofocus[section]=header_image')); ?>"></span><?php esc_html_e( 'Customize', 'bard' ); ?></a>
				</div>
				<div class="column-width-4">
					<h3><?php esc_html_e( 'Setup Featured Slider', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://www.youtube.com/watch?v=KAQYPbs9yn0"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
					<a class="button button-secondary" target="_blank" href="<?php echo esc_url(admin_url('customize.php?autofocus[section]=bard_featured_slider')); ?>"></span><?php esc_html_e( 'Customize', 'bard' ); ?></a>
				</div>
				<div class="column-width-4">
					<h3><?php esc_html_e( 'Setup Featured Links', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://www.youtube.com/watch?v=WN-6fG7_IXg"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
					<a class="button button-secondary" target="_blank" href="<?php echo esc_url(admin_url('customize.php?autofocus[section]=bard_featured_links')); ?>"></span><?php esc_html_e( 'Customize', 'bard' ); ?></a>
				</div>
				<div class="column-width-4">
					<h3><?php esc_html_e( 'Create Blog Post', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://www.youtube.com/watch?v=gvW0FhT-cSQ"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
				</div>
				<div class="column-width-4">
					<h3><?php esc_html_e( 'Translate The Theme', 'bard' ); ?></h3>
					<a class="button button-primary" target="_blank" href="https://www.youtube.com/watch?v=7LtyVjw46r8"><?php esc_html_e( 'Watch Video', 'bard' ); ?></a>
				</div>

			</div>

		<?php elseif ( $active_tab == 'bard_tab_3' ) : ?>
			
			<div class="three-columns-wrap">
				
				<br><br>

				<?php

				// WooCommerce
				bard_recommended_plugin( 'woocommerce', 'woocommerce' );

				// MailPoet 2
				bard_recommended_plugin( 'wysija-newsletters', 'index' );

				// Contact Form 7
				bard_recommended_plugin( 'contact-form-7', 'wp-contact-form-7' );

				// Recent Posts Widget
				bard_recommended_plugin( 'recent-posts-widget-with-thumbnails', 'recent-posts-widget-with-thumbnails' );

				// Meks Easy Instagram Widget
				// bard_recommended_plugin( 'meks-easy-instagram-widget', 'meks-easy-instagram-widget' );

				// Smash Balloon Social Photo Feed
				bard_recommended_plugin( 'instagram-feed', 'instagram-feed' );

				// Ajax Thumbnail Rebuild
				bard_recommended_plugin( 'ajax-thumbnail-rebuild', 'ajax-thumbnail-rebuild' );

				// Facebook Widget
				bard_recommended_plugin( 'facebook-pagelike-widget', 'facebook_widget' );

				// Simple Social Icons
				bard_recommended_plugin( 'simple-social-icons', 'simple-social-icons' );

				?>


			</div>

		<?php elseif ( $active_tab == 'bard_tab_4' ) : ?>

			<div class="three-columns-wrap">

				<br>

				<div class="column-width-3">
					<h3>
						<span class="dashicons dashicons-sos"></span>
						<?php esc_html_e( 'Forums', 'bard' ); ?>
					</h3>
					<p>
						<?php esc_html_e( 'Before asking a questions it\'s highly recommended to search on forums, but if you can\'t find the solution feel free to create a new topic.', 'bard' ); ?>
						<hr>
						<a target="_blank" href="<?php echo esc_url('https://wp-royal.com/support-bard-free/?ref=bard-free-backend-about-support-forum/'); ?>"><?php esc_html_e( 'Go to Support Forums', 'bard' ); ?></a>
					</p>
				</div>


				<div class="column-width-3">
					<h3>
						<span class="dashicons dashicons-admin-tools"></span>
						<?php esc_html_e( 'Changelog', 'bard' ); ?>
					</h3>
					<p>
						<?php esc_html_e( 'Want to get the gist on the latest theme changes? Just consult our changelog below to get a taste of the recent fixes and features implemented.', 'bard' ); ?>
						<hr>
						<a target="_blank" href="<?php echo esc_url('https://wp-royal.com/bard-free-changelog/?ref=bard-free-backend-about-changelog/'); ?>"><?php esc_html_e( 'Changelog', 'bard' ); ?></a>
					</p>
				</div>

			</div>

			<div class="three-columns-wrap">

				<br>

				<div class="column-width-3">
					<h3>
						<span class="dashicons dashicons-email"></span>
						<?php esc_html_e( 'Email Support', 'bard' ); ?>
					</h3>
					<p>
						<?php esc_html_e( 'If you have any kind of theme related questions, feel free to ask.', 'bard' ); ?>
						<hr>
						<a target="_blank" href="<?php echo esc_url('https://wp-royal.com/contact/?ref=bard-free-backend-about-contact/#!/cform'); ?>"><?php esc_html_e( 'Contact Us', 'bard' ); ?></a>
					</p>
				</div>

			</div>

		<?php elseif ( $active_tab == 'bard_tab_5' ) : ?>

			<br><br>

			<table class="free-vs-pro form-table">
				<thead>
					<tr>
						<th>
							<a href="<?php echo esc_url('https://wp-royal.com/themes/item-bard-pro/?ref=bard-free-backend-about-section-getpro-btn'); ?>" target="_blank" class="button button-primary button-hero">
								<?php esc_html_e( 'Get Bard Pro', 'bard' ); ?>
							</a>
						</th>
						<th><?php esc_html_e( 'Bard', 'bard' ); ?></th>
						<th><?php esc_html_e( 'Bard Pro', 'bard' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<h3><?php esc_html_e( '800+ Google Fonts', 'bard' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Header Background Image/Color/Video', 'bard' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Unlimited Colors Options', 'bard' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Classic, List, Grid Layouts', 'bard' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Advanced Slider Options', 'bard' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Advanced WooCommerce Support', 'bard' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Sticky Navigation', 'bard' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Premium Support 24/7', 'bard' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>


					<tr>
						<td colspan="3">
							<a href="<?php echo esc_url('https://wp-royal.com/themes/item-bard-pro/?ref=bard-free-backend-about-section-feature-list-btn#features'); ?>" target="_blank" class="button button-primary button-hero">
								<strong><?php esc_html_e( 'View Full Feature List', 'bard' ); ?></strong>
							</a>
						</td>
					</tr>
				</tbody>
			</table>

	    <?php endif; ?>

	</div><!-- /.wrap -->
<?php
} // end bard_about_page_output

// Check if plugin is installed
function bard_check_installed_plugin( $slug, $filename ) {
	return file_exists( ABSPATH . 'wp-content/plugins/' . $slug . '/' . $filename . '.php' ) ? true : false;
}

// Generate Recommended Plugin HTML
function bard_recommended_plugin( $slug, $filename ) {

	if ( $slug === 'facebook-pagelike-widget' ) {
		$size = '128x128';
	} else {
		$size = '256x256';
	}


	$plugin_info = bard_call_plugin_api( $slug );
	$plugin_desc = $plugin_info->short_description;
	$plugin_img  = ( ! isset($plugin_info->icons['1x']) ) ? $plugin_info->icons['default'] : $plugin_info->icons['1x'];
?>

	<div class="plugin-card">
		<div class="name column-name">
			<h3>
				<?php echo esc_html( $plugin_info->name ); ?>
				<img src="<?php echo $plugin_img; ?>" class="plugin-icon" alt="">
			</h3>
		</div>
		<div class="action-links">
			<?php if ( bard_check_installed_plugin( $slug, $filename ) ) : ?>
			<button type="button" class="button button-disabled" disabled="disabled"><?php esc_html_e( 'Installed', 'bard' ); ?></button>
			<?php else : ?>
			<a class="install-now button-primary" href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin='. $slug ), 'install-plugin_'. $slug ) ); ?>" >
				<?php esc_html_e( 'Install Now', 'bard' ); ?>
			</a>
			<?php endif; ?>
		</div>
		<div class="desc column-description">
			<p><?php echo $plugin_desc . esc_html__( '...', 'bard' ); ?></p>
		</div>
	</div>

<?php
}

// Get Plugin Info
function bard_call_plugin_api( $slug ) {

	$call_api = get_transient( 'bard_about_plugin_info_' . $slug );

	if ( false === $call_api ) {

	    if ( ! function_exists( 'plugins_api' ) && file_exists( trailingslashit( ABSPATH ) . 'wp-admin/includes/plugin-install.php' ) ) {
	        require_once( trailingslashit( ABSPATH ) . 'wp-admin/includes/plugin-install.php' );
	    }

	    if ( function_exists( 'plugins_api' ) ) {

			$call_api = plugins_api(
				'plugin_information', array(
					'slug'   => $slug,
					'fields' => array(
						'downloaded'        => false,
						'rating'            => false,
						'description'       => false,
						'short_description' => true,
						'donate_link'       => false,
						'tags'              => false,
						'sections'          => true,
						'homepage'          => true,
						'added'             => false,
						'last_updated'      => false,
						'compatibility'     => false,
						'tested'            => false,
						'requires'          => false,
						'downloadlink'      => false,
						'icons'             => true,
					),
				)
			);

			if ( ! is_wp_error( $call_api ) ) {
				set_transient( 'bard_about_plugin_info_' . $slug, $call_api, 30 * MINUTE_IN_SECONDS );
			}

		}
	}

	return $call_api;
}

// Install/Activate Demo Import Plugin 
function bard_plugin_auto_activation() {

	// Get the list of currently active plugins (Most likely an empty array)
	$active_plugins = (array) get_option( 'active_plugins', array() );

	array_push( $active_plugins, 'bard-extra/bard-extra.php' );

	// Set the new plugin list in WordPress
	update_option( 'active_plugins', $active_plugins );

}
add_action( 'wp_ajax_bard_plugin_auto_activation', 'bard_plugin_auto_activation' );

// enqueue ui CSS/JS
function bard_enqueue_about_page_scripts($hook) {

	if ( 'appearance_page_about-bard' != $hook ) {
		return;
	}

	// enqueue CSS
	wp_enqueue_style( 'bard-about-css', get_theme_file_uri( '/inc/about/css/about-page.css' ), array(), '1.4' );

	// Demo Import
	wp_enqueue_script( 'plugin-install' );
	wp_enqueue_script( 'updates' );
	wp_enqueue_script( 'bard-about-page-css', get_theme_file_uri( '/inc/about/js/about-bard-page.js' ), array(), '1.4' );

}
add_action( 'admin_enqueue_scripts', 'bard_enqueue_about_page_scripts' );