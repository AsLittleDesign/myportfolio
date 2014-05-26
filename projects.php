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
    			<a href="/" class="nav"><div class="arrow"></div>Home</a>
				<img src="img/logo.svg" alt="">
				<h3>Projects</h3>
			</div>
		</section>
		<section class="portfolio-group">
			<div class="container">
				<div class="row">
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">OS X 10.10 "Everest"</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/projects/osx/osx_promo.png')">
								<div class="hover-display projects" onclick="window.location = 'osx.php';">
									<h3>OS X 10.10 "Everest"</h3>
									<p>A conceptual redesign of the current Mac OS that shows what it could look like soon.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">More coming soon!</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="">
								<div class="portfolio-placeholder"></div>
							</div>
						</div>
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
		</section>
		<?php
			include('inc/environment.php')
		?>
		<script>
			require(['skrollr'], function(skrollr){
				var s = skrollr.init();
				if(!isMobile()) {
				    skrollr.init({
				        forceHeight: false
				    });
				}
			});
        </script>
	</body>
</html>
