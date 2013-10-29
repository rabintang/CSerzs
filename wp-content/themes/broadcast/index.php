<?php get_header(); ?>

<?php 
if(get_option('skyali_broadcast_featured_style') != 'slider_long' AND get_option('skyali_broadcast_featured_style') != 'post' AND $video_ != 'true' AND get_option('skyali_broadcast_featured_style') != '' ) { include_once('includes/featured.php'); }  elseif(get_option('skyali_broadcast_featured_style') == 'post' OR $video_ == 'true') { include_once('includes/featured_post.php'); } 
?>

<?php if(get_option('skyali_broadcast_blog_style') == '1' OR get_option('skyali_broadcast_blog_style') == '' ){ ?>

<?php include_once('includes/categories.php'); ?>

<?php } else { ?>

<?php include_once('includes/blog_posts.php'); ?>

<?php } ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

</body>

</html>
