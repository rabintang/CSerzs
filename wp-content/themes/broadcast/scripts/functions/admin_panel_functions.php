<?php

//*** ADMIN PANEL OPTIONS ***//
//Page Categories Logo Design, About Us Etc Admin Panel Top Navigation...
function page_categories(){
	if(isset($_GET['p'])){
	$page = htmlentities($_GET['p']);
	$category = htmlentities($_GET['c']);
	}
	else{
		$page = '';
		$category = '';
	}
	$active = 'class="active"';
	if($page == 'general' OR $page == ''){
	echo '<li><a href="admin.php?page=theme_settings&p=general&c=logo_design">标志设置</a></li>'; 
	echo '<li><a href="admin.php?page=theme_settings&p=general&c=theme_skins">主题样式</a></li>';
	echo '<li><a href="admin.php?page=theme_settings&p=general&c=footer">页脚</a></li>';
	echo '<li><a href="admin.php?page=theme_settings&p=general&c=top_navigation">顶部菜单</a></li>';
	echo '<li><a href="admin.php?page=theme_settings&p=general&c=categories">类别</a></li>';
	}
	if($page == 'home_page'){
		echo '<li><a href="admin.php?page=theme_settings&p=home_page&c=featured_posts">推荐</a></li>';
		echo '<li><a href="admin.php?page=theme_settings&p=home_page&c=blog_posts">博客文章</a></li>'; 
		echo '<li><a href="admin.php?page=theme_settings&p=home_page&c=other_categories">其他分类</a></li>'; 
		echo '<li><a href="admin.php?page=theme_settings&p=home_page&c=spotlight">聚焦</a></li>'; 
	}
	
	if($page == 'post_page'){
		echo '<li><a href="admin.php?page=theme_settings&p=post_page&c=blog_img">特色图像</a></li>'; 
		echo '<li><a href="admin.php?page=theme_settings&p=post_page&c=about_author">关于作者</a></li>'; 
		echo '<li><a href="admin.php?page=theme_settings&p=post_page&c=related_news">相关新闻</a></li>';
		echo '<li><a href="admin.php?page=theme_settings&p=post_page&c=comment_section">评论部分</a></li>'; 
		echo '<li><a href="admin.php?page=theme_settings&p=post_page&c=share_icons">分享图标</a></li>'; 
	} 
	
	if($page == 'misc'){
		echo '<li><a href="admin.php?page=theme_settings&p=misc&c=468x60">468 X 60</a></li>'; 
		echo '<li><a href="admin.php?page=theme_settings&p=misc&c=contact_email">联系邮箱</a></li>';
		echo '<li><a href="admin.php?page=theme_settings&p=misc&c=tracking">统计代码</a></li>';
		/*echo '<li><a href="admin.php?page=theme_settings&p=misc&c=social_icons">Social Icons</a></li>';*/
	}
	
}



$theme_name = 'broadcast';

//Get admin option include by page
function get_option_page(){
	if(isset($_GET['c'])){
    $page = htmlentities($_GET['c']);
	} else{
		$page = '';
	}
	if($page == ''){
	include('pages/logo_design.php');
	}
	else{
	include('pages/'.$page.'.php');
}

}

//Admin Page Options

//check if 468 ad is enabled
function skyali_enable_468(){
	if(get_option('skyali_broadcast_468') == 'enable'){
		echo 'checked="checked"';
	}
}
//check if 468 ad is disabled
function skyali_disable_468(){
	if(get_option('skyali_broadcast_468') == 'disable'){
		echo 'checked="checked"';
	}
}

//** LOGO DESIGN PAGE OPTIONS  **//


//check logo design option boxes
function skyali_logo_image_options(){
	if(get_option('skyali_broadcast_logo_text') == 'no'){
		echo 'selected="selected"';
	}
}

//if skyali_logo_text_option says yes check box.
function skyali_logo_text_option(){
	if(get_option('skyali_broadcast_logo_text') == 'yes'){
		echo 'selected="selected"';
	}
}

//** FOOTER PAGE **//

//footer widget option enabled
function skyali_footer_widget_options_e(){
	if(get_option('skyali_broadcast_footer_widget') == 'enable')
	{
     echo 'selected="selected"';
		}
}

//footer widget options disabled
function skyali_footer_widget_options_d(){
	if(get_option('skyali_broadcast_footer_widget') == 'disable')
	{
		echo 'selected="selected"';
	}
}


//other categories

//footer widget option enabled
function skyali_other_categories_enable(){
	if(get_option('skyali_broadcast_other_categories') == 'enable')
	{
     echo 'selected="selected"';
		}
}

//footer widget options disabled
function skyali_other_categories_disable(){
	if(get_option('skyali_broadcast_other_categories') == 'disable')
	{
		echo 'selected="selected"';
	}
}

//share icons option enabled
function skyali_share_icons_e(){
	if(get_option('skyali_broadcast_share_icons') == 'enable')
	{
     echo 'selected="selected"';
		}
}

