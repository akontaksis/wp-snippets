<?php
/**
 * Snippet Name: Custom Login Logo
 * Description: Antikathista to WordPress logo stin login othoni me to logo tou site.
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: login, branding
 */

add_action('login_enqueue_scripts', function () {
    $logo_url = get_site_icon_url(120) ?: 'https://example.com/path/to/logo.png';
    ?>
    <style>
        #login h1 a, .login h1 a {
            background-image: url('<?php echo esc_url($logo_url); ?>');
            background-size: contain;
            background-repeat: no-repeat;
            width: 100%;
            height: 80px;
        }
    </style>
    <?php
});

add_filter('login_headerurl', function () {
    return home_url();
});

add_filter('login_headertext', function () {
    return get_bloginfo('name');
});
