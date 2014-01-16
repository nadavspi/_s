<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package _s
 */
?>
	<aside class="sidebar" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<?php // default sidebar content can go here ?>
		<?php endif; // end sidebar widget area ?>
	</aside><!-- .sidebar -->
