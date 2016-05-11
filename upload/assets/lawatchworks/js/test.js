// NAV DROPDOWN
$(function () {
  $('nav li ul').hide().removeClass('fallback');
  $('nav li').hover(
    function () {
      $('ul', this).stop().slideDown(100);
    },
    function () {
      $('ul', this).stop().slideUp(100);
    }
  );
});
// SLICK CAROUSEL
$(function(){
      $('.hero').slick({
        arrows:true,
        dots:false,
      });
    });