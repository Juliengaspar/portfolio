<?php
/*ici va se trouver tous les function php qu'on développera pour plus tard */
// Charger les champs ACF exportés :
include_once('./fields.php');

//activer la sesion php
if (session_status()===PHP_SESSION_NONE){
    session_start();
}

// Gutenberg est le nouvel éditeur de contenu propre à Wordpress
// il ne nous intéresse pas pour l'utilisation du thème que nous
// allons créer. On va donc le désactiver :

// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );
// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );
// Disable default front-end styles.
add_action( 'wp_enqueue_scripts', function() {
    // Remove CSS on the front end.
    wp_dequeue_style( 'wp-block-library' );
    // Remove Gutenberg theme.
    wp_dequeue_style( 'wp-block-library-theme' );
    // Remove inline global CSS on the front end.
    wp_dequeue_style( 'global-styles' );
}, 20 );
//
//add_theme_support('post-thumbnails', ['portfolio']);
//register_post_type( string $post_type, array|string $args = array() ): WP_Post_Type|WP_Error
register_post_type('portfolio',[
    'label' => 'Portfolios',
    'description' => 'Mon portfolio pour mon projet pour le cours de design web',
    'menu_position' => 5,
    'menu_icon' => 'dashicons-portfolio',
    'public' => true,
    'has_archive' => true,
    'rewrite' => [
        'slug' => 'portfolios',
    ],
    'supports' => ['title','excerpt','editor','thumbnail'],
]);