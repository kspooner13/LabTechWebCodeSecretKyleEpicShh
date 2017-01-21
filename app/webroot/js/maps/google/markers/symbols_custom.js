$(function() {
	'use strict';
    // Map settings
    function initialize() {
        // Optinos
        var mapOptions = {
            zoom: 10,
            center: new google.maps.LatLng(-34.397, 150.644)
        }
        // Apply options
        var map = new google.maps.Map($('.map-symbol-custom')[0], mapOptions);
        // Set markers
        setMarkers(map, markers);
    }
    var markers = [
        ['Marker 1', 28.5039, 77.1790, 4],
        ['Marker 2', 26.6139, 74.2090, 5],
        ['Marker 3', 22.4339, 71.790, 3],
        ['Marker 4', 32.6139, 60.2090, 2],
        ['Marker 5', 25.6139, 83.2090, 1]
    ];
    // Set markers
    function setMarkers(map, locations) {
        var image = {
            url: 'assets/images/ui/map_marker.png',
            // This marker is 20 pixels wide by 32 pixels tall.
            size: new google.maps.Size(20, 32),
            // The origin for this image is 0,0.
            origin: new google.maps.Point(0,0),
            // The anchor for this image is the base of the flagpole at 0,32.
            anchor: new google.maps.Point(0, 32)
        };
        var shape = {
            coords: [1, 1, 1, 20, 18, 20, 18 , 1],
            type: 'poly'
        };
        for (var i = 0; i < locations.length; i++) {
            var beach = locations[i];
            var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image,
                shape: shape,
                title: beach[0],
                zIndex: beach[3]
            });
        }
    }
    // Load maps
    google.maps.event.addDomListener(window, 'load', initialize);
});