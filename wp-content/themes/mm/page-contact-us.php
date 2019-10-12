
<?php get_header(); ?>
<?php
//******* Including PHP CUSTOM Library to detect mobile view  **********
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
?>
<div class="hero" id="hero-contactus">
    <!-- Quote -->
    <div class="quote">
      <h1 class=""> Contact <span>Us.</span></h1>
    </div>

</div>

<!-- black -->
<article class="black row mx-0">

  <div class="col-md-3 p-0 d-flex">
    <span> <i class="material-icons">call</i></span>
    <div class="black-cont">
      <h5> Call Us</h5>
      <div class="black-p">+977-985633673 ,<br>+977-985633673</div>
    </div>
  </div>

  <div class="col-md-3 p-0 d-flex">
    <span> <i class="material-icons">mail_outline</i></span>
    <div class="black-cont" >
      <h5> Email </h5>
      <div class="black-p" onclick="location.href='mailto:bigadcompany@gmail.com';">bigadcompany@gmail.com</div>
    </div>
  </div>

  <div class="col-md-3 p-0 d-flex">
    <span> <i class="material-icons">location_city</i></span>
    <div class="black-cont">
      <h5> Address </h5>
      <div class="black-p">Munalpath, Biratnagar-5, Morang - NEPAL</div>
    </div>
  </div>

  <div class="col-md-3 p-0 d-flex">
    <span> <i class="material-icons">my_location</i></span>
    <div class="black-cont">
      <h5> Directions</h5>
      <div class="black-p">Click me to get the google map directions.</div>
    </div>
  </div>

</article>

<!-- blue -->
<article class="blue">
  <div class="row mx-0">
    <div class="col-md-6">
        <!-- Form -->
        <form action="#form2" method="post" id="form2">

                <div class="">

                  <div class=" input-div form-group">
                    <label class="contact-label">Full name</label>
                    <input class="input1 form-control" name="name1" type="text" autocomplete="off" required>
                  </div>

                  <div class=" input-div form-group">
                    <label class="contact-label">Email</label>
                    <input class="input1 form-control" name="email1" type="email" autocomplete="off" required>
                  </div>

                  <div class=" input-div form-group">
                    <label class="contact-label">Phone</label>
                    <input class="input1 form-control" name="phone1" type="number" autocomplete="off" rows="3">
                  </div>

                  <label class="contact-label">How can we help you?</label>
                  <div class="input-div form-group">
                      <textarea class="input1 form-control" name="message1" rows="3"></textarea>
                  </div>

                  <div class=" send">
                    <button type="submit" name="submit1" value="Submitt" class="btn btn-light">Submit</button>
                  </div>

                </div>
          </form>
          <!-- form end -->

    </div>
    <div class="col-md-6 contact-bg"></div>

  </div>
</article>

<?php get_footer(); ?>
