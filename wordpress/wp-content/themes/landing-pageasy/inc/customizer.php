<?php
/**
 * landing Theme Customizer.
 *
 * @package landing Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function landing_pageasy_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'toggle_hide_sidebar', array(
        'default' => 0,
        'sanitize_callback' => 'sanitize_text_field',
        ) );
    
    $wp_customize->add_control( 'toggle_hide_sidebar', array(
        'label'    => __( 'Hide Sidebar', 'landing-pageasy' ),
        'section'  => 'sidebars_settings',
        'priority' => 0,
        'settings' => 'toggle_hide_sidebar',
        'type'     => 'checkbox',
        ) );

    $wp_customize->add_setting( 'twitter_url', array(
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'capability'        => 'edit_theme_options',
        ) );

    $wp_customize->add_control( 'twitter_url', array(
        'label'    => __( "Twitter URL", 'landing-pageasy' ),
        'section'  => 'header_image',
        'type'     => 'text',
        'priority' => 1,
        ) );

    $wp_customize->add_setting( 'facebook_url', array(
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'capability'        => 'edit_theme_options',
        ) );

    $wp_customize->add_control( 'facebook_url', array(
        'label'    => __( "Facebook URL", 'landing-pageasy' ),
        'section'  => 'header_image',
        'type'     => 'text',
        'priority' => 1,
        ) );
    $wp_customize->add_setting( 'soundcloud_url', array(
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'capability'        => 'edit_theme_options',
        ) );

    $wp_customize->add_control( 'soundcloud_url', array(
        'label'    => __( "Soundcloud URL", 'landing-pageasy' ),
        'section'  => 'header_image',
        'type'     => 'text',
        'priority' => 1,
        ) );
    $wp_customize->add_setting( 'pinterest_url', array(
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'capability'        => 'edit_theme_options',
        ) );

    $wp_customize->add_control( 'pinterest_url', array(
        'label'    => __( "Pinterest URL", 'landing-pageasy' ),
        'section'  => 'header_image',
        'type'     => 'text',
        'priority' => 1,
        ) );
    $wp_customize->add_setting( 'youtube_url', array(
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'capability'        => 'edit_theme_options',
        ) );

    $wp_customize->add_control( 'youtube_url', array(
        'label'    => __( "Youtube URL", 'landing-pageasy' ),
        'section'  => 'header_image',
        'type'     => 'text',
        'priority' => 1,
        ) );


    $wp_customize->add_setting( 'social_media_color', array(
        'default'           => '#fab526',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_media_color', array(
        'label'       => __( 'Social Media Icons Color', 'landing-pageasy' ),
        'section'     => 'header_image',
        'priority'   => 0,
        'settings'    => 'social_media_color',
        ) ) );


    $wp_customize->add_setting( 'linkedin_url', array(
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'capability'        => 'edit_theme_options',
        ) );

    $wp_customize->add_control( 'linkedin_url', array(
        'label'    => __( "LinkedIn URL", 'landing-pageasy' ),
        'section'  => 'header_image',
        'type'     => 'text',
        'priority' => 1,
        ) );


    $wp_customize->add_setting( 'twitch_url', array(
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'capability'        => 'edit_theme_options',
        ) );

    $wp_customize->add_control( 'twitch_url', array(
        'label'    => __( "Twitch URL", 'landing-pageasy' ),
        'section'  => 'header_image',
        'type'     => 'text',
        'priority' => 1,
        ) );

        $wp_customize->add_setting( 'instagram_url', array(
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'capability'        => 'edit_theme_options',
        ) );

    $wp_customize->add_control( 'instagram_url', array(
        'label'    => __( "Instagram URL", 'landing-pageasy' ),
        'section'  => 'header_image',
        'type'     => 'text',
        'priority' => 1,
        ) );


    $wp_customize->add_setting( 'top_header_background_color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_header_background_color', array(
        'label'       => __( 'Header Background Color', 'landing-pageasy' ),
        'description' => __( 'Applied to header background.', 'landing-pageasy' ),
        'section'     => 'header_image',
        'priority'   => 10,
        'settings'    => 'top_header_background_color',
        ) ) );

    $wp_customize->add_setting( 'general_theme_color', array(
        'default'           => '#00d79b',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'general_theme_color', array(
        'label'       => __( 'General Theme Color', 'landing-pageasy' ),
        'section'     => 'colors',
        'priority'   => 1,
        'settings'    => 'general_theme_color',
        ) ) );

    $wp_customize->add_setting( 'navigation_frontpage_link_color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_frontpage_link_color', array(
        'label'       => __( 'Navigation Link Color', 'landing-pageasy' ),
        'section'     => 'colors',
        'priority'   => 1,
        'settings'    => 'navigation_frontpage_link_color',
        ) ) );


    $wp_customize->add_section( 'sidebars_settings', array(
        'title'      => __('Sidebar','landing-pageasy'),
        'priority'   => 100,
        'capability' => 'edit_theme_options',
        ) );

    $wp_customize->add_section( 'landing_pageasy_header_settings', array(
        'title'      => __('Header','landing-pageasy'),
        'priority'   => 122,
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_section( 'navigation_settings', array(
        'title'      => __('Navigation Settings','landing-pageasy'),
        'priority'   => 50,
        'capability' => 'edit_theme_options',
        ) );

    $wp_customize->get_setting( 'blogname' )->transport                              = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport                       = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport                      = 'postMessage';

}
add_action( 'customize_register', 'landing_pageasy_customize_register' );

if(! function_exists('landing_pageasy_final_output' ) ):
    function landing_pageasy_final_output(){
        ?>
        <style type="text/css">







            .related-posts .related-posts-no-img h5.title.front-view-title, #tabber .inside li .meta b,footer .widget li a:hover,.fn a,.reply a,#tabber .inside li div.info .entry-title a:hover, #navigation ul ul a:hover,.single_post a, a:hover, .sidebar.c-4-12 .textwidget a, #site-footer .textwidget a, #commentform a, #tabber .inside li a, .copyrights a:hover, a, .sidebar.c-4-12 a:hover, .top a:hover, footer .tagcloud a:hover,.sticky-text { color: <?php echo esc_attr(get_theme_mod( 'general_theme_color')); ?>; }

            .total-comments span:after, span.sticky-post, .nav-previous a:hover, .nav-next a:hover, #commentform input#submit, #pageasyform input[type='submit'], .home_menu_item, .currenttext, .pagination a:hover, .readMore a, .bclwp-subscribe input[type='submit'], .pagination .current, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-product-pageasy input[type="submit"], .woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button, #sidebars h3.widget-title:after, .postauthor h4:after, .related-posts h3:after, .archive .postsby span:after, .comment-respond h4:after, .single_post header:after, #cancel-comment-reply-link, .upper-widgets-grid h3:after, .site-branding .site-title:after, .thumbnail-post-content .entry-meta:after, .read-more, .read-more:hover, .read-more:active, .read-more:focus, .read-more:visited { background-color: <?php echo esc_attr(get_theme_mod( 'general_theme_color')); ?>; }

            #sidebars .widget h3, #sidebars .widget h3 a { border-left-color: <?php echo esc_attr(get_theme_mod( 'general_theme_color')); ?>; }

            .related-posts-no-img, #navigation ul li.current-menu-item a, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-page nav.woocommerce-pagination ul li span.current, .woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li a:focus, .woocommerce #content nav.woocommerce-pagination ul li a:focus, .woocommerce-page #content nav.woocommerce-pagination ul li a:focus, .pagination .current, .tagcloud a { border-color: <?php echo esc_attr(get_theme_mod( 'general_theme_color')); ?>; }
            .corner { border-color: transparent transparent <?php echo esc_attr(get_theme_mod( 'general_theme_color')); ?> transparent;}



        .site-branding .fa { color: <?php echo esc_attr(get_theme_mod( 'social_media_color')); ?>; }
        .site-branding .fa { border-color: <?php echo esc_attr(get_theme_mod( 'social_media_color')); ?>; }



            <?php if ( get_theme_mod( 'toggle_hide_sidebar' ) == '1' ) : ?>
            .sidebar.c-4-12 {display:none !important;}
            .article {width:100%;max-width:100%;}
        <?php endif; ?>
        .header-button-solid, .header-button-solid:hover, .header-button-solid:active, .header-button-solid:focus { color: <?php echo esc_attr(get_theme_mod( 'header_right_button_text_color')); ?>; }
        .header-button-solid, .header-button-solid:hover, .header-button-solid:active, .header-button-solid:focus { background: <?php echo esc_attr(get_theme_mod( 'header_right_button_bg')); ?>; }
        .header-button-border, .header-button-border:hover, .header-button-border:active, .header-button-border:focus { color: <?php echo esc_attr(get_theme_mod( 'header_left_button_text_color')); ?>; }
        .header-button-border, .header-button-border:hover, .header-button-border:active, .header-button-border:focus { border-color: <?php echo esc_attr(get_theme_mod( 'header_left_button_bg')); ?>; }
        .read-more, .read-more:hover, .read-more:active, .read-more:focus, .read-more:visited { background: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_btn_bg')); ?>; }
        .read-more, .read-more:hover, .read-more:active, .read-more:focus, .read-more:visited { color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_btn_txt')); ?>; }
        .pagination a, .pagination2, .pagination .dots, .post.excerpt { background: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_bg')); ?>; }
        #content, #comments, #commentsAdd, .related-posts, .single-post .post.excerpt, .postauthor { background: <?php echo esc_attr(get_theme_mod( 'post_page_background')); ?>; }
        #sidebars .widget { background: <?php echo esc_attr(get_theme_mod( 'sidebar_background_color')); ?>; }
        .upper-widgets-grid-wrapper { background: <?php echo esc_attr(get_theme_mod( 'upper_widgets_background_color')); ?>; }
        footer { background: <?php echo esc_attr(get_theme_mod( 'footer_bg_color')); ?>; }
        .copyrights { background: <?php echo esc_attr(get_theme_mod( 'footer_copyright_bg_color')); ?>; }
        #site-header { background-color: <?php echo esc_attr(get_theme_mod( 'top_header_background_color')); ?>; }
        .primary-navigation, .primary-navigation, #navigation ul ul li { background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
        a#pull, #navigation .menu a, #navigation .menu a:hover, #navigation .menu .fa > a, #navigation .menu .fa > a, #navigation .toggle-caret, #navigation span.site-logo a, #navigation.mobile-menu-wrapper .site-logo a, .primary-navigation.header-activated #navigation ul ul li a { color: <?php echo esc_attr(get_theme_mod( 'navigation_link_color')); ?> }
        #sidebars .widget h3, #sidebars .widget h3 a, #sidebars h3 { color: <?php echo esc_attr(get_theme_mod( 'sidebar_headline_color')); ?>; }
        #sidebars .widget a, #sidebars a, #sidebars li a { color: <?php echo esc_attr(get_theme_mod( 'sidebar_link_color')); ?>; }
        #sidebars .widget, #sidebars, #sidebars .widget li { color: <?php echo esc_attr(get_theme_mod( 'sidebar_text_color')); ?>; }
        .post.excerpt .post-content, .pagination a, .pagination2, .pagination .dots { color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_text')); ?>; }
        .post.excerpt h2.title a { color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_headline')); ?>; }
        .pagination a, .pagination2, .pagination .dots { border-color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_text')); ?>; }
        span.entry-meta{ color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_date')); ?>; }
        .article h1, .article h2, .article h3, .article h4, .article h5, .article h6, .total-comments, .article th{ color: <?php echo esc_attr(get_theme_mod( 'post_page_headline')); ?>; }
        .article, .article p, .related-posts .title, .breadcrumb, .article #commentform textarea  { color: <?php echo esc_attr(get_theme_mod( 'post_page_text')); ?>; }
        .article a, .breadcrumb a, #commentform a { color: <?php echo esc_attr(get_theme_mod( 'post_page_link')); ?>; }
        #commentform input#submit, #commentform input#submit:hover{ background: <?php echo esc_attr(get_theme_mod( 'post_page_link')); ?>; }
        .post-date-landing, .comment time { color: <?php echo esc_attr(get_theme_mod( 'post_page_date')); ?>; }
        .footer-widgets #pageasyform input[type='submit'],  .footer-widgets #pageasyform input[type='submit']:hover{ background: <?php echo esc_attr(get_theme_mod( 'footer_link_color')); ?>; }
        .footer-widgets h3:after{ background: <?php echo esc_attr(get_theme_mod( 'footer_headline_color')); ?>; }
        .footer-widgets h3, .footer-widgets h3 a, footer .widget.widget_rss h3 a { color: <?php echo esc_attr(get_theme_mod( 'footer_headline_color')); ?>; }
        .footer-widgets .widget li, .footer-widgets .widget, #copyright-note, footer p{ color: <?php echo esc_attr(get_theme_mod( 'footer_text_color')); ?>; }
        footer .widget a, #copyright-note a, #copyright-note a:hover, footer .widget a:hover, footer .widget li a:hover{ color: <?php echo esc_attr(get_theme_mod( 'footer_link_color')); ?>; }
        .top-column-widget a, .top-column-widget a:hover, .top-column-widget a:active, .top-column-widget a:focus { color: <?php echo esc_attr(get_theme_mod( 'upper_widgets_link_color')); ?>; }
        .top-column-widget, .upper-widgets-grid { color: <?php echo esc_attr(get_theme_mod( 'upper_widgets_content_color')); ?>; }
        .top-column-widget .widget.widget_rss h3 a, .upper-widgets-grid h3, .top-column-widget h3{ color: <?php echo esc_attr(get_theme_mod( 'upper_widgets_headlinke_color')); ?>; }
        @media screen and (min-width: 865px) {
            .primary-navigation.header-activated #navigation a { color: <?php echo esc_attr(get_theme_mod( 'navigation_frontpage_link_color')); ?>; }
        }
        @media screen and (max-width: 865px) {
            #navigation.mobile-menu-wrapper{ background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
        }
    </style>
    <?php }
    add_action( 'wp_head', 'landing_pageasy_final_output' );
    endif;

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function landing_pageasy_customize_preview_js() {
   wp_enqueue_script( 'landing_pageasy_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'landing_pageasy_customize_preview_js' );
