<?php
function my_theme_enqueue_styles() {

    $parent_style = 'storefront-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' , '/style-rtl.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('1.0')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>

