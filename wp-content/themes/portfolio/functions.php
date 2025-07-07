<?php
/*ici va se trouver tous les function php qu'on développera pour plus tard */
// Charger les champs ACF exportés :
require_once get_template_directory() . '/fields.php';

//activer la sesion php
if (session_status()===PHP_SESSION_NONE){
    session_start();
}


function dw_get_navigation_links(string $location): array
{
    // Récupérer l'objet WP pour le menu à la location $location
    $locations = get_nav_menu_locations();

    if(! isset($locations[$location])) {
        return [];
    }

    $nav_id = $locations[$location];
    $nav = wp_get_nav_menu_items($nav_id);

    // Transformer le menu en un tableau de liens, chaque lien étant un objet personnalisé

    $links = [];

    foreach ($nav as $post) {
        $link = new stdClass();
        $link->href = $post->url;
        $link->label = $post->title;
        $link->icon = get_field('icon', $post);

        $links[] = $link;
    }

    // Retourner ce tableau d'objets (liens).

    return $links;
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
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

//Activer les miniatures pour les articles
add_theme_support('post-thumbnails');

//
//add_theme_support('post-thumbnails', ['portfolio']);
//register_post_type( string $post_type, array|string $args = array() ): WP_Post_Type|WP_Error
function mon_portfolio_styles() {
    // 1. Fichier reset.css pour toutes les pages
    wp_enqueue_style('reset-css', get_template_directory_uri() . '/src/css/reset.css', [], time());

    // 2. Styles selon les templates ou fichiers
    if (is_page_template('front-page.php')) {
        wp_enqueue_style('accueil-css', get_template_directory_uri() . '/src/css/accueil.css' , [], time());
    }

    if (is_page_template('contact.php')) {
        wp_enqueue_style('contact-css', get_template_directory_uri() . '/src/css/contact.css' , [], time());
    }

    if (is_page_template('projets.php')) {
        wp_enqueue_style('projets-css', get_template_directory_uri() . '/src/css/projets.css' , [], time());
    }

    if (is_page_template('single_project.php') || is_singular('project')) {
        wp_enqueue_style('single-project-css', get_template_directory_uri() . '/src/css/single_project.css' , [], time());
    }
    if (is_page_template('a_propos.php') || is_singular('project')) {
        wp_enqueue_style('a_propos-css', get_template_directory_uri() . '/src/css/a_propos.css' , [], time());
    }

    // 3. Header et footer toujours présents
    wp_enqueue_style('header-css', get_template_directory_uri() . '/src/css/header.css' , [], time());
    wp_enqueue_style('footer-css', get_template_directory_uri() . '/src/css/footer.css' , [], time());
}
add_action('wp_enqueue_scripts', 'mon_portfolio_styles');






function creer_post_type_portfolio() {
    register_post_type('portfolio', [
        'label' => 'Portfolios',
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'portfolios'],
        'supports' => ['title', 'excerpt', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-portfolio',
        'show_in_rest' => true,
    ]);
}
add_action('init', 'creer_post_type_portfolio');

if(function_exists('acf_add_options_page')){
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

function creer_cpt_projets() {
    register_post_type('projet', [
        'labels' => [
            'name' => 'Projets__galeries',
            'singular_name' => 'Projet',
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
        'show_in_rest' => true,
    ]);
}
add_action('init', 'creer_cpt_projets');


if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'    => 'Paramètres du footer',
        'menu_title'    => 'Footer',
        'menu_slug'     => 'footer-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);
}

