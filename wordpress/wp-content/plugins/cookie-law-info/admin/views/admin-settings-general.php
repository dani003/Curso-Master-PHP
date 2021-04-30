<?php
// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}
?>
<div class="cookie-law-info-tab-content" data-id="<?php echo $target_id; ?>">
	<ul class="cli_sub_tab">
		<li style="border-left:none; padding-left: 0px;" data-target="cookie-bar"><a><?php _e('General', 'cookie-law-info'); ?></a></li>
		<li data-target="other"><a><?php _e('Other', 'cookie-law-info'); ?></a></li>
	</ul>
	<div class="cli_sub_tab_container">
		<div class="cli_sub_tab_content" data-id="cookie-bar" style="display:block;">
			<div class="wt-cli-section wt-cli-section-general-settings">
				<table class="form-table">
					<tr valign="top">
						<th scope="row"><label for="is_on_field"><?php _e('Enable cookie bar', 'cookie-law-info'); ?></label></th>
						<td>
							<input type="radio" id="is_on_field_yes" name="is_on_field" class="styled cli_bar_on" value="true" <?php echo ($the_options['is_on'] == true) ? ' checked="checked"' : ''; ?> /><?php _e('On', 'cookie-law-info'); ?>
							<input type="radio" id="is_on_field_no" name="is_on_field" class="styled" value="false" <?php echo ($the_options['is_on'] == false) ? ' checked="checked" ' : ''; ?> /><?php _e('Off', 'cookie-law-info'); ?>
						</td>
					</tr>
					<?php do_action('wt_cli_before_cookie_message'); ?>
				</table>
			</div>
			<div class="wt-cli-section wt-cli-section-gdpr-ccpa">
					<div class="wt-cli-section-inner wt-cli-section-inner-gdpr">
					</div>
					<div class="wt-cli-section-inner wt-cli-section-inner-ccpa">
						<?php do_action('wt_cli_ccpa_settings'); ?>
					</div>
				</div>
			<table class="form-table">
				<!-- SHOW ONCE / TIMER -->
				<tr valign="top">
					<th scope="row"><label for="show_once_yn_field"><?php _e('Auto-hide(Accept) cookie bar after delay?', 'cookie-law-info'); ?></label></th>
					<td>
						<input type="radio" id="show_once_yn_yes" name="show_once_yn_field" class="styled cli_form_toggle" cli_frm_tgl-target="cli_bar_autohide" value="true" <?php echo ($the_options['show_once_yn'] == true) ? ' checked="checked"' : ''; ?> /> <?php _e('Yes', 'cookie-law-info'); ?>
						<input type="radio" id="show_once_yn_no" name="show_once_yn_field" class="styled cli_form_toggle" cli_frm_tgl-target="cli_bar_autohide" value="false" <?php echo ($the_options['show_once_yn'] == false) ? ' checked="checked"' : ''; ?> /> <?php _e('No', 'cookie-law-info'); ?>
					</td>
				</tr>
				<tr valign="top" cli_frm_tgl-id="cli_bar_autohide" cli_frm_tgl-val="true">
					<th scope="row"><label for="show_once_field"><?php _e('Milliseconds until hidden', 'cookie-law-info'); ?></label></th>
					<td>
						<input type="text" name="show_once_field" value="<?php echo $the_options['show_once'] ?>" />
						<span class="cli_form_help"><?php _e('Specify milliseconds (not seconds)', 'cookie-law-info'); ?> e.g. 8000 = 8 <?php _e('seconds', 'cookie-law-info'); ?></span>
					</td>
				</tr>

				<!-- NEW: CLOSE ON SCROLL -->
				<tr valign="top">
					<th scope="row"><label for="scroll_close_field"><?php _e('Auto-hide cookie bar if the user scrolls ( Accept on Scroll )?', 'cookie-law-info'); ?></label></th>
					<td>
						<input type="radio" id="scroll_close_yes" name="scroll_close_field" class="styled" value="true" <?php echo ($the_options['scroll_close'] == true) ? ' checked="checked"' : ''; ?> /> <?php _e('Yes', 'cookie-law-info'); ?>
						<input type="radio" id="scroll_close_no" name="scroll_close_field" class="styled" value="false" <?php echo ($the_options['scroll_close'] == false) ? ' checked="checked"' : ''; ?> /> <?php _e('No', 'cookie-law-info'); ?>
						<span class="cli_form_help" style="margin-top:8px;"><?php _e('As per latest GDPR policies it is required to take an explicit consent for the cookies. Use this option with discretion especially if you serve EU', 'cookie-law-info'); ?></span>
						<span class="cli_form_er cli_scroll_accept_er"><?php _e('This option will not work along with `Popup overlay`.', 'cookie-law-info'); ?></span>
					</td>
				</tr>
			</table>



		</div>
		<div class="cli_sub_tab_content" data-id="other">
			<h3><?php _e('Other', 'cookie-law-info'); ?></h3>
			<table class="form-table">
				<tr valign="top" class="">
					<th scope="row"><label for="scroll_close_reload_field"><?php _e('Reload after "scroll accept" event?', 'cookie-law-info'); ?></label></th>
					<td>
						<!-- <input type="text" name="scroll_close_reload_field" value="<?php echo $the_options['scroll_close_reload'] ?>" />
			                <span class="cli_form_help">If the user accepts, do you want to reload the page? This feature is mostly for Italian users who have to deal with a very specific interpretation of the cookie law.</span>
			            -->
						<input type="radio" id="scroll_close_reload_yes" name="scroll_close_reload_field" class="styled" value="true" <?php echo ($the_options['scroll_close_reload'] == true) ? ' checked="checked" ' : ' '; ?> /> <?php _e('Yes', 'cookie-law-info'); ?>
						<input type="radio" id="scroll_close_reload_no" name="scroll_close_reload_field" class="styled" value="false" <?php echo ($the_options['scroll_close_reload'] == false) ? ' checked="checked" ' : ''; ?> /> <?php _e('No', 'cookie-law-info'); ?>

					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="accept_close_reload_field"><?php _e('Reload after Accept button click', 'cookie-law-info'); ?></label></th>
					<td>
						<input type="radio" id="accept_close_reload_yes" name="accept_close_reload_field" class="styled" value="true" <?php echo ($the_options['accept_close_reload'] == true) ? ' checked="checked" ' : ''; ?> /><?php _e('Yes', 'cookie-law-info'); ?>
						<input type="radio" id="accept_close_reload_no" name="accept_close_reload_field" class="styled" value="false" <?php echo ($the_options['accept_close_reload'] == false) ? ' checked="checked" ' : ''; ?> /><?php _e('No', 'cookie-law-info'); ?>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="reject_close_reload_field"><?php _e('Reload after Reject button click', 'cookie-law-info'); ?></label></th>
					<td>
						<input type="radio" id="reject_close_reload_yes" name="reject_close_reload_field" class="styled" value="true" <?php echo ($the_options['reject_close_reload'] == true) ? ' checked="checked" ' : ''; ?> /><?php _e('Yes', 'cookie-law-info'); ?>
						<input type="radio" id="reject_close_reload_no" name="reject_close_reload_field" class="styled" value="false" <?php echo ($the_options['reject_close_reload'] == false) ? ' checked="checked" ' : ''; ?> /><?php _e('No', 'cookie-law-info'); ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<?php
	include "admin-settings-save-button.php";
	?>
</div>