'use strict';

$(function() {
	$('.styled').uniform();
});
$(function() {

	// DataTable setup			
	$('.datatable').DataTable({
		autoWidth: false,
		columnDefs: [
			{
				width: '30px',
				targets: 0
			},
			{						
				targets: 1
			},
			{ 
				orderable: false,
				width: '100px',
				targets: 5
			},
			{
				width: '15%',
				targets: [3, 4]
			}					
		],
		order: [[ 0, 'desc' ]],
		dom: '<"datatable-header"fl><"datatable-scroll-lg"t><"datatable-footer"ip>',
		language: {
			search: '<span>Search:</span> _INPUT_',
			lengthMenu: '<span>Show:</span> _MENU_',
			paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
		},
		lengthMenu: [ 5, 10, 25, 50, 75, 100 ],
		displayLength: 5,				
	});
	
	$('.dataTables_filter input[type=search]').attr('placeholder','Type to filter...');

	$('.dataTables_length select').select2({
		minimumResultsForSearch: Infinity,
		width: '60px'
	});
});
