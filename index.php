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

<!-- Cargamos html5shiv si el navegador es un IE anterior al 9 para que se interpreten
de forma correcta los tags semánticos de HTML5 -->
<!--[if IE 6]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
<![endif]-->
<!--[if IE 7]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
<![endif]-->
<!--[if IE8]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
<![endif]-->

</head>
<body>
<div id="wrap">
<header>
<!-- Aquí irá la cabecera -->
</header> 

<nav>
<!-- Aquí irá la barra de navegación -->
</nav> 

<div id="main">
<div id="primary">
	<?php while (have_posts()) : the_post(); ?> <!-- principio del loop -->
		<article>
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
			<header>
				<h3><a href="<?php the_permalink( ); ?>"> <?php the_title() ; ?> </a></h3>
			</header>
			<?php the_excerpt() ; ?>
			<aside>
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
<!-- Aquí irá la columna lateral (sidebar) -->
</aside> <!-- #secondary -->

</div> <!-- #main -->

<footer>
<!-- Aquí irá el pie de página -->
</footer>

</div> <!-- #wrap -->

</body>
</html>
