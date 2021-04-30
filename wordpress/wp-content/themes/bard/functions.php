<?php

/* 
** Sets up theme defaults and registers support for various WordPress features
*/
function bard_setup() {
	// Make theme available for translation
	load_theme_textdomain( 'bard', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title for us
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages
	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Logo.
	$custom_logo_defaults = array(
		'width'       => 450,
		'height'      => 200,
		'flex-width'  => true,
		'flex-height' => true,
	);
	add_theme_support( 'custom-logo', $custom_logo_defaults );

	// Add theme support for Custom Header.
	$custom_header_defaults = array(
		'width'       			=> 1300,
		'height'      			=> 500,
		'flex-width'  			=> true,
		'flex-height' 			=> true,
		'default-image' 		=> esc_url( get_template_directory_uri() ) .'/assets/images/header_bg.jpg',
		'default-text-color'	=> '111',
	);
	add_theme_support( 'custom-header', $custom_header_defaults );

	// Add theme support for Custom Background.
	$custom_background_defaults = array(
		'default-color'	=> '',
	);
	add_theme_support( 'custom-background', $custom_background_defaults );

	// Set the default content width.
	$GLOBALS['content_width'] = 960;

	// This theme uses wp_nav_menu() in two locations
	register_nav_menus( array(
		'top' 		=> __( 'Top Menu', 'bard' ),
		'main' 		=> __( 'Main Menu', 'bard' ),
		'footer' 	=> __( 'Footer Menu', 'bard' ),
	) );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Gutenberg Embeds
	add_theme_support( 'responsive-embeds' ); 

	// WooCommerce
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	// Theme Activation Notice
	add_action( 'admin_notices', 'bard_activation_notice' );
	
}
add_action( 'after_setup_theme', 'bard_setup' );


/*
** Notice after Theme Activation and Update.
*/
function bard_activation_notice() {
	if ( isset($_GET['page']) ) {
		return;
	}

	global $pagenow;
	global $current_user;

	$user_id	 = $current_user->ID;
	$theme_data	 = wp_get_theme();
	$theme_vers	 = str_replace( '.', '_', $theme_data->get( 'Version' ) );

	if ( ! get_user_meta( $user_id, esc_html( $theme_data->get( 'TextDomain' ) ) . $theme_vers .'_notice_ignore' ) ) {

		echo '<div class="notice notice-success bard-activation-notice">';

			printf( '<a href="%1$s" class="notice-dismiss dashicons dashicons-dismiss dashicons-dismiss-icon"></a>', '?' . esc_html( $theme_data->get( 'TextDomain' ) ) . $theme_vers .'_notice_ignore=0' );
		
			echo '<p>';
				/* translators: %1$s: theme name, %2$s link */
				printf( __( 'Thank you for choosing %1$s! To fully take advantage of the best our theme can offer please make sure you visit our <a href="%2$s">Welcome page</a>', 'bard' ), esc_html( $theme_data->Name ), esc_url( admin_url( 'themes.php?page=about-bard' ) ) );
			echo '</p>';

			echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=about-bard' ) ) .'" class="button button-primary">';
				/* translators: %s theme name */
				printf( esc_html__( 'Get started with %s', 'bard' ), esc_html( $theme_data->Name ) );
			echo '</a></p>';

		echo '</div>';

	}
}

function bard_notice_ignore() {
	global $current_user;
	$theme_data	 = wp_get_theme();
	$user_id	 = $current_user->ID;
	$theme_vers	 = str_replace( '.', '_', $theme_data->get( 'Version' ) );

	/* If user clicks to ignore the notice, add that to their user meta */
	if ( isset( $_GET[ esc_html( $theme_data->get( 'TextDomain' ) ) . $theme_vers .'_notice_ignore' ] ) && '0' == $_GET[ esc_html( $theme_data->get( 'TextDomain' ) ) . $theme_vers .'_notice_ignore' ] ) {
		add_user_meta( $user_id, esc_html( $theme_data->get( 'TextDomain' ) ) . $theme_vers .'_notice_ignore', 'true', true );
	}
}
add_action( 'admin_init', 'bard_notice_ignore' );

function bard_erase_ignored_notice() {
	global $current_user;
	$theme_data	 = wp_get_theme();
	$user_id	 = $current_user->ID;
	$theme_vers	 = str_replace( '.', '_', $theme_data->get( 'Version' ) );
	
	delete_user_meta( $user_id, esc_html( $theme_data->get( 'TextDomain' ) ) . $theme_vers .'_notice_ignore' );
}
add_action('after_switch_theme', 'bard_erase_ignored_notice');

function bard_admin_scripts() {
	
	// Theme Activation Notice
	wp_enqueue_style( 'bard-admin', get_theme_file_uri( '/assets/css/admin.css' ) );

}
add_action( 'admin_enqueue_scripts', 'bard_admin_scripts' );


/*
** Add a pingback url auto-discovery header for singularly identifiable articles.
*/
function bard_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'bard_pingback_header' );


