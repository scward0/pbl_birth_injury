$(document).ready(function(){


  $(document).on('click', '.modal-open', function () {
    $('.modal').removeClass('hide');
  });

  $(document).on('click', '.modal-close', function () {
    $('.modal').addClass('hide');
  });

  if ($(window).width() < 1025) {
    $('.desktop-practice').addClass('hide');
    $('.mobile-practice').removeClass('hide');
  }
  else {
    $('.desktop-practice').removeClass('hide');
    $('.mobile-practice').addClass('hide');
  }

  $(window).resize(function() {
    if ($(window).width() < 1025) {
      $('.desktop-practice').addClass('hide');
      $('.mobile-practice').removeClass('hide');
    }
    else {
      $('.desktop-practice').removeClass('hide');
      $('.mobile-practice').addClass('hide');
    }
  });

  $('.slick').slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4000,
  });



  $(window).scroll(function() {
    var hT = $('.footer').offset().top,
         hH = $('.footer').outerHeight(),
         wH = $(window).height(),
         wS = $(this).scrollTop(),
         windowWidth = $(window).width();

    if(windowWidth > 768){
      // $('.awards').addClass('hide');
      //
      // if (wS < (hT+hH-wH-300)){
      //   $('.awards').removeClass('animated slideInUp fadeIn');
      //   $('.awards').addClass('hide');
      // }
      //
      // if (wS > (hT+hH-wH-300)){
      //   $('.awards').removeClass('hide');
      //   $('.awards').addClass('animated slideInUp fadeIn');
      // }
    }
  }) ;

  $('i.fa.fa-bars.fa-4x::before').click(function(){
    $('.nav-menu li a').addClass('animated zoomIn');
  });
  $('.cimg').click(function(){
    $('.nav-menu li a').removeClass('animated zoomIn');
  });
  $(".navcontent ul li a").mouseover(function(){
    $(this).addClass('animated pulse');
  });
  $(".navcontent ul li a").mouseout(function(){
    $(this).removeClass('animated pulse');
  });
  $(".practice-area").mouseover(function(){
    $(this).addClass('animated pulse');
  });
  $(".practice-area").mouseout(function(){
    $(this).removeClass('animated pulse');
  });
});
