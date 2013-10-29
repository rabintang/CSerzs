<div class="content">要排除的分类</div>

</div><!-- Info Closer -->

<div id="options">
<h1>要排除的分类</h1> <br />
<div class="selector">
<?php 
$categories = get_categories();
foreach($categories as $x){ /* loop this until there are no more categories to loop */
	$get_option = get_option('skyali_broadcast_exclude_categories'); /* get the categories to exclude */
	if(!empty($get_option)){ $get_option_implode = implode(',', $get_option);} /* if the option is not empty implode(put the categories in one long string) */
	$cat_id = '0'.$x->term_id.''; /* get the current category id */
	$check_option_values = strpos($get_option_implode, $cat_id); /* check if the excluded category matches the current category id */
	if($check_option_values === false){$check = '';} else {$check = 'checked="checked"';} /* if the current category id matches the excluded category id check the box */
	echo '<input type="checkbox" name="skyali_broadcast_exclude_categories[]" value="0'.$x->term_id.'" '.$check.' /> ';
	echo '<span class="cat_name">'.$x->cat_name.'</span>'; /* echo out the current categories name */
	
}
?>
</div>

<input type="hidden" name="check_exclude_categories" value="1" />
