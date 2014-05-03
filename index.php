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
		<section id="section1">
			<div class="container">
				<div class="hsContainer">
		    		<div class="hsContent" sty data-0="top: 20vh; opacity: 1;" data-500="top: 5vh; opacity: 0;">
						<img src="img/logo.svg" alt="">
						<h3>UI & UX Designer</h3>
		    		</div>
	        	</div>
	        	<div id="diamond" data-0="top: 45vh" data-300="top: 30vh;"></div>
			</div>
		</section>
		<section id="section2">
			<div class="container">
				<div class="portfolio-group">
					<div class="row">
						<div class="col-md-4 portfolio-piece">
							<div class="portfolio-pic" style="background-image: url('img/osx_promo.png')"></div>
						</div>
						<div class="col-md-4 portfolio-piece">
							<div class="portfolio-pic" style="background-position: 50%; background-image: url('img/fistbump_promo.png')"></div>
						</div>
						<div class="col-md-4 portfolio-piece">
							<div class="portfolio-pic" style=""></div>
						</div>
					</div>
					<div class="row break">
						<div class="col-md-4 portfolio-piece">
							<div class="portfolio-pic" style=""></div>
						</div>
						<div class="col-md-4 portfolio-piece">
							<div class="portfolio-pic" style=""></div>
						</div>
						<div class="col-md-4 portfolio-piece">
							<div class="portfolio-pic" style=""></div>
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
		});
        </script>
	</body>
</html>
