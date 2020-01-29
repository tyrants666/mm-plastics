
<?php get_header(); ?>



<div class="hero" id="hero-home">
    <!-- Quote -->
    <div class="quote">
      <h1 class=""> <?php the_field('big_title'); ?> </h1>
      <!-- <h1 class=""> Think Big. <span>We do.</span></h1> -->
      <h4 class=" fadeInDown2"><?php the_field('small_title'); ?></h4>
      <a href="<?php echo home_url(); ?>/contact-us#direction ">
      <button class="btn-quote fadeInDown2 " type="button" name="button">CONTACT US</button>
      </a>
    </div>

</div>

<article class="black row mx-0">

  <div class="col-lg-3 col-6 p-0 d-flex information">
    <span> <i class="material-icons">call</i></span>
    <div class="black-cont">
      <h5> Call Us</h5>
      <div class="black-p"><?php the_field('phone'); ?></div>
    </div>
  </div>

  <div class="col-lg-3 col-6 p-0 d-flex information mail">
    <span> <i class="material-icons">mail_outline</i></span>
    <div class="black-cont">
      <h5> Email </h5>
      <div class="black-p"><?php the_field('email'); ?></div>
    </div>
  </div>

  <div class="col-lg-3 col-6 p-0 d-flex information">
    <span> <i class="material-icons">location_city</i></span>
    <div class="black-cont">
      <h5> Address </h5>
      <div class="black-p"><?php the_field('address'); ?></div>
    </div>
  </div>

  <div class="col-lg-3 col-6 p-0 d-flex information direction">
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
      <p><?php the_field('about_us_info'); ?></p>
       <a href="/index.php?page_id=23#check_white" class="anch-read">
         <span class="read-more vw-4">  Read more <i class="material-icons eco">eco</i></span>
       </a>
    </div>
   </div>

   <!-- Our Clients -->
  <div class="row mx-0 client-sec">
    <div class="col-md-4 mx-auto text-center">
      <h1 class="">Our Clients</h1>
    </div>
    <div class="col-md-12 mx-auto text-center mb-5">
      <a href="<?php echo home_url(); ?>/product#white">
        <div class="owl1 owl-carousel">

          <?php while( have_rows('clients') ): the_row(); ?>
              <div class="item owl1-item" style=" background: url('<?php the_sub_field('image'); ?>') center center no-repeat; background-size:contain;"> </div>
          <?php endwhile; ?>

        </div>
      </a>
    </div>
   </div>

   <!-- Our Products -->
  <div class="row mx-0 product-sec">
    <div class="col-md-12 mx-auto text-center">
      <h1 class="">Our Products</h1>
    </div>
    <div class="col-md-12 mx-auto text-center">
      <a href="<?php echo home_url(); ?>/product#white">
      <div class="owl2 owl-carousel">

        <?php while( have_rows('product') ): the_row(); ?>
            <div class="item owl2-item" style=" background: url('<?php the_sub_field('image'); ?>') center center no-repeat; background-size:contain;"> </div>
        <?php endwhile; ?>

      </div>
      </a>
    </div>
   </div>

</article>


<?php get_footer(); ?>
