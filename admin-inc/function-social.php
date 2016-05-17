<?php
/**
 * Social Media function repo
 *
 * @package framework
 */

/**
 * Adding Social Media page into admin panel. 
 *
 * @see https://developer.wordpress.org/reference/functions/add_menu_page/
 */
function social_add_admin_page() {
	
	//Generate Social Media Admin Page
	add_menu_page( 'Social Media Theme Options', 'Social Media', 'manage_options', 'social_options', 'social_theme_create_page', 'dashicons-share', 26 );

}
add_action( 'admin_menu', 'social_add_admin_page' );

//Activate custom settings
add_action( 'admin_init', 'social_custom_settings' );

function social_custom_settings() {
	
	register_setting( 'social-settings-group', 'twitter_handler', 'sanitize_twitter_handler' );
	register_setting( 'social-settings-group', 'facebook_handler' );
	register_setting( 'social-settings-group', 'gplus_handler' );
	register_setting( 'social-settings-group', 'instagram_handler');
	register_setting( 'social-settings-group', 'linkedin_handler');
	register_setting( 'social-settings-group', 'flickr_handler');
	register_setting( 'social-settings-group', 'pinterest_handler');
	register_setting( 'social-settings-group', 'tumblr_handler');
	register_setting( 'social-settings-group', 'dribbble_handler');
	register_setting( 'social-settings-group', 'RSS_handler');
	register_setting( 'social-settings-group', 'youtube_handler');
	register_setting( 'social-settings-group', 'vimeo_handler'); 
	
	add_settings_section( 'social-theme-options', 'Social Option', 'social_theme_options', 'social_options');
	
	
	add_settings_field( 'sidebar-twitter', 'Twitter handler', 'add_social_twitter', 'social_options', 'social-theme-options');
	add_settings_field( 'sidebar-facebook', 'Facebook handler', 'add_social_facebook', 'social_options', 'social-theme-options');
	add_settings_field( 'sidebar-gplus', 'Google+ handler', 'add_social_gplus', 'social_options', 'social-theme-options');
	add_settings_field( 'sidebar-instagram', 'Instagram handler', 'add_social_instagram', 'social_options', 'social-theme-options');
	add_settings_field( 'sidebar-linkedin', 'Linkedin handler', 'add_social_linkedin', 'social_options', 'social-theme-options');
	add_settings_field( 'sidebar-flickr', 'Flickr handler', 'add_social_flickr', 'social_options', 'social-theme-options');
	add_settings_field( 'sidebar-pinterest', 'Pinterest handler', 'add_social_pinterest', 'social_options', 'social-theme-options');
	add_settings_field( 'sidebar-tumblr', 'Tumblr handler', 'add_social_tumblr', 'social_options', 'social-theme-options');
	add_settings_field( 'sidebar-dribbble', 'Dribbble handler', 'add_social_dribbble', 'social_options', 'social-theme-options');
	add_settings_field( 'sidebar-rss', 'RSS handler', 'add_social_rss', 'social_options', 'social-theme-options');
	add_settings_field( 'sidebar-youtube', 'Youtube handler', 'add_social_youtube', 'social_options', 'social-theme-options');
	add_settings_field( 'sidebar-vimeo', 'Vimeo handler', 'add_social_vimeo', 'social_options', 'social-theme-options');
}

function social_theme_options() {
	echo 'Customize your Social Media Information';
}

function add_social_twitter() {
	$twitter = esc_attr( get_option( 'twitter_handler' ) );
	echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler" /><p class="description">Input your Twitter username without the @ character.</p>';
}

function add_social_facebook() {
	$facebook = esc_attr( get_option( 'facebook_handler' ) );
	echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook handler" /><p class="description">Input your Facebook username.</p>';
}

function add_social_gplus() {
	$gplus = esc_attr( get_option( 'gplus_handler' ) );
	echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google+ handler" /><p class="description">Input your Google+ username.</p>';
}

function add_social_instagram(){
	$instagram = esc_attr( get_option( 'instagram_handler' ) );
	echo '<input type="text" name="instagram_handler" value="'.$instagram.'" placeholder="Instagram handler" /><p class="description">Input your Instagram username.</p>';
}

function add_social_linkedin(){
	$linkedin = esc_attr( get_option( 'linkedin_handler' ) );
	echo '<input type="text" name="linkedin_handler" value="'.$linkedin.'" placeholder="Linkedin handler" /><p class="description">Input your Linkedin username.</p>';
}

function add_social_flickr(){
 	$flicker = esc_attr( get_option( 'flickr_handler' ) );
	echo '<input type="text" name="flicker_handler" value="'.$flicker.'" placeholder="Flicker handler" /><p class="description">Input your Flicker username.</p>';
}

function add_social_pinterest(){
	$pinterest = esc_attr( get_option( 'pinterest_handler' ) );
	echo '<input type="text" name="pinterest_handler" value="'.$pinterest.'" placeholder="Pinterest handler" /><p class="description">Input your Pinterest username.</p>';
}

function add_social_tumblr(){
   $tumblr = esc_attr( get_option( 'tumblr_handler' ) );
	echo '<input type="text" name="tumblr_handler" value="'.$tumblr.'" placeholder="Tumblr handler" /><p class="description">Input your Tumblr username.</p>';
}

function add_social_dribbble(){
	$dribbble = esc_attr( get_option( 'dribbble_handler' ) );
	echo '<input type="text" name="dribbble_handler" value="'.$dribbble.'" placeholder="Dribbble handler" /><p class="description">Input your Dribbble username.</p>';
}

function add_social_rss(){
	$rss = esc_attr( get_option( 'RSS_handler' ) );
	echo '<input type="text" name="RSS_handler" value="'.$rss.'" placeholder="RSS handler" /><p class="description">Input your RSS username.</p>';
}

function add_social_youtube(){
	$youtube = esc_attr( get_option( 'youtube_handler' ) );
	echo '<input type="text" name="youtube_handler" value="'.$youtube.'" placeholder="Youtube handler" /><p class="description">Input your Youtube video.</p>';
}

function add_social_vimeo(){
	$vimeo = esc_attr( get_option( 'vimeo_handler' ) );
	echo '<input type="text" name="vimeo_handler" value="'.$vimeo.'" placeholder="Vimeo handler" /><p class="description">Input your Vimeo video.</p>';
}

//Sanitization settings
function sanitize_twitter_handler( $input ){
	$output = sanitize_text_field( $input );
	$output = str_replace('@', '', $output);
	return $output;
}

function social_theme_create_page() {
	require_once( get_template_directory() . '/admin-inc/social-templates/social.php' );
}


