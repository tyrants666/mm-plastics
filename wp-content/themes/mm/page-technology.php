
<?php get_header(); ?>


<div class="hero" id="hero-technology">
    <!-- Quote -->
    <div class="quote">
      <h1 class=""> Technology </h1>
      <h4 class=" fadeInDown2"><?php the_field('small_title'); ?></h4>
    </div>

</div>


<article class=" row mx-0 mb-5 tech-row">
<!-- Paragraph -->
  <div class="col-lg-5 p-0 mr-auto" >
      <p><?php the_field('paragraph_1'); ?></p>
  </div>

  <!-- Owl Carousel -->
  <div class="col-lg-6 p-0 ml-auto">
    <i class="material-icons left7">keyboard_arrow_left</i>
    <i class="material-icons right7">keyboard_arrow_right</i>
    <div class="owl7 owl-carousel ">

      <?php while( have_rows('tech_images') ): the_row(); ?>
          <div class="item product-slides"  style="background-image: url('<?php the_sub_field('image'); ?>');" >
          </div>
      <?php endwhile; ?>

    </div>
  </div>
</article>


<?php get_footer(); ?>
