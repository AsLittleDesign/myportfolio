<!DOCTYPE html>
<html>
	<head>
		<?php
			include('inc/head.php');
		?>
		<title>Dave Scott Mccarthy</title>
	</head>
	<body>
		<section id="section1">
			<div class="container">
				<div class="hsContainer">
		    		<div class="hsContent" data-0="top: 20vh; opacity: 1;" data-425="top: 5vh; opacity: 0;">
						<img src="img/logo.svg" alt="">
						<h3>UI & UX Designer</h3>
		    		</div>
	        	</div>
			</div>
		</section>
		<section id="section2 skrollr-body">
			<div class="container">
				<div class="portfolio-group">
					<h1>Recent Projects</h1>
					<div class="row">
						<div class="col-md-4 portfolio-piece">
							<div class="portfolio-pic" style="background-image: url('img/osx_promo.png')">
								<div class="hover-display" onclick="window.location = 'osx.php';">
									<h3>OS X 10.10 "Everest"</h3>
									<p>A conceptual redesign of the current Mac OS that shows what it could look like soon.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 portfolio-piece">
							<div class="portfolio-pic" style="background-position: 50%; background-image: url('img/fistbump_promo.png')">
								<div class="hover-display" onclick="window.location = 'newurl.php';">
									<h3>Fist Bump</h3>
									<p>An application based on the idea that it should be fast and easy to connect with friends.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 portfolio-piece">
							<div class="portfolio-pic" style="">
								<h3 class="portfolio-placeholder">More coming soon!</h3>
							</div>
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
			if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
			    skrollr.init({
			        forceHeight: false
			    });
			}
		});
        </script>
	</body>
</html>
