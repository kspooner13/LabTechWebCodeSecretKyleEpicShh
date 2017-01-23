$(function() {
	'use strict';
	var map;
	// Map settings
	function initialize() {
		// Optinos
		var mapOptions = {
			zoom: 10,
			center: new google.maps.LatLng(-34.397, 150.644)
		};
		// Apply options
		map = new google.maps.Map($('.map-basic')[0], mapOptions);
	}
	// Load map
	google.maps.event.addDomListener(window, 'load', initialize);
});
