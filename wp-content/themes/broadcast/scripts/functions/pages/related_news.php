<div class="content">启用或禁用相关新闻</div>

</div><!-- Info Closer -->

<div id="options">

<h1>相关新闻</h1>

<select name="skyali_broadcast_related_news">

<option value="enable" <?php skyali_related_enable(); ?> >启用</option>

<option value="disable" <?php skyali_related_disable(); ?>>禁用</option>

</select>

<input type="hidden" name="related_news_checker" value="1" />