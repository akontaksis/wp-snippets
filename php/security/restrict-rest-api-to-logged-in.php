<?php
/**
 * Snippet Name: Restrict REST API to Logged-In Users
 * Description: Apaitei sindesi gia kathe REST API request (ektos /wp/v2/ public read endpoints an theleis - prosarmoseis to whitelist).
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: security, rest-api
 */

add_filter('rest_authentication_errors', function ($result) {
    if (true === $result || is_wp_error($result)) {
        return $result;
    }

    if (!is_user_logged_in()) {
        return new WP_Error(
            'rest_not_logged_in',
            __('Prepei na esai logged-in gia na xrisimopoiisis to REST API.'),
            ['status' => 401]
        );
    }

    return $result;
});
