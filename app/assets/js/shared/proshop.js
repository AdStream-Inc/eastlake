(function($) {
  var shopSlider = $('.pro-shop-slider').owlCarousel({
    items: 2,
    margin: 30,
    dots: false,
    nav: true,
    navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
    responsive: {
      540: {
        items: 3
      },
      660: {
        items: 4
      },
      768: {
        items: 5
      },
      992: {
        items: 6
      }
    }
  });
})(jQuery);