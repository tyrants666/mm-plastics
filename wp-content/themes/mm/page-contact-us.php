
<?php get_header(); ?>


<!--Success Message   -->
  <div class="sents">
    <p class="alert-success xyz">Success</p>
  </div>

  <style media="screen">
  .sents{
    position: fixed;
    top: 40%;
    left: 40%;
    z-index: 2;
    font-size: 7vw;
    display: none;
  }
  </style>


<!-- blue -->
<article class="blue">
  <div class="row mx-0">
    <div class="col-md-6">
        <!-- Form -->
        <form id="form2">
        <!-- <form action="/action_page.php" method="post" id="form2"> -->

                <div class="">

                  <div class=" input-div form-group">
                    <label class="contact-label">Full name</label>
                    <input class="input1 form-control" id="name123" type="text" autocomplete="off" required>
                  </div>

                  <div class=" input-div form-group">
                    <label class="contact-label">Email</label>
                    <input class="input1 form-control" id="email123" type="email" autocomplete="off" required>
                  </div>

                  <div class=" input-div form-group">
                    <label class="contact-label">Phone</label>
                    <input class="input1 form-control" id="phone123" type="number" autocomplete="off" rows="3">
                  </div>

                  <label class="contact-label">How can we help you?</label>
                  <div class="input-div form-group">
                      <textarea class="input1 form-control" id="message123" rows="3"></textarea>
                  </div>

                  <div class=" send d-flex">

                    <button type="submit" id="" value="Submitt" class="btn btn-light">Submit</button>

                    <p class=" sent_contact " >Message sent successfully.</p>
                    <style >
                      .sent_contact{
                        color: #eaedf6e6;
                        margin-left: 2vw;
                        padding-top: 0.6vw;
                        margin-bottom: 0px;
                        display: none;
                      }

                      @media (max-width: 768px){
                        .sent_contact{
                          margin-left: 4vw;
                          padding-top: 0;
                          margin-bottom: 0px;
                        }
                      }
                    </style>

                  </div>

                </div>
          </form>

                            <!-- Ajax form submit -->
                            <script type="text/javascript">

                              $('#form2').submit(function(e) {
                                e.preventDefault();

                                var name = $("#name123").val();
                                var email = $("#email123").val();
                                var phone = $("#phone123").val();
                                var message = $("#message123").val();

                                $.ajax({
                                  url: '/wp-admin/admin-ajax.php',
                                  type: "POST",
                                  cache: false,
                                  data:{
                                    action: 'contact_email',
                                    name: name,
                                    email: email,
                                    phone: phone,
                                    message: message,
                                  },
                                  success:function(res){
                                        $('.sent_contact').fadeIn();
                                        function myfunc() {
                                            $('.sent_contact').fadeOut();
                                        }
                                        setTimeout( myfunc, 3000 );
                                    }
                                });

                              });

                            </script>

          <!-- form end -->

    </div>
    <div class="col-md-6 contact-bg"></div>

  </div>
</article>

<?php get_footer(); ?>
