<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<div id="crumbs"><a href="<?php echo home_url(); ?>">home</a> &raquo; <span class="current">ARChive news</span></div>

						<h1 class="page-title h2 news">ARChive news</h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

							<header class="article-header">

								<?php // check for featured image and display
								if ( '' != get_the_post_thumbnail() ) { ?>
								<div class="post-thumbnail"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'medium' ); ?><span class="thumbnail-caption"><?php the_post_thumbnail_caption(); ?></span></a></div>
								<?php } else {
									echo '';
								} 
								?>

								<p class="post-info"><?php
								$category_array = get_the_category(); 
								$category = $category_array[0]->cat_name;
									printf( __( '<span class="category">%1$s</span> <time class="updated" datetime="%2$s" pubdate>%3$s</time>', 'bonestheme' ), $category, get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')) );
								?></p>
								<h1 class="entry-title single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<p class="byline vcard"><span class="author"><?php echo get_the_author(); ?>, <?php the_author_meta( 'nickname' ); ?></p></span></p>

							</header> <?php // end article header ?>

							<section class="entry-content clearfix">
									<?php the_content( '<span class="read-more">' . __( 'read more &gt;&gt;', 'bonestheme' ) . '</span>' ); ?>
							
							</section> <?php // end article section ?>

							<footer class="article-footer">

							</footer> <?php // end article footer ?>

						</article> <?php // end article ?>

						<?php endwhile; ?>

								<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
									<?php bones_page_navi(); ?>
								<?php } else { ?>
									<nav class="wp-prev-next">
										<ul class="clearfix">
											<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
											<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
										</ul>
									</nav>
								<?php } ?>

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

						</div> <?php // end #main ?>

						<?php get_sidebar( 'blogright' ); ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
