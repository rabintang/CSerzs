<div class="content">启用或禁用博客页面上整个评论部分</div>

</div><!-- Info Closer -->

<div id="options">

<h1>评论部分</h1>

<select name="skyali_broadcast_comment_section">

<option value="enable" <?php skyali_comment_section_e(); ?> >启用</option>

<option value="disable" <?php skyali_comment_section_d(); ?>>禁用</option>

</select>

<input type="hidden" name="comment_section_checker" value="1" />