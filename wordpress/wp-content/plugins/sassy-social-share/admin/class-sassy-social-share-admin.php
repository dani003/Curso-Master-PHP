<?php

/**
 * Contains functions responsible for functionality at admin side
 *
 * @since      1.0.0
 *
 */

/**
 * This class defines all code necessary for functionality at admin side
 *
 * @since      1.0.0
 *
 */
class Sassy_Social_Share_Admin {

	/**
	 * Options saved in database
	 *
	 * @since    1.0.0
	 */
	private $options;

	/**
	 * Current version of the plugin
	 *
	 * @since    1.0.0
	 */
	private $version;

	/**
	 * Flag to check if BuddyPress is active
	 *
	 * @since    1.0.0
	 */
	private $is_bp_active = false;

	/**
	 * Get saved options
	 *
	 * @since    1.0.0
     * @param    array    $options    Plugin options saved in database
	 */
	public function __construct( $options, $version ) {

		$this->options = $options;
		$this->version = $version;

	}

	/**
	 * Creates plugin menu in admin area
	 *
	 * @since    1.0.0
	 */
	public function create_admin_menu() {

		$page = add_menu_page( __( 'Sassy Social Share by Heateor', 'sassy-social-share' ), 'Sassy Social Share', 'manage_options', 'heateor-sss-options', array( $this, 'options_page' ), plugins_url( '../images/logo.png', __FILE__ ) );
		// options
		$options_page = add_submenu_page( 'heateor-sss-options', __( "Sassy Social Share", 'sassy-social-share' ), __( "Sassy Social Share", 'sassy-social-share' ), 'manage_options', 'heateor-sss-options', array( $this, 'options_page' ) );
		//adding mycred addon in submenu
		$my_cred = add_submenu_page( 'heateor-sss-options', __( "Social Share myCRED Integration", 'sassy-social-share' ), __( "Social Share myCRED Integration", 'sassy-social-share' ), 'manage_options', 'heateor-sss-mycred-options', array( $this, 'mycred_options_page' ) );
		//adding recover sharing counts addon in submenu
		$rssc = add_submenu_page( 'heateor-sss-options', __( "Recover Social Share Counts", 'sassy-social-share' ), __( "Recover Social Share Counts", 'sassy-social-share' ), 'manage_options', 'heateor-sss-rssc-options', array( $this, 'rssc_option_page' ) );
		//adding analytics addon in submenu
		$ssga = add_submenu_page( 'heateor-sss-options', __( "Social Analytics", 'sassy-social-share' ), __( "Social Analytics", 'sassy-social-share' ), 'manage_options', 'heateor-sss-ssga-options', array( $this, 'ssga_option_page' ) );
		
		add_action( 'admin_print_scripts-' . $page, array( $this, 'admin_scripts' ) );
		add_action( 'admin_print_scripts-' . $page, array( $this, 'admin_style' ) );
		add_action( 'admin_print_scripts-' . $ssga, array( $this, 'admin_scripts' ) );
		add_action( 'admin_print_scripts-' . $ssga, array( $this, 'admin_style' ) );
		add_action( 'admin_print_scripts-' . $ssga, array( $this, 'fb_sdk_script' ) );
		add_action( 'admin_print_styles-' . $ssga, array( $this, 'admin_options_style' ) );
		add_action( 'admin_print_scripts-' . $rssc, array( $this, 'admin_scripts' ) );
		add_action( 'admin_print_scripts-' . $rssc, array( $this, 'admin_style' ) );
		add_action( 'admin_print_scripts-' . $rssc, array( $this, 'fb_sdk_script' ) );
		add_action( 'admin_print_styles-' . $rssc, array( $this, 'admin_options_style' ) );
		add_action( 'admin_print_scripts-' . $my_cred, array( $this, 'admin_scripts' ) );
		add_action( 'admin_print_scripts-' . $my_cred, array( $this, 'admin_style' ) );
		add_action( 'admin_print_scripts-' . $my_cred, array( $this, 'fb_sdk_script' ) );
		add_action( 'admin_print_styles-' . $my_cred, array( $this, 'admin_options_style' ) );
		add_action( 'admin_print_scripts-' . $page, array( $this, 'fb_sdk_script' ) );
		add_action( 'admin_print_styles-' . $page, array( $this, 'admin_options_style' ) );
		add_action( 'admin_print_scripts-' . $options_page, array( $this, 'admin_scripts' ) );
		add_action( 'admin_print_scripts-' . $options_page, array( $this, 'fb_sdk_script' ) );
		add_action( 'admin_print_styles-' . $options_page, array( $this, 'admin_style' ) );
		add_action( 'admin_print_scripts-' . $options_page, array( $this, 'admin_options_scripts' ) );
		add_action( 'admin_print_styles-' . $options_page, array( $this, 'admin_options_style' ) );
	
	}

