AOS.init();
var $ = jQuery.noConflict();
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
 $(".carousel").swipe({

   swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

     if (direction == 'left') $(this).carousel('next');
     if (direction == 'right') $(this).carousel('prev');

   },
   allowPageScroll:"vertical"

 });
 ////////////////////////////////////
 $('.carousel').carousel({
  interval: 1000 * 8
});
//////////////////////////////////////
$('#slider').mouseover(function(){
	$('.carousel-control-prev').css("opacity", "1");
	$('.carousel-control-next').css("opacity", "1");
});
$('#slider').mouseleave(function(){
	$('.carousel-control-prev').css("opacity", "0");
	$('.carousel-control-next').css("opacity", "0");
});
//////////////////////////////////////
var position = $(window).scrollTop();
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if(scroll > position) {
			$("#menu-fixo").css("top", "-300px");
    } else {
			if ($(window).scrollTop() > 85) {
				$("#menu-fixo").css("top", "0px");
			} else {
				$("#menu-fixo").css("top", "-300px");
			}
    }
    position = scroll;
});
//////////////////////////////////////
