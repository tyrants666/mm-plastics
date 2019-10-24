

//Global
var scrolltop;

$(document).scroll(function () {
  scrolltop = $(this).scrollTop();
});

//Mobile Scripts
if (document.documentElement.clientWidth <= 768) {

}
//Desktop Scripts
if (document.documentElement.clientWidth > 768) {
}



//Selected Menu
$('.top-menu ul a').click(function(){
  $(this).addClass('selected').siblings().removeClass('selected');
});
$('.top-menu2 ul a').click(function(){
  $(this).addClass('selected2').siblings().removeClass('selected2');
});

//Scroll to id smoothly
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    },  500);
});

//navbar2
$(document).scroll(function () {
  if(scrolltop >= 300){
    $('#navbar2').css('z-index','10');
    $('#navbar2').css('opacity','1');
    $('#navbar2').removeClass('fadeOutUp animated');
    $('#navbar2').addClass('fadeInDown3');
  }else if(scrolltop < 300){
    $('#navbar2').css('opacity','0');
    $('#navbar2').css('z-index','-1');
    $('#navbar2').removeClass('fadeInDown3');
    $('#navbar2').addClass('fadeOutUp animated');
  }
});
//Document Ready ************************************

$(document).ready(function() {

  $('.quote h1').addClass('fadeInUp2');

  // owlCarousel
  $('.owl1').owlCarousel({
    center: true,
    items:7,
    loop:true,
    margin:40,
    autoplay:true,
    slideTransition: 'linear',
    autoplayHoverPause: false,
    autoplaySpeed: 8000,
  });

  $('.owl2').owlCarousel({
    center: true,
    items:5,
    loop:true,
    margin:40,
    autoplay:true,
    slideTransition: 'linear',
    autoplayHoverPause: false,
    autoplaySpeed: 8000,
  });

  $('.owl3, .owl4, .owl5, .owl6').owlCarousel({
    center: true,
    items:1,
    loop:true,
    margin:0,
    dots: false,
    autoplay:true,
    // slideTransition: 'linear',
    autoplayHoverPause: false,
    // autoplaySpeed: 8000,
  });

  //Read more
  $('.read-more').hover(function(){
    $('.eco').css('transform', 'rotate(-35deg)');
    $(this).css('transform', 'scale(0.97)');
    $(this).css('opacity', '0.7');
  },function() {
    $('.eco').css('transform', 'rotate(0deg)');
    $(this).css('transform', 'scale(1)');
    $(this).css('opacity', '1');
  });

 //Product 1
  var owl = $('.owl3');
  owl.owlCarousel();
  $('.left').click(function() {
      owl.trigger('next.owl.carousel');
  })
  $('.right').click(function() {
      owl.trigger('prev.owl.carousel', [300]);
  })
  //Product 2
  var owl4 = $('.owl4');
  owl4.owlCarousel();
  $('.left4').click(function() {
      owl4.trigger('next.owl.carousel');
  })
  $('.right4').click(function() {
      owl4.trigger('prev.owl.carousel', [300]);
  })
  //Product 3
  var owl5 = $('.owl5');
  owl5.owlCarousel();
  $('.left5').click(function() {
      owl5.trigger('next.owl.carousel');
  })
  $('.right5').click(function() {
      owl5.trigger('prev.owl.carousel', [300]);
  })
  //Product 4
  var owl6 = $('.owl6');
  owl6.owlCarousel();
  $('.left6').click(function() {
      owl6.trigger('next.owl.carousel');
  })
  $('.right6').click(function() {
      owl6.trigger('prev.owl.carousel', [300]);
  })

});

// ****************  Footer *******************************

// #gotop hide
$(document).scroll(function () {
  var foot_off = $("footer").offset().top;
  if(scrolltop >= foot_off-800) {
    $('#gotop').fadeIn();
  }else{
    $('#gotop').fadeOut();
  }
});
