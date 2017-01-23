$(function() {
	'use strict';
	// Toggle animations
	$("body").on("click", ".animation", function (e) {

		// Get animation class from "data" attribute
		var animation = $(this).data("animation");

		// Apply animation once per click
		$(this).parents(".panel").addClass("animated " + animation).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
			$(this).removeClass("animated " + animation);
		});
		e.preventDefault();
	});
});