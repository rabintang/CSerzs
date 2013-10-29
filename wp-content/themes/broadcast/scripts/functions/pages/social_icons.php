<div class="content">配置顶部社交网络图标</div>

</div><!-- Info Closer -->

<div id="options">

<h1>社交图标</h1>

<select name="skyali_broadcast_social_icons">

<option value="enable" <?php skyali_social_icons_options_e(); ?>>启用</option>

<option value="disable" <?php skyali_social_icons_options_d(); ?>>禁用</option>

</select>

<h1>Twitter 用户名:</h1> <div class="inputtext"><input type="text" class="text" name="skyali_broadcast_twitter_username" value="<?php echo get_option('skyali_broadcast_twitter_username'); ?>"/></div><!-- INPUT TEXT CLOSER -->

<h1>Facebook 用户名:</h1> <div class="inputtext"><input type="text" class="text" name="skyali_broadcast_facebook_username" value="<?php echo get_option('skyali_broadcast_facebook_username'); ?>"/></div><!-- INPUT TEXT CLOSER -->

<h1>显示设置</h1>

<table border="0" cellpadding="0" cellspacing="0">

<tr>

<td width="162" height="34" valign="top"><label for="skyali_broadcast_twitter_option">显示 Twitter 图标?</label></td>

<td width="294" valign="top"><input type="checkbox" name="skyali_broadcast_twitter_option" <?php skyali_twitter_option_checked(); ?>></td>

</tr>

<tr>

<td width="162" height="34" valign="top"><label for="skyali_broadcast_facebook_option">显示 Facebook 图标?</label></td>

<td width="294" valign="top"><input type="checkbox" name="skyali_broadcast_facebook_option" <?php skyali_facebook_option_checked(); ?>></td>

</tr>

<tr>

<td width="162" valign="top"><label for="skyali_broadcast_rss_option">显示 Rss 图标?</label></td>

<td width="294" valign="top"><input type="checkbox" name="skyali_broadcast_rss_option" <?php  skyali_rss_option_checked(); ?>></td>

</tr>

</table>

<input type="hidden" name="social_icons_checker" value="1" />