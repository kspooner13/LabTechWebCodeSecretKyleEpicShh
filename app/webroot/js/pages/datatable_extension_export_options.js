$(function() {
	'use strict';
	$.extend( $.fn.dataTable.defaults, {
		autoWidth: false,
		dom: '<"datatable-header"fBl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
		language: {
			search: '<span>Filter:</span> _INPUT_',
			lengthMenu: '<span>Show:</span> _MENU_',
			paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
		}
	});

	// Basic initialization
	$('.datatable-button-init-basic').DataTable({
		buttons: {
			dom: {
				button: {
					className: 'btn btn-primary'
				}
			},
			buttons: [
				{extend: 'copy', className: 'copyButton' },
				{extend: 'csv', className: 'csvButton' },
				{extend: 'excel', className: 'excelButton' },
				{extend: 'pdf', className: 'pdfButton' },
				{extend: 'print', className: 'printButton' }
			]
		}
	});

	// Add placeholder to the datatable filter option
	$('.dataTables_filter input[type=search]').attr('placeholder','Type to search...');

	// Enable Select2 select for the length option
	$('.dataTables_length select').select2({
		minimumResultsForSearch: Infinity,
		width: 'auto'
	});
});
