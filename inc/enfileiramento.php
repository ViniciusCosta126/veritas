<?php

function styles_enqueue()
{
    wp_enqueue_style("css-global", get_template_directory_uri() . "/assets/css/index.css", array(), '1.0.0');
    wp_enqueue_style("header-global", get_template_directory_uri() . "/assets/css/header.css", array(), '1.0.0');
    wp_enqueue_style("footer-global", get_template_directory_uri() . "/assets/css/footer.css", array(), '1.0.0');
    
    wp_enqueue_style("onde-atuamos", get_template_directory_uri() . "/assets/css/home/onde-atuamos.css", array(), '1.0.0');
    wp_enqueue_style("faq", get_template_directory_uri() . "/assets/css/home/faq.css", array(), '1.0.0');
    wp_enqueue_style("quem-somos", get_template_directory_uri() . "/assets/css/home/quem-somos.css", array(), '1.0.0');
    wp_enqueue_style("veritas-midias", get_template_directory_uri() . "/assets/css/home/veritas-nas-midias.css", array(), '1.0.0');
    wp_enqueue_style("jornada", get_template_directory_uri() . "/assets/css/home/jornada.css", array(), '1.0.0');
    wp_enqueue_style("secao-blog", get_template_directory_uri() . "/assets/css/home/secao-blog.css", array(), '1.0.0');
     wp_enqueue_style("hero", get_template_directory_uri() . "/assets/css/home/hero.css", array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'styles_enqueue');

function scripts_enqueue()
{
    wp_enqueue_script("js-global", get_template_directory_uri() . "/assets/js/index.js", array(), '1.0.0');
    wp_enqueue_script("js-faq", get_template_directory_uri() . "/assets/js/home/index.js", array(), '1.0.0');
}

add_action('wp_enqueue_scripts', 'scripts_enqueue');