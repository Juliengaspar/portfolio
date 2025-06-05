<?php
/*ici va se trouver tous les function php qu'on développera pour plus tard */
// Charger les champs ACF exportés :
require_once get_template_directory() . '/fields.php';

//activer la sesion php
if (session_status()===PHP_SESSION_NONE){
    session_start();
}

function __hepl(string $translation, array $replacements = [])
{
// 1. Récupérer la traduction de la phrase présente dans $translation
    $base = __($translation, 'hepl-trad');

// 2. Remplacer toutes les occurrences des variables par leur valeur
    foreach ($replacements as $key => $value) {
        $variable = ':' . $key;
        $base = str_replace($variable, $value, $base);
    }

// 3. Retourner la traduction complète.
    return $base;
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
function creer_post_type_portfolio() {
    register_post_type('portfolio', [
        'label' => 'Portfolios',
        'description' => 'Mon portfolio pour mon projet pour le cours de design web',
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'public' => true,
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'portfolios',
        ],
        'supports' => ['title', 'excerpt', 'editor', 'thumbnail'],
        'show_in_rest' => true, // Pour compatibilité avec l'éditeur Gutenberg
    ]);
}
add_action('init', 'creer_post_type_portfolio');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Paramètres du footer',
        'menu_title'    => 'Footer',
        'menu_slug'     => 'footer-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

function register_custom_post_type_projets() {
    register_post_type('projet', [
        'label' => 'Projets',
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'projets'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_custom_post_type_projets');

function creer_cpt_projets() {
    register_post_type('projet', [
        'labels' => [
            'name' => 'Projets',
            'singular_name' => 'Projet',
            'add_new' => 'Ajouter un projet',
            'add_new_item' => 'Ajouter un nouveau projet',
            'edit_item' => 'Modifier le projet',
            'new_item' => 'Nouveau projet',
            'view_item' => 'Voir le projet',
            'search_items' => 'Rechercher un projet',
            'not_found' => 'Aucun projet trouvé',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'projets'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-portfolio',
    ]);
}
add_action('init', 'creer_cpt_projets');

