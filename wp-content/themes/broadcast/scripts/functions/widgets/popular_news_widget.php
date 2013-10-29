<?php
/**
 * Plugin Name: skyali popular news
 * Plugin URI: http://londonthemes.com/index.php?themeforest=true
 * Description: A widget that allows you to display the most popular news in the sidebar.
 * Version: 1.0
 * Author: skyali
 * Author URI: http://londonthemes.com/index.php?themeforest=true
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'lt_sidebar_popular_news_widgets' );

function lt_sidebar_popular_news_widgets() {
	register_widget( 'lt_sidebar_popular_news_widget' );
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class lt_sidebar_popular_news_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function lt_sidebar_popular_news_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'lt_sidebar_popular_news_widget', 'description' => __('显示流行文章在侧边栏', 'skyali') );

		/* Widget control settings. */
		//$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'lt_300x250_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'lt_sidebar_popular_news_widget', __('LT - 显示流行文章', 'skyali'), $widget_ops);
	}

	/**
	 *display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );
	    $title = apply_filters('widget_title', $instance['title'] );
		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
		echo $before_title . $title . $after_title;
	   
	   $video_embed = $instance['video_embed'];
	   
       ?>
       <?php
	   $entries_display = $instance['entries_display'];
	   if(empty($entries_display)){ $entries_display = '5'; }
	   $display_category = $instance['display_category'];
       //show latest blog posts
        $latest_posts = new WP_Query();
        $latest_posts->query('caller_get_posts=1&showposts='.$entries_display.'&orderby=comment_count&cat='.$display_category.'');
		
        while ($latest_posts->have_posts()) : $latest_posts->the_post();
       ?>
       
    <div class="popular_news">
	
	<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
    
<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl = get_bloginfo('url'); //$image_url = str_replace($blogurl, '', $image_url); ?>


   <div class="image">
    
    <a href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=75&amp;h=75&amp;zc=1&amp;q=100" width="75" height="75" alt="<?php the_title(); ?>" align="left" class="imgborder"/></a>
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
   <p> <?php echo excerpt(15); ?> [...] </p>
    
    </div><!-- #image -->
     <?php } ?>
    
  
    </div><!-- #latest_news -->
	  
	  <?php endwhile; ?>
       
	   <?php
		
		/* After widget (defined by themes). */
		echo $after_widget;
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

     <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'skyali'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" /></p>
		
  <p><label for="<?php echo $this->get_field_id( 'entries_display' ); ?>"><?php _e('How many entries to display?', 'skyali'); ?></label>
 <input type="text" id="<?php echo $this->get_field_id('entries_display'); ?>" name="<?php echo $this->get_field_name('entries_display'); ?>" value="<?php echo $instance['entries_display']; ?>" style="width:100%;" /></p>
 
   <p><label for="<?php echo $this->get_field_id( 'display_category' ); ?>"><?php _e('Display Certain Categories? Place the category id and seperate with a comma (e.g. - 1, 22, 35)', 'skyali'); ?></label>
 <input type="text" id="<?php echo $this->get_field_id('display_category'); ?>" name="<?php echo $this->get_field_name('display_category'); ?>" value="<?php echo $instance['display_category']; ?>" style="width:100%;" /></p>
	<?php
	}
}

?>