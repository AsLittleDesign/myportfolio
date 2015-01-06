$(document).ready(function(){

	//escape keybind
	$(document).keyup(function(e){
	    if(e.keyCode === 27)
	        hideLightbox();
	});

	$("#lightbox").click(function(){
		hideLightbox();
	});

	$(".hover-display").on("mouseover", function(){
		$(this).find(".description").addClass("active");
		$(this).parent(".portfolio-pic").addClass("active");
	})
	$(".hover-display").mouseout(function(){
		$(this).find(".description").removeClass("active");
		$(this).parent(".portfolio-pic").removeClass("active");
	})

	//davesmdesign redirect
	var url = window.location;
	if (url == "http://www.davesmdesign.com/" || url == "http://davesmdesign.com/") {
		url.href = "http://www.davesmccarthy.com/";
	}

	// Squares
	var width = $(".portfolio-pic").width();
	$(".portfolio-pic").css("height", width);
	// Description
	$(".description").css("top", -width);
	
	// Social links
	$(".social-hover").on("mouseover", function(){
		$(this).parent(".network").addClass("active");
	})
	$(".social-hover").mouseout(function(){
		$(this).parent(".network").removeClass("active");
	})

	// Section padding
	var hasPortfolio = $(".portfolio-group");
	if (hasPortfolio.length >= 1) {
		var padding = $(".portfolio-group > .container").css("margin");
		var padding = padding.split(" ");
		var padding = padding[padding.length - 1];
		var padding = parseFloat(padding);
		$(".portfolio-group").css("padding-top", padding * .5 + "px");
		$(".portfolio-group").css("padding-bottom", padding * .5 + "px");
	}

	// Nav parallax
	$(window).bind('scroll',function(e){
		var homeLocation = window.location.href;
		var homeLocation = homeLocation.split("/");
		var homeLocation = homeLocation[homeLocation.length - 1];
	    if (homeLocation == "") {
		    parallaxScroll();
		}
	});

	function parallaxScroll(){
	    var scrolled = $(window).scrollTop();
	    var height = $(window).height();
	    $('.parallax-nav').css('opacity', scrolled / height);
	};

	$('.scroll').click(function(){
	    $("html, body").animate({ 
	    	scrollTop: $(window).height()
	    }, 600);
	});

	$(".line-container").click(function(){
		$(".line-icon, .portfolio-group, .nav-group, .x-container, .line-container").toggleClass('active');
	});

	// WORKAROUND: converting 90vh to px
	var element = $('.splash');
	function fixMobileSafariViewport() {
	  $element.css('height', window.innerHeight * 0.9);
	}
	// listen to portrait/landscape changes
	window.addEventListener('orientationchange', fixMobileSafariViewport, true);
	fixMobileSafariViewport();

	var IS_MOBILE_SAFARI_7 = !!navigator.userAgent.match(/i(Pad|Phone|Pod).+(Version\/7\.\d+ Mobile)/i);
});
