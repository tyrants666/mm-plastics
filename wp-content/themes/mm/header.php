<!DOCTYPE html>
<html <?php language_attributes(); ?> >

  <head>

    <meta charset="utf-8">
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

    <title> MM Group  Pvt Ltd </title>
    <link rel="shortcut icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png ">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins|Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">
    <script src=" <?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.4.1.min.js" integrity="" crossorigin="anonymous"></script>

  <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> id="body" class="body">


        <!-- navbar -->
        <nav class="navbar navbar-light mx-auto" id="navbar1">
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <!-- <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/logo-rotate.gif"alt=""> -->
            <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/logo-rotate.gif"alt="">
          </a>


          <div class="top-menu" id="navbarNavDropdown">
                  <ul>
                      <a href="<?php echo home_url(); ?>" class="underline22"> <li> Home </li> </a>
                      <a href="<?php echo home_url(); ?>/product" class="underline22">  <li> Products </li> </a>
                      <a href="<?php echo home_url(); ?>/technology" class="underline22 ">  <li> Technology </li> </a>
                      <a href="<?php echo home_url(); ?>/about-us" class="underline22">  <li> About Us </li> </a>
                      <a href="<?php echo home_url(); ?>/contact-us" class="">  <li class="my-li2"> Contact Us </li> </a>
                  </ul>
          </div>

          <!-- Hamburger Menu -->
          <div class="navbar-toggler" style="border-color: transparent;" >
    				<svg viewBox="0 0 800 600">
    					<path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
    					<path d="M300,320 L540,320" id="middle"></path>
    					<path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
    				</svg>
    			</div>
          <!-- Sidebar -->
    			<div id="mySidepanel" class="sidepanel w-0">
            <ul>
                <a href="<?php echo home_url(); ?>" class="underline ">  <li> Home </li> </a>
                <a href="<?php echo home_url(); ?>/product" class="underline ">  <li> Products </li> </a>
                <a href="<?php echo home_url(); ?>/technology" class="underline ">  <li> Technology </li> </a>
                <a href="<?php echo home_url(); ?>/about-us" class="underline ">  <li> About Us </li> </a>
                <a href="<?php echo home_url(); ?>/contact-us" class="underline ">  <li> Contact Us </li> </a>
            </ul>
    			</div>


        </nav>

        <!-- navbar 2 -->
        <nav class="navbar navbar-light mx-auto" id="navbar2">
          <a class="navbar-brand" href="<?php echo home_url(); ?>/mmplastic">
            <!-- <div class="spinner"></div> -->
            <img class="logo2" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/logo-rotate.gif"alt="">
          </a>

          <div class="top-menu2" id="navbarNavDropdown">
                  <ul>
                    <a href="<?php echo home_url(); ?>" class="underline2">  <li> Home </li> </a>
                    <a href="<?php echo home_url(); ?>/product" class="underline2">  <li> Products </li> </a>
                    <a href="<?php echo home_url(); ?>/technology" class="underline2 ">  <li> Technology </li> </a>
                    <a href="<?php echo home_url(); ?>/about-us" class="underline2" >  <li> About Us </li> </a>
                    <a href="<?php echo home_url(); ?>/contact-us" class="underline2" >  <li class="my-li"> Contact Us </li> </a>
                  </ul>
          </div>

          <!-- Hamburger Menu -->
          <div class="navbar-toggler mb-2" style="border-color: transparent;" >
    				<svg viewBox="0 0 800 600">
    					<path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
    					<path d="M300,320 L540,320" id="middle"></path>
    					<path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
    				</svg>
    			</div>

        </nav>


    <div class="main">
