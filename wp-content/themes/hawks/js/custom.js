AOS.init();
//////////////////////////////////////////
( function($) {
	$(document).ready(menu);
	function menu() {
		$('.navbar-toggler, #overlay-nav').on('click', function() {
			$('.navbar-toggler').toggleClass('active');
			$('#top, #middle, #bottom').toggleClass('active');
			$('#overlay-nav').toggleClass('active');
		});
	}
} )
( jQuery );
/////////////////////////////////////////
$(function () { $('[data-toggle="tooltip"]').tooltip() });
/////////////////////////////////////////
function topFunction() {
	const scrollToTop = () => {
		const c = document.documentElement.scrollTop || document.body.scrollTop;
		if (c > 0) {
			window.requestAnimationFrame(scrollToTop);
			window.scrollTo(0, c - c / 8);
		}
	};
	scrollToTop();
}
////////////////////////////////////////
$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
	if (
		location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
		&&
		location.hostname == this.hostname
		) {
		var target = $(this.hash);
	target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	if (target.length) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: target.offset().top
		}, 1000, function() {
			var $target = $(target);
			$target.focus();
			if ($target.is(":focus")) {
				return false;
			} else {
				$target.attr('tabindex','-1');
				$target.focus();
			};
		});
	}
}
});
 /////////////////////////////////////
 $(window).on("scroll", function() {
 	var scrollPos = $(window).scrollTop();
 	if (scrollPos <= 150) {
 		$("#myBtn").fadeOut();
 	} else {
 		$("#myBtn").fadeIn();
 	}
 });
 /////////////////////////////////////
