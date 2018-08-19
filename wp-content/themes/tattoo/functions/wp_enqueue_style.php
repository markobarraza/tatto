<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/* Register Scripts */
	wp_register_style( 'flexslider', get_theme_file_uri( '/assets/css/flexslider.css'), null, null, 'screen' );
	wp_register_style( 'bootstrap', get_theme_file_uri( 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u'), null, null, 'screen' );
	wp_register_style( 'font-style', get_theme_file_uri( '/assets/css/font-style.css'), null, null, 'screen' );


	wp_register_style( 'main_style', get_theme_file_uri( '/assets/css/style.css'), array('flexslider', 'font-style', 'bootstrap'), $theme_data->get( 'Version' ), 'screen' );

	/* Enqueue Scripts */


	wp_enqueue_style( 'main_style' );

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
