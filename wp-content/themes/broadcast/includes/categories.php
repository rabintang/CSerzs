<?php wp_reset_query(); ?>

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
<?php $category_id = str_replace("x3", "", $category_id); ?>
<?php $featured_cats = new WP_Query('showposts=1&cat='.$category_id.''); while($featured_cats ->have_posts()) : $featured_cats->the_post();  ?>

<?php if($i == 0) { $list_category_style = 'list_category_left';} elseif($i == 1) { $list_category_style = 'list_category_right';} else { $list_category_style = 'list_category_middle'; }  ?>

<div class="list_category <?php echo $list_category_style; ?>">

<div class="heading"><h2><?php echo $cat_name; ?></h2>

</div><!-- list_category //heading only -->

<?php if($i == 0){ $list_category_type = 'left_'; } elseif($i == 1) { $list_category_type = 'right_';} else { $list_category_type = 'middle_'; } ?>

<div class="<?php echo $list_category_type; ?>list_category_new">

<?php if($i == 0 OR $i == 1){$list_category_type_image_w = '260'; $list_category_type_image_h = '135';} else { $list_category_type_image_w = '363'; $list_category_type_image_h = '135';} ?>

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl =get_template_directory_uri() ; //$image_url = str_replace($blogurl, '', $image_url); ?>

<div class="image"><a href="<?php the_permalink(); ?>" ><img src="<?php echo get_template_directory_uri() ;?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=<?php echo $list_category_type_image_w; ?>&amp;h=<?php echo $list_category_type_image_h; ?>&amp;zc=1&amp;q=100" alt="<?php echo the_title(); ?>" width="<?php echo $list_category_type_image_w; ?>" height="<?php echo $list_category_type_image_h; ?>" class="imgf" /></a></div><!-- #image -->

<?php } ?>

<div class="title"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div><!-- #title -->

<span class="date"><?php the_time('F d, '); ?><?php the_time(' Y'); ?> -  <?php comments_popup_link(__('(0) comments', 'framework'), __('1 Comment', 'skyali'), __('% Comments', 'skyali')); ?></span>

<p><?php if($i == 0 or $i == 1) { echo excerpt(20);} else { echo excerpt(32);  } ?><?php  _e(' [...]', 'skyali'); ?></p>

</div><!-- #list_category_new -->

<div class="right_side">

<?php $loop_num = 0 ?>

<?php $featured_thumb = new WP_Query('showposts=3&cat='.$category_id.''); while($featured_thumb ->have_posts()) : $featured_thumb->the_post(); //query for thumbs ?>

<?php if($loop_num != 0){ ?>

<?php if($loop_num == 2){ $no_margin_bottom = 'no_margin_bottom'; } else {$no_margin_bottom = '';} ?>

<div class="small-listing <?php //echo $no_margin_bottom; ?>">

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl = get_bloginfo('url'); $image_url = str_replace($blogurl, '', $image_url); ?>

<div class="thumb">

<?php if($i == 0 OR $i == 1) { $small_listing_thumb_w = '71'; $small_listing_thumb_h = '61'; } else { $small_listing_thumb_w = '190'; $small_listing_thumb_h = '74'; }   ?>

<a href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=<?php echo $small_listing_thumb_w; ?>&amp;h=<?php echo $small_listing_thumb_h; ?>&amp;zc=1&amp;q=100" alt="<?php echo the_title(); ?>" <?php //echo 'class="shareimg"'; ?> border="0" /></a>

</div><!-- #thumb --><?php } ?>

<div class="description"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4><span class="date"><?php the_time('F d, '); ?><?php the_time(' Y'); ?></span></div><!-- #description -->

</div><!-- #small-listing -->


<?php } ?>

<?php $loop_num++; ?>

<?php endwhile; ?>

</div><!-- #right -->

<?php //end thumb loop here ?>

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
<?php include_once('other_categories.php'); ?>
<?php //include_once('other_news.php'); ?>