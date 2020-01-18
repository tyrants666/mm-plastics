
<?php get_header(); ?>
<?php
//******* Including PHP CUSTOM Library to detect mobile view  **********
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
?>

<div class="hero" id="hero-quality">
    <!-- Quote -->
    <div class="quote">
      <h1 class=""> Quality</h1>
      <h4 class=" fadeInDown2">Our modern life would be very different without plastics.</h4>
    </div>

</div>


<article class="white">

  <!-- Paragraph 1 -->
  <div class="row mx-0">
   <div class="col-md-8 mx-auto text-center">
     <p class="quality-p"><?php the_field('paragraph_1'); ?></p>
   </div>
  </div>

</article>

<?php get_footer(); ?>
