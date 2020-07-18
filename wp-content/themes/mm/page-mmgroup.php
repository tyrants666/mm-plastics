
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
      <h1 class="">About us</h1>
    </div>
    
    <div class="col-md-9 mx-auto text-center">
      <p><?php the_field('about_us_info'); ?></p>
      <p>MM group of industries consists of</p>
      <a href="/index.php?page_id=23#check_white" class="anch-read">
    </a>
    </div>
  
    <div class="col-12 mt-4 text-center">
      <div class="about-grid mx-0">

          <div class="consist_sec  text-center">
            <i class="fas fa-industry"></i>
                <p class="f-600 about-head mx-auto">MANUFACTURING</p>
                <div class="sub-industry grid-2">
                  <span class="border" >MM PLASTICS UDHYOG</span>
                  <span class="border" >MM PLOYMERS PVT.LTD</span>
                  <!-- <button class="btn btn-primary btn-sm mb-2" >MM PLASTICS UDHYOG</button>
                  <button class="btn btn-primary btn-sm" >MM PLOYMERS PVT.LTD</button> -->
                </div>
          </div>

          <div class="consist_sec  text-center">
            <i class="fas fa-hands-helping"></i>
                <p class="f-600 about-head mx-auto">TRADING</p>
                <div class="sub-industry grid-1">
                    <span class="border" >MM TRADING CENTER</span>
                    <!-- <button class="btn btn-primary btn-sm" >MM TRADING CENTER</button> -->
                </div>
          </div>

          <div class="consist_sec text-center">
            <i class="fas fa-cog"></i>
                <p class="f-600 about-head mx-auto">SERVICES</p>

                <div class="sub-industry-head grid-2 ">
                      <p class="f-600"><i class="fas fa-hand-holding-usd"></i>FINANCE</p>
                      <p class="f-600"><i class="fas fa-video"></i>ENTERTAINMENT</p>
                </div>
                <div class="sub-industry grid-2 ">
                      <span class="border" >SRIJANA FINANCE</span>
                      <span class="border" >CITY CINEMA</span>
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
        <h1 class="">Industry Verticals</span></h1>
        <h3>Shaping Nepal for over 3 decades</h3>
  </div>
  <div class="col-12 text-center">
    <img class="hexagon_mob" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/products_comp2.jpg" alt="">
  </div>
</article>

<!-- Partner -->
<!-- Partner -->
<article class="mb-5">
  <div class="row mx-0 what-we-do">

    <div class="col-md-12 mx-auto text-center">
      <h1 class="">Our Clients </h1>
    </div>
                      
    <div class="col-md-12 mx-auto text-center mt-6vw">

          <div class="row mx-0">
            <?php while( have_rows('partner') ): the_row(); ?>
              <div class="col-3 partner-wrap">
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
                          <p class="test-name">Bill Cipher</p>
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
                          <p class="test-name">Bill Cipher</p>
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
                          <p class="test-name">Bill Cipher</p>
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
                          <p class="test-name">Bill Cipher</p>
                          <p class="test-title">Full stack Developer</p>
                      </div>
                    </div>
              </div>

        </div>
    </div>
  </div> 

</article> 

<?php get_footer(); ?>
