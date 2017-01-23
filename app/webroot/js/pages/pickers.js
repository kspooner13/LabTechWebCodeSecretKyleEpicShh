'use strict';

$(function() {				
	
	// Single picker
	$('.daterange-single').daterangepicker({ 
		singleDatePicker: true			
	});

	// Display date dropdowns
	$('.daterange-datemenu').daterangepicker({
		showDropdowns: true,
		opens: "left",
		applyClass: 'bg-slate',
		cancelClass: 'btn-default'
	});
	
	// Display time picker
	$('.daterange-time').daterangepicker({
		timePicker: true,
		applyClass: 'bg-slate',
		cancelClass: 'btn-default',
		opens: "left",
		locale: {
			format: 'MM/DD/YYYY h:mm a'
		}
	});

	// Initialize with options
	$('.daterange-predefined').daterangepicker(
		{
			startDate: moment().subtract('days', 29),
			endDate: moment(),
			minDate: '01/01/2014',
			maxDate: '12/31/2016',
			dateLimit: { days: 60 },
			ranges: {
				'Today': [moment(), moment()],
				'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
				'Last 7 Days': [moment().subtract('days', 6), moment()],
				'Last 30 Days': [moment().subtract('days', 29), moment()],
				'This Month': [moment().startOf('month'), moment().endOf('month')],
				'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
			},
			opens: 'left',
			applyClass: 'btn-small bg-slate',
			cancelClass: 'btn-small btn-default'
		},
		function(start, end) {
			$('.daterange-predefined span').html(start.format('MMMM D, YYYY') + ' &nbsp; - &nbsp; ' + end.format('MMMM D, YYYY'));
			$.jGrowl('Date range has been changed', { header: 'Update', theme: 'bg-primary', position: 'center', life: 1500 });
		}
	);
	// Display date format
	$('.daterange-predefined span').html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' &nbsp; - &nbsp; ' + moment().format('MMMM D, YYYY'));

	
	// Pick-a-date picker
	// ------------------------------
	// Basic options
	$('.pickadate').pickadate();
			
	// Dropdown selectors
	$('.pickadate-selectors').pickadate({
		selectYears: true,
		selectMonths: true
	});

	// Date limits
	$('.pickadate-limits').pickadate({
		min: [2016,3,28],
		max: [2017,4,30]
	});

	// Disable date range
	$('.pickadate-disable-range').pickadate({
		disable: [
			1
		]
	});

	// Pick-a-time time picker
	// ------------------------------
	// Default functionality
	$('.pickatime').pickatime();
	
	// Time limits
	$('.pickatime-limits').pickatime({
		min: [9,30],
		max: [18,0]
	});

	// Disabling ranges
	$('.pickatime-range').pickatime({
		disable: [
			1,
			[1, 30, 'inverted'],
			{ from: [4, 30], to: [10, 30] },
			[6, 30, 'inverted'],
			{ from: [8, 0], to: [9, 0], inverted: true }
		]
	});
	
	// Color palette
	var demoPalette = [
		["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
		["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
		["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],
		["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],
		["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],
		["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],
		["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],
		["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]
	]

	// Basic examples
	// ------------------------------
	// Basic setup
	$(".colorpicker-basic").spectrum();

	// Display color formats
	$(".colorpicker-show-input").spectrum({
		showInput: true
	});

	// Display alpha channel
	$(".colorpicker-show-alpha").spectrum({
		showAlpha: true
	});

	// Display initial color
	$(".colorpicker-show-initial").spectrum({
		showInitial: true
	});

	// Full featured color picker
	$(".colorpicker-full").spectrum({
		showInitial: true,
		showInput: true,
		showAlpha: true,
		allowEmpty: true
	});

	// Container color
	$(".colorpicker-container-class").spectrum({
		containerClassName: 'bg-slate'
	});

	
	// Color palettes
	// ------------------------------
	// Display color palette
	$(".colorpicker-palette").spectrum({
		showPalette: true,
		palette: demoPalette
	});

	// Display palette only
	$(".colorpicker-palette-only").spectrum({
		showPalette: true,
		showPaletteOnly: true,
		palette: demoPalette
	});
});
