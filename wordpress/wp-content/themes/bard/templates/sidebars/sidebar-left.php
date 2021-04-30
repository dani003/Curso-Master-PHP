<?php

// check if available
if ( ! is_active_sidebar( 'sidebar-left' ) ) {
	return;
}

if ( class_exists( 'WooCommerce' ) ) {

	if ( is_cart() || is_checkout() || is_account_page() ) {
		return;
	}
}

?>

<div class="sidebar-left-wrap">
	<aside class="sidebar-left">
		<?php dynamic_sidebar( 'sidebar-left' ); ?>
	</aside>
</div>