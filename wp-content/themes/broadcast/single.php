<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="page_heading blog_single_header no_margin_top"><h1><?php the_title(); ?></h1></div>

<div class="blog_date">

<div class="the_date">

<p> <?php _e('Written By: '); ?> <?php the_author_posts_link(); ?></p> <span class="seperator"><?php _e('|'); ?></span>   

<p><?php the_date(); ?> </p> <span class="seperator"><?php _e('|'); ?></span>  

<p><?php _e('Posted In: '); ?></p> <?php the_category(); ?>

</div><!-- #the_date -->

</div><!-- #date -->

<?php $skyali_video = get_post_meta($post->ID, 'skyali_video', true); ?>

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?><div class="thumb <?php disable_blog_img(); ?>">

<?php $blogurl = get_template_directory_uri() ; ?>

<?php  if(!empty($skyali_video)){ $lightbox = '#video_holder';} else { $lightbox = $image_url; } ?>

<a href="<?php echo $lightbox; ?>" title="<?php the_title(); ?>"  rel="prettyPhoto[inline]"><img src="<?php echo get_template_directory_uri() ; ?>/thumb.php?src=<?php echo $image_url; ?>
&amp;w=581&amp;h=252&amp;zc=1&amp;q=100"  width="581" height="252" alt="<?php the_title(); ?>" class="blog_single_img imgf"/></a></div><!-- #thumb --><?php } ?>

<div id="video_holder" style="display:none;"><p><?php echo $skyali_video; ?></p></div>


<div class="pure_content">

<?php the_content(); ?>

</div><!-- #pure_content -->

<div class="list_category <?php disable_share_icons(); ?>">

<div class="heading"><h2><?php _e('分享这篇文章', 'skyali'); ?></h2></div>

<div class="share "> 

  <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>">
  <img src="<?php bloginfo('template_directory'); ?>/images/facebook-icon.png" class="shareimg" /></a>

  <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&nbsp;-&nbsp;<?php the_permalink(); ?>">
  <img src="<?php bloginfo('template_directory'); ?>/images/twitter-icon.png" class="shareimg" /></a>

  <a href="http://www.reddit.com/submit?url=<?php urlencode(the_permalink()); ?>&amp;title=<?php the_title(); ?>">
  <img src="<?php bloginfo('template_directory'); ?>/images/reddit-icon.png" class="shareimg" /></a>

  <a href="http://digg.com/submit?url=<?php the_permalink();?>&amp;title=<?php the_title(); ?>&amp;thumbnails=1">
  <img src="<?php bloginfo('template_directory'); ?>/images/digg-icon.png" class="shareimg" /></a>

  <a href="http://www.google.com/reader/link?title=<?php the_title();?>&amp;url=<?php the_permalink();?>">
  <img src="<?php bloginfo('template_directory'); ?>/images/google-icon.png" class="shareimg" /></a>

  <a href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>">
  <img src="<?php bloginfo('template_directory'); ?>/images/stumbleupon-icon.png" class="shareimg" /></a>

  <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;source=">
  <img src="<?php bloginfo('template_directory'); ?>/images/linkedin-icon.png" class="shareimg" /></a>

  <a href="http://del.icio.us/post?url=<?php the_permalink();?>&amp;title=<?php the_title(); ?>" class="no_margin_right">
  <img src="<?php bloginfo('template_directory'); ?>/images/delicious-icon.png" class="last shareimg" /></a>

</div><!-- #share -->

</div><!-- #list_category -->

<div class="list_category unique_margin_bottom <?php disable_related_news(); ?>">

<div class="heading"><h2><?php _e('最近文章', 'skyali'); ?></h2></div><!-- #heading -->

<?php $post_num = 3; ?>
<?php $i = 1; ?>
<?php
$category = get_the_category(); 
$categories = array();
foreach($category as $x){ array_push($categories, $x->cat_ID); }
$categories_join =  implode(',',$categories);
$exclude_post_id = $post->ID;
$args = array('cat' => $categories_join, 'showposts' => $post_num, 'post__not_in' => array($exclude_post_id));
?>
<?php $related = new WP_Query($args); while($related->have_posts()) : $related->the_post(); ?>
<?php if($i <= $post_num){ ?>
<?php if($i == $post_num) { $no_margin_right = 'no_margin_right'; } else { $no_margin_right = ''; } ?>

<div class="other_news_item <?php echo $no_margin_right; ?> single_item_height">

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl = get_template_directory_uri() ; //$image_url = str_replace($blogurl, '', $image_url); ?>

<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() ; ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=163&amp;h=99&amp;zc=1&amp;q=100" width="163" height="99" alt="<?php the_title(); ?>" /></a>

<?php } ?>

</div><!-- #other_news_item -->

<?php } ?>
<?php $i++; ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

</div><!-- #list_category -->

<div class="list_category unique_margin_bottom <?php disable_author(); ?>">

<div class="heading"><h2><?php _e('关于作者', 'skyali'); ?></h2></div>

<div class="about_author">

<div class="image"><?php echo get_avatar( get_the_author_meta('email'), '75' ); ?></div><!-- image -->

<div class="content"><h3><?php echo get_the_author_link(); ?></h3><p><?php the_author_meta("description"); ?></p></div><!-- #content -->

</div><!-- about_author -->

</div><!-- list_category -->

<?php if(get_option('skyali_broadcast_comment_section') != 'disable') { comments_template( '', true ); } ?>

<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
