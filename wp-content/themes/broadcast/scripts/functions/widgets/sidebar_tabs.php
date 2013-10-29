<?php
/**
 * Plugin Name: Skyali Tabs Widget
 * Plugin URI: http://londonthemes.com/index.php?themeforest=true
 * Description: A widget that allows display flickr images.
 * Version: 1.0
 * Author: skyali
 * Author URI: http://londonthemes.com/index.php?themeforest=true
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'lt_tabs_widgets' );

function lt_tabs_widgets() {
	register_widget( 'lt_tabs_widget' );
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class lt_tabs_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function lt_tabs_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'lt_tabs_widget', 'description' => __('边栏索引小工具', 'skyali') );

		/* Widget control settings. */
		//$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'lt_tabs_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'lt_tabs_widget', __('LT - 边栏索引', 'skyali'), $widget_ops );
	}

	/**
	 *display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		global $wpdb;
		extract( $args );
	    /*$title = apply_filters('widget_title', $instance['title'] );*/
		/* Before widget (defined by themes). */
		/*echo $before_widget;*/

		/* Display the widget title if one was input (before and after defined by themes). */
		/*if ( $title )*/
		/*echo $before_title . $title . $after_title;*/

?>

<div id="londontabs" class="widget">

<div id="tabsheader" class="tabsheader">

<ul class="tabnav ui-tabs-nav">

<li class="ui-tabs-selected"><a href="#populartab"><?php _e('流行','skyali'); ?></a></li>

<li class=""><a href="#recenttab"><?php _e('最近','skyali'); ?></a></li>

<li class=""><a href="#commentstab"><?php _e('评论','skyali'); ?></a></li>

<li class="tagslast"><a href="#tagtab" class="tagslast"><?php _e('标签','skyali'); ?></a></li>

</ul>

</div><!-- #header -->

<div id="populartab" class="tabdiv ui-tabs-panel" style="display: block; "><!-- #popular -->

<?php 

//show most popular blog posts

$show_post = 4;

$tab_num = 0;

$popular_posts = new WP_Query();

$popular_posts->query('showposts='.$show_post.'&orderby=comment_count');

while ($popular_posts->have_posts()) : $popular_posts->the_post();

?>

<div class="tab_inside<?php if($tab_num == 3){echo ' no_border_bottom';} ?>">

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl = get_bloginfo('url'); //$image_url = str_replace($blogurl, '', $image_url); ?>

<a href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=61&amp;h=54&amp;zc=1&amp;q=100" alt="<?php echo the_title(); ?>" /></a>

<?php } ?>

<div class="content">

<h1><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h1> 

<span class="date"><?php the_time('F d, '); ?><?php the_time(' Y'); ?></span>

</div><!-- #content closer -->

</div><!-- #tab_inside -->

<?php $tab_num++; ?>

<?php endwhile; ?>

<?php wp_reset_query(); ?>

</div><!--#popular -->

<div id="recenttab" class="tabdiv ui-tabs-panel ui-tabs-hide"><!-- #recent tab -->

<?php

//show recent blog posts

$tab_num = 0;

$recent_posts = new WP_Query();

$recent_posts->query('showposts='.$show_post.'&orderby=date');

while ($recent_posts->have_posts()) : $recent_posts->the_post();

?>

<div class="tab_inside<?php if($tab_num == 3){echo ' no_border_bottom';} ?>">

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl = get_bloginfo('url'); //$image_url = str_replace($blogurl, '', $image_url); ?>

<a href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=61&amp;h=54&amp;zc=1&amp;q=100" alt="<?php echo the_title(); ?>" /></a>

<?php } ?>

<div class="content">

<h1><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h1> 

<span class="date"><?php the_time('F d, '); ?><?php the_time(' Y'); ?></span>

</div><!-- #content closer -->

</div><!-- #tab_inside -->

<?php $tab_num++; ?>

<?php endwhile; ?>

<?php wp_reset_query(); ?>

</div><!--#recent tab -->

<div id="commentstab" class="tabdiv ui-tabs-panel ui-tabs-hide"><!-- #commentstab -->

<?php $tab_num = 0; ?>

<?php

//show recent comments
$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_author_email, comment_date_gmt, comment_approved, comment_type, comment_author_url, SUBSTRING(comment_content,1,70) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) WHERE comment_approved = '1' AND comment_type = '' AND post_password = '' ORDER BY comment_date_gmt DESC LIMIT ".$show_post."";

$comments = $wpdb->get_results($sql);

foreach ($comments as $comment) :

?>

<div class="tab_inside<?php if($tab_num == 3){echo ' no_border_bottom';} ?>">

<a href="<?php echo get_permalink($comment->ID); ?>#comment-<?php echo $comment->comment_ID; ?>"><?php echo get_avatar( $comment, '53' ); ?></a>

<div class="content">

<h1><a href="<?php echo get_permalink($comment->ID); ?>#comment-<?php echo $comment->comment_ID; ?>"><?php echo $comment->post_title; ?></a></h1>

<span class="date"><?php echo strip_tags($comment->com_excerpt); ?></span>

</div><!-- #content closer -->

</div><!-- #tab_inside -->

<?php $tab_num++; ?>

<?php endforeach; ?>

<?php wp_reset_query(); ?>

</div><!-- #commentstab -->

<div id="tagtab" class="tabdiv ui-tabs-panel ui-tabs-hide"><!-- #tagtab -->

<?php wp_tag_cloud(''); ?>

</div><!-- #tagtab -->


</div><!-- #tabs -->



<?php	
		/* After widget (defined by themes). */
		/*echo $after_widget;*/
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		//$defaults = array( 'title' => __('Example', 'example'), 'name' => __('John Doe', 'example'), 'sex' => 'male', 'show_sex' => true );
		//$instance = wp_parse_args( (array) $instance, $defaults ); ?>

        <?php echo 'There are no settings for this widget. Remove widget to disable.'; ?>
		
	<?php
	}
}

?>