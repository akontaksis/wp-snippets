<?php
/**
 * Snippet Name: Hide Admin Menu Items by Role
 * Description: Krivei sigekrimena admin menu items apo specific user roles. Prosarmoseis to $rules opws thes.
 * WPCode Type: PHP Snippet
 * WPCode Location: Admin Only
 * Tags: admin, roles, ui
 */

add_action('admin_menu', function () {

    // Format: 'role_slug' => ['menu_slug1', 'menu_slug2', ...]
    // Common menu slugs: 'index.php', 'edit.php', 'upload.php', 'edit.php?post_type=page',
    //                    'edit-comments.php', 'themes.php', 'plugins.php', 'users.php',
    //                    'tools.php', 'options-general.php'
    $rules = [
        'editor' => [
            'tools.php',
            'plugins.php',
        ],
        'author' => [
            'tools.php',
            'edit-comments.php',
        ],
    ];

    $user = wp_get_current_user();
    if (!$user || empty($user->roles)) {
        return;
    }

    foreach ($user->roles as $role) {
        if (!isset($rules[$role])) {
            continue;
        }
        foreach ($rules[$role] as $menu_slug) {
            remove_menu_page($menu_slug);
        }
    }
}, 999);

// Bonus: kripse submenu items - paradigma
// add_action('admin_menu', function () {
//     if (current_user_can('editor')) {
//         remove_submenu_page('themes.php', 'theme-editor.php');
//     }
// }, 999);
