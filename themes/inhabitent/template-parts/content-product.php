<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="thumbnail-wrapper">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'large' ); ?>
        </a>
    </div>
    <div class="product-title-box">
	    <span class="product-title">
            <?php the_title(); ?>
        </span>
        <span class="product-price">
            <?php echo post_custom('price'); ?>
        </span>
    </div>
</article><!-- #post-## -->
