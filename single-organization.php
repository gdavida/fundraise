<?php
/**
 * Template Name: Organization
 * Template Post Type: organization
 * Note: This is the template page for each individual organization
 * @package fundraise
 */
?>
<?php
  $the_brand_color = "#e1ddd4";
    $value = get_field( "brand_color" );

  if($value) {
    $the_brand_color = $value;
  } else {
    ;
  }
?>

<?php get_header('org'); ?>

    <main>


    <div class="container-fluid each-section about how-to-give" id="about">
      <div class="container">
        <div class="row ">
          <div class="card content-wrapper text-wrapper">
            <p class="page-title h2">About Us</p>
            <h3>How to get involved:<br>Help in the ways that make sense for you.</h3>
            <p>Whether you are attending a community event, volunteering at fundraisers, helping to organizing events, or contributing your thoughts and ideas and talents in other ways, giving your time to <?php the_field('name_of_organization'); ?> is an invaluable way to support our community.</p>
          </div>
          <div class="card content-wrapper image-wrapper" style="background-image: url('<?php the_field('organization_feature_image');?>')">
          </div>
        </div>
      </div>
      <div class="container ">
        <div class='row'>
          <div class="content-wrapper col card third">
            <i class="material-icons small" style="background: 
                        linear-gradient(to bottom left, #8748FA, #E88EB3); color: white; text-shadow: none;">access_time</i>
            <h4 style="text-shadow: none;">Share your time</h4>
            <p class="text-left">
              Your thoughts and ideas and talents in other ways, giving your time to <?php the_field('name_of_organization'); ?> is an invaluable way to support our community. 
            </p>
          </div>
          <div class=" content-wrapper col card third">
            <i class="material-icons small" style="background:linear-gradient(to bottom left, #8748FA, #E88EB3); color: white; text-shadow: none;">credit_card</i>
            <h4 style="text-shadow: none;">Donate money</h4>
            <p class="">
              We have this fund to make sure that we have the freedom to see a need and meet it.<br>Choose a specific sponsorship.</p>
          </div>
            <div class=" content-wrapper col card third">
              <i class="material-icons small" style="background:linear-gradient(to bottom left, #8748FA, #E88EB3); color: white; text-shadow: none;">shopping_basket</i>
              <h4 style="text-shadow: none;">Provide supples</h4>
              <p class="">
                Find out what specific items we need donated and fulfill through Amazon Wishlist.
              </p>
            </div>
        </div>
      </div>
    </div>





    <div class="container-fluid each-section events" id="events">
      <div class="title-wrapper">
        <div class="container content-wrapper">
          <div class="row">
            <div class="col">
              <h1>Events</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col">
            <article id="events" class="shown" style="margin-top:30px">
              <?php the_field('google_calendar_iframe'); ?>
            </article>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid each-section shopping-partners" id="shopping-partners">
      <div class="title-wrapper">
        <div class="container content-wrapper">
          <div class="row">
            <div class="col s12 m12 l10">
              <h1 class="page-title h2">Shopping Partners</h1>
              <h3>Maybe this describes business/community partners and volunteer.</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col s12 m12 l10">
            <article id="shopping-partners" class="collapse">
              <p><?php the_field('shopping_partners_custom_message'); ?></p>
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
      <div class="title-wrapper">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l10">
              <h1 class="page-title h2">Store</h1>
              <h3>Share your <?php the_field('name_of_organization'); ?> pride!</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="container ">
        <div class="row">
          <div class="col content-wrapper">
            <p>Purchase <?php the_field('name_of_organization'); ?> branded apparel and 20% of sales go directly to <?php the_field('name_of_organization'); ?>. We have adult and children sizes of shirts, hoodies, hats, and socks, and they're shipped directly to your home.</p>
          </div>
        </div>
        <div class="row">
              <!-- 
                If there are rows of the Store Items repeater, then
                For each, do this:
               -->

                <?php if( have_rows('store_items') ) { ?>    
                  <div class="apparel-images-wrapper">
                  <?php while( have_rows('store_items') ): the_row(); ?>
                    <div class="card content-wrapper">
                      <div class="card-image">
                        <img src="<?php the_sub_field('image') ?>" />
                        <a class="btn-floating halfway-fab waves-effect" style="background: 
                        linear-gradient(to top left, #8748FA, #E88EB3); border: 1px solid #F9FAFA;"><i class="material-icons white-text" style="font-size: 1.2rem; line-height: 39px; font-weight: 100; margin-left: -.5px;">add</i></a>
                      </div>
                      <div class="card-content">
                        <p class="h4"><?php the_sub_field('name') ?></p>
                      </div>
                    </div>
                  <?php endwhile; ?>

                  </div>
                  <? } else { ?> 
                  // no rows found
                <?php  } ?>
                
        </div>
      </div>
    </div>
    <div class="container-fluid each-section sponsor" id="sponsor"> 
      <div class="title-wrapper">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l10">
              <p class="page-title h2">Donate</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col s12 m12 l10">
            <div id="structure" class="section scrollspy">
              <p class="caption"><?php the_field('sponsor_custom_message') ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- 

    <div class="container-fluid each-section wishlist" id="wishlist">    
      <div class="title-wrapper">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l10">
              <p class="page-title h2">Wishlist</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col s12 m12 l10">
            <div id="structure" class="section scrollspy">
              <p class="caption"><?php the_field('wishlist_custom_message') ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container-fluid each-section wishlist" id="share">    
      <div class="title-wrapper">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l10">
              <p class="page-title h2">Share</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col s12 m12 l10">
            <div id="structure" class="section scrollspy">
              <p class="caption"><?php the_field('share_custom_message') ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>


     -->


    <div class="container-fluid each-section wishlist" id="contact">    
      <div class="title-wrapper">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l10">
              <p class="page-title h2">Contact Us</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col s12 m12 l10">
            <div id="structure" class="section scrollspy">
              <p class="caption"><?php the_field('contact_custom_message') ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>



  </main>


<?php get_footer('org'); ?>