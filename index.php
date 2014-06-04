<!DOCTYPE html>
<html>
	<head>
		<?php
			include('inc/head.php');
		?>
		<title>Dave Scott Mccarthy</title>
		<meta name="description" content="Learn about Dave and his journey designing and creating artwork!">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<section id="section1">
			<div class="container">
				<a href="/"><img src="img/logo.svg" alt=""></a>
				<a href="http://tencompanies.com/#/" class="blog-link">Blog</a>
			</div>
		</section>
		<section id="section2">
			<div class="container">
				<h2>About Me</h2>
				<p>Hi! I'm a designer from the San Francisco bay area, and I love making cool things. When I got my hands on Adobe Photoshop for the first time about 6 years ago, my life changed forever. Ever since, I have explored many different avenues in design, from photography to illustration. The area I am most passionate about, however, is user interface and user experience design. I invite you to look through my designs, and feel free to contact me about anything. I don't bite!</p>
			</div>
		</section>
		<section class="portfolio-group">
			<div class="container">
				<h2>Portfolio</h2>
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
		<section id="section4">
			<div class="container">
				<h2>Contact Me</h2>
				<div class="col-md-6">
					<h3>Dave Scott McCarthy</h3>
					<a href="mailto:davesmccarthy@gmail.com"><p>davesmccarthy@gmail.com</p></a>
					<a href="https://www.behance.net/davesmdesign"><p>Behance</p></a>
					<a href="http://statecollege.deviantart.com/"><p>DeviantArt</p></a>
					<a href="https://twitter.com/davesmdesign"><p>@davesmdesign</p></a>
					<a href="https://www.facebook.com/davesmdesign"><p>Facebook</p></a>
				</div>
				<div class="col-md-6"></div>
			</div>
		</section>
		<?php
			include('inc/environment.php')
		?>
	</body>
</html>
