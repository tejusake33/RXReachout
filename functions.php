<?php

 function rxreachout_register_styles() {
    wp_enqueue_style('rxreachout-style', get_template_directory_uri()."/css/style.css", [], 1.0, 'all');
}

add_action('wp_enqueue_scripts', 'rxreachout_register_styles');


function rxreachout_nav_menus() {
    $locations = array(
        'primary' => "header menu",
    );
    register_nav_menus($locations);
}

add_action('init', 'rxreachout_nav_menus');



function rxreachout_theme_support() {
    add_image_size('pageBanner', 1500, 300, true);
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'rxreachout_theme_support');

?>