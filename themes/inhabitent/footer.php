<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
                <div class="main-container">
	                <div class="footer-row">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <img alt="Inhabitant logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/logos/inhabitent-logo-text.svg">
                            </a>
                        </div>
                    </div>
                    <div class="footer-row">
                        <div class="site-info ">
                            COPYRIGHT © 2019 INHABITENT
                        </div><!-- .site-info -->
                    </div>
                </div>

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
