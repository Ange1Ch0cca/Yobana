<?php
function estore_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'estore'),
    ));
}
add_action('after_setup_theme', 'estore_theme_setup');

function estore_theme_scripts() {
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/lib/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/lib/slick/slick-theme.css');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/lib/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'estore_theme_scripts');

// Función para obtener la calificación del producto (simulación)
function get_product_rating_html() {
    $rating_html = '<div class="ratting">';
    $rating_html .= '<i class="fa fa-star"></i>';
    $rating_html .= '<i class="fa fa-star"></i>';
    $rating_html .= '<i class="fa fa-star"></i>';
    $rating_html .= '<i class="fa fa-star"></i>';
    $rating_html .= '<i class="fa fa-star"></i>';
    $rating_html .= '</div>';
    return $rating_html;
}

?>
