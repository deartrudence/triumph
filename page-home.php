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
		<h3 class="home__block-title margin-bottom-50">Triumph Capital</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus illum omnis corporis, dolores laudantium harum itaque dicta odio, quas velit accusamus consequatur. Saepe, cupiditate, ea.</p>
	</div>
	<div class="col-half home__info-box">
		<h3 class="home__block-title margin-bottom-50">Life Services</h3>
		<p>Triumph provides specialized strategic solutions to meet your life insurance needs. From mortgage insurance to estate planning, we specialize in making sure you and your loved ones are protected.</p>
	</div>
</div>
<div class="row container margin-bottom-100">
	<div class="col-half home__info-box">
		<h3 class="home__block-title margin-bottom-50">Investor Services</h3>
		<p>Triumph Capital specializes in investment analysis, retirement, and estate planning. We will provide you with comprehensive solutions for all of your investment planning needs.</p>
	</div>
	<div class="col-half home__info-box">
		<h3 class="home__block-title margin-bottom-50">Health Services</h3>
		<p>Triumph Capital has partnered with the largest insurance companies in Canada to provide individuals with comprehensive, health coverage tailored to suit an individual's ever-changing needs and health concerns.</p>
	</div>
</div>

<div class="clearfix">
	<div class="clearfix" style="background-image: url('<?php echo get_site_url() ?>/wp-content/uploads/2015/07/rev31.jpg'); height: 300px; background-attachment: fixed; background-size: cover; "></div>
</div>

<div class="container margin-top-100">
	<h3 class="home__subtitle margin-bottom-50">Who We Are</h3>
	<p>Triumph Capital is a Toronto-based firm that has over thirty years of experience providing personalized service and a unique, comprehensive look at the needs of its clients, both for today and the future. We are committed to adhering to a set of principles and practices that have been proven to deliver on the long-term goals of our clients. It is our mission to ensure that the concepts we put in place will exceed your goals and expectations, while providing the value and peace of mind you deserve.</p>
</div>

<div class="row container margin-bottom-100">
	<div class="col-half home__bio">
		<h3 >Diana Dyer</h3>
		<h4 class="margin-bottom-50">President</h4>
		<p>As the President of Triumph Capital Limited, Diana brings a depth and understanding of the financial services industry that is rarely seen in the marketplace today. Her passion for helping families make informed decisions about their health care and living benefit needs has led her to become one of the most successful agents in her field. Diana holds a Diamond Club award for being listed as one of the top 30 brokers in Canada for more than 5 years. Diana has expertise in life accident and sickness products, as well as wealth and estate planning.</p>
	</div>
	<div class="col-half home__bio">
		<h3 >Noah Dabrinski</h3>
		<h4 class="margin-bottom-50">Vice President-Chief Compliance Officer</h4>
		<p>A dedicated advisor with a wealth of experience in estate planning and executive benefits. Noah has extensive training in industry compliance and has worked directly with large international insurance providers to develop processes and programs for brokerages to ensure the highest levels of ethical practices. Noah brings a unique view of financial services and how insurance products interact with a client’s long term financial goals. He is focused on tax efficient estate planning, long term investment and retirement strategies.</p>
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
				<li>Triumph Association Pension Service</li>
				<li>Investor Services</li>
				<li>Wealth Protection</li>
				<li>Leverage Investing</li>
				<li>Alternative Investments</li>
				<li>PHSP</li>
				<li>Disability</li>
			</ul>
		</div>
		<div class="col-half">
			<ul class="home__service-list">
				<li>Leverage Investing</li>
				<li>Health Care</li>
				<li>Life Insurance</li>
				<li>Insurance for Doctors</li>
				<li>Insurance for Lawyers</li>
				<li>Long Term Care</li>
				<li>Cancer Insurance</li>
			</ul>
		</div>
	</div>
</div>

<div class="clearfix">
	<div class="clearfix" style="background-image: url('<?php echo get_site_url() ?>/wp-content/uploads/2015/07/rev31.jpg'); height: 300px; background-attachment: fixed; background-size: cover; ">
</div>

<div class="container home__get-in-touch margin-top-100 margin-bottom-100">
	<h3 class="home__subtitle margin-bottom-50">Get In Touch</h3>
	<div class="row">
		<div class="col-half">
			<img class="get-in-touch"src="<?php echo get_site_url() ?>/wp-content/uploads/2015/07/partners.jpg" alt="">
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
			<img class="map" src="<?php echo get_site_url() ?>/wp-content/uploads/2015/07/map1.png" alt="">
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