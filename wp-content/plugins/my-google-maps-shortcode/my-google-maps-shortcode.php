<?php
/**
 * Plugin Name: My Google Maps Shortcode
 * Plugin URI: http://danielpataki.com
 * Description: Allows users to add flexible Google Maps to post content
 * Version: 1.0.0
 * Author: Daniel Pataki
 * Author URI: http://danielpataki.com
 * License: GPL2
 */
?>
<?php

add_action( 'admin_enqueue_scripts', 'mgms_enqueue_assets' );
function mgms_enqueue_assets() {
	wp_enqueue_script( 
	  'google-maps', 
	  '//maps.googleapis.com/maps/api/js?key=AIzaSyAucE0xVhj6hxQeuoVC-w31g03KQcSW_uc&callback=initMap', 
	  array(), 
	  '1.0', 
	  true 
	);
}

add_shortcode( 'map', 'mgms_map' );
function mgms_map( $args ) {
	$id = substr( sha1( "Google Map" . time() ), rand( 2, 10 ), rand( 5, 8 ) );
	return "<div class='map' id='map-$id'></div>";
}


add_shortcode( 'map', 'mgms_map' );
function mgms_map( $args ) {
	$id = substr( sha1( "Google Map" . time() ), rand( 2, 10 ), rand( 5, 8 ) );
	ob_start();
	?>
	<div class='map' style='height:300px; margin-bottom: 1.6842em' id='map-<?php echo $id ?>'></div> 


	<?php
	$output = ob_get_clean();
	return $output;
}


?>


