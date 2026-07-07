<?php
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('gdi-font', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;700;900&display=swap', [], null);
    wp_enqueue_style('gdi', get_stylesheet_uri(), ['gdi-font'], wp_get_theme()->get('Version'));
});
