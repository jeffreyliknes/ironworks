<?php
/**
 * The template for displaying taxonomy product types.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="container">
			
			<?php if ( have_posts() ) : ?>
			
			<header class="page-header">
				<!-- archive title and description -->
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );	
					?>
				 <div class="single-term-description">
					 <?php the_archive_description(); ?>
					</div>
					
					<?php endif; ?>
				</header><!-- .page-header -->
				
				<div class="product-container">
	<?php /* Start the Loop */ ?>
 
 <?php while ( have_posts() ) : the_post(); ?>
      <div class="product-archive">
		  <!-- returns thumbnail wrapped in an anchor -->
		<div class="thumbnail-container">
	  <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'medium' ); ?>
        <?php endif; ?>
        </a>
		</div>
		<div class="archive-product-info">
    <a class="single-product-title" href="<?php echo get_permalink(); ?>"><?php if (  the_title()  ) : ?>
            <?php the_title(); ?>
            <?php endif; ?>
          </a> 
        </div>
    	</div>
    <?php endwhile; ?>
		</div>
		<div class="floral-deco-container">
      
			</div>	
    </div><!-- #content -->
    </main><!-- #main -->
  </div><!-- #primary -->
  
<?php get_footer(); ?>