(function(EastlakeMap, $, window, document) {
  $('.map .col-md-4').height($('.map .col-md-8').outerHeight());
  $('.map-item').eq(0).addClass('active');

  $(window).on('load', function() {
    var url = URL.root + 'api/locations';
    var markers = [];

    EastlakeMap.init();

    $.get(url, function(res) {
      $.each(res.locations, function() {
        var geoAddress = this.street + ' ' + this.city + ',' + this.state + ' ' + this.zip;

        EastlakeMap.geocoder.geocode({ address: geoAddress }, function(res) {
          if (res && res.length) {
            var location = res[0].geometry.location;
            var marker = EastlakeMap.marker(location.lat(), location.lng());

            console.log(marker);
          }

          markers.push(marker);
        });
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