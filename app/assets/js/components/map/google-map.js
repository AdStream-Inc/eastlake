var mapStyle = [{
    "featureType": "all",
    "stylers": [{
        "saturation": -100
    }, {
        "gamma": 0.5
    }]
}];

var EastlakeMap = (function(document, window, undefined) {
    var privateVars = {
        infobox: new google.maps.InfoWindow({
            maxWidth: 320
        }),
        initializeMap: function() {
            this.map = new google.maps.Map(document.getElementById('map-element'), {
                styles: mapStyle,
                zoom: 16,
                center: new google.maps.LatLng(41.572844, -85.81538499999999),
            });

            return this.map;
        },
        geocoder: new google.maps.Geocoder(),
        geocode: function(address) {
            return this.geocoder.geocode({'address': address}, function(res) {
                console.log(res[0].geometry);
            });
        },
        generateMarker: function(data) {
            var self = this;
            return new google.maps.Marker({
                position: new google.maps.LatLng(data.latitude, data.longitude),
                title: data.title,
                map: self.map
            });
        },
        onMouseover: function(marker) {
            var self = this;
            return google.maps.event.addListener(marker, 'mouseover', function() {
                self.infobox.setContent('<h3>' + marker.title + '</h3>');
                self.infobox.open(self.map, marker);
            });
        },
        onMouseout: function(marker) {
            var self = this;
            return google.maps.event.addListener(marker, 'mouseout', function() {
                self.infobox.close();
            });
        },
        onClick: function(marker, callback) {
            var self = this;
            google.maps.event.addListener(marker, 'click', function() {
                self.map.panTo(marker.getPosition());
                return callback();
            });
        }
    }

    // our public api / facade
    return {
        init: function() {
            this.map = privateVars.initializeMap();
            this.infobox = privateVars.infobox;

            return this;
        },
        marker: function(data) {
            return privateVars.generateMarker(data);
        },
        geocode: function(address) {
            return privateVars.geocode(address);
        },
        mouseover: privateVars.onMouseover,
        mouseout: privateVars.onMouseout,
        clicked: privateVars.onClick
    }
})(document, window);