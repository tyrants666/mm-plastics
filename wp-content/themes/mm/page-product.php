
<?php get_header(); ?>

<div class="white" id="white">

  <style>
  .white {
    padding: 14vw 6.5vw 3.9vw 6.5vw !important;
  }
  </style>


  <!-- product 1 -->
  <article class=" row mx-0 mb-5">

    <div class="col-lg-6 p-0 product-content" >
        <h3>Caps and Closures</h3>
        <p><?php the_field('caps_info'); ?></p>
    </div>

    <!-- Owl Carousel -->
    <div class="col-lg-6 p-0 owl-product">
      <i class="material-icons left">keyboard_arrow_left</i>
      <i class="material-icons right">keyboard_arrow_right</i>
      <div class="owl3 owl-carousel ">

        <?php while( have_rows('caps_images') ): the_row(); ?>
            <div class="item product-slides"  style="background-image: url('<?php the_sub_field('image'); ?>');" >
            </div>
        <?php endwhile; ?>

      </div>
    </div>
  </article>

  <!-- product 2 -->
  <article class=" row mx-0 mb-5">

    <div class="col-lg-6 p-0 product-content">
        <h3>HDPE jars and jerrycanes</h3>
        <p><?php the_field('jars_info'); ?></p>
    </div>

    <!-- Owl Carousel -->
    <div class="col-lg-6 p-0 owl-product">
      <i class="material-icons left4">keyboard_arrow_left</i>
      <i class="material-icons right4">keyboard_arrow_right</i>
      <div class="owl4 owl-carousel ">

        <?php while( have_rows('jar_images') ): the_row(); ?>
            <div class="item product-slides"  style="background-image: url('<?php the_sub_field('image'); ?>');" >
            </div>
        <?php endwhile; ?>

      </div>
    </div>
  </article>

  <!-- product 3 -->
  <article class=" row mx-0 mb-5">

    <div class="col-lg-6 p-0 product-content">
        <h3>HDPE pipes and PVC Profiles</h3>
        <p><?php the_field('pipes_info'); ?></p>
    </div>

    <!-- Owl Carousel -->
    <div class="col-lg-6 p-0 owl-product">
      <i class="material-icons left5">keyboard_arrow_left</i>
      <i class="material-icons right5">keyboard_arrow_right</i>
      <div class="owl5 owl-carousel">

        <?php while( have_rows('pipe_images') ): the_row(); ?>
            <div class="item product-slides"  style="background-image: url('<?php the_sub_field('image'); ?>');" >
            </div>
        <?php endwhile; ?>

      </div>
    </div>
  </article>

  <!-- product 4 -->
  <article class=" row mx-0 mb-5">

    <div class="col-lg-6 p-0 product-content">
        <h3>Pet Bottles & Jars</h3>
        <p><?php the_field('bottles_info'); ?></p>
    </div>

    <!-- Owl Carousel -->
    <div class="col-lg-6 p-0 owl-product">
      <i class="material-icons left6">keyboard_arrow_left</i>
      <i class="material-icons right6">keyboard_arrow_right</i>
      <div class="owl6 owl-carousel">

        <?php while( have_rows('pet_images') ): the_row(); ?>
            <div class="item product-slides"  style="background-image: url('<?php the_sub_field('image'); ?>');" >
            </div>
        <?php endwhile; ?>

      </div>
    </div>
  </article>  


</div>

<!-- <article class="blue">
   <h1 class="">MM Groups</h1>
   <h1 class="">MM Groups</h1>
   <h1 class="">MM Groups</h1>
   <h1 class="">MM Groups</h1>
   <h1 class="">MM Groups</h1>
   <h1 class="">MM Groups</h1>
</article> -->

<?php get_footer(); ?>
