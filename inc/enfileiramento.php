<?php

function styles_enqueue()
{
    wp_enqueue_style("css-global", get_template_directory_uri() . "/assets/css/index.css", array(), '1.0.0');


    wp_enqueue_style("onde-atuamos", get_template_directory_uri() . "/assets/css/home/onde-atuamos.css", array(), '1.0.0');
    wp_enqueue_style("faq", get_template_directory_uri() . "/assets/css/home/faq.css", array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'styles_enqueue');

function scripts_enqueue()
{
    wp_enqueue_script("js-global", get_template_directory_uri() . "/assets/js/index.js", array(), '1.0.0');
    wp_enqueue_script("js-faq", get_template_directory_uri() . "/assets/js/home/index.js", array(), '1.0.0');
}

add_action('wp_enqueue_scripts', 'scripts_enqueue');