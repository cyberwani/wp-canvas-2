<?php
/**
 * WP Canvas 2 Theme Customizer
 *
 * @package WP Canvas 2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wp_canvas_2_customize_register( $wp_customize ) {
	global $wpc2;

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/***************************/
	/* Grid Section            */
	/***************************/
	$wp_customize->add_section( 'wp_canvas_2_grid' , array(
		'title'      => __( 'Grid', 'wp-canvas-2' ),
		'priority'   => 30,
	) );

	// Site Width
	$wp_customize->add_setting( 'site_width' , array(
		'default'     => $wpc2['site_width'],
		'sanitize_callback'	=> array( 'WP_Canvas_2_Sanitize' , 'number' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'content_width',
			array(
				'label'          => __( 'Site Width', 'wp-canvas-2' ),
				'section'        => 'wp_canvas_2_grid',
				'settings'       => 'site_width',
				'type'           => 'text',
			)
		)
	);

	// Sidebar Width
	$wp_customize->add_setting( 'sidebar_width' , array(
		'default'     => $wpc2['sidebar_width'],
		'sanitize_callback'	=> array( 'WP_Canvas_2_Sanitize' , 'number' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sidebar_width',
			array(
				'label'          => __( 'Sidebar Width', 'wp-canvas-2' ),
				'section'        => 'wp_canvas_2_grid',
				'settings'       => 'sidebar_width',
				'type'           => 'text',
			)
		)
	);

	// Edge Padding
	$wp_customize->add_setting( 'edge_padding' , array(
		'default'     => $wpc2['edge_padding'],
		'sanitize_callback'	=> array( 'WP_Canvas_2_Sanitize' , 'number' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'edge_padding',
			array(
				'label'          => __( 'Edge Padding', 'wp-canvas-2' ),
				'section'        => 'wp_canvas_2_grid',
				'settings'       => 'edge_padding',
				'type'           => 'text',
			)
		)
	);

	// Sidebar Edge Padding
	$wp_customize->add_setting( 'sidebar_edge_padding' , array(
		'default'     => $wpc2['sidebar_edge_padding'],
		'sanitize_callback'	=> array( 'WP_Canvas_2_Sanitize' , 'number' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sidebar_edge_padding',
			array(
				'label'          => __( 'Sidebar Edge Padding', 'wp-canvas-2' ),
				'section'        => 'wp_canvas_2_grid',
				'settings'       => 'sidebar_edge_padding',
				'type'           => 'text',
			)
		)
	);

	/***************************/
	/* Grid Section            */
	/***************************/
	$wp_customize->add_section( 'wp_canvas_2_sidebar_display' , array(
		'title'      => __( 'Sidebar Display', 'wp-canvas-2' ),
		'priority'   => 50,
	) );


}
add_action( 'customize_register', 'wp_canvas_2_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wp_canvas_2_customize_preview_js() {
	wp_enqueue_script( 'wp_canvas_2_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'wp_canvas_2_customize_preview_js' );
