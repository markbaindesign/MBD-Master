<?php
/**
 * _mbbasetheme Theme Customizer
 *
 * @package _mbbasetheme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _mbbasetheme_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		// ID
		'layout_section',
		// Arguments array
		array(
			'title' => __( 'Layout', 'mbdmaster' ),
			'capability' => 'edit_theme_options',
			'description' => __( 'Allows you to edit your theme\'s layout.', 'mbdmaster' )
		)
	);
	$wp_customize->add_setting(
		// ID
		'mbdmaster_settings[layout_setting]',
		// Arguments array
		array(
			'default' => 'no-sidebar',
			'type' => 'option'
		)
	);

		// Add the featured content section.
	$wp_customize->add_section( 'featured_content', array(
		'title'    => __( 'Featured Content', 'twentyfourteen' ),
		'priority' => 120,
	) );

	// Add the featured content layout setting and control.
	$wp_customize->add_setting( 'featured_content_layout', array(
		'default'    => 'grid',
		'type'       => 'theme_mod',
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'featured_content_layout', array(
		'label'   => __( 'Layout', 'twentyfourteen' ),
		'section' => 'featured_content',
		'type'    => 'select',
		'choices' => array(
			'grid'   => __( 'Grid', 'twentyfourteen' ),
			'slider' => __( 'Slider', 'twentyfourteen' ),
		),
	) );

	$wp_customize->add_control(
		// ID
		'layout_control',
		// Arguments array
		array(
			'type' => 'radio',
			'label' => __( 'Theme layout', 'mbdmaster' ),
			'section' => 'layout_section',
			'choices' => array(
				'left-sidebar' => __( 'Left sidebar', 'mbdmaster' ),
				'right-sidebar' => __( 'Right sidebar', 'mbdmaster' ),
				'no-sidebar' => __( 'No sidebar', 'mbdmaster' ),
				
			),
			// This last one must match setting ID from above
			'settings' => 'mbdmaster_settings[layout_setting]'
		)
	);

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', '_mbbasetheme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _mbbasetheme_customize_preview_js() {
	wp_enqueue_script( '_mbbasetheme_customizer', get_template_directory_uri() . 'assets/js/vendor/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_mbbasetheme_customize_preview_js' );
