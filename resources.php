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
				<a href="/"><img src="img/logo.svg" alt=""><a>
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li class="active">Open Resources</li>
				</ol>
			</div>
		</section>
		<section class="portfolio-group">
			<div class="container">
				<div class="row">
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Vector iPhone Mockups</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/resources/iphone.png')">
								<div class="hover-display resources" onclick="window.location = 'iphone.php';">
									<h3>Vector iPhone Mockups</h3>
									<p>Renderings of an iPhone 5s done in Illustrator and downloadable in a .ai format.</p>
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
			</div>
		</section>
		<?php
			include('inc/environment.php')
		?>
	</body>
</html>
