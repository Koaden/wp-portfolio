<?php
function create_portfolio_cpt() {
    $labels = array(
        'name' => 'Portfolio',
        'singular_name' => 'Réalisation',
        'menu_name' => 'Portfolio',
        'all_items' => 'Toutes les réalisations',
        'add_new' => 'Ajouter une réalisation',
        'add_new_item' => 'Ajouter une nouvelle réalisation',
        'edit_item' => 'Modifier la réalisation',
        'new_item' => 'Nouvelle réalisation',
        'view_item' => 'Voir la réalisation',
        'search_items' => 'Rechercher une réalisation',
        'not_found' => 'Aucune réalisation trouvée',
        'not_found_in_trash' => 'Aucune réalisation dans la corbeille'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'portfolio'),
        'taxonomies' => array('category')
    );

    register_post_type('portfolio', $args);
}

add_action('init', 'create_portfolio_cpt');