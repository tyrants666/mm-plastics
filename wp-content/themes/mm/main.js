

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
});

//Footer

    // #gotop hide
    $(document).scroll(function () {
      var foot_off = $("footer").offset().top;
      if(scrolltop >= foot_off-800) {
        $('#gotop').fadeIn();
      }else{
        $('#gotop').fadeOut();
      }
    });
