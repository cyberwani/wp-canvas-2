<?php
/* function wp_canvas_2_page_formats() {
	$pages['post'] = 'Post';
	$pages['page'] = 'Page';
	$pages['attachment'] = 'Media';
	$pages['blog'] = 'Blog';
	$pages['search'] = 'Search';
	$pages['404'] = '404';
	$pages['archive'] = 'Archive';
	$pages['category'] = 'Category';
	$pages['tag'] = 'Tag';
	$pages['author'] = 'Author';

	$args = array(
		'show_ui' => true,
		'public' => true,
		'publicly_queryable' => true,
		'_builtin' => false
	);
	$output = 'objects'; // names or objects, note names is the default
	$operator = 'and'; // 'and' or 'or'

	$post_types = get_post_types( $args, $output, $operator ); 

	foreach ($post_types  as $type ) {
		$pages[ $type->name ] = $type->label;
		if ( $type->has_archive ) {
			$pages[ $type->name . '_archive' ] = $type->label . ' Archive';
		}
	}

	return $pages;
} */

$wpc2 = array();

/**
 * Set default options
 */
function wp_canvas_2_default_options() {
	global $wpc2;

	$wpc2['site_width'] = get_theme_mod( 'site_width', 1100 );
	$wpc2['sidebar_width'] = get_theme_mod( 'sidebar_width', 300 );
	$wpc2['edge_padding'] = get_theme_mod( 'edge_padding', 40 );
	$wpc2['sidebar_edge_padding'] = get_theme_mod( 'edge_padding', 40 );
	$wpc2['content_width'] = $wpc2['site_width'] - $wpc2['sidebar_width'] - $wpc2['sidebar_edge_padding'] - ( 2 * $wpc2['edge_padding'] );
	$wpc2['border_width'] = $wpc2['site_width'] + 40;
	$wpc2['sidebar_display'] = '';
}
add_action( 'wp_loaded', 'wp_canvas_2_default_options' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
function wp_canvas_2_content_width() {
	global $content_width, $wpc2;
	$content_width = $wpc2['content_width'];
}
add_action( 'template_redirect', 'wp_canvas_2_content_width' );
