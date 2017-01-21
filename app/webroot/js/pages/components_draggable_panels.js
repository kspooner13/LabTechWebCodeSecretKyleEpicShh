$(function() {	
	'use strict';
	// Sortable rows
	$(".row-sortable").sortable({
		connectWith: '.row-sortable',
		items: '.panel',
		helper: 'original',
		cursor: 'move',
		handle: '[data-action=move]',
		revert: 100,
		containment: '.main-container',
		forceHelperSize: true,
		placeholder: 'sortable-placeholder',
		forcePlaceholderSize: true,
		tolerance: 'pointer',
		start: function(e, ui){
			ui.placeholder.height(ui.item.outerHeight());
		}
	});

	// Panel title movable
	$(".sortable-heading").sortable({
		connectWith: '.heading-sortable',
		items: '.panel',
		helper: 'original',
		cursor: 'move',
		handle: '.panel-title, [data-action=move]',
		revert: 100,
		containment: '.main-container',
		forceHelperSize: true,
		placeholder: 'sortable-placeholder',
		forcePlaceholderSize: true,
		tolerance: 'pointer',
		start: function(e, ui){
			ui.placeholder.height(ui.item.outerHeight());
		}
	});

	// Full panel movable
	$(".sortable-panel").sortable({
		connectWith: '.panel-sortable',
		items: '.panel',
		helper: 'original',
		cursor: 'move',
		revert: 100,
		containment: '.main-container',
		forceHelperSize: true,
		placeholder: 'sortable-placeholder',
		forcePlaceholderSize: true,
		tolerance: 'pointer',
		start: function(e, ui){
			ui.placeholder.height(ui.item.outerHeight());
		}
	});
});