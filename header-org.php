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
  <nav class="top-nav">
    <div class="container">
      <div class="nav-wrapper">
        <p class="page-title">Title To Go Here</p>
        <p class="page-subtitle">The message here should change depending on section they are on</p>
      </div>
    </div>
  </nav>
  <div class="container main-nav">
    <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only">
      <i class="material-icons black-text">menu</i>
    </a>
  <div id="nav-mobile" class="side-nav fixed">
   <img src="<?php the_field('organization_logo') ?>" class="brand-logo">
    <p class="org-title"><?php the_field('name_of_organization') ?></p>
    <p><?php the_field('organization_brief_message') ?></p>

    <div class="nav-items">
      <div class="divider" style="margin-bottom: 20px;"></div>
      <a href="#about" class="">About</a>
      <a href="#events" class="">Events</a>
      <a href="#shopping-partners" class="">Shopping Partners</a>
      <a href="#store" class="">Store</a>
      <a href="#sponsor" class="">Sponsor</a>
      <a href="#wishlist" class="">Wishlist</a>
    </div>
  </div>
  </div>
</header>

	<div id="content" class="site-content">
