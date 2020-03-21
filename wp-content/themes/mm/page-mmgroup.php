
<?php get_header(); ?>



<div class="hero" id="hero-home">
    <!-- Quote -->
    <!-- <div class="quote">
      <h1 class=""> <?php the_field('big_title'); ?> </h1>
      <h4 class=" fadeInDown2"><?php the_field('small_title'); ?></h4>
      <a href="<?php echo home_url(); ?>/contact-us#direction ">
      <button class="btn-quote fadeInDown2 " type="button" name="button">CONTACT US</button>
      </a>
    </div> -->

</div>



<article class="white">
  <!-- About us -->
  <div class="row mx-0 about-sec">
    
    <div class="col-md-4 mx-auto text-center">
      <h1 class="">About Us</h1>
    </div>
    
    <div class="col-md-9 mx-auto text-center">
      <p><?php the_field('about_us_info'); ?></p>
      <a href="/index.php?page_id=23#check_white" class="anch-read">
      <span class="read-more vw-4">  Read more <i class="material-icons eco">eco</i></span>
    </a>
  </div>
  
  <div class="col-12 mt-5">
    <div class="row mx-0">
          <div class="col-lg-3 logo-wrap mx-auto text-center">
            <img class="logos-com" src="http://development.mmgrp.org/wp-content/themes/mm/images/logo.png"alt="">
          </div>
          <div class="col-lg-3 logo-wrap mx-auto text-center">
            <img class="logos-com" src="http://development.mmgrp.org/wp-content/themes/mm/images/mm_polymers.svg" alt="">
          </div>
          <div class="col-lg-3 logo-wrap mx-auto text-center">
            <img class="logos-com" src="http://development.mmgrp.org/wp-content/themes/mm/images/mm_naturals.png" alt="">
          </div>
        </div>
      </div>
      
    </div>
</article>

  <!-- Our Clients -->
  <div class="row mx-0 who-we-are">

    <div class="col-12 mx-auto">
      <h1 class="">Who we are</h1>
      <p><?php the_field('whoweare'); ?></p>
    </div>

    <div class="col-12 mx-auto">
        <div class="row mx-0">
          <div class="col-3_5 dark-product mr-auto">Caps and Closures</div>
          <div class="col-3_5 dark-product mx-auto">HDPE jars and jerrycanes</div>
          <div class="col-3_5 dark-product ml-auto">HDPE pipes and PVC Profiles</div>
        </div>    
        <div class="row mx-0 mt-4">
          <div class="col-3_5 dark-product ml-auto mr-5">Pet Bottles & Jars</div>
          <div class="col-3_5 dark-product mr-auto ml-5">Pet Bottles & Jars</div>
        </div>    
    </div>

  </div>
  
<article class="white">
  <!-- Our Products -->
  <div class="row mx-0 what-we-do">
    <div class="col-md-12 mx-auto text-center">
      <h1 class="">What we do</h1>
    </div>
    <div class="col-md-12 mx-auto text-center">
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
                        
          <div class="col-md-12 mx-auto text-center">
                <div class="row mx-0">
                    <div class="col-3">
                        <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex9.png"alt="">
                    </div>
                    <div class="col-3">
                        <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex9.png"alt="">
                    </div>
                    <div class="col-3">
                        <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex9.png"alt="">
                    </div>
                    <div class="col-3">
                        <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex9.png"alt="">
                    </div>
                    <div class="col-3">
                        <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex9.png"alt="">
                    </div>
                    <div class="col-3">
                        <img class="hexa-img" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/hex9.png"alt="">
                    </div>
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
                        background-color: #383d41;
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
                        color: #fff;
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


<?php get_footer(); ?>
