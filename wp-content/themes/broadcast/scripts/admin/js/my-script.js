// JavaScript Document

/*** UPLOAD IMAGE BUTTON ***/

/*** FIRST UPLOAD BUTTON ***/
jQuery(document).ready(function () {
jQuery('#upload_image_button').click(function () {
formfield = jQuery('#upload_image');
post_id = jQuery('#post_ID').val();
tb_show('', 'media-upload.php?post_id=' + post_id + '&type=image&TB_iframe=true');
return false;
});
window.send_to_editor = function (html) {
imgurl = jQuery('img', html).attr('src');
jQuery('#upload_image').val(imgurl);
tb_remove();
}

/*** SECOND UPLOAD BUTTON ***/
jQuery('#upload_imagetwo_button').click(function () {
formfield = jQuery('#upload_imagetwo');
post_id = jQuery('#post_ID').val();
window.send_to_editor = window.send_to_editor_clone;
//note if add more upload buttons do not forget to create mor send_to_editor_clone's do not name them the same or the script will break
tb_show('', 'media-upload.php?post_id=' + post_id + '&type=image&TB_iframe=true');
return false;
});
window.send_to_editor_clone = function (html) {
imgurl = jQuery('img', html).attr('src');
jQuery('#upload_imagetwo').val(imgurl);
tb_remove();
}

/*** THIRD UPLOAD BUTTON ***/
jQuery('#upload_imagethree_button').click(function () {
formfield = jQuery('#upload_imagethree');
post_id = jQuery('#post_ID').val();
window.send_to_editor = window.send_to_editor_clones;
tb_show('', 'media-upload.php?post_id=' + post_id + '&type=image&TB_iframe=true');
return false;
});
window.send_to_editor_clones = function (html) {
imgurl = jQuery('img', html).attr('src');
jQuery('#upload_imagethree').val(imgurl);
tb_remove();
}

/*** FOURTH UPLOAD BUTTON ***/
jQuery('#upload_imagefour_button').click(function () {
formfield = jQuery('#upload_imagefour');
post_id = jQuery('#post_ID').val();
window.send_to_editor = window.send_to_editor_cloner;
tb_show('', 'media-upload.php?post_id=' + post_id + '&type=image&TB_iframe=true');
return false;
});
window.send_to_editor_cloner = function (html) {
imgurl = jQuery('img', html).attr('src');
jQuery('#upload_imagefour').val(imgurl);
tb_remove();
}

/*** LOGO UPLOAD BUTTON ***/
jQuery('#upload_logo_button').click(function () {
formfield = jQuery('#skyali_broadcast_logo_url');
post_id = jQuery('#post_ID').val();
window.send_to_editor = window.send_to_editor_clonelogo;
tb_show('', 'media-upload.php?post_id=' + post_id + '&type=image&TB_iframe=true');
return false;
});
window.send_to_editor_clonelogo = function (html) {
imgurl = jQuery('img', html).attr('src');
jQuery('#skyali_broadcast_logo_url').val(imgurl);
tb_remove();
}

});



/*** TOGGLE BOXES ***/

jQuery(document).ready(function() {
$("#toggle_first_box").click(function () {
$("#first_box").toggle("slow");
});
});

jQuery(document).ready(function() {
$("#toggle_second_box").click(function () {
$("#second_box").toggle("slow");
});
});

jQuery(document).ready(function() {
$("#toggle_third_box").click(function () {
$("#third_box").toggle("slow");
});
});

jQuery(document).ready(function() {
$("#toggle_fourth_box").click(function () {
$("#fourth_box").toggle("slow");
});
});
 $('input').ColorPicker(options);
 $('#skyali_broadcast_color').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		$(el).val(hex);
		$(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		$(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	$(this).ColorPickerSetColor(this.value);
});

