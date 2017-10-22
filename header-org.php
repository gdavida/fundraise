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
       <img src="<?php the_field('organization_logo') ?>" class="brand-logo">
        <p class="org-title"><?php the_field('name_of_organization') ?></p>
        <br>
        <div class="nav-items">
          <div class="divider" style="margin-bottom: 20px;"></div>
          <br>
          <a href="#about" class="">About</a>
          <a href="#events" class="">Events</a>
          <a href="#shopping-partners" class="">Shopping Partners</a>
          <a href="#store" class="">Store</a>
          <a href="#sponsor" class="">Sponsor</a>
          <a href="#wishlist" class="">Wishlist</a>
        </div>
        <div class="button-wrapper">
          <a class="btn waves-effect waves-light" target="_blank" href="mailto:<?php the_field('contact_email') ?>" style="border:1px solid <?php echo $the_brand_color ?>;">Contact Us</a>
        </div>
      </div>
      <div class="nav-footer">
        <div class="goal-wrapper" style="background-color: <?php echo $the_brand_color ?>;">
          <div class="text-wrapper">
            <h6 class="white-text">Our Goal - $<?php the_field('dollar_goal') ?></h6>
            <!-- TO DO: eventually this needs to have a bar with the percentage to goal illustrated -->
            <div id="progress-tracker" style="height: 10px; border: 1px solid black; margin-bottom: 0">
              <div style="width:50%; background-color: gray; height: 100%;"></div>
            </div>
          </div>
        </div>
        <div class="copyright-wrapper" style="background-color: <?php echo $the_brand_color ?>; filter: brightness(85%);">
          <div class="text-wrapper">
            <p>
              <?php the_field('organization_brief_message') ?>
            </p>
            <div class="">
              &copy; <?php echo date('Y'); ?> Fundraise, All rights reserved.
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</header>

	<div id="content" class="site-content">
