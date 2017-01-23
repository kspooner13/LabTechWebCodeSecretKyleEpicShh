'use strict';
// Basic Example
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

// Full featured example
tinymce.init({
  selector: '#full-featured',
  height: 500,
  theme: 'modern',
  plugins: [
	'advlist autolink lists link image charmap print preview hr anchor pagebreak',
	'searchreplace wordcount visualblocks visualchars code fullscreen',
	'insertdatetime media nonbreaking save table contextmenu directionality',
	'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
  templates: [
	{ title: 'Test template 1', content: 'Test 1' },
	{ title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
	'//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
	'//www.tinymce.com/css/codepen.min.css'
  ]
 });
 
 // Inline editor example
 tinymce.init({
  selector: 'h2.editable',
  inline: true,
  toolbar: 'undo redo',
  menubar: false
});

tinymce.init({
  selector: 'div.editable',
  inline: true,
  plugins: [
	'advlist autolink lists link image charmap print preview anchor',
	'searchreplace visualblocks code fullscreen',
	'insertdatetime media table contextmenu paste'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
});

// Image tools example
tinymce.init({
  selector: '#image-tools',
  height: 500,
  plugins: [
		"advlist autolink lists link image charmap print preview anchor",
		"searchreplace visualblocks code fullscreen",
		"insertdatetime media table contextmenu paste imagetools"
	],
	toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
  content_css: [
	'//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
	'//www.tinymce.com/css/codepen.min.css'
  ]
});