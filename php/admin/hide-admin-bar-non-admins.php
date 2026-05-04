<?php
/**
 * Snippet Name: Hide Admin Bar for Non-Admins
 * Description: Krivei to admin bar sto frontend gia olous ektos administrators.
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: admin, ui
 */

add_action('after_setup_theme', function () {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
});
