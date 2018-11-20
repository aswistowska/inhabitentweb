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
                <img alt="Inhabitant logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/logos/inhabitent-logo-full.svg">
            </section>
            <section class="product-info">
                <h2>Shop stuff</h2>
            </section>
            <section class="journal">
                <h2>Inhavitant journal</h2>
            </section>
            <section class="adventures">
                <h2>Latest adventures</h2>
            </section>
        </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>