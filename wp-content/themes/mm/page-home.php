
<?php get_header(); ?>

<?php
//******* Including PHP CUSTOM Library to detect mobile view  **********
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
?>

<div class="hero" id="hero-home">
    <!-- Quote -->
    <div class="quote">
      <h1 class=""> Think Big. <span>We do.</span></h1>
      <h4 class=" fadeInDown2">Our modern life would be very different without plastics.</h4>
      <button class="btn-quote fadeInDown2" type="button" name="button">GET A QUOTE</button>
    </div>

</div>

<article class="black row mx-0">

  <div class="col-md-3 p-0 d-flex">
    <span> <i class="material-icons">call</i></span>
    <div class="black-cont">
      <h5> Call Us</h5>
      <div class="black-p">+977-985633673 ,<br>+977-985633673</div>
    </div>
  </div>

  <div class="col-md-3 p-0 d-flex">
    <span> <i class="material-icons">mail_outline</i></span>
    <div class="black-cont">
      <h5> Email </h5>
      <div class="black-p">bigadcompany@gmail.com</div>
    </div>
  </div>

  <div class="col-md-3 p-0 d-flex">
    <span> <i class="material-icons">location_city</i></span>
    <div class="black-cont">
      <h5> Address </h5>
      <div class="black-p">Munalpath, Biratnagar-5, Morang - NEPAL</div>
    </div>
  </div>

  <div class="col-md-3 p-0 d-flex">
    <span> <i class="material-icons">my_location</i></span>
    <div class="black-cont">
      <h5> Directions</h5>
      <div class="black-p">Click me to get the google map directions.</div>
    </div>
  </div>

</article>

<article class="white">
  <!-- About us -->
  <div class="row mx-0 about-sec">
    <div class="col-md-4 mx-auto text-center">
      <h1 class="">About Us</h1>
    </div>
    <div class="col-md-9 mx-auto text-center">
      <p>Established in 1985, MM Plastic Udhyog Pvt. Ltd. is now one of the most renowned and oldest plastic industries in Nepal. It's large range of products and assured quality has made it the first choice of many industries for packing ghee, oil, water, squash, pickles, tea, engine oils, grease etc.</p>
       <a href="/index.php?page_id=23#check_white" class="anch-read">
         <span class="read-more">  Read more <i class="material-icons eco">eco</i></span>
       </a>
    </div>
   </div>

   <!-- Our Clients -->
  <div class="row mx-0 client-sec">
    <div class="col-md-4 mx-auto text-center">
      <h1 class="">Our Clients</h1>
    </div>
    <!-- owl-carousel -->
    <div class="col-md-12 mx-auto text-center mb-5">
      <div class="owl1 owl-carousel">
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner1.jpeg " alt="patner logo">  </div>
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner2.jpg " alt="patner logo">  </div>
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner3.png " alt="patner logo">  </div>
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner4.jpeg " alt="patner logo">  </div>
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner5.png " alt="patner logo">  </div>
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner6.png " alt="patner logo">  </div>
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner7.jpeg " alt="patner logo">  </div>
      </div>
    </div>
   </div>

   <!-- Our Products -->
  <div class="row mx-0 product-sec">
    <div class="col-md-6 mx-auto text-center">
      <h1 class="">Owl Products</h1>
    </div>
    <div class="col-md-12 mx-auto text-center">
      <div class="owl2 owl-carousel">
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner1.jpeg " alt="patner logo">  </div>
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner2.jpg " alt="patner logo">  </div>
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner3.png " alt="patner logo">  </div>
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner4.jpeg " alt="patner logo">  </div>
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner5.png " alt="patner logo">  </div>
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner6.png " alt="patner logo">  </div>
        <div class="item"> <img src=" <?php echo get_bloginfo('template_directory') ?>/images/logo_partner7.jpeg " alt="patner logo">  </div>
      </div>
    </div>
   </div>

</article>

<!-- <article class="blue">
   <h1 class="">MM plastics</h1>
   <h1 class="">MM plastics</h1>
   <h1 class="">MM plastics</h1>
   <h1 class="">MM plastics</h1>
   <h1 class="">MM plastics</h1>
   <h1 class="">MM plastics</h1>
</article> -->

<?php get_footer(); ?>
