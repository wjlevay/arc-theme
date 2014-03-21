<?php
/*
Template Name: Catalog: Recordings
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol first clearfix" role="main">

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

							<?php global $wpdb; // let's get some catalog data in a table!
								$cat_records = $wpdb->get_results("SELECT * FROM wp_cat_records;");

								echo "<table>
									<thead>
										<tr>
											<th>Artist</th>
											<th>Title</th>
											<th>Label</th>
											<th>Catalog #</th>
											<th>Year</th>
											<th>Size</th>
											<th>Speed</th>
											<th>Format</th>
											<th>Collection</th>
										</tr>
									</thead>
									<tbody>\n";
									foreach($cat_records as $cat_record){
									echo "<tr>\n";
										echo "\t<td>".$cat_record->artist."</td>\n";
										echo "\t<td>".$cat_record->title."</td>\n";
										echo "\t<td>".$cat_record->label."</td>\n";
										echo "\t<td>".$cat_record->cat_num."</td>\n";
										echo "\t<td>".$cat_record->year."</td>\n";
										echo "\t<td>".$cat_record->size."</td>\n";
										echo "\t<td>".$cat_record->speed."</td>\n";
										echo "\t<td>".$cat_record->format."</td>\n";
										echo "\t<td>".$cat_record->collection."</td>\n";
									echo "</tr>\n";
									}
								echo "</tbody>
									</table>";
							?>

						</div> <?php // end #main ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>