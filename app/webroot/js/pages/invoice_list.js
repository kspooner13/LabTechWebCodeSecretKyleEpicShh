'use strict';

$(function() {
	$('.styled').uniform();
});
$(function() {

	// Table setup
	// ------------------------------

	// Initialize
	$('.invoice-list').DataTable({
		autoWidth: false,
		columnDefs: [
			{
				width: '100px',
				targets: 0
			},
			{ 
				orderable: false,
				width: '100px',
				targets: 6
			},
			{
				width: '12%',
				targets: [1, 3, 4]
			},
			{
				width: '10%',
				targets: 5
			}
		],
		order: [[ 0, 'desc' ]],
		dom: '<"datatable-header"fl><"datatable-scroll-lg"t><"datatable-footer"ip>',
		language: {
			search: '<span>Search:</span> _INPUT_',
			lengthMenu: '<span>Show:</span> _MENU_',
			paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
		},
		lengthMenu: [ 25, 50, 75, 100 ],
		displayLength: 25,
		drawCallback: function ( settings ) {
			var api = this.api();
			var rows = api.rows( {page:'current'} ).nodes();
			var last=null;
 
			

			$('.select').select2({
				width: '150px',
				minimumResultsForSearch: Infinity
			});

			$(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
		},
		preDrawCallback: function(settings) {
			$(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
			$('.select').select2().select2('destroy');
		}
	});


	// External table additions
	// ------------------------------

	// Add placeholder to the datatable filter option
	$('.dataTables_filter input[type=search]').attr('placeholder','Type to filter...');

	// Enable Select2 select for the length option
	$('.dataTables_length select').select2({
		minimumResultsForSearch: Infinity,
		width: 'auto'
	});						
});
