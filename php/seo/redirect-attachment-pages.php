<?php
/**
 * Snippet Name: Redirect Attachment Pages to Parent
 * Description: Kanei 301 redirect ta attachment pages sto parent post (i sto home an den iparxei).
 * WPCode Type: PHP Snippet
 * WPCode Location: Frontend Only
 * Tags: seo, redirect
 */

add_action('template_redirect', function () {
    if (!is_attachment()) {
        return;
    }

    global $post;
    $url = ($post && !empty($post->post_parent)) ? get_permalink($post->post_parent) : home_url('/');

    wp_safe_redirect($url, 301);
    exit;
});
