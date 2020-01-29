<!DOCTYPE html>
<html <?php language_attributes(); ?> >

  <head>

    <meta charset="utf-8">
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

    <title> MM Plastic Udhyog Pvt Ltd </title>
    <link rel="shortcut icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png ">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins|Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">
    <script src=" <?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.4.1.min.js" integrity="" crossorigin="anonymous"></script>

  <?php wp_head(); ?>
  </head>

<article class="landing">
  <nav class="navbar">
      <img class="logo-mmgroup fadeInLeft " src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/mm_group1.png"alt="">
      <img class="logo-mmgroup mr-auto fadeInLeft " src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/logo-text.png"alt="">
  </nav>

  <div class="row mx-0 row1">
    <div class="col-lg-3 logo-wrap mx-auto text-center fadeInUp">
      <a href=" <?php echo home_url(); ?>/mmplastic ">
        <img class="logos" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/logo.png"alt="">
      </a>
    </div>
    <div class="col-lg-3 logo-wrap mx-auto text-center fadeInUp">
      <a href=" <?php echo home_url(); ?>/mmplastic ">
        <img class="logos" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/mm_polymers.jpg" alt="">
      </a>
    </div>
    <div class="col-lg-3 logo-wrap mx-auto text-center fadeInUp">
      <a href=" <?php echo home_url(); ?>/mmplastic ">
        <img class="logos" src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/mm_naturals.jpg" alt="">
      </a>
    </div>
  </div>

</article>

<style media="screen">
  .landing{
    height:100vh;
    background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/land9.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .navbar{
    padding-left: 12vw;
    padding-right: 12vw;
  }
  .logo-mmgroup{
    width: auto;
    height: 149px;
  }
  .row1{
    padding-top: 20vh;
    padding-left: 9vw;
    padding-right: 9vw;
  }
  .logo-wrap {
      border-radius: 10px;
      padding: 1.8vw 0 1.8vw 0;
      box-shadow: 0px 1px 20px 2px #00000061;
      transition: all 0.7s;
  }

  .logos{
    width: auto;
    height: 116px;
  }

  /*********  Mobile Version ******** */
  @media (max-width: 768px) {
    .navbar {
      padding-left: 8vw;
      padding-right: 8vw;
    }
    .logo-mmgroup {
      width: auto;
      height: 20.5vw;
    }
    .row1 {
      padding-top: 5vh;
    }
    .logo-wrap{
      margin-bottom: 3.2vh;
    }
    .logos {
      height: 18vh;
    }
  }


</style>

<script type="text/javascript">

  $(".logo-wrap").hover(function(){
    $(this).css('transform','scale(1.2)');
  },function(){
    $(this).css('transform','scale(1)');
  });

</script>
