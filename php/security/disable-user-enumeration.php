<?php
/**
 * Snippet Name: Disable User Enumeration
 * Description: Apokleiei ta ?author=N requests kai krivei ta usernames apo to REST API users endpoint.
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: security, enumeration
 */

add_action('init', function () {
    if (is_admin()) {
        return;
    }
    if (isset($_REQUEST['author']) && !is_numeric($_REQUEST['author']) === false) {
        wp_safe_redirect(home_url('/'), 301);
        exit;
    }
});

add_filter('rest_endpoints', function ($endpoints) {
    if (!is_user_logged_in()) {
        if (isset($endpoints['/wp/v2/users'])) {
            unset($endpoints['/wp/v2/users']);
        }
        if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
            unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
        }
    }
    return $endpoints;
});
