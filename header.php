<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<?php // display random factoid about the ARChive from the Quotes custom post type
					$factoid = new WP_Query(array ('post_type' => 'quote', 'posts_per_page' => 1, 'orderby' => 'rand') );
					while ($factoid->have_posts()) : $factoid->the_post(); ?>

					<div id="factoid"><?php the_content(); ?></div>

					<?php endwhile;
					wp_reset_postdata();
					?>

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<a id="logo" href="<?php echo home_url(); ?>" rel="nofollow" title="The ARChive of Contemporary Music"><img src="<?php echo get_template_directory_uri(); ?>/library/images/arc-logo.png"></a>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav id="site-navigation" role="navigation">
						<div id="sb-search" class="sb-search"><?php get_search_form(); ?></div>
						<ul class="social-icons">
							<li id="menu-item-facebook" class="menu-item social-icon facebook"><a href="http://www.facebook.com/ArchiveOfContemporaryMusic"><i class="fa fa-2x fa-facebook-square"></i><span class="fa-hidden">Facebook</span></a></li>
							<li id="menu-item-twitter" class="menu-item social-icon twitter"><a href="http://twitter.com/ARCnyc"><i class="fa fa-2x fa-twitter-square"></i><span class="fa-hidden">Twitter</span></a></li>
						</ul>
						<h3 class="menu-toggle"><a href="#footer-widgets"><i class="fa fa-2x fa-bars"></i></a></h3>
						<?php bones_main_nav(); ?>
					</nav>

				</div> <?php // end #inner-header ?>

			</header> <?php // end header ?>
