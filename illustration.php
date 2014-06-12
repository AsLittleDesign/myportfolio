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
					<li class="active">Illustration</li>
				</ol>
			</div>
		</section>
		<section class="portfolio-group">
			<div class="container">
				<div class="row">
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Steve Jobs Portrait</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/jobs.jpg')">
								<a title="A charcoal portrait of Steve Jobs." rel="lightbox" href="img/illustration/jobs.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Far Away</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/faraway.jpg')">
								<a title="A surreal landscape painting done with photoshop." rel="lightbox" href="img/illustration/faraway.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Yoda</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/yoda.jpg')">
								<a title="A digital painting done of the Yoda statue located in the LucasFilm campus in the presidio." rel="lightbox" href="img/illustration/yoda.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row break">
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">War</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/war.png')">
								<a title="A drawing of a war setting done with ink and Photoshop." rel="lightbox" href="img/illustration/war.png">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Heat</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/missile.png')">
								<a title="A drawing of a missile in a city setting done with ink and Photoshop." rel="lightbox" href="img/illustration/missile.png">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Remember Everything</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/remember.jpg')">
								<a title="A drawing inspired by the song 'Remember Everything' done in Photoshop." rel="lightbox" href="img/illustration/remember.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
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
				if(!isMobile()) {
				    skrollr.init({
				        forceHeight: false
				    });
				}
			});
        </script>
	</body>
</html>
