				<div id="homeleft" class="sidebar threecol first clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'homeleft' ) ) : ?>

						<?php dynamic_sidebar( 'homeleft' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>