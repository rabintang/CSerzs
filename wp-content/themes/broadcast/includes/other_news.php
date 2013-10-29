<?php wp_reset_query(); ?>

<!-- #other_news -->

<div class="list_category <?php disable_other_news(); ?>">

<div class="heading"><h2><?php _e('Other News', 'skyali'); ?></h2></div><!-- #heading -->

<?php $i = 0; ?>

<?php $other_news = new WP_Query('showposts=6&orderby=rand'); while($other_news ->have_posts()) : $other_news->the_post();  ?>

<?php if($i == 2 OR $i == 5){ $no_margin_right = 'no_margin_right'; } else { $no_margin_right = ''; }  ?>

<div class="other_news_item<?php echo ' '.$no_margin_right; ?>">

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl = get_template_directory_uri(); //$image_url = str_replace($blogurl, '', $image_url); ?>

<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=163&amp;h=99&amp;zc=1&amp;q=100" width="163" height="99" alt="<?php the_title(); ?>" /></a>

<?php } ?>

<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

<span class="date"><?php the_time('F d, '); ?><?php the_time(' Y'); ?></span>

</div><!-- #other_news_item -->

<?php $i++; ?>

<?php endwhile; ?> 

</div><!-- #list_category -->