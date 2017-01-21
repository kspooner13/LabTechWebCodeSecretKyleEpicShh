$(function() {			
	'use strict';

	// Default file input style
	$(".file-styled").uniform({
		fileButtonHtml: 'Browse'
	});
	
	// Default file input style with icon
	$(".file-styled-icon").uniform({
		fileButtonHtml: '<i class="icon-plus3"></i>'
	});

	// Primary file input
	$(".file-styled-primary").uniform({
		wrapperClass: 'bg-primary',
		fileButtonHtml: 'Browse'
	});
	
	// Primary file input
	$(".file-styled-primary-icon").uniform({
		wrapperClass: 'bg-primary',
		fileButtonHtml: '<i class="icon-plus3"></i>'
	});
});