<script type="text/javascript">
$(document).ready(function() {

	$("#topnav li").prepend("<span></span>"); //Throws an empty span tag right before the a tag

	$("#topnav li").each(function() { //For each list item...
		var linkText = $(this).find("a").html(); //Find the text inside of the <a> tag
		$(this).find("span").show().html(linkText); //Add the text in the <span> tag
	}); 

	$("#topnav li").hover(function() {	//On hover...
		$(this).find("span").stop().animate({
			marginTop: "-46" //Find the <span> tag and move it up 40 pixels
		}, 250);
	} , function() { //On hover out...
		$(this).find("span").stop().animate({
			marginTop: "0"  //Move the <span> back to its original state (0px)
		}, 250);
	});

});

</script>


<script type="text/javascript">
jQuery(document).ready(function() {

$('#toggle_first_box,#toggle_second_box,#toggle_third_box,#toggle_fourth_box').click(function() {
    var img = $(this).find('img');
    var src = img.attr('src');

    //image is neither on nor off, so change src to on and return
    if(src != '<?php echo get_template_directory_uri(); ?>/scripts/admin/css/images/plus_one.png' && src != '<?php echo get_template_directory_uri(); ?>/scripts/admin/css/images/neg_one.png') {
        img.attr('src','<?php echo get_template_directory_uri(); ?>/scripts/admin/css/images/plus_one.png');
        return false;
    }

    //image is on, so change src to off and return
    if(src == '<?php echo get_template_directory_uri(); ?>/scripts/admin/css/images/plus_one.png') {
        img.attr('src','<?php echo get_template_directory_uri(); ?>/scripts/admin/css/images/neg_one.png');
        return false;    
    }

    //image is off, so change src to plus one and return
    if(src == '<?php echo get_template_directory_uri(); ?>/scripts/admin/css/images/neg_one.png') {
        img.attr('src','<?php echo get_template_directory_uri(); ?>/scripts/admin/css/images/plus_one.png');
        return false;    
    }
});
});
</script>
