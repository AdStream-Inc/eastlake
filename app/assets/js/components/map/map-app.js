(function(EastlakeMap, $, window, document) {
  $('.map .col-md-4').height($('.map .col-md-8').outerHeight());
  $('.map-item').eq(0).addClass('active');

  $(window).on('load', function() {
    var url = '/api/locations';
    var markers = [];

    EastlakeMap.init();

    $.get(url, function(res) {
      $.each(res.locations, function() {
        var marker = EastlakeMap.marker(this);

        console.log(EastlakeMap.geocode(this.street + ',' + this.city + ',' + this.state + ',' + this.zip));

        markers.push(marker);
      });

      $('.map-item').on('click', function() {
        var el = $(this);
        var id = el.attr('data-id');
        var marker = markers[id];

        $('.map-item').removeClass('active');
        el.addClass('active');
        EastlakeMap.map.panTo(marker.getPosition());
      });
    });
  });

})(EastlakeMap, jQuery, window, document);