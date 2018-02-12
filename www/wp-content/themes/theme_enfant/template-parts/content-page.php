<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
    $enable_vc = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);
    if(!$enable_vc ) {
    ?>
    <header class="entry-header">
	</header><!-- .entry-header -->
    <?php } ?>

	<div class="entry-content">
	<?php

	
		//* Variables ACF pour l'image
		// L'image ACF est enregistrée en tant que "ID de l'image"
		$image_id = get_field('nom_du_champ_image_acf');
		// Création d'une taille d'image avec la fonction add_image_size();
		$taille_image = 'miniature';
		// Fonction WordPress qui stocke la balise img complète
		// https://developer.wordpress.org/reference/functions/wp_get_attachment_image/
		$img = wp_get_attachment_image($image_id, $taille_image); 
		?>
		
		<?php 	
			// je vérfie si mon champ existe
			if ( get_field('nom_du_champ_image_acf') ) { 
		?>

		<section class="photo">
			<?php 
				// Affichage la balise img avec echo
				echo $img; 
			?>
		</section>
		
		<?php } ?>

		<?php 
		
		the_content();
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->
	

	<?php if ( get_edit_post_link() && !$enable_vc ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'wp-bootstrap-starter' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
