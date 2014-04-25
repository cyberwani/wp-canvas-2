<?php
function wp_canvas_2_page_formats() {
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
}

/**
 * Set default options
 */
$wpc2['site_width'] = get_theme_mod( 'site_width', 1100 );
$wpc2['sidebar_width'] = get_theme_mod( 'sidebar_width', 300 );
$wpc2['edge_padding'] = get_theme_mod( 'edge_padding', 40 );
$wpc2['sidebar_edge_padding'] = get_theme_mod( 'edge_padding', 40 );
$wpc2['content_width'] = $wpc2['site_width'] - $wpc2['sidebar_width'] - $wpc2['sidebar_edge_padding'] - ( 2 * $wpc2['edge_padding'] );
$wpc2['border_width'] = $wpc2['site_width'] + 40;
$wpc2['sidebar_display'] = '';

$content_width = $wpc2['content_width'];

