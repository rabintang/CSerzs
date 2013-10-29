<?php if(is_home()){ ?>


<div class="image_carousel">

	<div id="spotlight">
    
   <?php $spotlight = new WP_Query('meta_key=skyali_spotlight&showposts=50'); while($spotlight->have_posts()) : $spotlight->the_post(); ?>
    
    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

    <?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

     <?php $blogurl = get_template_directory_uri() ; $image_url = str_replace($blogurl, '', $image_url); ?>

		<a href="<?php the_permalink(); ?>" ><img src="<?php echo get_template_directory_uri() ; ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=179&amp;h=100&amp;zc=1&amp;q=100" alt="<?php echo the_title(); ?>" width="179" height="100" class="shorttitle" title="<?php the_title(); ?>" /></a>

<?php } ?>

<?php endwhile; ?>

	</div>
	<div class="clearfix"></div>
	<a class="prev" id="foo1_prev" href="#"><span><?php _e('prev', skyali); ?></span></a>
	<a class="next" id="foo1_next" href="#"><span><?php _e('next', skyali); ?></span></a>
</div>


<?php } ?>