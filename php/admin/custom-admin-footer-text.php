<?php
/**
 * Snippet Name: Custom Admin Footer Text
 * Description: Antikathista to "Thank you for creating with WordPress" sto admin footer me diko sou keimeno (branding gia clients).
 * WPCode Type: PHP Snippet
 * WPCode Location: Admin Only
 * Tags: admin, branding
 */

add_filter('admin_footer_text', function () {
    $year = date('Y');
    return 'Developed by <a href="https://example.com" target="_blank">Onoma sou</a> &copy; ' . esc_html($year);
});

add_filter('update_footer', function () {
    return '';
}, 11);
