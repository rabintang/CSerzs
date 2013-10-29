<?php
$theme_name = "broadcast";
global $theme_name;

/*** Make sure to change the theme name to the current theme for all functions etc.. ***/

include_once('scripts/admin/options.php');
/* skyali admin functions and definitions */ 

/* extra functions */
include_once('scripts/functions/extra_functions.php');

add_action( 'after_setup_theme', 'skyali_setup' );

if ( ! function_exists( 'skyali_setup' ) ):
/* Sets up theme defaults and registers support for various WordPress features.*/
function skyali_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'skyali', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );
		
		// Register the wp 3.0 Menus
add_action( 'init', 'register_my_menus' );

	// This theme uses wp_nav_menu() in one location.
function register_my_menus() {
	register_nav_menus(
		array(
			'top-menu' => __( 'Top Menu' ),
			'second-menu' => __( 'Second Menu' )
		)
	);
}

	// This theme allows users to set a custom background
	add_custom_background();

	// Your changeable header business starts here
	define( 'HEADER_TEXTCOLOR', '' );
	// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
	define( 'HEADER_IMAGE', '%s/images/headers/path.jpg' );

	// The height and width of your custom header. You can hook into the theme's own filters to change these values.
	// Add a filter to skyali_header_image_width and skyali_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'skyali_header_image_width', 940 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'skyali_header_image_height', 198 ) );

	// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be 940 pixels wide by 198 pixels tall.
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );

	// Don't support text inside the header image.
	define( 'NO_HEADER_TEXT', true );

	// Add a way for the custom header to be styled in the admin panel that controls
	// custom headers. See skyali_admin_header_style(), below.
	add_custom_image_header( '', 'skyali_admin_header_style' );

	// ... and thus ends the changeable header business.

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'berries' => array(
			'url' => '%s/images/headers/berries.jpg',
			'thumbnail_url' => '%s/images/headers/berries-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Berries', 'skyali' )
		),
		'cherryblossom' => array(
			'url' => '%s/images/headers/cherryblossoms.jpg',
			'thumbnail_url' => '%s/images/headers/cherryblossoms-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Cherry Blossoms', 'skyali' )
		),
		'concave' => array(
			'url' => '%s/images/headers/concave.jpg',
			'thumbnail_url' => '%s/images/headers/concave-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Concave', 'skyali' )
		),
		'fern' => array(
			'url' => '%s/images/headers/fern.jpg',
			'thumbnail_url' => '%s/images/headers/fern-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Fern', 'skyali' )
		),
		'forestfloor' => array(
			'url' => '%s/images/headers/forestfloor.jpg',
			'thumbnail_url' => '%s/images/headers/forestfloor-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Forest Floor', 'skyali' )
		),
		'inkwell' => array(
			'url' => '%s/images/headers/inkwell.jpg',
			'thumbnail_url' => '%s/images/headers/inkwell-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Inkwell', 'skyali' )
		),
		'path' => array(
			'url' => '%s/images/headers/path.jpg',
			'thumbnail_url' => '%s/images/headers/path-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Path', 'skyali' )
		),
		'sunset' => array(
			'url' => '%s/images/headers/sunset.jpg',
			'thumbnail_url' => '%s/images/headers/sunset-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Sunset', 'skyali' )
		)
	) );
}
endif;

