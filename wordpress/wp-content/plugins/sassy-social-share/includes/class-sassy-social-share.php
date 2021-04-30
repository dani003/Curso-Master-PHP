<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @since      1.0.0
 *
 */

/**
 * The core plugin class.
 *
 * This is used to define hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 */
class Sassy_Social_Share {

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 */
	protected $plugin_slug;

	/**
	 * Current version of the plugin.
	 *
	 * @since    1.0.0
	 */
	protected $version;

	/**
	 * Options saved in database.
	 *
	 * @since    1.0.0
	 */
	public $options;

	/**
	 * Member to assign object of Sassy_Social_Share_Public Class.
	 *
	 * @since    1.0.0
	 */
	public $plugin_public;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * @since    1.0.0
	 */
	public function __construct( $version ) {

		$this->plugin_slug = 'sassy-social-share';
		$this->version = $version;
		$this->options = get_option( 'heateor_sss' );

		$this->load_dependencies();
		$this->set_locale();
		$this->call_admin_hooks();
		$this->call_public_hooks();
	
		$this->define_shortcodes();
		$this->define_widgets();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * @since    1.0.0
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for defining all functions for the functionality that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-sassy-social-share-admin.php';

		/**
		 * The class responsible for defining all functions for the functionality that occur at front-end of website.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-sassy-social-share-public.php';

		/**
		 * The class responsible for defining all functions for widgets.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-sassy-social-share-widgets.php';

		/**
		 * The class responsible for defining all shortcode functions.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-sassy-social-share-shortcodes.php';

		/**
		 * The class responsible for defining sharing networks and their sharer urls.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-sassy-social-share-sharing-networks.php';

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * @since    1.0.0
	 */
	private function set_locale() {

		load_plugin_textdomain( 'sassy-social-share', false, plugin_dir_path( dirname( __FILE__ ) ) . '/languages/' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality of the plugin
	 *
	 * @since    1.0.0
	 */
	private function call_admin_hooks() {

		// create object of admin class to pass options
		$plugin_admin = new Sassy_Social_Share_Admin( $this->options, $this->version );
		// hook to upate plugin db/options based on version
		add_action( 'plugins_loaded', array( $plugin_admin, 'update_db_check' ) );
		// save GDPR notification flag in DB
		add_action( 'wp_ajax_heateor_sss_gdpr_notification_read', array( $plugin_admin, 'gdpr_notification_read' ) );
		// save FB share count notification flag in DB
		add_action( 'wp_ajax_heateor_sss_fb_count_notification_read', array( $plugin_admin, 'fb_count_notification_read' ) );
		// save Twitter share count notification flag in DB
		add_action( 'wp_ajax_heateor_sss_twitter_share_notification_read', array( $plugin_admin, 'twitter_share_notification_read' ) );
		// save Twitcount notification flag in DB
		add_action( 'wp_ajax_heateor_sss_twitcount_notification_read', array( $plugin_admin, 'twitcount_notification_read' ) );
		// create admin menu
		add_action( 'admin_menu', array( $plugin_admin, 'create_admin_menu' ) );
		// set sanitization callback for plugin options
		add_action( 'admin_init', array( $plugin_admin, 'options_init' ) );
		// check if BuddyPress is active
		add_action( 'bp_include', array( $plugin_admin, 'is_bp_loaded' ) );
		// if multisite is enabled and this is the main website
		if ( is_multisite() && is_main_site() ) {
			// replicate the options to the new blog created
			add_action( 'wpmu_new_blog', array( $plugin_admin, 'replicate_settings' ) );
			// update the options in all the old blogs
			add_action( 'update_option_heateor_sss', array( $plugin_admin, 'update_old_blogs' ) );
		}
		// ajax function to clear bitly short url cache
		add_action( 'wp_ajax_heateor_sss_clear_shorturl_cache', array( $plugin_admin, 'clear_shorturl_cache' ) );
		// ajax function to clear share counts cache
		add_action( 'wp_ajax_heateor_sss_clear_share_count_cache', array( $plugin_admin, 'clear_share_count_cache' ) );
		// show notices
		add_action( 'admin_notices', array( $plugin_admin, 'show_notices' ) );
		// add links to settings, add-ons etc. to show at "Plugins" page
		add_filter( 'plugin_action_links_sassy-social-share/sassy-social-share.php', array( $plugin_admin, 'add_links' ) );

	}

	/**
	 * Register all of the hooks related to the front-end functionality of the plugin.
	 *
	 * @since    1.0.0
	 */
	private function call_public_hooks() {

		// create object of public class to pass options
		$plugin_public = new Sassy_Social_Share_Public( $this->options, $this->version );
		$this->plugin_public = $plugin_public;

		// hook the plugin functions on 'init' event.
		add_action( 'init', array( $plugin_public, 'init' ) );
		// remove render sharing action from Excerpts, as it gets nasty due to strip_tags()
		add_filter( 'get_the_excerpt', array( $plugin_public, 'remove_render_sharing' ), 9 );
		// hooks to enable sharing interface
		add_filter( 'the_content', array( $plugin_public, 'render_sharing' ), 99 );
		add_filter( 'the_excerpt', array( $plugin_public, 'render_sharing' ), 99 );
		if ( isset( $this->options['bp_activity'] ) ) {
			add_action( 'bp_activity_entry_meta', array( $plugin_public, 'render_sharing' ), 999 );
		}
		if ( isset( $this->options['bp_group'] ) || isset( $this->options['vertical_bp_group'] ) ) {
			add_action( 'bp_before_group_header', array( $plugin_public, 'render_sharing' ) );
		}
		add_filter( 'bbp_get_reply_content', array( $plugin_public, 'render_sharing' ) );
		add_filter( 'bbp_template_before_single_forum', array( $plugin_public, 'render_sharing' ) );
		add_filter( 'bbp_template_before_single_topic', array( $plugin_public, 'render_sharing' ) );
		add_filter( 'bbp_template_before_lead_topic', array( $plugin_public, 'render_sharing' ) );
		add_filter( 'bbp_template_after_single_forum', array( $plugin_public, 'render_sharing' ) );
		add_filter( 'bbp_template_after_single_topic', array( $plugin_public, 'render_sharing' ) );
		add_filter( 'bbp_template_after_lead_topic', array( $plugin_public, 'render_sharing' ) );
		// Sharing at WooCommerce pages
		if ( isset( $this->options['woocom_shop'] ) ) {
			add_action( 'woocommerce_after_shop_loop_item', array( $plugin_public, 'render_sharing' ) );
		}
		if ( isset( $this->options['woocom_product'] ) ) {
			add_action( 'woocommerce_share', array( $plugin_public, 'render_sharing' ) );
		}
		if ( isset( $this->options['woocom_thankyou'] ) ) {
			add_action( 'woocommerce_thankyou', array( $plugin_public, 'render_sharing' ) );
		}

		// fetch share counts
		add_action( 'wp_ajax_heateor_sss_sharing_count', array( $plugin_public, 'fetch_share_counts' ) );
		add_action( 'wp_ajax_nopriv_heateor_sss_sharing_count', array( $plugin_public, 'fetch_share_counts' ) );

		// save Facebook share counts
		add_action( 'wp_ajax_heateor_sss_save_facebook_shares', array( $plugin_public, 'save_facebook_shares' ) );
		add_action( 'wp_ajax_nopriv_heateor_sss_save_facebook_shares', array( $plugin_public, 'save_facebook_shares' ) );

		if ( isset( $this->options['mycred_referral'] ) ) {
			add_filter( 'heateor_sss_target_share_url_filter', array( $plugin_public, 'append_mycred_referral_id' ), 10, 3 );
		}

	}

	/**
	 * Define widgets
	 *
	 * @since    1.0.0
	 */
	private function define_widgets() {

		// standard widget
		add_action( 'widgets_init', function() { return register_widget( "Sassy_Social_Share_Standard_Widget" ); } );
		// floating widget
		add_action( 'widgets_init', function() { return register_widget( "Sassy_Social_Share_Floating_Widget" ); } );
		// follow icons widget
		add_action( 'widgets_init', function() { return register_widget( "Sassy_Social_Share_Follow_Widget" ); } );
		
	}

	/**
	 * Define shortcodes
	 *
	 * @since    1.0.0
	 */
	private function define_shortcodes() {

		// create object of shortcode class
		$plugin_shortcodes = new Sassy_Social_Share_Shortcodes( $this->options, $this->plugin_public );

		// shortcode for sharing
		add_shortcode( 'Sassy_Social_Share', array( $plugin_shortcodes, 'sharing_shortcode' ) );

		// shortcode for follow icons
		add_shortcode( 'Sassy_Follow_Icons', array( $plugin_shortcodes, 'follow_icons_shortcode' ) );

		
	}

	/**
	 * Returns the plugin slug
	 *
	 * @since     1.0.0
	 * @return    string    The plugin slug.
	 */
	public function get_plugin_slug() {

		return $this->plugin_slug;
	
	}

	/**
	 * Retrieve the version number of the plugin
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {

		return $this->version;
	
	}

}
