<?php
/**
 * The template for displaying all single posts.
 *
 * @package triumph
 */

get_header(); ?>
<nav id="site-navigation" class="site-header__navigation" role="navigation">
<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo bloginfo('template_directory'); ?>/images/triumphant-logo-06.svg" alt=""></a></div>
<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'triumph' ); ?></button>
	
	<?php wp_nav_menu( array( 'theme_location' => 'secondary') ); ?>
</nav><!-- #site-navigation -->

	<div class="blog" id="blog-single">
		<div class="container blog__single-post">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="blog__single-title">
					<h2 class="blog__single-post--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="blog__single-post--date">- <?php the_time('F d, Y'); ?></p>
				</div>
				<div class="blog__single-authcat">
					<p class="blog__single-post--author">By <?php the_author(); ?> in </p>
					<div class="blog__single-post--category"><?php the_category(); ?></div>
				</div>
				<div class="blog__single--full-content">
					<?php the_content(); ?>
				</div>


				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			<?php endwhile ?>
		</div>		
	</div>

<?php get_footer(); ?>
