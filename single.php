<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="ninecol first clearfix" role="main">

						<?php if (function_exists('arc_custom_breadcrumbs')) arc_custom_breadcrumbs(); ?>

						<h1 class="page-title h2 news">ARChive news</h1>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
								
								<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

									<header class="article-header">

										<?php // check for featured image and display
										$no_image = get_post_meta( $post->ID, 'no_image', true ); // check whether image should be supressed
										if ( '' != get_the_post_thumbnail() && 'yes' != $no_image ) { ?>
										<div class="post-thumbnail"><?php the_post_thumbnail( 'bones-thumb-713' ); ?><span class="thumbnail-caption"><?php the_post_thumbnail_caption(); ?></span></div>
										<?php } else {
											echo '';
										} 
										?>

										<p class="post-info"><?php
											printf( __( '<span class="category">%1$s</span> <time class="updated" datetime="%2$s" pubdate>%3$s</time>', 'bonestheme' ), get_the_category_list(', '), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')) );
										?></p>
										<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
										<p class="byline vcard"><span class="author"><?php echo bones_get_the_author_posts_link(); ?>, <?php the_author_meta( 'nickname' ); ?></p></span></p>

									</header> <?php // end article header ?>		

									<section class="entry-content clearfix" itemprop="articleBody">
										<?php the_content(); ?>
									</section> <?php // end article section ?>

									<footer class="article-footer">
										<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tagged:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

										<?php // uncomment for post-navigation
										/* <nav class="post-navigation">
											<div class="prev-post">
												<?php previous_post('%', '< Previous post', 'no'); ?>
											</div>
											<div class="next-post">
												<?php next_post('%', 'Next post >', 'no'); ?>
											</div>
										</nav> */
										?>

									</footer> <?php // end article footer ?>

									<?php comments_template(); ?>

								</article> <?php // end article ?>

							<?php endwhile; ?>

							<?php else : ?>

								<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php // _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>
					
							<?php endif; ?>

					</div> <?php // end #main ?>

					<?php get_sidebar( 'blogright' ); ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
