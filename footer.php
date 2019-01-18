<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				
				<section class="footer-info">
				  <div class="footer-wrapper">
					  <div class="info-logo-wrapper">
					<div class="footer-contact-banner">
					  <p>
				        <i class="fas fa-phone"></i>
				        <a class="underline phone-number" href="#">403-431-3667</a>
					  </p>
					  <p>
					    <i class="fas fa-envelope-open"></i>
				        <a class="underline email-banner" href="#">ironken@gmail.com</a>
					  </p>
					  <p>
					    <i class="fas fa-directions"></i>
				        <a class="underline directions-banner" href="./find-us">Unit 1, 2 Limestone Valley, Deadman's Flats, Canmore</a>
				      </p>
					</div>
					<div class="footer-logo-wrapper">	<a href="<?php bloginfo( 'url' ); ?>">
					  <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="logo"/></a></div>
					</div>
					<div class="copyright">&copy; Liknes 2019</div>
				  </div>
			    </section>
				
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		
	</body>
</html>
