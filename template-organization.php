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
    <div class="container-fluid each-section about how-to-give" id="about">
      <div class="title-wrapper" style="background-color: <?php the_field('brand_color') ?>">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l10">
              <p class="page-title">About Us</p>
              <p class="page-subtitle"><?php the_field('about_headline') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col s12 m12 l10">
            <h5>How to get involved: Help in the ways that make sense for you.</h5>
          </div>
        </div>
        <div class='row valign-wrapper'>
          <div class="col sm12 m4 center">
            <i class="material-icons medium">access_time</i>
            <h5>Share your time</h5>
          </div>
          <div class="col sm12 m12 l10">
            <p class="text-left">
              Whether you are attending a community event, volunteering at fundraisers, helping to organizing events, or contributing your thoughts and ideas and talents in other ways, giving your time to <?php the_field('name_of_organization'); ?> is an invaluable way to support our community. 
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
    </div>





    <div class="container-fluid each-section events" id="events">
      <div class="title-wrapper" style="background-color: <?php the_field('brand_color') ?>">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l10">
              <p class="page-title">Events</p>
              <p class="page-subtitle"><?php the_field('event_headline') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col s12 m12 l10">
            <article id="events" class="shown" style="margin-top:30px">
              <?php the_field('google_calendar_iframe'); ?>
            </article>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid each-section shopping-partners" id="shopping-partners">
      <div class="title-wrapper" style="background-color: <?php the_field('brand_color') ?>">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l10">
              <p class="page-title">Shopping Partners</p>
              <p class="page-subtitle"><?php the_field('shopping_partners_headline') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col s12 m12 l10">
            <article id="shopping-partners" class="collapse">
              <p><span>These online stores donate money back!</span></p>
              <p>Follow these links before shopping at these online retailers for a percentage of sales to be returned to <?php the_field('name_of_organization') ?>.</p>
              <p><a href="<?php the_field('amazon_link'); ?>" target="_blank">Amazon</a></p>
              <p><a href="<?php the_field('walmart_link'); ?>" target="_blank">Walmart</a></p>
              <p><a href="<?php the_field('target_link'); ?>" target="_blank">Target</a></p>
              
              <!-- 
                If there are rows of the Other Shopping Partner Links repeater, then
                For each, do this:
               -->

                <?php if( have_rows('other_shopping_partner_links') ) { ?>
                  <?php while( have_rows('other_shopping_partner_links') ): the_row(); ?>
                    <p>
                      <a href="<?php the_sub_field('link'); ?>" target="_blank">
                        <?php the_sub_field('name'); ?>  
                      </a>
                    </p>
                    <?php the_sub_field('description'); ?>
                  <?php endwhile;
                  } else { ?> 
                  // no rows found
                <?php  } ?>
                
              <!-- 
                / end of Other Shipping Partner Links each
               -->

            </article>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid each-section store" id="store"> 
      <div class="title-wrapper" style="background-color: <?php the_field('brand_color') ?>">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l10">
              <p class="page-title">Store</p>
              <p class="page-subtitle"><?php the_field('store_headline') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col s12 m12 l10">
            <p>Share your <?php the_field('name_of_organization'); ?> pride!</p>
            <p>Purchase <?php the_field('name_of_organization'); ?> branded apparel and 20% of sales go directly to <?php the_field('name_of_organization'); ?>. We have adult and children sizes of shirts, hoodies, hats, and socks, and they're shipped directly to your home.</p>
          
              <!-- 
                If there are rows of the Store Items repeater, then
                For each, do this:
               -->

                <?php if( have_rows('store_items') ) { ?>    
                  <div class="apparel-images-wrapper">
                  <?php while( have_rows('store_items') ): the_row(); ?>
                    <div class="card">
                      <div class="card-image">
                        <img src="<?php the_sub_field('image') ?>" />
                        <a class="btn-floating halfway-fab waves-effect" style="background-color: <?php the_field('brand_color') ?>; filter: brightness(150%);"><i class="material-icons black-text">add</i></a>
                      </div>
                      <div class="card-content">
                        <span class="card-title"><?php the_sub_field('name') ?></span>
                      </div>
                    </div>
                  <?php endwhile; ?>

                  </div>
                  <? } else { ?> 
                  // no rows found
                <?php  } ?>
                
              <!-- 
                / end of Store Items each
               -->

          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid each-section sponsor" id="sponsor"> 
      <div class="title-wrapper" style="background-color: <?php the_field('brand_color') ?>">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l10">
              <p class="page-title">Sponsor</p>
              <p class="page-subtitle"><?php the_field('sponsor_headline') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col s12 m12 l10">
            <div id="structure" class="section scrollspy">
              <h4><?php the_field('sponsor_headline') ?></h4>
              <p class="caption"><?php the_field('sponsor_custom_message') ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid each-section wishlist" id="wishlist">    
      <div class="title-wrapper" style="background-color: <?php the_field('brand_color') ?>">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l10">
              <p class="page-title">Wishlist</p>
              <p class="page-subtitle"><?php the_field('wishlist_headline') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col s12 m12 l10">
            <div id="structure" class="section scrollspy">
              <h4><?php the_field('wishlist_headline') ?></h4>
              <p class="caption"><?php the_field('wishlist_custom_message') ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


<?php get_footer('org'); ?>