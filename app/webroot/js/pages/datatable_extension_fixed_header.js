$(function() {
	'use strict';
	$.extend( $.fn.dataTable.defaults, {
		autoWidth: false,
		dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
		language: {
			search: '<span>Filter:</span> _INPUT_',
			lengthMenu: '<span>Show:</span> _MENU_',
			paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
		},
		lengthMenu: [ 20, 50, 75, 100 ],
		displayLength: 20
	});

	// Basic initialization
	var table_basic = $('.datatable-header-basic').DataTable({
		fixedHeader: true
	});

	// Add placeholder to the datatable filter option
	$('.dataTables_filter input[type=search]').attr('placeholder','Type to search...');

	// Enable Select2 select for the length option
	$('.dataTables_length select').select2({
		minimumResultsForSearch: Infinity,
		width: 'auto'
	});
});
