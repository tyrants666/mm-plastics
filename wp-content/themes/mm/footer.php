
<footer class="footer mb-0" id="footer">

  <div class="foot-row row mx-0">

    <div class="sec1 col-md-4 mx-auto p-0">
      <h4>About Us</h4>
      <p>Established in 1985, MM Plastic Udhyog Pvt. Ltd. is now one of the most renowned and oldest plastic industries in Nepal.</p>
      <div class="read">
        <a href="/index.php?page_id=23#check_white" class="anch-read">
          <span class="read-more" style="color:#93969c;">  Read more <i class="material-icons eco" style="color:#113f9c;">eco</i></span>
        </a>

      </div>
    </div>
    <div class="sec2 col-md-4 mx-auto ">
      <h4>Usefull Links</h4>
      <div class="d-flex">
        <ul class="">
          <li><a class="underline3" href="<?php echo home_url(); ?>">Home</a></li>
          <li><a class="underline3" href="<?php echo home_url(); ?>/product">Product</a></li>
          <li><a class="underline3" href="<?php echo home_url(); ?>/quality">Quality</a></li>
        </ul>
        <ul class="mx-auto">
          <li><a class="underline3" href="<?php echo home_url(); ?>/technology">Technology</a></li>
          <li><a class="underline3" href="<?php echo home_url(); ?>/about-us">About Us</a></li>
          <li><a class="underline3" href="<?php echo home_url(); ?>/contact-us">Contact Us</a></li>
        </ul>

      </div>
    </div>
    <div class="sec3 col-md-4 mx-auto p-0">
      <h4>Write to Us</h4>
      <form class="foot_form" action="index.html" method="post">
        <textarea class="input-foot form-control foot_msg" type="text" name="message" value="" placeholder="Message"></textarea>
        <div class="d-flex">
          <input class="input-foot form-control" type="mail" name="email" value="" placeholder="Your Email Address" autocomplete="off">
          <button id="send_foot" type="submit" name="button"><i class="material-icons">send</i></button>
        </div>
      </form>
    </div>

  </div>

<!-- BOT BAR -->
<div class="bot-bar row mx-0">

<div class="pr-4">
  <img class="logo3" src="<?php echo get_bloginfo('template_directory') ?>/images/logo.png"alt="">
</div>
<div class="col-4 p-0">
  <p>© MM Plastic Udhyog Pvt. Ltd. | all rights are reserved.</p>
</div>
<div class="col-5 ml-auto text-right partner">
  <p> <span class="part1"> Powered by : &nbsp </span> <span> <a href="https://bigadcompany.com" target="_blank"> <img src="<?php echo get_bloginfo('template_directory') ?>/images/big.svg" alt="big-logo"> </a></span> </p>
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
</body>
</html>
