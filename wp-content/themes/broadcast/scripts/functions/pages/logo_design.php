<div class="content">自定义上传标志或使用网站标题作为标志</div>

</div><!-- Info Closer -->

<div id="options">

<h1>顶部标志路径:</h1> 

<label for="skyali_broadcast_logo_url"><div class="inputtext">
<input type="text" id="skyali_broadcast_logo_url" class="text" name="skyali_broadcast_logo_url" value="<?php echo get_option('skyali_broadcast_logo_url'); ?>"/>
<input id="upload_logo_button" type="button" value="" class="button_blue" />
</div><!-- INPUT TEXT CLOSER --></label>

<h1>标志设置:</h1>

<select name="skyali_broadcast_logo_text">
<option value="no" <?php skyali_logo_image_options(); ?>>图片标志</option>
<option value="yes" <?php skyali_logo_text_option(); ?>>文字标志</option>
</select>