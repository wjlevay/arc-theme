				<div id="catalogs" class="sidebar threecol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'catalogs' ) ) : ?>

						<?php dynamic_sidebar( 'catalogs' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>