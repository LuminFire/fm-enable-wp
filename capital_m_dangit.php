<?php
/*
Plugin Name: Capital M Dang It!
Plugin URI: http://cimbura.com/
Description: Fixing your Filemaker [sic] flubs since 2015
Author: Cimbura.com (Nick Ciske)
Version: 1.0
Author URI: http://cimbura.com/
*/

add_action( 'the_content', 'capital_M_dangit' );
add_action( 'the_title', 'capital_M_dangit' );
add_action( 'widget_title', 'capital_M_dangit' );
add_action( 'widget_content', 'capital_M_dangit' );

function capital_M_dangit( $text ){
	return str_replace( 'Filemaker', 'FileMaker', $text );
}