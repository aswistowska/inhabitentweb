<?php
/**
 * Created by PhpStorm.
 * User: agataswistowska
 * Date: 17/11/2018
 * Time: 18:23
 */


get_header(); ?>
    <div class="without-sidebar">
        <div id="primary" class="content-area ">
            <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'page' ); ?>

                <?php endwhile; // End of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
<?php get_footer(); ?>