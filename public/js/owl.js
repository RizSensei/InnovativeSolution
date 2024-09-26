$(document).ready(function () {
    $(".owl-carousel").owlCarousel();
  });

  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        }
    }
})