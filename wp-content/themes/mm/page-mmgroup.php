
<?php get_header(); ?>

<div class="hero">
  <div class="square"></div>
</div>


<article class="white">
  <!-- About us -->
  <div class="row mx-0 about-sec">
    
    <div class="col-md-4 mx-auto text-center">
      <h1 class="">About us</span></h1>
    </div>
    
    <div class="col-md-9 mx-auto text-center">
      <p><?php the_field('about_us_info'); ?></p>
      <p>MM Group of Industries consists of</p>
      <a href="/index.php?page_id=23#check_white" class="anch-read">
    </a>
  </div>
  
  <div class="col-12 text-center">
    <div class="row mx-0">
          <div class="col-1 logo-wrap ml-auto text-center">
            <img class="logos-com" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/logo.png"alt="">
          </div>
          <div class="col-2 logo-wrap text-center">
            <img class="logo-polymer" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/mm_polymers.svg" alt="">
          </div>
          <div class="col-1 logo-wrap mr-auto text-center pl-0">
            <img class="logos-com" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/mm_naturals.png" alt="">
          </div>
        </div>
    </div>
    
    </div>
</article>

  <!-- Who we are -->
  <div class="row mx-0 who-we-are">

    <div class="col-12 mx-auto">
    
    </div>

  </div>

  
<article class="pb-0">
  <!-- Our Products -->
  <div class="row mx-0 what-we-do">
    <div class="col-md-12 mx-auto text-center">
      <h1 class="">What we do </h1>
    </div>
    <div class="col-md-12 mx-auto text-center mt-3">
                      <div class="Grid">
                          <div class="Grid-Item">
                              <div class="Grid-Item-Content">
                                <div class="Grid-Item-Content-Inner">
                                      <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex1.png"alt="">
                                      <a href="#">Item 1</a>
                                    </div>
                                  </div>
                          </div>
                          <div class="Grid-Item">
                              <div class="Grid-Item-Content">
                                <div class="Grid-Item-Content-Inner">
                                  <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex2.png"alt="">
                                      <a href="#">Item 2</a>
                                    </div>
                              </div>
                          </div>
                          <div class="Grid-Item">
                              <div class="Grid-Item-Content">
                                <div class="Grid-Item-Content-Inner">
                                  <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex3.png"alt="">
                                  <a href="#">Item 3</a>
                                </div>
                              </div>
                            </div>
                            <div class="Grid-Item">
                              <div class="Grid-Item-Content">
                                <div class="Grid-Item-Content-Inner">
                                  <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex4.png"alt="">
                                      <a href="#">Item 4</a>
                                    </div>
                                  </div>
                                </div>
                          <div class="Grid-Item">
                            <div class="Grid-Item-Content">
                              <div class="Grid-Item-Content-Inner">
                                <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex5.png"alt="">
                                      <a href="#">Item 5</a>
                                    </div>
                                  </div>
                          </div>
                          <div class="Grid-Item">
                              <div class="Grid-Item-Content">
                                <div class="Grid-Item-Content-Inner">
                                      <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex6.png"alt="">
                                      <a href="#">Item 6</a>
                                    </div>
                                  </div>
                                </div>
                          <div class="Grid-Item">
                            <div class="Grid-Item-Content">
                                  <div class="Grid-Item-Content-Inner">
                                    <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex7.png"alt="">
                                    <a href="#">Item 7</a>
                                  </div>
                                </div>
                          </div>
                          <div class="Grid-Item Grid-Item--empty">
                              <div class="Grid-Item-Content">
                                <div class="Grid-Item-Content-Inner">
                                  <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex8.png"alt="">
                                  <a href="#">Item 8</a>
                                </div>
                              </div>
                          </div>
                          <div class="Grid-Item">
                            <div class="Grid-Item-Content">
                              <div class="Grid-Item-Content-Inner">
                                <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex9.png"alt="">
                                      <a href="#">Item 9</a>
                              </div>
                            </div>
                          </div>
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
  </div>
                    
                    <style>
                      .hexa-img{
                        width: auto;
                        height: 89px;
                      }
                      .Grid {
                        display: grid;
                        grid-gap: 20px;
                        grid-template-columns: repeat(7,1fr);
                        width: 100%;
                        margin: 0 auto;
                        padding-bottom: 50px;
                      }
                      
                      .Grid-Item {
                        grid-column-end: span 2;
                        position: relative;
                      }
                      
                      .Grid-Item-Content {
                        position: absolute;
                        width: 100%;
                        -webkit-clip-path: polygon(50% 0,100% 25%,100% 75%,50% 100%,0 75%,0 25%);
                        clip-path: polygon(50% 0,100% 25%,100% 75%,50% 100%,0 75%,0 25%);
                        padding-bottom: 115.602%;
                        background-color: #e9ecef;
                        /* background-color: #383d41; */
                        border-radius: 100%;
                    }
                    
                    .Grid-Item-Content {
                      border-radius: 0;
                    }
                    
                    .Grid-Item:after {
                        content: "";
                        display: block;
                        padding-bottom: 86.602%;
                    }

                    .Grid-Item-Content-Inner {
                      position: absolute;
                      height: 100%;
                      width: 100%;
                      display: flex;
                      flex-direction: column;
                      align-items: center;
                      justify-content: center;
                      text-align: center;
                    }

                    .Grid-Item-Content-Inner a {
                      padding: 2px 7px 3px;
                        font-size: 1rem;
                        border-radius: 3px;
                        white-space: nowrap;
                        position: relative;
                        font-weight: 500;
                        color: #000;
                        top: 10px;
                        text-decoration:none;
                      }
                      
                    @media only screen and (min-width: 768px) {
                      .Grid {
                        grid-gap: 30px;
                        grid-template-columns: repeat(10,1fr);
                        padding-bottom: 60px;
                        width: 90%;
                      }
                      
                      .Grid-Item:nth-child(9n+1) {
                        grid-column-start: 2;
                      }
                    }
                    </style>

</article>

<article class="">
  <!-- Our Products -->
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
