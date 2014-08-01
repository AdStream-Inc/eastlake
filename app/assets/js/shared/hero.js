(function($) {
  var heroSlider = $('.hero-img-slider').owlCarousel({
    items: 1,
    animateOut: 'fadeOut',
    autoplay: true,
    mouseDrag: false,
    touchDrag: false,
    loop: true,
    autoHeight: true
  });

  heroSlider.on('translate.owl.carousel', function() {
    $('.hero-caption').fadeOut();
  });

  heroSlider.on('translated.owl.carousel', function() {
    var el = $('.owl-item.active', $('.hero-img-slider'));
    var title = el.find('img').attr('data-title');
    var caption = $('.hero-caption');

    caption.fadeIn().text(title);
  });
})(jQuery);