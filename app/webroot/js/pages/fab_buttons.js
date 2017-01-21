'use strict';

$('.material-button-toggle').on("click",function () {
	$(this).toggleClass('open');
	$('.option').toggleClass('scale-on');
});

$('.fab').hover(function () {
	$(this).toggleClass('active');
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
