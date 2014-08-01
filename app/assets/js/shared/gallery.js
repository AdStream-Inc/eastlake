(function($) {
  $('.gallery-item').magnificPopup({
    type: 'image',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true
    },
  });

})(jQuery);