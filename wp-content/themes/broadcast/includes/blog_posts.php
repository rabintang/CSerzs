<div class="list_category unique_margin_bottom">

<div class="heading"><h2><?php _e('Latest News', 'skyali'); ?></h2></div>

</div><!-- #header -->

<?php $check_feature_style = get_option('skyali_broadcast_featured_style'); ?>

<?php $i = 0; ?>

<?php while(have_posts()): the_post(); ?>

<div class="list_post">

<?php if($check_feature_style == 'post' && $i == 0 && is_home()){} else { ?>

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl = get_template_directory_uri() ; $image_url = str_replace($blogurl, '', $image_url); ?>

<div class="image"><a href="<?php the_permalink(); ?>" ><img src="<?php echo get_template_directory_uri() ; ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=211&amp;h=180&amp;zc=1&amp;q=100" alt="<?php echo the_title(); ?>" width="211" height="180" class="imgf" /></a></div><!-- #image -->

<?php } ?>

<div class="information">

<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

<span class="date"><?php the_time('F d, '); ?><?php the_time(' Y'); ?> -  <?php comments_popup_link(__('(0) comments', 'framework'), __('1 Comment', 'skyali'), __('% Comments', 'skyali')); ?></span>

<p><?php echo excerpt(35); ?><?php _e(' [...]', 'skyali'); ?></p>

<div class="readm"><div class="button"><a href="<?php the_permalink(); ?>" class="imgf"><?php _e('阅读更多','skyali'); ?></a></div><!-- button --></div><!-- #readm -->

</div><!-- #information -->


</div><!-- #list_post -->

<?php } ?>

<?php $i++; ?>

<?php endwhile; ?>

<?php  skyali_pagination(); ?>

<?php include_once('other_categories.php'); ?>