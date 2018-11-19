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
                    <h1 class="page-title">Shop stuff</h1>
                    <ul>
						<?php foreach ( get_terms( "product-type" ) as $term ): ?>
                            <li>
                                <a href="<?php echo esc_url( get_term_link( $term, "product-type" ) ) ?>"
                                   title="<?php echo $term->description ?>"
                                >
									<?php echo $term->name ?>
                                </a>
                            </li>
						<?php endforeach; ?>

                    </ul>
                </header><!-- .page-header -->
                <div class="page-content">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
					get_template_part( 'template-parts/content-product' );
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
