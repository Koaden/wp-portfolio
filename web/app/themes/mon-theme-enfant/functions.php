<?php
function blocksy_child_enqueue_styles() {
    // Charger le CSS du thème parent (Blocksy)
    wp_enqueue_style('blocksy-parent-style', get_template_directory_uri() . '/style.css');

    // Charger le CSS du thème enfant
    wp_enqueue_style(
        'blocksy-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('blocksy-parent-style'), // Dépendance correcte
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'blocksy_child_enqueue_styles');

function blocksy_child_add_custom_message($content) {
    if (is_single()) {
        return '<p>🚀 Bienvenue sur cet article !</p>' . $content;
    }
    return $content;
}
add_filter('the_content', 'blocksy_child_add_custom_message');

require_once get_stylesheet_directory() . '/cpt-portfolio.php';
add_theme_support('post-thumbnails', array('portfolio'));