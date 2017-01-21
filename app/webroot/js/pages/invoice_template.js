'use strict';

tinymce.init({
  selector: '#editable',
  inline: true,
  toolbar: 'undo redo',
  menubar: false
});
tinymce.init({
  selector: '#editable',
  inline: true,
  plugins: [
	'advlist autolink lists link image charmap print preview anchor',
	'searchreplace visualblocks code fullscreen',
	'insertdatetime media table contextmenu paste'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
});