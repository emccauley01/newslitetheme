<?php
/**
 * The template for displaying archive pages
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
	<div class="page-slug">News</div>
    <div class="news-list generic-list" id="home-news-list">
<div class="sleeve">
<?php if (have_posts()) : ?>
	<?php $adcounter = 1; ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php if (($adcounter / 3) == 1) : ?>
				
			<?php get_template_part( 'template-parts/content-home', get_post_type() ); ?>
			<?php if(is_active_sidebar('mob-ads1')){?><!--Ads2 -->
			<div class="m-ads ad-list ad-list-mpu">
				<div class="sleeve">
					<div class="ad ad-mpu"><div class="sleeve">
					 <?php dynamic_sidebar('mob-ads1');?>
					</div></div>
				</div>
			
			</div>
			<?php }?>
		<?php elseif (($adcounter / 3) == 2) : ?>
		
		<?php get_template_part( 'template-parts/content-home', get_post_type() ); ?>
		<?php if(is_active_sidebar('mob-ads2')){?><!--Ads2 -->
			<div class="m-ads ad-list ad-list-mpu">
				<div class="sleeve">
					<div class="ad ad-mpu"><div class="sleeve">
					 <?php dynamic_sidebar('mob-ads2');?>
					</div></div>
				</div>
			
			</div>
			<?php }?>
		<?php elseif (($adcounter / 3) == 3) : ?>
			
			<?php get_template_part( 'template-parts/content-home', get_post_type() ); ?>
			<?php if(is_active_sidebar('mob-ads3')){?><!--Ads2 -->
			<div class="m-ads ad-list ad-list-mpu">
				<div class="sleeve">
					<div class="ad ad-mpu"><div class="sleeve">
					 <?php dynamic_sidebar('mob-ads3');?>
					</div></div>
				</div>
			
			</div>
			<?php }?>
		<?php elseif (($adcounter / 3) == 4) : ?>
			
			<?php get_template_part( 'template-parts/content-home', get_post_type() ); ?>
			<?php if(is_active_sidebar('mob-ads4')){?><!--Ads2 -->
			<div class="m-ads ad-list ad-list-mpu">
				<div class="sleeve">
					<div class="ad ad-mpu"><div class="sleeve">
					 <?php dynamic_sidebar('mob-ads4');?>
					</div></div>
				</div>
			
			</div>
			<?php }?>
		<?php elseif (($adcounter / 3) == 5) : ?>
			
			<?php get_template_part( 'template-parts/content-home', get_post_type() ); ?>
			<?php if(is_active_sidebar('mob-ads5')){?><!--Ads2 -->
			<div class="m-ads ad-list ad-list-mpu">
				<div class="sleeve">
					<div class="ad ad-mpu"><div class="sleeve">
					 <?php dynamic_sidebar('mob-ads5');?>
					</div></div>
				</div>
			
			</div>
			<?php }?>
		<?php elseif (($adcounter / 3) ==6) : ?>
			
			<?php get_template_part( 'template-parts/content-home', get_post_type() ); ?>
			<?php if(is_active_sidebar('mob-ads6')){?><!--Ads2 -->
			<div class="m-ads ad-list ad-list-mpu">
				<div class="sleeve">
					<div class="ad ad-mpu"><div class="sleeve">
					 <?php dynamic_sidebar('mob-ads6');?>
					</div></div>
				</div>
			
			</div>
			<?php }?>
					<?php elseif (($adcounter / 3) ==7) : ?>
			
			<?php get_template_part( 'template-parts/content-home', get_post_type() ); ?>
			<?php if(is_active_sidebar('mob-ads7')){?><!--Ads2 -->
			<div class="m-ads ad-list ad-list-mpu">
				<div class="sleeve">
					<div class="ad ad-mpu"><div class="sleeve">
					 <?php dynamic_sidebar('mob-ads7');?>
					</div></div>
				</div>
			
			</div>
			<?php }?>
			
					<?php elseif (($adcounter / 3) ==8) : ?>
			
			<?php get_template_part( 'template-parts/content-home', get_post_type() ); ?>
			<?php if(is_active_sidebar('mob-ads8')){?><!--Ads2 -->
			<div class="m-ads ad-list ad-list-mpu">
				<div class="sleeve">
					<div class="ad ad-mpu"><div class="sleeve">
					 <?php dynamic_sidebar('mob-ads8');?>
					</div></div>
				</div>
			
			</div>
			<?php }?>
		<?php elseif (($adcounter / 3) ==9) : ?>
			
			<?php get_template_part( 'template-parts/content-home', get_post_type() ); ?>
			<?php if(is_active_sidebar('mob-ads9')){?><!--Ads2 -->
			<div class="m-ads ad-list ad-list-mpu">
				<div class="sleeve">
					<div class="ad ad-mpu"><div class="sleeve">
					 <?php dynamic_sidebar('mob-ads9');?>
					</div></div>
				</div>
			
			</div>
			<?php }?>
			
		<?php else : ?>
			<?php get_template_part( 'template-parts/content-home', get_post_type() ); ?>
		<?php endif; ?>
		<?php $adcounter++; ?>
	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

	<?php else :?>
		<?php get_template_part( 'template-parts/content-home', 'none' ); ?>
	<?php endif; ?>
    </div>
    </div><!--./home-news-list-->
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