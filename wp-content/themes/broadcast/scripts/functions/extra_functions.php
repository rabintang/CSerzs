<?php

//*** PHP FUNCTION INCLUDES ***//
include_once('admin_panel_functions.php'); //functins for the admin panel
include_once('display_functions.php'); //all the display options for disable, exclude, etc...
include_once('widget_functions.php');// all of our widget function
include_once('post_options.php'); // sticky option, featured and slider option in the post/edit page.
include_once('shortcodes.php'); // shortcodes

//** EXTRA FUNCTIONS **//

function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
	
}

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

function skyali_load_scripts(){
	if (!is_admin()) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ''.get_template_directory_uri().'/scripts/js/jquery-1.5.2.min.js', 'jquery');
    wp_enqueue_script( 'jquery' );
	
	wp_register_script('jqueryui', ''.get_template_directory_uri().'/scripts/js/jquery-ui.min.js', 'jquery');
    wp_enqueue_script( 'jqueryui' );
	
	wp_register_script('superfish', ''.get_template_directory_uri().'/scripts/js/superfish.js', 'jquery');
	wp_enqueue_script('superfish');
	
	wp_register_script('custom', ''.get_template_directory_uri().'/scripts/js/custom.js', 'jquery');
	wp_enqueue_script('custom');
	
	wp_register_script('prettyphoto', ''.get_template_directory_uri().'/scripts/js/jquery.prettyPhoto.js', 'jquery');
	wp_enqueue_script('prettyphoto');
	
	wp_register_script('tabs', ''.get_template_directory_uri().'/scripts/js/tabs.js', 'jquery');
	wp_enqueue_script('tabs');
	
	wp_register_script('carousel', ''.get_template_directory_uri().'/scripts/js/jquery.carouFredSel-4.3.3-packed.js', 'jquery');
	wp_enqueue_script('carousel');
	
	wp_register_script('easing', ''.get_template_directory_uri().'/scripts/js/jquery.easing.1.3.js', 'jquery');
	wp_enqueue_script('easing');
	
	wp_register_script('tooltip', ''.get_template_directory_uri().'/scripts/js/jquery.tipTip.minified.js', 'jquery');
	wp_enqueue_script('tooltip');
	
	wp_register_script('tabify', ''.get_template_directory_uri().'/scripts/js/jquery.tabify.js', 'jquery');
	wp_enqueue_script('tabify');
	
	
	}
}

add_action('init', 'skyali_load_scripts');

?>