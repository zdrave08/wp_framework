<?php
/**
 * Custom CSS page in admin area.
 *
 * @package framework
 */

/**
 * Adding Custom CSS page into admin panel. 
 *
 * @see https://developer.wordpress.org/reference/functions/add_menu_page/
 */
function css_add_admin_page() {
	
	//Generate Custom CSS Admin Page
	add_menu_page( 'Custom CSS Theme Options', 'Custom CSS', 'manage_options', 'css_options', 'css_theme_create_page', 'dashicons-art', 74 );

}
add_action( 'admin_menu', 'css_add_admin_page' );

//Activate custom settings
add_action( 'admin_init', 'css_custom_settings' );

function css_custom_settings() {

	register_setting( 'css-settings-group', 'css_handler', 'sanitize_custom_css');

	add_settings_section( 'css-theme-options', 'Customize your CSS', 'css_theme_options', 'css_options');

	add_settings_field( 'sidebar-css', 'Insert your Custom CSS here', 'add_custom_css', 'css_options', 'css-theme-options');

}

function css_theme_options() {
	echo 'Change or upload your custom CSS style here!';
}

function add_custom_css(){
	$css = get_option('css_handler');
	$css = ( empty($css) ? '/* Theme Custom CSS */' : $css );
	echo '<div id="customCss" class="customCss">'.$css.'</div><textarea id="custom_css" name="css_handler" style="display:none;visibility:hidden;">'.$css.'</textarea>';
}

function css_theme_create_page(){

	require_once(get_template_directory() . '/admin-inc/css-templates/css.php');
}

function sanitize_custom_css($input) {

	$output = esc_textarea($input);

	return $output;
}