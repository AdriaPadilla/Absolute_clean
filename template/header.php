<html>
<head>
<meta charset="utf8mb4">

	<!--Construcción de la meta <title> -->
	<?php if (is_single() || is_page() ) : if (have_posts() ) : while (have_posts() ) : the_post(); ?>
		<title><?php the_title(); ?></title>
	<?php endwhile; endif; elseif (is_home() ): ?>
		<title><?php the_title(); ?></title>
	<?php endif; ?>

	<!-- componemos la <meta description>-->
	<?php if (is_single() || is_page() ) : if (have_posts() ) : while (have_posts() ) : the_post(); ?>
		<meta name="description" content="<?php echo get_the_excerpt();?>">
		<!-- Si es la Homepage -->
		<?php endwhile; endif; elseif (is_home() ): ?>
			<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php endif; ?>


<!-- Meta etiquetas -->

	<!-- Cargamos el CSS -->
		<link rel="stylesheet" href="<?php echo get_site_url( 'path' ); ?>/wp-content/themes/template/style.css">
	
	<!-- fijamos la escala inicial de tamaño elementos -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- Codigo Analytics
	<script>
		// Podéis pegarlo aquí
	</script>
	-->

</head>
<body>
<div id="wrapper">
<div id="header">

	<div id="logo">
		<img src="http://moodle.adriapadilla.net/wp-content/themes/template/logo.jpg">
	</div>

	<div id="header-title">
		<h2><?php echo get_bloginfo( 'name' ); ?></h2>
		<h3><i><?php echo get_bloginfo( 'description' ); ?></i></h3>
	
	</div>
<hr>
</div>