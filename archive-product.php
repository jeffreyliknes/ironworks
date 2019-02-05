<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 *  Template Name: Archive Product Template
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="container">
			  <header class="page-header">
			 <h2 class="page-title">Archive</h2>
          <div class="shop-term-container">
        
        <?php
        
          $terms = get_terms(array(
            'taxonomy' => 'product_type',
            'hide_empty' => 0, 
          ));
          foreach($terms as $term): ?>
			
			  <div class="shop-term">
          <a href="<?php echo get_term_link($term); ?>">
          <p><?php echo $term->name; ?></p></a>        
			  </div>
			
		    <?php endforeach; ?>		
    </div>
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
    </div><!-- #content -->
  </main><!-- #main -->
</div><!-- #primary -->
  
<?php get_footer(); ?>