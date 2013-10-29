<?php
//*** SHOW PAGE FUNCTIONS ***//

//site logo text or image
function site_logo(){
	if(get_option('skyali_broadcast_logo_text') == 'yes'){ echo '<h1 class="site_logo_text fontface">'.get_bloginfo('name').'</h1>'; } 
	else {echo '<a href="'.get_bloginfo('url').'">'; if(get_option('skyali_broadcast_logo_url') != '')
  { echo '<img src="'.get_option('skyali_broadcast_logo_url').'"  border="0" alt="'.get_bloginfo('name').'" class="logo"  />';}
  elseif(get_option('skyali_broadcast_color') != ''){echo '<img src="'.get_template_directory_uri().'/images/logo_custom_color.png" width="262" height="66" class="logo" alt="'.get_bloginfo('name').'"/>';}
	else{ echo'<img src="'.get_template_directory_uri().'/images/logo.png" width="262" height="66" class="logo" alt="'.get_bloginfo('name').'"/>'; }

	echo'</a>';
	
 }
}

//display 468 x 60 ad
function display_468x60(){
	$image_468 = get_option('skyali_broadcast_468_image_url');
	$disable = '';
	if(get_option('skyali_broadcast_468') == 'disable'){
	$disable = 'hideobject';
	}
	echo '<div class="top_ad '.$disable.'">';
	$ad_code = get_option('skyali_broadcast_468_ad_code');
	if(!empty($ad_code))
	{
	echo $ad_code;	
    }
    elseif(!empty($image_468)){
	echo '<a href="'.get_option('skyali_broadcast_468_image_link_address').'"><img src="'.get_option('skyali_broadcast_468_image_url').'" alt="468 X 60"  /></a>';
	}
	else{
	echo '<img src="'.get_template_directory_uri().'/images/468-ad.png" alt="468 X 60" />';
	}
	echo'</div><!-- #ad 468x60 closer -->';
}


//featured option
function featured_option(){
	if(get_option('skyali_broadcast_featured') == 'disable'){
		echo 'class="hideobject"';
	}
}

$video_ = 'false';

//check if post has video

    $featuredc = new WP_Query('showposts=1&meta_key=skyali_sticky&orderby=modified');
    if ($featuredc->have_posts()) : 
	$video_ = 'true';
	endif;
	global $video_;



//footer widget option
function footer_widget_option(){
	if(get_option('skyali_broadcast_footer_widget') == 'disable'){
		echo 'class="hideobject"';
	}
}

//other categories widget option
function other_categories_option(){
	if(get_option('skyali_broadcast_other_categories') == 'disable'){
		echo 'hideobject';
	}
}

//get pages to exclude from database
function exclude_top_navigation(){
	$exclude =  get_option('skyali_broadcast_exclude_top_navigation');
    $exclude_new = implode(',', $exclude);
    return $exclude_new;
}

//check and see if there is any pages to exclude in the top navigation if not then do not display the function
function check_exclude_top_navigation(){
	$check_exclude = get_option('skyali_broadcast_exclude_top_navigation');
	if(!empty($check_exclude)){
		return exclude_top_navigation();	
	}
}

//get categories to exclude from datebase
function exclude_categories(){
	$exclude_c = get_option('skyali_broadcast_exclude_categories');
	$exclude_c_new = implode(',', $exclude_c);
	return $exclude_c_new;
}

//check and see iff there is any categories to exclude.
function check_exclude_categories(){
	$check_exclude = get_option('skyali_broadcast_exclude_categories');
	if(!empty($check_exclude)){
		return exclude_categories();
	}
}


//disable author
function disable_author(){
	if(get_option('skyali_broadcast_about_author') == 'disable'){
		echo 'hideobject';
	}
}

//disable related news
function disable_related_news(){
	if(get_option('skyali_broadcast_related_news') == 'disable'){
		echo 'hideobject';
	}
}

//disable share icons
function disable_share_icons(){
	if(get_option('skyali_broadcast_share_icons') == 'disable'){
		echo 'hideobject';
	}
}

