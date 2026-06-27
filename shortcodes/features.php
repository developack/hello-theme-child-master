<?php

function features_page() {
    ob_start();
    require_once get_stylesheet_directory()."/templates/features.php";
    return ob_get_clean();
}

add_shortcode('features', 'features_page');