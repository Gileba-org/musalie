jQuery(function ($) {
	var $hamburger = $(".hamburger");
	var $offcanvas = $(".offcanvas");

	$(".hamburger").click(function () {
		$(".hamburger").toggleClass("is-active");
		$(".offcanvas").toggleClass("is-active");
	});
});
