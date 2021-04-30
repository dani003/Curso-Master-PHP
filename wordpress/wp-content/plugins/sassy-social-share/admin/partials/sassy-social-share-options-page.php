<?php
/**
 * Options page
 *
 * @since    1.0.0
 */
defined( 'ABSPATH' ) or die( "Cheating........Uh!!" );
?>

<div id="fb-root"></div>

<div class="metabox-holder columns-2" id="post-body">
	<h1>Sassy Social Share</h1>
		<div>
			<?php
			echo sprintf( __( 'You can appreciate the effort put in this free plugin by rating it <a href="%s" target="_blank">here</a>', 'sassy-social-share' ), 'https://wordpress.org/support/view/plugin-reviews/sassy-social-share' );
			?>
		</div>
		<div class="menu_div" id="tabs">
			<form id="heateor_sss_form" action="options.php" method="post">
			<?php settings_fields( 'heateor_sss_options' ); ?>
			<h2 class="nav-tab-wrapper" style="height:34px">
			<ul>
				<li style="margin-left:9px"><a style="margin:0; height:23px" class="nav-tab" href="#tabs-1"><?php _e( 'Theme Selection', 'sassy-social-share' ) ?></a></li>
				<li style="margin-left:9px"><a style="margin:0; height:23px" class="nav-tab" href="#tabs-2"><?php _e( 'Standard Interface', 'sassy-social-share' ) ?></a></li>
				<li style="margin-left:9px"><a style="margin:0; height:23px" class="nav-tab" href="#tabs-3"><?php _e( 'Floating Interface', 'sassy-social-share' ) ?></a></li>
				<li style="margin-left:9px"><a style="margin:0; height:23px" class="nav-tab" href="#tabs-4"><?php _e( 'Miscellaneous', 'sassy-social-share' ) ?></a></li>
				<?php
				if ( $this->is_plugin_active( 'mycred/mycred.php' ) ) {
					?>
					<li style="margin-left:9px"><a style="margin:0; height:23px" class="nav-tab" href="#tabs-5"><?php _e( '3rd Party Integration', 'sassy-social-share' ) ?></a></li>
					<?php
				}
				?>
				<li style="margin-left:9px"><a style="margin:0; height:23px" class="nav-tab" href="#tabs-6"><?php _e( 'Shortcode & Widget', 'sassy-social-share' ) ?></a></li>
				<li style="margin-left:9px"><a style="margin:0; height:23px" class="nav-tab" href="#tabs-7"><?php _e( 'Troubleshooter', 'sassy-social-share' ) ?></a></li>
				<li style="margin-left:9px"><a style="margin:0; height:23px" class="nav-tab" href="#tabs-8"><?php _e( 'FAQ', 'sassy-social-share' ) ?></a></li>
			</ul>
			</h2>
			
			<div class="menu_containt_div" id="tabs-1">
				<div class="clear"></div>
				<div class="heateor_sss_left_column">
					<div class="stuffbox">
						<h3><label><?php _e( 'Standard interface theme', 'sassy-social-share' );?></label></h3>
						<div class="inside">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
								<tr>
									<th>
										<label style="float:left"><?php _e("Icon Preview", 'sassy-social-share' ); ?></label>
									</th>
									<td>
										<?php
										$horizontal_bg = isset( $options['horizontal_bg_color_default'] ) ? $options['horizontal_bg_color_default'] : '';
										$border_width = isset( $options['horizontal_border_width_default'] ) ? $options['horizontal_border_width_default'] : '';
										$border_color = isset( $options['horizontal_border_color_default'] ) ? $options['horizontal_border_color_default'] : '';
										$sharing_color = isset( $options['horizontal_font_color_default'] ) ? $options['horizontal_font_color_default'] : '';
										$sharing_color_hover = isset( $options['horizontal_font_color_hover'] ) ? $options['horizontal_font_color_hover'] : '';
										$sharing_shape = isset( $options['horizontal_sharing_shape'] ) ? $options['horizontal_sharing_shape'] : 'round'; 
										$sharing_size = isset( $options['horizontal_sharing_size'] ) ? $options['horizontal_sharing_size'] : 32;
										$sharing_width = isset( $options['horizontal_sharing_width'] ) ? $options['horizontal_sharing_width'] : 32;
										$sharing_height = isset( $options['horizontal_sharing_height'] ) ? $options['horizontal_sharing_height'] : 32;
										$sharing_border_radius = isset( $options['horizontal_border_radius'] ) ? $options['horizontal_border_radius'] : '';
										$horizontal_bg_hover = isset( $options['horizontal_bg_color_hover'] ) ? $options['horizontal_bg_color_hover'] : '';
										$counter_position = isset( $options['horizontal_counter_position'] ) ? $options['horizontal_counter_position'] : '';
										$line_height = $sharing_shape == 'rectangle' ? $sharing_height : $sharing_size;
										?>
										<style type="text/css">
										<?php
										if ( isset( $options['plain_instagram_bg'] ) ) {
											?>
											.heateorSssInstagramBackground{background-color:#527fa4}
											<?php
										} else {
											?>
											.heateorSssInstagramBackground{background:radial-gradient(circle at 30% 107%,#fdf497 0,#fdf497 5%,#fd5949 45%,#d6249f 60%,#285aeb 90%)}
											<?php
										}
										?>
										#heateor_sss_preview{
											color:<?php echo $sharing_color ? $sharing_color : "#fff" ?>;
										}
										#heateor_sss_preview:hover{
											color:<?php echo $sharing_color_hover ?>;
										}
										</style>
										<div>
											<div class="heateorSssCounterPreviewTop" style="width:<?php echo 60 + ( isset( $options['horizontal_sharing_shape'] ) && $options['horizontal_sharing_shape'] == 'rectangle' ? $options['horizontal_sharing_width'] : $options['horizontal_sharing_size'] ) ?>px">44</div>
											<div class="heateorSssCounterPreviewLeft">44</div>
											<div id="heateor_sss_preview" style="cursor:pointer;float:left">
												<div class="heateorSssCounterPreviewInnertop">44</div>
												<div class="heateorSssCounterPreviewInnerleft">44</div>
												<div id="horizontal_svg" style="float:left;width:100%;height:100%;background:url( 'data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20viewBox%3D%22-4%20-4%2040%2040%22%3E%3Cpath%20d%3D%22M17.78%2027.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99%202.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123%200-5.26%201.905-5.26%205.405v3.016h-3.53v4.09h3.53V27.5h4.223z%22%20fill%3D%22<?php echo $sharing_color ? str_replace( '#', '%23', $sharing_color) : "%23fff" ?>%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E' ) no-repeat center center; margin: auto"></div>
												<div class="heateorSssCounterPreviewInnerright">44</div>
												<div class="heateorSssCounterPreviewInnerbottom">44</div>
											</div>
											<div class="heateorSssCounterPreviewRight">44</div>
											<div class="heateorSssCounterPreviewBottom" style="width:<?php echo 60 + ( isset( $options['horizontal_sharing_shape'] ) && $options['horizontal_sharing_shape'] == 'rectangle' ? $options['horizontal_sharing_width'] : $options['horizontal_sharing_size'] ) ?>px">44</div>
										</div>
										
										<script type="text/javascript">
										var tempHorShape = '<?php echo $sharing_shape ?>', tempHorSize = '<?php echo $sharing_size ?>', tempHorHeight = '<?php echo $sharing_height ?>', tempHorWidth = '<?php echo $sharing_width ?>', heateorSssSharingBgHover = '<?php echo $horizontal_bg_hover ?>', heateorSssSharingBg = '<?php echo $horizontal_bg ? $horizontal_bg : "#3C589A" ?>', heateorSssBorderWidth = '<?php echo $border_width ?>', heateorSssBorderColor = '<?php echo $border_color ?>', heateorSssSharingBorderRadius = '<?php echo $sharing_border_radius ? $sharing_border_radius . "px" : "0px" ?>';

										heateorSssSharingHorizontalPreview();

										jQuery( '#heateor_sss_preview' ).hover(function() {
											if (heateorSssSharingBgHover && heateorSssSharingBgHover != '#3C589A' ) {
												jQuery(this).css( 'backgroundColor', heateorSssSharingBgHover);
											}
											if (jQuery( '#heateor_sss_font_color_hover' ).val().trim() ) {
												jQuery(this).find( '#horizontal_svg' ).attr( 'style', jQuery(this).find( '#horizontal_svg' ).attr( 'style' ).replace(heateorSssSharingTempColor.replace( '#', '%23' ), jQuery( '#heateor_sss_font_color_hover' ).val().trim().replace( '#', '%23' ) ));
												jQuery(this).css( 'color', jQuery( '#heateor_sss_font_color_hover' ).val().trim() );
											}
											jQuery(this).css( 'borderStyle', 'solid' );
											jQuery(this).css( 'borderWidth', heateorSssBorderWidthHover ? heateorSssBorderWidthHover : heateorSssBorderWidth ? heateorSssBorderWidth : '0' );
											jQuery(this).css( 'borderColor', heateorSssBorderColorHover ? heateorSssBorderColorHover : 'transparent' );
										},function() {
											jQuery(this).css( 'backgroundColor', heateorSssSharingBg);
											if (jQuery( '#heateor_sss_font_color_hover' ).val().trim() ) {
												jQuery(this).find( '#horizontal_svg' ).attr( 'style', jQuery(this).find( '#horizontal_svg' ).attr( 'style' ).replace(jQuery( '#heateor_sss_font_color_hover' ).val().trim().replace( '#', '%23' ), heateorSssSharingTempColor.replace( '#', '%23' ) ));
												jQuery(this).css( 'color', heateorSssSharingTempColor);
											}
											jQuery(this).css( 'borderStyle', 'solid' );
											jQuery(this).css( 'borderWidth', heateorSssBorderWidth ? heateorSssBorderWidth : heateorSssBorderWidthHover ? heateorSssBorderWidthHover : '0' );
											jQuery(this).css( 'borderColor', heateorSssBorderColor ? heateorSssBorderColor : 'transparent' );
										});
										</script>
									</td>
								</tr>

								<tr>
									<td colspan="2">
									<div id="heateor_sss_preview_message" style="color:green;display:none;margin-top:36px"><?php _e( 'Do not forget to save the configuration after making changes by clicking the save button below', 'sassy-social-share' ); ?></div>
									</td>
								</tr>

								<tr>
									<th>
										<label><?php _e( "Shape", 'sassy-social-share' ); ?></label>
										<img id="heateor_sss_icon_shape_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
									</th>
									<td>
										<input id="heateor_sss_icon_round" onclick="tempHorShape = 'round';heateorSssSharingHorizontalPreview()" name="heateor_sss[horizontal_sharing_shape]" type="radio" <?php echo $sharing_shape == 'round' ? 'checked = "checked"' : '';?> value="round" />
										<label style="margin-right:10px" for="heateor_sss_icon_round"><?php _e( "Round", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_icon_square" onclick="tempHorShape = 'square';heateorSssSharingHorizontalPreview()" name="heateor_sss[horizontal_sharing_shape]" type="radio" <?php echo $sharing_shape == 'square' ? 'checked = "checked"' : '';?> value="square" />
										<label style="margin-right:10px" for="heateor_sss_icon_square"><?php _e( "Square", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_icon_rectangle" onclick="tempHorShape = 'rectangle';heateorSssSharingHorizontalPreview()" name="heateor_sss[horizontal_sharing_shape]" type="radio" <?php echo $sharing_shape == 'rectangle' ? 'checked = "checked"' : '';?> value="rectangle" />
										<label for="heateor_sss_icon_rectangle"><?php _e( "Rectangle", 'sassy-social-share' ); ?></label>
									</td>
								</tr>

								<tr class="heateor_sss_help_content" id="heateor_sss_icon_shape_help_cont">
									<td colspan="2">
									<div>
									<?php _e( 'Shape of the sharing icons', 'sassy-social-share' ) ?>
									</div>
									</td>
								</tr>

								<tbody id="heateor_sss_size_options" <?php echo ! isset( $options['horizontal_sharing_shape'] ) || $options['horizontal_sharing_shape'] != 'rectangle' ? '' : 'style="display: none"'; ?>>	
									<tr>
										<th>
											<label><?php _e("Size (in pixels)", 'sassy-social-share' ); ?></label>
											<img id="heateor_sss_icon_size_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
										</th>
										<td>
											<input style="width:50px" id="heateor_sss_icon_size" name="heateor_sss[horizontal_sharing_size]" type="text" value="<?php echo $sharing_size; ?>" />
											<input id="heateor_sss_size_plus" type="button" value="+" onmouseup="tempHorSize = document.getElementById( 'heateor_sss_icon_size' ).value;heateorSssSharingHorizontalPreview()" />
											<input id="heateor_sss_size_minus" type="button" value="-" onmouseup="tempHorSize = document.getElementById( 'heateor_sss_icon_size' ).value;heateorSssSharingHorizontalPreview()" />
											<script type="text/javascript">
												heateorSssIncrement(document.getElementById( 'heateor_sss_size_plus' ), "add", document.getElementById( 'heateor_sss_icon_size' ), 300, 0.7);
												heateorSssIncrement(document.getElementById( 'heateor_sss_size_minus' ), "subtract", document.getElementById( 'heateor_sss_icon_size' ), 300, 0.7);
											</script>
										</td>
									</tr>

									<tr class="heateor_sss_help_content" id="heateor_sss_icon_size_help_cont">
										<td colspan="2">
										<div>
										<?php _e( 'Size of the sharing icons', 'sassy-social-share' ) ?>
										</div>
										</td>
									</tr>
								</tbody>

								<tbody id="heateor_sss_rectangle_options" <?php echo isset( $options['horizontal_sharing_shape'] ) && $options['horizontal_sharing_shape'] == 'rectangle' ? '' : 'style="display: none"'; ?>>
									<tr>
										<th>
											<label><?php _e("Width (in pixels)", 'sassy-social-share' ); ?></label>
											<img id="heateor_sss_icon_width_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
										</th>
										<td>
											<input style="width:50px" id="heateor_sss_icon_width" name="heateor_sss[horizontal_sharing_width]" type="text" value="<?php echo $sharing_width; ?>" />
											<input id="heateor_sss_width_plus" type="button" value="+" onmouseup="tempHorWidth = document.getElementById( 'heateor_sss_icon_width' ).value;heateorSssSharingHorizontalPreview()" />
											<input id="heateor_sss_width_minus" type="button" value="-" onmouseup="tempHorWidth = document.getElementById( 'heateor_sss_icon_width' ).value;heateorSssSharingHorizontalPreview()" />
											<script type="text/javascript">
												heateorSssIncrement(document.getElementById( 'heateor_sss_width_plus' ), "add", document.getElementById( 'heateor_sss_icon_width' ), 300, 0.7);
												heateorSssIncrement(document.getElementById( 'heateor_sss_width_minus' ), "subtract", document.getElementById( 'heateor_sss_icon_width' ), 300, 0.7);
											</script>
										</td>
									</tr>

									<tr class="heateor_sss_help_content" id="heateor_sss_icon_width_help_cont">
										<td colspan="2">
										<div>
										<?php _e( 'Width of the sharing icons', 'sassy-social-share' ) ?>
										</div>
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e("Height (in pixels)", 'sassy-social-share' ); ?></label>
											<img id="heateor_sss_icon_height_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
										</th>
										<td>
											<input style="width:50px" id="heateor_sss_icon_height" name="heateor_sss[horizontal_sharing_height]" type="text" value="<?php echo $sharing_height; ?>" />
											<input id="heateor_sss_height_plus" type="button" value="+" onmouseup="tempHorHeight = document.getElementById( 'heateor_sss_icon_height' ).value;heateorSssSharingHorizontalPreview()" />
											<input id="heateor_sss_height_minus" type="button" value="-" onmouseup="tempHorHeight = document.getElementById( 'heateor_sss_icon_height' ).value;heateorSssSharingHorizontalPreview()" />
											<script type="text/javascript">
												heateorSssIncrement(document.getElementById( 'heateor_sss_height_plus' ), "add", document.getElementById( 'heateor_sss_icon_height' ), 300, 0.7);
												heateorSssIncrement(document.getElementById( 'heateor_sss_height_minus' ), "subtract", document.getElementById( 'heateor_sss_icon_height' ), 300, 0.7);
											</script>
										</td>
									</tr>

									<tr class="heateor_sss_help_content" id="heateor_sss_icon_height_help_cont">
										<td colspan="2">
										<div>
										<?php _e( 'Height of the sharing icons', 'sassy-social-share' ) ?>
										</div>
										</td>
									</tr>
								</tbody>

								<tbody id="heateor_sss_border_radius_options" <?php echo isset( $options['horizontal_sharing_shape'] ) && $options['horizontal_sharing_shape'] != 'round' ? '' : 'style="display: none"'; ?>>
									<tr>
										<th>
											<label><?php _e("Border radius (in pixels)", 'sassy-social-share' ); ?></label>
											<img id="heateor_sss_icon_border_radius_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
										</th>
										<td>
											<input style="width:50px" id="heateor_sss_icon_border_radius" name="heateor_sss[horizontal_border_radius]" type="text" value="<?php echo $sharing_border_radius; ?>" onkeyup="heateorSssSharingBorderRadius = this.value.trim() ? this.value.trim() + 'px' : '0px';heateorSssUpdateSharingPreview(heateorSssSharingBorderRadius, 'borderRadius', '0px', 'heateor_sss_preview' )" />
										</td>
									</tr>

									<tr class="heateor_sss_help_content" id="heateor_sss_icon_border_radius_help_cont">
										<td colspan="2">
										<div>
										<?php _e( 'Specify a value for rounded corners. More the value, more rounded will the corners be. Leave empty for sharp corners.', 'sassy-social-share' ) ?>
										</div>
										</td>
									</tr>
								</tbody>

								<tr>
									<th>
										<label><?php _e("Logo Color", 'sassy-social-share' ); ?></label>
										<img id="heateor_sss_font_color_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
									</th>
									<td>
										<script type="text/javascript">var heateorSssSharingTempColor = '<?php echo $sharing_color ? $sharing_color : "#fff" ?>';</script>
										<label for="heateor_sss_font_color_default"><?php _e("Default", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_font_color_default" onkeyup="if (this.value.trim() == '' || this.value.trim().length >= 3) { jQuery( '#horizontal_svg' ).attr( 'style', jQuery( '#horizontal_svg' ).attr( 'style' ).replace(heateorSssSharingTempColor.replace( '#', '%23' ), this.value.trim() ? this.value.trim().replace( '#', '%23' ) : '%23fff' ) ); heateorSssSharingTempColor = this.value.trim() ? this.value.trim() : '#fff';jQuery( '#heateor_sss_preview' ).css( 'color', heateorSssSharingTempColor.replace( '%23','#' ) ) }" name="heateor_sss[horizontal_font_color_default]" type="text" value="<?php echo $sharing_color; ?>" />
										<input name="heateor_sss[horizontal_sharing_replace_color]" type="hidden" value="<?php echo isset( $options['horizontal_sharing_replace_color'] ) ? $options['horizontal_sharing_replace_color'] : ''; ?>" />
										<label style="margin-left:10px" for="heateor_sss_font_color_hover"><?php _e("On Hover", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_font_color_hover" name="heateor_sss[horizontal_font_color_hover]" type="text" onkeyup="" value="<?php echo $sharing_color_hover; ?>" />
										<input name="heateor_sss[horizontal_sharing_replace_color_hover]" type="hidden" value="<?php echo isset( $options['horizontal_sharing_replace_color_hover'] ) ? $options['horizontal_sharing_replace_color_hover'] : ''; ?>" />
									</td>
								</tr>

								<tr class="heateor_sss_help_content" id="heateor_sss_font_color_help_cont">
									<td colspan="2">
									<div>
									<?php _e( 'Specify the color or hex code (example #cc78e0) for the logo of icon. Leave empty for default. You can get the hex code of the required color from <a href="http://www.colorpicker.com/" target="_blank">this link</a>', 'sassy-social-share' ) ?>
									</div>
									</td>
								</tr>

								<tr>
									<th>
										<label><?php _e("Background Color", 'sassy-social-share' ); ?></label>
										<img id="heateor_sss_bg_color_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
									</th>
									<td>
										<label for="heateor_sss_bg_color_default"><?php _e("Default", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_bg_color_default" name="heateor_sss[horizontal_bg_color_default]" type="text" onkeyup="heateorSssSharingBg = this.value.trim() ? this.value.trim() : '#3C589A'; heateorSssUpdateSharingPreview(this.value.trim(), 'backgroundColor', '#3C589A', 'heateor_sss_preview' )" value="<?php echo $horizontal_bg ?>" />
										<label style="margin-left:10px" for="heateor_sss_bg_color_hover"><?php _e("On Hover", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_bg_color_hover" name="heateor_sss[horizontal_bg_color_hover]" type="text" onkeyup="heateorSssSharingBgHover = this.value.trim() ? this.value.trim() : '#3C589A';" value="<?php echo $horizontal_bg_hover ?>" />
									</td>
								</tr>

								<tr class="heateor_sss_help_content" id="heateor_sss_bg_color_help_cont">
									<td colspan="2">
									<div>
									<?php _e( 'Specify the color or hex code (example #cc78e0) for icon background. Save "transparent" for transparent background. Leave empty for default. You can get the hex code of the required color from <a href="http://www.colorpicker.com/" target="_blank">this link</a>', 'sassy-social-share' ) ?>
									</div>
									</td>
								</tr>

								<tr>
									<th>
										<label><?php _e("Border", 'sassy-social-share' ); ?></label>
										<img id="heateor_sss_border_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
									</th>
									<td>
										<script type="text/javascript">var heateorSssBorderWidthHover = '<?php echo $border_width_hover = isset( $options['horizontal_border_width_hover'] ) ? $options['horizontal_border_width_hover'] : ''; ?>', heateorSssBorderColorHover = '<?php echo $border_color_hover = isset( $options['horizontal_border_color_hover'] ) ? $options['horizontal_border_color_hover'] : ''; ?>'</script>
										<label><strong><?php _e("Default", 'sassy-social-share' ); ?></strong></label>
										<br/>
										<label for="heateor_sss_border_width_default"><?php _e("Border Width", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_border_width_default" onkeyup="heateorSssBorderWidth = this.value.trim(); jQuery( '#heateor_sss_preview' ).css( 'borderStyle', 'solid' ); heateorSssUpdateSharingPreview(this.value.trim(), 'borderWidth', '0px', 'heateor_sss_preview' ); heateorSssSharingHorizontalPreview();" name="heateor_sss[horizontal_border_width_default]" type="text" value="<?php echo $border_width ?>" />pixel(s)
										<label style="margin-left:10px" for="heateor_sss_border_color_default"><?php _e("Border Color", 'sassy-social-share' ); ?></label><input style="width: 100px" onkeyup="heateorSssBorderColor = this.value.trim(); jQuery( '#heateor_sss_preview' ).css( 'borderStyle', 'solid' ); heateorSssUpdateSharingPreview(this.value.trim(), 'borderColor', 'transparent', 'heateor_sss_preview' )" id="heateor_sss_border_color_default" name="heateor_sss[horizontal_border_color_default]" type="text" value="<?php echo $border_color ?>" />
										<br/><br/>
										<label><strong><?php _e("On Hover", 'sassy-social-share' ); ?></strong></label>
										<br/>
										<label for="heateor_sss_border_width_hover"><?php _e("Border Width", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_border_width_hover" name="heateor_sss[horizontal_border_width_hover]" type="text" value="<?php echo $border_width_hover ?>" onkeyup="heateorSssBorderWidthHover = this.value.trim();" />pixel(s)
										<label style="margin-left:10px" for="heateor_sss_border_color_hover"><?php _e("Border Color", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_border_color_hover" name="heateor_sss[horizontal_border_color_hover]" type="text" value="<?php echo $border_color_hover ?>" onkeyup="heateorSssBorderColorHover = this.value.trim();" />
									</td>
								</tr>

								<tr class="heateor_sss_help_content" id="heateor_sss_border_help_cont">
									<td colspan="2">
									<div>
									<?php _e( 'Icon border', 'sassy-social-share' ) ?>
									</div>
									</td>
								</tr>

								<tr>
									<th>
										<label><?php _e("Counter Position", 'sassy-social-share' ); ?><br/><?php _e("(applies, if counter enabled)", 'sassy-social-share' ); ?></label>
										<img id="heateor_sss_counter_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
									</th>
									<td>
										<input id="heateor_sss_counter_left" name="heateor_sss[horizontal_counter_position]" onclick="heateorSssCounterPreview(this.value.trim() )" type="radio" <?php echo $counter_position == 'left' ? 'checked = "checked"' : '';?> value="left" />
										<label style="margin-right:10px" for="heateor_sss_counter_left"><?php _e("Left", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_counter_top" name="heateor_sss[horizontal_counter_position]" onclick="heateorSssCounterPreview(this.value.trim() )" type="radio" <?php echo $counter_position == 'top' ? 'checked = "checked"' : '';?> value="top" />
										<label style="margin-right:10px" for="heateor_sss_counter_top"><?php _e("Top", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_counter_right" name="heateor_sss[horizontal_counter_position]" onclick="heateorSssCounterPreview(this.value.trim() )" type="radio" <?php echo $counter_position == 'right' ? 'checked = "checked"' : '';?> value="right" />
										<label style="margin-right:10px" for="heateor_sss_counter_right"><?php _e("Right", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_counter_bottom" name="heateor_sss[horizontal_counter_position]" onclick="heateorSssCounterPreview(this.value.trim() )" type="radio" <?php echo $counter_position == 'bottom' ? 'checked = "checked"' : '';?> value="bottom" />
										<label style="margin-right:10px" for="heateor_sss_counter_bottom"><?php _e("Bottom", 'sassy-social-share' ); ?></label><br/>
										<input id="heateor_sss_counter_inner_left" name="heateor_sss[horizontal_counter_position]" onclick="heateorSssCounterPreview(this.value.trim() )" type="radio" <?php echo $counter_position == 'inner_left' ? 'checked = "checked"' : '';?> value="inner_left" />
										<label style="margin-right:10px" for="heateor_sss_counter_inner_left"><?php _e("Inner Left", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_counter_inner_top" name="heateor_sss[horizontal_counter_position]" onclick="heateorSssCounterPreview(this.value.trim() )" type="radio" <?php echo $counter_position == 'inner_top' ? 'checked = "checked"' : '';?> value="inner_top" />
										<label style="margin-right:10px" for="heateor_sss_counter_inner_top"><?php _e("Inner Top", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_counter_inner_right" name="heateor_sss[horizontal_counter_position]" onclick="heateorSssCounterPreview(this.value.trim() )" type="radio" <?php echo $counter_position == 'inner_right' ? 'checked = "checked"' : '';?> value="inner_right" />
										<label style="margin-right:10px" for="heateor_sss_counter_inner_right"><?php _e("Inner Right", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_counter_inner_bottom" name="heateor_sss[horizontal_counter_position]" onclick="heateorSssCounterPreview(this.value.trim() )" type="radio" <?php echo $counter_position == 'inner_bottom' ? 'checked = "checked"' : '';?> value="inner_bottom" />
										<label style="margin-right:10px" for="heateor_sss_counter_inner_bottom"><?php _e("Inner Bottom", 'sassy-social-share' ); ?></label>
									</td>
								</tr>
								<script type="text/javascript">heateorSssCounterPreview( '<?php echo $counter_position ?>' );</script>

								<tr class="heateor_sss_help_content" id="heateor_sss_counter_help_cont">
									<td colspan="2">
									<div>
									<?php _e( 'Position of share counter', 'sassy-social-share' ) ?>
									</div>
									</td>
								</tr>

								<tr>
									<td colspan="2">
									<div>
									<a href="https://www.heateor.com/comparison-between-sassy-social-share-pro-and-premium/" target="_blank"><img src="<?php echo plugins_url( '../../images/unlock/responsive-icons.png', __FILE__ ) ?>" /></a>
									</div>
									</td>
								</tr>
								
							</table>
						</div>	
					</div>
				
					<div class="stuffbox">
						<h3><label><?php _e( 'Floating interface theme', 'sassy-social-share' );?></label></h3>
						<div class="inside">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
								<tr>
									<th>
										<label style="float:left"><?php _e("Icon Preview", 'sassy-social-share' ); ?></label>
									</th>
									<td>
										<?php
										$vertical_bg = isset( $options['vertical_bg_color_default'] ) ? $options['vertical_bg_color_default'] : '';
										$vertical_bg_hover = isset( $options['vertical_bg_color_hover'] ) ? $options['vertical_bg_color_hover'] : '';
										$vertical_border_width = isset( $options['vertical_border_width_default'] ) ? $options['vertical_border_width_default'] : '';
										$vertical_border_color = isset( $options['vertical_border_color_default'] ) ? $options['vertical_border_color_default'] : '';
										$vertical_sharing_color = isset( $options['vertical_font_color_default'] ) ? $options['vertical_font_color_default'] : '';
										$vertical_sharing_color_hover = isset( $options['vertical_font_color_hover'] ) ? $options['vertical_font_color_hover'] : '';
										$vertical_sharing_shape = isset( $options['vertical_sharing_shape'] ) ? $options['vertical_sharing_shape'] : 'round'; 
										$vertical_sharing_size = isset( $options['vertical_sharing_size'] ) ? $options['vertical_sharing_size'] : 32;
										$vertical_sharing_width = isset( $options['vertical_sharing_width'] ) ? $options['vertical_sharing_width'] : 32;
										$vertical_sharing_height = isset( $options['vertical_sharing_height'] ) ? $options['vertical_sharing_height'] : 32;
										$vertical_sharing_border_radius = isset( $options['vertical_border_radius'] ) ? $options['vertical_border_radius'] : '';
										$vertical_vertical_bg_hover = isset( $options['vertical_bg_color_hover'] ) ? $options['vertical_bg_color_hover'] : '';
										$vertical_counter_position = isset( $options['vertical_counter_position'] ) ? $options['vertical_counter_position'] : '';
										$vertical_line_height = $vertical_sharing_shape == 'rectangle' ? $vertical_sharing_height : $vertical_sharing_size;
										?>
										<style type="text/css">
										#heateor_sss_vertical_preview{
											color:<?php echo $vertical_sharing_color ? $vertical_sharing_color : "#fff" ?>;
										}
										#heateor_sss_vertical_preview:hover{
											color:<?php echo $vertical_sharing_color_hover ?>;
										}
										</style>
										<div>
											<div class="heateorSssCounterVerticalPreviewTop" style="width:<?php echo 60 + ( isset( $options['vertical_sharing_shape'] ) && $options['vertical_sharing_shape'] == 'rectangle' ? $options['vertical_sharing_width'] : $options['vertical_sharing_size'] ) ?>px">44</div>
											<div class="heateorSssCounterVerticalPreviewLeft">44</div>
											<div id="heateor_sss_vertical_preview" style="cursor:pointer;float:left">
												<div class="heateorSssCounterVerticalPreviewInnertop">44</div>
												<div class="heateorSssCounterVerticalPreviewInnerleft">44</div>
												<div id="vertical_svg" style="float:left;width:100%;height:100%;background:url( 'data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20viewBox%3D%22-4%20-4%2040%2040%22%3E%3Cpath%20d%3D%22M17.78%2027.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99%202.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123%200-5.26%201.905-5.26%205.405v3.016h-3.53v4.09h3.53V27.5h4.223z%22%20fill%3D%22<?php echo $vertical_sharing_color ? str_replace( '#', '%23', $vertical_sharing_color) : "%23fff" ?>%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E' ) no-repeat center center; margin: auto"></div>
												<div class="heateorSssCounterVerticalPreviewInnerright">44</div>
												<div class="heateorSssCounterVerticalPreviewInnerbottom">44</div>
											</div>
											<div class="heateorSssCounterVerticalPreviewRight">44</div>
											<div class="heateorSssCounterVerticalPreviewBottom" style="width:<?php echo 60 + ( isset( $options['vertical_sharing_shape'] ) && $options['vertical_sharing_shape'] == 'rectangle' ? $options['vertical_sharing_width'] : $options['vertical_sharing_size'] ) ?>px">44</div>
										</div>
										
										<script type="text/javascript">
										var tempVerticalShape = '<?php echo $vertical_sharing_shape ?>', tempVerticalSize = '<?php echo $vertical_sharing_size ?>', tempVerticalHeight = '<?php echo $vertical_sharing_height ?>', tempVerticalWidth = '<?php echo $vertical_sharing_width ?>', heateorSssVerticalSharingBgHover = '<?php echo $vertical_bg_hover ?>', heateorSssVerticalSharingBg = '<?php echo $vertical_bg ? $vertical_bg : "#3C589A" ?>', heateorSssVerticalBorderWidth = '<?php echo $vertical_border_width ?>', heateorSssVerticalBorderColor = '<?php echo $vertical_border_color ?>', heateorSssVerticalBorderWidthHover = '<?php echo $vertical_border_width_hover = isset( $options['vertical_border_width_hover'] ) ? $options['vertical_border_width_hover'] : ''; ?>', heateorSssVerticalBorderColorHover = '<?php echo $vertical_border_color_hover = isset( $options['vertical_border_color_hover'] ) ? $options['vertical_border_color_hover'] : ''; ?>', heateorSssVerticalBorderRadius = '<?php echo $vertical_sharing_border_radius ? $vertical_sharing_border_radius . "px" : "0px" ?>';
										
										heateorSssSharingVerticalPreview();
										
										jQuery( '#heateor_sss_vertical_preview' ).hover(function() {
											if (heateorSssVerticalSharingBgHover && heateorSssVerticalSharingBgHover != '#3C589A' ) {
												jQuery(this).css( 'backgroundColor', heateorSssVerticalSharingBgHover);
											}
											if (jQuery( '#heateor_sss_vertical_font_color_hover' ).val().trim() ) {
												jQuery(this).find( '#vertical_svg' ).attr( 'style', jQuery(this).find( '#vertical_svg' ).attr( 'style' ).replace(heateorSssVerticalSharingTempColor.replace( '#', '%23' ), jQuery( '#heateor_sss_vertical_font_color_hover' ).val().trim().replace( '#', '%23' ) ));
												jQuery(this).css( 'color', jQuery( '#heateor_sss_vertical_font_color_hover' ).val().trim() );
											}
											jQuery(this).css( 'borderStyle', 'solid' );
											jQuery(this).css( 'borderWidth', heateorSssVerticalBorderWidthHover ? heateorSssVerticalBorderWidthHover : heateorSssVerticalBorderWidth ? heateorSssVerticalBorderWidth : '0' );
											jQuery(this).css( 'borderColor', heateorSssVerticalBorderColorHover ? heateorSssVerticalBorderColorHover : 'transparent' );
										},function() {
											jQuery(this).css( 'backgroundColor', heateorSssVerticalSharingBg);
											if (jQuery( '#heateor_sss_vertical_font_color_hover' ).val().trim() ) {
												jQuery(this).find( '#vertical_svg' ).attr( 'style', jQuery(this).find( '#vertical_svg' ).attr( 'style' ).replace(jQuery( '#heateor_sss_vertical_font_color_hover' ).val().trim().replace( '#', '%23' ), heateorSssVerticalSharingTempColor.replace( '#', '%23' ) ));
												jQuery(this).css( 'color', heateorSssVerticalSharingTempColor);
											}
											jQuery(this).css( 'borderStyle', 'solid' );
											jQuery(this).css( 'borderWidth', heateorSssVerticalBorderWidth ? heateorSssVerticalBorderWidth : heateorSssVerticalBorderWidthHover ? heateorSssVerticalBorderWidthHover : '0' );
											jQuery(this).css( 'borderColor', heateorSssVerticalBorderColor ? heateorSssVerticalBorderColor : 'transparent' );
										});
										</script>
									</td>
								</tr>

								<tr>
									<td colspan="2">
										<div id="heateor_sss_vertical_preview_message" style="color:green;display:none"><?php _e( 'Do not forget to save the configuration after making changes by clicking the save button below', 'sassy-social-share' ); ?></div>
									</td>
								</tr>

								<tr>
									<th>
										<label><?php _e("Shape", 'sassy-social-share' ); ?></label>
										<img id="heateor_sss_vertical_sharing_icon_shape_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
									</th>
									<td>
										<input id="heateor_sss_vertical_icon_round" onclick="tempVerticalShape = 'round';heateorSssSharingVerticalPreview()" name="heateor_sss[vertical_sharing_shape]" type="radio" <?php echo $vertical_sharing_shape == 'round' ? 'checked = "checked"' : '';?> value="round" />
										<label style="margin-right:10px" for="heateor_sss_vertical_icon_round"><?php _e("Round", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_vertical_icon_square" onclick="tempVerticalShape = 'square';heateorSssSharingVerticalPreview()" name="heateor_sss[vertical_sharing_shape]" type="radio" <?php echo $vertical_sharing_shape == 'square' ? 'checked = "checked"' : '';?> value="square" />
										<label style="margin-right:10px" for="heateor_sss_vertical_icon_square"><?php _e("Square", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_vertical_icon_rectangle" onclick="tempVerticalShape = 'rectangle';heateorSssSharingVerticalPreview()" name="heateor_sss[vertical_sharing_shape]" type="radio" <?php echo $vertical_sharing_shape == 'rectangle' ? 'checked = "checked"' : '';?> value="rectangle" />
										<label for="heateor_sss_vertical_icon_rectangle"><?php _e("Rectangle", 'sassy-social-share' ); ?></label>
									</td>
								</tr>

								<tr class="heateor_sss_help_content" id="heateor_sss_vertical_sharing_icon_shape_help_cont">
									<td colspan="2">
									<div>
									<?php _e( 'Shape of the sharing icons', 'sassy-social-share' ) ?>
									</div>
									</td>
								</tr>

								<tbody id="heateor_sss_vertical_size_options" <?php echo ! isset( $options['vertical_sharing_shape'] ) || $options['vertical_sharing_shape'] != 'rectangle' ? '' : 'style="display: none"'; ?>>	
									<tr>
										<th>
											<label><?php _e("Size (in pixels)", 'sassy-social-share' ); ?></label>
											<img id="heateor_sss_vertical_sharing_icon_size_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
										</th>
										<td>
											<input style="width:50px" id="heateor_sss_vertical_sharing_icon_size" name="heateor_sss[vertical_sharing_size]" type="text" value="<?php echo $vertical_sharing_size; ?>" />
											<input id="heateor_sss_vertical_sharing_size_plus" type="button" value="+" onmouseup="tempVerticalSize = document.getElementById( 'heateor_sss_vertical_sharing_icon_size' ).value;heateorSssSharingVerticalPreview()" />
											<input id="heateor_sss_vertical_sharing_size_minus" type="button" value="-" onmouseup="tempVerticalSize = document.getElementById( 'heateor_sss_vertical_sharing_icon_size' ).value;heateorSssSharingVerticalPreview()" />
											<script type="text/javascript">
												heateorSssIncrement(document.getElementById( 'heateor_sss_vertical_sharing_size_plus' ), "add", document.getElementById( 'heateor_sss_vertical_sharing_icon_size' ), 300, 0.7);
												heateorSssIncrement(document.getElementById( 'heateor_sss_vertical_sharing_size_minus' ), "subtract", document.getElementById( 'heateor_sss_vertical_sharing_icon_size' ), 300, 0.7);
											</script>
										</td>
									</tr>

									<tr class="heateor_sss_help_content" id="heateor_sss_vertical_sharing_icon_size_help_cont">
										<td colspan="2">
										<div>
										<?php _e( 'Size of the sharing icons', 'sassy-social-share' ) ?>
										</div>
										</td>
									</tr>
								</tbody>

								<tbody id="heateor_sss_vertical_rectangle_options" <?php echo isset( $options['vertical_sharing_shape'] ) && $options['vertical_sharing_shape'] == 'rectangle' ? '' : 'style="display: none"'; ?>>
									<tr>
										<th>
											<label><?php _e("Width (in pixels)", 'sassy-social-share' ); ?></label>
											<img id="heateor_sss_vertical_icon_width_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
										</th>
										<td>
											<input style="width:50px" id="heateor_sss_vertical_icon_width" name="heateor_sss[vertical_sharing_width]" type="text" value="<?php echo $vertical_sharing_width; ?>" />
											<input id="heateor_sss_vertical_width_plus" type="button" value="+" onmouseup="tempVerticalWidth = document.getElementById( 'heateor_sss_vertical_icon_width' ).value;heateorSssSharingVerticalPreview()" />
											<input id="heateor_sss_vertical_width_minus" type="button" value="-" onmouseup="tempVerticalWidth = document.getElementById( 'heateor_sss_vertical_icon_width' ).value;heateorSssSharingVerticalPreview()" />
											<script type="text/javascript">
												heateorSssIncrement(document.getElementById( 'heateor_sss_vertical_width_plus' ), "add", document.getElementById( 'heateor_sss_vertical_icon_width' ), 300, 0.7);
												heateorSssIncrement(document.getElementById( 'heateor_sss_vertical_width_minus' ), "subtract", document.getElementById( 'heateor_sss_vertical_icon_width' ), 300, 0.7);
											</script>
										</td>
									</tr>

									<tr class="heateor_sss_help_content" id="heateor_sss_vertical_icon_width_help_cont">
										<td colspan="2">
										<div>
										<?php _e( 'Width of the sharing icons', 'sassy-social-share' ) ?>
										</div>
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e("Height (in pixels)", 'sassy-social-share' ); ?></label>
											<img id="heateor_sss_vertical_icon_height_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
										</th>
										<td>
											<input style="width:50px" id="heateor_sss_vertical_icon_height" name="heateor_sss[vertical_sharing_height]" type="text" value="<?php echo $vertical_sharing_height; ?>" />
											<input id="heateor_sss_vertical_height_plus" type="button" value="+" onmouseup="tempVerticalHeight = document.getElementById( 'heateor_sss_vertical_icon_height' ).value;heateorSssSharingVerticalPreview()" />
											<input id="heateor_sss_vertical_height_minus" type="button" value="-" onmouseup="tempVerticalHeight = document.getElementById( 'heateor_sss_vertical_icon_height' ).value;heateorSssSharingVerticalPreview()" />
											<script type="text/javascript">
												heateorSssIncrement(document.getElementById( 'heateor_sss_vertical_height_plus' ), "add", document.getElementById( 'heateor_sss_vertical_icon_height' ), 300, 0.7);
												heateorSssIncrement(document.getElementById( 'heateor_sss_vertical_height_minus' ), "subtract", document.getElementById( 'heateor_sss_vertical_icon_height' ), 300, 0.7);
											</script>
										</td>
									</tr>

									<tr class="heateor_sss_help_content" id="heateor_sss_vertical_icon_height_help_cont">
										<td colspan="2">
										<div>
										<?php _e( 'Height of the sharing icons', 'sassy-social-share' ) ?>
										</div>
										</td>
									</tr>
								</tbody>

								<tbody id="heateor_sss_vertical_border_radius_options" <?php echo isset( $options['vertical_sharing_shape'] ) && $options['vertical_sharing_shape'] != 'round' ? '' : 'style="display: none"'; ?>>
									<tr>
										<th>
											<label><?php _e("Border radius (in pixels)", 'sassy-social-share' ); ?></label>
											<img id="heateor_sss_vertical_icon_border_radius_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
										</th>
										<td>
											<input style="width:50px" id="heateor_sss_vertical_icon_border_radius" name="heateor_sss[vertical_border_radius]" type="text" value="<?php echo $vertical_sharing_border_radius; ?>" onkeyup="heateorSssVerticalBorderRadius = this.value.trim() ? this.value.trim() + 'px' : '0px';heateorSssUpdateSharingPreview(heateorSssVerticalBorderRadius, 'borderRadius', '0px', 'heateor_sss_vertical_preview' )" />
										</td>
									</tr>

									<tr class="heateor_sss_help_content" id="heateor_sss_vertical_icon_border_radius_help_cont">
										<td colspan="2">
										<div>
										<?php _e( 'Specify a value for rounded corners. More the value, more rounded will the corners be. Leave empty for sharp corners.', 'sassy-social-share' ) ?>
										</div>
										</td>
									</tr>
								</tbody>

								<tr>
									<th>
										<label><?php _e("Logo Color", 'sassy-social-share' ); ?></label>
										<img id="heateor_sss_vertical_font_color_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
									</th>
									<td>
										<script type="text/javascript">var heateorSssVerticalSharingTempColor = '<?php echo $vertical_sharing_color ? $vertical_sharing_color : "#fff" ?>';</script>
										<label for="heateor_sss_vertical_font_color_default"><?php _e("Default", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_vertical_font_color_default" name="heateor_sss[vertical_font_color_default]" onkeyup="if (this.value.trim() == '' || this.value.trim().length >= 3) { jQuery( '#vertical_svg' ).attr( 'style', jQuery( '#vertical_svg' ).attr( 'style' ).replace(heateorSssVerticalSharingTempColor.replace( '#', '%23' ), this.value.trim() ? this.value.trim().replace( '#', '%23' ) : '%23fff' ) ); heateorSssVerticalSharingTempColor = this.value.trim() ? this.value.trim() : '#fff';jQuery( '#heateor_sss_vertical_preview' ).css( 'color', heateorSssVerticalSharingTempColor.replace( '%23','#' ) ) }" type="text" value="<?php echo $vertical_sharing_color ?>" />
										<input name="heateor_sss[vertical_sharing_replace_color]" type="hidden" value="<?php echo isset( $options['vertical_sharing_replace_color'] ) ? $options['vertical_sharing_replace_color'] : ''; ?>" />
										<label style="margin-left:10px" for="heateor_sss_vertical_font_color_hover"><?php _e("On Hover", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_vertical_font_color_hover" name="heateor_sss[vertical_font_color_hover]" type="text" value="<?php echo $vertical_sharing_color_hover; ?>" />
										<input name="heateor_sss[vertical_sharing_replace_color_hover]" type="hidden" value="<?php echo isset( $options['vertical_sharing_replace_color_hover'] ) ? $options['vertical_sharing_replace_color_hover'] : ''; ?>" />
									</td>
								</tr>

								<tr class="heateor_sss_help_content" id="heateor_sss_vertical_font_color_help_cont">
									<td colspan="2">
									<div>
									<?php _e( 'Specify the color or hex code (example #cc78e0) for the logo of icon. Leave empty for default. You can get the hex code of the required color from <a href="http://www.colorpicker.com/" target="_blank">this link</a>', 'sassy-social-share' ) ?>
									</div>
									</td>
								</tr>

								<tr>
									<th>
										<label><?php _e("Background Color", 'sassy-social-share' ); ?></label>
										<img id="heateor_sss_vertical_icon_bg_color_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
									</th>
									<td>
										<label for="heateor_sss_vertical_icon_bg_color_default"><?php _e("Default", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_vertical_icon_bg_color_default" name="heateor_sss[vertical_bg_color_default]" type="text" onkeyup="heateorSssVerticalSharingBg = this.value.trim() ? this.value.trim() : '#3C589A'; heateorSssUpdateSharingPreview(this.value.trim(), 'backgroundColor', '#3C589A', 'heateor_sss_vertical_preview' )" value="<?php echo $vertical_bg ?>" />
										<label style="margin-left:10px" for="heateor_sss_vertical_bg_color_hover"><?php _e("On Hover", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_vertical_bg_color_hover" name="heateor_sss[vertical_bg_color_hover]" type="text" onkeyup="heateorSssVerticalSharingBgHover = this.value.trim() ? this.value.trim() : '#3C589A';" value="<?php echo $vertical_bg_hover ?>" />
									</td>
								</tr>

								<tr class="heateor_sss_help_content" id="heateor_sss_vertical_icon_bg_color_help_cont">
									<td colspan="2">
									<div>
									<?php _e( 'Specify the color or hex code (example #cc78e0) for icon background. Save "transparent" for transparent background. Leave empty for default. You can get the hex code of the required color from <a href="http://www.colorpicker.com/" target="_blank">this link</a>', 'sassy-social-share' ) ?>
									</div>
									</td>
								</tr>

								<tr>
									<th>
										<label><?php _e("Border", 'sassy-social-share' ); ?></label>
										<img id="heateor_sss_vertical_border_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
									</th>
									<td>
										<label><strong><?php _e("Default", 'sassy-social-share' ); ?></strong></label>
										<br/>
										<label for="heateor_sss_vertical_border_width_default"><?php _e("Border Width", 'sassy-social-share' ); ?></label><input style="width: 100px" onkeyup="heateorSssVerticalBorderWidth = this.value.trim(); jQuery( '#heateor_sss_vertical_preview' ).css( 'borderStyle', 'solid' ); heateorSssUpdateSharingPreview(this.value.trim(), 'borderWidth', '0px', 'heateor_sss_vertical_preview' ); heateorSssSharingVerticalPreview();" id="heateor_sss_vertical_border_width_default" name="heateor_sss[vertical_border_width_default]" type="text" value="<?php echo $vertical_border_width ?>" />pixel(s)
										<label style="margin-left:10px" for="heateor_sss_vertical_border_color_default"><?php _e("Border Color", 'sassy-social-share' ); ?></label><input onkeyup="heateorSssVerticalBorderColor = this.value.trim(); jQuery( '#heateor_sss_vertical_preview' ).css( 'borderStyle', 'solid' ); heateorSssUpdateSharingPreview(this.value.trim(), 'borderColor', 'transparent', 'heateor_sss_vertical_preview' )" style="width: 100px" id="heateor_sss_vertical_border_color_default" name="heateor_sss[vertical_border_color_default]" type="text" value="<?php echo $vertical_border_color = isset( $options['vertical_border_color_default'] ) ? $options['vertical_border_color_default'] : ''; ?>" />
										<br/><br/>
										<label><strong><?php _e("On Hover", 'sassy-social-share' ); ?></strong></label>
										<br/>
										<label for="heateor_sss_vertical_border_width_hover"><?php _e("Border Width", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_vertical_border_width_hover" name="heateor_sss[vertical_border_width_hover]" onkeyup="heateorSssVerticalBorderWidthHover = this.value.trim();" type="text" value="<?php echo $vertical_border_width_hover ?>" />pixel(s)
										<label style="margin-left:10px" for="heateor_sss_vertical_border_color_hover"><?php _e("Border Color", 'sassy-social-share' ); ?></label><input style="width: 100px" id="heateor_sss_vertical_border_color_hover" name="heateor_sss[vertical_border_color_hover]" onkeyup="heateorSssVerticalBorderColorHover = this.value.trim()" type="text" value="<?php echo $vertical_border_color_hover; ?>" />
									</td>
								</tr>

								<tr class="heateor_sss_help_content" id="heateor_sss_vertical_border_help_cont">
									<td colspan="2">
									<div>
									<?php _e( 'Icon border', 'sassy-social-share' ) ?>
									</div>
									</td>
								</tr>

								<tr>
									<th>
										<label><?php _e("Counter Position", 'sassy-social-share' ); ?><br/><?php _e("(applies, if counter enabled)", 'sassy-social-share' ); ?></label>
										<img id="heateor_sss_vertical_counter_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
									</th>
									<td>
										<input id="heateor_sss_vertical_counter_left" name="heateor_sss[vertical_counter_position]" onclick="heateorSssVerticalCounterPreview(this.value.trim() )" type="radio" <?php echo $vertical_counter_position == 'left' ? 'checked = "checked"' : '';?> value="left" />
										<label style="margin-right:10px" for="heateor_sss_vertical_counter_left"><?php _e("Left", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_vertical_counter_top" name="heateor_sss[vertical_counter_position]" onclick="heateorSssVerticalCounterPreview(this.value.trim() )" type="radio" <?php echo $vertical_counter_position == 'top' ? 'checked = "checked"' : '';?> value="top" />
										<label style="margin-right:10px" for="heateor_sss_vertical_counter_top"><?php _e("Top", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_vertical_counter_right" name="heateor_sss[vertical_counter_position]" onclick="heateorSssVerticalCounterPreview(this.value.trim() )" type="radio" <?php echo $vertical_counter_position == 'right' ? 'checked = "checked"' : '';?> value="right" />
										<label style="margin-right:10px" for="heateor_sss_vertical_counter_right"><?php _e("Right", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_vertical_counter_bottom" name="heateor_sss[vertical_counter_position]" onclick="heateorSssVerticalCounterPreview(this.value.trim() )" type="radio" <?php echo $vertical_counter_position == 'bottom' ? 'checked = "checked"' : '';?> value="bottom" />
										<label style="margin-right:10px" for="heateor_sss_vertical_counter_bottom"><?php _e("Bottom", 'sassy-social-share' ); ?></label><br/>
										<input id="heateor_sss_vertical_counter_inner_left" name="heateor_sss[vertical_counter_position]" onclick="heateorSssVerticalCounterPreview(this.value.trim() )" type="radio" <?php echo $vertical_counter_position == 'inner_left' ? 'checked = "checked"' : '';?> value="inner_left" />
										<label style="margin-right:10px" for="heateor_sss_vertical_counter_inner_left"><?php _e("Inner Left", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_vertical_counter_inner_top" name="heateor_sss[vertical_counter_position]" onclick="heateorSssVerticalCounterPreview(this.value.trim() )" type="radio" <?php echo $vertical_counter_position == 'inner_top' ? 'checked = "checked"' : '';?> value="inner_top" />
										<label style="margin-right:10px" for="heateor_sss_vertical_counter_inner_top"><?php _e("Inner Top", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_vertical_counter_inner_right" name="heateor_sss[vertical_counter_position]" onclick="heateorSssVerticalCounterPreview(this.value.trim() )" type="radio" <?php echo $vertical_counter_position == 'inner_right' ? 'checked = "checked"' : '';?> value="inner_right" />
										<label style="margin-right:10px" for="heateor_sss_vertical_counter_inner_right"><?php _e("Inner Right", 'sassy-social-share' ); ?></label>
										<input id="heateor_sss_vertical_counter_inner_bottom" name="heateor_sss[vertical_counter_position]" onclick="heateorSssVerticalCounterPreview(this.value.trim() )" type="radio" <?php echo $vertical_counter_position == 'inner_bottom' ? 'checked = "checked"' : '';?> value="inner_bottom" />
										<label style="margin-right:10px" for="heateor_sss_vertical_counter_inner_bottom"><?php _e("Inner Bottom", 'sassy-social-share' ); ?></label>
									</td>
								</tr>
								<script type="text/javascript">heateorSssVerticalCounterPreview( '<?php echo $vertical_counter_position ?>' );</script>

								<tr class="heateor_sss_help_content" id="heateor_sss_vertical_counter_help_cont">
									<td colspan="2">
									<div>
									<?php _e( 'Position of share counter', 'sassy-social-share' ) ?>
									</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<?php include 'sassy-social-share-about.php'; ?>
			</div>

			<div class="menu_containt_div" id="tabs-2">
				<div class="clear"></div>
				<div class="heateor_sss_left_column">
				
				<div class="stuffbox">
					<h3><label><?php _e( 'Standard Sharing Interface Options', 'sassy-social-share' );?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tr>
							<th>
							<label for="heateor_sss_horizontal_enable"><?php _e("Enable Standard sharing interface", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_horizontal_enable_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_horizontal_enable" onclick="heateorSssHorizontalSharingOptionsToggle(this)" name="heateor_sss[hor_enable]" type="checkbox" <?php echo isset( $options['hor_enable'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_horizontal_enable_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Master control to enable standard sharing', 'sassy-social-share' ) ?>
							<div style="clear:both"></div>
							<img width="550" src="<?php echo plugins_url( '../../images/snaps/sss_horizontal_sharing.png', __FILE__ ); ?>" />
							</div>
							</td>
						</tr>
						
						<tbody id="heateor_sss_horizontal_sharing_options" <?php echo isset( $options['hor_enable'] ) ? '' : 'style="display: none"'; ?>>
						<tr>
							<th>
							<label for="heateor_sss_horizontal_target_url"><?php _e("Target Url", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_horizontal_target_url_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td id="heateor_sss_target_url_column">
							<input id="heateor_sss_target_url_default" name="heateor_sss[horizontal_target_url]" type="radio" <?php echo !isset( $options['horizontal_target_url'] ) || $options['horizontal_target_url'] == 'default' ? 'checked = "checked"' : '';?> value="default" />
							<label for="heateor_sss_target_url_default"><?php _e( 'Url of the webpage where icons are located (default)', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_target_url_home" name="heateor_sss[horizontal_target_url]" type="radio" <?php echo isset( $options['horizontal_target_url'] ) && $options['horizontal_target_url'] == 'home' ? 'checked = "checked"' : '';?> value="home" />
							<label for="heateor_sss_target_url_home"><?php _e( 'Url of the homepage of your website', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_target_url_custom" name="heateor_sss[horizontal_target_url]" type="radio" <?php echo isset( $options['horizontal_target_url'] ) && $options['horizontal_target_url'] == 'custom' ? 'checked = "checked"' : '';?> value="custom" />
							<label for="heateor_sss_target_url_custom"><?php _e( 'Custom url', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_target_url_custom_url" name="heateor_sss[horizontal_target_url_custom]" type="text" value="<?php echo isset( $options['horizontal_target_url_custom'] ) ? $options['horizontal_target_url_custom'] : '' ?>" />
							</td>
						</tr>
						<tr class="heateor_sss_help_content" id="heateor_sss_horizontal_target_url_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Url to share', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<label for="heateor_sss_fblogin_title"><?php _e("Title", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_title_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_fblogin_title" name="heateor_sss[title]" type="text" value="<?php echo isset( $options['title'] ) ? $options['title'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_title_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'The text to display above the sharing interface', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<?php
						$youtube_username = '';
						if ( isset( $options['youtube_username'] ) ) {
							$youtube_username = $options['youtube_username'];
						} elseif ( isset( $options['vertical_youtube_username'] ) ) {
							$youtube_username = $options['vertical_youtube_username'];
						}
						$instagram_username = '';
						if ( isset( $options['instagram_username'] ) ) {
							$instagram_username = $options['instagram_username'];
						} elseif ( isset( $options['vertical_instagram_username'] ) ) {
							$instagram_username = $options['vertical_instagram_username'];
						}
						$commentform_container_id = '';
						if ( isset( $options['comment_container_id'] ) ) {
							$commentform_container_id = $options['comment_container_id'];
						} elseif ( isset( $options['vertical_comment_container_id'] ) ) {
							$commentform_container_id = $options['vertical_comment_container_id'];
						}
						if ( ! isset( $options['horizontal_re_providers'] ) ) {
							$options['horizontal_re_providers'] = array();
						}
						if ( ! isset( $options['vertical_re_providers'] ) ) {
							$options['vertical_re_providers'] = array();
						}
						?>
						<tbody id="heateor_sss_instagram_options" <?php echo ! isset( $options['horizontal_re_providers'] ) || ! in_array( 'instagram', $options['horizontal_re_providers'] ) ? 'style = "display: none"' : '';?> >
							<tr>
								<th>
								<label for="heateor_sss_instagram_username"><?php _e( "Instagram username", 'sassy-social-share' ); ?></label>
								<img id="heateor_sss_instagram_username_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
								</th>
								<td>
								<input id="heateor_sss_instagram_username" name="heateor_sss[instagram_username]" type="text" value="<?php echo $instagram_username ?>" />
								</td>
							</tr>
							
							<tr class="heateor_sss_help_content" id="heateor_sss_instagram_username_help_cont">
								<td colspan="2">
								<div>
								<?php _e( 'Username of the Instagram account you want to redirect users to, on clicking the icon', 'sassy-social-share' ) ?>
								</div>
								</td>
							</tr>
						</tbody>

						<tbody id="heateor_sss_youtube_options" <?php echo ! isset( $options['horizontal_re_providers'] ) || ! in_array( 'youtube', $options['horizontal_re_providers'] ) ? 'style = "display: none"' : '';?> >
							<tr>
								<th>
								<label for="heateor_sss_youtube_username"><?php _e( "Youtube URL", 'sassy-social-share' ); ?></label>
								<img id="heateor_sss_youtube_username_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
								</th>
								<td>
								<input id="heateor_sss_youtube_username" name="heateor_sss[youtube_username]" type="text" value="<?php echo $youtube_username ?>" />
								</td>
							</tr>
							
							<tr class="heateor_sss_help_content" id="heateor_sss_youtube_username_help_cont">
								<td colspan="2">
								<div>
								<?php _e( 'Username of the Youtube account you want to redirect users to, on clicking the icon', 'sassy-social-share' ) ?>
								</div>
								</td>
							</tr>
						</tbody>	

						<tbody id="heateor_sss_comment_options" <?php echo ! isset( $options['horizontal_re_providers'] ) || ! in_array( 'Comment', $options['horizontal_re_providers'] ) ? 'style = "display: none"' : '';?> >
							<tr>
								<th>
								<label for="heateor_sss_comment_container_id"><?php _e( "HTML ID of container element of comment form", 'sassy-social-share' ); ?></label>
								<img id="heateor_sss_comment_container_id_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
								</th>
								<td>
								<input id="heateor_sss_comment_container_id" name="heateor_sss[comment_container_id]" type="text" value="<?php echo $commentform_container_id ?>" />
								</td>
							</tr>
							
							<tr class="heateor_sss_help_content" id="heateor_sss_comment_container_id_help_cont">
								<td colspan="2">
								<div>
								<?php _e( 'HTML ID of the element you want to focus on the webpage, on click of Comment icon.', 'sassy-social-share' ) ?>
								</div>
								</td>
							</tr>
						</tbody>
						<?php
						$like_buttons = array( 'facebook_share', 'facebook_like', 'facebook_recommend', 'twitter_tweet', 'linkedin_share', 'pinterest_pin', 'buffer_share', 'xing_share', 'yummly_share', 'reddit_badge' );
						$sharing_networks = array( 'facebook', 'gab', 'twitter', 'linkedin', 'print', 'email', 'reddit', 'digg', 'float_it', 'tumblr', 'vkontakte', 'pinterest', 'xing', 'whatsapp', 'instagram', 'yummly', 'buffer', 'parler', 'AIM', 'Amazon_Wish_List', 'AOL_Mail', 'App.net', 'Balatarin', 'BibSonomy', 'Bitty_Browser', 'Blinklist', 'Blogger_Post', 'BlogMarks', 'Bookmarks.fr', 'Box.net', 'BuddyMarks', 'Care2_News', 'Comment', 'Copy_Link', 'Diary.Ru', 'Diaspora', 'Diigo', 'Douban', 'Draugiem', 'Evernote', 'Facebook_Messenger', 'Fark', 'Fintel', 'Flipboard', 'Folkd', 'GentleReader', 'Goodreads', 'Google_Bookmarks', 'Google_Classroom', 'Google_Gmail', 'Hacker_News', 'Hatena', 'Instapaper', 'Jamespot', 'Kakao', 'Kik', 'Kindle_It', 'Known', 'Line', 'LiveJournal', 'Mail.Ru', 'Mendeley', 'Meneame', 'MeWe', 'mix', 'Mixi', 'MySpace', 'Netvouz', 'Odnoklassniki', 'Outlook.com', 'Papaly', 'Pinboard', 'Plurk', 'Pocket', 'PrintFriendly', 'Protopage_Bookmarks', 'Pusha', 'Qzone', 'Rediff MyPage', 'Refind', 'Renren', 'Sina Weibo', 'SiteJot', 'Skype', 'Slashdot', 'SMS', 'StockTwits', 'Svejo', 'Symbaloo_Feeds', 'Telegram', 'Threema', 'Trello', 'Tuenti', 'Twiddla', 'TypePad_Post', 'Viadeo', 'Viber', 'Webnews', 'WordPress', 'Wykop', 'Yahoo_Mail', 'Yoolink', 'youtube' );
						?>

						<tr>
							<td colspan="2">
								<a href="https://www.heateor.com/comparison-between-sassy-social-share-pro-and-premium/" target="_blank"><img src="<?php echo plugins_url( '../../images/unlock/multiple-instances.png', __FILE__ ) ?>" /></a>
							</td>
						</tr>

						<tr>
							<th>
							<label><?php _e( "Rearrange icons", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_rearrange_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
						</tr>

						<tr>
							<td colspan="2">
							<script>
							// facebook app id and secret options toggle variables
							var heateorSssHorizontalShares = <?php echo isset( $options['horizontal_counts'] ) ? 'true' : 'false' ?>, heateorSssHorizontalTotalShares = <?php echo isset( $options['horizontal_total_shares'] ) ? 'true' : 'false' ?>, heateorSssVerticalShares = <?php echo isset( $options['vertical_counts'] ) ? 'true' : 'false' ?>, heateorSssVerticalTotalShares = <?php echo isset( $options['vertical_total_shares'] ) ? 'true' : 'false' ?>, heateorSssHorizontalFacebookShareEnabled = <?php echo in_array( 'facebook', $options['horizontal_re_providers'] ) ? 'true' : 'false'; ?>, heateorSssVerticalFacebookShareEnabled = <?php echo in_array( 'facebook', $options['vertical_re_providers'] ) ? 'true' : 'false'; ?>, heateorSssFacebookIDSecretNotSaved = <?php echo ! $options['fb_key'] || ! $options['fb_secret'] ? 'true' : 'false'; ?>;
							<?php
							$horSharingStyle = 'width:' . ( $options['horizontal_sharing_shape'] != 'rectangle' ? $options['horizontal_sharing_size'] : $options['horizontal_sharing_width'] ) . 'px;height:' . $line_height . 'px;';
							$horDeliciousRadius = '';
							if ( $options['horizontal_sharing_shape'] == 'round' ) {
								$horSharingStyle .= 'border-radius:999px;';
								$horDeliciousRadius = 'border-radius:999px;';
							} elseif ( isset( $options['horizontal_border_radius'] ) && $options['horizontal_border_radius'] != '' ) {
								$horSharingStyle .= 'border-radius:' . $options['horizontal_border_radius'] . 'px;';
							}
							?>
							var heateorSssHorSharingStyle = '<?php echo $horSharingStyle ?>', heateorSssHorDeliciousRadius = '<?php echo $horDeliciousRadius ?>', heateorSssLikeButtons = ["<?php echo implode( '","', $like_buttons) ?>"];
							</script>
							<style type="text/css">
							<?php if ( $horizontal_bg != '' ) { ?>
								ul#heateor_sss_rearrange i.heateorSssInstagramBackground{background:<?php echo $horizontal_bg ?>!important;}
							<?php } 
							if ( $horizontal_bg_hover != '' ) { ?>
								ul#heateor_sss_rearrange i.heateorSssInstagramBackground:hover{background:<?php echo $horizontal_bg_hover ?>!important;}
							<?php } ?>
							.heateorSssSharingBackground{
								<?php if ( $horizontal_bg ) { ?>
								background-color: <?php echo $horizontal_bg ?>;
								<?php } if ( $border_width ) { ?>
								border-width: <?php echo $border_width ?>px;
								border-style: solid;
								<?php } ?>
								border-color: <?php echo $border_color ? $border_color : 'transparent'; ?>;
							}
							.heateorSssSharingBackground:hover{
								<?php if ( $horizontal_bg_hover ) { ?>
								background-color: <?php echo $horizontal_bg_hover ?>;
								<?php }if ( $border_width_hover ) { ?>
								border-width: <?php echo $border_width_hover ?>px;
								border-style: solid;
								<?php } ?>
								border-color: <?php echo $border_color_hover ? $border_color_hover : 'transparent'; ?>;
							}
							</style>
							<ul id="heateor_sss_rearrange">
								<?php 
								if ( isset( $options['horizontal_re_providers'] ) ) {
									foreach ( $options['horizontal_re_providers'] as $rearrange ) {
										?>
										<li title="<?php echo ucfirst( str_replace( '_', ' ', $rearrange ) ) ?>" id="heateor_sss_re_horizontal_<?php echo str_replace(array( ' ', '.' ), '_', $rearrange) ?>" >
										<i style="display:block;<?php echo $horSharingStyle ?>" class="<?php echo in_array( $rearrange, $like_buttons) ? '' : 'heateorSssSharingBackground' ?> heateorSss<?php echo ucfirst(str_replace(array( '_', '.', ' ' ), '', $rearrange) ) ?>Background"><div class="heateorSssSharingSvg heateorSss<?php echo ucfirst(str_replace(array( '_', ' ', '.' ), '', $rearrange) ) ?>Svg" style="<?php echo $horDeliciousRadius ?>"></div></i>
										<input type="hidden" name="heateor_sss[horizontal_re_providers][]" value="<?php echo $rearrange ?>">
										</li>
										<?php
									}
								}
								?>
							</ul>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_rearrange_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Drag the icons to rearrange in desired order', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<th colspan="2">
							<label><?php _e( "Select Sharing Services", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_providers_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
						</tr>

						<tr class="heateor_sss_help_content" id="heateor_sss_providers_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Select sharing services to show in social share bar', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<td colspan="2" class="selectSharingNetworks">
							<?php
							foreach( $like_buttons as $like_button ) {
								?>
								<div class="heateorSssHorizontalSharingProviderContainer">
								<input id="heateor_sss_<?php echo $like_button ?>" type="checkbox" <?php echo isset( $options['horizontal_re_providers'] ) && in_array( $like_button, $options['horizontal_re_providers'] ) ? 'checked = "checked"' : '';?> value="<?php echo $like_button ?>" />
								<label for="heateor_sss_<?php echo $like_button ?>"><img src="<?php echo plugins_url( '../../images/sharing/'. $like_button .'.png', __FILE__ ) ?>" /></label>
								</div>
								<?php
							}
							?>
							<div style="clear:both"></div>
							<div style="width:100%; margin: 10px 0"><input type="text" onkeyup="heateorSssSearchSharingNetworks(this.value.trim())" placeholder="<?php _e( 'Search social network', 'sassy-social-share' ) ?>" class="search" /></div>
							<div style="clear:both"></div>
							<?php
							foreach( $sharing_networks as $sharing_network ) {
								?>
								<div class="heateorSssHorizontalSharingProviderContainer">
								<?php echo $sharing_network == 'Goodreads' ? '<a href="https://www.heateor.com/comparison-between-sassy-social-share-pro-and-premium/" target="_blank">' : ''; ?>
								<input id="heateor_sss_<?php echo $sharing_network ?>" type="checkbox" <?php echo $sharing_network == 'Goodreads' ? 'disabled ' : ''; ?><?php echo isset( $options['horizontal_re_providers'] ) && in_array( $sharing_network, $options['horizontal_re_providers'] ) ? 'checked = "checked"' : '';?> value="<?php echo $sharing_network ?>" />
								<label <?php echo $sharing_network != 'Goodreads' ? 'for="heateor_sss_' . $sharing_network . '"' : ''; ?>><i style="display:block;width:18px;height:18px;" class="heateorSssSharing heateorSss<?php echo str_replace( array( '_', '.', ' ' ), '', ucfirst( $sharing_network ) ) ?>Background"><ss style="display:block;" class="heateorSssSharingSvg heateorSss<?php echo str_replace(array( '_', '.', ' ' ), '', ucfirst( $sharing_network) ) ?>Svg"></ss></i></label>
								<label class="lblSocialNetwork" <?php echo $sharing_network != 'Goodreads' ? 'for="heateor_sss_' . $sharing_network . '"' : ''; ?>><?php echo str_replace( '_', ' ', ucfirst( $sharing_network ) ) ?></label>
								<?php echo $sharing_network == 'Goodreads' ? '</a>' : ''; ?>
								</div>
								<?php
							}
							?>
							</td>
						</tr>
						
						<tr>
							<th>
							<label for="heateor_sss_hor_alignment"><?php _e( "Horizontal alignment", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_hor_alignment_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<select id="heateor_sss_hor_alignment" name="heateor_sss[hor_sharing_alignment]">
								<option value="left" <?php echo isset( $options['hor_sharing_alignment'] ) && $options['hor_sharing_alignment'] == 'left' ? 'selected="selected"' : '' ?>><?php _e( 'Left', 'sassy-social-share' ) ?></option>
								<option value="center" <?php echo isset( $options['hor_sharing_alignment'] ) && $options['hor_sharing_alignment'] == 'center' ? 'selected="selected"' : '' ?>><?php _e( 'Center', 'sassy-social-share' ) ?></option>
								<option value="right" <?php echo isset( $options['hor_sharing_alignment'] ) && $options['hor_sharing_alignment'] == 'right' ? 'selected="selected"' : '' ?>><?php _e( 'Right', 'sassy-social-share' ) ?></option>
							</select>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_hor_alignment_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Horizontal alignment of the sharing interface', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<label><?php _e("Position with respect to content", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_position_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_top" name="heateor_sss[top]" type="checkbox" <?php echo isset( $options['top'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_top"><?php _e( 'Top of the content', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_bottom" name="heateor_sss[bottom]" type="checkbox" <?php echo isset( $options['bottom'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_bottom"><?php _e( 'Bottom of the content', 'sassy-social-share' ) ?></label>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_position_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Specify position of the sharing interface with respect to the content', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<td colspan="2">
							<div>
							<a href="https://www.heateor.com/comparison-between-sassy-social-share-pro-and-premium/" target="_blank"><img src="<?php echo plugins_url( '../../images/unlock/social-share-popup.png', __FILE__ ) ?>" /></a>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<label><?php _e("Placement", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_location_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_home" name="heateor_sss[home]" type="checkbox" <?php echo isset( $options['home'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_home"><?php _e( 'Homepage', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_post" name="heateor_sss[post]" type="checkbox" <?php echo isset( $options['post'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_post"><?php _e( 'Posts', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_page" name="heateor_sss[page]" type="checkbox" <?php echo isset( $options['page'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_page"><?php _e( 'Pages', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_excerpt" name="heateor_sss[excerpt]" type="checkbox" <?php echo isset( $options['excerpt'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_excerpt"><?php _e( 'Excerpts and Posts page', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_category" name="heateor_sss[category]" type="checkbox" <?php echo isset( $options['category'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_category"><?php _e( 'Category Archives', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_archive" name="heateor_sss[archive]" type="checkbox" <?php echo isset( $options['archive'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_archive"><?php _e( 'Archive Pages (Category, Tag, Author or Date based pages)', 'sassy-social-share' ) ?></label><br/>
							<?php
							$post_types = get_post_types( array( 'public' => true ), 'names', 'and' );
							$post_types = array_diff( $post_types, array( 'post', 'page' ) );
							if ( count( $post_types ) ) {	
								foreach ( $post_types as $post_type ) {
									?>
									<input id="heateor_sss_<?php echo $post_type ?>" name="heateor_sss[<?php echo $post_type ?>]" type="checkbox" <?php echo isset( $options[$post_type] ) ? 'checked = "checked"' : '';?> value="1" />
									<label for="heateor_sss_<?php echo $post_type ?>"><?php echo ucfirst( $post_type ) . 's'; ?></label><br/>
									<?php
								}
							}
							
							if ( $this->is_bp_active) {
								?>
								<input id="heateor_sss_bp_activity" name="heateor_sss[bp_activity]" type="checkbox" <?php echo isset( $options['bp_activity'] ) ? 'checked = "checked"' : '';?> value="1" />
								<label for="heateor_sss_bp_activity"><?php _e( 'BuddyPress activity', 'sassy-social-share' ) ?></label><br/>
								<input id="heateor_sss_bp_group" name="heateor_sss[bp_group]" type="checkbox" <?php echo isset( $options['bp_group'] ) ? 'checked = "checked"' : '';?> value="1" />
								<label for="heateor_sss_bp_group"><?php _e( 'BuddyPress group (only at top of content)', 'sassy-social-share' ) ?></label><br/>
								<?php
							}
							if (function_exists( 'is_bbpress' ) ) {
								?>
								<input id="heateor_sss_bb_forum" name="heateor_sss[bb_forum]" type="checkbox" <?php echo isset( $options['bb_forum'] ) ? 'checked = "checked"' : '';?> value="1" />
								<label for="heateor_sss_bb_forum"><?php _e( 'BBPress forum', 'sassy-social-share' ) ?></label>
								<br/>
								<input id="heateor_sss_bb_topic" name="heateor_sss[bb_topic]" type="checkbox" <?php echo isset( $options['bb_topic'] ) ? 'checked = "checked"' : '';?> value="1" />
								<label for="heateor_sss_bb_topic"><?php _e( 'BBPress topic', 'sassy-social-share' ) ?></label>
								<br/>
								<input id="heateor_sss_bb_reply" name="heateor_sss[bb_reply]" type="checkbox" <?php echo isset( $options['bb_reply'] ) ? 'checked = "checked"' : '';?> value="1" />
								<label for="heateor_sss_bb_reply"><?php _e( 'BBPress reply', 'sassy-social-share' ) ?></label>
								<br/>
								<?php
							}
							if ( $this->is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
								?>
								<input id="heateor_sss_woocom_shop" name="heateor_sss[woocom_shop]" type="checkbox" <?php echo isset( $options['woocom_shop'] ) ? 'checked = "checked"' : '';?> value="1" />
								<label for="heateor_sss_woocom_shop"><?php _e( 'After individual product at WooCommerce Shop page', 'sassy-social-share' ) ?></label>
								<br/>
								<input id="heateor_sss_woocom_product" name="heateor_sss[woocom_product]" type="checkbox" <?php echo isset( $options['woocom_product'] ) ? 'checked = "checked"' : '';?> value="1" />
								<label for="heateor_sss_woocom_product"><?php _e( 'WooCommerce Product Page', 'sassy-social-share' ) ?></label>
								<br/>
								<input id="heateor_sss_woocom_thankyou" name="heateor_sss[woocom_thankyou]" type="checkbox" <?php echo isset( $options['woocom_thankyou'] ) ? 'checked = "checked"' : '';?> value="1" />
								<label for="heateor_sss_woocom_thankyou"><?php _e( 'WooCommerce Thankyou Page', 'sassy-social-share' ) ?></label>
								<br/>
								<?php
							}
							?>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_location_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Specify the pages where you want to enable Sharing interface', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
						
						<tbody class="heateor_sss_fb_share_count_msg" <?php echo ! ( ( ( in_array( 'facebook', $options['vertical_re_providers'] ) && ( isset( $options['vertical_counts'] ) || isset( $options['vertical_total_shares'] ) ) ) || ( in_array( 'facebook', $options['horizontal_re_providers'] ) && ( isset( $options['horizontal_counts'] ) || isset( $options['horizontal_total_shares'] ) ) ) ) && ! $options['fb_key'] && ! $options['fb_secret'] ) ? 'style = "display: none"' : '';?>>
							<tr>
								<td colspan="2">
								<div style="color:green">
								<?php _e( 'Save Facebook App Id and Secret in the "Miscellaneous" section to track Facebook shares', 'sassy-social-share' ) ?>
								</div>
								</td>
							</tr>
						</tbody>

						<tr>
							<th>
							<label for="heateor_sss_counts"><?php _e( "Show share counts", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_count_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_counts" name="heateor_sss[horizontal_counts]" type="checkbox" <?php echo isset( $options['horizontal_counts'] ) ? 'checked = "checked"' : '';?> value="1" onclick="if(this.checked){heateorSssHorizontalShares = true;}else{heateorSssHorizontalShares = false;} heateor_sss_toggle_fb_share_count_options()" />
							<br/>
							<span class="heateor_sss_help_content" style="display:block"><?php _e( 'Share counts are supported for Facebook, Twitter, Linkedin, Buffer, Reddit, Pinterest, Odnoklassniki, Fintel and Vkontakte', 'sassy-social-share' ) ?></span>
							<span class="heateor_sss_help_content" style="display:block"><strong><?php echo sprintf( __( 'To show Twitter share count, you have to click "Give me my Twitter counts back" button at <a href="%s" target="_blank">TwitCount.com</a> and register your website %s with them. No need to copy-paste any code from their website.', 'sassy-social-share' ), 'http://twitcount.com', home_url() ) ?></strong></span>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_count_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'If enabled, share counts are displayed above sharing icons.', 'sassy-social-share' ) ?>
							<img width="550" src="<?php echo plugins_url( '../../images/snaps/sss_share_count.png', __FILE__ ); ?>" />
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<label for="heateor_sss_total_hor_shares"><?php _e("Show total shares", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_total_hor_shares_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_total_hor_shares" name="heateor_sss[horizontal_total_shares]" type="checkbox" <?php echo isset( $options['horizontal_total_shares'] ) ? 'checked = "checked"' : '';?> value="1" onclick="if(this.checked){heateorSssHorizontalTotalShares = true;}else{heateorSssHorizontalTotalShares = false;} heateor_sss_toggle_fb_share_count_options()" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_total_hor_shares_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'If enabled, total shares will be displayed with sharing icons', 'sassy-social-share' ) ?>
							<img width="550" src="<?php echo plugins_url( '../../images/snaps/sss_horizontal_total_shares.png', __FILE__ ); ?>" />
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<label for="heateor_sss_hmore"><?php _e( "Enable 'More' icon", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_hmore_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_hmore" name="heateor_sss[horizontal_more]" type="checkbox" <?php echo isset( $options['horizontal_more'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_hmore_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'If enabled, "More" icon will be displayed after selected sharing icons which shows additional sharing networks in popup', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<td colspan="2">
							<div>
							<a href="https://www.heateor.com/comparison-between-sassy-social-share-pro-and-premium/" target="_blank"><img src="<?php echo plugins_url( '../../images/unlock/hide-standard-share-bar.png', __FILE__ ) ?>" /></a>
							</div>
							</td>
						</tr>
						</tbody>
					</table>
					</div>
				</div>
				
				</div>
				<?php include 'sassy-social-share-about.php'; ?>
			</div>
			
			<div class="menu_containt_div" id="tabs-3">
				<div class="clear"></div>
				<div class="heateor_sss_left_column">
					<div class="stuffbox">
					<h3><label><?php _e( 'Floating Sharing Interface Options', 'sassy-social-share' );?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tr>
							<th>
							<label for="heateor_sss_vertical_enable"><?php _e("Enable Floating sharing interface", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_vertical_enable_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_vertical_enable" onclick="heateorSssVerticalSharingOptionsToggle(this)" name="heateor_sss[vertical_enable]" type="checkbox" <?php echo isset( $options['vertical_enable'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_vertical_enable_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Master control to enable floating sharing widget', 'sassy-social-share' ) ?>
							<img width="550" src="<?php echo plugins_url( '../../images/snaps/sss_vertical_sharing.png', __FILE__ ); ?>" />
							</div>
							</td>
						</tr>
						
						<tbody id="heateor_sss_vertical_sharing_options" <?php echo isset( $options['vertical_enable'] ) ? '' : 'style="display: none"'; ?>>
						<tr>
							<th>
							<label for="heateor_sss_vertical_target_url"><?php _e("Target Url", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_vertical_target_url_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td id="heateor_sss_vertical_target_url_column">
							<input id="heateor_sss_vertical_target_url_default" name="heateor_sss[vertical_target_url]" type="radio" <?php echo !isset( $options['vertical_target_url'] ) || $options['vertical_target_url'] == 'default' ? 'checked = "checked"' : '';?> value="default" />
							<label for="heateor_sss_vertical_target_url_default"><?php _e( 'Url of the webpage where icons are located (default)', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_vertical_target_url_home" name="heateor_sss[vertical_target_url]" type="radio" <?php echo isset( $options['vertical_target_url'] ) && $options['vertical_target_url'] == 'home' ? 'checked = "checked"' : '';?> value="home" />
							<label for="heateor_sss_vertical_target_url_home"><?php _e( 'Url of the homepage of your website', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_vertical_target_url_custom" name="heateor_sss[vertical_target_url]" type="radio" <?php echo isset( $options['vertical_target_url'] ) && $options['vertical_target_url'] == 'custom' ? 'checked = "checked"' : '';?> value="custom" />
							<label for="heateor_sss_vertical_target_url_custom"><?php _e( 'Custom url', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_vertical_target_url_custom_url" name="heateor_sss[vertical_target_url_custom]" type="text" value="<?php echo isset( $options['vertical_target_url_custom'] ) ? $options['vertical_target_url_custom'] : '' ?>" />
							</td>
						</tr>
						<tr class="heateor_sss_help_content" id="heateor_sss_vertical_target_url_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Url to share', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
						
						<tbody id="heateor_sss_vertical_instagram_options" <?php echo ! in_array( 'instagram', $options['vertical_re_providers'] ) ? 'style = "display: none"' : '';?> >
							<tr>
								<th>
								<label for="heateor_sss_vertical_instagram_username"><?php _e("Instagram username", 'sassy-social-share' ); ?></label>
								<img id="heateor_sss_vertical_instagram_username_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
								</th>
								<td>
								<input id="heateor_sss_vertical_instagram_username" name="heateor_sss[vertical_instagram_username]" type="text" value="<?php echo $instagram_username ?>" />
								</td>
							</tr>
							
							<tr class="heateor_sss_help_content" id="heateor_sss_vertical_instagram_username_help_cont">
								<td colspan="2">
								<div>
								<?php _e( 'Username of the Instagram account you want to redirect users to, on clicking the icon', 'sassy-social-share' ) ?>
								</div>
								</td>
							</tr>
						</tbody>
						<tbody id="heateor_sss_vertical_youtube_options" <?php echo ! in_array( 'youtube', $options['vertical_re_providers'] ) ? 'style = "display: none"' : '';?> >
						<tr>
								<th>
								<label for="heateor_sss_vertical_youtube_username"><?php _e( "Youtube URL", 'sassy-social-share' ); ?></label>
								<img id="heateor_sss_vertical_youtube_username_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
								</th>
								<td>
									

								<input id="heateor_sss_vertical_youtube_username" name="heateor_sss[vertical_youtube_username]" type="text" value="<?php echo $youtube_username ?>" />
								</td>
							</tr>
							
							<tr class="heateor_sss_help_content" id="heateor_sss_vertical_instagram_username_help_cont">
								<td colspan="2">
								<div>
								<?php _e( 'Username of the Instagram account you want to redirect users to, on clicking the icon', 'sassy-social-share' ) ?>
								</div>
								</td>
							</tr>
						</tbody>
						<tbody id="heateor_sss_vertical_comment_options" <?php echo ! in_array( 'Comment', $options['vertical_re_providers'] ) ? 'style = "display: none"' : '';?> >
							<tr>
								<th>
								<label for="heateor_sss_vertical_comment_container_id"><?php _e( "HTML ID of container element of comment form", 'sassy-social-share' ); ?></label>
								<img id="heateor_sss_vertical_comment_container_id_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
								</th>
								<td>
								<input id="heateor_sss_vertical_comment_container_id" name="heateor_sss[vertical_comment_container_id]" type="text" value="<?php echo $commentform_container_id ?>" />
								</td>
							</tr>
							
							<tr class="heateor_sss_help_content" id="heateor_sss_vertical_comment_container_id_help_cont">
								<td colspan="2">
								<div>
								<?php _e( 'HTML ID of the element you want to focus on the webpage, on click of Comment icon.', 'sassy-social-share' ) ?>
								</div>
								</td>
							</tr>
						</tbody>

						<tr>
							<th>
							<label><?php _e( "Rearrange icons", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_vertical_rearrange_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
						</tr>
						
						<tr>
							<td colspan="2">
							<script>
							<?php
							$verticalSharingStyle = 'width:' . ( $options['vertical_sharing_shape'] != 'rectangle' ? $options['vertical_sharing_size'] : $options['vertical_sharing_width'] ) . 'px;height:' . $vertical_line_height . 'px;';
							$verticalDeliciousRadius = '';
							if ( $options['vertical_sharing_shape'] == 'round' ) {
								$verticalSharingStyle .= 'border-radius:999px;';
								$verticalDeliciousRadius = 'border-radius:999px;';
							} elseif ( isset( $options['vertical_border_radius'] ) && $options['vertical_border_radius'] != '' ) {
								$verticalSharingStyle .= 'border-radius:' . $options['vertical_border_radius'] . 'px;';
							}
							?>
							var heateorSssVerticalSharingStyle = '<?php echo $verticalSharingStyle ?>', heateorSssVerticalDeliciousRadius = '<?php echo $verticalDeliciousRadius ?>';
							</script>
							<style type="text/css">
							<?php if ( $options['vertical_bg_color_default'] != '' ) {?>
								ul#heateor_sss_vertical_rearrange  i.heateorSssInstagramBackground{background:<?php echo $vertical_bg ?>!important;}
							<?php }
							if ( $options['vertical_bg_color_hover'] != '' ) { ?>
								ul#heateor_sss_vertical_rearrange i.heateorSssInstagramBackground:hover{background:<?php echo $vertical_bg_hover ?>!important;}
							<?php } ?>
							.heateorSssVerticalSharingBackground{
								<?php if ( $vertical_bg ) { ?>
								background-color: <?php echo $vertical_bg ?>;
								<?php }if ( $vertical_border_width) { ?>
								border-width: <?php echo $vertical_border_width ?>px;
								border-style: solid;
								<?php } ?>
								border-color: <?php echo $vertical_border_color ? $vertical_border_color : 'transparent'; ?>;
							}
							.heateorSssVerticalSharingBackground:hover{
								<?php if ( $vertical_bg_hover ) { ?>
								background-color: <?php echo $vertical_bg_hover ?>;
								<?php } if ( $vertical_border_width_hover ) { ?>
								border-width: <?php echo $vertical_border_width_hover ?>px;
								border-style: solid;
								<?php } ?>
								border-color: <?php echo $vertical_border_color_hover ? $vertical_border_color_hover : 'transparent'; ?>;
							}
							</style>
							<ul id="heateor_sss_vertical_rearrange">
								<?php
								if ( isset( $options['vertical_re_providers'] ) ) {
									foreach ( $options['vertical_re_providers'] as $rearrange ) {
										?>
										<li title="<?php echo ucfirst( str_replace( '_', ' ', $rearrange ) ) ?>" id="heateor_sss_re_vertical_<?php echo str_replace( array( ' ', '.' ), '_', $rearrange ) ?>" >
										<i style="display:block;<?php echo $verticalSharingStyle ?>" class="<?php echo in_array( $rearrange, $like_buttons ) ? '' : 'heateorSssVerticalSharingBackground' ?> heateorSss<?php echo ucfirst( str_replace( array( '_', '.', ' ' ), '', $rearrange ) ) ?>Background"><div class="heateorSssSharingSvg heateorSss<?php echo ucfirst( str_replace( array( '_', '.', ' ' ), '', $rearrange ) ) ?>Svg" style="<?php echo $verticalDeliciousRadius ?>"></div></i>
										<input type="hidden" name="heateor_sss[vertical_re_providers][]" value="<?php echo $rearrange ?>">
										</li>
										<?php
									}
								}
								?>
							</ul>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_vertical_rearrange_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Drag the icons to rearrange in desired order', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<th colspan="2">
							<label><?php _e("Select Sharing Services", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_vertical_providers_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
						</tr>

						<tr class="heateor_sss_help_content" id="heateor_sss_vertical_providers_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Select sharing services to show in social share bar', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<td colspan="2" class="selectSharingNetworks">
							<?php
							foreach( $like_buttons as $like_button ) {
								?>
								<div class="heateorSssVerticalSharingProviderContainer">
								<input id="heateor_sss_vertical_<?php echo $like_button ?>" type="checkbox" <?php echo isset( $options['vertical_re_providers'] ) && in_array( $like_button, $options['vertical_re_providers'] ) ? 'checked = "checked"' : '';?> value="<?php echo $like_button ?>" />
								<label for="heateor_sss_vertical_<?php echo $like_button ?>"><img src="<?php echo plugins_url( '../../images/sharing/'. $like_button .'.png', __FILE__ ) ?>" /></label>
								</div>
								<?php
							}
							?>
							<div style="clear:both"></div>
							<div style="width:100%; margin: 10px 0"><input type="text" onkeyup="heateorSssSearchSharingNetworks(this.value.trim())" placeholder="<?php _e( 'Search social network', 'sassy-social-share' ) ?>" class="search" /></div>
							<div style="clear:both"></div>
							<?php
							foreach( $sharing_networks as $sharing_network) {
								?>
								<div class="heateorSssVerticalSharingProviderContainer">
								<input id="heateor_sss_vertical_sharing_<?php echo $sharing_network ?>" type="checkbox" <?php echo isset( $options['vertical_re_providers'] ) && in_array( $sharing_network, $options['vertical_re_providers'] ) ? 'checked = "checked"' : '';?> value="<?php echo $sharing_network ?>" />
								<label for="heateor_sss_vertical_sharing_<?php echo $sharing_network ?>"><i style="display:block;width:18px;height:18px;" class="heateorSssSharing heateorSss<?php echo str_replace(array( '_', '.', ' ' ), '', ucfirst( $sharing_network) ) ?>Background"><ss style="display:block;" class="heateorSssSharingSvg heateorSss<?php echo str_replace(array( '_', '.', ' ' ), '', ucfirst( $sharing_network) ) ?>Svg"></ss></i></label>
								<label class="lblSocialNetwork" for="heateor_sss_vertical_sharing_<?php echo $sharing_network ?>"><?php echo str_replace( '_', ' ', ucfirst( $sharing_network) ) ?></label>
								</div>
								<?php
							}
							?>
							</td>
						</tr>
						
						<tr>
							<th>
							<label><?php _e("Background Color", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_vertical_bg_color_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input style="width: 100px" name="heateor_sss[vertical_bg]" type="text" value="<?php echo isset( $options['vertical_bg'] ) ? $options['vertical_bg'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_vertical_bg_color_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Specify the color or hex code (example #cc78e0) for the background of vertical sharing bar. Leave empty for transparent. You can get the hex code of the required color from <a href="http://www.colorpicker.com/" target="_blank">this link</a>', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<label for="heateor_sss_alignment"><?php _e("Horizontal alignment", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_alignment_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<select onchange="heateorSssToggleOffset(this.value)" id="heateor_sss_alignment" name="heateor_sss[alignment]">
								<option value="left" <?php echo isset( $options['alignment'] ) && $options['alignment'] == 'left' ? 'selected="selected"' : '' ?>><?php _e( 'Left', 'sassy-social-share' ) ?></option>
								<option value="right" <?php echo isset( $options['alignment'] ) && $options['alignment'] == 'right' ? 'selected="selected"' : '' ?>><?php _e( 'Right', 'sassy-social-share' ) ?></option>
							</select>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_alignment_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Horizontal alignment of the sharing interface', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
						
						<tbody id="heateor_sss_left_offset_rows" <?php echo ( isset( $options['alignment'] ) && $options['alignment'] == 'left' ) ? '' : 'style="display: none"' ?>>
						<tr>
							<th>
							<label for="heateor_sss_left_offset"><?php _e("Left offset", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_left_offset_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input style="width: 100px" id="heateor_sss_left_offset" name="heateor_sss[left_offset]" type="text" value="<?php echo isset( $options['left_offset'] ) ? $options['left_offset'] : '' ?>" />px
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_left_offset_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Specify a number. Increase in number will shift sharing interface towards right and decrease will shift it towards left. Number can be negative too.', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
						</tbody>
						
						<tbody id="heateor_sss_right_offset_rows" <?php echo ( isset( $options['alignment'] ) && $options['alignment'] == 'right' ) ? '' : 'style="display: none"' ?>>
						<tr>
							<th>
							<label for="heateor_sss_right_offset"><?php _e("Right offset", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_right_offset_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input style="width: 100px" id="heateor_sss_right_offset" name="heateor_sss[right_offset]" type="text" value="<?php echo isset( $options['right_offset'] ) ? $options['right_offset'] : '' ?>" />px
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_right_offset_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Specify a number. Increase in number will shift sharing interface towards left and decrease will shift it towards right. Number can be negative too.', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
						</tbody>
						
						<tr>
							<th>
							<label for="heateor_sss_top_offset"><?php _e("Top offset", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_top_offset_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input style="width: 100px" id="heateor_sss_top_offset" name="heateor_sss[top_offset]" type="text" value="<?php echo isset( $options['top_offset'] ) ? $options['top_offset'] : '' ?>" />px
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_top_offset_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Specify a number. Increase in number will shift sharing interface towards bottom and decrease will shift it towards top.', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<label><?php _e("Placement", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_vertical_location_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_vertical_home" name="heateor_sss[vertical_home]" type="checkbox" <?php echo isset( $options['vertical_home'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_vertical_home"><?php _e( 'Homepage', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_vertical_post" name="heateor_sss[vertical_post]" type="checkbox" <?php echo isset( $options['vertical_post'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_vertical_post"><?php _e( 'Posts', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_vertical_page" name="heateor_sss[vertical_page]" type="checkbox" <?php echo isset( $options['vertical_page'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_vertical_page"><?php _e( 'Pages', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_vertical_excerpt" name="heateor_sss[vertical_excerpt]" type="checkbox" <?php echo isset( $options['vertical_excerpt'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_vertical_excerpt"><?php _e( 'Excerpts and Posts page', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_vertical_category" name="heateor_sss[vertical_category]" type="checkbox" <?php echo isset( $options['vertical_category'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_vertical_category"><?php _e( 'Category Archives', 'sassy-social-share' ) ?></label><br/>
							<input id="heateor_sss_vertical_archive" name="heateor_sss[vertical_archive]" type="checkbox" <?php echo isset( $options['vertical_archive'] ) ? 'checked = "checked"' : '';?> value="1" />
							<label for="heateor_sss_vertical_archive"><?php _e( 'Archive Pages (Category, Tag, Author or Date based pages)', 'sassy-social-share' ) ?></label><br/>
							<?php
							if ( count( $post_types ) ) {
								foreach ( $post_types as $post_type ) {
									?>
									<input id="heateor_sss_vertical_<?php echo $post_type ?>" name="heateor_sss[vertical_<?php echo $post_type ?>]" type="checkbox" <?php echo isset( $options['vertical_' . $post_type] ) ? 'checked = "checked"' : '';?> value="1" />
									<label for="heateor_sss_vertical_<?php echo $post_type ?>"><?php echo ucfirst( $post_type ) . 's'; ?></label><br/>
									<?php
								}
							}

							if ( $this->is_bp_active) {
								?>
								<input id="heateor_sss_vertical_bp_group" name="heateor_sss[vertical_bp_group]" type="checkbox" <?php echo isset( $options['vertical_bp_group'] ) ? 'checked = "checked"' : '';?> value="1" />
								<label for="heateor_sss_vertical_bp_group"><?php _e( 'BuddyPress group', 'sassy-social-share' ) ?></label><br/>
								<?php
							}

							if (function_exists( 'is_bbpress' ) ) {
								?>
								<br/>
								<input id="heateor_sss_vertical_bb_forum" name="heateor_sss[vertical_bb_forum]" type="checkbox" <?php echo isset( $options['vertical_bb_forum'] ) ? 'checked = "checked"' : '';?> value="1" />
								<label for="heateor_sss_vertical_bb_forum"><?php _e( 'BBPress forum', 'sassy-social-share' ) ?></label>
								<br/>
								<input id="heateor_sss_vertical_bb_topic" name="heateor_sss[vertical_bb_topic]" type="checkbox" <?php echo isset( $options['vertical_bb_topic'] ) ? 'checked = "checked"' : '';?> value="1" />
								<label for="heateor_sss_vertical_bb_topic"><?php _e( 'BBPress topic', 'sassy-social-share' ) ?></label>
								<?php
							}
							?>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_vertical_location_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Specify the pages where you want to enable vertical Sharing interface', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tbody class="heateor_sss_fb_share_count_msg" <?php echo ! ( ( ( in_array( 'facebook', $options['vertical_re_providers'] ) && ( isset( $options['vertical_counts'] ) || isset( $options['vertical_total_shares'] ) ) ) || ( in_array( 'facebook', $options['horizontal_re_providers'] ) && ( isset( $options['horizontal_counts'] ) || isset( $options['horizontal_total_shares'] ) ) ) ) && ! $options['fb_key'] && ! $options['fb_secret'] ) ? 'style = "display: none"' : '';?>>
							<tr>
								<td colspan="2">
								<div style="color:green">
								<?php _e( 'Save Facebook App Id and Secret in the "Miscellaneous" section to track Facebook shares', 'sassy-social-share' ) ?>
								</div>
								</td>
							</tr>
						</tbody>

						<tr>
							<th>
							<label for="heateor_sss_vertical_counts"><?php _e( "Show share counts", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_vertical_count_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_vertical_counts" name="heateor_sss[vertical_counts]" type="checkbox" <?php echo isset( $options['vertical_counts'] ) ? 'checked = "checked"' : '';?> value="1" onclick="if(this.checked){heateorSssVerticalShares = true;}else{heateorSssVerticalShares = false;} heateor_sss_toggle_fb_share_count_options()" />
							<br/>
							<span class="heateor_sss_help_content" style="display:block"><?php _e( 'Share counts are supported for Facebook, Twitter, Linkedin, Buffer, Reddit, Pinterest, Odnoklassniki, Fintel and Vkontakte', 'sassy-social-share' ) ?></span>
							<span class="heateor_sss_help_content" style="display:block"><strong><?php echo sprintf( __( 'To show Twitter share count, you have to click "Give me my Twitter counts back" button at <a href="%s" target="_blank">TwitCount.com</a> and register your website %s with them. No need to copy-paste any code from their website.', 'sassy-social-share' ), 'http://twitcount.com', home_url() ) ?></strong></span>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_vertical_count_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'If enabled, share counts are displayed above sharing icons.', 'sassy-social-share' ) ?>
							<img width="550" src="<?php echo plugins_url( '../../images/snaps/sss_vertical_sharing_count.png', __FILE__ ); ?>" />
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<label for="heateor_sss_total_vertical_shares"><?php _e( "Show total shares", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_total_vertical_shares_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_total_vertical_shares" name="heateor_sss[vertical_total_shares]" type="checkbox" onclick="if(this.checked){heateorSssVerticalTotalShares = true;}else{heateorSssVerticalTotalShares = false;} heateor_sss_toggle_fb_share_count_options()" <?php echo isset( $options['vertical_total_shares'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_total_vertical_shares_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'If enabled, total shares will be displayed with sharing icons', 'sassy-social-share' ) ?>
							<img width="550" src="<?php echo plugins_url( '../../images/snaps/sss_vertical_total_shares.png', __FILE__ ); ?>" />
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<label for="heateor_sss_vmore"><?php _e("Enable 'More' icon", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_vmore_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_vmore" name="heateor_sss[vertical_more]" type="checkbox" <?php echo isset( $options['vertical_more'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_vmore_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'If enabled, "More" icon will be displayed after selected sharing icons which shows additional sharing networks in popup', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<label for="heateor_sss_hslider"><?php _e( "Hide floating slider", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_hslider_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_hslider" name="heateor_sss[hide_slider]" type="checkbox" <?php echo isset( $options['hide_slider'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_hslider_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Hides the slider arrow present below the floating share bar', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<img id="heateor_sss_mobile_sharing_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							<label for="heateor_sss_mobile_sharing"><?php _e("Vertical floating bar responsiveness", 'sassy-social-share' ); ?></label>
							</th>
							<td>
							<input id="heateor_sss_mobile_sharing" name="heateor_sss[hide_mobile_sharing]" type="checkbox" <?php echo isset( $options['hide_mobile_sharing'] ) ? 'checked = "checked"' : '';?> value="1" /><label><?php echo sprintf( __( 'Display vertical interface only when screen is wider than %s pixels', 'sassy-social-share' ), '<input style="width:46px" name="heateor_sss[vertical_screen_width]" type="text" value="' . ( isset( $options['vertical_screen_width'] ) ? $options['vertical_screen_width'] : '' ) . '" />' ) ?></label>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_mobile_sharing_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Display vertical interface only when screen is wider than the width specified.', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<label for="heateor_sss_mobile_sharing_bottom"><?php _e("Horizontal floating bar responsiveness", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_mobile_sharing_bottom_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_mobile_sharing_bottom" name="heateor_sss[bottom_mobile_sharing]" type="checkbox" <?php echo isset( $options['bottom_mobile_sharing'] ) ? 'checked = "checked"' : '';?> value="1" /><label><?php echo sprintf( __( 'Stick vertical floating interface horizontally at bottom only when screen is narrower than %s pixels', 'sassy-social-share' ), '<input style="width:46px" name="heateor_sss[horizontal_screen_width]" type="text" value="' . ( isset( $options['horizontal_screen_width'] ) ? $options['horizontal_screen_width'] : '' ) . '" />' ) ?></label>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_mobile_sharing_bottom_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Stick vertical floating interface horizontally at bottom only when screen is narrower than the width specified', 'sassy-social-share' ) ?>
							<img src="<?php echo plugins_url( '../../images/snaps/sss_mobile_sharing.png', __FILE__ ); ?>" />
							</div>
							</td>
						</tr>

						<tbody id="heateor_sss_bottom_sharing_options" <?php echo isset( $options['bottom_mobile_sharing'] ) ? '' : 'style="display: none"'; ?>>
							<tr>
								<th>
								<label for="heateor_sss_mobile_sharing_position"><?php _e("Horizontal floating bar position", 'sassy-social-share' ); ?></label>
								<img id="heateor_sss_mobile_sharing_position_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
								</th>
								<td>
								<input type="radio" id="bottom_sharing_position_radio_nonresponsive" <?php echo $options['bottom_sharing_position_radio'] == 'nonresponsive' ? 'checked' : ''; ?> name="heateor_sss[bottom_sharing_position_radio]" value="nonresponsive" /><label for="bottom_sharing_position_radio_nonresponsive"><?php echo sprintf( __( '%s pixels from %s', 'sassy-social-share' ), '<input id="heateor_sss_mobile_sharing_position" style="width:46px" name="heateor_sss[bottom_sharing_position]" type="text" value="' . ( isset( $options['bottom_sharing_position'] ) ? $options['bottom_sharing_position'] : '' ) . '" />', '<select style="width:63px" name="heateor_sss[bottom_sharing_alignment]"><option value="right" ' . ( ! isset( $options['bottom_sharing_alignment'] ) || $options['bottom_sharing_alignment'] == 'right' ? 'selected' : '' ) . '>right</option><option value="left" ' . ( isset( $options['bottom_sharing_alignment'] ) && $options['bottom_sharing_alignment'] == 'left' ? 'selected' : '' ) . '>left</option></select>' ) ?></label><br/>
								<input type="radio" id="bottom_sharing_position_radio_responsive" <?php echo $options['bottom_sharing_position_radio'] == 'responsive' ? 'checked' : ''; ?> name="heateor_sss[bottom_sharing_position_radio]" value="responsive" /><label for="bottom_sharing_position_radio_responsive"><?php _e( 'Auto-adjust according to screen width (responsive)', 'sassy-social-share' ); ?></label>
								</td>
							</tr>
							
							<tr class="heateor_sss_help_content" id="heateor_sss_mobile_sharing_position_help_cont">
								<td colspan="2">
								<div>
								<?php _e( 'Alignment of horizontal floating interface. Number can be negative too.', 'sassy-social-share' ) ?>
								</div>
								</td>
							</tr>
						</tbody>


						</tbody>
					</table>
					</div>
				</div>
				</div>
				<?php include 'sassy-social-share-about.php'; ?>
			</div>

			<div class="menu_containt_div" id="tabs-4">
				<div class="clear"></div>
				<div class="heateor_sss_left_column">

				<div class="stuffbox" id="heateor_sss_fb_share_count_options" <?php echo ! ( in_array( 'facebook', $options['vertical_re_providers'] ) || in_array( 'facebook', $options['horizontal_re_providers'] ) ) ? 'style = "display: none"' : '';?>>
					<h3><label><?php _e( 'Facebook Share Count', 'sassy-social-share' ) ?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tbody>
							<tr>
								<td colspan="2"><strong><?php _e( 'Note', 'sassy-social-share' ) ?>:</strong> <?php _e( 'Required only to track Facebook share count', 'sassy-social-share' ) ?></td>
							</tr>
							<tr>
								<th>
								<label for="heateor_sss_fb_key"><?php _e( "Facebook App ID", 'sassy-social-share' ); ?></label>
								<img id="heateor_sss_fb_key_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
								</th>
								<td>
								<input id="heateor_sss_fb_key" name="heateor_sss[fb_key]" type="text" value="<?php echo $options['fb_key'] ?>" />
								</td>
							</tr>
							
							<tr class="heateor_sss_help_content" id="heateor_sss_fb_key_help_cont">
								<td colspan="2">
								<div>
								<?php echo sprintf( __( 'Required to track Facebook shares. Please follow the documentation at <a href="%s" target="_blank">this link</a> to get Facebook App ID', 'sassy-social-share' ), 'http://support.heateor.com/how-to-get-facebook-app-id/' ) ?>
								</div>
								</td>
							</tr>

							<tr>
								<th>
								<label for="heateor_sss_fblogin_secret"><?php _e( "Facebook App Secret", 'sassy-social-share' ); ?></label>
								<img id="heateor_sss_fb_secret_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
								</th>
								<td>
								<input id="heateor_sss_fblogin_secret" name="heateor_sss[fb_secret]" type="text" value="<?php echo $options['fb_secret'] ?>" />
								</td>
							</tr>
							
							<tr class="heateor_sss_help_content" id="heateor_sss_fb_secret_help_cont">
								<td colspan="2">
								<div>
								<?php echo sprintf( __( 'Required to track Facebook shares. Please follow the documentation at <a href="%s" target="_blank">this link</a> to get Facebook App Secret', 'sassy-social-share' ), 'http://support.heateor.com/how-to-get-facebook-app-id/' ) ?>
								</div>
								</td>
							</tr>
						</tbody>
					</table>
					</div>
				</div>

				<div class="stuffbox">
					<h3><label><?php _e( 'Miscellaneous', 'sassy-social-share' ) ?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tr>
							<th>
							<label for="heateor_sss_insta_bg"><?php _e( "Use plain background for Instagram icon", 'sassy-social-share' ) ?></label>
							<img id="heateor_sss_insta_bg_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_insta_bg" name="heateor_sss[plain_instagram_bg]" type="checkbox" <?php echo isset( $options['plain_instagram_bg'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>

						<tr class="heateor_sss_help_content" id="heateor_sss_insta_bg_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Uses plain background for Instagram icon instead of multicolored background', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<label for="heateor_sss_footer_script"><?php _e( "Load Javascript files in footer", 'sassy-social-share' ) ?></label>
							<img id="heateor_sss_footer_script_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_footer_script" name="heateor_sss[footer_script]" type="checkbox" <?php echo isset( $options['footer_script'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>

						<tr class="heateor_sss_help_content" id="heateor_sss_footer_script_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'If enabled (recommended), Javascript files will be included in the footer of your website', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<label for="heateor_sss_js_when_needed"><?php _e( "Load Javascript only when needed", 'sassy-social-share' ) ?></label>
							<img id="heateor_sss_js_when_needed_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_js_when_needed" name="heateor_sss[js_when_needed]" type="checkbox" <?php echo isset( $options['js_when_needed'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>

						<tr class="heateor_sss_help_content" id="heateor_sss_js_when_needed_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Javascript file will be loaded only at the webpages where share icons have been integrated', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<label for="heateor_sss_delete_options"><?php _e("Delete all the options on plugin deletion", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_delete_options_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_delete_options" name="heateor_sss[delete_options]" type="checkbox" <?php echo isset( $options['delete_options'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_delete_options_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'If enabled, plugin options will get deleted when plugin is deleted/uninstalled and you will need to reconfigure the options when you install the plugin next time.', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
					</table>
					</div>
				</div>

				<div class="stuffbox">
					<h3><label><?php _e( 'Share Count Cache', 'sassy-social-share' ) ?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tr>
							<th>
							<label for="heateor_sss_share_count_cache"><?php _e( "Refresh Share Count cache every", 'sassy-social-share' ) ?></label>
							<img id="heateor_sss_share_count_cache_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input style="width: 50px;" id="heateor_sss_share_count_cache" name="heateor_sss[share_count_cache_refresh_count]" type="text" value="<?php echo $options['share_count_cache_refresh_count']; ?>" />
							<select name="heateor_sss[share_count_cache_refresh_unit]">
								<option value="seconds" <?php echo $options['share_count_cache_refresh_unit'] == 'seconds' ? 'selected' : ''; ?>>Second(s)</option>
								<option value="minutes" <?php echo $options['share_count_cache_refresh_unit'] == 'minutes' ? 'selected' : ''; ?>>Minute(s)</option>
								<option value="hours" <?php echo $options['share_count_cache_refresh_unit'] == 'hours' ? 'selected' : ''; ?>>Hour(s)</option>
								<option value="days" <?php echo $options['share_count_cache_refresh_unit'] == 'days' ? 'selected' : ''; ?>>Day(s)</option>
							</select>
							</td>
						</tr>

						<tr class="heateor_sss_help_content" id="heateor_sss_share_count_cache_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf( __( 'Frequent cache refreshing results in slower loading of pages with share counts enabled. Leave empty to disable cache. More info <a href="%s" target="_blank">here</a>', 'sassy-social-share' ), 'http://support.heateor.com/why-is-share-count-not-getting-updated' ); ?>
							</div>
							</td>
						</tr>

						<tr>
							<th style="width:215px">
							<input type="button" class="button-primary" value="<?php _e( 'Clear Share Counts Cache', 'sassy-social-share' ) ?>" onclick="heateorSssClearShareCountCache()" />
							<img id="heateor_sss_clear_share_count_cache_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<img src="<?php echo plugins_url( '../../images/ajax_loader.gif', __FILE__ ) ?>" id="share_count_cache_loading" style="display:none" />
							<div id="heateor_sss_share_count_cache_clear_message" style="color:green;display:none;"><?php _e( 'Share Counts cache cleared successfully.', 'sassy-social-share' ); ?></div>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_clear_share_count_cache_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Use this to clear cached share counts', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
					</table>
					</div>
				</div>

				<div class="stuffbox">
					<h3><label><?php _e( 'Url shortener', 'sassy-social-share' );?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tr>
							<th>
							<label for="heateor_sss_surl_enable"><?php _e("Use shortlinks already installed", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_surl_enable_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_surl_enable" name="heateor_sss[use_shortlinks]" type="checkbox" <?php echo isset( $options['use_shortlinks'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_surl_enable_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Use default short url permalinks without the need for any additional plugin', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<label for="heateor_sss_bitly_enable"><?php _e("Enable bit.ly url shortener for sharing", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_bitly_enable_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_bitly_enable" name="heateor_sss[bitly_enable]" type="checkbox" <?php echo isset( $options['bitly_enable'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						
						<tr class="heateor_sss_help_content" id="heateor_sss_bitly_enable_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Master control to enable bit.ly url shortening for sharing', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<label for="heateor_sss_bitly_access_token"><?php _e( "Bit.ly Generic Access Token", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_bitly_access_token_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_bitly_access_token" name="heateor_sss[bitly_access_token]" type="text" value="<?php echo isset( $options['bitly_access_token'] ) ? $options['bitly_access_token'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_bitly_access_token_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf( __( 'Login to your bit.ly account and navigate to <strong>Profile Settings > Generic Access Token</strong> (top-right corner) and authenticate to generate access token. More details at the <a href="%s" target="_blank">link</a>', 'sassy-social-share' ), 'https://support.sendible.com/hc/en-us/articles/360021876751-How-To-Access-Your-Bit-ly-Key' ) ?>
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<input type="button" class="button-primary" value="<?php _e( 'Clear Bitly Cache', 'sassy-social-share' ) ?>" onclick="heateorSssClearShorturlCache()" />
							<img id="heateor_sss_clear_shorturl_cache_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<img src="<?php echo plugins_url( '../../images/ajax_loader.gif', __FILE__ ) ?>" id="shorturl_cache_loading" style="display:none" />
							<div id="heateor_sss_cache_clear_message" style="color:green;display:none;"><?php _e( 'ShortUrl cache cleared successfully.', 'sassy-social-share' ); ?></div>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_clear_shorturl_cache_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Use this to delete short urls saved in database. Handy, if urls of your website have been changed but short urls are still being generated for old urls.', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
					</table>
					</div>
				</div>
				
				<div class="stuffbox">
					<h3><label><?php _e( 'Language', 'sassy-social-share' );?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tr>
							<th>
							<label for="heateor_sss_sc_language"><?php _e("Language", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_sc_language_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_sc_language" name="heateor_sss[language]" type="text" value="<?php echo $options['language'] ? $options['language'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_sc_language_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf(__( 'Enter the code of the language you want to use for like buttons. You can find the language codes at <a href="%s" target="_blank">this link</a>. Leave it empty for default language(English)', 'sassy-social-share' ), 'http://fbdevwiki.com/wiki/Locales#Complete_List_.28as_of_2012-06-10.29' ) ?>
							</div>
							</td>
						</tr>
					</table>
					</div>
				</div>

				<div class="stuffbox">
					<h3><label><?php _e( 'Username in sharing', 'sassy-social-share' );?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tr>
							<th>
							<label for="heateor_sss_twitter_username"><?php _e("Twitter username (without @)", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_twitter_username_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_twitter_username" name="heateor_sss[twitter_username]" type="text" value="<?php echo isset( $options['twitter_username'] ) ? $options['twitter_username'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_twitter_username_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Provided username will be appended after the content being shared as "via @USERNAME". Leave empty if you do not want any username in the content being shared.', 'sassy-social-share' ) ?>
							<br/><img width="550" src="<?php echo plugins_url( '../../images/snaps/sss_twitter_username.png', __FILE__ ); ?>" />
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<label for="heateor_sss_buffer_username"><?php _e("Buffer username (without @)", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_buffer_username_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_buffer_username" name="heateor_sss[buffer_username]" type="text" value="<?php echo isset( $options['buffer_username'] ) ? $options['buffer_username'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_buffer_username_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Provided username will be appended after the content being shared as "via @USERNAME". Leave empty if you do not want any username in the content being shared.', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
					</table>
					</div>
				</div>

				<div class="stuffbox">
					<h3><label><?php _e( 'AMP', 'sassy-social-share' );?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tr>
							<th>
							<label for="heateor_sss_amp_enable"><?php _e("Enable sharing on AMP pages", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_amp_enable_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<input id="heateor_sss_amp_enable" name="heateor_sss[amp_enable]" type="checkbox" <?php echo isset( $options['amp_enable'] ) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_amp_enable_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'Enable this option to render sharing icons on AMP pages', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
					</table>
					</div>
				</div>

				<div class="stuffbox">
					<h3><label><?php _e( 'Custom CSS', 'sassy-social-share' );?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tr>
							<th>
							<label for="heateor_sss_custom_css"><?php _e("Custom CSS", 'sassy-social-share' ); ?></label>
							<img id="heateor_sss_custom_css_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
							</th>
							<td>
							<textarea rows="7" cols="63" id="heateor_sss_custom_css" name="heateor_sss[custom_css]"><?php echo isset( $options['custom_css'] ) ? $options['custom_css'] : '' ?></textarea>
							</td>
						</tr>
						
						<tr class="heateor_sss_help_content" id="heateor_sss_custom_css_help_cont">
							<td colspan="2">
							<div>
							<?php _e( 'You can specify any additional CSS rules (without &lt;style&gt; tag)', 'sassy-social-share' ) ?>
							</div>
							</td>
						</tr>
					</table>
					</div>
				</div>

				<div>
					<a href="https://www.heateor.com/comparison-between-sassy-social-share-pro-and-premium/" target="_blank"><img src="<?php echo plugins_url( '../../images/unlock/custom-icon-url.png', __FILE__ ) ?>" /></a>
				</div>
							
				</div>
				<?php include 'sassy-social-share-about.php'; ?>
			</div>

			<?php
			if ( $this->is_plugin_active( 'mycred/mycred.php' ) ) {
				?>
				<div class="menu_containt_div" id="tabs-5">
					<div class="clear"></div>
					<div class="heateor_sss_left_column">
					<div class="stuffbox">
						<h3><label><?php _e( 'myCRED', 'sassy-social-share' );?></label></h3>
						<div class="inside">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
							<tr>
								<th>
								<label for="heateor_sss_mycred_referral_id"><?php _e( "Append myCRED referral ID to the urls being shared", 'sassy-social-share' ); ?></label>
								<img id="heateor_sss_mycred_referral_id_help" class="heateor_sss_help_bubble" src="<?php echo plugins_url( '../../images/info.png', __FILE__ ) ?>" />
								</th>
								<td>
								<input id="heateor_sss_mycred_referral_id" name="heateor_sss[mycred_referral]" type="checkbox" <?php echo isset( $options['mycred_referral'] ) ? 'checked = "checked"' : '';?> value="1" />
								</td>
							</tr>
						</table>
						</div>
					</div>
					</div>
					<?php include 'sassy-social-share-about.php'; ?>
				</div>
				<?php
			}
			?>

			<div class="menu_containt_div" id="tabs-6">
				<div class="clear"></div>
				<div class="heateor_sss_left_column">
				<div class="stuffbox">
					<h3><label><?php _e( 'Shortcode & Widget', 'sassy-social-share' );?></label></h3>
					<div class="inside" style="padding-left:7px">
						<p><a style="text-decoration:none" href="http://support.heateor.com/sassy-social-share-shortcode-and-widget" target="_blank"><?php _e( 'Social Share Shortcode & Widget', 'sassy-social-share' ) ?></a></p>
						<p><a style="text-decoration:none" href="http://support.heateor.com/sassy-follow-icons-shortcode" target="_blank"><?php _e( 'Follow Icons Shortcode & Widget', 'sassy-social-share' ) ?></a></p>
						<p><a href="https://www.heateor.com/comparison-between-sassy-social-share-pro-and-premium/" target="_blank"><img src="<?php echo plugins_url( '../../images/unlock/click-to-tweet-shortcode.png', __FILE__ ) ?>" /></a></p>
					</div>
				</div>
				</div>
				<?php include 'sassy-social-share-about.php'; ?>
			</div>
			
			<div class="menu_containt_div" id="tabs-7">
				<div class="clear"></div>
				<div class="heateor_sss_left_column">
				<div class="stuffbox">
					<h3><label><?php _e( 'Facebook Sharing Troubleshooter', 'sassy-social-share' );?></label></h3>
					<div class="inside" style="padding-left:1px">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tr>
							<td>
							<?php _e( 'If Facebook sharing is not working fine, click at the following link and enter the problematic url (where Facebook sharing is not working properly) of your website in the text field. Click "Fetch New Scrape Information" button.', 'sassy-social-share' ) ?><br/>
							<a style="text-decoration: none" target="_blank" href="https://developers.facebook.com/tools/debug/">https://developers.facebook.com/tools/debug/</a>
							</td>
						</tr>
					</table>
					</div>
				</div>
				</div>
				<?php include 'sassy-social-share-about.php'; ?>
			</div>
			
			<div class="menu_containt_div" id="tabs-8">
				<div class="clear"></div>
				<div class="heateor_sss_left_column">
				<div class="stuffbox">
					<h3><label><?php _e( 'FAQ', 'sassy-social-share' ) ?></label></h3>
					<div class="inside faq" style="padding-left:8px">
						<p><?php _e( '<strong>Note:</strong> Plugin will not work on local server. You should have an online website for the plugin to function properly.', 'sassy-social-share' ); ?></p>
						<p><a href="http://support.heateor.com/why-is-sharer-not-showing-the-correct-image-title-and-other-meta-tags-content" target="_blank"><?php _e( 'Why is sharer not showing the correct image, title and other content when sharing a webpage?', 'sassy-social-share' ) ?></a></p>
						<a href="javascript:void(0)"><?php _e( 'Why is Facebook share count not working?', 'sassy-social-share' ); ?></a>
						<div><?php _e( 'Save Facebook App Id and Secret in the "Miscellaneous" section to track Facebook shares', 'sassy-social-share' ); ?></div>
						<p><a href="http://support.heateor.com/how-to-customize-the-url-being-shared" target="_blank"><?php _e( 'How to Customize the Url being Shared?', 'sassy-social-share' ) ?></a></p>
						<a href="javascript:void(0)"><?php _e( 'Why is Instagram icon redirecting to Instagram website?', 'sassy-social-share' ); ?></a>
						<div><?php _e( 'Instagram icon is there to send website visitors to the Instagram page of your choice. You can save the desired Instagram handle in "Instagram Username" option in "Standard Interface" and "Floating Interface" sections.', 'sassy-social-share' ); ?></div>
						<p>
						<a href="javascript:void(0)"><?php _e( 'Why are Twitter shares not appearing even after registering at Twitcount.com?', 'sassy-social-share' ); ?></a>
						<div><?php _e( "It takes some time for their service to track the shares made on Twitter from your website. If you still feel it's taking too long you can contact their support directly from their website.", 'sassy-social-share' ); ?></div>
						</p>
						<p><a href="https://www.heateor.com/recover-social-share-counts/" target="_blank"><?php _e('How to restore Social Share counts lost after moving my website to SSL/Https?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/how-to-integrate-google-analytics-with-sharing" target="_blank"><?php _e( 'How to integrate Google Analytics with sharing?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/color-share-icons-not-being-updated" target="_blank"><?php _e( 'Why the color of share icons is not being updated?', 'sassy-social-share' ) ?></a></p>
						<p><a style="text-decoration:none" href="https://www.heateor.com/facebook-comments-moderation" target="_blank"><?php _e( 'How to show recent Facebook Comments from all over the website in a widget?', 'sassy-social-share' ) ?></a></p>
						<p><a style="text-decoration:none" href="http://support.heateor.com/recover-facebook-comments-wordpress-moving-to-https-ssl/" target="_blank"><?php _e( 'How to recover the Facebook Comments lost after moving my website to SSL/Https?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/place-title-social-share-icons-row/" target="_blank"><?php _e( 'How to Place Title and Social Share Icons in the Same Row?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/how-can-i-show-share-counts-of-my-website-rather-than-of-individual-pagepost/" target="_blank"><?php _e( 'How can I show share counts of my website rather than of individual pages/posts?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/how-can-i-disable-social-sharing-on-particular-pagepost/" target="_blank"><?php _e( 'How can I disable sharing on particular page/post?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/how-can-i-specify-minimum-sharing-count-for-sharing-networks/" target="_blank"><?php _e( 'How can I specify minimum sharing count for sharing networks?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/how-to-share-specific-page/" target="_blank"><?php _e( 'How to share specific page?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/how-to-customize-the-look-of-total-share-counts" target="_blank"><?php _e( 'How to customize the look of total share counts?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/how-to-customize-the-look-of-individual-share-counts" target="_blank"><?php _e( 'How to customize the look of individual share counts?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/how-to-show-whatsapp-icon-only-on-mobile-devices" target="_blank"><?php _e( 'How to show Whatsapp icon only on mobile devices?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/how-to-hide-arrow-after-floating-sharing-bar" target="_blank"><?php _e( 'How to hide arrow after floating sharing bar?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/why-is-share-count-not-getting-updated" target="_blank"><?php _e( 'Why is share count not getting updated?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/why-is-there-so-much-space-between-like-buttons" target="_blank"><?php _e( 'Why is there so much space between like buttons?', 'sassy-social-share' ) ?></a></p>
						<p><a href="http://support.heateor.com/why-is-floating-share-like-button-not-appearing-at-homepage" target="_blank"><?php _e( 'Why are floating sharing/like buttons not appearing at homepage?', 'sassy-social-share' ) ?></a></p>
					</div>
				</div>

				</div>
				<?php include 'sassy-social-share-about.php'; ?>
			</div>
			
			<div class="heateor_sss_clear"></div>
			<p class="submit">
				<input style="margin-left:8px" type="submit" name="save" class="button button-primary" value="<?php _e( "Save Changes", 'sassy-social-share' ); ?>" />
			</p>
			<p>
				<?php
				echo sprintf( __( 'You can appreciate the effort put in this free plugin by rating it <a href="%s" target="_blank">here</a>', 'sassy-social-share' ), 'https://wordpress.org/support/view/plugin-reviews/sassy-social-share' );
				?>
			</p>
			</form>

			<div class="stuffbox">
				<h3><label>Instagram Shoutout</label></h3>
				<div class="inside" style="padding-left:7px">
				<p><?php _e( 'If you can send (to hello@heateor.com) how this plugin is helping your business, we would be glad to shoutout on Instagram. You can also send any relevant hashtags and people to mention in the Instagram post.', 'sassy-social-share' ) ?></p>
				</div>
			</div>
		</div>
</div>
