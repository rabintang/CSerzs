<?php get_header(); ?>

<span class="page_heading no_margin_top">
<h1><?php _e('Search Results ', 'skyali') ?><?php printf(__('\'%s\''), $s) ?></h1></span>

<?php 

$num_of_posts = $wp_query->post_count; 

$i = 1;

?>

<?php while (have_posts()) : the_post(); ?>	

<div class="list_category">

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl = get_bloginfo('url'); //$image_url = str_replace($blogurl, '', $image_url); ?>

<div class="image"><a href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=274&amp;h=131&amp;zc=1&amp;q=100" width="274" height="131" alt="<?php the_title(); ?>" /></a></div><!-- #image -->

<?php } ?>

<div class="information">

<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

<span class="date"><?php _e('Posted On:', 'skyali'); ?> <?php the_time('F d, '); ?><?php the_time(' Y'); ?></span>

<p><?php echo excerpt(25); ?><?php _e(' [...]', 'skyali'); ?></p>

</div><!-- #information -->

</div><!-- #list_category -->

<?php if($i != $num_of_posts){ ?><div class="list_category"><span class="heading" style="height:1px; margin-bottom:0;"></span></div><!-- #list_cat_line --><?php } ?>

<?php $i++; ?>

<?php endwhile; ?>

<?php  skyali_pagination(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>