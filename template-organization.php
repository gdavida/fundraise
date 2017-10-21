<?php
/**
 * Template Name: Organization
 * Template Post Type: organization
 * Note: This is the template page for each individual organization
 * @package fundraise
 */
?>


<?php get_header('org'); ?>

    <main>
    <div class="container about how-to-give" id="about">
      <h5>How to get involved: Help in the ways that make sense for you.</h5>
      <div class='row valign-wrapper'>
        <div class="col sm12 m4 center">
          <i class="material-icons medium">access_time</i>
          <h5>Share your time</h5>
        </div>
        <div class="col sm12 m8">
          <p class="text-left">
            Whether you are attending a community event, volunteering at fundraisers, helping to organizing events, or contributing your thoughts and ideas and talents in other ways, giving your time to <?php the_field('organization_name') ?> is an invaluable way to support our community. 
          </p>
        </div>
      </div>
      <div class='row valign-wrapper'>
        <div class="col sm12 m8">
          <p class="text-left">
            Donate to our general fund, because sometimes the best way to help someone is to give them some cash without any strings attached. We have this fund to make sure that we have the freedom to see a need and meet it.<br>
            Choose a specific sponsorship to direct where you want your money being used.
          </p>
        </div>
        <div class="col sm12 m4 center ">
          <i class="material-icons medium">attach_money</i>
          <h5>Donate money</h5>
        </div>
      </div>
      <div class='row valign-wrapper'>
          <div class="col sm12 m4 center">
            <i class="material-icons medium">shopping_basket</i>
            <h5>Provide supples</h5>
          </div>
          <div class="col sm12 m8">
            <p class="text-left">
              Find out what specific items we need donated and fulfill through Amazon Wishlist.
            </p>
          </div>
      </div>
    </div>
    <div class="container events" id="events">
      <div class="row">
        <div class="col s12 m9 l10">
          <article id="events" class="shown" style="margin-top:30px">
            <?php the_field('google_calendar_iframe') ?>
          </article>
        </div>
      </div>
    </div>
    <div class="container shopping-partners" id="shopping-partners">
      <div class="row">
        <div class="col s12 m9 l10">
          <article id="shopping-partners" class="collapse">
            <p><span>These online stores donate money back!</span></p>
            <p>Follow these links before shopping at these online retailers for a percentage of sales to be returned to <?php the_field('organization_name') ?>.</p>
            <p><a href="<?php the_field('amazon_link') ?>" target="_blank">Amazon</a></p>
            <p><a href="<?php the_field('walmart_link') ?>" target="_blank">Walmart</a></p>
            <p><a href="<?php the_field('target_link') ?>" target="_blank">Target</a></p>
            
            <!-- 
              If there are rows of the Other Shopping Partner Links repeater, then
              For each, do this:
             -->

              <?php if( have_rows('other_shopping_partner_links') ) { ?>
                <?php while( have_rows('other_shopping_partner_links') ): the_row(); ?>
                  <p>
                    <a href="<?php the_sub_field('link') ?>" target="_blank">
                      <?php the_sub_field('name') ?>  
                    </a>
                  </p>
                  <?php the_sub_field('description') ?>
                <?php endwhile; 
               } ?>
              
            <!-- 
              / end of Other Shipping Partner Links each
             -->

          </article>
        </div>
      </div>
    </div>

    <div class="container store" id="store">
      <div class="row">
        <div class="col s12 m12 l12">
          <p>Share your <?php the_field('organization_name'); ?> pride!</p>
          <p>Purchase <?php the_field('organization_name'); ?> branded apparel and 20% of sales go directly to <?php the_field('organization_name'); ?>. We have adult and children sizes of shirts, hoodies, hats, and socks, and they're shipped directly to your home.</p>
          <div class="apparel-images-wrapper">
            <div class="card">
              <div class="card-image">
                <img src="https://fundraise.love/wp-content/themes/fundraise-beta/images/shirt_ex1.jpg" />
                <a class="btn-floating halfway-fab waves-effect waves-light amber lighten-2"><i class="material-icons black-text">add</i></a>
              </div>
              <div class="card-content">
                <span class="card-title">T-Shirt</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image">
              <img src="https://fundraise.love/wp-content/themes/fundraise-beta/images/prescott-pride_mockup_Wrinkle-Front_Kelly.png" />
                <a class="btn-floating halfway-fab waves-effect waves-light amber lighten-2"><i class="material-icons black-text">add</i></a>
              </div>
              <div class="card-content">
                <span class="card-title">Hoodie</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image">
                <img src="https://fundraise.love/wp-content/themes/fundraise-beta/images/prescott-pride_mockup_Flat-Front_Irish-Green.png" />
                <a class="btn-floating halfway-fab waves-effect waves-light amber lighten-2"><i class="material-icons black-text">add</i></a>
              </div>
              <div class="card-content">
                <span class="card-title">Hoodie</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image">
                <img src="https://fundraise.love/wp-content/themes/fundraise-beta/images/tank_ex1.jpg" />
                <a class="btn-floating halfway-fab waves-effect waves-light amber lighten-2"><i class="material-icons black-text">add</i></a>
              </div>
              <div class="card-content">
                <span class="card-title">Hoodie</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image">
                <img src="https://fundraise.love/wp-content/themes/fundraise-beta/images/prescott-pride_mockup_Flat-Front_Black.png" />
                <a class="btn-floating halfway-fab waves-effect waves-light amber lighten-2"><i class="material-icons black-text">add</i></a>
              </div>
              <div class="card-content">
                <span class="card-title">Hoodie</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image">
                <img src="https://fundraise.love/wp-content/themes/fundraise-beta/images/prescott-pride_mockup_Flat-Front_Green-Apple.png" />
                <a class="btn-floating halfway-fab waves-effect waves-light amber lighten-2"><i class="material-icons black-text">add</i></a>
              </div>
              <div class="card-content">
                <span class="card-title">Hoodie</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image">
                <img src="https://fundraise.love/wp-content/themes/fundraise-beta/images/hoodie_ex2.jpg" />
                <a class="btn-floating halfway-fab waves-effect waves-light amber lighten-2"><i class="material-icons black-text">add</i></a>
              </div>
              <div class="card-content">
                <span class="card-title">Hoodie</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container sponsor" id="sponsor">
      <div class="row">
        <div class="col s12 m9 l10">
          <div id="structure" class="section scrollspy">
            <h4>Introduction</h4>
            <p class="caption">This is a slide out menu. You can add a dropdown to your sidebar by using our collapsible component. If you want to see a demo, our sidebar will use this on smaller screens. To use this in conjunction with a fullscreen navigation, you have to use two copies of the same UL.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container wishlist" id="wishlist">
      <div class="row">
        <div class="col s12 m9 l10">
          <div id="structure" class="section scrollspy">
            <h4>Introduction</h4>
            <p class="caption">This is a slide out menu. You can add a dropdown to your sidebar by using our collapsible component. If you want to see a demo, our sidebar will use this on smaller screens. To use this in conjunction with a fullscreen navigation, you have to use two copies of the same UL.</p>
          </div>
        </div>
      </div>
    </div>
  </main>


<?php get_footer('org'); ?>