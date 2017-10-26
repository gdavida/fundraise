<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fundraise17
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main frontpage">


	    <div class="container-fluid hero top brown lighten-5">
        <div class="container">
        	<div class="top">
	        	<div class="img-wrapper">
		        	<img src="https://placehold.it/250">
						</div>
						<div class=text-wrapper>
							<h1 class=""><span class="swatch-a-text special">You</span>
							<h1>work hard for your organization</h1>
						</div>
					</div>
				</div>
			</div>

	    <div class="container-fluid hero bottom brown lighten-5">
        <div class="container">
        	<div class="bottom">
						<h1 class="swatch-a-text special">You</h1>
						<div class="rw-words rw-words-1">
							<span><h1>plan events</h1></span>
							<span><h1>attend meetings</h1></span>
							<span><h1>coordinate volunteers</h1></span>
							<span><h1>schedule fundraisers</h1></span>
							<span><h1>get the word out.</h1></span>
						</div>
					</div>
				</div>
			</div>

	    <div class="container-fluid intro-section">
        <div class="container">
						<div class=text-wrapper>
							<h1><span class="swatch-a-text special">Your</span> passion is clear,<br>
							but how are you connecting with your community’s passions?</h1>
							<p>People want to support you… but not everyone is willing or able to contribute in the same way. People want to support you in their own way, and often in their own time.</p>
						</div>
      	</div>
			</div>



	    <div class="container-fluid  brown lighten-5 breakdown-section">
        <div class="container">
					<div class="top-wrapper">
						<p>Fundraise.love helps the people who care find how to support you and then follow through. We bridge the gap between inspiration and action by setting you up to be supported in multiple ways.</p>
					</div>
					<div class="bottom breakdown-list-wrapper">
						<div class="each-list-item">
		        	<div class="img-wrapper">
			        	<img src="https://placehold.it/50">
							</div>
							<div class=text-wrapper>
								<h3>Event Portal</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
						<div class="each-list-item">
		        	<div class="img-wrapper">
			        	<img src="https://placehold.it/50">
							</div>
							<div class=text-wrapper>
								<h3>Swag Store</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
						<div class="each-list-item">
		        	<div class="img-wrapper">
			        	<img src="https://placehold.it/50">
							</div>
							<div class=text-wrapper>
								<h3>Volunteer Center</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
						<div class="each-list-item">
		        	<div class="img-wrapper">
			        	<img src="https://placehold.it/50">
							</div>
							<div class=text-wrapper>
								<h3>Donation Hub</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
						<div class="each-list-item">
		        	<div class="img-wrapper">
			        	<img src="https://placehold.it/50">
							</div>
							<div class=text-wrapper>
								<h3>Idea Box</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
					</div>
      	</div>
			</div>

	    <div class="container-fluid brown lighten-5  brown lighten-5 cta-section">
        <div class="container">
      		<div class="image-wrapper">
	        	<img src="https://placehold.it/500x300">
      		</div>
					<div class=text-wrapper>
						<p class="h4">Want more information? We’ll email you a publication outlining our services, tools, and pricing.</p>
					</div>
				</div>
			</div>

	    <div class="container-fluid cta-button-section">
        <div class="container">
        	<div class="bottom">
						<a href="#" class="btn primary white black-text special">Learn More</a>
					</div>
      	</div>
			</div>

	    <div class="container-fluid more-info-section">
        <div class="container">
        	<p>We’re working hard behind the scenes to test and finish building out our system. We expect to be live by Spring 2018. Until then…</p>
        	<div class="list-container">
        		<div class="each-list-item">
        			<img src="http://placehold.it/100x50">
        			<p>Get on the waitlist and be among the first to start building your custom site.
      			</div>
						<div class="each-list-item">
        			<img src="http://placehold.it/100x50">
							<p>Explore one of a demo sites.
						</div>
						<div class="each-list-item">
        			<img src="http://placehold.it/100x50">
							<p>View our featured case study.
						</div>
        	</div>
      	</div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
