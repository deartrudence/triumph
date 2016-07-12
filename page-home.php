<?php /* Template Name: Home */ ?>
<?php get_header(); ?>


<nav id="site-navigation" class="site-header__navigation clearfix" role="navigation">
	<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo bloginfo('template_directory'); ?>/images/triumphant-logo-06.svg" alt=""></a></div>
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'triumph' ); ?></button>
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->


<div id="home">
	<?php $thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src( $thumb_id, 'full', true );
			$thumb_url = $thumb_url_array[0]; ?>
	<header class="home__header" style="background-image: url('<?php echo $thumb_url ?>')">

	</header>


<div class="row container padding-top-100">
	<div class="col-half home__info-box">
		<h3 class="home__block-title margin-bottom-50">Triumph Capital</h3>
		<p>Triumph Capital is a Toronto-based firm that has over thirty years of experience providing personalized service and a unique, comprehensive look at the needs of its clients, both for today and the future.</p>
	</div>
	<div class="col-half home__info-box">
		<h3 class="home__block-title margin-bottom-50">Investor Services</h3>
		<p>Triumph Capital specializes in investment analysis, wealth management, retirement, and estate planning. We will provide you with comprehensive solutions for all of your investment planning needs.</p>
	</div>
</div>
<div class="row container padding-bottom-100">
	<div class="col-half home__info-box">
		<h3 class="home__block-title margin-bottom-50">PHSP/HSA</h3>
		<p>If you are self employed or incorporated, we offer customized Private Health Service Plan and Health Spending Account services designed to help you maximize your savings on health and medical expenses. Lower your tax obligations and provide flexible, affordable, health benefits to yourself and your employees.</p>
	</div>
	<div class="col-half home__info-box">
		<h3 class="home__block-title margin-bottom-50">Technology Development</h3>
		<p> We are dedicated to developing cutting edge financial technology to deliver you better, faster, and more accurate services on demand and in real time. Stay tuned!</p>
	</div>
</div>

<div class="clearfix" style="background-image: url('<?php echo bloginfo('template_directory') ?>/images/rev31.jpg'); height: 300px; background-attachment: fixed; background-size: cover; "></div>

<div id="about" class="container padding-top-100">
	<h3 class="home__subtitle margin-bottom-50">Who We Are</h3>
	<p>Triumph Capital is a Toronto-based firm that has over thirty years of experience providing personalized service and a unique, comprehensive look at the needs of its clients, both for today and the future. We are committed to adhering to a set of principles and practices that have been proven to deliver on the long-term goals of our clients. It is our mission to ensure that the concepts we put in place will exceed your goals and expectations, while providing the value and peace of mind you deserve.</p>
</div>

<div class="row container padding-bottom-100">
	<div class="col-half home__bio">
		<h3 >Diana Dyer</h3>
		<h4 class="margin-bottom-50">President and CEO</h4>
		<p>As the President and CEO of Triumph Capital Limited, Diana brings a depth and understanding of the financial services industry that is rarely seen in the marketplace today. Her passion for helping families make informed decisions about their financial needs has led her to become one of the most successful agents in her field. Diana holds a Diamond Club award for being listed as one of the top 30 brokers in Canada for more than 5 years and is the youngest broker to have ever received this award. Diana has been active in a number of charities and public outreach programs, most recently Motionball for the Special Olympics. Diana is known for her discretion and her ability to identify and address the needs of her clients, regardless of their situation. Her skillset allows her to excel and build lasting relationships built on mutual respect and a deeply rooted desire to help others accomplish their financial goals.</p>
	</div>
	<div class="col-half home__bio">
		<h3 >Noah Drabinsky</h3>
		<h4 class="margin-bottom-50">Executive Vice-President and Chief Investment Officer</h4>
		<p>A dedicated advisor with a wealth of experience in estate planning and executive benefits. Noah has extensive training in industry compliance and has worked directly with large international insurance providers to develop processes and programs for brokerages to ensure the highest levels of ethical practices. Noah brings a unique view of financial services and how insurance products interact with a client’s long term financial goals. He is focused on tax efficient estate planning, long term investment and retirement strategies.</p>
	</div>
</div>

<div class="clearfix" style="background-image: url('<?php echo bloginfo('template_directory') ?>/images/rev31.jpg'); height: 300px; background-attachment: fixed; background-size: cover; ">
</div>

