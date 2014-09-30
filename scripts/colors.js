$(document).ready(function() {
	$(document).click(function(e) {
		ripple(e);
	});

	var color = 0;
	function colorPick() {
		var colorNumber = Math.random();
		switch(true) {
			case (colorNumber < .1):
				color = "#3498db";
				break;
			case ((colorNumber >= .1) && (colorNumber < .2)):
				color = "#1abc9c";
				break;
			case ((colorNumber >= .2) && (colorNumber < .3)):
				color = "#2ecc71";
				break;
			case ((colorNumber >= .3) && (colorNumber < .4)):
				color = "#a264bb";
				break;
			case ((colorNumber >= .4) && (colorNumber < .5)):
				color = "#f1c40f";
				break;
			case ((colorNumber >= .5) && (colorNumber < .6)):
				color = "#e67e22";
				break;
			case ((colorNumber >= .6) && (colorNumber < .7)):
				color = "#e74c3c";
				break;
			case ((colorNumber >= .7) && (colorNumber < .8)):
				color = "#c0392b";
				break;
			case ((colorNumber >= .8) && (colorNumber < .9)):
				color = "#7f8c8d";
				break;
			case ((colorNumber >= .9) && (colorNumber <= 1)):
				color = "#2980b9";
				break;
		};
	};

	function ripple(e) {
		var x = e.pageX;
		var y = e.pageY;
		// colorPick(); Un-comment to randomize colors
		color = "#3498db";
		var div = "<div class='ripple-container' style='top:" + (y - 100) + "px; left:" + (x - 100) + "px;'><div class='ripple' style='border-color:" + color + "'></div></div>"
		$("body").append(div);
		console.log(color);
		setTimeout(function(){
			$(".ripple-container").fadeOut(function(){
				$(this).remove();
			});
		},800);
	};
});