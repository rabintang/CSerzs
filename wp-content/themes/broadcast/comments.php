<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
			</div><!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>

<div class="list_category unique_margin_bottom">

<div class="heading"><h2><?php
printf( _n( '(1) Reader Comment', '(%1$s) 访客评论 ', get_comments_number(), 'skyali' ),
number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' ); ?>
</h2></div>

</div><!-- #list_category -->

<ol id="comments"><!-- main holder -->

<?php wp_list_comments( array( 'callback' => 'skyali_comment' ) );	?>

</ol>
           

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>

<div id="entries">
<div class="old_entries"><?php previous_comments_link( __( '<span class="meta-nav">&laquo;</span> Previous', 'skyali' ) ); ?></div>
<div class="new_entries"><?php next_comments_link( __( 'Newer <span class="meta-nav">&raquo;</span>', 'skyali' ) ); ?></div>
</div><!-- .navigation -->
            
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( '评论关闭', 'skyali' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<div class="list_category unique_margin_bottom">

<div class="heading"><h2><?php _e('留言', 'skyali'); ?></h2></div>

</div><!-- #list_category -->

<?php comment_form(); ?>
