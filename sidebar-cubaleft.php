				<div id="cubaleft" class="sidebar threecol first clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'cubaleft' ) ) : ?>

						<?php dynamic_sidebar( 'cubaleft' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>