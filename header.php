<?php
/*
 * @package WordPress
 * @subpackage mmfilesi-bones
 * @since mmfilesi-bones 1.0
*/
?><!DOCTYPE html>
<html>
<head>
<title>
</title>

<!-- CSS -->	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- Script Media Queries y semánticos-->
<!--[if lte IE 8]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<?php
	/* Esta función sirve para plugins y jqueries. No quitar */
	wp_head();
?>

</head>
<body>
<div id="wrap">
<header id="cabecera_principal">
	<div id="cabecera_principal_col_izda">
		Aquí irá la imagen
	</div>
	<div id="cabecera_principal_col_dcha">
		Aquí irá el buscador
	</div>
</header> 

<?php wp_nav_menu(
		 array(
		 'container' => 'nav',
		 'items_wrap' => '<ul id="menu_principal">%3$s</ul>',
		 'theme_location' => 'principal'
		 )); ?>			 

<?php wp_nav_menu(
		 array(
		 'container' => 'nav',
		 'container_class' => 'barras_navegacion',
		 'container_id' => 'barra_inferior',
		 'menu_class' => 'barra_inferior_listado',
		 'items_wrap' => '<ul id="menu_inferior">%3$s</ul>',
		 'depth' => 2,		 		 
		 'theme_location' => 'secundaria'
		 )); ?>	