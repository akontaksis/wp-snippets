<?php
/**
 * Snippet Name: Disable XML-RPC
 * Description: Apenergopoiei to XML-RPC endpoint (synithos stoxos brute force).
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: security, xmlrpc
 */

add_filter('xmlrpc_enabled', '__return_false');

add_filter('wp_headers', function ($headers) {
    unset($headers['X-Pingback']);
    return $headers;
});

add_filter('xmlrpc_methods', function ($methods) {
    unset($methods['pingback.ping']);
    unset($methods['pingback.extensions.getPingbacks']);
    return $methods;
});
