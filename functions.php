<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once( 'library/bones.php' ); // if you remove this, bones will break
/*
2. library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
require_once( 'library/custom-post-type.php' ); // you can disable this if you like
*/
require_once( 'library/custom-post-quotes.php' ); // you can disable this if you like
/*
3. library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
require_once( 'library/admin.php' ); // this comes turned off by default
/*
4. library/translation/translation.php
	- adding support for other languages
*/
// require_once( 'library/translation/translation.php' ); // this comes turned off by default

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-713', 713, 713, true );
add_image_size( 'bones-thumb-220', 220, 220, true );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Default', 'bonestheme' ),
		'description' => __( 'The default sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'homeleft',
		'name' => __( 'Home Left', 'bonestheme' ),
		'description' => __( 'The left homepage sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'homeright',
		'name' => __( 'Home Right', 'bonestheme' ),
		'description' => __( 'The right homepage sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'homecatalog',
		'name' => __( 'Home Catalogs', 'bonestheme' ),
		'description' => __( 'The homepage sidebar that displays a list of catalogs.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'about',
		'name' => __( 'About Sidebar', 'bonestheme' ),
		'description' => __( 'The right sidebar on the About page.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle about">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'blogright',
		'name' => __( 'Blog Sidebar', 'bonestheme' ),
		'description' => __( 'The right sidebar on a single blog post.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle news">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'gallery',
		'name' => __( 'Gallery Sidebar', 'bonestheme' ),
		'description' => __( 'The right sidebar on the Gallery page.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle galleries">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'catalog',
		'name' => __( 'Catalog Sidebar', 'bonestheme' ),
		'description' => __( 'The right sidebar on the Catalog page.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle catalog">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'support',
		'name' => __( 'Support Sidebar', 'bonestheme' ),
		'description' => __( 'The right sidebar on the Support page.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle support">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'resources',
		'name' => __( 'Resources Sidebar', 'bonestheme' ),
		'description' => __( 'The right sidebar on the Resources page.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle resources">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'footer-1',
		'name' => __( 'Footer Area 1', 'bonestheme' ),
		'description' => __( 'The first footer area.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle footer">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'footer-2',
		'name' => __( 'Footer Area 2', 'bonestheme' ),
		'description' => __( 'The second footer area.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle footer">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'footer-3',
		'name' => __( 'Footer Area 3', 'bonestheme' ),
		'description' => __( 'The third footer area.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle footer">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'footer-4',
		'name' => __( 'Footer Area 4', 'bonestheme' ),
		'description' => __( 'The fourth footer area.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle footer">',
		'after_title' => '</h4>',
	));
	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'Sidebar 2', 'bonestheme' ),
		'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<?php // custom gravatar call ?>
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=65" class="load-gravatar avatar photo" height="65" width="65" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
				<?php // end custom gravatar call ?>
				<?php printf(__( '<cite class="fn">%s</cite>', 'bonestheme' ), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>
				<?php edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!

/************* ORIGINAL BONES SEARCH FORM LAYOUT *****************/

/*
// Search Form
function bones_wpsearch($form) {
	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<label class="screen-reader-text" for="s">' . __( 'Search for:', 'bonestheme' ) . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . esc_attr__( 'Search the Site...', 'bonestheme' ) . '" />
	<input type="submit" id="searchsubmit" value="' . esc_attr__( 'Search' ) .'" />
	</form>';
	return $form;
} // don't remove this bracket!
*/

/************* EXPANDING SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<input class="sb-search-input" placeholder="search the ARChive..." type="search" value="' . get_search_query() . '" name="s" id="s">
	<input class="sb-search-submit" type="submit" value="' . esc_attr__( 'Search' ) .'">
	<span class="sb-icon-search"><i class="fa fa-2x fa-search"></i></span>
	</form>';
	return $form;
} // don't remove this bracket!

/************* CUSTOM FUNCTIONS *****************/

// Set page slug as a body class (via http://timneill.net/2013/05/wordpress-add-page-slug-to-body-class-including-parents/)

function add_body_class($classes) {
    // You can modify this check so it will run on every post type
    if (is_page()) {
        global $post;
        
        // If we *do* have an ancestors list, process it
        // http://codex.wordpress.org/Function_Reference/get_post_ancestors
        if ($parents = get_post_ancestors($post->ID)) {
            foreach ((array)$parents as $parent) {
                // As the array contains IDs only, we need to get each page
                if ($page = get_page($parent)) {
                    // Add the current ancestor to the body class array
                    $classes[] = "{$page->post_type}-{$page->post_name}";
                }
            }
        }
 
        // Add the current page to our body class array
        $classes[] = "{$post->post_type}-{$post->post_name}";
    }
    
    return $classes;
}

add_filter('body_class', 'add_body_class');

// Change page template to Gallery page upon saving a Gallery child page

function assign_gallery_template($post_id) {
    global $post;
    // Checks if Gallery child page and if doesn't already have the Gallery Page template assigned
	if ('20' == $post->post_parent && get_post_meta($post_id, '_wp_page_template', true) !== 'page-gallery.php')
	{	
		update_post_meta( $post_id, '_wp_page_template', 'page-gallery.php' );
	}
}

add_action('save_post', 'assign_gallery_template', 10);

// Switch the template when viewing a Gallery section child page that hasn't been re-saved yet

function switch_page_template() {
    global $post;
    // Checks if current page is a Gallery child page
	if ('20' == $post->post_parent && get_post_meta($post_id, '_wp_page_template', true) !== 'page-gallery.php')
	{	
		$template = TEMPLATEPATH . "/page-gallery.php";
		if (file_exists($template)) {
			load_template($template);
			exit;
		}
	}
}
 
add_action('template_redirect', 'switch_page_template');

// Show Captions on Thumbnail Images (via http://wordpress.org/support/topic/display-caption-with-the_post_thumbnail)

function the_post_thumbnail_caption() {
  global $post;

  $thumb_id = get_post_thumbnail_id($post->id);

  $args = array(
	'post_type' => 'attachment',
	'post_status' => null,
	'post_parent' => $post->ID,
	'include'  => $thumb_id
	); 

   $thumbnail_image = get_posts($args);

   if ($thumbnail_image && isset($thumbnail_image[0])) {
     //show thumbnail title
     //echo $thumbnail_image[0]->post_title; 

     //Uncomment to show the thumbnail caption
     echo $thumbnail_image[0]->post_excerpt; 

     //Uncomment to show the thumbnail description
     //echo $thumbnail_image[0]->post_content; 

     //Uncomment to show the thumbnail alt field
     //$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
     //if(count($alt)) echo $alt;
  }
}

// Set Featured Images for migrated blog posts
// http://www.gavick.com/magazine/wordpress-quick-tip-4-automatically-set-the-first-post-image-as-a-featured-image.html

function auto_featured_image() {
    global $post;

    if (!has_post_thumbnail($post->ID)) {
        $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
        
	  if ($attached_image) {
              foreach ($attached_image as $attachment_id => $attachment) {
                   set_post_thumbnail($post->ID, $attachment_id);
              }
         }
    }
}

// Use it temporarily to generate all featured images
// add_action('the_post', 'auto_featured_image');

?>