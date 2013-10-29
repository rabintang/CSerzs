<div class="content">启用禁用滑块功能</div>

</div><!-- Info Closer -->

<div id="options">

<h1>滑块设置: </h1>

<br />

<input type="radio" name="skyali_broadcast_featured" value="enable" <?php skyali_featured_enable(); ?> /> 启用

<br />

<input type="radio" name="skyali_broadcast_featured" value="disable" <?php skyali_featured_disable(); ?> /> 禁用

<br />

<h1>滑块样式:</h1>

<input type="radio" name="skyali_broadcast_featured_style" value="slider_long" <?php skyali_featured_style_slider_long(); ?> /> 滑块-长
<br />


<input type="radio" name="skyali_broadcast_featured_style" value="slider" <?php skyali_featured_style_slider(); ?> /> 滑块-短
<br />

<input type="radio" name="skyali_broadcast_featured_style" value="post" <?php skyali_featured_style_post(); ?> /> 推荐文章

<br />

<h1>从分类中推荐:</h1>
<select name="skyali_broadcast_featured_cats" id="skyali_broadcast_featured_cats">
<option><?php _e('Select Category'); ?></option>
<?php 
$categories = get_categories();
foreach($categories as $x){ /* loop this until there are no more categories to loop */
	$get_option = get_option('skyali_broadcast_featured_cats'); /* get the categories to exclude */
	$cat_id = '0'.$x->term_id.''; /* get the current category id */
	$check_option_values = $get_option; /* check if the category matches the current category id */
	if($check_option_values != $x->term_id){$check = '';} else {$check = 'selected="selected"';} /* if the current category id matches the excluded category id check the box */
	echo '<option id="'.$x->term_id.'" value="'.$x->term_id.'" '.$check.'>'.$x->cat_name.'</option> ';
	echo '<span class="cat_name">'.$x->cat_name.'</span>'; /* echo out the current categories name */
	
}
?>
</select>
<input type="hidden" name="featured_check" value="1" />