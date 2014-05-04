<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dave Scott McCarthy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="keywords" content="Dave, Scott, McCarthy">
	</head>
	<body>
		<section id="section1" class="osx" style="background-color: #000000;">
			<div style="width: 100%; height: 100%;" data-0="background-color:rgba(0,0,0,0);" data-500="background-color:rgba(0,0,0,.75);">
				<div class="container">
					<a href="/" class="nav">< Home</a>
					<div class="hsContainer">
			    		<div class="hsContent" data-0="top: 20vh; opacity: 1;" data-425="top: 5vh; opacity: 0;">
							<h1>OS X 10.10 "Everest"</h1>
							<h3>A Mac OS concept.</h3>
			    		</div>
		        	</div>
	        	</div>
			</div>
		</section>
		<?php
			include('inc/environment.php')
		?>
		<script>
			require(['skrollr'], function(skrollr){
				var s = skrollr.init();
				if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
				    skrollr.init({
				        forceHeight: false
				    });
				}
			});
        </script>
	</body>
</html>