	/**
	 * myCRED integration options page
	 *
	 * @since    3.3.8
	 */
	public function mycred_options_page() {
		?>
		<div class="metabox-holder columns-2" id="post-body">
			<h1>Social Share myCRED Integration</h1>
			<div class="heateor_sss_left_column">
				<a href="https://www.heateor.com/sassy-social-share-premium/" target="_blank"><img src="<?php echo plugins_url( '../images/unlock/mycred-options.png', __FILE__ ) ?>" /></a>
			</div>
			<?php include 'partials/sassy-social-share-about.php'; ?>
		</div>
		<?php
	}

	/**
	 * Options page for Recover Social Share Counts module
	 *
	 * @since    3.3.8
	 */
	public function rssc_option_page() {
		?>
		<div class="metabox-holder columns-2" id="post-body">
			<h1>Recover Social Share Counts</h1>
			<div class="heateor_sss_left_column">
				<a href="https://www.heateor.com/sassy-social-share-premium/" target="_blank"><img src="<?php echo plugins_url( '../images/unlock/rssc-options.png', __FILE__ ) ?>" /></a>
			</div>
			<?php include 'partials/sassy-social-share-about.php'; ?>
		</div>
		<?php
	}

	/**
	 * Options page for Social Analytics module
	 *
	 * @since    3.3.8
	 */
	public function ssga_option_page() {
		?>
		<div class="metabox-holder columns-2" id="post-body">
			<h1>Social Analytics</h1>
			<div class="heateor_sss_left_column">
				<a href="https://www.heateor.com/sassy-social-share-premium/" target="_blank"><img src="<?php echo plugins_url( '../images/unlock/ssga-options.png', __FILE__ ) ?>" /></a>
			</div>
			<?php include 'partials/sassy-social-share-about.php'; ?>
		</div>
		<?php
	}

	/**
	 * Register plugin settings and its sanitization callback.
	 *
	 * @since    1.0.0
	 */
	public function options_init() {

		register_setting( 'heateor_sss_options', 'heateor_sss', array( $this, 'validate_options' ) );
		
		if ( current_user_can( 'manage_options' ) ) {
			// show option to disable sharing on particular page/post
			$post_types = get_post_types( array( 'public' => true ), 'names', 'and' );
			$post_types = array_unique( array_merge( $post_types, array( 'post', 'page' ) ) );
			foreach ( $post_types as $type ) {
				add_meta_box( 'heateor_sss_meta', 'Sassy Social Share', array( $this, 'sharing_meta_setup' ), $type );
			}
			// save sharing meta on post/page save
			add_action( 'save_post', array( $this, 'save_sharing_meta' ) );
		}

	}
	
	/**
	 * Update options in all the old blogs.
	 *
	 * @since    1.0.0
	 */
	public function update_old_blogs( $old_config ) {
		
		$option_parts = explode( '_', current_filter() );
		$option = $option_parts[2] . '_' . $option_parts[3] . '_' . $option_parts[4];
		$new_config = get_option( $option );
		if ( isset( $new_config['config_multisite'] ) && $new_config['config_multisite'] == 1 ) {
			$blogs = get_blog_list( 0, 'all' );
			foreach ( $blogs as $blog ) {
				update_blog_option( $blog['blog_id'], $option, $new_config );
			}
		}
	
	}

	/**
	 * Replicate the options to the new blog created.
	 *
	 * @since    1.0.0
	 */
	public function replicate_settings( $blog_id ) {

		add_blog_option( $blog_id, 'heateor_sss', $this->options );
	
	}
	
