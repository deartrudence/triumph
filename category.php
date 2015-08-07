<?php get_header(); ?>
<div class="blog">
	<?php while(have_posts()): the_post(); ?>
		<div class="container blog__single-post clearfix">
			<div class="blog__single-title">
				<h2 class="blog__single-post--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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