/*
** Enqueue scripts and styles
*/
function bard_scripts() {

	// Theme Stylesheet
	wp_enqueue_style( 'bard-style', get_stylesheet_uri(), array(), '1.4.9.8' );

	// Fontello Icons
	wp_enqueue_style( 'fontello', get_theme_file_uri( '/assets/css/fontello.css' ) );

	// Slick Slider
	wp_enqueue_style( 'slick', get_theme_file_uri( '/assets/css/slick.css' ) );

	// Scrollbar
	wp_enqueue_style( 'scrollbar', get_theme_file_uri( '/assets/css/perfect-scrollbar.css' ) );

	// WooCommerce
	wp_enqueue_style( 'bard-woocommerce', get_theme_file_uri( '/assets/css/woocommerce.css' ) );

	// Theme Responsive CSS
	wp_enqueue_style( 'bard-responsive', get_theme_file_uri( '/assets/css/responsive.css' ) );

	// Enqueue Custom Scripts
	wp_enqueue_script( 'bard-plugins', get_theme_file_uri( '/assets/js/custom-plugins.js' ), array( 'jquery' ), false, true );
	wp_enqueue_script( 'bard-custom-scripts', get_theme_file_uri( '/assets/js/custom-scripts.js' ), array( 'jquery' ), false, true );

	// Comment reply link
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'bard_scripts' );


/*
** Google Fonts
*/
function bard_arizonia_font_url() {
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'bard' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Arizonia:300,300i,400,400i,500,500i,600,600i,700,700i' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function bard_montserrat_font_url() {
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'bard' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function bard_opensans_font_url() {
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'bard' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Open Sans:400,400i,600,600i,700,700i' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function bard_kalam_font_url() {
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'bard' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Kalam' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function bard_rokkitt_font_url() {
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'bard' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Rokkitt' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

// Enqueue Fonts
function bard_gfonts_scripts() {
    wp_enqueue_style( 'bard-montserratr-font', bard_montserrat_font_url(), array(), '1.0.0' );
    wp_enqueue_style( 'bard-opensans-font', bard_opensans_font_url(), array(), '1.0.0' );

    // Load Arizonia if selected
    if ( bard_options( 'typography_logo_family' ) == 'Arizonia' || bard_options( 'typography_nav_family' ) == 'Arizonia' ) {
    	wp_enqueue_style( 'bard-arizonia-font', bard_arizonia_font_url(), array(), '1.0.0' );
    }

    // Load Kalam if selected
    if ( bard_options( 'typography_logo_family' ) == 'Kalam' || bard_options( 'typography_nav_family' ) == 'Kalam' ) {
    	wp_enqueue_style( 'bard-kalam-font', bard_kalam_font_url(), array(), '1.0.0' );
    }

    // Load Rokkitt if selected
    if ( bard_options( 'typography_logo_family' ) == 'Rokkitt' || bard_options( 'typography_nav_family' ) == 'Rokkitt' ) {
    	wp_enqueue_style( 'bard-rokkitt-font', bard_rokkitt_font_url(), array(), '1.0.0' );
    }
}
add_action( 'wp_enqueue_scripts', 'bard_gfonts_scripts' );


/*
** Register widget areas.
*/
function bard_widgets_init() {
	
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'bard' ),
		'id'            => 'sidebar-right',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'bard' ),
		'before_widget' => '<div id="%1$s" class="bard-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h4>',
		'after_title'   => '</h4></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Left Sidebar', 'bard' ),
		'id'            => 'sidebar-left',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'bard' ),
		'before_widget' => '<div id="%1$s" class="bard-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h4>',
		'after_title'   => '</h4></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar Alt', 'bard' ),
		'id'            => 'sidebar-alt',
		'description'   => __( 'Add widgets here to appear in your alternative/fixed sidebar.', 'bard' ),
		'before_widget' => '<div id="%1$s" class="bard-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="alt-widget-title"><h4>',
		'after_title'   => '</h4></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'bard' ),
		'id'            => 'footer-widgets',
		'description'   => __( 'Add widgets here to appear in your footer.', 'bard' ),
		'before_widget' => '<div id="%1$s" class="bard-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="alt-widget-title"><h4>',
		'after_title'   => '</h4></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Instagram Widget', 'bard' ),
		'id'            => 'instagram-widget',
		'description'   => __( 'Add widget here to appear in your Footer Instagram Area.', 'bard' ),
		'before_widget' => '<div id="%1$s" class="bard-instagram-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="instagram-title"><h4>',
		'after_title'   => '</h4></div>',
	) );
}
add_action( 'widgets_init', 'bard_widgets_init' );