	/**
	 * Show sharing meta options
	 *
	 * @since    1.0.0
	 */
	public function sharing_meta_setup() {

		global $post;
		$postType = $post->post_type;
		$sharing_meta = get_post_meta( $post->ID, '_heateor_sss_meta', true );
		?>
		<p>
			<label for="heateor_sss_sharing">
				<input type="checkbox" name="_heateor_sss_meta[sharing]" id="heateor_sss_sharing" value="1" <?php echo is_array( $sharing_meta ) && isset( $sharing_meta['sharing'] ) && $sharing_meta['sharing'] == '1' ? 'checked' : ''; ?> />
				<?php _e( 'Disable Standard Sharing interface on this ' . $postType, 'sassy-social-share' ) ?>
			</label>
			<br/>
			<label for="heateor_sss_vertical_sharing">
				<input type="checkbox" name="_heateor_sss_meta[vertical_sharing]" id="heateor_sss_vertical_sharing" value="1" <?php echo is_array( $sharing_meta ) && isset( $sharing_meta['vertical_sharing'] ) && $sharing_meta['vertical_sharing'] == '1' ? 'checked' : ''; ?> />
				<?php _e( 'Disable Floating Sharing interface on this ' . $postType, 'sassy-social-share' ) ?>
			</label>
			<?php
			$valid_networks = array( 'facebook', 'twitter', 'linkedin', 'buffer', 'reddit', 'pinterest', 'vkontakte', 'Odnoklassniki', 'Fintel' );
			if ( isset( $this->options['hor_enable'] ) && isset( $this->options['horizontal_counts'] ) && isset( $this->options['horizontal_re_providers'] ) && count( $this->options['horizontal_re_providers'] ) > 0 ) {
				?>
				<p>
				<strong style="font-weight: bold"><?php _e( 'Standard sharing', 'sassy-social-share' ) ?></strong>
				<?php
				foreach ( array_intersect( $this->options['horizontal_re_providers'], $valid_networks ) as $network ) {
					?>
					<br/>
					<label for="heateor_sss_<?php echo $network ?>_horizontal_sharing_count">
						<span style="width: 242px; float:left"><?php _e( 'Starting share count for ' . ucfirst( str_replace ( '_', ' ', $network ) ), 'sassy-social-share' ) ?></span>
						<input type="text" name="_heateor_sss_meta[<?php echo $network ?>_horizontal_count]" id="heateor_sss_<?php echo $network ?>_horizontal_sharing_count" value="<?php echo is_array( $sharing_meta ) && isset( $sharing_meta[$network . '_horizontal_count'] ) ? $sharing_meta[$network . '_horizontal_count'] : '' ?>" />
					</label>
					<?php
				}
				?>
				</p>
				<?php
			}
			
			if ( isset( $this->options['vertical_enable'] ) && isset( $this->options['vertical_counts'] ) && isset( $this->options['vertical_re_providers'] ) && count( $this->options['vertical_re_providers'] ) > 0 ) {
				?>
				<p>
				<strong style="font-weight: bold"><?php _e( 'Floating sharing', 'sassy-social-share' ) ?></strong>
				<?php
				foreach ( array_intersect( $this->options['vertical_re_providers'], $valid_networks ) as $network ) {
					?>
					<br/>
					<label for="heateor_sss_<?php echo $network ?>_vertical_sharing_count">
						<span style="width: 242px; float:left"><?php _e( 'Starting share count for ' . ucfirst( str_replace ( '_', ' ', $network ) ), 'sassy-social-share' ) ?></span>
						<input type="text" name="_heateor_sss_meta[<?php echo $network ?>_vertical_count]" id="heateor_sss_<?php echo $network ?>_vertical_sharing_count" value="<?php echo is_array( $sharing_meta ) && isset( $sharing_meta[$network . '_vertical_count'] ) ? $sharing_meta[$network . '_vertical_count'] : '' ?>" />
					</label>
					<?php
				}
				?>
				</p>
				<?php
			}
			?>
		</p>
		<?php
	    echo '<input type="hidden" name="heateor_sss_meta_nonce" value="' . wp_create_nonce( __FILE__ ) . '" />';
	
	}

