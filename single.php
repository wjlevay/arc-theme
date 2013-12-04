<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div id="main" class="ninecol first clearfix" role="main">

							<h4 class="blogs"><a href="<?php echo home_url(); ?>/blog" title="Go back to the main blog page">ARChive blog</a></h4>

								<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

										<div class="post-thumbnail"><?php the_post_thumbnail( 'bones-thumb-713' ); ?><span class="thumbnail-caption"><?php the_post_thumbnail_caption(); ?></span></div>

									<div id="secondary-content" class="fourcol clearfix first"><?php // start #secondary-content subcolumn ?>
											
										<h4 class="blogs">author</h4>
										<hr>
										<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
										<p class="author-name"><?php echo bones_get_the_author_posts_link(); ?>,<br><?php the_author_meta( 'nickname' ); ?></p>
										<p class="author-info"><?php the_author_meta( 'description' ); ?></p>

									</div><?php // end #secondary-content ?>

									<div id="primary-content" class="eightcol clearfix last"><?php // start #primary-content subcolumn ?>

										<header class="article-header">

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
											<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

										</footer> <?php // end article footer ?>

										<?php // comments_template(); // uncomment if you want to use them ?>

									</div><?php // end #primary-content ?>

								</article> <?php // end article ?>

						</div><?php // end #main ?>

					<?php endwhile; ?>

					<?php else : ?>

						<div id="main" class="ninecol first clearfix" role="main">

							<h4 class="blogs">ARChive blog</h4>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						</div> <?php // end #main ?>
					
					<?php endif; ?>

					<?php get_sidebar( 'blogright' ); ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
