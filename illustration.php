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
						<a title="A charcoal portrait of Steve Jobs." rel="lightbox" href="img/illustration/jobs.jpg">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/jobs.jpg')">
								<div class="hover-display">
									<div class="hide-hover">
										<div class="description">
											<h3>Steve Jobs Portrait</h3>
											<p>A charcoal portrait of Steve Jobs.</p>
										</div>
									</div>
									<div class="lightlink"></div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 portfolio-piece">
						<a title="A surreal landscape painting done with photoshop." rel="lightbox" href="img/illustration/faraway.jpg">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/faraway.jpg')">
								<div class="hover-display">
									<div class="hide-hover">
										<div class="description">
											<h3>Far Away</h3>
											<p>A surreal landscape painting done with photoshop.</p>
										</div>
									</div>
									<div class="lightlink"></div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 portfolio-piece">
						<a title="A digital painting done of the Yoda statue located in the LucasFilm campus in the presidio." rel="lightbox" href="img/illustration/yoda.jpg">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/yoda.jpg')">
								<div class="hover-display">
									<div class="hide-hover">
										<div class="description">
											<h3>Yoda</h3>
											<p>A digital painting done of the Yoda statue located in the LucasFilm campus in the presidio.</p>
										</div>
									</div>
									<div class="lightlink"></div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 portfolio-piece">
						<a title="A drawing of a war setting done with ink and Photoshop." rel="lightbox" href="img/illustration/war.png">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/war.png')">
								<div class="hover-display">
									<div class="hide-hover">
										<div class="description">
											<h3>War</h3>
											<p>A drawing of a war setting done with ink and Photoshop.</p>
										</div>
									</div>
									<div class="lightlink"></div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 portfolio-piece">
						<a title="A drawing of a missile in a city setting done with ink and Photoshop." rel="lightbox" href="img/illustration/missile.png">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/missile.png')">
								<div class="hover-display">
									<div class="hide-hover">
										<div class="description">
											<h3>Heat</h3>
											<p>A drawing of a missile in a city setting done with ink and Photoshop.</p>
										</div>
									</div>
									<div class="lightlink"></div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 portfolio-piece">
						<a title="A drawing inspired by the song 'Remember Everything' done in Photoshop." rel="lightbox" href="img/illustration/remember.jpg">
							<div class="portfolio-pic" style="background-image: url('img/illustration/thumb/remember.jpg')">
								<div class="hover-display">
									<div class="hide-hover">
										<div class="description">
											<h3>Remember Everything</h3>
											<p>A drawing inspired by the song 'Remember Everything' done in Photoshop.</p>
										</div>
									</div>
									<div class="lightlink"></div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<?php
			include('inc/ga.php')
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
