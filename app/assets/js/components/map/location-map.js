(function() {
  var mapStyle = [{
    "featureType": "all",
    "stylers": [{
        "saturation": -100
    }, {
        "gamma": 0.5
    }]
  }];

  function LocationMap(address) {
    this.address = address;
    this.init();
  }

  LocationMap.prototype.init = function() {
    var _this = this;
    _this.getLocation(function() {
      _this.initMap();
      _this.makeMarker();
    });
  };

  LocationMap.prototype.initMap = function() {
    var _this = this;

    _this.map = new google.maps.Map(document.getElementById('map-container'), {
      zoom: 16,
      center: new google.maps.LatLng(_this.location.lat, _this.location.lng),
      styles: mapStyle,
    });
  };

  LocationMap.prototype.getLocation = function(callback) {
    var _this = this;
    var address = _this.address;
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({ address: address }, function(res) {
      var location = res[0].geometry.location;
      _this.location = {lat: location.lat(), lng: location.lng()};
      callback();
    });
  };

  LocationMap.prototype.makeMarker = function(lat, lng) {
    var _this = this;

    new google.maps.Marker({
        position: new google.maps.LatLng(_this.location.lat, _this.location.lng),
        map: _this.map
    });
  };

  window.LocationMap = LocationMap;
})();