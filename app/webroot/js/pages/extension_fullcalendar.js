'use strict';
$(function() {
	var events = [
		{
			title: 'All Day Event',
			start: '2016-01-01'
		},
		{
			title: 'Long Event',
			start: '2016-01-07',
			end: '2016-01-10'
		},
		{
			id: 999,
			title: 'Repeating Event',
			start: '2016-01-09T16:00:00'
		},
		{
			id: 999,
			title: 'Repeating Event',
			start: '2016-01-16T16:00:00'
		},
		{
			title: 'Conference',
			start: '2016-01-11',
			end: '2016-01-13'
		},
		{
			title: 'Meeting',
			start: '2016-01-12T10:30:00',
			end: '2016-01-12T12:30:00'
		},
		{
			title: 'Lunch',
			start: '2016-01-12T12:00:00'
		},
		{
			title: 'Meeting',
			start: '2016-01-12T14:30:00'
		},
		{
			title: 'Happy Hour',
			start: '2016-01-12T17:30:00'
		},
		{
			title: 'Dinner',
			start: '2016-01-12T20:00:00'
		},
		{
			title: 'Birthday Party',
			start: '2016-01-13T07:00:00'
		},
		{
			title: 'Click for Google',
			url: 'http://google.com/',
			start: '2016-01-28'
		}
	];

	// Basic view
	$('.fullcalendar-basic').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,basicWeek,basicDay'
		},
		defaultDate: '2016-1-1',
		editable: true,
		events: events
	});

	// Agenda view
	$('.fullcalendar-agenda').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		defaultDate: '2016-1-12',
		defaultView: 'agendaWeek',
		editable: true,
		events: events
	});	

	// External events
	// Add switcher for events removal
	var remove = document.querySelector('.switch');
	var removeInit = new Switchery(remove);

	// Initialize the calendar
	$('.fullcalendar-external').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		editable: true,
		defaultDate: '2016-1-1',
		events: events,
		lang: 'en',
		droppable: true, // this allows things to be dropped onto the calendar
			drop: function() {
			if ($('#drop-remove').is(':checked')) { // is the "remove after drop" checkbox checked?
				$(this).remove(); // if so, remove the element from the "Draggable Events" list
			}
		}
	});

	// Initialize the external events
	$('#external-events .fc-event').each(function() {

		// Different colors for events
		$(this).css({'backgroundColor': $(this).data('color'), 'borderColor': $(this).data('color')});

		// Store data so the calendar knows to render an event upon drop
		$(this).data('event', {
			title: $.trim($(this).html()), // use the element's text as the event title
			color: $(this).data('color'),
			stick: true // maintain when user navigates (see docs on the renderEvent method)
		});

		// Make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 999,
			revert: true, // will cause the event to go back to its
			revertDuration: 0 // original position after the drag
		});
	});			
});
