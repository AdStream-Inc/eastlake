(function() {
  var mapStyle = [{
    "featureType": "all",
    "stylers": [{
        "saturation": -100
    }, {
        "gamma": 0.5
    }]
  }];

  function ClubLocationsMap() {
    this.url = URL.root + 'api/locations';
    this.markers = [];

    this.init();
  }

  ClubLocationsMap.prototype.init = function() {
    this.initMap();
    this.resizeMap();
    this.initLocations();
    this.watchLocations();

    $('.map-sidebar').find('.map-item').eq(0).addClass('active');

    $(window).on('resize', this.resizeMap);
  };

  ClubLocationsMap.prototype.initMap = function() {
    var _this = this;

    _this.map = new google.maps.Map(document.getElementById('map-element'), {
      zoom: 16,
      center: new google.maps.LatLng(41.572844, -85.81538499999999),
      styles: mapStyle
    });
  };

  ClubLocationsMap.prototype.resizeMap = function() {
    var container = $('.map-container');
    var containerHeight = container.outerHeight();
    var sidebar = $('.map-sidebar-container');
    var windowWidth = $(window).width();

    if (windowWidth >= 977) { // this is weird...
      sidebar.height(containerHeight);
    } else {
      sidebar.height(220);
    }
  };

  ClubLocationsMap.prototype.initLocations = function() {
    var _this = this;
    var geocoder = new google.maps.Geocoder();

    $.get(_this.url, function(res) {
      $.each(res.locations, function(k) {
        var geoAddress = this.street + ' ' + this.city + ',' + this.state + ' ' + this.zip;

        geocoder.geocode({ address: geoAddress }, function(res) {
          var location = res[0].geometry.location;
          var marker = _this.makeMarker(location.lat(),location.lng());

          _this.markers[k] = marker;
        });
      });
    });
  };

  ClubLocationsMap.prototype.makeMarker = function(lat, lng) {
    var _this = this;

    return new google.maps.Marker({
        position: new google.maps.LatLng(lat, lng),
        map: _this.map
    });
  };

  ClubLocationsMap.prototype.watchLocations = function() {
    var _this = this;

    $('.map-item').on('click', function() {
      var el = $(this);
      var id = el.attr('data-id');
      var marker = _this.markers[id];

      $('.map-item').removeClass('active');
      el.addClass('active');
      _this.map.panTo(marker.getPosition());
    });
  };

  new ClubLocationsMap();
})();
