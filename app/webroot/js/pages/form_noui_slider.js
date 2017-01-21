$(function() {			
	'use strict';
	// Slider handles
	var slider_handles = document.getElementById('noui-slider-handles');
	noUiSlider.create(slider_handles, {
		start: [100, 800],
		range: {
			'min': [0],
			'max': [1000]
		}
	});
	var slider_handles_vals = [
		document.getElementById('noui-handles-lower-val'),
		document.getElementById('noui-handles-upper-val')
	];
	slider_handles.noUiSlider.on('update', function( values, handle ) {
		slider_handles_vals[handle].innerHTML = values[handle];
	});


	// Ranges
	var slider_range = document.getElementById('noui-slider-range');
	noUiSlider.create(slider_range, {
		start: [100],
		range: {
			'min': [0],
			'max': [1000]
		}
	});
	var slider_range_val = document.getElementById('noui-range-val');
	slider_range.noUiSlider.on('update', function( values, handle ) {
		slider_range_val.innerHTML = values[handle];
	});


	// Stepping
	var slider_stepping = document.getElementById('noui-slider-stepping');
	noUiSlider.create(slider_stepping, {
		start: [400],
		step: 100,
		range: {
			'min': [00],
			'max': [1000]
		},
	});
	var slider_stepping_val = document.getElementById('noui-stepping-val');
	slider_stepping.noUiSlider.on('update', function( values, handle ) {
		slider_stepping_val.innerHTML = values[handle];
	});


	// Non-linear slider
	var slider_nonlinear = document.getElementById('noui-slider-nonlinear');
	noUiSlider.create(slider_nonlinear, {
		start: [ 400 ],
		range: {
			'min': [  0 ],
			'30%': [  300 ],
			'70%': [  700 ],
			'max': [ 1000 ]
		}
	});
	var slider_nonlinear_val = document.getElementById('noui-nonlinear-val');
	slider_nonlinear.noUiSlider.on('update', function( values, handle ) {
		slider_nonlinear_val.innerHTML = values[handle];
	});


	// Non-linear stepping
	var slider_nonlinear_step = document.getElementById('noui-slider-nonlinear-stepping');
	noUiSlider.create(slider_nonlinear_step, {
		start: [ 100, 600 ],
		range: {
			'min': [     0 ],
			'10%': [   100,  100 ],
			'50%': [  500, 500 ],
			'max': [ 1000 ]
		}
	});
	var slider_nonlinear_step_vals = [
		document.getElementById('noui-nonlinear-stepping-lower-val'),
		document.getElementById('noui-nonlinear-stepping-upper-val')
	];
	slider_nonlinear_step.noUiSlider.on('update', function( values, handle ) {
		slider_nonlinear_step_vals[handle].innerHTML = values[handle];
	});


	// Tap behaviour (lower)
	slider_tap_behaviour = document.getElementById('noui-slider-tap-lower');
	noUiSlider.create(slider_tap_behaviour, {
		start: 400,
		behaviour: 'tap',
		connect: 'lower',
		range: {
			'min':  0,
			'max':  1000
		}
	});
	var slider_tap_behaviour_val = document.getElementById('noui-slider-tap-val-lower');
	slider_tap_behaviour.noUiSlider.on('update', function( values, handle ) {
		slider_tap_behaviour_val.innerHTML = values[handle];
	});
	
	
	// Tap behaviour (lower)
	slider_tap_behaviour = document.getElementById('noui-slider-tap-upper');
	noUiSlider.create(slider_tap_behaviour, {
		start: 400,
		behaviour: 'tap',
		connect: 'upper',
		range: {
			'min':  0,
			'max':  1000
		}
	});
	var slider_tap_behaviour_val = document.getElementById('noui-slider-tap-val-upper');
	slider_tap_behaviour.noUiSlider.on('update', function( values, handle ) {
		slider_tap_behaviour_val.innerHTML = values[handle];
	});

	
	// Drag behaviour
	var slider_drag_behaviour = document.getElementById('noui-slider-drag');
	noUiSlider.create(slider_drag_behaviour, {
		start: [ 300, 600 ],
		behaviour: 'drag',
		connect: true,
		range: {
			'min':  0,
			'max':  1000
		}
	});
	var slider_drag_behaviour_vals = [
		document.getElementById('noui-slider-drag-lower-val'),
		document.getElementById('noui-slider-drag-upper-val')
	];
	slider_drag_behaviour.noUiSlider.on('update', function( values, handle ) {
		slider_drag_behaviour_vals[handle].innerHTML = values[handle];
	});

	
	// Fixed dragging
	slider_drag_fixed = document.getElementById('noui-slider-drag-fixed');
	noUiSlider.create(slider_drag_fixed, {
		start: [ 300, 600 ],
		behaviour: 'drag-fixed',
		connect: true,
		range: {
			'min':  0,
			'max':  1000
		}
	});
	var slider_drag_fixed_vals = [
		document.getElementById('noui-slider-fixed-lower-val'),
		document.getElementById('noui-slider-fixed-upper-val')
	];
	slider_drag_fixed.noUiSlider.on('update', function( values, handle ) {
		slider_drag_fixed_vals[handle].innerHTML = values[handle];
	});

	
	// Snap behaviour
	slider_snap_behaviour = document.getElementById('noui-slider-snap');
	noUiSlider.create(slider_snap_behaviour, {
		start: 400,
		behaviour: 'snap',
		connect: 'lower',
		range: {
			'min':  0,
			'max':  1000
		}
	});
	var slider_snap_behaviour_val = document.getElementById('noui-slider-snap-val');
	slider_snap_behaviour.noUiSlider.on('update', function( values, handle ) {
		slider_snap_behaviour_val.innerHTML = values[handle];
	});


	// Combined options
	slider_combined = document.getElementById('noui-slider-combined');
	noUiSlider.create(slider_combined, {
		start: [ 300, 700 ],
		behaviour: 'drag-tap',
		connect: true,
		range: {
			'min':  00,
			'max':  1000
		}
	});
	var slider_combined_vals = [
		document.getElementById('noui-slider-combined-lower-val'),
		document.getElementById('noui-slider-combined-upper-val')
	];
	slider_combined.noUiSlider.on('update', function( values, handle ) {
		slider_combined_vals[handle].innerHTML = values[handle];
	});

	
	// Slider with pips
	var range_all_sliders = {
		'min': [     0 ],
		'10%': [   100,  100 ],
		'50%': [  500, 100 ],
		'max': [ 1000 ]
	};
	var pips_range = document.getElementById('noui-slider-pips-range');
	noUiSlider.create(pips_range, {
		range: range_all_sliders,
		start: 40,
		connect: 'lower',
		pips: {
			mode: 'range',
			density: 3
		}
	});
	
	
	// Tooltip
	var slider_tooltip = document.getElementById('noui-slider-tooltip');
	noUiSlider.create(slider_tooltip, {
		start: [300, 600],
		tooltips: true,
		connect: true,
		range: {
			'min': 0,
			'max': 1000
		}
	});
	var slider_tooltip_vals = [
		document.getElementById('noui-slider-tooltip-lower-val'),
		document.getElementById('noui-slider-tooltip-upper-val')
	];
	slider_tooltip.noUiSlider.on('update', function( values, handle ) {
		slider_tooltip_vals[handle].innerHTML = values[handle];
	});


	// Connect to lower side
	var slider_connect_lower = document.getElementById('noui-slider-connect-lower');
	noUiSlider.create(slider_connect_lower, {
		start: 400,
		connect: 'lower',
		range: {
		  'min': 0,
		  'max': 1000
		}
	});
	var slider_connect_lower_val = document.getElementById('noui-slider-connect-lower-val');
	slider_connect_lower.noUiSlider.on('update', function( values, handle ) {
		slider_connect_lower_val.innerHTML = values[handle];
	});
	
	
	// Connect to upper side
	var slider_connect_upper = document.getElementById('noui-slider-connect-upper');
	noUiSlider.create(slider_connect_upper, {
		start: 600,
		connect: 'upper',
		range: {
		  'min': 0,
		  'max': 1000
		}
	});
	var slider_connect_upper_val = document.getElementById('noui-slider-connect-upper-val');
	slider_connect_upper.noUiSlider.on('update', function( values, handle ) {
		slider_connect_upper_val.innerHTML = values[handle];
	});
	
	
	// Set minimum handles distance
	var slider_margin = document.getElementById('noui-slider-margin');
	noUiSlider.create(slider_margin, {
		start: [ 300, 600 ],
		connect: true,
		margin: 300,
		range: {
			'min': 0,
			'max': 1000
		}
	});
	var slider_margin_vals = [
		document.getElementById('noui-slider-margin-lower-val'),
		document.getElementById('noui-slider-margin-upper-val')
	];
	slider_margin.noUiSlider.on('update', function( values, handle ) {
		slider_margin_vals[handle].innerHTML = values[handle];
	});


	// Skiping steps
	var slider_skip = document.getElementById('noui-slider-skip-steps');
	noUiSlider.create(slider_skip, {
		range: {
			'min': 0,
			'10%': 100,
			'20%': 200,
			'30%': 300,
			// skipping 400.
			'50%': 500,
			'60%': 600,
			'70%': 700,
			// Skipping 800.
			'90%': 900,
			'max': 1000
		},
		snap: true,
		connect: true,
		start: [200, 700]
	});
	var slider_skip_vals = [
		document.getElementById('noui-slider-skip-lower-val'),
		document.getElementById('noui-slider-skip-upper-val')
	];
	slider_skip.noUiSlider.on('update', function( values, handle ) {
		slider_skip_vals[handle].innerHTML = values[handle];
	});


	// Vertical slider
	var slider_vertical = document.getElementById('noui-slider-values');
	noUiSlider.create(slider_vertical, {
		start: 400,
		orientation: 'vertical',
		range: {
			'min': 0,
			'max': 1000
		}
	});

	
	// Connect to upper side
	var slider_vertical_upper = document.getElementById('noui-slider-upper');
	noUiSlider.create(slider_vertical_upper, {
		start: 400,
		orientation: 'vertical',
		connect: 'upper',
		range: {
			'min': 0,
			'max': 1000
		}
	});

	
	// Connect to lower side
	var slider_vertical_lower = document.getElementById('noui-slider-lower');
	noUiSlider.create(slider_vertical_lower, {
		start: 500,
		orientation: 'vertical',
		connect: 'lower',
		range: {
			'min': 0,
			'max': 1000
		}
	});

	
	// Vertical range
	var slider_range = document.getElementById('noui-slider-vertical-range');
	noUiSlider.create(slider_range, {
		start: [ 300, 700 ],
		orientation: 'vertical',
		connect: true,
		range: {
			'min': 0,
			'max': 1000
		}
	});

	
	// Top to bottom pips
	var slider_pips_top = document.getElementById('noui-slider-top');
	noUiSlider.create(slider_pips_top, {
		range: range_all_sliders,
		start: 400,
		connect: 'lower',
		orientation: 'vertical',
		pips: {
			mode: 'range',
			density: 500
		}
	});


	// Bottom to top pips
	var slider_pips_bottom = document.getElementById('noui-slider-bottom');
	noUiSlider.create(slider_pips_bottom, {
		range: range_all_sliders,
		start: 400,
		connect: 'lower',
		orientation: 'vertical',
		direction: 'rtl',
		pips: {
			mode: 'range',
			density: 500
		}
	});


	// Colors
	var color1 = document.getElementById('noui-slider-color-default'),
		color2 = document.getElementById('noui-slider-color-success'),
		color3 = document.getElementById('noui-slider-color-primary'),
		color4 = document.getElementById('noui-slider-color-warning'),
		color5 = document.getElementById('noui-slider-color-danger'),
		color6 = document.getElementById('noui-slider-color-info');

	var color_options = {
		start: [200, 800],
		connect: true,
		range: {
			'min': 0,
			'max': 1000
		}
	}

	noUiSlider.create(color1, color_options);
	noUiSlider.create(color2, color_options);
	noUiSlider.create(color3, color_options);
	noUiSlider.create(color4, color_options);
	noUiSlider.create(color5, color_options);
	noUiSlider.create(color6, color_options);


	// Slider sizes
	var default_size1 = document.getElementById('slider-default-lg'),
		default_size2 = document.getElementById('slider-default-md'),
		default_size3 = document.getElementById('slider-default-sm'),
		default_size4 = document.getElementById('slider-default-xs');

	noUiSlider.create(default_size1, color_options);
	noUiSlider.create(default_size2, color_options);
	noUiSlider.create(default_size3, color_options);
	noUiSlider.create(default_size4, color_options);

});