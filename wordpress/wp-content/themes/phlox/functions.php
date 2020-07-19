<?php
/**
 *  Functions and definitions for auxin framework
 *
 * 
 * @package    Auxin
 * @author     averta (c) 2014-2020
 * @link       http://averta.net
 */

/*-----------------------------------------------------------------------------------*/
/*  Add your custom functions here -  We recommend you to use "code-snippets" plugin instead
/*  https://wordpress.org/plugins/code-snippets/
/*-----------------------------------------------------------------------------------*/


// your code here


/*-----------------------------------------------------------------------------------*/
/*  Init theme framework
/*-----------------------------------------------------------------------------------*/
require( 'auxin/auxin-include/auxin.php' );
/*-----------------------------------------------------------------------------------*/


add_action( 'init', function(){

	$meta = get_post_meta( 8, '_elementor_data', true );

	if ( is_string( $meta ) && ! empty( $meta ) ) {
		$meta = json_decode( $meta, true );
	}

	if ( empty( $meta ) ) {
		$meta = [];
	}

	//dump( $meta );
});
