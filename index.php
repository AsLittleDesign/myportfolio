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
				<img src="img/logo2.svg" alt="">
			</div>
		</section>
		<section class="portfolio-group">
			<div class="container">
				<div class="row">
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">UI/UX Design</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/uidesign/thumb/fistbump.jpg')">
								<div class="hover-display uidesign" onclick="window.location = 'uidesign.php';">
									<h3>UI/UX Design</h3>
									<p>A variety of interface designs.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Graphic Design</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/graphicdesign/thumb/skrillex.jpg')">
								<div class="hover-display graphicdesign" onclick="window.location = 'design.php';">
									<h3>Graphic Design</h3>
									<p>A variety of design pieces from logos to icons.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Photography</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/thumb/bleedingsoftly.jpg')">
								<div class="hover-display photography" onclick="window.location = 'photography.php';">
									<h3>Photography</h3>
									<p>Some photography and photo compositing pieces of mine that I've done.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row break">
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Illustration</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/jobs.jpg')">
								<div class="hover-display illustration" onclick="window.location = 'illustration.php';">
									<h3>Illustration</h3>
									<p>A collection of illustration pieces of mine.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Projects</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/projects/osx/osx_promo.png')">
								<div class="hover-display projects" onclick="window.location = 'projects.php';">
									<h3>Projects</h3>
									<p>An in-depth look at some of my designs.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Open Resources</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/resources/iphone.png')">
								<div class="hover-display resources" onclick="window.location = 'resources.php';">
									<h3>Open Resources</h3>
									<p>Resources I created for designers that are free to use for personal and commercial use.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
			include('inc/environment.php')
		?>
	</body>
</html>
