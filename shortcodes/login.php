<?php

function login_page() {
    ob_start();
    require_once get_stylesheet_directory()."/templates/login.php";
    return ob_get_clean();
}

add_shortcode('login', 'login_page');