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

/*-----------------------------------------------
Clases
----------------------------------------------- */

/* mobile-detect - Opcional, incluir solo si se necesita,
en cuyo caso hay que subir la clase Mobile_Detect.php a un directorio llamado inc.
más información: http://www.mmfilesi.com/blog/como-detectar-dispositivos-moviles-mediante-php/ */

/* add_action('init', 'mobile_detect');

function mobile_detect() {
	require_once ('inc/Mobile_Detect.php');
	$detect = new Mobile_Detect();
	return ($detect->isMobile())+($detect->isTablet());
} */

/* Ejemplo de uso:
<?php if (mobile_detect()==0) { 
Código HTML a mostrar cuando no es ni móvil ni tablet
<?php } */

?>