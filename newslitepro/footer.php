<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package News_Lite
 */

?>


<!--FOOTER START--> 
<footer id="site-footer" class="site-footer" role="contentinfo">
<div class="site-info">
<nav id="footer-navigation" class="navigation main-navigation" role="navigation">


<?php wp_nav_menu( array( 'theme_location' => 'slide-menu', 'container_class' => 'menu-main-navigation-1-container','menu_class' => 'nav-menu', 'menu_id' => 'primary-menu-1'  ) ); ?>
<!--./menu-main-navigation-1-container-->
<div class="menu-main-navigation-2-container">
<?php if ( is_active_sidebar( 'toggle-first-section' ) ) : ?>
<?php dynamic_sidebar( 'toggle-first-section' ); ?>
<?php endif; ?>
</div><!--./menu-main-navigation-2-container-->
<div class="menu-main-navigation-3-container">
<?php if ( is_active_sidebar( 'toggle-last-section' ) ) : ?>
<?php dynamic_sidebar( 'toggle-last-section' ); ?>
<?php endif; ?>
</div><!--./menu-main-navigation-3-container-->
</nav>
</div><!--./site-info-->
</footer><!--./FOOTER STOP--> 
<style>
#site-footer > .site-info {
    background-image: url(<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>);
    background-position: 0 bottom;
    background-size: auto 80px;
    background-repeat: no-repeat;
    padding-bottom: 120px;
}    
</style>
</div><!--./PAGE STOP--> 

<?php wp_footer(); ?>

</body>
</html>
