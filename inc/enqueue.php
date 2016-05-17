<?php
/**
 * Load back-end/admin style for theme.
 * 
 * @package framework
 */

function load_admin_scripts($hook) {
   //echo $hook;

   if('toplevel_page_social_options' == $hook){

		wp_register_style('admin-styles', get_template_directory_uri() .'/css/admin-style.css', array(), '1.0.0', 'all');
    	wp_enqueue_style('admin-styles');
    
    }elseif ('toplevel_page_css_options' == $hook) {

        wp_register_style('admin-styles', get_template_directory_uri() .'/css/admin-style.css', array(), '1.0.0', 'all');
        wp_enqueue_style('admin-styles');
    	
    	wp_enqueue_script( 'ace_code_highlighter', get_template_directory_uri() . '/js/ace/ace.js', '', '1.0.0', true );
        //wp_enqueue_script( 'ace_mode', get_template_directory_uri() . '/ace/mode-css.js', array( 'ace_code_highlighter_js' ), '1.0.0', true );
        wp_enqueue_script( 'custom-css', get_template_directory_uri() . '/js/custom-css.js', array( 'jquery'), '1.0.0', true );
    
    } else {
    	return;
    }
   

        
    
}
add_action('admin_enqueue_scripts','load_admin_scripts');