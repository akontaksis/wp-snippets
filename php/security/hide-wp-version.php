<?php
/**
 * Snippet Name: Hide WordPress Version
 * Description: Afairei tin ekdosi tou WP apo to <head>, ta RSS feeds, kai apo ta scripts/styles URLs.
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: security, fingerprinting
 */

remove_action('wp_head', 'wp_generator');

add_filter('the_generator', '__return_empty_string');

add_filter('style_loader_src', 'wpsnip_remove_version_strings', 9999);
add_filter('script_loader_src', 'wpsnip_remove_version_strings', 9999);

function wpsnip_remove_version_strings($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
