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
				<?php
					include('inc/nav.php');
				?>
				<ol class="breadcrumb">
					<li class="active">Home</li>
				</ol>
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
								</div>
							</div>
							<p id="uidesign" class="description">A variety of interface designs.</p>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Graphic Design</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/graphicdesign/thumb/skrillex.jpg')">
								<div class="hover-display graphicdesign" onclick="window.location = 'design.php';">
								</div>
							</div>
							<p id="graphicdesign" class="description">A variety of design pieces from logos to icons.</p>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Photography</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/thumb/bleedingsoftly.jpg')">
								<div class="hover-display photography" onclick="window.location = 'photography.php';">
								</div>
							</div>
							<p id="photography" class="description">Some photography and photo compositing pieces of mine that I've done.</p>
						</div>
					</div>
				</div>
				<div class="row break">
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Illustration</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/jobs.jpg')">
								<div class="hover-display illustration" onclick="window.location = 'illustration.php';">
								</div>
							</div>
							<p id="illustration" class="description">A collection of illustration pieces of mine.</p>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Projects</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/projects/osx/osx_promo.png')">
								<div class="hover-display projects" onclick="window.location = 'projects.php';">
								</div>
							</div>
							<p id="projects" class="description">An in-depth look at some of my designs.</p>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Open Resources</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/resources/iphone.png')">
								<div class="hover-display resources" onclick="window.location = 'resources.php';">
								</div>
							</div>
							<p id="resources" class="description">Resources I created for designers that are free to use for personal and commercial use.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="section2">
			<div class="container">
				<div class="about-container">
					<div class="col-md-2">
						<img src="img/self.png" class="self" alt="">
					</div>
					<div class="col-md-10">
						<h3>About Me</h3>
						<p>Hi! My name's Dave. I'm a designer from the San Francisco bay area, and I love making cool things. When I got my hands on Photoshop for the first time about 6 years ago, my life changed forever. Ever since, I have explored many different avenues in design, from photography to illustration. The area I am most passionate about, however, is user interface and user experience design. I invite you to look through my designs, and feel free to contact me about anything. I don't bite!</p>
					</div>
				</div>
			</div>
		</section>
		<section id="section4">
			<div class="container">
				<div class="col-md-4">
					<div class="list-group">
						<a class="list-group-item" href="mailto:davesmccarthy@gmail.com">
							<img src="img/mail.svg" alt="">davesmccarthy@gmail.com
						</a>
						<a class="list-group-item" href="https://twitter.com/davesmdesign">
							<img src="img/twitter.svg" alt="">@davesmdesign
						</a>
						<a class="list-group-item" href="https://www.facebook.com/davesmdesign">
							<img src="img/facebook.svg" alt="">Facebook
						</a>
						<a class="list-group-item" href="http://statecollege.deviantart.com/">
							<img src="img/deviantart.svg" alt="">DeviantArt
						</a>
						<a class="list-group-item" href="https://www.behance.net/davesmdesign">
							<img src="img/behance.svg" alt="">Behance
						</a>
					</div>
				</div>
				<div class="col-md-8">
					<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/davesmdesign" data-widget-id="477014420577456128">Tweets by @davesmdesign</a>
				</div>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</section>
		<?php
			include('inc/environment.php')
		?>
	</body>
</html>
