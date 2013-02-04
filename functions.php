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
Menús
----------------------------------------------- */

register_nav_menus( array (
	'principal' => __( 'barra principal', 'mmfilesi-bones' ),
	'secundaria'=>__( 'barra secundaria', 'mmfilesi-bones' )
));

/*-----------------------------------------------
Jqueries
----------------------------------------------- */	

function carga_jqueries() {	
	wp_register_script('menu_desplegado', get_template_directory_uri() . '/js/menu_desplegado.js', array('jquery'),false);
	wp_enqueue_script( 'menu_desplegado' );
	} 
add_action( 'wp_enqueue_scripts', 'carga_jqueries' ); 	


/*-----------------------------------------------
Sidebar
----------------------------------------------- */

function sidebars_init() {

	register_sidebar(array(
		'name' => __('Sidebar principal', 'mmfilesi-bones'),
		'description' => 'Sidebar principal',
		'id' => 'sidebar-principal',
		'before_widget' => '<li class="sidebar_widget_lateral" id="%1$s">',
		'after_widget' => '</li>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
		));

	register_sidebar(array(
		'name' => __('Sidebar inferior', 'mmfilesi-bones'),
		'description' => 'Sidebar inferior',
		'id' => 'sidebar-inferior',
		'before_widget' => '<li class="sidebar_widget_inferior" id="%1$s">',
		'after_widget' => '</li>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
		));

}

add_action( 'widgets_init', 'sidebars_init' );

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