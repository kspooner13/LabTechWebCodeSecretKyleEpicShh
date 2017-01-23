'use strict';

// Date paginator
// ------------------------------

// Basic
$('.datepaginator-default').datepaginator({
	itemWidth: 70,
	navItemWidth: 28
});

// Days format
$('.datepaginator-days-format').datepaginator({
	itemWidth: 70,
	navItemWidth: 28,
	text: 'dddd<br/>Do'
});

// Hide calendar
$('.datepaginator-calendar').datepaginator({
	itemWidth: 70,
	navItemWidth: 28,
	showCalendar: false
});

// Highlight selected date
$('.datepaginator-highlight-selected').datepaginator({
	itemWidth: 70,
	navItemWidth: 28,
	highlightSelectedDate: false
});

// Highlight today's date
$('.datepaginator-highlight-today').datepaginator({
	itemWidth: 70,
	navItemWidth: 28,
	highlightToday: false
});

// Custom item width
$('.datepaginator-item-width').datepaginator({
	itemWidth: 50,
	navItemWidth: 28
});
