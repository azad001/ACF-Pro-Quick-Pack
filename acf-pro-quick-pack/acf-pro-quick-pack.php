<?php
/**
 * Plugin Name: ACF PRO Quick Pack
 * Plugin URI:  https://akalam.me/acfpro-quick-pack/
 * Description: ACF PRO Quick Pack for create theme options, advance fields, flexible content, Acf block for Gutenberg custom addon. 
 * Version:     1.0.0
 * Author:      Azad
 * Author URI:  https://akalam.me/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: apqp
 * Domain Path: /languages
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Detect plugin. For use on Front End only.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Checking Plugin activation.
 */
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ):

    function apqp_admin_notice__error() {
	    $class = 'notice notice-error is-dismissible';
	    $message = __( 'Please Activate ACF PRO Plugin.', 'apqp' );
	 
	    printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
	}
	add_action( 'admin_notices', 'apqp_admin_notice__error' );

endif;


/**
 * Initialization theme option pages.
 */

add_action( "init", "apqp_theme_options_page" );

function apqp_theme_options_page(){
	require_once plugin_dir_path( __FILE__ ) . '/options/acf_theme_options.php';
}


add_action( "init", "register_acf_block_types" );

function register_acf_block_types() {

	    // register a testimonial block.
	    acf_register_block_type(array(
	        'name'              => 'testimonial',
	        'title'             => __('Testimonial'),
	        'description'       => __('A custom testimonial block.'),
	        'render_template'   => plugin_dir_path( __FILE__ ) . '/gutenberg-blocks/testimonial/testimonial.php',
	        'category'          => 'formatting',
	        'icon'              => 'admin-comments',
	        'keywords'          => array( 'testimonial', 'quote' ),
	    ));
	}

	// Check if function exists and hook into setup.
	if( function_exists('acf_register_block_type') ) {
	    add_action('acf/init', 'register_acf_block_types');
	}



