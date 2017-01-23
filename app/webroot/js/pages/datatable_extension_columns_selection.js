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

	// Multi-column layout
	$('.datatable-colvis-multi').DataTable({
		buttons: [
			{
				extend: 'colvis',
				text: '<i class="icon-table2 position-left"></i> <span class="caret"></span>',
				className: 'btn bg-success btn-icon',
				collectionLayout: 'fixed three-column'
			}
		]
	});		

	// Launch Uniform styling for checkboxes
	$('.ColVis_Button').addClass('btn btn-success btn-icon').on('click mouseover', function() {
		$('.ColVis_collection input').uniform();
	});

	// Add placeholder to the datatable filter option
	$('.dataTables_filter input[type=search]').attr('placeholder', 'Type to search...');

	// Enable Select2 select for the length option
	$('.dataTables_length select').select2({
		minimumResultsForSearch: Infinity,
		width: 'auto'
	});
});
