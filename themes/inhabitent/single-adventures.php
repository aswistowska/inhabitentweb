<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="image-wrapper">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( ); ?>
                        <?php endif; ?>
                    </div>

                    <div class="entry-content">
                        <header class="entry-header">
		                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </header><!-- .entry-header -->
	                    <p class="entry-meta"><?php red_starter_posted_by(); ?></p>
			            <?php the_content(); ?>

                        <div class="buttons">
                            <button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
                            <button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
                            <button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
                        </div>
                    </div><!-- .entry-content -->

                </article><!-- #post-## -->

            <?php endwhile; // End of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
<?php get_footer(); ?>
