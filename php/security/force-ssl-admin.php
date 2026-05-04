<?php
/**
 * Snippet Name: Force SSL on Admin & Login
 * Description: Anagkazei HTTPS gia to wp-admin kai to wp-login.php. Apaitei to site na exei idi engatestimeno SSL.
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: security, ssl
 */

if (!defined('FORCE_SSL_ADMIN')) {
    define('FORCE_SSL_ADMIN', true);
}

add_action('template_redirect', function () {
    if (is_admin() && !is_ssl()) {
        wp_safe_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301);
        exit;
    }
});