//share icons options disabled
function skyali_share_icons_d(){
	if(get_option('skyali_broadcast_share_icons') == 'disable')
	{
		echo 'selected="selected"';
	}
}

//spotlight option enabled
function skyali_spotlight_e(){
	if(get_option('skyali_broadcast_spotlight') == 'enable')
	{
     echo 'selected="selected"';
		}
}

//spotlight options disabled
function skyali_spotlight_d(){
	if(get_option('skyali_broadcast_spotlight') == 'disable')
	{
		echo 'selected="selected"';
	}
}


//other news option enabled
function skyali_other_news_e(){
	if(get_option('skyali_broadcast_other_news') == 'enable')
	{
     echo 'selected="selected"';
		}
}

//other news options disabled
function skyali_other_news_d(){
	if(get_option('skyali_broadcast_other_news') == 'disable')
	{
		echo 'selected="selected"';
	}
}

//comment section option enabled
function skyali_comment_section_e(){
	if(get_option('skyali_broadcast_comment_section') == 'enable')
	{
     echo 'selected="selected"';
		}
}

//comment section option disabled
function skyali_comment_section_d(){
	if(get_option('skyali_broadcast_comment_section') == 'disable')
	{
		echo 'selected="selected"';
	}
}


//related news option enabled
function skyali_related_enable(){
	if(get_option('skyali_broadcast_related_news') == 'enable')
	{
     echo 'selected="selected"';
		}
}

//related news options disabled
function skyali_related_disable(){
	if(get_option('skyali_broadcast_related_news') == 'disable')
	{
		echo 'selected="selected"';
	}
}

//check if 300 ad is enabled
function skyali_enable_300(){
	if(get_option('skyali_broadcast_300') == 'enable'){
		echo 'checked="checked"';
	}
}
//check if 300 ad is disabled
function skyali_disable_300(){
	if(get_option('skyali_broadcast_300') == 'disable'){
		echo 'checked="checked"';
	}
}

//tabs option enabled
function skyali_tabs_enable(){
		if(get_option('skyali_broadcast_tabs') == 'enable')
	{
     echo 'checked="checked"';
		}
}

//tabs option disable
function skyali_tabs_disable(){
	if(get_option('skyali_broadcast_tabs') == 'disable')
	{
		echo 'checked="checked"';
	}
}

//featured option enable 
function skyali_featured_enable(){
	if(get_option('skyali_broadcast_featured') == 'enable')
	{
     echo 'checked="checked"';
		}
}

//featured option disable 
function skyali_featured_disable(){
	if(get_option('skyali_broadcast_featured') == 'disable')
	{
		echo 'checked="checked"';
	}	
}

//featured style slider
function skyali_featured_style_slider(){
	if(get_option('skyali_broadcast_featured_style') == 'slider')
	{
     echo 'checked="checked"';
		}
}

//featurd style post
function skyali_featured_style_post(){
	if(get_option('skyali_broadcast_featured_style') == 'post')
	{
		echo 'checked="checked"';
	}	
}

function skyali_featured_style_slider_long(){
	if(get_option('skyali_broadcast_featured_style') == 'slider_long'){
		echo 'checked="checked"';
	}
}

//blog style 1
function skyali_blog_style_1(){
	if(get_option('skyali_broadcast_blog_style') == '1')
	{
     echo 'checked="checked"';
		}
}

//blog style 2
function skyali_blog_style_2(){
	if(get_option('skyali_broadcast_blog_style') == '2')
	{
		echo 'checked="checked"';
	}	
}

//stylesheet option
function skyali_option_style_1_checked(){
	if(get_option('skyali_broadcast_stylesheet') == '1'){
		echo 'selected="selected"';
	}
}
function skyali_option_style_2_checked(){
	if(get_option('skyali_broadcast_stylesheet') == '2'){
		echo 'selected="selected"';
	}
}


//stylesheet color option

function skyali_option_color_1_checked(){
	if(get_option('skyali_broadcast_color') == '1'){
		echo 'selected="selected"';
	}
}
function skyali_option_color_2_checked(){
	if(get_option('skyali_broadcast_color') == '2'){
		echo 'selected="selected"';
	}
}

function skyali_option_color_3_checked(){
	if(get_option('skyali_broadcast_color') == '3'){
		echo 'selected="selected"';
	}
}

function skyali_option_color_4_checked(){
	if(get_option('skyali_broadcast_color') == '4'){
		echo 'selected="selected"';
	}
}

function skyali_option_color_5_checked(){
	if(get_option('skyali_broadcast_color') == '5'){
		echo 'selected="selected"';
	}
}

function skyali_option_color_6_checked(){
	if(get_option('skyali_broadcast_color') == '6'){
		echo 'selected="selected"';
	}
}

function skyali_option_color_7_checked(){
	if(get_option('skyali_broadcast_color') == '7'){
		echo 'selected="selected"';
	}
}



