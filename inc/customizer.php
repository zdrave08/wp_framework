<?php
/**
 * framework Theme Customizer.
 *
 * @package framework
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function framework_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	//Favicon add 
	$wp_customize->add_section('favicon_section', array(
			'title' => __('Favicon', 'framework'),
			'priority' => 25,
			'description' => __('Upload favicon here 16x16 (no .ico)', 'framework'),
		));
	$wp_customize->add_setting('favicon');

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'favicon', array(
			'label'=> __('Favicon', 'framework'),
			'section'=>'favicon_section',
			'settings'=>'favicon'
		)));
	//end favicon customizer
}
add_action( 'customize_register', 'framework_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function framework_customize_preview_js() {
	wp_enqueue_script( 'framework_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'framework_customize_preview_js' );
