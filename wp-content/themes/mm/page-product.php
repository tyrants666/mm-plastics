
<?php get_header(); ?>
<?php
//******* Including PHP CUSTOM Library to detect mobile view  **********
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
?>

<div class="hero" id="hero-product">
    <!-- Quote -->
    <div class="quote">
      <h1 class=""> Our <span>Products.</span></h1>
      <h4 class=" fadeInDown2">Our modern life would be very different without plastics.</h4>
    </div>

</div>


<!-- product 1 -->
<article class=" row mx-0 white">

  <div class="col-6 p-0 product-content">
      <h3>PET Bottles</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

  <!-- Owl Carousel -->
  <div class="col-6 p-0 ">
    <div class="owl3 owl-carousel">

      <div class="item product-slides">
        <img src="<?php echo get_bloginfo('template_directory') ?>/images/logo_partner1.png" alt="">
      </div>

      <div class="item product-slides">
        <img src="<?php echo get_bloginfo('template_directory') ?>/images/logo_partner2.png" alt="">
      </div>

      <div class="item product-slides">
        <img src="<?php echo get_bloginfo('template_directory') ?>/images/logo_partner3.png" alt="">
      </div>

      <div class="item product-slides">
        <img src="<?php echo get_bloginfo('template_directory') ?>/images/logo_partner4.jpg" alt="">
      </div>

      <div class="item product-slides ">
        <img src="<?php echo get_bloginfo('template_directory') ?>/images/logo_partner5.jpg" alt="">
      </div>

    </div>
  </div>
</article>

<!-- product 2 -->
<article class=" row mx-0 white">

  <div class="col-6 p-0 product-content">
      <h3>HDPE jars and jerrycanes</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

  <!-- Owl Carousel -->
  <div class="col-6 p-0 ">
    <div class="owl3 owl-carousel">

      <div class="item product-slides">
        <img src="<?php echo get_bloginfo('template_directory') ?>/images/logo_partner1.png" alt="">
      </div>

      <div class="item product-slides">
        <img src="<?php echo get_bloginfo('template_directory') ?>/images/logo_partner2.png" alt="">
      </div>

      <div class="item product-slides">
        <img src="<?php echo get_bloginfo('template_directory') ?>/images/logo_partner3.png" alt="">
      </div>

      <div class="item product-slides">
        <img src="<?php echo get_bloginfo('template_directory') ?>/images/logo_partner4.jpg" alt="">
      </div>

      <div class="item product-slides ">
        <img src="<?php echo get_bloginfo('template_directory') ?>/images/logo_partner5.jpg" alt="">
      </div>

    </div>
  </div>
</article>

<article class="blue">
   <h1 class="">MM plastics</h1>
   <h1 class="">MM plastics</h1>
   <h1 class="">MM plastics</h1>
   <h1 class="">MM plastics</h1>
   <h1 class="">MM plastics</h1>
   <h1 class="">MM plastics</h1>
</article>

<?php get_footer(); ?>
