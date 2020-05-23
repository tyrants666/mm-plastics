
<?php get_header(); ?>

<!-- Hero -->
<!-- Hero -->
<div class="hero">
  
</div>

<!-- About US -->
<!-- About US -->

<article class="home-about">
  <!-- About us -->
  <div class="row mx-0 about-sec">
    
    <div class="col-md-4 mx-auto text-center">
      <h1 class="">About us</span></h1>
    </div>
    
    <div class="col-md-9 mx-auto text-center">
      <p><?php the_field('about_us_info'); ?></p>
      <p>MM group of industries consists of</p>
      <a href="/index.php?page_id=23#check_white" class="anch-read">
    </a>
    </div>
  
    <div class="col-12 text-center">
      <div class="row mx-0">
          <div class="col-4 ml-auto text-center">
                <p>MANUFACTURING</p>
                <div class="sub-industry">
                    <p>MM PLASTICS UDHYOG</p>
                    <p>MM PLOYMERS PVT.LTD</p>
                </div>
          </div>
          <div class="col-4 text-center">
                <p>TRADING</p>
                <div class="sub-industry">
                    <p>MM TRADING CENTER</p>
                </div>
          </div>
          <div class="col-4 mr-auto text-center pl-0">
                <p>SERVICES</p>
                <div class="sub-industry">
                    <p>FINANCE
                       <ul>
                         <li>SRIJANA FINANCE</li>
                       </ul>
                      </p>
                      <p>ENTERTAINMENT
                           <ul>
                             <li>CITY CINEMA</li>
                      </p> </ul>
                </div>
          </div>
      </div>
    </div>
    
  </div>
</article>


<!-- Mass Production Best Quality -->
<!-- Mass Production Best Quality -->
<div class="mass-production"></div>

<!-- Square -->
<!-- Square -->
<div class="square"></div>

<!-- Hexagon -->
<!-- Hexagon -->
<article class="hexagon row mx-0 ">
  <div class="col-md-4 mx-auto text-center">
        <h1 class="">Industries we touch</span></h1>
  </div>
  <div class="col-12 text-center">
    <img class="hexagon_mob" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hexagon_mob.jpg" alt="">
  </div>
</article>

<!-- Partner -->
<!-- Partner -->
<article class="mb-5">
  <div class="row mx-0 what-we-do">

    <div class="col-md-12 mx-auto text-center">
      <h1 class="">What we do </h1>
    </div>
                      
    <div class="col-md-12 mx-auto text-center mt-6vw">

          <div class="row mx-0">
            <?php while( have_rows('partner') ): the_row(); ?>
              <div class="col-3 py-2 partner-wrap">
                  <img class="partner-logo" src="<?php the_sub_field('partner_logo'); ?>"alt="">
              </div>
            <?php endwhile; ?>
          </div>

    </div>
  
  </div>

</article>

<!-- Testimonials -->
<!-- Testimonials -->
<article class="">
  <div class="row mx-0 testimonials">

    <div class="col-md-12 mx-auto text-center">
      <h1 class="">Client Testimonials</h1>
    </div>

    <div class="col-md-12 mx-auto text-center">
        <div class="owl1 owl-carousel">

              <div class="item owl1-item">              
                    <div class="row mx-0">
                      <div class="col-7 mx-auto">
                        <div class="test-pic mx-auto">
                          <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/test-pic.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-12 test-comment mx-auto px-4">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati assumenda officiis inventore ad cum labore tenetur saepe temporibus non veritatis, optio nostrum repudiandae impedit, earum harum! Ab doloribus reiciendis beatae.</p>
                      </div>

                      <div class="test-blue col-12">
                          <p class="test-name">Akash Yadav</p>
                          <p class="test-title">Full stack Developer</p>
                      </div>
                    </div>
              </div>
              <div class="item owl1-item">              
                    <div class="row mx-0">
                      <div class="col-7 mx-auto">
                        <div class="test-pic mx-auto">
                          <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/test-pic.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-12 test-comment mx-auto px-4">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati assumenda officiis inventore ad cum labore tenetur saepe temporibus non veritatis, optio nostrum repudiandae impedit, earum harum! Ab doloribus reiciendis beatae.</p>
                      </div>

                      <div class="test-blue col-12">
                          <p class="test-name">Akash Yadav</p>
                          <p class="test-title">Full stack Developer</p>
                      </div>
                    </div>
              </div>
              <div class="item owl1-item">              
                    <div class="row mx-0">
                      <div class="col-7 mx-auto">
                        <div class="test-pic mx-auto">
                          <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/test-pic.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-12 test-comment mx-auto px-4">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati assumenda officiis inventore ad cum labore tenetur saepe temporibus non veritatis, optio nostrum repudiandae impedit, earum harum! Ab doloribus reiciendis beatae.</p>
                      </div>

                      <div class="test-blue col-12">
                          <p class="test-name">Akash Yadav</p>
                          <p class="test-title">Full stack Developer</p>
                      </div>
                    </div>
              </div>
              <div class="item owl1-item">              
                    <div class="row mx-0">
                      <div class="col-7 mx-auto">
                        <div class="test-pic mx-auto">
                          <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/test-pic.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-12 test-comment mx-auto px-4">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati assumenda officiis inventore ad cum labore tenetur saepe temporibus non veritatis, optio nostrum repudiandae impedit, earum harum! Ab doloribus reiciendis beatae.</p>
                      </div>

                      <div class="test-blue col-12">
                          <p class="test-name">Akash Yadav</p>
                          <p class="test-title">Full stack Developer</p>
                      </div>
                    </div>
              </div>

        </div>
    </div>
  </div> 

</article> 

<?php get_footer(); ?>
