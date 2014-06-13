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
				<?php
					include('inc/nav.php');
				?>
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li class="active">Projects</li>
				</ol>
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
