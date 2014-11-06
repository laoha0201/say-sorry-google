<?php
/*
Plugin Name: Laoha Theme Add
Plugin URI: 
Description: Say Sorry Google.
Version: 1.0.0
Author: Laoha 老蟹
Author URI: 
License: GPLv2 or later
*/
define( 'LAOHA_URL', plugins_url( '', __FILE__ ) );

function wp_style_del_web( $src, $handle ) {
	if( strpos(strtolower($src),'fonts.googleapis.com') ){
		$src='';
	}	
	return $src;
}
add_filter( 'style_loader_src', 'wp_style_del_web', 2, 2 );

function wp_script_del_web( $src, $handle ) {
	$src_low = strtolower($src);
	if( strpos($src_low,'maps.googleapis.com') ){
		return  str_replace('maps.googleapis.com','ditu.google.cn',$src_low);
	}	
	if( strpos($src_low,'ajax.googleapis.com') ){
		return  str_replace('ajax.googleapis.com','ajax.useso.com',$src_low);
	}
	return $src;
}
add_filter( 'script_loader_src', 'wp_script_del_web', 2, 2 );

?>
