<?php
/**
 * Plugin Name: skyali 300 x 250 Ad
 * Plugin URI: http://londonthemes.com/index.php?themeforest=true
 * Description: A widget that allows you set a 300 x 250 ad.
 * Version: 1.0
 * Author: skyali
 * Author URI: http://londonthemes.com/index.php?themeforest=true
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'lt_300x250_widgets' );

function lt_300x250_widgets() {
	register_widget( 'lt_300x250_widget' );
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class lt_300x250_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function lt_300x250_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'lt_300x250_widget', 'description' => __('300 x 250像素 广告小工具', 'skyali') );

		/* Widget control settings. */
		//$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'lt_300x250_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'lt_300x250_widget', __('LT - 300 X 250广告', 'skyali'), $widget_ops );
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
			
			echo '<div class="heading"><div class="heading_bg"><h2>'. $title .'</h2></div></div><!-- #heading -->';

       //display 300x250
	
	$ad_code = $instance['ad_code'];
   
	echo '<div class="ad_300">';
	$image_300 = $instance['image_url'];
	$image_link_address = $instance['image_link_address'];
	if(!empty($ad_code))
	{
	echo $ad_code;	
    }
    elseif(!empty($image_300)){
	echo '<a href="'.$image_link_address.'"><img src="'.$image_300.'" alt="300x250"  /></a>';
	
	}
	else{
	echo '<img src="'.get_template_directory_uri().'/images/300x250.png" alt="300x250" />';
	}
	echo'</div><!-- #ad 300 -->'; 

		 
		
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
		$defaults = array('title' => '','ad_code' => '', 'image_url' => '', 'image_link_address'=>'');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

      <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title', 'skyali'); ?></label>
      <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;"  /></p>
      <p><label for="<?php echo $this->get_field_id( 'ad_code' ); ?>"><?php _e('Ad Code:', 'skyali'); ?></label><textarea class="widefat" id="<?php echo $this->get_field_id('ad_code'); ?>" name="<?php echo $this->get_field_name('ad_code'); ?>" cols="20" rows="12"><?php echo $instance['ad_code']; ?></textarea></p>
      
         <p>
      <label for="<?php echo $this->get_field_id( 'image_url' ); ?>"><?php _e('Image Url: ', 'skyali'); ?></label>
      <input type="text" id="<?php echo $this->get_field_id('image_url'); ?>" name="<?php echo $this->get_field_name('image_url'); ?>" value="<?php echo $instance['image_url']; ?>" style="width:100%;"  /></p>
      
         <p>
      <label for="<?php echo $this->get_field_id( 'image_link_address' ); ?>"><?php _e('Image Link Address', 'skyali'); ?></label>
      <input type="text" id="<?php echo $this->get_field_id('image_link_address'); ?>" name="<?php echo $this->get_field_name('image_link_address'); ?>" value="<?php echo $instance['image_link_address']; ?>" style="width:100%;"  /></p>
        
        
        
	<?php
	}
}

?>