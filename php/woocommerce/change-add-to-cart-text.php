<?php
/**
 * Snippet Name: Change "Add to Cart" Text (WooCommerce)
 * Description: Allazei to keimeno tou koumpiou Add to Cart se shop & single product.
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: woocommerce, ui
 */

add_filter('woocommerce_product_single_add_to_cart_text', function () {
    return __('Agora tora', 'woocommerce');
});

add_filter('woocommerce_product_add_to_cart_text', function () {
    return __('Agora', 'woocommerce');
});
