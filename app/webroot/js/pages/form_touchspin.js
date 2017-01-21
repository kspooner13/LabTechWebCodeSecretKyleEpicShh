$(function() {			
	'use strict';
	
	// Touchspin spinners
	// ------------------------------
	// Basic example
	$(".touchspin-basic").TouchSpin({
		postfix: '<i class="icon-align-justify"></i>'
	});

	// Postfix
	$(".touchspin-postfix").TouchSpin({
		min: 0,
		max: 100,
		step: 0.1,
		decimals: 2,
		postfix: '%'
	});

	// Prefix
	$(".touchspin-prefix").TouchSpin({
		min: 0,
		max: 100,
		step: 0.1,
		decimals: 2,
		prefix: '$'
	});

	// Init with empty values
	$(".touchspin-empty").TouchSpin();

	// Disable mousewheel
	$(".touchspin-no-mousewheel").TouchSpin({
		mousewheel: false
	});

	// Incremental/decremental steps
	$(".touchspin-step").TouchSpin({
		step: 10
	});

	// Set value
	$(".touchspin-set-value").TouchSpin({
		initval: 40
	});

	// Inside button group
	$(".touchspin-button-group").TouchSpin({
		prefix: "pre",
		postfix: "post"
	});
});