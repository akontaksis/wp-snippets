<?php
/**
 * Snippet Name: Increase Autosave Interval
 * Description: Allazei to autosave interval apo 60 dl. (default) se 5 lepta. Ligotera saves -> ligoteri vasi & ligoteri admin-ajax kinisi.
 *              Doulevei kai me Block Editor (Gutenberg) kai me Classic Editor.
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: performance, editor
 */

if (!defined('AUTOSAVE_INTERVAL')) {
    define('AUTOSAVE_INTERVAL', 300); // 5 lepta - allakse opws thes
}

add_filter('block_editor_settings_all', function ($settings) {
    $settings['autosaveInterval'] = 300;
    return $settings;
});
