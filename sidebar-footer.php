<?php
	/*
	 * The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'footer-1' )
		&& ! is_active_sidebar( 'footer-2' )
		&& ! is_active_sidebar( 'footer-3' )
		&& ! is_active_sidebar( 'footer-4' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div id="footer-widgets">
	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
	<div id="footer-1" class="sidebar threecol first clearfix" role="complementary">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
	<div id="footer-2" class="sidebar threecol clearfix" role="complementary">
		<?php dynamic_sidebar( 'footer-2' ); ?>
	</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
	<div id="footer-3" class="sidebar threecol clearfix" role="complementary">
		<?php dynamic_sidebar( 'footer-3' ); ?>
	</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
	<div id="footer-4" class="sidebar threecol last clearfix" role="complementary">
		<?php dynamic_sidebar( 'footer-4' ); ?>
	</div>
	<?php endif; ?>
</div><!-- #footer-widgets -->