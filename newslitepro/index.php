<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package News_Lite
 */

get_header();
?>

	<div id="primary" class="site-main">
	<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

	


	<div class="col-wrap">
	<div class="col col-left col-first">

	<?php if (have_posts()) : ?>
	<?php $adcounter = 1; ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'template-parts/content-home', get_post_type() ); ?>
		<?php $adcounter++; ?>
	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

	<?php else :?>
		<?php get_template_part( 'template-parts/content-home', 'none' ); ?>
	<?php endif; ?>


</div><!--./col-first-->

<div class="col col-right col-last">
<?php get_sidebar();?>
</div><!--./col-last-->


	</div><!--./col-wrap-->
	</div><!--./site-content-->
</div><!--./content-area"-->
	</div><!-- #main -->

<?php
get_footer();
