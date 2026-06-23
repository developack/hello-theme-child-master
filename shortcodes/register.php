<?php

function register_page() {
    ob_start();
    require_once get_stylesheet_directory()."/templates/register.php";
    return ob_get_clean();
}

add_shortcode('register', 'register_page');