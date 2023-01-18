<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

		<?php
		while ( have_posts() ) :
			the_post();

			//get_template_part( 'template-parts/content', get_post_type() );
			?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title();?></h1>
			<div class="meta-wrap"><span><?php the_author(); ?></span><span><?php the_time(); ?></span></div>
			<div class="article-share-wrap">
   <span>Share</span>
   <div id="share"></div>
   <ul id="share-links">
      <li class="twitter"><a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink();?>&amp;text=<?php echo the_title();?>" class="socicon-twitter"><span>Twitter</span></a></li>
      <li class="linkedin"><a href="https://www.linkedin.com/shareArticle?url=<?php echo get_permalink();?>" onclick="window.open(this.href, '', 'width=600,height=600'); return false;" class="socicon-linkedin"><span>LinkedIn</span></a></li>
      <li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink();?>" onclick="window.open(this.href, '', 'width=600,height=600'); return false;" class="socicon-facebook"><span>Facebook</span></a></li>
   </ul>
</div>
<div class="entry-thumbnail image-wrap">
<?php
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail( ); // show featured image
        } ?>
</div>
<div class="entry-thumbnail-caption"><?php the_post_thumbnail_caption();?></div>
		</header>

		<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'newslitepro' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		?>
	</div><!-- .entry-content -->
		</article>
			
		<?php
		endwhile; // End of the loop.
		?>

	<div class="news-list generic-list" id="article-news-list">
		<div class="sleeve">
		<h2>Latest news</h2>
		<div class="news-list-article-wrap">
			
<?php 
// the query
$the_query = new WP_Query( array(
    'posts_per_page' => 30,
)); 
?>

<?php if ( $the_query->have_posts() ) : ?>
		
	<?php $adcounter = 1; ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
	<?php endif; ?>
		</div>
		</div>
	</div>



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