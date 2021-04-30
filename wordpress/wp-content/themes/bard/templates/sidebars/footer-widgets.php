<?php

if ( ! is_active_sidebar( 'footer-widgets' ) && ! bard_is_preview() ) {
	return;
}

?>

<div class="footer-widgets clear-fix">
	<div class="page-footer-inner <?php echo bard_options( 'general_footer_width' ) === 'contained' ? 'boxed-wrapper': ''; ?>">
		<?php 
		
		if ( bard_is_preview() ) {
			bard_preview_footer_widgets();
		} else {
			dynamic_sidebar( 'footer-widgets' );
		}

		?>
	</div>
</div>