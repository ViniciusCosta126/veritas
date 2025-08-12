<?php

function register_menus()
{
    register_nav_menus([
        "nav-header" => "Cabeçalho",
        "nav-footer" => "Footer"
    ]);
}

add_action("after_setup_theme", "register_menus");