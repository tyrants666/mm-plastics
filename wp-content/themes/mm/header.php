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
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins|Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">
    <script src=" <?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.4.1.min.js" integrity="" crossorigin="anonymous"></script>

  <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> id="body" class="body">

        <!-- navbar -->
        <nav class="navbar navbar-light mx-auto" id="navbar1">
          <a class="navbar-brand" href="<?php echo home_url(); ?>/mmplastic">
            <div class="spinner"></div>
            <img class="logo" src="<?php echo get_bloginfo('template_directory') ?>/images/logo.png"alt="">
          </a>


          <div class="top-menu" id="navbarNavDropdown">
                  <ul>
                      <a href="<?php echo home_url(); ?>/mmplastic" class="underline <?php if( is_page('mmplastic') ) { echo "selected"; }?>">  <li> Home </li> </a>
                      <a href="<?php echo home_url(); ?>/product" class="underline <?php if( is_page('product') ) { echo "selected"; }?>" >  <li> Products </li> </a>
                      <a href="<?php echo home_url(); ?>/quality" class="underline <?php if( is_page('quality') ) { echo "selected"; }?>" >  <li> Quality </li> </a>
                      <a href="<?php echo home_url(); ?>/technology" class="underline <?php if( is_page('technology') ) { echo "selected"; }?>" >  <li> Technology </li> </a>
                      <a href="<?php echo home_url(); ?>/about-us" class="underline <?php if( is_page('about-us') ) { echo "selected"; }?>" >  <li> About Us </li> </a>
                      <a href="<?php echo home_url(); ?>/contact-us" class="underline <?php if( is_page('contact-us') ) { echo "selected"; }?>" >  <li> Contact Us </li> </a>
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
                <a href="<?php echo home_url(); ?>/mmplastic" class="underline <?php if( is_page('mmplastic') ) { echo "selected"; }?>">  <li> Home </li> </a>
                <a href="<?php echo home_url(); ?>/product" class="underline <?php if( is_page('product') ) { echo "selected"; }?>" >  <li> Products </li> </a>
                <a href="<?php echo home_url(); ?>/quality" class="underline <?php if( is_page('quality') ) { echo "selected"; }?>" >  <li> Quality </li> </a>
                <a href="<?php echo home_url(); ?>/technology" class="underline <?php if( is_page('technology') ) { echo "selected"; }?>" >  <li> Technology </li> </a>
                <a href="<?php echo home_url(); ?>/about-us" class="underline <?php if( is_page('about-us') ) { echo "selected"; }?>" >  <li> About Us </li> </a>
                <a href="<?php echo home_url(); ?>/contact-us" class="underline <?php if( is_page('contact-us') ) { echo "selected"; }?>" >  <li> Contact Us </li> </a>
            </ul>
    			</div>


        </nav>

        <!-- navbar 2 -->
        <nav class="navbar navbar-light mx-auto" id="navbar2">
          <a class="navbar-brand" href="<?php echo home_url(); ?>/mmplastic">
            <!-- <div class="spinner"></div> -->
            <img class="logo2" src="<?php echo get_bloginfo('template_directory') ?>/images/logo.png"alt="">
          </a>

          <div class="top-menu2" id="navbarNavDropdown">
                  <ul>
                    <a href="<?php echo home_url(); ?>/mmplastic" class="underline2 <?php if( is_page('mmplastic') ) { echo "selected2"; }?>">  <li> Home </li> </a>
                    <a href="<?php echo home_url(); ?>/product" class="underline2 <?php if( is_page('product') ) { echo "selected2"; }?>" >  <li> Products </li> </a>
                    <a href="<?php echo home_url(); ?>/quality" class="underline2 <?php if( is_page('quality') ) { echo "selected2"; }?>" >  <li> Quality </li> </a>
                    <a href="<?php echo home_url(); ?>/technology" class="underline2 <?php if( is_page('technology') ) { echo "selected2"; }?>" >  <li> Technology </li> </a>
                    <a href="<?php echo home_url(); ?>/about-us" class="underline2 <?php if( is_page('about-us') ) { echo "selected2"; }?>" >  <li> About Us </li> </a>
                    <a href="<?php echo home_url(); ?>/contact-us" class="underline2 <?php if( is_page('contact-us') ) { echo "selected2"; }?>" >  <li> Contact Us </li> </a>
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