/*
** Custom Image Sizes
*/
add_image_size( 'bard-slider-full-thumbnail', 1080, 540, true );
add_image_size( 'bard-full-thumbnail', 1140, 0, true );
add_image_size( 'bard-grid-thumbnail', 500, 380, true );
add_image_size( 'bard-list-thumbnail', 300, 300, true );
add_image_size( 'bard-single-navigation', 75, 75, true );


/*
**  Top Menu Fallback
*/

function bard_top_menu_fallback() {
	if ( current_user_can( 'edit_theme_options' ) ) {
		echo '<ul id="top-menu">';
			echo '<li>';
				echo '<a href="'. esc_url( admin_url('nav-menus.php') ) .'">'. esc_html__( 'Setup Menu', 'bard' ) .'</a>';
			echo '</li>';
		echo '</ul>';
	}
}


/*
**  Main Menu Fallback
*/

function bard_main_menu_fallback() {
	if ( bard_is_preview() ) {
		echo '<ul id="main-menu">';
			bard_preview_navigation();
		echo '</ul>';
	} else {
		if ( current_user_can( 'edit_theme_options' ) ) {
			echo '<ul id="main-menu">';
				echo '<li>';
					echo '<a href="'. esc_url( home_url('/') .'wp-admin/nav-menus.php' ) .'">'. esc_html__( 'Setup Menu', 'bard' ) .'</a>';
				echo '</li>';
			echo '</ul>';
		}
	}
}


/*
**  Random Post Button
*/

if ( ! function_exists( 'bard_random_post_button' ) ) {
	function bard_random_post_button() {

		$args = array(
			'post_type'				=> 'post',
			'orderby' 				=> 'rand',
			'posts_per_page'		=> 1,
    		'ignore_sticky_posts' 	=> 1
		);
		$random_post = new WP_Query( $args );

		while ( $random_post->have_posts() ) : $random_post->the_post(); ?>

		<a class="random-post-btn" href="<?php the_permalink(); ?>">
			<span class="btn-tooltip"><?php esc_html_e( 'Random Article', 'bard' ); ?></span>
			<i class="fas fa-retweet"></i>
		</a>

		<?php

		endwhile;

		wp_reset_postdata();

	}
}


/*
**  Custom Excerpt Length
*/

function bard_excerpt_length( $link ) {

	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bard' ), get_the_title( get_the_ID() ) )
	);

	return 2000;
}
add_filter( 'excerpt_length', 'bard_excerpt_length', 999 );

function bard_new_excerpt( $link ) {

	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bard' ), get_the_title( get_the_ID() ) )
	);

	return '...';
}
add_filter( 'excerpt_more', 'bard_new_excerpt' );

if ( ! function_exists( 'bard_excerpt' ) ) {

	function bard_excerpt( $limit = 50 ) {
	    echo '<p>'. esc_html( wp_trim_words( get_the_excerpt(), $limit ) ) .'</p>';
	}

}

/*
** Custom Functions
*/

// HEX to RGBA Converter
function bard_hex2rgba( $color, $opacity = 1 ) {

	// remove '#' from string
	$color = substr( $color, 1 );

	// get values from string
	$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );

    // convert HEX to RGB
    $rgb = array_map( 'hexdec', $hex );

    // convert HEX to RGBA
	$output = 'rgba('. implode( ",", $rgb ) .', '. $opacity .')';

    return $output;
}


