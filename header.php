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
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fundraise</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" href="favicon.ico">
    <!-- all additional css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/elements.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/color-variation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css">
    <!-- modernizr js -->
    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- prelaoder start -->
    <div id="preloader-wrapper">
        <div class="preloader-wave-effect"></div>
    </div>
    <!-- prelaoder end -->
    <!-- page wrapper start -->
    <div id="page-top" class="wrapper">
        <!-- header area start -->
        <header class="home-style-2">
            <nav class="navbar navbar-fixed-top" data-spy="affix" data-offset-top="1">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="" ><img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-2.png" alt="logo" class="img-responsive"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#page-top">Home</a></li>
<!--                             <li><a href="#app-about-area">About</a></li>-->                            
                            <li><a href="#awesome-features-area">Features</a></li>
                            <li><a href="#how-it-works-area">How It Works</a></li>
                            <li><a href="#app-screenshot-area">Screenshots</a></li>
                            <!-- <li><a href="#pricing-table-area">Pricing</a></li> -->
                            <!-- <li><a href="#faq-area">FAQs</a></li> -->
                            <!-- <li><a href="#blog-area">Blog</a></li> -->
                            <li><a href="#contact-area">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
<div id="content" class="site-content">
