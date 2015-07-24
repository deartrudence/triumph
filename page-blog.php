<?php /*Template Name: Blog */ ?>
<?php get_header(); ?>
<div class="blog">
	<?php $temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=10' . '&paged='.$paged);

		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div class="container blog__single-post">
			<div class="blog__single-title">
				<h2 class="blog__single-post--title"><?php the_title(); ?></h2>
				<p class="blog__single-post--date">- <?php the_time('F d, Y'); ?></p>
			</div>
			<div class="blog__single-authcat">
				<p class="blog__single-post--author">By <?php the_author(); ?> in </p>
				<div class="blog__single-post--category"><?php the_category(); ?></div>
			</div>
			<div class="blog__single--content">
				<div class="blog__single--image">
					<?php the_post_thumbnail(); ?>
				</div><!--	
				*--><div class="blog__single--excerpt">
					<?php echo get_the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="blog__single-post--cont">continue reading</a>
				</div>
			</div>
		</div>
	<?php endwhile ?>
</div>
<?php get_footer(); ?>