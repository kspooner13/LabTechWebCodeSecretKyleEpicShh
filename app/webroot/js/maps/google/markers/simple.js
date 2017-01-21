$(function() {
	'use strict';
	// Setup map
	function initialize() {
		// Set coordinates
		var myLatlng = new google.maps.LatLng(-34.397, 150.644);
		// Options
		var mapOptions = {
			zoom: 10,
			center: myLatlng
		};
		// Apply options
		var map = new google.maps.Map($('.map-marker-simple')[0], mapOptions);
		var contentString = 'Our Location';
		// Add info window
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		// Add marker
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Hello World!'
		});
		// Attach click event
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
	};
	// Initialize map on window load
	google.maps.event.addDomListener(window, 'load', initialize);
});
