$(document).ready(function(){

	//escape keybind
	$(document).keyup(function(e){
	    if(e.keyCode === 27)
	        hideLightbox();
	});

	//ui/ux
	$(".uidesign").on("mouseover", function(){
		$("#uidesign").addClass("active");
	});
	$(".uidesign").mouseout(function(){
		$("#uidesign").removeClass("active");
	})

	//graphic design
	$(".graphicdesign").on("mouseover", function(){
		$("#graphicdesign").addClass("active");
	});
	$(".graphicdesign").mouseout(function(){
		$("#graphicdesign").removeClass("active");
	})

	//photography
	$(".photography").on("mouseover", function(){
		$("#photography").addClass("active");
	});
	$(".photography").mouseout(function(){
		$("#photography").removeClass("active");
	})

	//illustration
	$(".illustration").on("mouseover", function(){
		$("#illustration").addClass("active");
	});
	$(".illustration").mouseout(function(){
		$("#illustration").removeClass("active");
	})

	//projects
	$(".projects").on("mouseover", function(){
		$("#projects").addClass("active");
	});
	$(".projects").mouseout(function(){
		$("#projects").removeClass("active");
	})

	//open resources
	$(".resources").on("mouseover", function(){
		$("#resources").addClass("active");
	});
	$(".resources").mouseout(function(){
		$("#resources").removeClass("active");
	})

	//davesmdesign redirect
	var url = window.location;
	if (url == "http://www.davesmdesign.com/" || url == "http://davesmdesign.com/") {
		window.location.href = "http://www.davesmccarthy.com/";
	}
});
