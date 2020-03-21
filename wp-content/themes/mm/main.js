
//Global
var scrolltop;

$(document).scroll(function () {
  scrolltop = $(this).scrollTop();
});



//Mobile Scripts #######################################################################
if (document.documentElement.clientWidth <= 768) {

  $(document).ready(function(){   
      $('.sent_foot').css('font-size','3.83vw')
  });

  // #gotop hide
  $(document).scroll(function () {
    var foot_off = $("footer").offset().top;
    if(scrolltop >= foot_off-400) {
      $('#gotop').fadeIn();
    }else{
      $('#gotop').fadeOut();
    }
  });
}

//Desktop Scripts ########################################################################
if (document.documentElement.clientWidth > 768) {

  $(document).ready(function(){
    
  });

  // #gotop hide
  $(document).scroll(function () {
    var foot_off = $("footer").offset().top;
    if(scrolltop >= foot_off-800) {
      $('#gotop').fadeIn();
    }else{
      $('#gotop').fadeOut();
    }
  });
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

//Hide page untill successful load

//Document Ready ************************************

$(document).ready(function() {

  $('.quote h1').addClass('fadeInUp2');

  $('.direction').on('click',function(){
      location.href = "https://goo.gl/maps/f1VXVBVnVpJhZGmE9";
  });
  $('.information').hover(function(){
      $(this).css('cursor','pointer');
      $(this).find('i').css('color','#d8d8d8');
  },function(){
    $(this).find('i').css('color','');
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

  //Toggle Sidebar
					$('.navbar-toggler').on('click', function(){
							$(".sidepanel").toggleClass("w-250 w-0");
					});
}); //Ready function Ends

//Hamburger Menu
(function () {
  var i, resize;

  $(".navbar-toggler").click(function () {
    clearInterval(i);
    return $(".navbar-toggler").toggleClass("cross");
  });

  resize = function () {
    return $("body").css({
      "margin-top": ~~((window.innerHeight - 150) / 2) + "px" });
  };

}).call(this);

// ****************  Footer *******************************
