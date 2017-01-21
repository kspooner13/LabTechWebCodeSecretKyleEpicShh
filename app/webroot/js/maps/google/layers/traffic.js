$(function() {
	'use strict';
	// Initialize
	function initialize() {
		// Set coordinates
		var myLatlng = new google.maps.LatLng(-34.397, 150.644);
		// Options
		var mapOptions = {
			zoom: 10,
			center: myLatlng
		}
		// Apply options
		var map = new google.maps.Map($('.map-layer-traffic')[0], mapOptions);
		// Add layers
		var trafficLayer = new google.maps.TrafficLayer();
			trafficLayer.setMap(map);
	}
	// Load map
	google.maps.event.addDomListener(window, 'load', initialize);
});