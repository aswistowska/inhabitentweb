<?php
/**
 * Created by PhpStorm.
 * User: agataswistowska
 * Date: 19/11/2018
 * Time: 14:25
 */

get_header(); ?>
	<div class="with-sidebar">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part('template-parts/content' ); ?>
						<?php echo '<p><a href=' ?>
	                <?php the_permalink()?>
	                <?php echo 'class=\"read-more black-btn\">Read more →</a></p>'?>

	            <?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div><!-- #content -->
<?php get_footer(); ?>