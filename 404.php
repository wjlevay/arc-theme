<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="twelvecol first clearfix" role="main">

						<?php if (function_exists('arc_custom_breadcrumbs')) arc_custom_breadcrumbs(); ?>

						<article id="post-not-found" class="hentry clearfix">

							<header class="article-header">

								<h1><?php _e( 'oops! 404 - page not found', 'bonestheme' ); ?></h1>

							</header> <?php // end article header ?>

							<section class="entry-content">

								<p><?php _e( 'The page you were looking for is not here, but try looking again.', 'bonestheme' ); ?></p>

							</section> <?php // end article section ?>

							<footer class="article-footer">

							</footer> <?php // end article footer ?>

						</article> <?php // end article ?>

					</div> <?php // end #main ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
