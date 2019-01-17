<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<nav class="navigation-wrapper">
			</nav>
			<section class="banner">
				<div class="sisters">
					<h1 class="contact-banner">
					  <p>
				        <i class="fas fa-phone"></i>
				        <a class="underline phone-number" href="#">778-456-7891</a>
					  </p>
					  <p>
					    <i class="fas fa-envelope-open"></i>
				        <a class="underline email-banner" href="#">kennyanuscow</a>
					  </p>
					  <p>
					    <i class="fas fa-directions"></i>
				        <a class="underline directions-banner" href="./find-us">Deadman's</a>
				      </p>
					</h1>
				</div>
			</section>
			<section class="slogan">
			<div class="main-carousel">
  				<div class="carousel-cell">
					<h2>Weld and Forge Projects</h2>
				</div>
  				<div class="carousel-cell">
					<h2>Call or Come in Today!</h2>
				</div>
  				<div class="carousel-cell">
					<h2>Locally Made</h2>
				</div>
			</div>  
			</section>
			<section class="article-wrapper">

				<?php if ( have_posts() ) : ?>
				
				<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php endif; ?>
				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'template-parts/content' ); ?>
				
				<?php endwhile; ?>
				
				<?php the_posts_navigation(); ?>
				
				<?php else : ?>
				
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
				
				<?php endif; ?>
				
			</section>
				
				<!-- End of Default loop -->
				
			<section class="frontpage-shop">
           		<h2>Pick your Project!</h2>
			
				<div class="frontpage-block-container">
        			<?php 
        			$terms = get_terms(array(
            	'taxonomy' => 'product_type',
            	'hide_empty' => 0,   
        		));
		
				foreach($terms as $term): ?>
			
					<div class="frontpage-term">
						<p class="text-transition">Locally</p>
       					<p class="frontpage-term-link"><a href="<?php echo get_term_link( $term ); ?>">
						   <?php echo $term->name; ?></a></p>
						<p class="text-transition">Made</p>
    				</div>
    			<?php endforeach;?>
        
    	</div>
    </section>



	</div>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>