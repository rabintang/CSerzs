<?php
$prefix = 'skyali_';
$sticky = '<img src="'.get_template_directory_uri().'/images/sticky-pin.png" width="11" height="11" />';
$slider = '<img src="'.get_template_directory_uri().'/images/plus-slider.png" width="11" height="11" />';
/*$featured = '<img src="'.get_template_directory_uri().'/images/feature-star.png" width="11" height="11" />';*/
$video = '<img src="'.get_template_directory_uri().'/images/video-icon.png" width="11" height="11" />';
$spotlight = '<img src="'.get_template_directory_uri().'/images/spotlight.png" width="11" height="11" />';

$meta_box = array('id' => 'sticky-meta-box','title' => ''.$sticky.' 置顶文章？','page' => 'post','context' => 'side','priority' => 'high','fields' => array(array('name' => '置顶',
'id' => $prefix . 'sticky','type' => 'checkbox') ) );

$slider_box = array( 'id' => 'slider-meta-box', 'title' => ''.$slider.' 新增到特色滑块？', 'page' => 'post', 'context' => 'side', 'priority' => 'high', 'fields' => array(array('name' => '滑块', 'id' => $prefix. 'slider', 'type'=> 'checkbox' ) ) );

$spotlight_box = array( 'id' => 'spotlight-meta-box', 'title' => ''.$spotlight.'添加到聚焦？', 'page' => 'post', 'context' => 'side', 'priority' => 'high', 'fields' => array(array('name' => '聚焦', 'id' => $prefix. 'spotlight', 'type'=> 'checkbox' ) ) );


/*$featured_box = array('id' => 'featured-meta-box', 'title'=> ''.$featured.' Feature This Post?', 'page' => 'post', 'context' => 'side', 'priority' => 'high', 'fields' => array(array('name' => 'Feature', 'id'=> $prefix. 'feature', 'type' => 'checkbox') ) );*/

$video_box = array('id' => 'video-meta-box', 'title'=> ''.$video.' 嵌入精选视频', 'page' => 'post', 'context' => 'side', 'priority' => 'high', 'fields' => array(array('name' => '嵌入代码', 'id'=> $prefix. 'video', 'type' => 'textarea', 'std' => '') ) );

add_action('admin_menu', 'add_sticky_box');

// Add meta box
function add_sticky_box() {
	global $meta_box;
	global $slider_box;
	/*global $featured_box;*/
	global $video_box;
	global $spotlight_box;
	add_meta_box($meta_box['id'], $meta_box['title'], 'sticky_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
	add_meta_box($slider_box['id'], $slider_box['title'], 'slider_show_box', $slider_box['page'], $slider_box['context'], $slider_box['priority']);
	add_meta_box($spotlight_box['id'], $spotlight_box['title'], 'spotlight_show_box', $spotlight_box['page'], $spotlight_box['context'], $spotlight_box['priority']);
	/*add_meta_box($featured_box['id'], $featured_box['title'], 'featured_show_box', $featured_box['page'], $featured_box['context'], $featured_box['priority']);*/
	add_meta_box($video_box['id'], $video_box['title'], 'video_show_box', $video_box['page'], $video_box['context'], $video_box['priority']);
}

// Callback function to show fields in meta box
function sticky_show_box() {
	global $meta_box, $post;
	
	// Use nonce for verification
	echo '<input type="hidden" name="sticky_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	
	echo '<table class="form-table">';

	foreach ($meta_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		$post_num = htmlentities($_GET['post']);
		echo '<tr>','<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>','<td>';
		switch ($field['type']) {
			case 'checkbox':
				echo '<input type="checkbox" value="'.$post_num.'" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
				break;
		}
		echo '<td>', '</tr>';
	}
	echo '</table>';
}

function slider_show_box() {
	global $slider_box, $post;
	
	// Use nonce for verification
	//echo '<input type="hidden" name="slider_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	
	echo '<table class="form-table">';

	foreach ($slider_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		$post_num = htmlentities($_GET['post']);
		echo '<tr>','<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>','<td>';
		switch ($field['type']) {
			case 'checkbox':
				echo '<input type="checkbox" value="'.$post_num.'" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
				break;
		}
		echo '<td>', '</tr>';
	}
	echo '</table>';
}

function spotlight_show_box() {
	global $spotlight_box, $post;
	
	// Use nonce for verification
	//echo '<input type="hidden" name="slider_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	
	echo '<table class="form-table">';

	foreach ($spotlight_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		$post_num = htmlentities($_GET['post']);
		echo '<tr>','<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>','<td>';
		switch ($field['type']) {
			case 'checkbox':
				echo '<input type="checkbox" value="'.$post_num.'" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
				break;
		}
		echo '<td>', '</tr>';
	}
	echo '</table>';
}

/*
function featured_show_box() {
	global $featured_box, $post;
	
	echo '<table class="form-table">';

	foreach ($featured_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		$post_num = htmlentities($_GET['post']);
		echo '<tr>','<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>','<td>';
		switch ($field['type']) {
			case 'checkbox':
				echo '<input type="checkbox" value="'.$post_num.'" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
				break;
		}
		echo '<td>', '</tr>';
	}
	echo '</table>';
}
*/
function video_show_box() {
	global $video_box, $post;
	
	echo '<table class="form-table">';

	foreach ($video_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		$post_num = htmlentities($_GET['post']);
		echo '<tr>','<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>','<td>';
		switch ($field['type']) {
			case 'textarea':
			    echo '<textarea style="width:197px; height:116px; font-size:11px;" name="', $field['id'], '" id="', $field['id'], '" ', $meta ? ' ' : '', '>', $meta ? $meta : $field['std'], '</textarea>';
				//echo '<input type="checkbox" value="'.$post_num.'" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
				break;
		}
		echo '<td>', '</tr>';
	}
	echo '</table>';
}

add_action('save_post', 'save_sticky_data');

// Save data from meta box
function save_sticky_data($post_id) {
	global $meta_box;
	global $slider_box;
	/*global $featured_box;*/
	global $video_box;
	global $spotlight_box;
	
	// verify nonce
	if (!wp_verify_nonce($_POST['sticky_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}

	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	
	foreach ($meta_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}//else if closer
	}//foreach closer
	
		foreach ($slider_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}//else if closer
	}//foreach closer
	
		foreach ($spotlight_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}//else if closer
	}//foreach closer
	
		/*foreach ($featured_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}//else if closer
	}//foreach closer
	*/
			foreach ($video_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}//else if closer
	}//foreach closer
	
} //function closer



?>