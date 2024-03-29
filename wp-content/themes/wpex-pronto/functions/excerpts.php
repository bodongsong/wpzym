<?php
/**
 * Custom Excerpt Length
 *
 * @package WordPress
 * @subpackage Pronto
 * @since Pronto 1.0
*/


// Filters
add_filter( 'excerpt_length', 'wpex_custom_excerpt_length', 999 );
add_filter( 'excerpt_more', 'wpex_excerpt_more' );


// Custom excerpt length
if ( ! function_exists('wpex_excerpt_more') ) {
	function wpex_custom_excerpt_length( $length ) {
		return 15;
	}
}


// Custom excert "more"
if ( ! function_exists('wpex_excerpt_more') ) {
	function wpex_excerpt_more($more) {
		if ( get_theme_mod('wpex_blog_readmore') == '1' ) {
			return '&hellip;<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">'. __('read more','wpex') .'<span>&rarr;</span></a>';
		} else {
			return '&hellip;';
		}
	}
}