<?php

// check if available
if ( ! is_active_sidebar( 'sidebar-right' ) && ! bard_is_preview() ) {
	return;
}

if ( class_exists( 'WooCommerce' ) ) {

	if ( is_cart() || is_checkout() || is_account_page() ) {
		return;
	}
}

?>

<div class="sidebar-right-wrap">
	<aside class="sidebar-right">
		<?php

		if ( bard_is_preview() ) {
			bard_preview_right_sidebar();
		} else {
			dynamic_sidebar( 'sidebar-right' );
		}

		?>
	</aside>
</div>