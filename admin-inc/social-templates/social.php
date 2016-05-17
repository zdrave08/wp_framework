<?php
/**
 * Social Media templates file.
 *
 * @package framework
 */
?>

<div id="container" class="wrap container">
	<h1>Social Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields( 'social-settings-group' ); ?>
	<?php do_settings_sections( 'social_options' ); ?>
	<?php submit_button(); ?>
</form>
    <div class="copy-footer">
    	<span>
    		<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'framework' ), 'framework', '<a href="http://zdravkolukic.com/" rel="designer">Zdravko Lukic</a>' ); ?>
        </span>
    </div>
</div> 


