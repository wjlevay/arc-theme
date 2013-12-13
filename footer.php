			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<?php
						/*
						 * Sidebars in the footer with four columns of widgets.
						 */
						if ( ! is_404() )
							get_sidebar( 'footer' );
					?>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>

				</div> <?php // end #inner-footer ?>

			</footer> <?php // end footer ?>

		</div> <?php // end #container ?>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <?php // end page. what a ride! ?>
