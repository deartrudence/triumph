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
<link href='http://fonts.googleapis.com/css?family=PT+Sans|Muli' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/normalize.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'triumph' ); ?></a>

	<header id="masthead" class="home__header" role="banner">
		<div class="site-branding">
			<div class="clearfix">
				<div class="clearfix hero-image" style="background-image: url('<?php echo bloginfo('template_directory') ?>/images/rev-1.jpg');  ">
			

				<div class="container home__container">
					<div class="title-center clearfix">		
						<h2 class="header__title">
							<span>Providing you</span> with <span>confidence</span> that
						</h2>
						<br>
						<h2 class="header__title">
							your <span>family</span> and <span>wellbeing</span> are
						</h2>
						<br>
						<h2 class="header__title">
							<span>protected</span>
						</h2>
						<p class="down-arrow"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#home"><img src="<?php echo bloginfo('template_directory'); ?>/images/down-arrow.svg" alt=""></a></p>
					</div>
				</div>
			</div>
		</div><!-- .site-branding -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
