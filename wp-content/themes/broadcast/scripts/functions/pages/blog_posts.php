<div class="content">在2个博客样式中选择1个</div>

</div><!-- Info Closer -->

<div id="options">

<h1>博客样式: </h1>

<input type="radio" name="skyali_broadcast_blog_style" value="1" <?php skyali_blog_style_1(); ?> /> 博客样式一

<br />


<div class="selector">
<?php 
$categories = get_categories();
foreach($categories as $x){ /* loop this until there are no more categories to loop */
	$get_option = get_option('skyali_broadcast_add_categories'); /* get the categories to exclude */
	if(!empty($get_option)){ $get_option_implode = implode(',', $get_option);} /* if the option is not empty implode(put the categories in one long string) */
	$cat_id = '0'.$x->term_id.'x3'; /* get the current category id */
	$check_option_values = strpos($get_option_implode, $cat_id); /* check if the excluded category matches the current category id */
	if($check_option_values === false){$check = '';} else {$check = 'checked="checked"';} /* if the current category id matches the excluded category id check the box */
	echo '<input type="checkbox" name="skyali_broadcast_add_categories[]" value="0'.$x->term_id.'x3"'.$check.' /> ';
	echo '<span class="cat_name">'.$x->cat_name.'</span>'; /* echo out the current categories name */
	
}
?>
</div>

<input type="radio" name="skyali_broadcast_blog_style" value="2" <?php skyali_blog_style_2(); ?> /> 博客样式二

<input type="hidden" name="blog_style_check" value="1" />