// Social Media
if ( ! function_exists( 'bard_social_media' ) ) {

	function bard_social_media( $class, $title  ) {
	
	$social_window = ( bard_options( 'social_media_window' ) === true )?'_blank':'_self';

	?>

	<div class="<?php echo esc_attr( $class ); ?>">

		<?php if ( bard_options( 'social_media_url_1' ) !== '' ) : ?>
			<a href="<?php echo esc_url( bard_options( 'social_media_url_1' ) ); ?>" target="<?php echo esc_attr($social_window); ?>">
				<span class="<?php echo esc_attr( $class ); ?>-icon"><?php bard_social_media_icon( '1' ); ?></span>
				<?php if ( $title ) : ?>
				<span><?php echo esc_html(bard_options( 'social_media_title_1' )); ?></span>
				<?php endif ;?>
			</a>
		<?php endif; ?>

		<?php if ( bard_options( 'social_media_url_2' ) !== '' ) : ?>
			<a href="<?php echo esc_url( bard_options( 'social_media_url_2' ) ); ?>" target="<?php echo esc_attr($social_window); ?>">
				<span class="<?php echo esc_attr( $class ); ?>-icon"><?php bard_social_media_icon( '2' ); ?></span>
				<?php if ( $title ) : ?>
				<span><?php echo esc_html(bard_options( 'social_media_title_2' )); ?></span>
				<?php endif ;?>
			</a>
		<?php endif; ?>

		<?php if ( bard_options( 'social_media_url_3' ) !== '' ) : ?>
			<a href="<?php echo esc_url( bard_options( 'social_media_url_3' ) ); ?>" target="<?php echo esc_attr($social_window); ?>">
				<span class="<?php echo esc_attr( $class ); ?>-icon"><?php bard_social_media_icon( '3' ); ?></span>
				<?php if ( $title ) : ?>
				<span><?php echo esc_html(bard_options( 'social_media_title_3' )); ?></span>
				<?php endif ;?>
			</a>
		<?php endif; ?>

		<?php if ( bard_options( 'social_media_url_4' ) !== '' ) : ?>
			<a href="<?php echo esc_url( bard_options( 'social_media_url_4' ) ); ?>" target="<?php echo esc_attr($social_window); ?>">
				<span class="<?php echo esc_attr( $class ); ?>-icon"><?php bard_social_media_icon( '4' ); ?></span>
				<?php if ( $title ) : ?>
				<span><?php echo esc_html(bard_options( 'social_media_title_4' )); ?></span>
				<?php endif ;?>
			</a>
		<?php endif; ?>

	</div>

	<?php

	} // bard_social_media()

	function bard_social_media_icon( $icon ) {

		$icon = bard_options( 'social_media_icon_'. $icon );

		$social_icons_fab = array(
			'facebook-f',
			'facebook',
			'twitter',
			'twitter-square',
			'google',
			'google-plus-g',
			'linkedin-in',
			'linkedin',
			'pinterest',
			'pinterest-p',
			'pinterest-square',
			'tiktok',
			'behance',
			'behance-square',
			'tumblr',
			'tumblr-square',
			'reddit',
			'reddit-alien',
			'reddit-square',
			'dribbble',
			'vk',
			'odnoklassniki',
			'skype',
			'youtube',
			'youtube-square',
			'vimeo-v',
			'vimeo',
			'twitch',
			'soundcloud',
			'instagram',
			'flickr',
			'github',
			'github-alt',
			'github-square',
			'stack-overflow',
			'qq',
			'weibo',
			'weixin',
			'xing',
			'xing-square',
			'medium',
			'etsy',
			'snapchat',
			'snapchat-ghost',
			'snapchat-square',
			'spotify',
			'meetup',
			'amazon',
			'paypal',
			'cc-paypal',
			'amazon',
			'cc-visa',
			'goodreads',
			'goodreads-g'
		);

		$social_icons_fas = array(
			'film',
			'rss',
			'heart',
			'gamepad',
			'envelope',
			'book',
			'tablet-alt',
			'credit-card',
			'user-circle',
			'bookmark',
			'comments',
			'phone',
			'user',
			'shopping-cart',
			'info',
			'info-circle',
			'map-marker-alt',
		);

		if ( in_array( $icon, $social_icons_fab ) ) {
		    echo '<i class="fab fa-'.  $icon .'"></i>';
		}

		if ( in_array( $icon, $social_icons_fas ) ) {
		    echo '<i class="fas fa-'.  $icon .'"></i>';
		}
		
	}

} // function_exists( 'bard_social_media' )


