<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fundraise17
 */

?>

  </div><!-- #content -->

  
  <footer class="page-footer" id="colophon" class="site-footer" style="background-color: <?php the_field('brand_color'); ?>; ">
    <div class="container site-info">
      <div class="row">
        <div class="col l8 s12">
          <h5 class="white-text">The problem</h5>
          <p class="grey-text text-lighten-4"><?php the_field('organization_brief_message') ?></p>
          <a class="btn waves-effect waves-light" target="_blank" href="mailto:<?php the_field('contact_email') ?>" style="background-color:<?php the_field('brand_color'); ?>; filter: darken(8%); color: black;">Contact Us</a>
        </div>
        <div class="col l4 s12" style="overflow: hidden;">
          <h5 class="white-text">Our Goal</h5>
          <h5><?php the_field('dollar_goal') ?></h5>
          <!-- TO DO: eventually this needs to have a bar with the percentage to goal illustrated -->
          <div id="progress-tracker" style="height: 10px; border: 1px solid black; margin-bottom: 0">
            <div style="width:50%; background-color: gray; height: 100%;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright" style="background-color: <?php the_field('brand_color'); ?>; filter: brightness(85%);">
      <div class="container">
      © 2017 Fundraise, All rights reserved.
      </div>
    </div>
  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>