<div id="services"class="container padding-bottom-100 padding-top-100">
	<h3 class="home__subtitle margin-bottom-50">What We Do</h3>
	<p>Triumph Capital is a Toronto-based firm that has over thirty years of experience providing personalized service and a unique, comprehensive look at the needs of its clients, both for today and the future. We are committed to adhering to a set of principles and practices that have been proven to deliver on the long-term goals of our clients. It is our mission to ensure that the concepts we put in place will exceed your goals and expectations, while providing the value and peace of mind you deserve.</p>
	<div class="row">
		<div class="col-half">
			<ul class="home__service-list">
				<li><a href="<?php echo get_site_url() ?>/triumph-association-pension-plan">Triumph Association Pension Service</a></li>
				<li><a href="<?php echo get_site_url() ?>/investor-services">Investor Services</a></li>
				<li><a href="<?php echo get_site_url() ?>/resp-advice">RESP</a></li>
				<li><a href="<?php echo get_site_url() ?>/rrsp-advice">RRSP</a></li>
				<li><a href="<?php echo get_site_url() ?>/investing-for-young-people">Investing for Young Professionals</a></li>
				<li><a href="<?php echo get_site_url() ?>/phsp-faqs">PHSP</a></li>
			</ul>
		</div>
		<div class="col-half">
			<ul class="home__service-list">
				<li><a href="<?php echo get_site_url() ?>/estate-planning">Estate Planning</a></li>
				<li><a href="<?php echo get_site_url() ?>/health-care">Health Care</a></li>
				<li><a href="<?php echo get_site_url() ?>/life-insurance">Life Insurance</a></li>
				<li><a href="<?php echo get_site_url() ?>/insurance-for-doctors">Insurance for Doctors</a></li>
				<li><a href="<?php echo get_site_url() ?>/insurance-for-lawyers">Insurance for Lawyers</a></li>
				<li><a href="<?php echo get_site_url() ?>/long-term-care">Long Term Care</a></li>
			</ul>
		</div>
	</div>
</div>


<div class="clearfix" style="background-image: url('<?php echo bloginfo('template_directory') ?>/images/rev31.jpg'); height: 300px; background-attachment: fixed; background-size: cover; ">
</div>

<div id="contact"class="container home__get-in-touch padding-top-100 padding-bottom-100">
	<h3 class="home__subtitle margin-bottom-50">Get In Touch</h3>
	<div class="row">
		<div class="col-half">
			<img class="get-in-touch"src="<?php echo bloginfo('template_directory') ?>/images/partners.jpg" alt="">
		</div>
		<div class="col-half">
			<div class="row">
				<div class="col-half">
					<p>Triumph Capital Limited</p>
					<p><a href="https://www.google.ca/maps/place/Triumph+Capital+Limited/@43.6383919,-79.4184031,17z/data=!3m1!4b1!4m2!3m1!1s0x882b350387712add:0xda950ce2da76decb" target="_blank">171 East Liberty Street Suite 272</a></p>
					<p>Toronto, ON M6K 3P6</p>
				</div>
				<div class="col-half">
					<p class="align-right"><a href="tel:+1-647-345-0611">Phone:  647-345-0611</a></p>
					<p class="align-right"><a href="tel:+1-888-315-7781">Toll Free: 1-888-315-7781</a></p>
					<p class="align-right">Fax: 1-888-315-7781</p>
				</div>
			</div>
			<a href="https://www.google.ca/maps/place/Triumph+Capital+Limited/@43.6383919,-79.4184031,17z/data=!3m1!4b1!4m2!3m1!1s0x882b350387712add:0xda950ce2da76decb" target="_blank"><img class="map" src="<?php echo bloginfo('template_directory') ?>/images/map.png" alt="Map to 171 East Liberty Street"></a>
		</div>
	</div>
</div>

<div class="clearfix" style="background-image: url('<?php echo bloginfo('template_directory') ?>/images/rev31.jpg'); height: 300px; background-attachment: fixed; background-size: cover; ">
	</div>

<div id="quote" class="container padding-top-100 padding-bottom-100">
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/content', 'page' ); ?>


<?php endwhile; // End of the loop. ?>
</div>
</div>
<?php get_footer(); ?>