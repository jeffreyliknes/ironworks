<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.svg);
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Ironworks';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );



// Replaces the excerpt "Read More" text by a link
function ironworks_excerpt_more( $more ) {
	global $post;
 return ' [...]<p><a class="moretag" href="'. get_permalink($post->ID) . '"> Read More &rarr;</a></p>';
}
add_filter('excerpt_more', 'ironworks_excerpt_more');

/*
*Filter the product archive title
*/

function ironworks_archive_title( $title ) {
	if( is_post_type_archive( 'product' ) ) {
		$title = 'Shop Stuff';
	} elseif( is_tax( 'product_type' ) ) {
		$title = sprintf( '%1$s', single_term_title( '', false ) );
	}
	return $title;
}


add_filter('get_the_archive_title', 'ironworks_archive_title' );


/*
*Modify the Product post type archive loop
*/

function ironworks_mod_post_type_archive( $query ) {
	if(
		( is_post_type_archive( array( 'product' ) ) || $query->is_tax( 'product_type' ) )
		&& !is_admin()
		&& $query->is_main_query()
	){
		$query->set( 'orderby', 'title' );
		$query->set( 'order', 'ASC' );
		$query->set( 'posts_per_page', 16 );
	}
} 



add_action( 'pre_get_posts', 'ironworks_mod_post_type_archive' );