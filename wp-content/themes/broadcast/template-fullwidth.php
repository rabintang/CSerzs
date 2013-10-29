<?php /*
  Template Name: Full Width
 */ ?>
<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<span class="page_heading blog_single_header no_margin_top" style="width:960px;"><h1><?php the_title(); ?></h1></span>

<div class="pure_content">

<?php the_content(); ?>

</div><!-- #pure_content -->

<?php endwhile; // end of the loop. ?>

</div><!-- #left -->


<?php get_footer(); ?>
