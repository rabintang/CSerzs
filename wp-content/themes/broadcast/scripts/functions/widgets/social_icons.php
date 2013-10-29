<?php
/**
 * Plugin Name: Skyali Social Icons
 * Plugin URI: http://londonthemes.com/index.php?themeforest=true
 * Description: A widget that allows you embed videos into the sidebar.
 * Version: 1.0
 * Author: Skyali
 * Author URI: http://londonthemes.com/index.php?themeforest=true
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'lt_social_icons' );

function lt_social_icons() {
	register_widget( 'lt_social_icons' );
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class lt_social_icons extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function lt_social_icons() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'lt_social_icons', 'description' => __('链接到你的社交网络', 'skyali') );

		/* Widget control settings. */
		//$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'lt_300x250_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'lt_social_icons', __('LT - 社交网络', 'skyali'), $widget_ops);
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
	   
	   $twitter = $instance['twitter'];
	   $facebook = $instance['facebook'];
	   $vimeo = $instance['vimeo'];

       ?>
     
    
     <ul id="social_icons">
     <li><a href="http://www.twitter.com/<?php echo $twitter; ?>"><img src="<?php echo get_template_directory_uri();?>/images/twitter_social_icon<?php if(get_option('skyali_broadcast_footer') == 2) { echo '_bright';} ?>.png" width="28" height="28" class="socialimg imgf"/><span class="socialtext"><?php _e('Twitter', 'skyali'); ?></span></a></li>
     
     <li><a href="http://www.facebook.com/<?php echo $facebook; ?>"><img src="<?php echo get_template_directory_uri();?>/images/facebook_social_icon<?php if(get_option('skyali_broadcast_footer') == 2) { echo '_bright';} ?>.png" width="28" height="28" class="socialimg imgf"/><span class="socialtext"><?php _e('Facebook', 'skyali'); ?></span></a></li>
     
     <li><a href="<?php echo home_url() .'?feed=rss2'; ?>"><img src="<?php echo get_template_directory_uri();?>/images/rss_social_icon<?php if(get_option('skyali_broadcast_footer') == 2) { echo '_bright';} ?>.png" width="28" height="28" class="socialimg imgf"/><span class="socialtext"><?php _e('RSS Feed', 'skyali'); ?></span></a></li>
     
    <?php if(empty($vimeo)){ echo '<div class="hideobject">"';}?> <li><a href="http://www.vimeo.com/<?php echo $vimeo; ?>"><img src="<?php echo get_template_directory_uri();?>/images/vimeo_social_icon<?php if(get_option('skyali_broadcast_footer') == 2) { echo '_bright';} ?>.png" width="28" height="28" class="socialimg imgf"/><span class="socialtext"><?php _e('Vimeo', 'skyali'); ?></span></a></li> <?php if(empty($vimeo)){ echo '</div>"';}?> 
     
     </ul>
     
     
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

        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'skyali'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
        </p>
        <?php $video_embed_c = stripslashes(htmlspecialchars($instance['video_embed'], ENT_QUOTES)); ?>
    
       <p><label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter', 'skyali'); ?></label><input type="text" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" value="<?php echo $instance['twitter']; ?>" style="width:100%;" /></p>
       
        <p><label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook', 'skyali'); ?></label><input type="text" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" value="<?php echo $instance['facebook']; ?>" style="width:100%;" /></p>
        
          <p><label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e('Vimeo (If empty will not show)', 'skyali'); ?></label><input type="text" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" value="<?php echo $instance['vimeo']; ?>" style="width:100%;" /></p>
		
	<?php
	}
}

?>