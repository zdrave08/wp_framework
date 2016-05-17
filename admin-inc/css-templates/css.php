<?php
/**
 * Custom CSS templates file.
 *
 * @package framework
 */
?>
<div id="container" class="wrap container">
	<h1>Custom CSS Options</h1>
<?php settings_errors(); ?>
<form id="save-custom-css-form" method="post" action="options.php" class="framework-general-form">
	<?php settings_fields( 'css-settings-group' ); ?>
	<?php do_settings_sections( 'css_options' ); ?>
	<?php submit_button(); ?>
</form>
    <div class="copy-footer">
    	<span>
    		<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'framework' ), 'framework', '<a href="http://zdravkolukic.com/" rel="designer">Zdravko Lukic</a>' ); ?>
        </span>
    </div>
</div> 