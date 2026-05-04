<?php
/**
 * Snippet Name: Add Basic Security Headers
 * Description: Vazei vasika security HTTP headers (X-Frame-Options, X-Content-Type-Options, Referrer-Policy, Permissions-Policy, HSTS).
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: security, headers
 */

add_filter('wp_headers', function ($headers) {
    $headers['X-Frame-Options']        = 'SAMEORIGIN';
    $headers['X-Content-Type-Options'] = 'nosniff';
    $headers['Referrer-Policy']        = 'strict-origin-when-cross-origin';
    $headers['Permissions-Policy']     = 'geolocation=(), microphone=(), camera=()';

    if (is_ssl()) {
        $headers['Strict-Transport-Security'] = 'max-age=31536000; includeSubDomains';
    }

    return $headers;
});
