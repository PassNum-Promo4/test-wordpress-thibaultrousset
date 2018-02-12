<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>


	<section id="primary" class="row content-area col-sm-12 ">
		<main id="main" class="row site-main" role="main">
		<!--<p>archive produit</p>-->
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header col-12 text-center">
				<h1>Mes projets</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
			<div class="col-4">
			
			<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			$image = get_field('nom_du_champ_image_acf');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			
			if( $image ) {
			
				echo wp_get_attachment_image( $image, $size );
			
			}
			?>
			</div>
			
			<?php
			
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
