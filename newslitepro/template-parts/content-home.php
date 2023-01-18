<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package News_Lite
 */

?>
<div class="news-list-article">
    <div class="image-wrap">
    <a href="<?php echo get_permalink();?>">
        <?php
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail( 'post-thumbnails', array( 'class'  => 'attachment-article-toc-image size-article-toc-image wp-post-image' ) ); // show featured image
        } ?>
    </a>

    </div>
    <div class="content-wrap">
        <?php
    the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );  ?>
    <div class="summary-wrap"><?php the_excerpt();?></div>
    <div class="meta-wrap"><span><?php the_time(); ?></span></div>

    </div><!--./content-wrap-->

</div><!--./news-list-article-->
