<?php
/**
 * Snippet Name: Custom Dashboard Widget
 * Description: Prosthetei custom widget sto WP Dashboard me shortcuts / odigies gia tin omada (px useful links, contact info).
 * WPCode Type: PHP Snippet
 * WPCode Location: Admin Only
 * Tags: admin, dashboard, ui
 */

add_action('wp_dashboard_setup', function () {
    wp_add_dashboard_widget(
        'wpsnip_team_widget',
        'Useful Shortcuts',
        'wpsnip_render_team_widget'
    );
});

function wpsnip_render_team_widget() {
    ?>
    <p><strong>Kalosirthate!</strong> Edw tha vreite chrisima links:</p>
    <ul style="list-style: disc; padding-left: 20px;">
        <li><a href="<?php echo esc_url(admin_url('edit.php')); ?>">Diaheirisi Posts</a></li>
        <li><a href="<?php echo esc_url(admin_url('upload.php')); ?>">Media Library</a></li>
        <li><a href="<?php echo esc_url(admin_url('users.php')); ?>">Diaheirisi Xriston</a></li>
        <li><a href="https://example.com/docs" target="_blank">Documentation</a></li>
        <li><a href="mailto:support@example.com">Support: support@example.com</a></li>
    </ul>
    <hr>
    <p style="color: #666; font-size: 12px;">
        Gia voitheia, epikoinoniste me to support team.
    </p>
    <?php
}
