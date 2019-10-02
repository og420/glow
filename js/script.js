// jQuery(window).load(function() {
//   h = jQuery(window).height();
//   jQuery('.stmt').css('min-height', h + 'px');
//   });
//   jQuery(window).resize(function() {
//   h = jQuery(window).height();
//   jQuery('.stmt').css('min-height', h + 'px');
//   });

new WOW().init();

// fullpage js
jQuery(function($){

$('#fullpage').fullpage({
  //options here
  scrollBar: true,
  autoScrolling: true,
  scrollHorizontally: true
});
});