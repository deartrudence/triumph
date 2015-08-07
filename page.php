<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package triumph
 */

get_header(); ?>

<nav id="site-navigation" class="site-header__navigation" role="navigation">

<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'triumph' ); ?></button>
	
	<?php wp_nav_menu( array( 'theme_location' => 'Secondary Menu') ); ?>
</nav><!-- #site-navigation -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container padding-top-50 padding-bottom-100">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>


				<?php endwhile; // End of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
