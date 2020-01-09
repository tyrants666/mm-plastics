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

<article class="landing">

  <img class="logo-mmgroup" src="<?php echo get_bloginfo('template_directory') ?>/images/mm_group.jpg"alt="">

  <div class="row mx-0">
    <div class="col-4">
      <a href=" <?php echo home_url(); ?>/mmplastic ">
        <img class="logo-mmgroup" src="<?php echo get_bloginfo('template_directory') ?>/images/mm_polymers.jpg" alt="">
      </a>
    </div>
    <div class="col-4">
      <a href=" <?php echo home_url(); ?>/mmplastic ">
        <img class="" src="<?php echo get_bloginfo('template_directory') ?>/images/logo.png"alt="">
      </a>
    </div>
    <div class="col-4">
      <a href=" <?php echo home_url(); ?>/mmplastic ">
        <img class="logo-mmgroup" src="<?php echo get_bloginfo('template_directory') ?>/images/mm_naturals.jpg" alt="">
      </a>
    </div>
  </div>

</article>

<style media="screen">
  .logo-mmgroup{
    width: auto;
    height: 130px;
  }
</style>
