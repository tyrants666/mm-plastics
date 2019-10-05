<!DOCTYPE html>
<html <?php language_attributes(); ?> >

  <head>

    <meta charset="utf-8">
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

    <title> MM Plastic Udhyog Pvt Ltd </title>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_bloginfo( 'template_directory' ); ?>/images/logo.png ">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins|Montserrat:400,500,600,800&display=swap" rel="stylesheet">
    <script src=" <?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.4.1.min.js" integrity="" crossorigin="anonymous"></script>

  <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> id="body">

<!-- Hero-->
    <div class="hero">
        <!-- navbar -->
        <nav class="navbar navbar-light mx-auto" id="navbar1">
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <div class="spinner"></div>
            <img class="logo" src="<?php echo get_bloginfo('template_directory') ?>/images/logo.png"alt="">
          </a>

          <div class="top-menu" id="navbarNavDropdown">
                  <ul>
                      <a href="#" class="underline selected">  <li> Home </li> </a>
                      <a href="#" class="underline" >  <li> Products </li> </a>
                      <a href="#" class="underline" >  <li> Quality </li> </a>
                      <a href="#" class="underline" >  <li> Technology </li> </a>
                      <a href="#" class="underline" >  <li> About Us </li> </a>
                      <a href="#footer" class="underline" >  <li> Contact Us </li> </a>
                  </ul>
          </div>
        </nav>
        <!-- navbar 2 -->
        <nav class="navbar navbar-light mx-auto" id="navbar2">
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <!-- <div class="spinner"></div> -->
            <img class="logo2" src="<?php echo get_bloginfo('template_directory') ?>/images/logo.png"alt="">
          </a>

          <div class="top-menu2" id="navbarNavDropdown">
                  <ul>
                      <a href="#" class="underline2 selected2">  <li> Home </li> </a>
                      <a href="#" class="underline2" >  <li> Products </li> </a>
                      <a href="#" class="underline2" >  <li> Quality </li> </a>
                      <a href="#" class="underline2" >  <li> Technology </li> </a>
                      <a href="#" class="underline2" >  <li> About Us </li> </a>
                      <a href="#footer" class="underline2" >  <li> Contact Us </li> </a>
                  </ul>
          </div>
        </nav>

        <!-- Quote -->
        <div class="quote">
          <h1 class=""> Think Big. <span>We do.</span></h1>
          <h4 class=" fadeInDown2">Our modern life would be very different without plastics.</h4>
          <button class="btn-quote fadeInDown2" type="button" name="button">GET A QUOTE</button>
        </div>

    </div>


    <div class="main">
