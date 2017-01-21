$(function() {
	'use strict';
	
	tinymce.init({
	  selector: '.basic-editor',
	  height: 200,
	  menubar: false,		  
	  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	  content_css: [
		'//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
		'//www.tinymce.com/css/codepen.min.css'
	  ]
	});
	
	$("#tab-email").addClass(" active");
	$("#tab-menu").removeClass(" active");
	$("#menu").removeClass(" fadeIn active");
	$("#menu").addClass(" fade");
	$("#email").addClass(" active fadeIn");
	$("#email").removeClass(" fade");

	// Primary file input
	$(".file-styled-primary").uniform({
		wrapperClass: 'bg-primary',
		fileButtonHtml: 'Browse files'
	});
});