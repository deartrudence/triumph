<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div id="home">
	<?php $thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src( $thumb_id, 'full', true );
			$thumb_url = $thumb_url_array[0]; ?>
	<header class="home__header" style="background-image: url('<?php echo $thumb_url ?>')">
		
	</header>


<div class="row container margin-top-100">
	<div class="col-half home__info-box">
		<h3 class="home__subtitle margin-bottom-50">Triumph Capital</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus illum omnis corporis, dolores laudantium harum itaque dicta odio, quas velit accusamus consequatur. Saepe, cupiditate, ea.</p>
	</div>
	<div class="col-half home__info-box">
		<h3 class="home__subtitle margin-bottom-50">Triumph Capital</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus illum omnis corporis, dolores laudantium harum itaque dicta odio, quas velit accusamus consequatur. Saepe, cupiditate, ea.</p>
	</div>
</div>
<div class="row container margin-bottom-100">
	<div class="col-half home__info-box">
		<h3 class="home__subtitle margin-bottom-50">Triumph Capital</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus illum omnis corporis, dolores laudantium harum itaque dicta odio, quas velit accusamus consequatur. Saepe, cupiditate, ea.</p>
	</div>
	<div class="col-half home__info-box">
		<h3 class="home__subtitle margin-bottom-50">Triumph Capital</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus illum omnis corporis, dolores laudantium harum itaque dicta odio, quas velit accusamus consequatur. Saepe, cupiditate, ea.</p>
	</div>
</div>

<div class="clearfix">
	<div class="clearfix" style="background-image: url('<?php echo get_site_url() ?>/wp-content/uploads/2015/07/rev31.jpg'); height: 300px; background-attachment: fixed; background-size: cover; "></div>
</div>

<div class="container margin-top-100">
	<h3 class="home__subtitle margin-bottom-50">Who We Are</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, amet, possimus. Corporis enim tempora architecto quisquam cum expedita dolore autem a maxime quidem accusantium et officiis porro eius, illum molestiae, inventore modi laboriosam praesentium repellendus esse aliquid libero voluptate sed.</p>
</div>

<div class="row container margin-bottom-100">
	<div class="col-half">
		<h3 class="margin-bottom-50">Diana Dyer</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci magni reiciendis accusamus ea veritatis commodi ab impedit, libero nemo, laborum maiores obcaecati eligendi sequi, esse voluptates officia? Accusantium, iure, aut! Natus perferendis, vero incidunt? Quam excepturi eveniet ad esse non expedita iste, accusamus recusandae aliquid quidem optio, quaerat voluptas illum itaque enim harum rem labore repellat veniam molestiae id modi velit. Voluptatibus eaque accusantium vel eum, adipisci rem neque a amet numquam illum architecto tempora!</p>
	</div>
	<div class="col-half">
		<h3 class="margin-bottom-50">Noah Dabrinski</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis sunt, aut. Optio iure nam consequuntur accusamus cum labore ipsam, veritatis ipsa, ex, recusandae eos. Autem dolores ad quidem unde quia a officiis magni quis molestiae quod asperiores non aut voluptatum sequi consequatur nobis eos natus labore ipsa, nam, architecto aliquid dolor repudiandae, aperiam. Fuga, facilis? Fuga laborum magnam, non voluptatem obcaecati ut, nihil. Porro minus sequi unde cumque! Eaque blanditiis provident consequuntur aperiam, quis ex!</p>
	</div>
</div>

<div class="clearfix">
	<div class="clearfix" style="background-image: url('<?php echo get_site_url() ?>/wp-content/uploads/2015/07/rev31.jpg'); height: 300px; background-attachment: fixed; background-size: cover; ">
</div>

<div class="container margin-bottom-100 margin-top-100">
	<h3 class="home__subtitle margin-bottom-50">What We Do</h3>
	<div class="row">
		<div class="col-half">
			<ul class="home__service-list">
				<li>Insurance</li>
				<li>Insurance</li>
				<li>Insurance</li>
				<li>Insurance</li>
				<li>Insurance</li>
				<li>Insurance</li>
				<li>Insurance</li>
			</ul>
		</div>
		<div class="col-half">
			<ul class="home__service-list">
				<li>Insurance</li>
				<li>Insurance</li>
				<li>Insurance</li>
				<li>Insurance</li>
				<li>Insurance</li>
				<li>Insurance</li>
				<li>Insurance</li>
			</ul>
		</div>
	</div>
</div>

<div class="clearfix">
	<div class="clearfix" style="background-image: url('<?php echo get_site_url() ?>/wp-content/uploads/2015/07/rev31.jpg'); height: 300px; background-attachment: fixed; background-size: cover; ">
</div>

<div class="container margin-top-100 margin-bottom-100">
	<h3 class="home__subtitle margin-bottom-50">Get In Touch</h3>
	<div class="row">
		<div class="col-half">
			<img src="<?php echo get_site_url() ?>/wp-content/uploads/2015/07/partners.jpg" alt="">
		</div>
		<div class="col-half">
			<div class="row">
				<div class="col-half">
					<p>Triumph Capital Limited</p> 
					<p>171 East Liberty Street Suite 272</p>
					<p>Toronto, ON M6K 3P6</p>
				</div>
				<div class="col-half">
					<p class="align-right">Phone:  647-345-0611</p>
					<p class="align-right">Toll Free: 1-888-315-7781</p>
					<p class="align-right">Fax: 1-888-315-7781</p>
				</div>
			</div>
			<img src="<?php echo get_site_url() ?>/wp-content/uploads/2015/07/map1.png" alt="">
		</div>
	</div>
</div>

<div class="container">
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/content', 'page' ); ?>

	<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	?>

<?php endwhile; // End of the loop. ?>
</div>
</div>
<?php get_footer(); ?>