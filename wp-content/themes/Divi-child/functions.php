<?php
function darknk_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_script('child-app', get_stylesheet_directory_uri() . '/js/app.js',
    null,
    wp_get_theme()->get('Version'));
}

add_action( 'wp_enqueue_scripts', 'darknk_enqueue_styles' );

add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
function change_existing_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'MXN': $currency_symbol = 'MXN '; break;
     }
     return $currency_symbol;
}