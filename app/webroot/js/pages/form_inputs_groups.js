$(function() {			
	'use strict';
	
	// Styled checkboxes/radios
	$(".styled, .multiselect-container input").uniform({
		radioClass: 'choice'
	});

	// Update uniform when select between styled and unstyled
	$('.input-group-addon input[type=radio]').on('click', function() {
		$.uniform.update("[name=addon-radio]");
	});
});