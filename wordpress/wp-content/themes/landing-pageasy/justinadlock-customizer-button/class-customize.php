<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class landing_pageasy_theme_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . 'justinadlock-customizer-button/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'landing_pageasy_theme_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new landing_pageasy_theme_Customize_Section_Pro(
				$manager,
				'landing-pageasy_theme',
				array(
					'title'    => esc_html__( 'Premium Edition', 'landing-pageasy' ),
					'pro_text' => esc_html__( 'Get All Features',         'landing-pageasy' ),
					'pro_url'  => 'https://superbthemes.com/landing-pageasy/',
					'priority'  => '0'
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'landing-pageasy-customize-controls', trailingslashit( get_template_directory_uri() ) . 'justinadlock-customizer-button/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'landing-pageasy-customize-controls', trailingslashit( get_template_directory_uri() ) . 'justinadlock-customizer-button/customize-controls.css' );
	}
}

// Doing this customizer thang!
landing_pageasy_theme_Customize::get_instance();
