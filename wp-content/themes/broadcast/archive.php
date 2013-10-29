<?php get_header(); ?>

<div class="page_heading no_margin_top">
<h1>
<?php _e('Archive for '); ?>
<?php if (is_category()){ ?>
<?php echo ""; ?>
<?php single_cat_title();  echo "";} 
elseif (is_month()) { ?>
<?php  echo the_time('F, Y'); ?>
<?php } elseif(is_author()){ _e('Author Archive',skyali);  ?>
<?php } else if(is_day()){ the_time('F jS, Y');  ?>
<?php } else if(is_year()){ the_time('Y'); ?>
<?php } elseif(is_tag()){ echo  _e('Tag Archives:',skyali); echo  '\''.single_tag_title(' \' ', true, '');  } ?><?php _e(''); ?></h1></div>

<?php 

$num_of_posts = $wp_query->post_count; 

$i = 1;

?>

<?php while (have_posts()) : the_post(); ?>	

<div class="list_category">

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl = get_template_directory_uri() ; //$image_url = str_replace($blogurl, '', $image_url); ?>

<div class="image"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=277&amp;h=118&amp;zc=1&amp;q=100" width="277" height="118" alt="<?php the_title(); ?>" class="imgf" /></a></div><!-- #image -->

<?php } ?>

<div class="information">

<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

<div class="date"><?php _e('Posted On:', 'skyali'); ?> <?php the_time('F d, '); ?><?php the_time(' Y'); ?></div>

<p><?php echo excerpt(19); ?><?php _e(' [...]', 'skyali'); ?></p>

</div><!-- #information -->

</div><!-- #list_category -->

<?php if($i != $num_of_posts){ ?><?php } ?>

<?php $i++; ?>

<?php endwhile; ?>

<?php  skyali_pagination(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>