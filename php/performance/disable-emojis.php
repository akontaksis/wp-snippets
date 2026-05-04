<?php
/**
 * Snippet Name: Disable WP Emojis
 * Description: Vgazei to emoji script + styles (mikri velitiosi performance).
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: performance, frontend
 */

add_action('init', function () {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    add_filter('tiny_mce_plugins', function ($plugins) {
        return is_array($plugins) ? array_diff($plugins, ['wpemoji']) : [];
    });

    add_filter('wp_resource_hints', function ($urls, $relation_type) {
        if ('dns-prefetch' === $relation_type) {
            $urls = array_filter($urls, function ($url) {
                return false === strpos($url, 's.w.org');
            });
        }
        return $urls;
    }, 10, 2);
});