	/**
	 * Save sharing meta fields.
	 *
	 * @since    1.0.0
	 */
	public function save_sharing_meta( $post_id ) {
	    
	    // make sure data came from our meta box
	    if ( ! isset( $_POST['heateor_sss_meta_nonce'] ) || ! wp_verify_nonce( $_POST['heateor_sss_meta_nonce'], __FILE__ ) ) {
			return $post_id;
	 	}
	    // check user permissions
	    if ( $_POST['post_type'] == 'page' ) {
	        if ( ! current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
	    	}
		} else {
	        if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
	    	}
		}
	    if ( isset( $_POST['_heateor_sss_meta'] ) ) {
			$newData = $_POST['_heateor_sss_meta'];
		} else {
			$newData = array( 'sharing' => 0, 'vertical_sharing' => 0 );
		}
		update_post_meta( $post_id, '_heateor_sss_meta', $newData );
	    return $post_id;

	}

	/** 
	 * Sanitization callback for plugin options.
	 *
	 * IMPROVEMENT: complexity can be reduced (this function is called on each option page validation and "if ( $k == 'providers' ) {"
	 * condition is being checked every time)
     * @since    1.0.0
	 */ 
	public function validate_options( $heateorSssOptions ) {
		
		foreach ( $heateorSssOptions as $k => $v ) {
			if ( is_string( $v ) ) {
				$heateorSssOptions[$k] = esc_attr( trim( $v ) );
			}
		}
		return $heateorSssOptions;

	}

	/**
	 * Include Javascript at plugin options page in admin area
	 *
	 * @since    1.0.0
	 */	
	public function admin_options_scripts() {

		wp_enqueue_script( 'heateor_sss_admin_options_script', plugins_url( 'js/sassy-social-share-options.js', __FILE__ ), array( 'jquery', 'jquery-ui-sortable' ), $this->version );
	
	}

	/**
	 * Include Javascript SDK in admin.
	 *
	 * @since    1.0.0
	 */	
	public function fb_sdk_script() {

		wp_enqueue_script( 'heateor_sss_fb_sdk_script', plugins_url( 'js/sassy-social-share-fb-sdk.js', __FILE__ ), false, $this->version );
	
	}

	/**
	 * Include CSS files in admin.
	 *
	 * @since    1.0.0
	 */	
	public function admin_style() {

		wp_enqueue_style( 'heateor_sss_admin_style', plugins_url( 'css/sassy-social-share-admin.css', __FILE__ ), false, $this->version );
	
	}

	/**
	 * Include CSS files at plugin options page in admin area
	 *
	 * @since    1.0.0
	 */	
	public function admin_options_style() {

		wp_enqueue_style( 'heateor_sss_admin_svg', plugins_url( 'css/sassy-social-share-svg.css', __FILE__ ), false, $this->version );
		if ( $this->options['horizontal_font_color_default'] != '' ) {
			$updated = $this->update_css( 'horizontal_sharing_replace_color', 'horizontal_font_color_default', 'sassy-social-share-default-svg-horizontal' );
			wp_enqueue_style( 'heateor_sss_admin_svg_horizontal', plugins_url( 'css/sassy-social-share-default-svg-horizontal.css', __FILE__ ), false, ( $updated === true ? rand() :  $this->version ) );
		}
		if ( $this->options['horizontal_font_color_hover'] != '' ) {
			$updated = $this->update_css( 'horizontal_sharing_replace_color_hover', 'horizontal_font_color_hover', 'sassy-social-share-hover-svg-horizontal' );
			wp_enqueue_style( 'heateor_sss_admin_svg_horizontal_hover', plugins_url( 'css/sassy-social-share-hover-svg-horizontal.css', __FILE__ ), false, ( $updated === true ? rand() :  $this->version ) );
		}
		if ( $this->options['vertical_font_color_default'] != '' ) {
			$updated = $this->update_css( 'vertical_sharing_replace_color', 'vertical_font_color_default', 'sassy-social-share-default-svg-vertical' );
			wp_enqueue_style( 'heateor_sss_admin_svg_vertical', plugins_url( 'css/sassy-social-share-default-svg-vertical.css', __FILE__ ), false, ( $updated === true ? rand() :  $this->version ) );
		}
		if ( $this->options['vertical_font_color_hover'] != '' ) {
			$updated = $this->update_css( 'vertical_sharing_replace_color_hover', 'vertical_font_color_hover', 'sassy-social-share-hover-svg-vertical' );
			wp_enqueue_style( 'heateor_sss_admin_svg_vertical_hover', plugins_url( 'css/sassy-social-share-hover-svg-vertical.css', __FILE__ ), false, ( $updated === true ? rand() :  $this->version ) );
		}
	
	}

	/**
	 * Update CSS file
	 *
	 * @since    1.0.0
	 */
	private function update_css( $replace_color_option, $logo_color_option, $css_file ) {
		
		if ( $this->options[$replace_color_option] != $this->options[$logo_color_option] ) {
			$path = plugin_dir_url( __FILE__ ) . 'css/' . $css_file . '.css';
			try {
				$content = file( $path );
				if ( $content !== false ) {
					$handle = fopen( dirname( __FILE__ ) . '/css/' . $css_file . '.css','w' );
					if ( $handle !== false ) {
						foreach ( $content as $value ) {
						    fwrite( $handle, str_replace( str_replace( '#', '%23', $this->options[$replace_color_option] ), str_replace( '#', '%23', $this->options[$logo_color_option] ), $value ) );
						}
						fclose( $handle );
						$this->options[$replace_color_option] = $this->options[$logo_color_option];
						update_option( 'heateor_sss', $this->options );
						return true;
					}
				}
			} catch ( Exception $e ) {  }
		}
		return false;

	}

	/**
	 * Include javascript files in admin.
	 *
	 * @since    1.0.0
	 */	
	public function admin_scripts() {
		
		?>
		<script type="text/javascript">var heateorSssWebsiteUrl = '<?php echo home_url() ?>', heateorSssHelpBubbleTitle = "<?php echo __( 'Click to toggle help', 'sassy-social-share' ) ?>", heateorSssSharingAjaxUrl = '<?php echo get_admin_url() ?>admin-ajax.php';</script>
		<?php
		wp_enqueue_script( 'heateor_sss_admin_script', plugins_url( 'js/sassy-social-share-admin.js', __FILE__ ), array( 'jquery', 'jquery-ui-tabs' ), $this->version );
	
	}

	/**
	 * Renders options page
	 *
	 * @since    1.0.0
	 */
	public function options_page() {

		// message on saving options
		echo $this->settings_saved_notification();
		$options = $this->options;
		/**
		 * The file rendering options page
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/sassy-social-share-options-page.php';
	
	}

	/**
	 * Display notification message when plugin options are saved
	 *
	 * @since    1.0.0
     * @return   string    Notification after saving options
	 */
	private function settings_saved_notification() {

		if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] == 'true' ) {
			return '<div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible below-h2"> 
	<p><strong>' . __( 'Settings saved', 'sassy-social-share' ) . '</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">' . __( 'Dismiss this notice', 'sassy-social-share' ) . '</span></button></div>';
		}
	
	}

	/**
	 * Check if plugin is active
	 *
	 * @since    1.0.0
	 */
	private function is_plugin_active( $plugin_file ) {
		return in_array( $plugin_file, apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
	}

	/**
	 * Set BuddyPress active flag to true
	 *
	 * @since    1.0.0
	 */
	public function is_bp_loaded() {
		
		$this->is_bp_active = true;
	
	}

	/**
	 * Clear Bitly shorturl cache
	 *
	 * @since    1.7
	 */
	public function clear_shorturl_cache() {
		
		global $wpdb;
		$wpdb->query( "DELETE FROM $wpdb->postmeta WHERE meta_key = '_heateor_sss_bitly_url'" );
		die;
	
	}

	/**
	 * Clear share counts cache
	 *
	 * @since    1.7
	 */
	public function clear_share_count_cache() {
		
		global $wpdb;
		$wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE '_transient_heateor_sss_share_count_%'" );
		die;
	
	}
	
	/**
	 * Save Twitter share count notification flag in DB
	 *
	 * @since    3.2.5
	 */
	public function twitter_share_notification_read() {

		update_option( 'heateor_sss_twitter_share_notification_read', '1' );
		die;
	
	}

	/**
	 * Save Twitcount notification flag in DB
	 *
	 * @since    3.2.9
	 */
	public function twitcount_notification_read() {

		update_option( 'heateor_sss_twitcount_notification_read', '1' );
		die;
	
	}

	/**
	 * Save GDPR notification flag in DB
	 *
	 * @since    3.2.1
	 */
	public function gdpr_notification_read() {

		update_option( 'heateor_sss_gdpr_notification_read', '1' );
		die;
	
	}

	/**
	 * Save Facebook share count notification flag in DB
	 *
	 * @since    3.2.20
	 */
	public function fb_count_notification_read() {

		update_option( 'heateor_sss_fb_count_notification_read', '1' );
		die;
	
	}

	/**
	 * Show notices in admin area
	 *
	 * @since    2.4
	 */
	public function show_notices() {
		
		if ( current_user_can( 'manage_options' ) ) {
			if( get_transient( 'heateor-sss-admin-notice-on-activation' ) ) { ?>
		        <div class="sassy-social-share-message notice notice-success is-dismissible">
		            <p><strong><?php printf( __( 'Thanks for installing Sassy Social Share plugin', 'sassy-social-share' ), 'http://support.heateor.com/configure-sassy-social-share' ); ?></strong></p>
		            <p>
						<a href="http://support.heateor.com/configure-sassy-social-share" target="_blank" class="button button-primary"><?php _e( 'Configure the Plugin', 'sassy-social-share' ); ?></a>
					</p>
		        </div> <?php
		        /* Delete transient, only display this notice once. */
		        delete_transient( 'heateor-sss-admin-notice-on-activation' );
		    }

			if ( defined( 'HEATEOR_SOCIAL_SHARE_MYCRED_INTEGRATION_VERSION' ) && version_compare( '1.3.3', HEATEOR_SOCIAL_SHARE_MYCRED_INTEGRATION_VERSION ) > 0 ) {
				?>
				<div class="error notice">
					<h3>Social Share - myCRED Integration</h3>
					<p><?php _e( 'Update "Social Share myCRED Integration" add-on for maximum compatibility with current version of Sassy Social Share', 'sassy-social-share' ) ?></p>
				</div>
				<?php
			}

			if ( version_compare( '3.2.20', $this->version ) <= 0 ) {
				if ( ( ( isset( $this->options['horizontal_re_providers'] ) && in_array( 'facebook', $this->options['horizontal_re_providers'] ) && ( isset( $this->options['horizontal_counts'] ) || isset( $this->options['horizontal_total_shares'] ) ) ) || ( isset( $this->options['vertical_re_providers'] ) && in_array( 'facebook', $this->options['vertical_re_providers'] ) && ( isset( $this->options['vertical_counts'] ) || isset( $this->options['vertical_total_shares'] ) ) ) ) && ! get_option( 'heateor_sss_fb_count_notification_read' ) ) {
					?>
					<script type="text/javascript">
					function heateorSssFBCountNotificationRead(){
						jQuery.ajax({
							type: 'GET',
							url: '<?php echo get_admin_url() ?>admin-ajax.php',
							data: {
								action: 'heateor_sss_fb_count_notification_read'
							},
							success: function(data, textStatus, XMLHttpRequest){
								jQuery('#heateor_sss_fb_count_notification').fadeOut();
							}
						});
					}
					</script>
					<div id="heateor_sss_fb_count_notification" class="notice notice-warning">
						<h3>Sassy Social Share</h3>
						<p>
							<?php _e( 'Save Facebook App ID and Secret keys in "Standard Interface" and/or "Floating Interface" section(s) to fix the issue with Facebook share count. After that, clear share counts cache from "Miscellaneous" section.', 'sassy-social-share' ); ?>
							<p><input type="button" onclick="heateorSssFBCountNotificationRead()" style="margin-left: 5px;" class="button button-primary" value="<?php _e( 'Okay', 'sassy-social-share' ) ?>" /></p>
						</p>
					</div>
					<?php
				}
			}

			if ( version_compare( '3.2.1', $this->version ) <= 0 ) {
				if ( ! get_option( 'heateor_sss_gdpr_notification_read' ) ) {
					?>
					<script type="text/javascript">
					function heateorSssGDPRNotificationRead(){
						jQuery.ajax({
							type: 'GET',
							url: '<?php echo get_admin_url() ?>admin-ajax.php',
							data: {
								action: 'heateor_sss_gdpr_notification_read'
							},
							success: function(data, textStatus, XMLHttpRequest){
								jQuery('#heateor_sss_gdpr_notification').fadeOut();
							}
						});
					}
					</script>
					<div id="heateor_sss_gdpr_notification" class="notice notice-warning">
						<h3>Sassy Social Share</h3>
						<p><?php echo sprintf( __( 'This plugin is GDPR compliant. You need to update the privacy policy of your website regarding the personal data this plugin saves, as mentioned <a href="%s" target="_blank">here</a>', 'sassy-social-share' ), 'http://support.heateor.com/gdpr-and-our-plugins' ); ?><input type="button" onclick="heateorSssGDPRNotificationRead()" style="margin-left: 5px;" class="button button-primary" value="<?php _e( 'Okay', 'sassy-social-share' ) ?>" /></p>
					</div>
					<?php
				}
			}

			if ( version_compare( '3.2.5', $this->version ) <= 0 ) {
				if ( (isset( $this->options['hor_enable'] ) && isset( $this->options['horizontal_re_providers'] ) && in_array( 'twitter', $this->options['horizontal_re_providers'] ) && ( isset( $this->options['horizontal_counts'] ) || isset( $this->options['horizontal_total_shares'] ) ) ) || ( isset( $this->options['vertical_enable'] ) && isset( $this->options['vertical_re_providers'] ) && in_array( 'twitter', $this->options['vertical_re_providers'] ) && ( isset($this->options['vertical_counts'] ) || isset( $this->options['vertical_total_shares'] ) ) ) ) {
					if ( ! get_option( 'heateor_sss_twitter_share_notification_read' ) ) {
						?>
						<script type="text/javascript">
						function heateorSssTwitterShareNotificationRead(){
							jQuery.ajax({
								type: 'GET',
								url: '<?php echo get_admin_url() ?>admin-ajax.php',
								data: {
									action: 'heateor_sss_twitter_share_notification_read'
								},
								success: function(data, textStatus, XMLHttpRequest){
									jQuery('#heateor_sss_twitter_share_notification').fadeOut();
								}
							});
						}
						</script>
						<div id="heateor_sss_twitter_share_notification" class="notice notice-warning">
							<h3>Sassy Social Share</h3>
							<p><?php echo sprintf( __( 'Twitter share counts are no longer working as newsharecounts.com is down. To continue showing the Twitter shares, just sign up <a href="%s" target="_blank">here</a> with this domain. No other steps needed.', 'sassy-social-share' ), 'https://opensharecount.com' ); ?><input type="button" onclick="heateorSssTwitterShareNotificationRead()" style="margin-left: 5px;" class="button button-primary" value="<?php _e( 'Okay', 'sassy-social-share' ) ?>" /></p>
						</div>
						<?php
					}

					if ( ! get_option( 'heateor_sss_twitcount_notification_read' ) ) {
						?>
						<script type="text/javascript">
						function heateorSssTwitcountNotificationRead(){
							jQuery.ajax({
								type: 'GET',
								url: '<?php echo get_admin_url() ?>admin-ajax.php',
								data: {
									action: 'heateor_sss_twitcount_notification_read'
								},
								success: function(data, textStatus, XMLHttpRequest){
									jQuery('#heateor_sss_twitcount_notification').fadeOut();
								}
							});
						}
						</script>
						<div id="heateor_sss_twitcount_notification" class="notice notice-warning">
							<h3>Sassy Social Share</h3>
							<p><?php echo sprintf( __( 'Now plugin supports a new service Twitcount.com to show Twitter shares. To continue showing the Twitter shares, click "Give me my Twitter counts back" button at <a href="%s" target="_blank">their website</a> and register your website %s with them. No need to copy-paste any code from their website.', 'sassy-social-share' ), 'http://twitcount.com', home_url() ); ?><input type="button" onclick="heateorSssTwitcountNotificationRead()" style="margin-left: 5px;" class="button button-primary" value="<?php _e( 'Okay', 'sassy-social-share' ) ?>" /></p>
						</div>
						<?php
					}
				}
			}
		}

	}

	/**
	 * Show links at "Plugins" page in admin area
	 *
	 * @since    2.5.1
	 */
	public function add_links( $links ) {
	    
	    if ( is_array( $links ) ) {
		    $addons_link = '<a href="https://www.heateor.com/add-ons" target="_blank">' . __( 'Add-Ons', 'sassy-social-share' ) . '</a>';
		    $support_link = '<br/><a href="http://support.heateor.com" target="_blank">' . __( 'Support Documentation', 'sassy-social-share' ) . '</a>';
		    $settings_link = '<a href="admin.php?page=heateor-sss-options">' . __( 'Settings', 'sassy-social-share' ) . '</a>';
		    
		    // place it before other links
			array_unshift( $links, $settings_link );
			
			$links[] = $addons_link;
			$links[] = $support_link;
		}
		
		return $links;

	}

	/**
	 * Update options based on plugin version
	 *
	 * @since    2.5.8
	 */
	public function update_db_check() {

		$current_version = get_option( 'heateor_sss_version' );
		if ( $current_version != $this->version ) {
			if ( $this->options['horizontal_font_color_default'] ) {
				heateor_sss_update_svg_css( $this->options['horizontal_font_color_default'], 'sassy-social-share-default-svg-horizontal' );
			}
			if ( $this->options['horizontal_font_color_hover'] ) {
				heateor_sss_update_svg_css( $this->options['horizontal_font_color_hover'], 'sassy-social-share-hover-svg-horizontal' );
			}
			if ( $this->options['vertical_font_color_default'] ) {
				heateor_sss_update_svg_css( $this->options['vertical_font_color_default'], 'sassy-social-share-default-svg-vertical' );
			}
			if ( $this->options['vertical_font_color_hover'] ) {
				heateor_sss_update_svg_css( $this->options['vertical_font_color_hover'], 'sassy-social-share-hover-svg-vertical' );
			}

			if ( version_compare( '3.3.9', $current_version ) > 0 ) {
				$this->options['bitly_access_token'] = '';
				update_option( 'heateor_sss', $this->options );
			}

			if ( version_compare( '3.3', $current_version ) > 0 ) {
				$this->options['youtube_username'] = '';
				$this->options['vertical_youtube_username'] = '';
				update_option( 'heateor_sss', $this->options );
			}

			if ( version_compare( '3.2.24', $current_version ) > 0 ) {
				if ( ! $this->options['fb_key'] && ! $this->options['fb_secret'] && $this->options['vertical_fb_key'] && $this->options['vertical_fb_secret'] ) {
					$this->options['fb_key'] = $this->options['vertical_fb_key'];
					$this->options['fb_secret'] = $this->options['vertical_fb_secret'];
				}
				update_option( 'heateor_sss', $this->options );
			}

			if ( version_compare( '3.2.20', $current_version ) > 0 ) {
				$this->options['fb_key'] = '';
				$this->options['fb_secret'] = '';
				$this->options['vertical_fb_key'] = '';
				$this->options['vertical_fb_secret'] = '';
				update_option( 'heateor_sss', $this->options );
			}
			
			if ( version_compare( '3.2.18', $current_version ) > 0 ) {
				$networks_to_remove = array( 'google_plus', 'google_plusone', 'google_plus_share' );
				if ( $this->options['vertical_re_providers'] ) {
					$this->options['vertical_re_providers'] = array_diff( $this->options['vertical_re_providers'], $networks_to_remove );
				}
				if ( $this->options['horizontal_re_providers'] ) {
					$this->options['horizontal_re_providers'] = array_diff( $this->options['horizontal_re_providers'], $networks_to_remove );
				}
				update_option( 'heateor_sss', $this->options );
			}

			if ( version_compare( '3.2.6', $current_version ) > 0 ) {
				$networks_to_remove = array( 'yahoo', 'Yahoo_Messenger', 'delicious', 'Polyvore', 'Oknotizie', 'Baidu', 'diHITT', 'Netlog', 'NewsVine', 'NUjij', 'Segnalo', 'Stumpedia', 'YouMob' );
				if ( $this->options['vertical_re_providers'] ) {
					$this->options['vertical_re_providers'] = array_diff( $this->options['vertical_re_providers'], $networks_to_remove );
				}
				if ( $this->options['horizontal_re_providers'] ) {
					$this->options['horizontal_re_providers'] = array_diff( $this->options['horizontal_re_providers'], $networks_to_remove );
				}
				update_option( 'heateor_sss', $this->options );
			}

			if ( version_compare( '3.2.5', $current_version ) > 0 ) {
				$this->options['tweet_count_service'] = 'opensharecount';
				update_option( 'heateor_sss', $this->options );
			}

			if ( version_compare( "3.2.4", $current_version ) > 0 ) {
				if ( isset( $this->options['horizontal_re_providers'] ) ) {
					foreach( $this->options['horizontal_re_providers'] as $key => $social_network ) {
						if ( $social_network == 'stumbleupon_badge' ) {
							unset( $this->options['horizontal_re_providers'][$key] );
						} elseif ( $social_network == 'stumbleupon' ) {
							$this->options['horizontal_re_providers'][$key] = 'mix';
						}
					}
				}
				if ( isset( $this->options['vertical_re_providers'] ) ) {
					foreach ( $this->options['vertical_re_providers'] as $key => $social_network ) {
						if ( $social_network == 'stumbleupon_badge' ) {
							unset( $this->options['vertical_re_providers'][$key] );
						} elseif ( $social_network == 'stumbleupon' ) {
							$this->options['vertical_re_providers'][$key] = 'mix';
						}
					}
				}
				update_option( 'heateor_sss', $this->options );
			}

			if ( version_compare( '1.7', $current_version ) > 0 ) {
				$this->options['share_count_cache_refresh_count'] = '10';
				$this->options['share_count_cache_refresh_unit'] = 'minutes';
				update_option( 'heateor_sss', $this->options );
			}

			if ( version_compare( '2.3', $current_version ) > 0 ) {
				$this->options['amp_enable'] = '1';
				update_option( 'heateor_sss', $this->options );
			}

			if ( version_compare( '2.4', $current_version ) > 0 ) {
				$this->options['instagram_username'] = '';
				$this->options['vertical_instagram_username'] = '';
				update_option( 'heateor_sss', $this->options );
			}

			if ( version_compare( '2.5.8', $current_version ) > 0 ) {
				$this->options['bottom_sharing_position_radio'] = 'responsive';
				update_option( 'heateor_sss', $this->options );
			}

			if ( version_compare( '3.0', $current_version ) > 0 ) {
				$this->options['comment_container_id'] = 'respond';
				$this->options['vertical_comment_container_id'] = 'respond';
				update_option( 'heateor_sss', $this->options );
			}

			// update plugin version in database
			update_option( 'heateor_sss_version', $this->version );
		}
	
	}

}
