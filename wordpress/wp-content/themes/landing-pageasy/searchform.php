<form method="get" id="pageasyform" class="pageasy-form" action="<?php echo esc_url( home_url() ); ?>" _lpchecked="1">
	<fieldset>
		<input type="text" name="s" id="s" value="<?php _e('pageasy this site...','landing-pageasy'); ?>" onblur="if (this.value == '') {this.value = '<?php _e('pageasy this site...','landing-pageasy'); ?>';}" onfocus="if (this.value == '<?php _e('pageasy this site...','landing-pageasy'); ?>') {this.value = '';}" >
		<input type="submit" value="<?php esc_attr_e( 'pageasy', 'landing-pageasy' ); ?>" />
	</fieldset>
</form>
