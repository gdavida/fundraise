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
	    <div class="container-fluid">
        <div class="container hero">
        	<div class="top">
	        	<div class="img-wrapper">
		        	<img src="https://placehold.it/250">
						</div>
						<div class=text-wrapper>
							<h1>You</h1>
							<h1>work hard for your organization</h1>
						</div>
					</div>
        	<div class="bottom">
						<h1>You</h1>
						<ul>
							<li class="h1">plan events</li>
							<li class="h1 hidden">attend meetings</li>
							<li class="h1 hidden">coordinate volunteers</li>
							<li class="h1 hidden">schedule fundraisers</li>
						</ul>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
