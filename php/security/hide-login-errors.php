<?php
/**
 * Snippet Name: Hide Login Error Details
 * Description: Den apokaliptei an to lathos einai sto username i sto password (apotrepei username enumeration).
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: security, login
 */

add_filter('login_errors', function () {
    return __('Lanthasmena stoixeia sindesis.');
});
