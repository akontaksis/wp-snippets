<?php
/**
 * Snippet Name: Change WordPress "From" Email & Name
 * Description: Allazei to From address kai From name se ola ta emails pou stelnei to WP.
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: email, branding
 */

add_filter('wp_mail_from', function ($email) {
    return 'noreply@example.com';
});

add_filter('wp_mail_from_name', function ($name) {
    return 'Onoma Site';
});
