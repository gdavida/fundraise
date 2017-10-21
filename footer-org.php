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

  
  <footer class="page-footer" id="colophon" class="site-footer">
    <div class="container site-info">
      <div class="row">
        <div class="col l8 s12">
          <h5 class="white-text">The problem</h5>
          <p class="grey-text text-lighten-4">Christians in Myanmar face religious persection, extreme poverty, and limited educational opportunities.</p>
          <a class="btn waves-effect waves-light red lighten-3" target="_blank" href="https://gitter.im/Dogfalo/materialize">Chat</a>
        </div>
        <div class="col l4 s12" style="overflow: hidden;">
          <h5 class="white-text">Our Goal</h5>
          <h5>$10,000</h5>
          <div id="progress-tracker" style="height: 10px; border: 1px solid black; margin-bottom: 0">
            <div style="width:50%; background-color: gray; height: 100%;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2014-2017 Materialize, All rights reserved.
      <a class="grey-text text-lighten-4 right" href="https://github.com/Dogfalo/materialize/blob/master/LICENSE">MIT License</a>
      </div>
    </div>
  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>