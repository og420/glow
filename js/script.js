// wow

new WOW().init();

// $開放

jQuery(function($){

// window height

  $(window).load(function() {
    windowH = $(window).height();
    $('.globalNav').css('min-height', windowH + 'px');
    });
    $(window).resize(function() {
    windowH = $(window).height();
    $('.globalNav').css('min-height', windowH + 'px');
  });

// sticky

  $(window).scroll(function() {
  if ($(this).scrollTop() > 1){
      $('#glow_header').addClass("glow__header--state_sticky");
    }
    else{
      $('#glow_header').removeClass("glow__header--state_sticky");
    }
  });

// fullpage js

$('#fullpage').fullpage({
  //options here
  scrollBar: true,
  autoScrolling: true,
  scrollHorizontally: true,
  paddinTop: '80px'
});

// hamburger menu

$('.js-header__burger__icon').click(function() {
  $(this).toggleClass('globalNav--state_open');
  if ($(this).hasClass('globalNav--state_open')) {
    $('.globalNav').addClass('globalNav--state_open');
    $('html').addClass('scroll-prevent');
  } else {
    $('.globalNav').removeClass('globalNav--state_open');
    $('html').removeClass('scroll-prevent');
  }
});

});