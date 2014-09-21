<!DOCTYPE html>
<html>
	<head>
		<?php
			include('inc/head.php');
		?>
		<title>Dave Scott Mccarthy</title>
	</head>
	<body>
		<?php
			include('inc/nav.php');
		?>
		<section class="portfolio-group">
			<div class="container">
				<div class="row">
					<div class="col-md-4 portfolio-piece">
						<div class="portfolio-pic" style="background-image: url('img/uidesign/thumb/fistbump.jpg')">
							<div class="hover-display" onclick="window.location = 'uidesign.php';">
								<div class="hide-hover">
									<div class="description">
										<h3 class="portfolio-title">User Interface Design</h3>
										<p>A variety of unique, and interesting interface designs either commissioned, or just for fun.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<div class="portfolio-pic" style="background-image: url('img/graphicdesign/thumb/skrillex.jpg')">
							<div class="hover-display" onclick="window.location = 'design.php';">
								<div class="hide-hover">
									<div class="description">
										<h3 class="portfolio-title">Graphic Design</h3>
										<p>A few random and crazy graphic design pieces varying from logos, to graphics.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<div class="portfolio-pic" style="background-image: url('img/photography/thumb/bleedingsoftly.jpg')">
							<div class="hover-display" onclick="window.location = 'photography.php';">
								<div class="hide-hover">
									<div class="description">
										<h3 class="portfolio-title">Photography</h3>
										<p>Some photography and photo compositing pieces that Dave's done over time.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 portfolio-piece">
						<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/jobs.jpg')">
							<div class="hover-display" onclick="window.location = 'illustration.php';">
								<div class="hide-hover">
									<div class="description">
										<h3 class="portfolio-title">Illustration</h3>
										<p>A collection of illustration pieces done with mediums varying from Photoshop, to charcoal.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<div class="portfolio-pic" style="background-image: url('img/projects/thumb/osx.png')">
							<div class="hover-display" onclick="window.location = 'projects.php';">
								<div class="hide-hover">
									<div class="description">
										<h3 class="portfolio-title">Projects</h3>
										<p>An in-depth look at some of Dave's designs to help show his thought process.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<div class="portfolio-pic" style="background-image: url('img/resources/iphone.png')">
							<div class="hover-display" onclick="window.location = 'resources.php';">
								<div class="hide-hover">
									<div class="description">
										<h3 class="portfolio-title">Open Resources</h3>
										<p>Resources created for designers that are free to use for personal and commercial use.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="section2">
			<div class="container wider-container">
				<div class="about-container">
					<img src="img/self.png" class="self" alt="">
					<h3>Dave Scott McCarthy</h3>
					<p>Always an artist at heart, Dave has studied and practiced various practices for almost a decade. His passion lies in the design of interfaces, and how people use them. The beauty of designing something useful, something people will use over, and over is incredible. If you have any inquiries, or just want to chat, just shoot him an email!</p>
					<a href="mailto:davesmccarthy@gmail.com">
						<img src="img/mail.svg" alt="">davesmccarthy@gmail.com
					</a>
					<a href="https://twitter.com/davesmdesign">
						<img src="img/twitter.svg" alt="">@davesmdesign
					</a>
					<a href="https://www.facebook.com/davesmdesign">
						<img src="img/facebook.svg" alt="">Facebook
					</a>
					<a href="http://statecollege.deviantart.com/">
						<img src="img/deviantart.svg" alt="">DeviantArt
					</a>
					<a href="https://www.behance.net/davesmdesign">
						<img src="img/behance.svg" alt="">Behance
					</a>
				</div>
			</div>
		</section>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<?php
			include ('inc/ga.php')
		?>
	</body>
</html>
