<div class="content">选择一个你想显示小工具的分类</div>

</div><!-- Info Closer -->

<div id="options">

<h1>其他分类</h1>

<select name="skyali_broadcast_other_categories">

<option value="enable" <?php skyali_other_categories_enable(); ?> >启用</option>

<option value="disable" <?php skyali_other_categories_disable(); ?>>禁用</option>

</select>

<h1>选择分类</h1>

<div class="selector">
<?php 
$categories = get_categories();
foreach($categories as $x){ /* loop this until there are no more categories to loop */
	$get_option = get_option('skyali_broadcast_other_categories_select'); /* get the categories to exclude */
	if(!empty($get_option)){ $get_option_implode = implode(',', $get_option);} /* if the option is not empty implode(put the categories in one long string) */
	$cat_id = '0'.$x->term_id.'x3'; /* get the current category id */
	$check_option_values = strpos($get_option_implode, $cat_id); /* check if the excluded category matches the current category id */
	if($check_option_values === false){$check = '';} else {$check = 'checked="checked"';} /* if the current category id matches the excluded category id check the box */
	echo '<input type="checkbox" name="skyali_broadcast_other_categories_select[]" value="0'.$x->term_id.'x3" '.$check.' /> ';
	echo '<span class="cat_name">'.$x->cat_name.'</span>'; /* echo out the current categories name */
	
}
?>
</div>

<input type="hidden" name="other_categories_check" value="1" />