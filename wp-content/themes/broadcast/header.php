<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>><head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'skyali' ), max( $paged, $page ) );

	?></title>
    <?php $video_ = 'false';

//check if post has video

    $featuredc = new WP_Query('showposts=1&meta_key=skyali_sticky&orderby=modified');
    if ($featuredc->have_posts()) : 
	$video_ = 'true';
	endif;
	global $video_;

 ?>
 <?php wp_reset_query(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/fonts/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/scripts/css/firstnavigation.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/scripts/css/secondnavigation.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/scripts/css/carousel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/scripts/css/tipTip.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/scripts/css/tabs.css" />
<?php //checks to see which style of the top header is select so the proper css can be applied ?>
<?php if(get_option('skyali_broadcast_header_style') == 2){ echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/scripts/css/styles/bright/top_header.css" />'; } //if user choices to show it bright show css. ?>

<?php //checks to see which style for the categories ?>
<?php if(get_option('skyali_broadcast_categories_style') == 2 ){echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/scripts/css/styles/dark/categories.css" />';} ?>

<?php //styling for the slider ?>
<?php 
if(get_option('skyali_broadcast_slider_style') == 2){
if(get_option('skyali_broadcast_featured_style') == 'slider_long' OR  get_option('skyali_broadcast_featured_style') == '') {
echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/scripts/css/styles/bright/featured_long.css" />';}
elseif(get_option('skyali_broadcast_featured_style') == 'slider'){echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/scripts/css/styles/bright/featured.css" />'; }
elseif(get_option('skyali_broadcast_featured_style') == 'post' OR  $video_ == 'true'){echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/scripts/css/styles/bright/featured_slider_post.css" />';}
}
?>

<?php //footer styling ?>

<?php if(get_option('skyali_broadcast_footer') == 2){echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/scripts/css/styles/bright/footer.css" />'; } ?>

<?php //checks to see which slider is selected so the proper css can be applied ?>
<?php if(get_option('skyali_broadcast_featured_style') != 'slider_long' AND get_option('skyali_broadcast_featured_style') != 'post' AND  $video_ != 'true' AND get_option('skyali_broadcast_featured_style') != '' ) { $featured_slider_style = 'featured_slider.css'; } elseif(get_option('skyali_broadcast_featured_style') == 'slider_long' AND $video_ != 'true' OR get_option('skyali_broadcast_featured_style') == '') { $featured_slider_style = 'featured_long_slider.css'; } elseif(get_option('skyali_broadcast_featured_style') == 'post' OR $video_ == 'true' ){ $featured_slider_style = 'featured_slider_post.css';} ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/scripts/css/<?php echo $featured_slider_style; ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/scripts/css/prettyPhoto.css" />

<!--[if gt IE 7]>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/scripts/css/ie7.css">
<![endif]-->

<!--[if IE]>
       <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/scripts/css/ie.css">
<![endif]-->
<style type="text/css">
/* Custom Css Colors */
.list_category h2{color:#<?php echo get_option('skyali_broadcast_color'); ?> !important;}
.list_post h2{color:#<?php echo get_option('skyali_broadcast_color'); ?> !important;}
#right h2{color:#<?php echo get_option('skyali_broadcast_color'); ?> !important;}
.rightwidget h2 a{color:#<?php echo get_option('skyali_broadcast_color'); ?> !important;}
a.cat_arrow{background:#<?php echo get_option('skyali_broadcast_color'); ?> url('<?php echo get_template_directory_uri();?>/images/category_arrow.png')  !important;}
a:hover.cat_arrow{background:#1f1f1f url('<?php echo get_template_directory_uri();?>/images/category_arrow.png')  !important;}
.list_category h2 a{color:#<?php echo get_option('skyali_broadcast_color'); ?> !important;}
h1.fontface {font: 53px 'ColaborateBoldRegular', Arial, sans-serif; color:#222222;}
#footer h5{color:#<?php echo get_option('skyali_broadcast_color'); ?>; !important}
#left h1{color:#<?php echo get_option('skyali_broadcast_color'); ?>; !important}
a.featured_button{background:#<?php echo get_option('skyali_broadcast_color'); ?> !important;}
.list_post div.readm div.button a{background:#<?php echo get_option('skyali_broadcast_color'); ?> !important;}
</style>
<?php wp_head(); ?>

</head>

<body>

<div id="header_navigation">

<div id="top_navigation">

<?php if ( has_nav_menu( 'top-menu' ) ) : ?>
					<?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'menu_class' => 'firstnav-menu sf-menu', 'container' => '' ) ); ?>
                    <?php else :  ?>

<ul class="firstnav-menu">

<?php wp_list_pages('sort_column=menu_order&depth=6&title_li=&exclude='.check_exclude_top_navigation().'');?>

<?php endif; ?>

</ul><!-- #first-menu -->

<div class="header_right_side">

<p<?php if(get_option('skyali_broadcast_date_header_option') != 'on') { echo ' class="hideobject"'; } ?>><?php echo date('l, M. j, Y'); ?></p>

<span class="timestamp<?php if(get_option('skyali_broadcast_date_header_option') != 'on') { echo ' hideobject';} ?>"><script type="text/javascript" language="JavaScript"><!--
user_time();
//--></script></span>

<ul<?php if(get_option('skyali_broadcast_rss_header_option') != 'on') { echo ' class="hideobject"';} ?>><li><a href="<?php echo home_url() .'?feed=rss2'; ?>"><img src="<?php echo get_template_directory_uri();?>/images/header-rss-icon.png" class="rss_icon" alt="<?php _e('Follow our feed', 'skyali'); ?>" /><?php _e('Subscribe to rss', 'skayli'); ?></a></li></ul>

</div><!--Right Side -->

</div><!-- #top_navigation -->

</div><!-- #header_navigation -->

<div id="header_container"<?php if(get_option('skyali_broadcast_header_pattern') == 2){echo ' class="white_bg"';} ?>>

<div id="header">

<?php site_logo(); ?>

<?php display_468x60(); ?>

</div><!-- #header -->

</div><!-- #header_container -->

<div id="categories_container">

<div id="categories">
 <?php if ( has_nav_menu( 'second-menu' ) ) : ?>
					<?php wp_nav_menu( array( 'theme_location' => 'second-menu', 'menu_class' => 'secondnav-menu sf-js-enabled sf-menu', 'container' => '' ) ); ?>
                    <?php else : ?>
<ul class="secondnav-menu">

<?php
if ( is_home() ) {
	
	$home_cat = ' class="current-cat home_first_line"';
   
} else {
	
	$home_cat = ' class="home_first_line"';
}
?>
<li<?php echo $home_cat; ?>><a href="<?php bloginfo('url'); ?>" class="home_second_line"><?php _e('Home', 'skyali') ?></a></li>
<?php wp_list_categories('title_li=&order=desc&exclude='.check_exclude_categories().''); ?>
</li>
</ul>
<?php endif; ?>
</div><!-- #categories -->

</div><!-- categories container -->

<div id="center">

<div id="container">

<div id="content">

<?php if(get_option('skyali_broadcast_spotlight') != 'disable' ){ include_once('includes/spotlight.php'); } ?>

<?php wp_reset_query(); ?>

<?php if(get_option('skyali_broadcast_featured_style') == 'slider_long' AND $video_ != 'true' OR get_option('skyali_broadcast_featured_style') == ''){ 
if (is_home()) :
 include_once('includes/featured_long.php'); 
 endif; 
 } ?>

<div id="content_bg">

<?php 

if ( is_page_template('template-fullwidth.php') ) { $full = 'class="full_width"'; } else { $full = ''; } 

?>

<div id="left" <?php echo $full; ?>>