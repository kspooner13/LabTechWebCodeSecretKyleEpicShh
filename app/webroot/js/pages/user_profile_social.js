'use strict';

$("#tab-profile").addClass(" active");
$("#tab-menu").removeClass(" active");
$("#profile").addClass(" active fadeIn");
$("#profile").removeClass(" fade");
$("#menu").removeClass(" active");
$("#menu").removeClass(" fadein");
$("#menu").addClass(" fade");

// Setup map
function initialize() {
	// Set coordinates
	var myLatlng = new google.maps.LatLng(48.8584, 2.2945);
	// Options
	var mapOptions = {
		zoom: 15,
		center: myLatlng
	};
	// Apply options
	var map = new google.maps.Map($('.map-location')[0], mapOptions);
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
