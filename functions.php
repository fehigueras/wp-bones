<?php
/*
* @package WordPress
* @subpackage mmfilesi-bones
* @since mmfilesi-bones 1.0
*/
?>
<?php
/*-----------------------------------------------
Funcionalidades añadidas
----------------------------------------------- */
// añadir miniaturas
add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'homepage-thumb', 220, 180, true ); //(cropped)
}

?>