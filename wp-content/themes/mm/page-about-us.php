
<?php get_header(); ?>
<?php
//******* Including PHP CUSTOM Library to detect mobile view  **********
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
?>

<div class="hero" id="hero-aboutus">
    <!-- Quote -->
    <div class="quote">
      <h1 class=""> About <span>Us.</span></h1>
      <h4 class=" fadeInDown2">We go for the latest trends in technology.</h4>
    </div>

</div>


<article class="white" id="check_white">
  <!-- Paragraph 1 -->
 <div class="row mx-0">
   <div class="col-md-8 mx-auto text-center about-para1">
     <p class="font-1-4vw"><?php the_field('paragraph_1'); ?></p>
   </div>
  </div>

  <!-- Paragraph 2 -->
 <div class="row mx-0">
   <div class="col-md-8 mx-auto text-center about-para2">
     <p class="font-1-4vw"><?php the_field('paragraph_2'); ?></p>
   </div>
   <!-- owl-carousel -->
   <div class="col-md-12 mx-auto text-center mb-5">
     <div class="owl1 owl-carousel">

       <?php while( have_rows('clients', 6) ): the_row(); ?>
           <div class="item owl1-item" style=" background: url('<?php the_sub_field('image', 6); ?>') center center no-repeat; background-size:contain;"> </div>
       <?php endwhile; ?>

      </div>
   </div>
  </div>
</article>


<?php get_footer(); ?>