if ( ! function_exists( 'skyali_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_custom_image_header() in skyali_setup().
 *
 * 
 */
function skyali_admin_header_style() {
?>
<?php
}
endif;

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * To override this in a child theme, remove the filter and optionally add
 * your own function tied to the wp_page_menu_args filter hook.
 *
 * 
 */
function skyali_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'skyali_page_menu_args' );

/**
 * Sets the post excerpt length to 40 characters.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 *
 * 
 * @return int
 */
function skyali_excerpt_length($length) {
	return 40;
}
add_filter( 'excerpt_length', 'skyali_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 *
 * 
 * @return string "Continue Reading" link
 */
function skyali_continue_reading_link() {
	//return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'skyali' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and skyali_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 *
 * 
 * @return string An ellipsis
 */
function skyali_auto_excerpt_more( $more ) {
	return ' [&hellip;]' . skyali_continue_reading_link();
}
add_filter( 'excerpt_more', 'skyali_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 *
 * 
 * @return string Excerpt with a pretty "Continue Reading" link
 */
function skyali_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= skyali_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'skyali_custom_excerpt_more' );

/**
 * Remove inline styles printed when the gallery shortcode is used.
 * @return string The gallery style filter, with the styles themselves removed.
 */
function skyali_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'skyali_remove_gallery_css' );

if ( ! function_exists( 'skyali_comment' ) ) :
/* Template for comments and pingbacks. */
function skyali_comment( $comment, $args, $depth ) {
	
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
<li>

<div class="comment"><!-- start of new comment goes inside the li -->

<div class="avatar">

<?php echo get_avatar( $comment, 75 ); ?>

</div><!-- #avatar -->

<?php if ( $comment->comment_approved == '0' ) : ?>

<div id="comment-pending"><?php _e( 'Your comment is awaiting moderation.', 'skyali' ); ?></div>

<?php endif; ?>

<div class="comment_holder">
<?php _e('', 'skyali');	printf( __( '%s', 'skyali' ), sprintf( '<h5>%s</h5><!-- Comment Maker Name -->', get_comment_author_link() ) ); _e('', 'skyali'); ?>

<?php _e('<span class="date">'); printf( __(  '%1$s at %2$s', 'skyali' ), get_comment_date(),  get_comment_time() ); ?><?php edit_comment_link( __( ' - (Edit)', 'skyali' ), '' ); _e('</span><!-- #comment date -->', 'skyali');

?>

<div class="comment_box"><p class="no_margin_bottom"><?php echo $comment->comment_content; ?></p></div><!-- #comment box -->

<div class="button"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div><!-- #button -->

</div><!-- #comment_holder -->

</div><!-- #comment -->
    

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'skyali' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'skyali'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override skyali_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * 
 * @uses register_sidebar
 */
function skyali_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( '边栏一', 'skyali' ),
		'id' => 'primary-widget-area',
		'description' => __( '第一个边栏区域', 'skyali' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s rightwidget">',
		'after_widget' => '</div><!-- #right_widget -->',
		'before_title' => '<div class="heading"><div class="heading_bg"><h2>',
		'after_title' => '</h2></div></div><!-- #heading -->',
	) );

	// Area 2, located below the tabs. Empty by default.
	register_sidebar( array(
		'name' => __( '边栏二', 'skyali' ),
		'id' => 'secondary-widget-area',
		'description' => __( '第二个边栏区域', 'skyali' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s rightwidget">',
		'after_widget' => '</div><!-- #right_widget -->',
		'before_title' => '<div class="heading"><div class="heading_bg"><h2>',
		'after_title' => '</h2></div></div><!-- #heading -->',
	) );
	
	// Area 3, located in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( '侧栏左列区域', 'skyali' ),
		'id' => 'sidebar-column-left',
		'description' => __( '左侧侧边栏区域', 'skyali' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s rightwidget column-left">',
		'after_widget' => '</div>',
		'before_title' => '<div class="heading"><div class="heading_bg"><h2>',
		'after_title' => '</h2></div></div><!-- #heading -->',
	) );
	
		// Area 4, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( '侧栏右列区域', 'skyali' ),
		'id' => 'sidebar-column-right',
		'description' => __( '右侧侧边栏区域', 'skyali' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s rightwidget column-right">',
		'after_widget' => '</div>',
		'before_title' => '<div class="heading"><div class="heading_bg"><h2>',
		'after_title' => '</h2></div></div><!-- #heading -->',
	) );


	// Area 5, located in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( '第一个页脚小工具区域', 'skyali' ),
		'id' => 'first-footer-widget-area',
		'description' => __( '第一个页脚小工具区域', 'skyali' ),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div><!-- #widget -->',
		'before_title' => '<div class="heading"><h5>',
		'after_title' => '</h5></div>',
	) );
	
	// Area 6, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( '第二个页脚小工具区域', 'skyali' ),
		'id' => 'second-footer-widget-area',
		'description' => __( '第二个页脚小工具区域', 'skyali' ),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div><!-- #widget -->',
		'before_title' => '<div class="heading"><h5>',
		'after_title' => '</h5></div>',
	) );

	// Area 7, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( '第三个页脚小工具区域', 'skyali' ),
		'id' => 'third-footer-widget-area',
		'description' => __( '第三个页脚小工具区域', 'skyali' ),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div><!-- #widget -->',
		'before_title' => '<div class="heading"><h5>',
		'after_title' => '</h5></div>',
	) );
	
		// Area 8, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( '第四个页脚小工具区域', 'skyali' ),
		'id' => 'fourth-footer-widget-area',
		'description' => __( '第四个页脚小工具区域', 'skyali' ),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div><!-- #widget -->',
		'before_title' => '<div class="heading"><h5>',
		'after_title' => '</h5></div>',
	) );


}
/** Register sidebars by running skyali_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'skyali_widgets_init' );


/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 *
 * 
 */
function skyali_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'skyali_remove_recent_comments_style' );

if ( ! function_exists( 'skyali_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post—date/time and author.
 *
 * 
 */
function skyali_posted_on() {
	printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'skyali' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'skyali' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'skyali_posted_in' ) ) :
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 *
 * 
 */
function skyali_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'in %1$s', 'skyali' ); //__( 'in %1$s <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'skyali' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'in %1$s', 'skyali' ); //Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>
	} else {
		//$posted_in = __( 'in %1$s', 'skyali' ); //
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}