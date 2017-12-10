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
            <h4>How to get involved:<br>Help in the ways that make sense for you.</h4>
            <p>Whether you are attending a community event, volunteering at fundraisers, helping to organizing events, or contributing your thoughts and ideas and talents in other ways, giving your time to <?php the_field('name_of_organization'); ?> is an invaluable way to support our community.</p>
          </div>
          <div class="card content-wrapper image-wrapper" style="background-image: url('<?php the_field('organization_feature_image');?>')">
          </div>
        </div>
      </div>
      <div class="container ">
        <div class='row'>
          <div class="content-wrapper col card third" style="padding: 0;">
                
        <div class="nav-footer" style="
          background-color: #white; width: 100%; height:100%;">
              <div class="goal-wrapper"><h3 style="
          background-color: #282E3A;
          color: white;
          padding: 15px 0 12px;
          margin: 0px 0 5px;
          text-align: center;
          border-bottom: 1px dotted #282E3A;
          text-transform: none;
      ">Fundraising Goal</h3>
                <div class="text-wrapper" style="margin-left: auto; margin-right: auto; width: 80%;
    min-width: 230px;
    padding-bottom: 20px; padding-top: 10px;">
                  
                  <!-- TO DO: eventually this needs to have a bar with the percentage to goal illustrated -->
                  <div id="progress-tracker" style="height: 10px; border: 1px solid black; margin-bottom: 0; border-radius: 5px;">
                    <div style="width:50%; background-color: gray; height: 100%; border-radius: 5px; background: #aa076b47; background: linear-gradient(to left, #4ccbab, #3e75c8); /* W3C, IE 10+/ Edge, "></div>
                  </div>
                    <h6 class="goal-number">$23,000 / $40,000</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    <a class="btn white-bg" href="#" style="
          border: 1px solid black;
    color: black;
    font-weight: bold;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
    background-color: white;
    padding-bottom: 35px;
      ">DONATE</a>
                </div>
              </div>
              <div class="copyright-wrapper" style="
          /* display: none; */
      ">
                <div class="text-wrapper">
                 
                  <div class="">
                   <p class="small" style="
          display: none;
      ">© 2017 <a href="http://bestdayalways.today">Fundraise</a>, All rights reserved.</p>
                  </div>
                </div>
              </div>
            </div>

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


    <div class="container-fluid each-section sponsor" id="sponsor"> 
      <div class="title-wrapper">
        <div class="container">
          <div class="row">
            <div class="col s12 m8">
              <p class="page-title h2">Donate</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container" id="featured-campaign">
        <div class="row">
          <div class="col s12">
            <div id="structure" class="section scrollspy">
              <p class="page-title h2" style="background-color: #282E3A;padding: 13px 50px 8px;">Fundraising Goal</p>
              <div class="content-wrapper goal-wrapper" style="
    margin-top: 0;
">
                <div class="text-wrapper">
                 <!-- TO DO: eventually this needs to have a bar with the percentage to goal illustrated -->
                  <div id="progress-tracker" style="height: 10px; border: 1px solid black; margin-bottom: 0; border-radius: 5px;">
                    <div style="width:50%; background-color: gray; height: 100%; border-radius: 5px; background: #aa076b47; background: linear-gradient(to left, #4ccbab, #3e75c8); /* W3C, IE 10+/ Edge, "></div>
                  </div>
                  <h4>$23,000 / $40,000</h4>
                  <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p class="">Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p> 
                   <a class="btn white-bg" href="#" style="
                    border: 1px solid black;
                    color: black;
                    font-weight: bold;
                    margin-left: auto;
                    margin-right: auto;
                    width: 300px;
                    background-color: white;
                    padding-bottom: 35px;
                ">DONATE</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12 m4 content-wrapper" id="shopping-partners">
            <div id="structure" class="section scrollspy">
              <p class="page-title h2">Shopping Partners</p>
              <p><?php the_field('shopping_partners_custom_message'); ?></p>
              <p><a href="<?php the_field('amazon_link'); ?>" target="_blank">Amazon</a></p>
              <p><a href="<?php the_field('walmart_link'); ?>" target="_blank">Walmart</a></p>
              <p><a href="<?php the_field('target_link'); ?>" target="_blank">Target</a></p>
            </div>
          </div>
          <div class="col s12 m8 content-wrapper" id="sponsor">
            <div id="structure" class="section scrollspy">
              <p class="page-title h2">Sponsorships</p>
              <p class="caption"><?php the_field('wishlist_custom_message') ?></p>
            </div>
          </div>
          <div class="col s12 m8 content-wrapper" id="wishlist">
            <div id="structure" class="section scrollspy">
              <p class="page-title h2">Wishlist</p>
              <p class="caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <table class="striped highlight responsive-table">
                <thead>
                  <tr>
                      <th>Name</th>
                      <th>Grade</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>K</td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>K</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Alvin</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>5</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid each-section wishlist" id="connect">    
      <div class="title-wrapper">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l10">
              <p class="page-title h2">Connect</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container content-wrapper">
        <div class="row">
          <div class="col s12 m12 l10">
            <div id="structure" class="section scrollspy">
              <p class="caption"><?php the_field('wishlist_custom_message') ?></p>
                <ul class="social list-inline text-center home-style-2">
                  <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                  <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                  <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                  <li><a href="#"><i class="icofont icofont-social-instagram"></i></a></li>
              </ul>
            </div>
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


    <!-- <div class="container-fluid each-section wishlist" id="contact">    
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
 -->


  </main>


<?php get_footer('org'); ?>