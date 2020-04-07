
<?php get_header(); ?>

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


<article class=" row mx-0 mb-5 tech-row2">
<!-- Paragraph -->
  <div class="col-lg-5 p-0 mr-auto" >
      <p><?php the_field('paragraph_2'); ?></p>
  </div>

  <!-- Owl Carousel -->
  <div class="col-lg-6 p-0 ml-auto">
    <i class="material-icons left8">keyboard_arrow_left</i>
    <i class="material-icons right8">keyboard_arrow_right</i>
    <div class="owl8 owl-carousel ">

      <?php while( have_rows('quality_images') ): the_row(); ?>
          <div class="item product-slides"  style="background-image: url('<?php the_sub_field('images'); ?>');" >
          </div>
      <?php endwhile; ?>

    </div>
  </div>
</article>


<?php get_footer(); ?>
