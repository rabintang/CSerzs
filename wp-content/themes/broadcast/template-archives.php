<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<span class="page_heading blog_single_header no_margin_top"><h1><?php the_title(); ?></h1></span>

<div class="pure_content archive_page">

<?php $categories = get_categories(); ?>

<?php foreach($categories as $x) { ?>

<?php $cat_ID = $x->cat_ID; ?>

<?php $args = array('cat' => $cat_ID, 'showposts' => '10'); ?>

<h3 class="archive_header"><?php echo $x->cat_name; ?></h3>

<?php $archives = new WP_Query($args); while($archives->have_posts()) : $archives->the_post(); ?>

<p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - <?php the_time('j F Y') ?> - <?php echo $post->comment_count ?> <?php _e('comments','skyali'); ?></p>


<?php endwhile; ?>

<?php } ?>

</div><!-- #pure_content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

