'use strict';

$(".btn-pref .btn").on("click",function () {
	$(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
	// $(".tab").addClass("active"); // instead of this do the below 
	$(this).removeClass("btn-default").addClass("btn-primary");   
});