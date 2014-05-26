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
				<h3>Photography</h3>
			</div>
		</section>
		<section class="portfolio-group">
			<div class="container">
				<div class="row">
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Bleeding Softly</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/bleedingsoftly.jpg')">
								<a title="" rel="lightbox" href="img/photography/bleedingsoftly.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Emily</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/emily.jpg')">
								<a title="" rel="lightbox" href="img/photography/emily.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Flow</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/spot.jpg')">
								<a title="" rel="lightbox" href="img/photography/spot.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row break">
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">They Come to Snuff the Rooster</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/snuff.jpg')">
								<a title="" rel="lightbox" href="img/photography/snuff.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Dragonfly</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/dragonfly.jpg')">
								<a title="" rel="lightbox" href="img/photography/dragonfly.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">As It Falls</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/asitfalls.jpg')">
								<a title="" rel="lightbox" href="img/photography/asitfalls.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row break">
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Humble Worker</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/bee.jpg')">
								<a title="" rel="lightbox" href="img/photography/bee.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Taking Flight</h3>
						<div class="portfolio-border">	
							<div class="portfolio-pic" style="background-image: url('img/photography/beefly.jpg')">
								<a title="" rel="lightbox" href="img/photography/beefly.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Megan</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/megan.jpg')">
								<a title="" rel="lightbox" href="img/photography/megan.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row break">
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Guitar</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/guitar.jpg')">
								<a title="" rel="lightbox" href="img/photography/guitar.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Whisp</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/incense.jpg')">
								<a title="" rel="lightbox" href="img/photography/incense.jpg">
									<div class="lightlink"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-piece">
						<h3 class="portfolio-title">Lizard</h3>
						<div class="portfolio-border">
							<div class="portfolio-pic" style="background-image: url('img/photography/lizard.jpg')">
								<a title="" rel="lightbox" href="img/photography/lizard.jpg">
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
