'use strict';

$("#btn-contacts").on("click",function () {
	$("#groups").css({ 'display': "none" });
	$("#group").css({ 'display': "none" });
	
	$("#contacts").fadeIn('slow');
	$("#contact").fadeIn('slow');
	
	$("#circles").css("display","none");
	$("#circle").css("display","none");
	
	$("#btn-groups").removeClass('active');
	$("#btn-circles").removeClass('active');
	$(this).addClass(' active');
});


$("#btn-groups").on("click",function () {
	$("#groups").fadeIn('slow');
	$("#group").fadeIn('slow');
	
	$("#contacts").css("display","none");
	$("#contact").css("display","none");
	
	$("#circles").css("display","none");
	$("#circle").css("display","none");
	
	$("#btn-contacts").removeClass('active');
	$("#btn-circles").removeClass('active');
	$(this).addClass(' active');
});

$("#btn-circles").on("click",function () {
	$("#groups").css({ 'display': "none" });
	$("#group").css({ 'display': "none" });
	
	$("#contacts").css("display","none");
	$("#contact").css("display","none");
	
	$("#circles").fadeIn('slow');
	$("#circle").fadeIn('slow');
	
	$("#btn-contacts").removeClass('active');
	$("#btn-groups").removeClass('active');
	$(this).addClass(' active');
});
