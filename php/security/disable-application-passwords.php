<?php
/**
 * Snippet Name: Disable Application Passwords
 * Description: Apenergopoiei to feature ton Application Passwords (an den to xrisimopoieis - meionei attack surface).
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: security, authentication
 */

add_filter('wp_is_application_passwords_available', '__return_false');
