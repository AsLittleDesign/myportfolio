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
				<h3>UI/UX Design</h3>
			</div>
		</section>
		<section class="portfolio-group">
			<div class="container">
				<div class="row">
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Fist Bump</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/uidesign/fistbump.jpg')">
								<a title="A concept for OS X 10.10. See the full concept in 'Projects'" rel="lightbox" href="img/uidesign/fistbump.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">OS X 10.10 "Everest"</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/projects/osx/osxmockup.png')">
								<a title="A concept for OS X 10.10. See the full concept in 'Projects'" rel="lightbox" href="img/projects/osx/osxmockup.png">
									<div class="lightlink"></div>
								</a>
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
