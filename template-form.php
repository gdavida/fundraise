<?php
/**
 * The template for displaying a form page
 *
 * Template Name: Form Page

 * @package fundraise17
 */

get_header('inside'); ?>

		<main id="main" class="container form-template" style="margin-top: 120px;">
			<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_type() );


				endwhile; // End of the loop.
				?>

		</main><!-- #main -->
</div>
<?php
