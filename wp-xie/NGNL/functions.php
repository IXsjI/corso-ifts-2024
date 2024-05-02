<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */
if (!defined('LANG_DOMAIN'))
	define('LANG_DOMAIN', 'enaipzavatta');
/**
 * Register block styles.
 */

if (!function_exists('twentytwentyfour_block_styles')):
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles()
	{

		register_block_style(
			'core/details',
			array(
				'name' => 'arrow-icon-details',
				'label' => __('Arrow icon', 'twentytwentyfour'),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name' => 'pill',
				'label' => __('Pill', 'twentytwentyfour'),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name' => 'checkmark-list',
				'label' => __('Checkmark', 'twentytwentyfour'),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name' => 'arrow-link',
				'label' => __('With arrow', 'twentytwentyfour'),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name' => 'asterisk',
				'label' => __('With asterisk', 'twentytwentyfour'),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action('init', 'twentytwentyfour_block_styles');

/**
 * Enqueue block stylesheets.
 */

if (!function_exists('twentytwentyfour_block_stylesheets')):
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets()
	{
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src' => get_parent_theme_file_uri('assets/css/button-outline.css'),
				'ver' => wp_get_theme(get_template())->get('Version'),
				'path' => get_parent_theme_file_path('assets/css/button-outline.css'),
			)
		);
	}
endif;

add_action('init', 'twentytwentyfour_block_stylesheets');

/**
 * Register pattern categories.
 */

if (!function_exists('twentytwentyfour_pattern_categories')):
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories()
	{

		register_block_pattern_category(
			'page',
			array(
				'label' => _x('Pages', 'Block pattern category', 'twentytwentyfour'),
				'description' => __('A collection of full page layouts.', 'twentytwentyfour'),
			)
		);
	}
endif;

add_action('init', 'twentytwentyfour_pattern_categories');



function x_enqueue_scripts()
{
	wp_enqueue_style('mytheme', get_stylesheet_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_script('mytheme', get_stylesheet_directory_uri() . '/script.js', array('jquery'), false, array('strategy' => 'async'));


	if (is_archive()) {
		wp_enqueue_style('mytheme-archive', get_stylesheet_directory_uri() . '/archive.css', array(), false, 'all');
	}
}

add_action('wp_enqueue_scripts', 'x_enqueue_scripts', 10, 0);

function custom_post_type()
{
	register_post_type(
		'progetto',
		array(
			'label' => 'Progetti',
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-hammer',
			'show_in_rest' => true
		)
	);

	$args = array(
		'label' => __('Categoria', 'LANG_DOMAIN'),
		'public' => true,
		'hierarchical' => true,
	);
	register_taxonomy('category', 'progetto', $args);

	if (post_type_exists('progetto')) {
		register_block_pattern(
			'copertina progetto',
			array(
				'title' => 'Copertina Progetto',
				'blockTypes' => array('core/group'),
				'categories' => array('portfolio'),
				'content' => "\n<!-- wp:group {\"align\":\"full\",\"style\":{\"spacing\":{\"padding\":{\"top\":\"var:preset|spacing|50\",\"bottom\":\"var:preset|spacing|50\",\"left\":\"var:preset|spacing|50\",\"right\":\"var:preset|spacing|50\"}}},\"layout\":{\"type\":\"constrained\",\"contentSize\":\"\",\"wideSize\":\"\"}} -->\n<div class=\"wp-block-group alignfull\" style=\"padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)\">\n\n\t<!-- wp:group {\"style\":{\"spacing\":{\"blockGap\":\"0px\"}},\"layout\":{\"type\":\"constrained\",\"contentSize\":\"565px\"}} -->\n\t<div class=\"wp-block-group\">\n\n\t\t<!-- wp:heading {\"textAlign\":\"center\",\"fontSize\":\"x-large\",\"level\":1} -->\n\t\t<h1 class=\"wp-block-heading has-text-align-center has-x-large-font-size\">Un impegno verso innovazione e sostenibilità</h1>\n\t\t<!-- /wp:heading -->\n\n\t\t<!-- wp:spacer {\"height\":\"1.25rem\"} -->\n\t\t<div style=\"height:1.25rem\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n\t\t<!-- /wp:spacer -->\n\n\t\t<!-- wp:paragraph {\"align\":\"center\"} -->\n\t\t<p class=\"has-text-align-center\">Études è un&#039;azienda all&#039;avanguardia che fonde armonicamente creatività e funzionalità per ridefinire l&#039;eccellenza in architettura.</p>\n\t\t<!-- /wp:paragraph -->\n\n\t\t<!-- wp:spacer {\"height\":\"1.25rem\"} -->\n\t\t<div style=\"height:1.25rem\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n\t\t<!-- /wp:spacer -->\n\n\t\t<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n\t\t<div class=\"wp-block-buttons\">\n\t\t\t<!-- wp:button -->\n\t\t\t<div class=\"wp-block-button\">\n\t\t\t\t<a class=\"wp-block-button__link wp-element-button\">Chi siamo</a>\n\t\t\t</div>\n\t\t\t<!-- /wp:button -->\n\t\t</div>\n\t\t<!-- /wp:buttons -->\n\t</div>\n\t<!-- /wp:group -->\n\n\t<!-- wp:spacer {\"height\":\"var:preset|spacing|30\",\"style\":{\"layout\":[]}} -->\n\t<div style=\"height:var(--wp--preset--spacing--30)\" aria-hidden=\"true\" class=\"wp-block-spacer\">\n\t</div>\n\t<!-- /wp:spacer -->\n\n\t<!-- wp:image {\"align\":\"wide\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"is-style-rounded\"} -->\n\t<figure class=\"wp-block-image alignwide size-full is-style-rounded\">\n\t\t<img src=\"http://localhost/wordpress/wp-content/themes/NGNL/assets/images/building-exterior.webp\" alt=\"Esterno di un edificio a Toronto, Canada\" />\n\t</figure>\n\t<!-- /wp:image -->\n</div>\n<!-- /wp:group -->\n"
			)
		);
	}
}
add_action('init', 'custom_post_type');

function custom_block_style()
{
	add_filter('should_load_separate_core_block_assets', '__return_true');

	wp_register_style('button-red', get_stylesheet_directory_uri() . '/button-red.css', array(), false, 'all');

	register_block_style(
		'core/button',
		array(
			'name' => 'button-red',
			'label' => __('Rosso', 'textdomain'),
			'style_handle' => 'button-red'
		)
	);

	wp_enqueue_block_style(
		'core/gallery',
		array(
			'handle' => 'gallery-masonry',
			'src' => get_parent_theme_file_uri('assets/css/gallery-masonry.css'),
			'ver' => wp_get_theme(get_template())->get('Version'),
			'path' => get_parent_theme_file_path('assets/css/gallery-masonry.css'),
		)
	);
	register_block_style(
		'core/gallery',
		array(
			'name' => 'masonry',
			'label' => 'Masonry',
			'is_default' => false,
			'style_handle' => 'gallery-masonry'
		)
	);
}
add_action('init', 'custom_block_style');


function zavatta_custom_block_category($categories, $editor_context)
{

	$categories[] = array(
		'title' => 'Blocchi Nuovi',
		'slug' => 'nuovi',
		'icon' => ''
	);

	return $categories;
}

add_filter('block_categories_all', 'zavatta_custom_block_category', 10, 2);

include_once ('blocks/backtotop/index.php');
include_once ('blocks/accordion/index.php');
include_once ('blocks/queryloop-carousel/index.php');

