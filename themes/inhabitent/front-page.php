<?php
/**
 *  Template Name: Front-page
 * Created by PhpStorm.
 * User: agataswistowska
 * Date: 17/11/2018
 * Time: 18:23
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="home-hero">
                <img alt="Inhabitant logo"
                     src="<?php echo get_stylesheet_directory_uri() ?>/images/logos/inhabitent-logo-full.svg">
            </section>
            <section class="product-info">
                <h2>Shop stuff</h2>
                <div class="product-type-blocks">
					<?php foreach ( get_terms( "product-type" ) as $term ): ?>
                        <div class="product-type-block">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/product-type-icons/<?php echo $term->name ?>.svg"
                                 alt="<?php echo $term->name ?>"
                            >
                            <p>
								<?php echo $term->description ?>
                            </p>
                            <a class="button" href="<?php echo esc_url( get_term_link( $term, "product-type" ) ) ?>">
								<?php echo $term->name ?> stuff
                            </a>
                        </div>
					<?php endforeach; ?>
                </div>
            </section>
            <section class="journal">
                <h2>Inhbitent journal</h2>
                <div class="posts-blocks">
                <?php foreach(get_posts( array('numberposts'=>3))  as $post ): ?>
                    <div class="post-block">
                        <div class="thumbnail-wrapper">
                            <img src="<?php echo get_the_post_thumbnail_url($post, "large") ?>" alt="<?php echo $post->name ?>">
                        </div>
                        <p><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
                        <h3><a href="<?php the_permalink($post) ?>"><?php echo get_the_title($post) ?></a></h3>
                        <a class="button black-btn" href="<?php the_permalink($post) ?>">
		                    Read entry
                        </a>
                    </div>
                <?php endforeach; ?>
                </div>
            </section>
            <section class="adventures">
                <h2>Latest adventures</h2>
                <div class="adventures-grid">
	                <?php foreach(get_posts( array('numberposts'=>4, 'post_type'=>'adventures'))  as $post ): ?>
                        <?php get_template_part( 'template-parts/content-adventure' ); ?>


	                <?php endforeach; ?>
                </div>

                <a href="<?php echo get_post_type_archive_link("adventures") ?>" class="button">More adventures</a>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>