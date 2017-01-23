'use strict';

// Single image slider
$("#single-image-slider").owlCarousel({
	navigation : true,
	slideSpeed : 300,
	paginationSpeed : 400,
	singleItem : true
});

// Multiple images
$("#multiple-images").owlCarousel({
	autoPlay: 3000,
	items : 4,
	itemsDesktop : [1199,3],
	itemsDesktopSmall : [979,3]
});

// Custom Options with Events
var owl = $("#custom-options");
owl.owlCarousel({
	items : 10, //10 items above 1000px browser width
	itemsDesktop : [1000,5], //5 items between 1000px and 901px
	itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
	itemsTablet: [600,2], //2 items between 600 and 0;
	itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
});

// Custom Navigation Events
$(".next").on("click",function(){
	owl.trigger('owl.next');
})
$(".prev").on("click",function(){
	owl.trigger('owl.prev');
})
$(".play").on("click",function(){
	owl.trigger('owl.play',1000);
})
$(".stop").on("click",function(){
	owl.trigger('owl.stop');
})


// Lazy load
$("#lazy-load").owlCarousel({
	items : 4,
	lazyLoad : true,
	navigation : false
});

// Single image with auto height
$("#single-item-auto-height").owlCarousel({
	autoPlay : 3000,
	stopOnHover : false,
	navigation:false,
	paginationSpeed : 1000,
	goToFirstSpeed : 2000,
	singleItem : true,
	autoHeight : true,
	transitionStyle:"fade"
});