// Related Posts
if ( ! function_exists( 'bard_related_posts' ) ) {
	
	function bard_related_posts( $title, $orderby ) {

		if ( $orderby === 'none' ) {
			return;
		}

		global $post;
		$current_categories	= get_the_category();

		if ( $current_categories ) {

			$first_category	= $current_categories[0]->term_id;
			
			// Random
			if ( $orderby === 'random' ) {
				$args = array(
					'post_type'				=> 'post',
					'post__not_in'			=> array( $post->ID ),
					'orderby'				=> 'rand',
					'posts_per_page'		=> 3,
					'ignore_sticky_posts'	=> 1,
				    'meta_query' => array(
				        array(
				         'key' => '_thumbnail_id',
				         'compare' => 'EXISTS'
				        ),
				    )
				);

			// Similar
			} else {
				$args = array(
					'post_type'				=> 'post',
					'category__in'			=> array( $first_category ),
					'post__not_in'			=> array( $post->ID ),
					'orderby'				=> 'rand',
					'posts_per_page'		=> 3,
					'ignore_sticky_posts'	=> 1,
				    'meta_query' => array(
				        array(
				         'key' => '_thumbnail_id',
				         'compare' => 'EXISTS'
				        ),
				    )
				);
			}

			$similar_posts = new WP_Query( $args );	

			if ( $similar_posts->have_posts() ) {

			?>

			<div class="related-posts">
				<h3><?php echo esc_html( $title ); ?></h3>

				<?php  while ( $similar_posts->have_posts() ) : $similar_posts->the_post(); ?>

					<section>
						<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail('bard-grid-thumbnail'); ?></a>
						<h5><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h5>
						<span class="related-post-date"><?php echo esc_html( get_the_time( get_option('date_format') ) ); ?></span>
					</section>

				<?php endwhile; ?>

				<div class="clear-fix"></div>
			</div>

			<?php

			} // end have_posts()

		} // if ( $current_categories )

		wp_reset_postdata();

	} // bard_related_posts()
} // function_exists( 'bard_related_posts' )


/*
** Custom Search Form
*/
function bard_custom_search_form( $html ) {

	$html  = '<form role="search" method="get" id="searchform" class="clear-fix" action="'. esc_url( home_url( '/' ) ) .'">';
	$html .= '<input type="search" name="s" id="s" placeholder="'. esc_attr__( 'Search...', 'bard' ) .'" data-placeholder="'. esc_attr__( 'Type then hit Enter...', 'bard' ) .'" value="'. get_search_query() .'" />';
	$html .= '<span class="svg-fa-wrap"><i class="fa fa-search"></i></span>';
	$html .= '<input type="submit" id="searchsubmit" value="st" />';
	$html .= '</form>';

	return $html;

	return $html;
}
add_filter( 'get_search_form', 'bard_custom_search_form' );


/*
** Comments Form Section
*/

