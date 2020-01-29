<?php get_header(); ?>

<article class="wraps">

  <div class="border">
      <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/404.svg" alt="">
  </div>

</article>

<style media="screen">
.wraps {
  text-align: center;
}
  .wraps img{
    width: 48%;
    margin-top: 11vw;
    margin-bottom: 5%;
  }

  @media (max-width: 726px){
    .wraps img{
      width: 80%;
      margin-top: 44vw;
      margin-bottom: 13%;
    }
  }
</style>

<?php get_footer(); ?>
