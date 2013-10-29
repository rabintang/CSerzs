<?php /*Short Code Functions */ ?>
<?php 

function shortcode_whitebutton( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'link'      => '#',
        ), $atts));
		
	return '<div class="shortcode_button"><div class="white_button"><a href="'.$link.'" class="imgf">' . do_shortcode($content) . '</a></div></div><!-- #shortcode_button -->';
}

add_shortcode('whitebutton', 'shortcode_whitebutton');

function shortcode_blackbutton( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'link'      => '#',
        ), $atts));
   return '<div class="shortcode_button"><div class="black_button"><a href="'.$link.'" class="imgf">' . do_shortcode($content) . '</a></div></div><!-- #shortcode_button -->';
}

add_shortcode('blackbutton', 'shortcode_blackbutton');

/*** Align Image Right ***/

function shortcode_right_image($atts, $content = null){
	extract(shortcode_atts(array(
	'link' => '#'), $atts));
	return '<a href="'.$link.'"><img src="'.do_shortcode($content).'" class="imgf image_border image_right" /></a>';
}

add_shortcode('right_image', 'shortcode_right_image');


/*** Align Image Left ***/

function shortcode_left_image($atts, $content = null){
	extract(shortcode_atts(array(
	'link' => '#'), $atts));
	return '<a href="'.$link.'"><img src="'.do_shortcode($content).'" class="imgf image_border image_left" /></a>';
}

add_shortcode('left_image', 'shortcode_left_image');


/*** Image Lightbox ***/

function shortcode_lightbox($atts, $content = null){
	extract(shortcode_atts(array(
	'url' => '#', 'title' => ''),
	 $atts));
	 if (!empty($title)){ $alt = 'alt="'.$title.'"';} else{ $alt = ''; }
	return '<a href="'.$url.'" rel="Prettyphoto"><img src="'.do_shortcode($content).'" class="image_border imgf" '.$alt.' /></a>';
}

add_shortcode('lightbox', 'shortcode_lightbox');



function shortcode_highlight( $atts, $content = null ) {
   return '<span class="shortcode_highlight">' . do_shortcode($content) . '</span>';
}

add_shortcode('highlight', 'shortcode_highlight');


function shortcode_line( $atts, $content = null)
{

   return '<div class="line"></div>';
}
add_shortcode('line', 'shortcode_line');


function shortcode_dropcap( $atts, $content = null ) {
   return '<span class="dropcap">' . do_shortcode($content) . '</span>';
}

add_shortcode('dropcap', 'shortcode_dropcap');



?>