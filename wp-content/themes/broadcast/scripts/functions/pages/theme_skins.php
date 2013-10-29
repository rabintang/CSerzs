<div class="content">自定义页面样式</div>

</div><!-- Info Closer -->

<div id="options">

<h1>顶部导航样式</h1>

<select name="skyali_broadcast_header_style">

<option value="1" <?php skyali_header_1_checked(); ?>>黑</option>

<option value="2" <?php skyali_header_2_checked(); ?>>白</option>

</select>

<h1>分类样式</h1>

<select name="skyali_broadcast_categories_style">

<option value="1" <?php skyali_categories_1_checked(); ?>>白</option>

<option value="2" <?php skyali_categories_2_checked(); ?>>黑</option>

</select>

<h1>滑块样式</h1>

<select name="skyali_broadcast_slider_style">

<option value="1" <?php skyali_slider_1_checked(); ?>>黑</option>

<option value="2" <?php skyali_slider_2_checked(); ?>>白</option>

</select>

<h1>页脚样式</h1>

<select name="skyali_broadcast_footer">

<option value="1" <?php skyali_footer_1_checked(); ?>>黑</option>

<option value="2" <?php skyali_footer_2_checked(); ?>>白</option>

</select>

<h1>顶部模式</h1>

<select name="skyali_broadcast_header_pattern">

<option value="1" <?php skyali_header_pattern_1_checked(); ?>>启用</option>

<option value="2" <?php skyali_header_pattern_2_checked(); ?>>禁用</option>

</select>

<h1>标题颜色</h1>

<input type="text" name="skyali_broadcast_color" value="<?php echo get_option('skyali_broadcast_color'); ?>" id="colorpickerField2" />

<input type="hidden" name="theme_skin_checker" value="1" />