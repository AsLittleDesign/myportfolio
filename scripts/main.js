$(document).ready(function(){

	//escape keybind
	$(document).keyup(function(e){
	    if(e.keyCode === 27)
	        hideLightbox();
	});

	//ui/ux
	$(".uidesign").on("mouseover", function(){
		$("#uidesign").addClass("active");
		$(".break").css("margin-top", "0");
	});
	$(".uidesign").mouseout(function(){
		$("#uidesign").removeClass("active");
		$(".break").css("margin-top", "30px");
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
});
