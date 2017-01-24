<?php
/*
Template Name: Cuba Music Week landing page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div class="twelvecol first clearfix">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
								<header class="article-header">

									<?php if (function_exists('arc_custom_breadcrumbs')) arc_custom_breadcrumbs(); ?>

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

							<?php endwhile; endif;
							wp_reset_postdata(); ?>

						</div>

						<?php get_sidebar( 'cubaleft'); ?>

						<div id="main" class="sixcol clearfix" role="main">

							<?php // let's display only the most recent Music Week post

							$sticky = get_option( 'sticky_posts' );
							$feature = new WP_Query( array( 'posts_per_page' => 1, 'category_name' => 'cuba', 'post__in'  => $sticky, 'ignore_sticky_posts' => 1 ) );

							if ($feature->have_posts()) : while ($feature->have_posts()) : $feature->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<header class="article-header">

									<div class="post-thumbnail"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'medium' ); ?><span class="thumbnail-caption"><?php the_post_thumbnail_caption(); ?></span></a></div>
									<p class="post-info"><?php
									$category_array = get_the_category(); 
									$category = $category_array[0]->cat_name;
										printf( __( '<span class="category">%1$s</span> <time class="updated" datetime="%2$s" pubdate>%3$s</time>', 'bonestheme' ), $category, get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')) );
									?></p>
									<h1 class="entry-title single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline vcard"><span class="author"><?php echo get_the_author(); ?><?php author_ARCtitle(); ?></p></span></p>

								</header> <?php // end article header ?>

								<section class="entry-content clearfix">
									<?php 
									global $more;
									$more = 0;
									the_content('read&nbsp;more&nbsp;&gt;&gt;'); ?>
								</section> <?php // end article section ?>

							</article> <?php // end article ?>

							<?php endwhile; endif;
							wp_reset_postdata(); ?>

						</div> <?php // end #main ?>

						<?php get_sidebar( 'cubaright' ); ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
