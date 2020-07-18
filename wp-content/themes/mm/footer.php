
<footer class="footer mb-0" id="footer">

<article class="black row mx-0">

  <div class="col-lg-3 col-6 p-0 d-flex information">
    <span> <i class="material-icons">call</i></span>
    <div class="black-cont">
      <h5> Call Us</h5>
      <div class="black-p"><?php the_field('phone',188); ?></div>
    </div>
  </div>

  <div class="col-lg-3 col-6 p-0 d-flex information mail">
    <span> <i class="material-icons">mail_outline</i></span>
    <div class="black-cont">
      <h5> Email </h5>
      <div class="black-p"><?php the_field('email',188); ?></div>
    </div>
  </div>

  <div class="col-lg-3 col-6 p-0 d-flex information">
    <span> <i class="material-icons">location_city</i></span>
    <div class="black-cont">
      <h5> Address </h5>
      <div class="black-p"><?php the_field('address',188); ?></div>
    </div>
  </div>

  <div class="col-lg-3 col-6 p-0 d-flex information direction">
      <span> <i class="material-icons">my_location</i></span>
      <div class="black-cont">
        <h5> Directions</h5>
        <div class="black-p">Click me to get the google map directions.</div>
      </div>
  </div>

</article>

  <div class="foot-row row mx-0">

    <div class="sec1 col-md-4 mx-auto p-0">
      <h4>About Us</h4>
      <p>Established in 1985, MM Group  Pvt. Ltd. is now one of the most renowned and oldest plastic industries in Nepal.</p>
      <div class="read">
        <a href="/index.php?page_id=23#check_white" class="anch-read">
          <span class="read-more vw-4" style="color:#93969c;">  Read more <i class="material-icons eco" style="color:#113f9c;">eco</i></span>
        </a>

      </div>
    </div>
    <div class="sec2 col-md-4 mx-auto ">
      <h4>Usefull Links</h4>
      <div class="d-flex">
        <ul class="">
          <li><a class="underline3" href="<?php echo home_url(); ?>">Home</a></li>
          <li><a class="underline3" href="<?php echo home_url(); ?>/about-us">About Us</a></li>
          <li><a class="underline3" href="<?php echo home_url(); ?>/services">Services</a></li>
        </ul>
        <ul class="mx-auto">
          <li><a class="underline3" href="<?php echo home_url(); ?>/product">Our Products</a></li>
          <li><a class="underline3" href="<?php echo home_url(); ?>/technology">Quality & Technology</a></li>
          <li><a class="underline3" href="<?php echo home_url(); ?>/contact-us">Contact Us</a></li>
        </ul>

      </div>
    </div>
    <div class="sec3 col-md-4 mx-auto p-0">
      <h4>Write to Us</h4>
      <form class="foot_form">
      <!-- <form class="foot_form" action="/action_page.php"> -->
        <textarea class="input-foot form-control foot_msg" type="text" id="msgg" value="" placeholder="Message" required></textarea>
        <div class="d-flex">
          <input class="input-foot form-control" type="email" id="emaill" value="" placeholder="Your Email Address" autocomplete="off" required>
          <button id="send_foot" type="submit" name="button"><i class="material-icons">send</i></button>
        </div>
        <p class=" sent_foot mt-lg-0 mt-1 " style="color: #f9ca45; display:none;  ">Message sent successfully.</p>
      </form>

                  <!-- Ajax form submit -->
                  <!-- <script type="text/javascript">

                    $('.foot_form').submit(function(e) {
                      e.preventDefault();

                      var msg = $("#msgg").val();
                      var email = $("#emaill").val();

                      $.ajax({
                        url: '/wp-admin/admin-ajax.php',
                        type: "POST",
                        cache: false,
                        data:{
                          action: 'send_email',
                          msg: msg,
                          email: email,
                        },
                        success:function(res){
                          $('.sent_foot').fadeIn();
                          function myfunc() {
                              $('.sent_foot').fadeOut();
                          }
                          setTimeout( myfunc, 3000 );
              			      }
                      });

                    });

                  </script> -->

    </div>

  </div>

<!-- BOT BAR -->
<div class="bot-bar row mx-0">

<div class="pr-4">
  <img class="logo3" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/logo-rotate.gif"alt="">
</div>
<div class="col-lg-4 col-9 p-0">
  <p>© MM Group  Pvt. Ltd. | all rights are reserved.</p>
</div>
<div class="col-lg-5 ml-auto text-right partner">
  <p> <span class="part1"> Powered by : &nbsp </span> <span> <a href="https://bigadcompany.com" target="_blank"> <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/big.svg" alt="big-logo"> </a></span> </p>
</div>

  <div class="">
    <a href="#body">
      <button id="gotop" type="button" name="button">
        <i class="material-icons">keyboard_arrow_up</i>
      </button>
    </a>
  </div>

</div>

<?php wp_footer(); ?>
</footer>

</div>
</div>
</body>
</html>
