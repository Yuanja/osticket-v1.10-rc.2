// NAV DROPDOWN
$(function () {
  $('.user ul.fallback').hide();
  $('.user').hover(
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