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

<nav id="barra_navegacion">
Aquí irá la barra de navegación
</nav> 

<div id="main">
<div id="primary">
	<?php while (have_posts()) : the_post(); ?> <!-- principio del loop -->
		<article class="layout_contenedor">
			<?php if ( wp_is_mobile() ) {
				if ( has_post_thumbnail() ) {
				the_post_thumbnail('medium', array('class' => 'imagenes_elasticas' ));
				} else { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/sin_imagenes.jpg" class="imagenes_elasticas"/>
				<?php }
			} else {
				if ( has_post_thumbnail() ) {
				the_post_thumbnail('full', array('class' => 'imagenes_elasticas' ));
				} else { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/sin_imagenes.jpg" class="imagenes_elasticas" />
				<?php }
			} ?>
			<header class="layout_titular">
				<h3><a href="<?php the_permalink( ); ?>"> <?php the_title() ; ?> </a></h3>
			</header>
			<div class="layout_sumario"><?php the_excerpt() ; ?></div>
			<aside class="layout_metadatos">
				<p><?php _e('Clasificado en: ','mmfilesi-bones'); ?>
				<?php the_category(', '); ?></p>
				<p><?php the_tags(); ?></p>
				<?php _e('Escrito el: ','mmfilesi-bones'); ?>
				<?php the_time('j/m/Y'); ?></p>
			</aside>
		</article>
	<?php endwhile; ?> <!-- final del loop -->
</div> <!-- #primary -->

<aside id="secondary">
Aquí irá la columna secundaria o sidebar
</aside> <!-- #secondary -->

</div> <!-- #main -->

<?php if (mobile_detect()==0) { ?>
<aside id="sibebar_inferior">
Aquí irá el sidebar inferior
</aside>
<?php } ?>

<footer id="pie">
Aquí irá el pie
</footer>

</div> <!-- #wrap -->

</body>
</html>
