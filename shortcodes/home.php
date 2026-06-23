<?php

function home_page() {
    ob_start();
    require_once get_stylesheet_directory()."/templates/home.php";
    return ob_get_clean();
}

add_shortcode('home', 'home_page');