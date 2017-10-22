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
      </div>
      <div class="nav-footer" style="background-color: <?php the_field('brand_color'); ?>; filter: brightness(85%);">
        <div class="text-wrapper">
          <p><?php the_field('organization_brief_message') ?></p>
          <div class="copyright-wrapper">
            &copy; <?php echo date('Y'); ?> Fundraise, All rights reserved.
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

	<div id="content" class="site-content">
