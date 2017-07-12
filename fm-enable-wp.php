<?php
/*
Plugin Name: Make WordPress more FileMaker friendly
Plugin URI: https://luminfire.com/
Description: Making FileMaker and WordPress play better together since 2017
Author: LuminFIre (Nick Ciske)
Version: 1.0
Author URI: https://luminfire.com/
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
* ensure brand consistency
*/
add_filter( 'the_content', 'fmwp_capital_M_dangit' );
add_filter( 'the_title', 'fmwp_capital_M_dangit' );
add_filter( 'widget_title', 'fmwp_capital_M_dangit' );
add_filter( 'widget_content', 'fmwp_capital_M_dangit' );

function fmwp_capital_M_dangit( $text ){
	
	$text = str_replace( array( 'filemaker', 'Filemaker' ), 'FileMaker', $text );
	return $text;

}

/**
* allow filemaker .fmp12 uploads
*/
function fmwp_mime_type( $mime_types ){

	$mime_types['fmp12'] = 'application/x-filemaker'; //Adding fmp12 extension
	$mime_types['fp7'] = 'application/x-filemaker'; //Adding fp7 extension
	return $mime_types;

}

add_filter('upload_mimes', 'fmwp_mime_type', 1, 1);
