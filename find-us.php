<?php
/*
Template Name: find-us
*/

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<section class="directions-container">
					<ul class="directions-shop">
						<li>When entering Deadman's Flats from Highway 1</li>
						<li>Make your way to 2nd Avenue</li>
						<li>Then head to River's Bend Gate </li>
						<li>Follow River's Bend Gate passed River's Bend Drive</li>
						<li>It will be your first right after the corner</li>
						<li>Ken's Ironworks is the last bay on the south side</li>
					</ul>
				</section>
			<?php endwhile; // End of the loop. ?>
			<div class="floral-deco-container">
      
	        </div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>