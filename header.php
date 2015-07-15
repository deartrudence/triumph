<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package triumph
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/style.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'triumph' ); ?></a>


	<header id="masthead" class="home__header" role="banner">
		<div class="heroImg" style="background-image: url('<?php echo get_site_url() ?>/wp-content/uploads/2015/07/rev-1.jpg'); ">
			<div class="site-branding">
				<h2 class="header__branding"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
			</div><!-- .site-branding -->
			<div class="container home__container">
			<h2 class="header__title">
				PROVIDING YOU WITH CONFIDENCE THAT
			</h2>
			<h2 class="header__title">
				YOUR FAMILY AND WELL BEING ARE
			</h2>
			<h2 class="header__title">
				PROTECTED
			</h2>
		</div>
		</div>


		<nav id="site-navigation" class="main-navigation site-header__navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'triumph' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