//disable other news
function disable_other_news(){
	if(get_option('skyali_broadcast_other_news') == 'disable'){
		echo 'hideobject';
	}
}


//disable blog image
function disable_blog_img(){
	if(get_option('skyali_broadcast_blog_img') == 'disable'){
		echo 'hideobject';
	}
}

function social_icons(){
	if(get_option('skyali_broadcast_social_icons') == 'disable'){
		echo 'hideobject';
	}
}

function twitter_social_icon(){
	if(get_option('skyali_broadcast_twitter_option') == ''){
		echo 'class="hideobject"';
	}
}

function facebook_social_icon(){
	if(get_option('skyali_broadcast_facebook_option') == ''){
		echo 'class="hideobject"';
	}
}

function rss_social_icon(){
	if(get_option('skyali_broadcast_rss_option') == ''){
		echo 'class="hideobject"';
	}
}

function skyali_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
	 
	 //<div class="pagination"><a href="#" class="active">1</a><a href="#" class="link imgf">2</a><a href="#" class="link imgf">3</a></div><!-- #pagination -->
     {
         echo "<div class=\"pagging\">";
		 echo "<div class=\"pagging_inside\">";
         //if($paged > 2 && $paged > $range+1 && $showitems < $pages)echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         //if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<a href=\"#\" class=\"active imgf\">".$i."</a>":"<a href='".get_pagenum_link($i)."' class=\"imgf\" >".$i."</a>";
             }
         }

        // if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
        // if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
		echo "</div><!-- pagging_inside -->";
         echo "</div><!-- #pagging -->\n";
     }
}


add_filter('get_avatar','change_avatar_css');

function change_avatar_css($class) {
$class = str_replace("class='avatar", "class='image_border", $class) ;
return $class;
}

add_filter('comment_reply_link', 'change_reply_css');

function change_reply_css($class){
	$class = str_replace("class='comment-reply-link", "class='imgf reply round_edges", $class);
	return $class;
}


//add class's/id's to the previous/next links
add_filter('next_posts_link_attributes', 'posts_link_attributes');

add_filter('previous_posts_link_attributes', 'posts_link_attributes');
 
function posts_link_attributes(){
    return 'class="submit-black nav"';
}

//add class's/id's to the previus/next comment links
add_filter('previous_comments_link_attributes', 'comments_link_attributes');
add_filter('next_comments_link_attributes', 'comments_link_attributes');

function comments_link_attributes(){
	return 'class="submit-black nav"';
}


function skyali_comment_form_default_fields( $fields ) {
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
			
	$fields['author'] = 
		'<div class="form-row comment-form-author">' .
			'<label for="author">'.__( 'Name' ). 
			( $req ? ' <em class="meta">'.__('(required)', 'skyali').'</em>' : '' ).
			'</label>'.
            '<input class="u-4" id="author" name="author" type="text" value="'.
            esc_attr( $commenter['comment_author'] ) . '" size="30" tabindex="1" />'.
 		'</div>';
            
	$fields['email'] =
		'<div class="form-row comment-form-email">'.
        	'<label for="email">'.__( 'Email' ).
            ( $req ? ' <em class="meta">'.__('(required)', 'skyali').'</em>' : '' ).'</label>'.
            '<input class="u-4 " id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" tabindex="2" />'.
   		'</div>';
                
    $fields['url'] =
    	'<div class="form-row comment-form-url">'.	 
        	'<label for="url">'.__( 'Website' ).'</label>' .
            '<input class="u-4" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" tabindex="3" />'.
		'</div>';
                
	return $fields;
}

add_filter('comment_form_default_fields', 'skyali_comment_form_default_fields');

function skyali_comment_form_field_comment( $field ) {
	$field =
    	'<div class="form-row comment-form-comment">' .
	        '<label for="comment">' . __( 'Comment' ) . ' <em class="meta">'.__('(required)', 'btp_theme').'</em></label>' .
    	    '<textarea class="u-8" id="comment" name="comment" cols="45" rows="8" tabindex="4"></textarea>' .
		'</div>';	
		
	return $field;
}

add_filter('comment_form_field_comment', 'skyali_comment_form_field_comment');


$content_width = 900;

?>