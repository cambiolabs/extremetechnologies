<?php 
/*
	Template Name:  Services
*/
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="subhero subhero-services">
				<div class="container">
					<div class="col-sm-8">
						<h1><?php the_title(); ?></h1>
						<h3>We have spent over a decade working with companies to bridge the gap between consulting and staffing.  We know you are looking for superior performance and expertise when it comes to your projects.</h3>
					</div>
					<div class="col-sm-4">
						<a href="/contact" class="button orange contact">Contact Us Today</a>
					</div>
				</div>
			</div>
			
			<div class="container services">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php bloginfo('template_directory');?>/img/icon-handshake.png" />
						<h2>Professional Services</h2>
						<p>We have spent over a decade working with companies to bridge the gap between consulting and staffing.  We know you are looking for superior performance and expertise when it comes to your projects.  Projects that are managed by your team may not require the use of an outside consultancy for subject matter expertise.  Our clients are able to take advantage of a hybridized approach giving you the experts you need when you need them.</p>
						<p>The benefit to you – availability of consultants is not determined by who is “on the bench”.  ETI hand selects available talent who has the experience to architect a project and help to define the resources you need.  We handle the entire lifecycle, giving you and your team the ability to focus on your business. </p>
					</div>
					<div class="col-md-6">
						<img src="<?php bloginfo('template_directory');?>/img/icon-home-briefcase.png" />
						<h2>Project Consultants</h2>
						<p>We have hundreds of vetted project consultants that have worked on a wide variety of projects across the US.</p>
						<p>Our projects span technology and business across the industries we serve.  Our goal is to provide excellence in requirements gathering and definition phase through expert delivery.  From your corporate office to remote locations and offshore, our people have the experience and professionalism you need to execute.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<img src="<?php bloginfo('template_directory');?>/img/icon-home-dumbbell.png" />
						<h2>Subject & Domain Experts</h2>
						<p>We boast an extensive portfolio of Subject Matter Experts (SME) that bring seasoned industry and domain experience to your projects.  Our SME’s have deep functional and technical experience in the following specialties: </p>
						<ul class="fancy">
							<li>Information Technology – Vendor Agnostic or Certified Evangelist</li>
							<li>Business IT (BIT)</li>
							<li>Knowledge Management & Collaboration </li>
							<li>Energy </li>
							<li>Oil & Gas</li>
							<li>Engineering</li>
							<li>Chemical</li>
							<li>Logistics</li>
							<li>Manufacturing</li>
						</ul>
					</div>
					<div class="col-md-6">
						<img src="<?php bloginfo('template_directory');?>/img/icon-home-user.png" />
						<h2>Staffing Solutions</h2> 
						<ul class="fancy">
							<li>Project Staffing</li>
							<li>Long Term Contract</li>
							<li>Contract – Hire </li>
							<li>Direct Hire </li>
							<li>Retained Search</li>
						</ul>
					</div>
				</div>
			</div>	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
