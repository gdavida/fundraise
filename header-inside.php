<?php
/**
 * The inside page header for our theme
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
    <!-- page wrapper start -->
    <div id="page-top" class="wrapper">
        <!-- header area start -->
        <header class="home-style-2"><script src="https://ajax.googleapis.com/ajax/libs/indefinite-observable/1.0.1/indefinite-observable.js"></script>
            <nav class="navbar navbar-fixed-top" data-spy="affix" data-offset-top="1" style="position: fixed;
    -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
    -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    padding: 10px;
    background: white;">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="" ><img src="<?php echo get_template_directory_uri() ?>/img/logo/fundraise.png" alt="logo" class="img-responsive"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="/">Home</a></li>
<!--                             <li><a href="#app-about-area">About</a></li>-->                            
                            
                            <li><a href="#contact-area">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div id="content" class="site-content">
