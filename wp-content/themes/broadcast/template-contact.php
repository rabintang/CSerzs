<?php
/*
Template Name: Contact Form
*/
?>
<?php get_header(); ?>
<?php

if(isset($_POST['contactname'])) { $name_post = trim($_POST['contactname']); }
if(isset($_POST['email'])) { $email_post = $_POST['email']; }
if(isset($_POST['message'])) { $message_post = trim($_POST['message']); }
?>
<?php
//check if form is submitted
if(isset($_POST['submitform'])){
	if($name_post != '' && $email_post != '' && $message_post != '' && $_POST['num_check'] == 7 && get_option('skyali_broadcast_contact_email') != ''){
$Name = "".$name_post.""; //senders name
$email = "".$email_post.""; //senders e-mail adress
$recipient = "".get_option('skyali_broadcast_contact_email').""; //recipient
$mail_body = "".$message_post.""; //mail body
$subject = "New message from ".$name_post.""; //subject
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields

mail($recipient, $subject, $mail_body, $header); //mail command :)
if(filter_var($email_post, FILTER_VALIDATE_EMAIL) != true){
$email_filter = '<font size="2" color="#FF0000">*</font>';
}
}

if($message_post == ''){
$message_post_message = '<font color="#FF0000">*</font>';
}

if($email_post == ''){
$email_post_message = '<font color="#FF0000">*</font>';
}

if($name_post == ''){
$name_post_message = '<font color="#FF0000">*</font>';
}

$check_num = $_POST['num_check'];
if($check_num != 7){
$check_num_message = '<font color="#FF0000" size="2">*</font>';
}

}
 ?>

<?php if (have_posts()) : ?>
                    
<?php while (have_posts()) : the_post(); ?>
                    
<?php the_content(); ?>

 <?php if ( get_option('skyali_broadcast_contact_email') == '' ) { ?>
 
<div class="warning_box" style="margin-top:35px; margin-bottom:10px;"><?php _e('If you are the admin of this site please setup your email.', 'skyali'); ?></div><!-- #warning_box -->

<?php } ?>

<form action="<?php the_permalink(); ?>" method="post" id="contact_form">

<label for="contactname"><?php  _e('Name:','skyali'); ?><?php if(isset($_POST['submitform'])){ echo $name_post_message; } ?></label>

<input type="text" name="contactname" value="<?php if(isset($_POST['submitform'])){ echo $name_post; } ?>" class="round_edges" />

<label for="email"><?php _e('Email:', 'skyali'); ?><?php if(isset($_POST['submitform'])){ echo $email_post_message; } ?></label>

<input type="text" name="email" value="<?php if(isset($_POST['submitform'])){ echo $email_post; } ?>" class="round_edges"/>

<?php if(isset($_POST['submitform'])){ echo $email_filter ; } ?>

<label for="message"><?php _e('Message:', 'skyali'); ?><?php  if(isset($_POST['submitform'])){ echo $message_post_message; } ?></label>

<textarea name="message" class="round_edges"><?php if(isset($_POST['submitform'])){ echo htmlentities($message_post); } ?></textarea>

<label for="num_check"><?php _e('5 + 2 = ','skyali'); ?><?php  if(isset($_POST['submitform'])){ echo $check_num_message; } ?></label>

<input type="text" name="num_check" class="round_edges" />

<div class="button"><input type="submit" class="imgf grey formsubmit" value="<?php _e('Send Message', 'skyali'); ?>" name="submitform" id="submitform" /></div>

</form>
<?php if(isset($_POST['submitform'])){ ?>
<?php if($message_post != '' && $email_post != '' && $name_post != '' && $check_num == 7){ ?>  <div class="success_box" style="margin-top:12px;"><?php _e('Your email has been sent.', 'skyali'); ?></div><!-- #success --><?php } ?>
<?php } ?>

<?php endwhile; ?>

<?php endif; ?>
        
<?php get_sidebar(); ?>

<?php get_footer(); ?>