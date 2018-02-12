<?php add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'projet',
    array(
      'labels' => array(
        'name' => __( 'Projet' ),
        'singular_name' => __( 'Projet' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'projets', 'with_front' => true ),
    )
  );
}
register_taxonomy( 'categorie', 'projet', array( 'hierarchical' => false, 'label' => 'Categorie', 'query_var' => true, 'rewrite' => true ) )
?>
<?php add_action( 'init', 'create_post_type2' );
function create_post_type2() {
  register_post_type( 'accueil',
    array(
      'labels' => array(
        'name' => __( 'accueil' ),
        'singular_name' => __( 'accueil' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'accueil', 'with_front' => true ),
    )
  );
}
register_taxonomy( 'categorie', 'home', array( 'hierarchical' => false, 'label' => 'Categorie', 'query_var' => true, 'rewrite' => true ) )
?>



<?php
/* Chargement de la feuille du style du theme parent */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-wp-bootstrap-starter-style', get_template_directory_uri() . '/style.css' );


}


