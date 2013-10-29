<?php $i = 0; ?>
<?php $category_array = get_option('skyali_broadcast_add_categories'); ?>
<?php if($category_array != false){ ?>
<?php foreach ($category_array as $cat) { ?>

<?php //$category_id = get_cat_ID($category_array[$i]); ?>
<?php $category_id = $category_array[$i]; ?>
<?php $cat_name = get_cat_name($category_array[$i]); ?>
<?php $cat_link = get_category_link($category_array[$i]); ?>
<?php   $category_i = get_cat_ID( ''.$cat_name.'' ); ?>
<?php $category_l = get_category_link( $category_id ); ?>

<?php $featured_cats = new WP_Query('showposts=1&cat='.$category_id.''); while($featured_cats ->have_posts()) : $featured_cats->the_post();  ?>

<div class="list_category">

<div class="heading"><h2><?php echo $cat_name; ?></h2><a href="<?php echo $category_l?>" class="cat_arrow"></a></div>

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl =get_template_directory_uri() ; //$image_url = str_replace($blogurl, '', $image_url); ?>

<div class="image"><a href="<?php the_permalink(); ?>" ><img src="<?php echo get_template_directory_uri() ;?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=274&amp;h=131&amp;zc=1&amp;q=100" alt="<?php echo the_title(); ?>" width="274" height="131" class="imgf" /></a></div><!-- #image -->

<?php } ?>

<div class="information">

<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

<span class="date"><?php _e('Posted On:', 'skyali'); ?> <?php the_time('F d, '); ?><?php the_time(' Y'); ?></span>

<p><?php echo excerpt(25); ?><?php _e(' [...]', 'skyali'); ?></p>

</div><!-- #information -->

</div><!-- #list_category -->

<?php endwhile; ?>

<?php $i++; ?>

<?php 
}//ends for each loop  
}// end if
else
{
	echo '<h3 style="float:left; padding:10px; font-size:13px; color:red;">没有选择类别, 请到后台管理面板进行设置. 外观 >> Broadcast主题设置 >>  首页 >> 博客文章 >> 博客样式一 >> 选择分类 >> 保存设置. </h3>';
} 
?>

<?php include_once('other_news.php'); ?>