<?php
function queryloop_carousel_assets()
{
    if (!is_admin()) {
        return;
    }

    $assets_file = include (__DIR__ . "/build/index.asset.php");
    wp_enqueue_script(
        'queryloop_carousel',
        get_theme_file_uri('blocks/queryloop-carousel/build/index.js'),
        $assets_file['dependencies'],
        $assets_file['version'],
        true
    );
}
add_action('enqueue_block_assets', 'queryloop_carousel_assets');

add_filter('render_block', function($block_content, $block) {

    if(!is_admin()) {
        if($block['blockName'] === 'core/query' && 
        array_key_exists('isCarousel', $block['attrs']) &&
        $block['attrs']) {
            wp_enqueue_script('glide', "https://cdn.jsdelivr.net/npm/@glidejs/glide", null, null, true);
        };
    };

    return $block_content;
},10,2);