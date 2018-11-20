<?php
/**
 * Created by PhpStorm.
 * User: agataswistowska
 * Date: 19/11/2018
 * Time: 16:58
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php single_term_title( ) ?></h1>
					<?php
					the_archive_description();
					?>
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
