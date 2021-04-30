<?php

// Admin interface
if ( isset( $_POST[ 'action' ] ) && ( $_POST[ 'action' ] == 'update' ) ) {
    if ( !current_user_can( 'manage_options' ) ) {
        wp_die( __( 'No access', 'related-posts-thumbnails' ) );
    }
    check_admin_referer( 'related-posts-thumbnails' );
    $validation = true;

    $set_date = isset( $_POST[ 'rpt_post_include' ] ) ? sanitize_text_field( wp_unslash( $_POST[ 'rpt_post_include' ] ) ) : '';

    if ( $validation ) {

        if ( isset( $_POST[ 'relpoststh_single_only' ] ) ) {
            update_option( 'relpoststh_single_only', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_single_only' ] ) ) );
        } else {
            update_option( 'relpoststh_single_only', '0' );
		}

		if ( isset( $_POST[ 'relpoststh_mobile_view' ] ) ) {
			update_option( 'relpoststh_mobile_view', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_mobile_view' ] ) ) );
		} else {
			update_option( 'relpoststh_mobile_view', '0' );
		}

        if ( isset( $_POST[ 'relpoststh_post_types' ] ) ) {
            update_option( 'relpoststh_post_types', array_map( 'sanitize_text_field', wp_unslash( $_POST[ 'relpoststh_post_types' ] ) ) );
        } else {
            update_option( 'relpoststh_post_types', array ());
        }

        if ( isset( $_POST[ 'onlywiththumbs' ] ) ) {
            update_option( 'relpoststh_onlywiththumbs', sanitize_text_field( wp_unslash( $_POST[ 'onlywiththumbs' ] ) ) );
        } else {
            update_option( 'relpoststh_onlywiththumbs', '0' );
        }

        // if ( isset( $_POST[ 'relpoststh_show_date' ] ) ) {
        //     update_option( 'relpoststh_show_date', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_show_date' ] ) )  );
        // } else {
        //     update_option( 'relpoststh_show_date', '0' );
        // }

        if ( isset( $_POST[ 'relpoststh_output_style' ] ) ) {
            update_option( 'relpoststh_output_style', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_output_style' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_cleanhtml' ] ) ) {
            update_option( 'relpoststh_cleanhtml', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_cleanhtml' ] ) ) );
        } else {
            update_option( 'relpoststh_cleanhtml', '0' );
        }

        if ( isset( $_POST[ 'relpoststh_auto' ] ) ) {
            update_option( 'relpoststh_auto', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_auto' ] ) ) );
        } else {
            update_option( 'relpoststh_auto', '0' );
        }

        if ( isset( $_POST[ 'relpoststh_top_text' ] ) ) {
            update_option( 'relpoststh_top_text', wp_kses( $_POST[ 'relpoststh_top_text' ], $this->wp_kses_rp_args ) );
        }


        if ( isset( $_POST[ 'relpoststh_number' ] ) ) {
            update_option( 'relpoststh_number', absint( $_POST[ 'relpoststh_number' ] ) );
        }

        if ( isset( $_POST[ 'relpoststh_relation' ] ) ) {
            update_option( 'relpoststh_relation', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_relation' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_default_image' ] ) ) {
            update_option( 'relpoststh_default_image', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_default_image' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_poststhname' ] ) ) {
            update_option( 'relpoststh_poststhname', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_poststhname' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_background' ] ) ) {
            update_option( 'relpoststh_background', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_background' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_hoverbackground' ] ) ) {
            update_option( 'relpoststh_hoverbackground', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_hoverbackground' ] ) ) );
        }


        if ( isset( $_POST[ 'relpoststh_bordercolor' ] ) ) {
            update_option( 'relpoststh_bordercolor', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_bordercolor' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_fontcolor' ] ) ) {
            update_option( 'relpoststh_fontcolor', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_fontcolor' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_fontsize' ] ) ) {
            update_option( 'relpoststh_fontsize', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_fontsize' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_fontfamily' ] ) ) {
            update_option( 'relpoststh_fontfamily', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_fontfamily' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_textlength' ] ) ) {
            update_option( 'relpoststh_textlength', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_textlength' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_excerptlength' ] ) ) {
            update_option( 'relpoststh_excerptlength', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_excerptlength' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_thsource' ] ) ) {
            update_option( 'relpoststh_thsource', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_thsource' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_customfield' ] ) ) {
            update_option( 'relpoststh_customfield', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_customfield' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_theme_resize_url' ] ) ) {
            update_option( 'relpoststh_theme_resize_url', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_theme_resize_url' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_customwidth' ] ) ) {
            update_option( 'relpoststh_customwidth', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_customwidth' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_customheight' ] ) ) {
            update_option( 'relpoststh_customheight', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_customheight' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_textblockheight' ] ) ) {
            update_option( 'relpoststh_textblockheight', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_textblockheight' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_customwidth' ] ) ) {
            update_option( 'relpoststh_customwidth', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_customwidth' ] ) ) );
        }

        if ( isset( $_POST[ 'rpt_post_sort' ] ) ) {
            update_option( 'rpt_post_sort', sanitize_text_field( wp_unslash( $_POST[ 'rpt_post_sort' ] ) ) );
        }

        if ( isset( $_POST[ 'relpoststh_categories' ] ) ) {
            update_option( 'relpoststh_categories', array_map( 'sanitize_text_field', wp_unslash( $_POST[ 'relpoststh_categories' ] ) ) );
        } else {
            update_option( 'relpoststh_categories', array ());
        }

        if ( isset( $_POST[ 'relpoststh_categoriesall' ] ) ) {
            update_option( 'relpoststh_categoriesall', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_categoriesall' ] ) ) );
        } else {
            update_option( 'relpoststh_categoriesall', '' );
        }

        if ( isset( $_POST[ 'relpoststh_show_categoriesall' ] ) ) {
            update_option( 'relpoststh_show_categoriesall', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_show_categoriesall' ] ) ) );
        } else {
            update_option( 'relpoststh_show_categoriesall', '' );
        }

        if ( isset( $_POST[ 'relpoststh_show_categories' ] ) ) {
            update_option( 'relpoststh_show_categories', array_map( 'sanitize_text_field', wp_unslash( $_POST[ 'relpoststh_show_categories' ] ) ) );
        } else {
            update_option( 'relpoststh_show_categories', array ());
        }

        if ( isset( $_POST[ 'relpoststh_devmode' ] ) ) {
            update_option( 'relpoststh_devmode', sanitize_text_field( wp_unslash( $_POST[ 'relpoststh_devmode' ] ) ) );
        } else {
            update_option( 'relpoststh_devmode', '0' );
        }

        update_option( 'relpoststh_startdate', $set_date );

        if ( isset( $_POST[ 'relpoststh_custom_taxonomies' ] ) ) {
            update_option( 'relpoststh_custom_taxonomies', array_map( 'sanitize_text_field', wp_unslash( $_POST[ 'relpoststh_custom_taxonomies' ] ) ) );
        } else {
            update_option( 'relpoststh_custom_taxonomies', array ());
        }

        // Updating layout option
        // if ( isset( $_POST['relpoststh_layout_style'] ) ) {
        //     update_option( 'relpoststh_layout_style', sanitize_text_field( $_POST['relpoststh_layout_style'] ) );
        // }

        echo "<div class='updated fade'><p>" . __( 'Settings updated', 'related-posts-thumbnails' ) . '</p></div>';
    } else {
        echo "<div class='error fade'><p>" . __( 'Settings update failed', 'related-posts-thumbnails' ) . '. ' . $error . '</p></div>';
    }
}
$available_sizes = array(
  'thumbnail'	=> 'thumbnail',
  'medium'		=> 'medium'
);

/**
 * By using this filter, can modified the default options of 'Related posts thumbnail sizes'. 
 * To add WordPress standard size which is original image resolution (unmodified).
 * 
 * @since 1.9.0
 * 
 * @param array '$available_sizes' Associative array of post thumbnail sizes.
 */

$available_sizes = apply_filters( 'rpt_thumbnailsizes', $available_sizes );

if ( current_theme_supports( 'post-thumbnails' ) ) {

    global $_wp_additional_image_sizes;
    
	if ( is_array( $_wp_additional_image_sizes ) ) {
        $available_sizes = array_merge( $available_sizes, $_wp_additional_image_sizes );
    }
}

// Related posts get settings options
$relpoststh_single_only        = get_option( 'relpoststh_single_only', $this->single_only );
$relpoststh_auto               = get_option( 'relpoststh_auto', $this->auto );
$relpoststh_cleanhtml          = get_option( 'relpoststh_cleanhtml', 0 );
$relpoststh_relation           = get_option( 'relpoststh_relation', $this->relation );
$relpoststh_thsource           = get_option( 'relpoststh_thsource', $this->thsource );
$relpoststh_devmode            = get_option( 'relpoststh_devmode', $this->devmode );
$relpoststh_categoriesall      = get_option( 'relpoststh_categoriesall', $this->categories_all );
$relpoststh_categories         = get_option( 'relpoststh_categories' );
// $relpoststh_show_date          = get_option( 'relpoststh_show_date', '0' );
$relpoststh_mobile_view		   = get_option( 'relpoststh_mobile_view' );
$relpoststh_show_categories    = get_option( 'relpoststh_show_categories', get_option( 'relpoststh_categories' ) );
$relpoststh_show_categoriesall = get_option( 'relpoststh_show_categoriesall', $relpoststh_categoriesall );
$onlywiththumbs                = get_option( 'relpoststh_onlywiththumbs', false );
$relpoststh_startdate          = explode( '-', get_option( 'relpoststh_startdate' ) );
$relpoststh_output_style       = get_option( 'relpoststh_output_style', $this->output_style );
$thsources                     = array( 'post-thumbnails' => __( 'Post thumbnails', 'related_posts_thumbnails' ),'custom-field' => __( 'Custom field', 'related_posts_thumbnails' ) );
$categories                    = get_categories();

if ( $this->wp_version >= 3 ) {
    $post_types = get_post_types( array( 'public' => 1 ) );
} else {
    $post_types = get_post_types();
}

$relpoststh_post_types = get_option( 'relpoststh_post_types', $this->post_types );

$output_styles         = array(
	'div' => __( 'Blocks', 'related-posts-thumbnails' ),
	'list' => __( 'List', 'related-posts-thumbnails' ) );

$relation_options      = array(
	'categories' => __( 'Categories', 'related-posts-thumbnails' ),
	'tags' => __( 'Tags', 'related-posts-thumbnails' ),
	'both' => __( 'Categories and Tags', 'related-posts-thumbnails' ),
	'no' => __( 'Random', 'related-posts-thumbnails' ),
	'custom' => __( 'Custom', 'related-posts-thumbnails' )
);

if ( $this->wp_version >= 3 ) {
    $custom_taxonomies = get_taxonomies( array(
    	'public' => 1
    ) );
    $relpoststh_custom_taxonomies = get_option( 'relpoststh_custom_taxonomies', $this->custom_taxonomies );
    if ( !is_array( $relpoststh_custom_taxonomies ) ) {
    	$relpoststh_custom_taxonomies = array();
    }
} else {
    $relation_options[ 'custom' ] .= ' ' . __( '(This option is available for WP v3+ only)', 'related_posts_thumbnails' );
}
?>

<div class="wrap relpoststh">

  <div class="rpt-top-bar">
    <a href="<?php echo esc_url( 'https://wpbrigade.com/' ); ?>">
		<img src="<?php echo plugins_url( 'assets/images/rpt-logo.png', dirname( __FILE__ ) ); ?>" alt="<?php echo esc_attr( 'Related Post Thumbnails' ); ?>">
	</a>
    <div class="rpt-top-bar-content">
      	<h3>
			<?php _e( 'Related Post Thumbnails - Settings', 'related-posts-thumbnails' ); ?>:
		</h3>
      <p><?php _e( '<strong>Related Post Thumbnails</strong> by <strong><a href=" ' . esc_url( "https://wpbrigade.com/" ) . ' ">WPBrigade</a></strong>.', 'related-posts-thumbnails' ); ?></p>
    </div>
  </div>

  <div class="icon32" id="icon-options-general"><br></div>
  <h2><?php _e( 'Related Posts Thumbnails Settings', 'related-posts-thumbnails' ); ?></h2>

  <form action="?page=related-posts-thumbnails" method="POST" style="clear:both;">
    <input type="hidden" name="action" value="update" />
    <?php wp_nonce_field( 'related-posts-thumbnails' ); ?>

    <div class="wpbr-wrap"><div class="wpbr-tabsWrapper">
		<div class="wpbr-button-container top">
			<div class="setting-notification">
				<?php _e( 'Settings have changed, you should save them!', 'related-posts-thumbnails' ); ?>
		</div>
		<input type="submit" name="Submit" class="wpb-rpt-settings-submit button button-primary button-big"
				value="<?php esc_html_e( 'Save Settings', 'related-posts-thumbnails' ); ?>" id="wpb_rpt_save_setting_top">
		</div>

		<div id="relpoststh-settings" class="">
			<ul class="nav-tab-wrapper">
				<li>
					<a href="#content_general_options" class="nav-tab" id="content_general_options-tab">
					<?php _e( 'General Display Options', 'related-posts-thumbnails' ); ?>
					</a>
				</li>
				<li>
					<a href="#content_thumbnail_options" class="nav-tab" id="content_thumbnail_options-tab">
						<?php _e( 'Thumbnails', 'related-posts-thumbnails' ); ?>
					</a>
				</li>
				<li>
					<a href="#content_style_options" class="nav-tab" id="content_style_options-tab">
						<?php _e( 'Style Options', 'related-posts-thumbnails' ); ?>
					</a>
				</li>
				<li>
					<a href="#content_relation_options" class="nav-tab" id="content_relation_options-tab">
						<?php _e( 'Relation Builder Options', 'related-posts-thumbnails' ); ?>
					</a>
				</li>
			</ul>

			<div class="metabox-holder rpth-setting-options">
			<div class="postbox" style="padding: 20px" id="content_general_options">
				<h2>
					<?php _e( 'General Display Options', 'related-posts-thumbnails' ); ?>
				</h2>

				<table class="form-table">
				<tr valign="top">
					<th scope="row">
					<?php _e( 'Automatically append to the post content', 'related-posts-thumbnails' ); ?>:
					</th>
					<td>
					<input type="checkbox" name="relpoststh_auto" id="relpoststh_auto" value="1"
						<?php
						if ( $relpoststh_auto ) {
							echo 'checked="checked"';
						}
						?>
					/>
					<label for="relpoststh_auto">
						<p class="description rpth-discription" >
						<?php _e( 'Or use the following snippet in The Loop <b>&lt;?php get_related_posts_thumbnails(); ?&gt;</b>', 'related-posts-thumbnails' ); ?>
						</p>
					</label>
					<br />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
					<?php _e( 'Developer mode', 'related-posts-thumbnails' ); ?>:
					</th>
					<td>
					<input type="checkbox" name="relpoststh_devmode" id="relpoststh_devmode" value="1"
					<?php
					if ( $relpoststh_devmode ) {
							echo 'checked="checked"';
					}
						?>
					/>
					<label for="relpoststh_devmode">
						<p class="description rpth-discription">
							<?php _e( 'This will add debugging information in HTML source', 'related-posts-thumbnails' ); ?>
						</p>
					</label>
					<br />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<?php _e( 'Display related posts', 'related-posts-thumbnails' ); ?>:
					</th>
					<td>
						<input type="checkbox" name="relpoststh_single_only" id="relpoststh_single_only" value="1"
							<?php
							if ( $relpoststh_single_only ) {
								echo 'checked="checked"';
							} ?>
						/>
					<label for="relpoststh_single_only">
						<?php _e( 'On single posts only', 'related-posts-thumbnails' ); ?>
					</label>
					<br />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<?php _e( 'Post types', 'related-posts-thumbnails' ); ?>:
					</th>
					<td>
						<?php
							if ( is_array( $post_types ) && count( $post_types ) ):
								foreach ( $post_types as $post_type ): ?>
									<input type="checkbox" name="relpoststh_post_types[]"
									id="pt_<?php esc_html_e( $post_type, 'related-posts-thumbnails'); ?>"
									value="<?php echo $post_type; ?>"
									<?php
										if ( in_array( $post_type, $relpoststh_post_types ) ) {
											echo 'checked="checked"';
										}
									?>
									/>
									<label for="pt_<?php esc_html_e( $post_type, 'related-posts-thumbnails') ?>">
										<?php esc_html_e( $post_type, 'related-posts-thumbnails') ?>
									</label>
									<?php
								endforeach;
							endif;
						?>
				</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<?php _e( 'Display related posts on categories', 'related-posts-thumbnails' ); ?>:
					</th>
					<td>
						<?php $this->display_categories_list( $relpoststh_categoriesall, $categories, $relpoststh_categories, 'relpoststh_categoriesall', 'relpoststh_categories' );
						?>
				</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<?php _e( 'Categories will appear in related posts', 'related-posts-thumbnails' ); ?>:
					</th>
					<td>
						<?php $this->display_categories_list( $relpoststh_show_categoriesall, $categories, $relpoststh_show_categories, 'relpoststh_show_categoriesall', 'relpoststh_show_categories' );
						?>
				</td>
				</tr>
					<tr valign="top">
						<th scope="row">
							<?php _e( 'Mobile view', 'related-posts-thumbnails' ); ?>:
						</th>
						<td>
							<input type="checkbox" name="relpoststh_mobile_view" id="relpoststh_mobile_view" value="1"
								<?php
									if ( $relpoststh_mobile_view ) {
										echo 'checked="checked"';
									}
								?>
							/>
							<label for="relpoststh_mobile_view">
								<?php _e( 'Hide on mobile devices', 'related-posts-thumbnails' ); ?>
							</label>
							<br />
						</td>
				</tr>
				<!-- <tr valign="top">
					<th scope="row">
					<?php // _e( 'Show date under posts', 'related-posts-thumbnails' ); ?>:
						</th>
					<td>
					<input type="checkbox" name="relpoststh_show_date" id="relpoststh_show_date" value="1"
						<?php
							// if ( $relpoststh_show_date == '1' ) {
							//     echo 'checked="checked"';
							// }
							?>
						/>
					</td>
				</tr> -->
				<tr>
					<th scope="row">
						<?php _e( 'Include posts after', 'related-posts-thumbnails' ); ?>:
					</th>
					<td>
					<input type="text" class="rpt_post_include" name="rpt_post_include" value="<?php echo get_option( 'relpoststh_startdate' ); ?>" >
					<button type="button" class="button rpt_clear_date">Clear</button>
					<label for="relpoststh_excerptlength">
						<p class="description">
							<?php _e( 'Leave empty for all posts dates', 'related-posts-thumbnails' ); ?>
						</p>
					</label>
						<br />
					</td>
				</tr>
				<tr>
					<th scope="row">
					<?php _e( 'Sort by', 'related-posts-thumbnails' ); ?>:
					</th>
					<td>
					<select class="rpt_post_sort" name="rpt_post_sort">
						<option value="rand"
							<?php
							if( get_option('rpt_post_sort') == 'rand' ) {
							echo 'selected';
							}
							?> >
							<?php _e( 'Random', 'related-posts-thumbnails' ); ?>
						</option>
						<option value="latest"
							<?php
								if( get_option('rpt_post_sort') == 'latest' ) {
									echo 'selected';
								}
							?> >
							<?php _e( 'Latest posts', 'related-posts-thumbnails' ); ?>
						</option>
					</select>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<?php _e( 'Top text', 'related-posts-thumbnails' ); ?>:
					</th>
					<td>
					<input type="text" name="relpoststh_top_text" value="<?php echo stripslashes( htmlspecialchars( get_option( 'relpoststh_top_text', $this->top_text ) ) ); ?>" size="50"/>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<?php _e( 'Number of posts to display', 'related-posts-thumbnails' ); ?>:
					</th>
					<td>
					<input type="number" min="1" name="relpoststh_number" value="<?php echo get_option( 'relpoststh_number', $this->number ); ?>" size="2"/>
					<span class='rpt-no-validate-error' style="display:none;">
						<?php _e( 'Only Digits are allowed', 'related-posts-thumbnails' ); ?>
					</span>
					</td>
				</tr>
				<!-- <table class="form-table"> -->
					<tr>
					<th scope="row">
						<?php _e( 'Default image', 'related-posts-thumbnails' ); ?>:
					</th>
					<td>
						<?php
								// $imgid =(isset( $instance[ 'imgid' ] )) ? $instance[ 'imgid' ] : "";
								// $img    = wp_get_attachment_image_src($imgid, 'thumbnail');
								// var_dump($img);
						?>
						<!-- <input type="text" value="<?php // echo get_option( 'relpoststh_default_image', $this->default_image ); ?>" class="regular-text process_custom_images" id="process_custom_images" name=""> -->
						<img
						src="<?php echo get_option( 'relpoststh_default_image', $this->default_image ); ?>"
						id="relpoststh_default_image_prev" class="regular-text process_custom_images" height="200" width="30">
						<div class="relposts-button-section">
						<button class="relpoststh_set_def_image button">
							<?php _e( 'Set Image', 'related-posts-thumbnails' ); ?>
						</button>
						<button
						value="<?php echo esc_url( plugins_url( '../img/default.png', __FILE__ ) ); ?>"
						class="relpoststh_set_plug_image button">
						<?php _e( 'Default Image', 'related-posts-thumbnails' ); ?>
						</button>
						<input type="hidden" name="relpoststh_default_image" id="relpoststh_default_image"
						value="<?php echo get_option( 'relpoststh_default_image', $this->default_image ); ?>" size="50"/>
						</div>
					</td>
					</tr>
				<!-- </table> -->
				</table>
			</div>

			<div class="postbox" style="padding: 20px; display:none;" id="content_thumbnail_options">
				<h2>
					<?php _e( 'Thumbnails', 'related-posts-thumbnails' ); ?>
				</h2>

				<table class="form-table">
				<tr>
					<th>
					<?php _e( 'Select thumbnails source', 'related-posts-thumbnails' ); ?>
					</th>
					<td>
					<select class="select-style" name="relpoststh_thsource"  id="relpoststh_thsource">
					<?php foreach ( $thsources as $name => $title ): ?>
						<option value="<?php echo $name; ?>"
							<?php
								if ( $relpoststh_thsource == $name ) {
									echo 'selected';
								}
							?> >
							<?php echo $title; ?>
						</option>
					<?php	endforeach; ?>
					</select>
					</td>
				</tr>
				</table>

				<div id="relpoststh-post-thumbnails">
					<table class="form-table">
						<tr valign="top">
						<th scope="row">
								<?php _e( 'Related posts thumbnail size', 'related-posts-thumbnails' ); ?>:
							</th>
						<td>
							<select name="relpoststh_poststhname">
								<?php foreach ( $available_sizes as $size_name => $size ): ?>
									<option <?php if ( $size_name == get_option( 'relpoststh_poststhname', $this->poststhname ) ) {
												echo 'selected';
											} ?> >
										<?php echo $size_name; ?>
									</option>
								<?php endforeach; ?>
						</select>
							<?php if ( !current_theme_supports( 'post-thumbnails' ) ): ?> (<?php
									e( 'Your theme has to support post-thumbnails to have more choices', 'related-posts-thumbnails' ); ?>)
							<?php endif; ?>
						</td>
						</tr>
							<?php if ( current_theme_supports( 'post-thumbnails' ) ): ?>
						<tr>
							<th scope="row">
								<?php _e( 'Show posts with featured image', 'related-posts-thumbnails' ); ?>:
							</th>
							<td>
								<input type="checkbox" name="onlywiththumbs" id="onlywiththumbs" value="1" <?php if ( $onlywiththumbs ) { echo 'checked="checked"'; } ?> />
								<label for="onlywiththumbs">
									<p class="description rpth-discription">
										<?php _e( 'Only those posts will be shown that has featured image', 'related-posts-thumbnails' ); ?>
									</p>
								</label>
								<br />
							</td>
						</tr>
						<?php endif; ?>
					</table>
				</div>

				<div id="relpoststh-custom-field">
					<table class="form-table">
						<tr valign="top">
							<th scope="row">
								<?php _e( 'Custom field name', 'related-posts-thumbnails' ); ?>:
							</th>
							
							<td>
								<input type="text" name="relpoststh_customfield" value="<?php echo get_option( 'relpoststh_customfield', $this->custom_field ); ?>" size="50"/>
							</td>
						</tr>
						
						<tr valign="top">
							<th scope="row">
								<?php _e( 'Size', 'related-posts-thumbnails' ); ?>:
							</th>
							
							<td>
								<label for="relpoststh_customwidth" id="relpoststh_customwidth">
									<?php _e( 'Width', 'related-posts-thumbnails' ); ?>:
								</label>
								
								<input type="number" min="1" name="relpoststh_customwidth" value="<?php echo get_option( 'relpoststh_customwidth', $this->custom_width ); ?>" size="3"/>
								
								<p class="description rpth-discription">
									<?php _e( ' px', 'related-posts-thumbnails' ); ?>
								</p>
								<br>
												
								<label for="relpoststh_customheight">
									<?php _e( 'Height', 'related-posts-thumbnails' ); ?>:
								</label>
								
								<input type="number" min="1" name="relpoststh_customheight" value="<?php echo get_option( 'relpoststh_customheight', $this->custom_height );?>" size="3"/>
								
								<p class="description rpth-discription">
									<?php _e( ' px', 'related-posts-thumbnails' ); ?>
								</p>
								
								<br>
								
								<span class='rpt-no-validate-error' style="display:none;">
									<?php _e( 'Only Digits are allowed', 'related-posts-thumbnails' ); ?>
								</span>
							</td>
						</tr>
						
						<tr valign="top">
							<th scope="row">
								<?php _e( 'Theme resize url', 'related-posts-thumbnails' ); ?>:
							</th>
							
							<td>
								<input type="text" name="relpoststh_theme_resize_url" value="<?php echo get_option( 'relpoststh_theme_resize_url', '' ); ?>" size="50"/>

								<p class='description rpth-discription'>
									<?php	_e( 'If your theme resizes images, enter URL to its resizing PHP file', 'related-posts-thumbnails' ); ?>
								</p>
							</td>
						</tr>
					</table>
				</div>
			</div>


			<!-- DISPLAY SETTINGS -->
			<div class="postbox" style="padding: 20px; display:none;" id="content_style_options">
				<h2>
					<?php _e( 'Style Options', 'related-posts-thumbnails' ); ?>
				</h2>
				
				<table class="form-table">

					<!-- calling layouts from pro -->
					<?php // do_action('rptp_style_layouts'); ?>

					<tr>
						<th scope="row"><?php
							_e( 'Output style', 'related-posts-thumbnails' ); ?>:
						</th>

						<td>
							<select name="relpoststh_output_style"  id="relpoststh_output_style">
								<?php foreach ( $output_styles as $name => $title ): ?>
									<option value="<?php echo $name; ?>"
										<?php if ( $relpoststh_output_style == $name ) { echo 'selected'; } ?> >
										<?php echo $title; ?>
									</option>
									<?php
								endforeach; ?>
							</select>
							<span id="relpoststh_cleanhtml" style="display:
								<?php
								if ( $relpoststh_output_style == 'list' ) {
									echo 'inline';
								} else {
									echo 'none';
								} ?> ;"> 

								<?php _e( 'Turn off plugin styles', 'related-posts-thumbnails' ); ?> 
								<input type="checkbox" name="relpoststh_cleanhtml" <?php if ( $relpoststh_cleanhtml ) { echo 'checked="checked"'; } ?> />
							</span>
						</td>
					</tr>

					<tr valign="top">
						
						<th scope="row"><?php
							_e( 'Background color', 'related-posts-thumbnails' ); ?>:
						</th>
						
						<td>
							<input type="text" name="relpoststh_background" value="<?php echo get_option( 'relpoststh_background', $this->background ); ?>" data-default-color="<?php echo $this->background; ?>"/>
						</td>
					</tr>

					<tr valign="top">
						<th scope="row">
							<?php _e( 'Background color on mouse over', 'related-posts-thumbnails' ); ?>:
						</th>

						<td>
							<input type="text" name="relpoststh_hoverbackground" value="<?php echo get_option( 'relpoststh_hoverbackground',  $this->hoverbackground ); ?>" data-default-color="<?php echo $this->hoverbackground; ?>" />
						</td>
					</tr>

					<tr valign="top">
						<th scope="row">
							<?php _e( 'Border color', 'related-posts-thumbnails' ); ?>:
						</th>
						
						<td>
							<input type="text" name="relpoststh_bordercolor" value="<?php echo get_option( 'relpoststh_bordercolor', $this->border_color ); ?>" data-default-color="<?php echo $this->border_color; ?>"/>
						</td>
					</tr>

					<tr valign="top">
						<th scope="row">
							<?php _e( 'Font color', 'related-posts-thumbnails' ); ?>:
						</th>
						<td>
							<input type="text" name="relpoststh_fontcolor" value="<?php echo get_option( 'relpoststh_fontcolor', $this->font_color ); ?>" data-default-color="<?php echo $this->font_color; ?>"/>
						</td>
					</tr>

					<tr valign="top">
							<th scope="row">
								<?php _e( 'Font family', 'related-posts-thumbnails' ); ?>:
							</th>
							<td>
								<input type="text" name="relpoststh_fontfamily" value="<?php echo stripslashes( htmlspecialchars( get_option( 'relpoststh_fontfamily', $this->font_family ) ) ); ?>" size="50"/>
							</td>
						</tr>

						<tr valign="top">
							<th scope="row">
								<?php _e( 'Font size', 'related-posts-thumbnails' ); ?>:
							</th>
							<td>
								<input type="number" min="1" name="relpoststh_fontsize" value="<?php echo get_option( 'relpoststh_fontsize', $this->font_size ); ?>" size="7"/>
								<label for="relpoststh_fontsize">
									<p class="description rpth-discription"><?php _e( 'px', 'related-posts-thumbnails' ); ?></p>
								</label>

								<span class='rpt-no-validate-error' style="display:none;">
									<?php _e( 'Only Digits are allowed', 'related-posts-thumbnails' ); ?>
								</span>
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								<?php _e( 'Text maximum length', 'related-posts-thumbnails' ); ?>:
							</th>
							<td>
								<input type="number" min="0" name="relpoststh_textlength" value="<?php echo get_option( 'relpoststh_textlength', $this->text_length ); ?>" size="7"/>
								<label for="relpoststh_textlength">
									<p class="description rpth-discription"> 
										<?php _e( 'Set 0 for no title', 'related-posts-thumbnails' ); ?>
									</p>
								</label>
								<span class='rpt-no-validate-error' style="display:none;">
									<?php _e( 'Only Digits are allowed', 'related-posts-thumbnails' ); ?>
								</span>
								<br />
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								<?php _e( 'Excerpt maximum length', 'related-posts-thumbnails' ); ?>:
							</th>
							<td>
								<input type="number" min="0" name="relpoststh_excerptlength" value="<?php echo get_option( 'relpoststh_excerptlength', $this->excerpt_length ); ?>" size="7"/>
								<label for="relpoststh_excerptlength">
									<p class="description rpth-discription" >
										<?php _e( 'Set 0 for no excerpt', 'related-posts-thumbnails' ); ?>
									</p>
								</label>
								<span class='rpt-no-validate-error' style="display:none;">
									<?php _e( 'Only Digits are allowed', 'related-posts-thumbnails' ); ?>
								</span>
								<br />
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								<?php _e( 'Text block height', 'related-posts-thumbnails' ); ?>:
							</th>
							<td>
								<input type="number" min="0" name="relpoststh_textblockheight" value="<?php echo get_option( 'relpoststh_textblockheight', $this->text_block_height ); ?>" size="7"/> 
								<p class="description rpth-discription">px</p>
								<span class='rpt-no-validate-error' style="display:none;">
									<?php _e( 'Only Digits are allowed', 'related-posts-thumbnails' ); ?>
								</span>
							</td>
						</tr>
					</table>
				</div>
				
				<div class="postbox" style="padding: 20px; display:none;" id="content_relation_options">
					<h2>
						<?php _e( 'Relation Builder Options', 'related-posts-thumbnails' ); ?>
					</h2>
					<table class="form-table">

						<tr valign="top">

							<th scope="row">
								<?php _e( 'Base relation on:', 'related-posts-thumbnails' ); ?>
							</th>

							<td>
								<?php
								if ( is_array( $relation_options ) && count( $relation_options ) ): 
									foreach ( $relation_options as $ro_key => $ro_name ): ?>
										<input type="radio" name="relpoststh_relation" id="relpoststh_relation_<?php echo esc_html_e( $ro_key,  'related-posts-thumbnails' ); ?>" value="<?php echo $ro_key; ?>" 
										<?php if ( $relpoststh_relation == $ro_key ) { echo 'checked="checked"'; } ?>
										/>
										<label for="relpoststh_relation_<?php  _e( $ro_key,  'related-posts-thumbnails' ); ?>">
											<?php _e( $ro_key, 'related-posts-thumbnails' ); ?>
										</label>
										<br />
										<?php
									endforeach;

								endif;
								?>
								<div id="custom_taxonomies" style="display:
									<?php
									if ( $relpoststh_relation == 'custom' ) {
										echo 'inline';
									} else {
										echo 'none';
									} ?> ;">
									<?php
									if ( is_array( $custom_taxonomies ) && count( $custom_taxonomies ) ):
										foreach ( $custom_taxonomies as $custom_taxonomy ): ?>
											<input type="checkbox" name="relpoststh_custom_taxonomies[]" id="ct_<?php echo $custom_taxonomy; ?>" value="<?php echo $custom_taxonomy; ?>"
											<?php
											if ( in_array( $custom_taxonomy, $relpoststh_custom_taxonomies ) ) {
												echo 'checked="checked"';
											}
											?>
											/>
											<label for="ct_<?php _e( $custom_taxonomy, 'related-posts-thumbnails' ); ?>">
												<?php _e( $custom_taxonomy, 'related-posts-thumbnails' ); ?>
											</label>
											<?php
										endforeach;

									endif;
									?>
								</div>
							</td>
						</tr>
					</table>
				</div>
				<!-- <input name="Submit" value="<?php _e( 'Save Changes', 'related-posts-thumbnails' ); ?>" type="submit" class="button-primary"> -->
			</div>
		</div>

		<div class="wpbr-button-container bottom">
		
			<div class="wpbr-social-links alignleft">
				<a href="https://profiles.wordpress.org/hiddenpearls/" class="wordpress" target="_blank">
					<span class="dashicons dashicons-wordpress"> </span>
				</a>
			</div>
				<input type="submit" name="Submit" class="wpb-rpt-settings-submit button button-primary button-big" value="<?php
				esc_html_e( 'Save Settings', 'related-posts-thumbnails' );
				?>" id="wpb_rpt_save_setting_bottom">
			</div>
		</div>

		<div class="metabox-holder wpbr-sidebar">
			<div class="sidebar postbox">
				<h2>
					<?php esc_html_e( 'Spread the Word', 'related-posts-thumbnails' ); ?>
				</h2>
				<ul>
					<li>
						<?php 
							echo sprintf( '<a href="%1$s%2$s%3$s" data-count="%4$s" class="%5$s" target="%6$s" title="%7$s"> %8$s <span class ="%9$s"></span> </a>', "https://twitter.com/share?text=", "This is Best Related Post Thumbnails Plugin for WordPress", "&url=https://wordpress.org/support/view/plugin-reviews/related-posts-thumbnails", 'none', 'button twitter' , '_blank', __( 'Post to Twitter Now', 'related-posts-thumbnails'), __( 'Share on Twitter', 'related-posts-thumbnails' ), 'dashicons dashicons-twitter' ); 
						?>
					</li>

					<li>
						<?php 
							echo sprintf( '<a href="%1$s" class="%3$s" target="%4$s" title="%5$s"> %6$s <span class ="%7$s"></span> </a>', "https://www.facebook.com/sharer/sharer.php?u=https://wordpress.org/support/view/plugin-reviews/related-posts-thumbnails", 'none', 'button facebook' , '_blank', __( 'Share with your facebook friends about this awesome plugin.', 'related-posts-thumbnails'), __( 'Share on Facebook', 'related-posts-thumbnails' ), 'dashicons dashicons-facebook' ); 
						?>
					</li>

					<li> 
						<?php 
							echo sprintf( '<a href="%1$s" class="%3$s" target="%4$s" title="%5$s"> %6$s <span class ="%7$s"></span> </a>', "https://wordpress.org/support/view/plugin-reviews/related-posts-thumbnails?filter=5", 'none', 'button wordpress' , '_blank', __( 'Rate on Wordpress.org.', 'related-posts-thumbnails'), __( 'Rate on Wordpress.org', 'related-posts-thumbnails' ), 'dashicons dashicons-wordpress' );
						?>
						
					</li>
				</ul>
			</div>

			<div class="sidebar postbox">

				<h2>
					<?php esc_html_e( 'Subscribe Newsletter', 'related-posts-thumbnails' ); ?>
				</h2>
				<ul>
					<li>
						<label for="Email"><?php esc_html_e( 'Email', 'related-posts-thumbnails' ); ?></label>
						<input type="email" name="subscriber_mail" value="<?php echo get_option( 'admin_email' ); ?>" id="rpt_subscribe_mail">
						<p class='rpt_subscribe_warning'></p>
					</li>
					<li>
						<label for="Name"><?php esc_html_e( 'Name', 'related-posts-thumbnails' ); ?></label>
						<input type="text" name="subscriber_name" id="rpt_subscribe_name" value="<?php echo wp_get_current_user()->display_name; ?>" id="rpt_subscribe_mail">
					</li>
					<li>
						<input type="submit" value="<?php esc_html_e( 'Subscribe Now', 'related-posts-thumbnails' ); ?>" class="button button-primary button-big"  id='rpt_subscribe_btn' />
						<img src="<?php echo admin_url( 'images/spinner.gif' ); ?>" class='rpt_subscribe_loader' style="display:none" />
					</li>
					<li>
						<p class='rpt_return_message'></p>
					</li>
				</ul>
			</div>

			<div class="sidebar postbox">
				<h2>
					<?php esc_html_e( 'Recommended Plugins', 'related-posts-thumbnails' ); ?>
				</h2>
				<!-- <p>Following are the plugins highly recommend by Team WPBrigade.</p> -->
				<ul class="plugins_lists">
					<li>
						<?php 
							echo sprintf( '<a href="%1$s" data-count="%2$s" target="%4$s" title="%5$s"> %6$s <span></span> </a>', "https://wpbrigade.com/wordpress/plugins/loginpress-pro/?utm_source=related-posts-lite&utm_medium=sidebar&utm_campaign=pro-upgrade", 'none', 'button wordpress' , '_blank', __( 'Share with your facebook friends about this awesome plugin.', 'related-posts-thumbnails'), __( 'Google Analytics by Analytify' ), 'dashicons dashicons-wordpress' );
						?>
					<a href="https://wpbrigade.com/wordpress/plugins/loginpress-pro/?utm_source=related-posts-lite&utm_medium=sidebar&utm_campaign=pro-upgrade" data-count="none"  target="_blank" title="<?php esc_html_e( 'LoginPress - Login Customizer', 'related-posts-thumbnails' ); ?>"><?php esc_html_e( 'LoginPress - Login Customizer', 'related-posts-thumbnails' ); ?> </a>
					</li>

					<li>
						<?php 
							echo sprintf( '<a href="%1$s" target="%4$s" title="%5$s"> %6$s <span></span> </a>', "https://analytify.io/ref/73/?utm_source=related-posts-lite&utm_medium=sidebar&utm_campaign=pro-upgrade", 'none', 'button wordpress' , '_blank', __( 'Google Analytics by Analytify.', 'related-posts-thumbnails'), __( 'Google Analytics by Analytify' ), 'dashicons dashicons-wordpress' );
						?>

					</li>

					<li>
					<?php 
							echo sprintf( '<a href="%1$s" target="%4$s" title="%5$s"> %6$s <span></span> </a>', "https://wpbrigade.com/recommend/maintenance-mode", 'none', 'button wordpress' , '_blank', __( 'Under Construction & Maintenance mode', 'related-posts-thumbnails', 'related-posts-thumbnails'), __( 'Under Construction & Maintenance mode', 'related-posts-thumbnails' ), 'dashicons dashicons-wordpress' );
						?>

					</li>
				</ul>
			</div>
		</div>
	</div>

	</form>
	<p style="margin-top: 40px;">
		<small>
			<?php _e( 'If you experience some problems with this plugin please let me know about it on <a target="_blank" href="https://wpbrigade.com/wordpress/plugins/related-posts/">Plugin\'s homepage</a>. If you think this plugin is awesome please vote on <a target="_blank" href="https://wordpress.org/plugins/related-posts-thumbnails/">WordPress plugin page</a>. Thanks!', 'related-posts-thumbnails' ); ?>
		</small>
	</p>