if ( ! function_exists( 'bard_comments' ) ) {

	function bard_comments ( $comment, $args, $depth ) {
		$_GLOBAL['comment'] = $comment;

		if (get_comment_type() == 'pingback' || get_comment_type() == 'trackback' ) : ?>
			
		<li class="pingback" id="comment-<?php comment_ID(); ?>">
			<article <?php comment_class('entry-comments'); ?> >
				<div class="comment-content">
					<h6 class="comment-author"><?php esc_html_e( 'Pingback:', 'bard' ); ?></h6>	
					<div class="comment-meta">		
						<a class="comment-date" href=" <?php echo esc_url( get_comment_link() ); ?> "><?php comment_date( get_option('date_format') ); esc_html_e( '&nbsp;at&nbsp;', 'bard' ); comment_time( get_option('time_format') ); ?></a>
						<?php echo edit_comment_link( esc_html__('[Edit]', 'bard' ) ); ?>
						<div class="clear-fix"></div>
					</div>
					<div class="comment-text">			
					<?php comment_author_link(); ?>
					</div>
				</div>
			</article>

		<?php elseif ( get_comment_type() == 'comment' ) : ?>

		<li id="comment-<?php comment_ID(); ?>">
			
			<article <?php comment_class( 'entry-comments' ); ?> >					
				<div class="comment-avatar">
					<?php echo get_avatar( $comment, 65 ); ?>
				</div>
				<div class="comment-content">
					<h6 class="comment-author"><?php comment_author_link(); ?></h6>
					<div class="comment-meta">		
						<a class="comment-date" href=" <?php echo esc_url( get_comment_link() ); ?> "><?php comment_date( get_option('date_format') ); esc_html_e( '&nbsp;at&nbsp;', 'bard' ); comment_time( get_option('time_format') ); ?></a>
			
						<?php 
						echo edit_comment_link( esc_html__('[Edit]', 'bard' ) );
						comment_reply_link(array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth']) ) );
						?>
						
						<div class="clear-fix"></div>
					</div>

					<div class="comment-text">
						<?php if ( $comment->comment_approved == '0' ) : ?>
						<p class="awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'bard' ); ?></p>
						<?php endif; ?>
						<?php comment_text(); ?>
					</div>
				</div>
				
			</article>

		<?php endif;
	}
}

// Move Comments Textarea
function bard_move_comments_field( $fields ) {

	// unset/set
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}

add_filter( 'comment_form_fields', 'bard_move_comments_field' );


/*
** Full Post Layout Post Per Page
*/

// Check for Full Post
function bard_full_width_post() {
    if ( bard_options( 'blog_page_full_width_post' ) === true ) {
		return true;
    } else {
    	return false;
    }

}

// Set Post Per Page
function bard_home_posts_per_page( $query ) {

	$query_paged = $query->query_vars['paged'];
	$posts_per_page = get_option('posts_per_page');

    if ( $query->is_home() && $query->is_main_query() && bard_full_width_post() ) {
    	if ( $query_paged == 0 ) {
    		$query->set( 'posts_per_page', $posts_per_page + 1 );
    	} else {
			$post_offset = ( ( $query_paged - 1 ) * $posts_per_page ) + 1;
			$query->set( 'offset', $post_offset );
    	}
    }

}
add_action( 'pre_get_posts',  'bard_home_posts_per_page'  );

// Remove Extra Page
function bard_adjust_offset_pagination( $found_posts, $query ) {

    if ( $query->is_home() && $query->is_main_query() && bard_full_width_post() ) {
        return $found_posts - 1;
    }

    return $found_posts;
}
add_filter('found_posts', 'bard_adjust_offset_pagination', 1, 2 );


/*
** WooCommerce
*/

// wrap woocommerce content - start
function bard_woocommerce_output_content_wrapper() {

	$layout = bard_options( 'general_content_width' ) === 'boxed' ? ' boxed-wrapper': '';

	echo '<div class="main-content clear-fix'. esc_attr( $layout ) .'">';
		echo '<div class="main-container">';

}
add_action( 'woocommerce_before_main_content', 'bard_woocommerce_output_content_wrapper', 5 );

// wrap woocommerce content - end
function bard_woocommerce_output_content_wrapper_end() {

		echo '</div><!-- .main-container -->';
	echo '</div><!-- .main-content -->';

}
add_action( 'woocommerce_after_main_content', 'bard_woocommerce_output_content_wrapper_end', 50 );

// Remove Default Sidebar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

// Change product grid columns
if ( ! function_exists('bard_woocommerce_grid_columns') ) {
	function bard_woocommerce_grid_columns() {
		return 3;
	}
}
add_filter('loop_shop_columns', 'bard_woocommerce_grid_columns');

// Change related products grid columns
add_filter( 'woocommerce_output_related_products_args', 'bard_related_products_args' );
  function bard_related_products_args( $args ) {
  	$args['posts_per_page'] = 3;
	$args['columns'] = 3;
	return $args;
}

// Remove Breadcrumbs
if ( ! function_exists('bard_remove_wc_breadcrumbs') ) {
	function bard_remove_wc_breadcrumbs() {
	    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
	}
}
add_action( 'init', 'bard_remove_wc_breadcrumbs' );

// Shop Per Page
function bard_set_shop_post_per_page() {
	return 9;
}
add_filter( 'loop_shop_per_page', 'bard_set_shop_post_per_page', 20 );

// Pagination
function bard_woocommerce_pagination() {
	get_template_part( 'templates/grid/blog', 'pagination' );
}
add_action( 'woocommerce_after_shop_loop', 'bard_woocommerce_pagination', 10 );
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );


/*
** Incs: Theme Customizer
*/

// Customizer
require get_parent_theme_file_path( '/inc/customizer/customizer.php' );
require get_parent_theme_file_path( '/inc/customizer/customizer-defaults.php' );
require get_parent_theme_file_path( '/inc/customizer/dynamic-css.php' );
require get_parent_theme_file_path( '/inc/preview/demo-preview.php' );

// About Bard
require get_parent_theme_file_path( '/inc/about/about-bard.php' );