'use strict';

function swal_basic(){
	swal("Here's a message!");
};

function swal_subheading(){
	swal("Here's a message!", "It's pretty, isn't it?")
};

function swal_success_message(){
	swal("Good job!", "You clicked the button!", "success");
};

function swal_warning_message(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: 'btn-danger',
		confirmButtonText: 'Yes, delete it!',
		closeOnConfirm: false,
		//closeOnCancel: false
	},
	function(){
	    swal("Deleted!", "Your imaginary file has been deleted!", "success");
	});
};

function swal_cancel(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: 'btn-danger',
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: "No, cancel please!",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
		if (isConfirm){
			swal("Deleted!", "Your imaginary file has been deleted!", "success");
		} else {
			swal("Cancelled", "Your imaginary file is safe :)", "error");
		}
	});
};

function swal_custom_icon(){
	swal({
		title: "Sweet!",
		text: "Here's a custom image.",
		imageUrl: 'assets/images/assets/thumbs-up-1.png'
	});
};

function swal_prompt(){
	swal({
		title: "An input!",
		text: "Write something interesting:",
		type: "input",
		showCancelButton: true,
		closeOnConfirm: false,
		animation: "slide-from-top",
		inputPlaceholder: "Write something"
	}, 
	function (inputValue) {
		if (inputValue === false) return false;
		if (inputValue === "") {
			swal.showInputError("You need to write something!");
			return false
		}
		swal("Nice!", "You wrote: " + inputValue, "success");
	});
};

function swal_ajax(){
	 swal({
		title: "Ajax request example",
		text: "Submit to run ajax request",
		type: "info",
		showCancelButton: true,
		closeOnConfirm: false,
		showLoaderOnConfirm: true
	}, 
	function () {
		setTimeout(function () {
			swal("Ajax request finished!");
		}, 4000);
	});
};

function swal_html(){
	swal({
		title: '<h4>This is Using HTML!</h4>',
		text: 'This is a <a href="#">link</a>',
		html: true
	});
};

function swal_external(){
	var getLink = $(this).attr('href');
	swal({
		title: 'You&#39;re Leaving This Site!',
		text: 'This is a link to an external site. Click OK to continue to the content (' + getLink + ').',
		html: true,
		showCancelButton: true,
	},
	function(){
		setTimeout(function () {
			window.open(getLink,'_blank')
		}, 4000);
	});
	return false;
};

function swal_primary(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "info",
		showCancelButton: true,
		confirmButtonClass: 'btn-primary',
		confirmButtonText: 'Primary!'
	});
};

function swal_info(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "info",
		showCancelButton: true,
		confirmButtonClass: 'btn-info',
		confirmButtonText: 'Info!'
	});
};

function swal_success(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "success",
		showCancelButton: true,
		confirmButtonClass: 'btn-success',
		confirmButtonText: 'Success!'
	});
};

function swal_warning(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: 'btn-warning',
		confirmButtonText: 'Warning!'
	});
};

function swal_danger(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "error",
		showCancelButton: true,
		confirmButtonClass: 'btn-danger',
		confirmButtonText: 'Danger!'
	});
};