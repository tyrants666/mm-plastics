
<?php get_header(); ?>

  <style>
    .white {
      padding: 11vw 6.5vw 3.9vw 6.5vw !important;
    }
  </style>

<div class="tech-wrap">

      <article class="white" id="check_white">

        <!-- Paragraph 1 -->
      <div class="row mx-0">
          <div class="col-md-12 mx-auto text-center tech-head">
              <h1 class="">Technology</h1>
          </div>

          <div class="col-md-8 mx-auto text-center about-para1">
            <p class="font-1-4vw"><?php the_field('tech_paragraph_1'); ?></p>
          </div>
        </div>


        <!-- Tech images -->
        <div class="row mx-0 row-tech">

            <?php while( have_rows('tech_images') ): the_row(); ?>
                <div class="col-tech">
                    <img src="<?php the_sub_field('image')['url']; ?>">
                </div>
            <?php endwhile; ?>

        </div>

      </article>

      <article class="white-qualiity">

        <!-- Paragraph 1 -->
      <div class="row mx-0">
          <div class="col-md-12 mx-auto text-center quality-head">
              <h1 class="">Quality</h1>
          </div>

          <div class="col-md-8 mx-auto text-center quality-para1">
            <p><?php the_field('quality_paragraph_1'); ?></p>
          </div>
        </div>

      <!-- Images -->
        <div class="row mx-0 row-tech">

            <?php while( have_rows('quality_image_row_1') ): the_row(); ?>
                <div class="col-quality1">
                    <img src="<?php the_sub_field('quality_image_1')['url']; ?>">
                    <p><?php the_sub_field('image_title'); ?></p>
                </div>
            <?php endwhile; ?>

          <!-- Paragrapgh -->
          <!-- Paragrapgh -->
          <div class="col-md-8 mx-auto text-center quality-para2">
            <p><?php the_field('quality_paragraph_2'); ?></p>
          </div>
        </div>

      <!-- Images -->
        <div class="row mx-0 row-tech">

            <?php while( have_rows('quality_image_row_2') ): the_row(); ?>
                <div class="col-quality">
                    <img src="<?php the_sub_field('quality_image')['url']; ?>">
                    <p class="head"><?php the_sub_field('heading'); ?></p>
                    <p class="sub-head"><?php the_sub_field('sub_heading'); ?></p>
                </div>
            <?php endwhile; ?>

          <!-- Paragrapgh -->
          <!-- Paragrapgh -->
          <div class="col-md-8 mx-auto text-center quality-para3">
            <p><?php the_field('quality_paragraph_3'); ?></p>
          </div>

        </div>

      </article>

</div>    




<?php get_footer(); ?>
