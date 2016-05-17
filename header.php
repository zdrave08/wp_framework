<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if( is_singular() && pings_open( get_queried_object())): ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php if (get_theme_mod('favicon')) : ?>
   <link rel="icon" href="<?php echo esc_url(get_theme_mod('favicon')); ?>" type="image/x-icon">
<?php endif; ?>

<?php wp_head(); ?>
<?php
 $custom_css = esc_attr(get_option('css_handler'));
 if(!empty($custom_css)):
 	echo '<!-- Custom CSS -->';
 	echo '<style>'.$custom_css.'</style>';
 endif;
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'framework' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<?php if ( get_header_image() ) : ?>
 					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
 					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
 					</a>
				<?php else : ?>
			    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			    	<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			    <?php endif; // End header image check. ?>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<div class="social-header">
			
			    <ul class="social-in">  
                    <?php if(get_option('facebook_handler')) : ?>
                    <li><a class="fb" href="<?php echo esc_url(get_option('facebook_handler'))?>"><i class="fa fa-facebook-square"></i></a></li>
                                                 <?php endif;?>
                    <?php if(get_option('twitter_handler')) : ?>
                    <li><a class="tweet" href="<?php echo esc_url(get_option('twitter_handler'))?>"><i class="fa fa-twitter-square"></i></i></a></li>
                                                 <?php endif;?>
                    <?php if(get_option('gplus_handler')) : ?>
                    <li><a class="gplus" href="<?php echo esc_url(get_option('gplus_handler'))?>"><i class="fa fa-google-plus-square"></i></i></a></li>
                                                 <?php endif;?>
                    <?php if(get_option('linkedin_handler')) : ?>
                    <li><a class="linked" href="<?php echo esc_url(get_option('linkedin_handler'))?>"><i class="fa fa-linkedin-square"></i></i></a></li>
                                                 <?php endif;?>
                    <?php if(get_option('instagram_handler')) : ?>
                    <li><a class="instagram" href="<?php echo esc_url(get_option('instagram_handler'))?>"><i class="fa fa-instagram"></i></a></li>
                                                 <?php endif;?>
                    <?php if(get_option('flickr_handler')) : ?>
                    <li><a class="flickr" href="<?php echo esc_url(get_option('flickr_handler'))?>"><i class="fa fa-flickr"></i></a></li>
                                                 <?php endif;?>
                    <?php if(get_option('pinterest_handler')) : ?>
                    <li><a class="pinte" href="<?php echo esc_url(get_option('pinterest_handler'))?>"><i class="fa fa-pinterest-square"></i></a></li>
                                                 <?php endif;?>
                    <?php if(get_option('tumblr_handler')) : ?>
                    <li><a class="tumblr" href="<?php echo esc_url(get_option('tumblr_handler'))?>"><i class="fa fa-tumblr-square"></i></a></li>
                                                 <?php endif;?>
                    <?php if(get_option('dribbble_handler')) : ?>
                    <li><a class="dribble" href="<?php echo esc_url(get_option('dribbble_handler'))?>"><i class="fa fa-dribbble"></i></a></li>
                                                 <?php endif;?>
                    <?php if(get_option('RSS_handler')) : ?>
                    <li><a class="rss" href="<?php echo esc_url(get_option('RSS_handler'))?>"><i class="fa fa-rss-square"></i></a></li>
                                                 <?php endif;?>
                    <?php if(get_option('youtube_handler')) : ?>
                    <li><a class="youtube" href="<?php echo esc_url(get_option('youtube_handler'))?>"><i class="fa fa-youtube-play"></i></a></li>
                                                 <?php endif;?>
                    <?php if(get_option('vimeo_handler')) : ?>
                    <li><a class="vimeo" href="<?php echo esc_url(get_option('vimeo_handler'))?>"><i class="fa fa-vimeo-square"></i></a></li>
                                                 <?php endif;?>
                    </ul>
            	                            
		</div><!-- .social-header -->
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'framework' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
