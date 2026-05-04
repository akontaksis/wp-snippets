<?php
/**
 * Snippet Name: Featured Image Column in Post List
 * Description: Prosthetei sti lista posts/pages mia stili me to featured image (icon/thumbnail).
 *              Diefkolino na vlepeis ta posts sto wp-admin.
 * WPCode Type: PHP Snippet
 * WPCode Location: Admin Only
 * Tags: admin, posts, ui
 */

$wpsnip_post_types = ['post', 'page']; // pros8ese 'product', 'custom_type', klp.

foreach ($wpsnip_post_types as $type) {
    add_filter("manage_{$type}_posts_columns", 'wpsnip_add_thumb_column');
    add_action("manage_{$type}_posts_custom_column", 'wpsnip_render_thumb_column', 10, 2);
}

function wpsnip_add_thumb_column($columns) {
    $new = [];
    foreach ($columns as $key => $label) {
        if ($key === 'title') {
            $new['wpsnip_thumb'] = 'Eikona';
        }
        $new[$key] = $label;
    }
    return $new;
}

function wpsnip_render_thumb_column($column, $post_id) {
    if ($column !== 'wpsnip_thumb') {
        return;
    }

    if (has_post_thumbnail($post_id)) {
        echo get_the_post_thumbnail($post_id, [50, 50], [
            'style' => 'border-radius: 4px; object-fit: cover;',
        ]);
    } else {
        echo '<span style="display:inline-block;width:50px;height:50px;background:#f0f0f0;border-radius:4px;text-align:center;line-height:50px;color:#999;">—</span>';
    }
}

add_action('admin_head', function () {
    echo '<style>.column-wpsnip_thumb { width: 60px; }</style>';
});
