<?php
/**
 * Snippet Name: Allow SVG Uploads
 * Description: Epitrepei upload SVG sti Media Library (mono gia administrators - ta SVG mporoun na exoun XSS).
 * WPCode Type: PHP Snippet
 * WPCode Location: Admin Only
 * Tags: media, svg
 */

add_filter('upload_mimes', function ($mimes) {
    if (current_user_can('administrator')) {
        $mimes['svg']  = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
    }
    return $mimes;
});

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    if (substr($filename, -4) === '.svg') {
        $data['ext']  = 'svg';
        $data['type'] = 'image/svg+xml';
    }
    return $data;
}, 10, 4);
