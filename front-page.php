<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<?php get_sidebar( 'homeleft'); ?>

						<div id="main" class="sixcol clearfix" role="main">

							<?php // let's display only the most recent STICKY post

							$sticky = get_option( 'sticky_posts' );
							$feature = new WP_Query( array( 'posts_per_page' => 1, 'post__in'  => $sticky, 'ignore_sticky_posts' => 1 ) );

							if ($feature->have_posts()) : while ($feature->have_posts()) : $feature->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<header class="article-header">

									<div class="post-thumbnail"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'medium' ); ?><span class="thumbnail-caption"><?php the_post_thumbnail_caption(); ?></span></a></div>
									<p class="post-info"><?php
										printf( __( '<span class="category">%1$s</span> <time class="updated" datetime="%2$s" pubdate>%3$s</time>', 'bonestheme' ), get_the_category_list(', '), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')) );
									?></p>
									<h1 class="entry-title single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline vcard"><span class="author"><?php echo bones_get_the_author_posts_link(); ?>, <?php the_author_meta( 'nickname' ); ?></p></span></p>

								</header> <?php // end article header ?>

								<section class="entry-content clearfix">
									<?php 
									global $more;
									$more = 0;
									the_content('read more &gt;&gt;'); ?>
								</section> <?php // end article section ?>

							</article> <?php // end article ?>

							<?php endwhile; endif;
							wp_reset_postdata(); ?>

							<div class="homepage-galleries">

								<h4 class="galleries">galleries &amp; selections</h4>

								<?php // Now get thumbnails and links from the featured gallery pages

								$galleries = new WP_Query( array('post_type' => 'page', 'post_parent' => 20, 'posts_per_page' => 3, 'orderby' => 'rand', 'meta_key' => '_thumbnail_id') );
								if ($galleries->have_posts()) : 
								while ($galleries->have_posts()) : $galleries->the_post(); 
								$postcount++; ?>

									<?php // If it's the first or third gallery, put it in a left column, if it's the second, put it in a right column
									if (($postcount == 1) || ($postcount == 3)) : echo '<div class="sixcol first clearfix">'; 
									else : echo '<div class="sixcol last clearfix">';
									endif ; ?>

									<?php // check for featured image and display with a read more link in the caption space
									if ( '' != get_the_post_thumbnail() ) { ?>
									<div class="post-thumbnail"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'bones-thumb-220' ); ?>
										<span class="thumbnail-caption">view more <?php // check for a short_title custom field value and display it
											$short_title = get_post_meta($post->ID, 'short_title', true);
											if ( '' != $short_title) { echo $short_title; }
											else { the_title(); } ?> &gt;&gt;
										</span></a>
									</div>
									<?php } else {
									echo '';
									} 
									?>
									</div><?php // end the sixcol from the If statement above ?>

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
													<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
											</footer>
										</article>

								<?php endif; ?>

								<?php get_sidebar( 'homecatalog' ); ?>

							</div> <?php // end homepage-galleries ?>

						</div> <?php // end #main ?>

						<?php get_sidebar( 'homeright' ); ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
