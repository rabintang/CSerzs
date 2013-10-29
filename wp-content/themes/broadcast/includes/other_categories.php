<?php wp_reset_query(); ?>

<!-- #other_categories -->

<div class="list_category <?php other_categories_option(); ?>">

<div class="heading"><h2><?php _e('其他类别', 'skyali'); ?></h2></div><!-- #heading -->

<ul id="other_categories">

<?php $n = 0; ?>

<?php $other_category_array = get_option('skyali_broadcast_other_categories_select'); ?>

<?php if($other_category_array != false){ ?>

<?php foreach ($other_category_array as $catz) { ?>

<?php $other_category_id = $other_category_array[$n]; ?>

<?php $other_category_id = str_replace("x3", "", $other_category_id); ?>

<?php $other_cat_name = get_cat_name($other_category_array[$n]); ?>

<li<?php if($n == 0){ echo ' class="active"'; }?>><a href="#<?php echo $other_cat_name; ?>"><?php echo $other_cat_name; ?></a></li>

<?php /*echo $catz->cat_name*/; ?>

<?php $n++; ?>

<?php } ?>

<?php } ?>

</ul><!-- other_categories -->

<?php $a = 0; ?>

<?php $other_category_array_2 = get_option('skyali_broadcast_other_categories_select'); ?>

<?php if($other_category_array_2 != false){ ?>

<?php foreach ($other_category_array_2 as $catzz) { ?>

<?php $other_category_id_2 = $other_category_array_2[$a]; ?>

<?php $other_category_id_2 = str_replace("x3", "", $other_category_id_2); ?>

<?php $other_cat_name_2 = get_cat_name($other_category_array_2[$a]); ?>

<div class="other_categories_content" id="<?php echo $other_cat_name_2; ?>">

<?php $b = 0; ?>

<?php $other_cats = new WP_Query('showposts=3&cat='.$other_category_id_2.''); while($other_cats ->have_posts()) : $other_cats->the_post();  ?>

<div class="other_categories_item<?php if($b == 2){	echo ' no_margin_right';} ?>">

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl = get_template_directory_uri(); //$image_url = str_replace($blogurl, '', $image_url); ?>

<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=163&amp;h=90&amp;zc=1&amp;q=100" width="163" height="90" alt="<?php the_title(); ?>" /></a>

<?php } ?>

<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

<span class="date"><?php the_time('F d, '); ?><?php the_time(' Y'); ?></span>

</div><!-- other_categories_item -->

<?php $b++; ?>

<?php endwhile; ?>

</div><!-- other_categories_content -->
<?php $a++; ?>
<?php }} ?>

</div><!-- #list_category -->