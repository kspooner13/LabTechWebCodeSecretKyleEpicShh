$(function() {
	'use strict';
	// Bootpag dynamic pagination
	// ------------------------------
	// Basic
	$('.bootpag-default').bootpag({
		total: 20,
		maxVisible: 6,
		leaps: false
		}).on("page", function(event, num){
			$(".content-default").html("Page " + num); // or some ajax content loading...
	}).children('.pagination').addClass('pagination-sm');

	// Flat style
	$('.bootpag-flat').bootpag({
		total: 20,
		maxVisible: 6,
		leaps: false
		}).on("page", function(event, num){
			$(".content-flat").html("Page " + num); // or some ajax content loading...
	}).children('.pagination').addClass('pagination-flat pagination-sm');

	// Separated style
	$('.bootpag-separated').bootpag({
		total: 20,
		maxVisible: 6,
		leaps: false
		}).on("page", function(event, num){
			$(".content-separated").html("Page " + num); // or some ajax content loading...
	}).children('.pagination').addClass('pagination-separated pagination-sm');

	// Custom button text
	$('.bootpag-prev-next').bootpag({
		total: 10,
		maxVisible: 5,
		leaps: false,
		prev: 'prev',
		next: 'next'
		}).on("page", function(event, num){
			$(".content-prev-next").html("Page " + num); // or some ajax content loading...
	}).children('.pagination').addClass('pagination-flat pagination-sm');

	// Custom start page
	$('.bootpag-page-start').bootpag({
		total: 10,
		maxVisible: 6,
		page: 3,
		leaps: false
		}).on("page", function(event, num){
			$(".content-page-start").html("Page " + num); // or some ajax content loading...
	}).children('.pagination').addClass('pagination-flat pagination-sm');

	// Callback
	$('.bootpag-callback').bootpag({
		total: 10,
		maxVisible: 6,
		leaps: false
		}).on("page", function(event, num){
			$(".content-callback").html("Page " + num); // or some ajax content loading...
			alert('You have clicked page #' + num);
	}).children('.pagination').addClass('pagination-flat pagination-sm');
});