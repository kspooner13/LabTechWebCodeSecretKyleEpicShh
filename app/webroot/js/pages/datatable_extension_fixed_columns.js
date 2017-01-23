$(function() {
	'use strict';
	$.extend( $.fn.dataTable.defaults, {
		columnDefs: [{ 
			orderable: false,
			width: '100px',
			targets: [ 10 ]
		}],
		dom: '<"datatable-header"fl><"datatable-scroll datatable-scroll-wrap"t><"datatable-footer"ip>',
		language: {
			search: '<span>Filter:</span> _INPUT_',
			lengthMenu: '<span>Show:</span> _MENU_',
			paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
		}
	});

	// Left fixed column example
	$('.datatable-fixed-left').DataTable({
		columnDefs: [					
			{ 
				width: "200px",
				targets: [0]
			},
			{ 
				width: "300px",
				targets: [1]
			},
			{ 
				width: "200px",
				targets: [5, 6]
			},
			{ 
				width: "100px",
				targets: [4]
			}
		],
		scrollX: true,
		scrollY: '350px',
		scrollCollapse: true,
		fixedColumns: true
	});

	// Adjust columns on window resize
	setTimeout(function() {
		$(window).on('resize', function () {
			table.columns.adjust();
		});
	}, 100);

	// Add placeholder to the datatable filter option
	$('.dataTables_filter input[type=search]').attr('placeholder','Type to search...');

	// Enable Select2 select for the length option
	$('.dataTables_length select').select2({
		minimumResultsForSearch: Infinity,
		width: 'auto'
	});
});
