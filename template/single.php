<?php get_header(); ?>

<div id="main">
	<div id="content">
		<a class="breadcrumb" href="../"><span style="font-size: 1.5em">←</span><b> Inicio</b></a>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section id="continguts">
			<div class="titol">
				<h1><?php the_title(); ?></h1>
			</div> 
				<p>Publicado el <?php the_time('j \d\e F \d\e Y') ?></p>
				<p><?php the_content(); ?></p>
			</section>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
			
            <!-- De moment no ho toquem secció comentaris
			<section id="Comentarios">
                
				<?php // comments_template(); ?>
           
			</section>
            -->

	</div>
</div>

<?php get_footer(); ?>

<!-- Imagen destacada para RRSS -->
<?php
function mytheme_excerpt_rss_thumbs($content) {
 
    global $post;
    $args = array(
        'post_type'      => 'attachment', // Seleccionamos adjuntos
        'post_mime_type' => 'image', // Del tipo "imagen"
        'order'          => 'ASC', // Los ordenamos ascendentemente
        'orderby'        => 'menu_order', // Que respete el orden asignado
        'post_parent'    => $post->ID // De la entrada actual
    );
    $images = get_posts($args);
    $style = 'float:right;margin:0 0 20px 20px;'; // Estilos CSS
 
    // La entrada tiene una imagen destacada.
    if ( has_post_thumbnail($post->ID) ) {
        $content = '<div style="' . $style . '">' . get_the_post_thumbnail($post->ID, 'thumbnail') . '</div>' . $content;
 
    // No se ha asignado una imagen destacada, asi que adjuntamos
    // la primera que encontramos asociada a la entrada actual.
    } elseif ( $images ) {
        $post_link = get_permalink();
        $content = '<a href="' . $post_link . '" style="' . $style . '">' . wp_get_attachment_image($images[0]->ID, 'thumbnail') . '</a>' . $content;
    }
 
    return $content;
}
 
add_filter('the_excerpt_rss', 'mytheme_excerpt_rss_thumbs');
?>