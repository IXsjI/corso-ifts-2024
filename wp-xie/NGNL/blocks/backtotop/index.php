<?php
function backtotop_register_block()
{
    register_block_type(__DIR__, array(
        'render_callback' => 'backtotop_render_callback'
    ));

    wp_set_script_translations('backtotop', 'zavatta');
}
add_action('init', 'backtotop_register_block');

add_action('enqueue_block_assets', function() {
    wp_register_style('backtotop', get_theme_file_uri('blocks/backtotop/assets/css/style.css'), null, null, 'all');
});
function backtotop_render_callback($attributes, $content, $instance)
{
    ob_start();

    print_r($attributes);

    return ob_get_clean();
}