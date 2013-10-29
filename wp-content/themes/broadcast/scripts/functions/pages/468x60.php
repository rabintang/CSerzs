<div class="content">启用或禁用网页右上方468x60广告</div>

</div><!-- Info Closer -->

<div id="options">

<h1>广告设置</h1>

<input type="radio" name="skyali_broadcast_468" value="enable" <?php skyali_enable_468(); ?> /> 启用

<br />

<input type="radio" name="skyali_broadcast_468" value="disable" <?php skyali_disable_468(); ?> /> 禁用

<h1>广告代码</h1>

<textarea name="skyali_broadcast_468_ad_code"><?php echo get_option('skyali_broadcast_468_ad_code'); ?></textarea>

<h1>图片路径</h1>

<div class="inputtext"><input type="text" class="text" name="skyali_broadcast_468_image_url" value="<?php echo  get_option('skyali_broadcast_468_image_url'); ?>" /></div>

<h1>图片链接指向</h1>

<div class="inputtext"><input type="text" class="text" name="skyali_broadcast_468_image_link_address" value="<?php echo get_option('skyali_broadcast_468_image_link_address'); ?>" /></div>

<input type="hidden" name="460x60_checker" value="1" />