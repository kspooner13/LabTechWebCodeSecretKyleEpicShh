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
		var map = new google.maps.Map($('.map-layer-transit')[0], mapOptions);
		// Add layers
		var transitLayer = new google.maps.TransitLayer();
			transitLayer.setMap(map);
	}
	// Load map
	google.maps.event.addDomListener(window, 'load', initialize);
});