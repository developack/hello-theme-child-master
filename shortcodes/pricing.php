<?php

function pricing_page() {
    ob_start();
    require_once get_stylesheet_directory()."/templates/pricing.php";
    return ob_get_clean();
}

add_shortcode('pricing', 'pricing_page');