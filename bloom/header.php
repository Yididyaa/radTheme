<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bloom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>

<nav id="site-navigation"  class="navbar navbar-expand-md navbar-dark top white">
<?php
			the_custom_logo();
			
			?>
    <a class="navbar-brand" href="#">
        <?php bloginfo('name'); ?>
    </a>
   
	<button class="navbar-toggler navbar-toggler-icon navbar-toggler-right " type = "button" data-toggle="collapse" data-target="#bs4navbar" aria-controls = "bs4navbar" aria-expanded="false" aria-label="Toggle navigation"><?php esc_html_e( '', 'bloom' ); ?></button>	<?php
            wp_nav_menu([
            'menu'            => 'primary-menu',
            'theme_location'  => 'menu-1',
            'container'       => 'div',
            'container_id'    => 'bs4navbar',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav mr-auto',
            'depth'           => 0,
            'fallback_cb'     => 'functions::fallback',
            'walker'          => new bloom_navbar()
			]);
			get_search_form(  );
        ?>
	</nav>

	
	<!-- </div> -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bloom' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding"><br>
			
		</div><!-- .site-branding -->

	
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
