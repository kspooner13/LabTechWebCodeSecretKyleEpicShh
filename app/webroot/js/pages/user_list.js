'use strict';

$(function() {
	$('.styled').uniform();
});
$(function() {

	// Table setup
	// ------------------------------

	// Initialize
	$('.user-list').DataTable({
		autoWidth: false,
		order: [[ 0, 'asc' ]],
		dom: '<"datatable-header"fl><"datatable-scroll-lg"t><"datatable-footer"ip>',
		language: {
			search: '<span>Search:</span> _INPUT_',
			lengthMenu: '<span>Show:</span> _MENU_',
			paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
		},
		lengthMenu: [ 5, 10, 15, 25, 50, 75, 100 ],
		displayLength: 15,				
	});
	
	$('.dataTables_filter input[type=search]').attr('placeholder','Type to filter...');

	$('.dataTables_length select').select2({
		minimumResultsForSearch: Infinity,
		width: '60px'
	});				
});