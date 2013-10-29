<?php
/**
 * Plugin Name: Skyali 125 x 125 Ad
 * Plugin URI: http://londonthemes.com/index.php?themeforest=true
 * Description: A widget that allows you set a 300 x 250 ad.
 * Version: 1.0
 * Author: Skyali
 * Author URI: http://londonthemes.com/index.php?themeforest=true
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'lt_125x125_widgets' );

function lt_125x125_widgets() {
	register_widget( 'lt_125x125_widget' );
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class lt_125x125_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function lt_125x125_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'lt_125x125_widget', 'description' => __('125 X 125像素 广告小工具.', 'skyali') );

		/* Widget control settings. */
		//$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'lt_300x250_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'lt_125x125_widget', __('LT - 125 X 125广告', 'skyali'), $widget_ops );
	}

	/**
	 *display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );
		
		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		//if ( $title )
			// disable title for ad echo $before_title . $title . $after_title;

		// Content goes here
       //display 125x125
	   
	   $image_url = $instance['image_url'];
	   $image_link_address = $instance['image_link_address']; 

       ?><div class="ad_125"><a href="<?php printf( __('%1$s', 'skyali'), $image_link_address); ?>"><img src="<?php printf( __('%1$s', 'skyali'), $image_url); ?>"  width="125" height="125" alt=""/></a></div>
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
        <label for="<?php echo $this->get_field_id( 'image_url' ); ?>"><?php _e('Image Url:', 'skyali'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('image_url'); ?>" name="<?php echo $this->get_field_name('image_url'); ?>" value="<?php echo $instance['image_url']; ?>" style="width:100%;" />
        </p>
        
        <p>
          <label for="<?php echo $this->get_field_id( 'image_link_address' ); ?>"><?php _e('Image Link Address:', 'skyali'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('image_link_address'); ?>" name="<?php echo $this->get_field_name('image_link_address'); ?>" value="<?php echo $instance['image_link_address']; ?>" style="width:100%;" />
        </p>
		
	<?php
	}
}

?>