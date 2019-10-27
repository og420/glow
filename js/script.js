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

// 記事出現アニメーションのタイミング制御

$(function(){
  $('.other_post_box').each(function(){
    $(this).attr('class','wow fadeIn other_post_box');
  });
  $('.mv_post_box').each(function(){
    $(this).attr('class','wow fadeIn mv_post_box');
  });
  $('.a__article').each(function(){
    $(this).attr('class','wow fadeIn a__article');
  });
  $('.js-pcA_posts .other_post_box').each(function(i){
      $(this).attr('data-wow-delay',(0.4 + i * 0.4)+'s');
  });
  $('.js-pcB_posts .other_post_box').each(function(i){
    $(this).attr('data-wow-delay',(0.4 + i * 0.4)+'s');
  });
  $('.js-pcC_posts .other_post_box').each(function(i){
    $(this).attr('data-wow-delay',(0.4 + i * 0.4)+'s');
  });
  $('.mv_post_box').each(function(i){
    $(this).attr('data-wow-delay',(0.4 + i * 0.4)+'s');
  });
  $('.a__article').each(function(i){
    $(this).attr('data-wow-delay',(0.4 + i * 0.4)+'s');
  });
});

});

// wow

new WOW().init();
