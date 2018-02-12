<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-12">
		<main id="main" class="site-main" role="main">
			<h2>
				Ma description
			</h2>	
		<div class="col-4">
		<?php 

$image = get_field('image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo wp_get_attachment_image( $image, $size );

}

?>
			</div>
	<div class="row">
		
		<div class="col-8">
			<h3>
				Mes Experiances
			</h3>
			<?php the_field('experiances'); ?>
		</div>
		<div class="col-4">
			<h3>
				Mes Compétances
			</h3>
<p> <?php the_field('competances'); ?></p>
		</div>
		
		
			</div>	
			
		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
