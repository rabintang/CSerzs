</div><!-- #content_bg -->

</div><!-- #content -->

</div><!-- #container -->

</div><!-- #center -->

<div id="footer_holder" <?php footer_widget_option(); ?>>

<div id="footer" <?php footer_widget_option(); ?>>

<div class="column_1">

<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>

</div><!-- #column_1 -->

<div class="column_2">

<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>

</div><!-- #column_2 -->

<div class="column_3">

<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>

</div><!-- #column_3 -->

<div class="column_4">

<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>

</div><!-- #column_4 -->

</div><!-- #footer -->

</div><!-- #footer_holder -->

<div id="copyright_holder">

<div class="copyright">

<div class="left">&copy; <?php _e('2011 Weidea.Net. All Rights Reserved.', 'skyali'); ?></div><!-- #left -->

<div class="right"><?php _e('Powered by <a href="http://www.weidea.net" target="_blank">Weidea.Net</a>. Designed by', 'skyali'); ?></div><!-- #right -->

</div><!-- #copyright -->

</div><!-- #copyright_holder -->


<?php wp_footer(); ?>

<?php echo stripslashes(get_option('skyali_broadcast_tracking')); ?>