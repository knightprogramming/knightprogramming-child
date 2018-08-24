<?php
function my_theme_enqueue_styles()
{

    $parent_style = 'storefront-style';

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css', '/style-rtl.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


/**
 * Remove breadcrumbs for Storefront theme
 */
add_action( 'init', 'wc_remove_storefront_breadcrumbs');

function wc_remove_storefront_breadcrumbs() {
  remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10 );
}

?>
