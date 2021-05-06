<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package landing Lite
 */

$sidebar = landing_pageasy_custom_sidebar(); ?>

<aside class="sidebar c-4-12">
	<div id="sidebars" class="sidebar">
		<div class="sidebar_list">
			<?php if ( ! dynamic_sidebar( $sidebar )) : ?>
			<?php endif; ?>
		</div>
	</div><!--sidebars-->
</aside>