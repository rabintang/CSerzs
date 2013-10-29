<?php
// create custom plugin settings menu
add_action('admin_menu', 'skyali_create_menu');

function skyali_create_menu() {

	//create new top-level menu
	add_theme_page('Theme Settings', 'Broadcast主题设置', 'administrator', 'theme_settings', 'skyali_settings_page', get_template_directory_uri().'/images/settings.png');

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}
function register_mysettings() {
	if(isset($_GET['p'])){
	$page = htmlentities($_GET['p']);
	$category = htmlentities($_GET['c']);
	}
	//register our settings
	//logo design page
	if(!empty($_POST['skyali_broadcast_logo_text']) OR !empty($_POST['skyali_broadcast_logo_url'])){
	register_setting('skyali-settings-group', 'skyali_broadcast_logo_text');
	register_setting('skyali-settings-group', 'skyali_broadcast_logo_url');
	}
	
	if(!empty($_POST['theme_skin_checker'])){
	    register_setting('skyali-settings-group', 'skyali_broadcast_stylesheet');
		register_setting('skyali-settings-group', 'skyali_broadcast_color');
		register_setting('skyali-settings-group', 'skyali_broadcast_bg_pattern');
		register_setting('skyali-settings-group', 'skyali_broadcast_bg_glow');
	}
	
	if(!empty($_POST['460x60_checker'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_468');
		register_setting('skyali-settings-group', 'skyali_broadcast_468_ad_code');
		register_setting('skyali-settings-group', 'skyali_broadcast_468_image_url');
		register_setting('skyali-settings-group', 'skyali_broadcast_468_image_link_address');
	}
	
	//footer page
	if(!empty($_POST['skyali_broadcast_footer_widget_checker'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_footer_widget');
	}
	if(!empty($_POST['check_exclude_top_navigation'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_exclude_top_navigation');
		register_setting('skyali-settings-group', 'skyali_broadcast_rss_header_option');
		register_setting('skyali-settings-group', 'skyali_broadcast_date_header_option');
	}
	
	if(!empty($_POST['tracking_checker'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_tracking');
		
	}
	
	if(!empty($_POST['slider_check'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_slider');
		register_setting('skyali-settings-group', 'skyali_broadcast_nivo_animation');
		register_setting('skyali-settings-group', 'skyali_broadcast_nivo_speed');
		register_setting('skyali-settings-group', 'skyali_broadcast_slider_caption');
	}
	
	if(!empty($_POST['blog_img_checker'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_blog_img');
}

    if(!empty($_POST['about_author_checker'])){
	   register_setting('skyali-settings-group', 'skyali_broadcast_about_author');	
}
    if(!empty($_POST['contact_checker'])){
       register_setting('skyali-settings-group', 'skyali_broadcast_contact_email');
}

    if(!empty($_POST['search_bar_checker'])){
	   register_setting('skyali-settings-group', 'skyali_broadcast_search_bar');
}


    if(!empty($_POST['social_icons_checker'])){
	   register_setting('skyali-settings-group', 'skyali_broadcast_social_icons');
	   register_setting('skyali-settings-group', 'skyali_broadcast_twitter_username');
	   register_setting('skyali-settings-group', 'skyali_broadcast_facebook_username');
	   register_setting('skyali-settings-group', 'skyali_broadcast_twitter_option');
	   register_setting('skyali-settings-group', 'skyali_broadcast_facebook_option');
	   register_setting('skyali-settings-group', 'skyali_broadcast_rss_option');
}

	if(!empty($_POST['blog_style_check'])){
        register_setting('skyali-settings-group', 'skyali_broadcast_blog_style');
		register_setting('skyali-settings-group', 'skyali_broadcast_add_categories');
	}
	
	if(!empty($_POST['check_exclude_categories'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_exclude_categories');
	}
	
	if(!empty($_POST['related_news_checker'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_related_news');
	}
	
	if(!empty($_POST['comment_section_checker'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_comment_section');
	}
	
	if(!empty($_POST['share_icons_checker'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_share_icons');
	}
	
	if(!empty($_POST['other_news_checker'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_other_news');
	}
	if(!empty($_POST['featured_check'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_featured');
		register_setting('skyali-settings-group', 'skyali_broadcast_featured_style');
		register_setting('skyali-settings-group', 'skyali_broadcast_featured_cats');
	}
	
	if(!empty($_POST['theme_skin_checker'])){
		register_setting('skyali-settings-group', 'skyali_broadcast_header_style');
		register_setting('skyali-settings-group', 'skyali_broadcast_categories_style');
		register_setting('skyali-settings-group', 'skyali_broadcast_slider_style');
		register_setting('skyali-settings-group', 'skyali_broadcast_footer');
		register_setting('skyali-settings-group', 'skyali_broadcast_color');
		register_setting('skyali-settings-group', 'skyali_broadcast_header_pattern');
	    /*register_setting('skyali-settings-group', 'skyali_broadcast_stylesheet');*/
		/*register_setting('skyali-settings-group', 'skyali_broadcast_bg_pattern');*/
	}
	
	if(!empty($_POST['spotlight_checker'])){
	register_setting('skyali-settings-group', 'skyali_broadcast_spotlight');
	}
	
		if(!empty($_POST['other_categories_check'])){
	register_setting('skyali-settings-group', 'skyali_broadcast_other_categories');
	register_setting('skyali-settings-group', 'skyali_broadcast_other_categories_select');
	}

}

function my_admin_scripts() {
wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');
wp_register_script('my-upload', get_template_directory_uri().'/scripts/admin/js/my-script.js', array('jquery','media-upload','thickbox'));
wp_enqueue_script('my-upload');
}

function my_admin_styles() {
wp_enqueue_style('thickbox');
}

if (isset($_GET['page']) && $_GET['page'] == 'theme_settings') {
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');

}

function skyali_settings_page() {
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ; ?>/scripts/admin/css/style.css" />

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ; ?>/scripts/admin/css/colorpicker.css" />

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ; ?>/scripts/admin/css/layout.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ; ?>/scripts/admin/js/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ; ?>/scripts/admin/js/eye.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() ; ?>/scripts/admin/js/utils.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() ; ?>/scripts/admin/js/layout.js?ver=1.0.2"></script> 

<?php include_once('includes/top_navigation.js.php'); //Include Top Navigation Javascript Functions ?>

<div id="container">

<div id="topnavigation">

<ul id="topnav">
   <li><a href="admin.php?page=theme_settings">全局配置</a></li>
   <li><a href="admin.php?page=theme_settings&p=home_page&c=featured_posts">首页</a></li>
   <li><a href="admin.php?page=theme_settings&p=post_page&c=blog_img">文章页</a></li>
   <li><a href="admin.php?page=theme_settings&p=misc&c=468x60">杂项</a></li>
</ul>

<img src="<?php echo get_template_directory_uri() ; ?>/scripts/admin/css/images/london-panel.png" border="0" />

</div><!-- TopNavigation Closer -->

<div id="category">

<div class="holder">

<ul>

<?php page_categories(); ?>
 
</ul>

</div>
<a href="<?php echo get_template_directory_uri() ; ?>/help/index.html" target="blank" class="needhelp">需要帮助?</a>

<a href="http://www.weidea.net" target="_blank" class="morethemes">更多主题</a>

</div><!-- Category Closer -->

<form method="post" action="options.php" id="skyali_form">


<?php settings_fields( 'skyali-settings-group' ); ?> 

<div id="content">

<div id="info">

<div class="infoicon"></div><!-- Icon Closer -->

<?php get_option_page(); ?>

<br />

<input type="submit" class="save"  id="save_settings" value="Save Changes"/>

</div><!-- Options Closer -->

</div><!-- Content Closer -->

</form>



</div><!-- Container Closer -->

<?php } ?>