<div id="featured" <?php featured_option(); ?>>

<?php  $featured_cat = get_option('skyali_broadcast_featured_cats'); //get featured category ?>

<?php $i = 1; ?>

<?php
//list featured slide show div's 
$featured = new WP_Query('meta_key=skyali_sticky&showposts=1&cat='.$featured_cat.''); while($featured->have_posts()) : $featured->the_post(); 

?>


<!-- <?php echo $i; ?> Content -->

<?php if($i != 1){$hide_element = 'ui-tabs-hide';} else { $hide_element = '';} ?>

<div id="fragment-<?php echo $i; ?>" class="ui-tabs-panel <?php echo $hide_element ; ?>">


<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl = get_template_directory_uri(); //$image_url = str_replace($blogurl, '', $image_url); ?>

<?php $skyali_video = get_post_meta($post->ID, 'skyali_video', true); ?>

<?php if(empty($skyali_video)){ ?>

<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=574&amp;h=336&amp;zc=1&amp;q=100" alt="<?php echo the_title(); ?>" /></a>

<?php } else { ?>

<?php //show video ?>

<?php echo $skyali_video; ?>

<?php } ?>

<div class="info" >

<h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>

<p><?php echo excerpt(26); ?><?php _e(' [...]', 'skyali'); ?></p>

</div><!-- #info -->

</div><!-- #fragment <?php echo $i; ?> -->

<?php $i++; ?>

<?php endwhile; ?>

</div><!-- #featured -->
