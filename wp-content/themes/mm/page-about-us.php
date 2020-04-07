
<?php get_header(); ?>

  <style>
    .white {
      padding: 14vw 6.5vw 3.9vw 6.5vw !important;
    }
  </style>

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
   <div class="col-md-12 mx-auto text-center mb-lg-5">
     <div class="owl1 owl-carousel">

       <?php while( have_rows('clients', 6) ): the_row(); ?>
           <div class="item owl1-item" style=" background: url('<?php the_sub_field('image', 6); ?>') center center no-repeat; background-size:contain;"> </div>
       <?php endwhile; ?>

      </div>
   </div>
  </div>
</article>


<?php get_footer(); ?>
