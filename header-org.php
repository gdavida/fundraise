<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fundraise17
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



<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

  <!-- Materialize Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fundraise17' ); ?></a>

<header>
  <div class="container main-nav">
    <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only">
      <i class="material-icons black-text">menu</i>
    </a>
    <div id="nav-mobile" class="side-nav fixed">
      <div class="top-wrapper">
        <div class="identification">
          <img src="<?php the_field('organization_logo') ?>" class="brand-logo">
          <div class="text-wrapper">
            <p class="org-title"><?php the_field('name_of_organization') ?></p>
            <?php the_field('organization_brief_message') ?>
          </div>
        </div>
        
        <div class="nav-items">
          <div class="side-item-wrapper active orgnavBtn">
            <a href="#about" class="title">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 18 20" style="enable-background:new 0 0 18 20;" xml:space="preserve">

            <defs>
              <linearGradient id="MyGradient">
                <stop offset="5%" stop-color="#E88EB3" />
                <stop offset="90%" stop-color="#8748FA" />
              </linearGradient>
            </defs>
            <title>AboutUs</title>
            <g id="Layer_2">
              <g id="Isolation_Mode">
                <path d="M17.8,5.6c0-0.5-0.3-1-0.8-1.2L9.6,0.2c-0.5-0.3-1-0.3-1.5,0L1,4.4C0.5,4.6,0.2,5.1,0.2,5.6c-0.2,4.3-0.2,8.7,0,13
                  C0.3,19.4,0.9,20,1.7,20H5c0.6,0,1-0.4,1-1v-4.7c0-0.8,0.7-1.5,1.5-1.5l0,0h3c0.8,0,1.5,0.7,1.5,1.5l0,0V19c0,0.6,0.4,1,1,1h3.3
                  c0.8,0,1.5-0.6,1.5-1.4C18.1,14.3,18.1,9.9,17.8,5.6z"/>
              </g>
            </g>
            </svg>
            Home</a>
          </div>
          <div class="side-item-wrapper orgnavBtn">
            <a href="#events" class="title">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 24 22" style="enable-background:new 0 0 24 22;" xml:space="preserve">
              <title>Wishlist_1</title>
              <g id="Layer_2">
                <g id="Isolation_Mode">
                  <path d="M23.8,4.4c0-0.8-0.7-1.4-1.5-1.4L19,2.8V1.5C19,0.7,18.3,0,17.5,0S16,0.7,16,1.5v1.3c-1.2,0-6.8,0-8,0V1.5
                    C8,0.7,7.3,0,6.5,0S5,0.7,5,1.5v1.3L1.6,2.9C0.9,3,0.2,3.6,0.2,4.4c-0.2,5.4-0.2,10.6,0,16c0,0.8,0.7,1.4,1.5,1.4
                    C5,21.9,8.6,22,12,22s7-0.1,10.4-0.2c0.8,0,1.4-0.7,1.5-1.4C24.1,15,24.1,9.8,23.8,4.4z M20.9,18c0,0.5-0.5,1-1,1
                    C17.4,19,14.6,19,12,19s-5.4,0-7.9-0.1c-0.5,0-1-0.4-1-1C3,15.6,3,13.3,3,11c0-0.6,0.4-1,1-1h16c0.6,0,1,0.4,1,1
                    C21,13.3,21,15.6,20.9,18L20.9,18z"/>
                  <path d="M16,14h1c0.6,0,1,0.4,1,1v1c0,0.6-0.4,1-1,1h-1c-0.6,0-1-0.4-1-1v-1C15,14.4,15.4,14,16,14z"/>
                </g>
              </g>
              </svg>

              Events
            </a>
          </div>


          <div class="side-item-wrapper orgnavBtn">
          <a href="#sponsor" class="title">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 24 23.8" style="enable-background:new 0 0 24 23.8;" xml:space="preserve">
          <title>Sponsor</title>
          <g id="Layer_2">
            <g id="Isolation_Mode">
              <path d="M22.5,2.8H17c0.4-1,0-2.2-1-2.6c-0.8-0.3-1.7-0.2-2.3,0.5L12,2.3l-1.7-1.7c-0.8-0.8-2-0.8-2.8-0.1C6.8,1.1,6.7,2,7,2.8
                H1.5C0.7,2.8,0,3.4,0,4.3l0,0v2c0,0.8,0.7,1.5,1.5,1.5h21c0.8,0,1.5-0.7,1.5-1.5v-2C24,3.4,23.3,2.8,22.5,2.8L22.5,2.8z"/>
              <path d="M3.4,23.8H11v-14H3.4c-0.8,0-1.5,0.6-1.5,1.4c-0.2,3.7-0.2,7.5,0,11.2C2,23.1,2.6,23.8,3.4,23.8z"/>
              <path d="M13,9.8v14h7.6c0.8,0,1.5-0.6,1.5-1.4c0.2-3.7,0.2-7.5,0-11.2c0-0.8-0.7-1.4-1.5-1.4H13z"/>
            </g>
          </g>
          </svg>
            Donate</a>
            <ul>
              <li>Featured Campaign</li>
              <li>Sponsorships</li>
              <li>Shopping Partners</li>
              <li>Wishlist</li>
            </ul>
          </div>

          <div class="side-item-wrapper orgnavBtn">
            <a href="#shopping-partners" class="">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 25.4 20" style="enable-background:new 0 0 25.4 20;" xml:space="preserve">
            <title>Partners</title>
            <path d="M25.4,17.7c-0.5-3.6-2.5-6.2-5-7.3c1.4-0.8,2.3-2.2,2.3-3.9c0-2.5-2-4.5-4.5-4.5s-4.5,2-4.5,4.5c0,1.7,0.9,3.1,2.3,3.9
              c-1.2,0.5-2.3,1.4-3.2,2.6c-0.9-1.2-2-2.1-3.2-2.6c1.4-0.8,2.3-2.2,2.3-3.9C11.8,4,9.8,2,7.3,2S2.7,4,2.7,6.5c0,1.7,0.9,3.1,2.3,3.9
              c-2.5,1-4.5,3.7-5,7.3c-0.1,1,0.3,2,0.8,2C4.7,20,8.6,20,12.5,19.8c4,0.2,8,0.2,12,0C25.1,19.7,25.5,18.7,25.4,17.7z"/>
            </svg>
              Connect</a>
          </div>


          <div class="side-item-wrapper orgnavBtn">
            <a href="#store" class="title">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 21 21" style="enable-background:new 0 0 21 21;" xml:space="preserve">
              <title>Store</title>
              <g id="Layer_2">
                <g id="Layer_1-2">
                  <path d="M20.9,9l-1.1-3.3C19.7,5.3,19.3,5,18.9,5H2.1c-0.4,0-0.8,0.3-1,0.7L0.1,9c-0.3,0.8,0.1,1.6,0.9,1.9C1.2,11,1.3,11,1.5,11
                    H2v8.5C2,20.3,2.7,21,3.5,21h14c0.8,0,1.5-0.7,1.5-1.5V11h0.5c0.8,0,1.5-0.7,1.5-1.5C21,9.3,21,9.2,20.9,9z M9,18
                    c0,0.5-0.4,0.9-0.9,1H5.9C5.4,18.9,5,18.5,5,18v-5h4V18z"/>
                  <path d="M2.5,0h16C19.3,0,20,0.7,20,1.5v1C20,3.3,19.3,4,18.5,4h-16C1.7,4,1,3.3,1,2.5v-1C1,0.7,1.7,0,2.5,0z"/>
                </g>
              </g>
              </svg>
            Store</a>
          </div>




        </div>
        
      </div>
      <div class="nav-footer">
        <div class="goal-wrapper" >
          <div class="text-wrapper">
            <h6 class="">Goal</h6>
            <!-- TO DO: eventually this needs to have a bar with the percentage to goal illustrated -->
            <div id="progress-tracker" style="height: 10px; border: 1px solid black; margin-bottom: 0; border-radius: 5px;">
              <div style="width:50%; background-color: gray; height: 100%; border-radius: 5px; background: #aa076b47; background: linear-gradient(to left, #4ccbab, #3e75c8); /* W3C, IE 10+/ Edge, "></div>
            </div>
            <h6 class="goal-number">$<?php 
              $num = get_field('dollar_goal');
              $num = (int)$num;
              $num = number_format($num);
              echo $num;
            ?></h6>
          </div>
        </div>
        <div class="copyright-wrapper">
          <div class="text-wrapper">
           
            <div class="">
             <p class="small">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url() ?>">Fundraise</a>, All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</header>

	<div id="content" class="site-content">
