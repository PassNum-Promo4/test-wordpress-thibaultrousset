<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */
get_header(); ?>
    <section id="primary" class="content-area col-sm-12 col-lg-8">
        <main id="main" class="site-main" role="main">
            <h2>
                <?php the_field('nom_du_projet'); ?>
            </h2> 
        <a href="<?php the_field('lien'); ?>">Visiter le projet</a>
    <div class="row">
        <div class="col-7">
        <?php 
$image = get_field('nom_du_champ_image_acf');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $image ) {
    echo wp_get_attachment_image( $image, $size );
}
?>
            </div>
        <div class="col-4">
            <?php the_field('description'); ?>
        </div>
        
        
            </div>        
    
            
                
        
<p>
                <?php the_field('technologies_utilisees_pour_le_projet'); ?>
            </p>
        </main><!-- #main -->
    </section><!-- #primary -->
<?php

get_footer();