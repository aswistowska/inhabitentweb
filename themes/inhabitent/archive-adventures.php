<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
			<?php if ( have_posts() ) : ?>
                <header class="page-header">
                    <h1 class="page-title">Latest Adventures</h1>

                </header><!-- .page-header -->
                <div class="adventures-grid">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
					get_template_part( 'template-parts/content-adventure' );
					?>
				<?php endwhile; ?>
                </div>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
        </div><!-- .container -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
