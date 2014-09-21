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

	// Side Nav
	$(".open-nav").click(function(){
		$(".nav-group").toggleClass("active");
		$(".open-nav").toggleClass("active");
		$(".nav-line").toggleClass("active");
		$(".full-nav").toggleClass("active");

		//Side Nav Links Animation 
		$(".nav-list-item").each(function(i){
			var listItem = $(this);
			setTimeout(function(){
				listItem.toggleClass("active");
			}, i * 200);
		});
	})
	
	$(".social-hover").on("mouseover", function(){
		$(this).parent(".network").addClass("active");
	})
	$(".social-hover").mouseout(function(){
		$(this).parent(".network").removeClass("active");
	})
});
