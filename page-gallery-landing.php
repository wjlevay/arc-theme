<?php
/*
Template Name: Gallery Landing Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="ninecol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<?php if (function_exists('arc_custom_breadcrumbs')) arc_custom_breadcrumbs(); ?>

									<h1 class="page-title"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>

								<footer class="article-footer">

								</footer> <?php // end article footer ?>

							</article> <?php // end article ?>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

							<?php wp_reset_postdata(); ?>

							<?php // Now get thumbnails and excerpts from the featured gallery pages ?>

							<?php $galleries = new WP_Query( array('showposts' => 3, 'child_of' => 20, 'post_type' => 'page', 'orderby' => 'menu_order title', 'order' => 'DESC', 'meta_key' => 'featured_gallery', 'meta_value' => 'yes') );

							if ($galleries->have_posts()) : while ($galleries->have_posts()) : $galleries->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

							<div id="gallery-thumb" class="eightcol clearfix first"><?php // start #gallery-thumb subcolumn ?>

								<?php // check for featured image and display with caption
								if ( '' != get_the_post_thumbnail() ) { ?>
								<div class="post-thumbnail"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'medium' ); ?><span class="thumbnail-caption">view more <?php the_title(); ?> &gt;&gt;</span></a></div>
								<?php } else {
									echo '';
								} 
								?>

							</div><?php // end #gallery-thumb ?>

							<div id="gallery-content" class="fourcol clearfix last"><?php // start #gallery-content subcolumn ?>

								<h1 class="entry-title single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

								<section class="entry-content clearfix">
									<?php 
									global $more;
									$more = 0;
									the_content(''); ?>
									<span class="read-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">view gallery &gt;&gt;</a></span>
								</section> <?php // end article section ?>

							</div><?php // end #gallery-content ?>

							</article> <?php // end article ?>

							<?php endwhile; else : ?>

										<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
											</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
											</section>
											<footer class="article-footer">
													<p><?php // _e( 'This is the error message in the page-gallery-landing.php template.', 'bonestheme' ); ?></p>
											</footer>
										</article>

							<?php endif; ?> <?php // end gallery excerpts ?>

						</div> <?php // end #main ?>

						<?php get_sidebar( 'gallery' ); ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
