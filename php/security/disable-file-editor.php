<?php
/**
 * Snippet Name: Disable Theme & Plugin File Editor
 * Description: Krivei tous editors apo to wp-admin gia na min ginei edit kodikas online.
 * WPCode Type: PHP Snippet
 * WPCode Location: Admin Only
 * Tags: security, admin
 */

if (!defined('DISALLOW_FILE_EDIT')) {
    define('DISALLOW_FILE_EDIT', true);
}