//check if bg pattern is regular wood 
function skyali_bg_pattern_wood(){
	if(get_option('skyali_broadcast_bg_pattern') == 'wood')
	{
     echo 'selected="selected"';
		}
}

//check if bg pattern is grey wood
function skyali_bg_pattern_grey_wood(){
	if(get_option('skyali_broadcast_bg_pattern') == 'grey_wood')
	{
		echo 'selected="selected"';
	}	
}



//get share bar options enabled or disabled
function skyali_share_enable(){
	if(get_option('skyali_broadcast_share') == 'enable'){
		echo 'checked="checked"';
	}
}
function skyali_share_disable(){
	if(get_option('skyali_broadcast_share') == 'disable'){
		echo 'checked="checked"';
	}
}
//get author option  enable or disable
function skyali_author_enable(){
	if(get_option('skyali_broadcast_about_author') == 'enable'){
		echo 'selected="selected"';
	}
}
function skyali_author_disable(){
	if(get_option('skyali_broadcast_about_author') == 'disable'){
		echo 'selected="selected"';
	}
}

//get blog image option enable or disable
function skyali_blog_img_enable(){
	if(get_option('skyali_broadcast_blog_img') == 'enable'){
		echo 'selected="selected"';
	}
}
function skyali_blog_img_disable(){
	if(get_option('skyali_broadcast_blog_img') == 'disable'){
		echo 'selected="selected"';
	}
}

//check if slider is disabled or endabled
function skyali_slider_enable(){
	if(get_option('skyali_broadcast_slider') == 'enable'){
		echo 'checked="checked"';
	}
}

function skyali_slider_disable(){
	if(get_option('skyali_broadcast_slider') == 'disable'){
		echo 'checked="checked"';
	}
}

//check if slider is disabled or endabled
function skyali_related_articles_enable(){
	if(get_option('skyali_broadcast_related_articles') == 'enable'){
		echo 'checked="checked"';
	}
}

function skyali_related_articles_disable(){
	if(get_option('skyali_broadcast_related_articles') == 'disable'){
		echo 'checked="checked"';
	}
}

//recent projects option enabled
function skyali_social_icons_options_e(){
	if(get_option('skyali_broadcast_social_icons') == 'enable')
	{
     echo 'selected="selected"';
		}
}

//recent projects options disabled
function skyali_social_icons_options_d(){
	if(get_option('skyali_broadcast_social_icons') == 'disable')
	{
		echo 'selected="selected"';
	}
}


//social icons functions
function skyali_twitter_option_checked(){
	if(get_option('skyali_broadcast_twitter_option') == 'on'){
	echo 'checked="checked"';
	}
}

function skyali_facebook_option_checked(){
	if(get_option('skyali_broadcast_facebook_option') == 'on'){
		echo 'checked="checked"';
	}
}

function skyali_rss_option_checked(){
	if(get_option('skyali_broadcast_rss_option') == 'on'){
		echo 'checked="checked"';
	}
}

//top header display functions
function skyali_rss_header_option_checked(){
	if(get_option('skyali_broadcast_rss_header_option') == 'on'){
	echo 'checked="checked"';
	}
}

function skyali_date_header_option_checked(){
	if(get_option('skyali_broadcast_date_header_option') == 'on'){
	echo 'checked="checked"';
	}
}



//top header style checker

function skyali_header_1_checked(){
	if(get_option('skyali_broadcast_header_style') == '1'){
		echo 'selected="selected"';
	}
}

function skyali_header_2_checked(){
	if(get_option('skyali_broadcast_header_style') == '2'){
		echo 'selected="selected"';
	}
}

//categories style checker

function skyali_categories_1_checked(){
	if(get_option('skyali_broadcast_categories_style') == '1'){
		echo 'selected="selected"';
	}
}

function skyali_categories_2_checked(){
	if(get_option('skyali_broadcast_categories_style') == '2'){
		echo 'selected="selected"';
	}
}

//slider style checker

function skyali_slider_1_checked(){
	if(get_option('skyali_broadcast_slider_style') == '1'){
		echo 'selected="selected"';
	}
}

function skyali_slider_2_checked(){
	if(get_option('skyali_broadcast_slider_style') == '2'){
		echo 'selected="selected"';
	}
}

//footer style checker

function skyali_footer_1_checked(){
	if(get_option('skyali_broadcast_footer') == '1'){
		echo 'selected="selected"';
	}
}

function skyali_footer_2_checked(){
	if(get_option('skyali_broadcast_footer') == '2'){
		echo 'selected="selected"';
	}
}

//header pattern style

function skyali_header_pattern_1_checked(){
	if(get_option('skyali_broadcast_header_pattern') == '1'){
		echo 'selected="selected"';
	}
}

function skyali_header_pattern_2_checked(){
	if(get_option('skyali_broadcast_header_pattern') == '2'){
		echo 'selected="selected"';
	}
}





//*** END ADMIN PANEL OPTIONS ***//
?>