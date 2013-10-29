<div class="content">排除顶部导航页面</div>

</div><!-- Info Closer -->

<div id="options">
<h1>排除顶部导航:</h1> 

<div class="selector">
<?php 
$pages = get_pages();
$i = 0;
foreach ($pages as $x){
	$get_option = get_option('skyali_broadcast_exclude_top_navigation');
	if(!empty($get_option)){
	$get_option_implode = implode(',', $get_option);
	}
	$page_id = ''.$x->ID.'';
	$check_option_values = strpos($get_option_implode, $page_id);
	if($check_option_values === false){
		$check = '';
	}
	else{
		$check = 'checked="checked"';
	}
	//echo ''.$i.'. Check Box ID:  '.$x->ID.' Check Database '.$check.'';
	echo '<input type="checkbox" name="skyali_broadcast_exclude_top_navigation[]" value="'.$x->ID.'" '.$check.' /> ';
	echo '<span class="cat_name">'.$x->post_title.'</span>';
	echo '';	
	$i++;
}
?>
</div>

<h1>显示设置</h1>

<table border="0" cellpadding="0" cellspacing="0">

<tr>

<td width="162" height="34" valign="top"><label for="skyali_broadcast_rss_header_option">显示Rss?</label></td>

<td width="294" valign="top"><input type="checkbox" name="skyali_broadcast_rss_header_option" <?php skyali_rss_header_option_checked(); ?>></td>

</tr>

<tr>

<td width="162" height="34" valign="top"><label for="skyali_broadcast_date_header_option">显示日期?</label></td>

<td width="294" valign="top"><input type="checkbox" name="skyali_broadcast_date_header_option" <?php skyali_date_header_option_checked(); ?>></td>

</tr>

</table>


<input type="hidden" name="check_exclude_top_navigation" value="1" />
