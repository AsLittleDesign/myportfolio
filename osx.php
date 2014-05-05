<!DOCTYPE html>
<html>
	<head>
		<?php
			include('inc/head.php');
		?>
		<title>OS X 10.10 "Everest"</title>
	</head>
	<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
		<section id="section1" class="osx" style="background-color: #000000;">
			<div style="width: 100%; height: 100%;" data-0="background-color:rgba(0,0,0,0);" data-500="background-color:rgba(0,0,0,.75);">
				<div class="container">
					<a href="/" class="nav"><div class="arrow"></div>Home</a>
					<div class="hsContainer">
			    		<div class="hsContent" data-0="top: 20vh; opacity: 1;" data-425="top: 5vh; opacity: 0;">
							<h1>OS X 10.10 "Everest"</h1>
							<h3>A Mac OS concept.</h3>
			    		</div>
		        	</div>
	        	</div>
			</div>
		</section>
		<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<div class="fb-share-button" data-href="http://davesmdesign.com/osx.php" data-width="100" data-type="button_count"></div>
		<section class="article">
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<p><strong>WWDC</strong> is coming up on June 2nd, and one of the biggest expected unveilings is OS X 10.10, codenamed “Syrah”. It is expected to have an updated look, more closely in line with the aesthetic taken on by iOS 7 last fall. While I like to keep up with the computing industry as a whole, Apple’s unveilings tend to be especially intriguing. This time around, I decided to take a stab at a conceptual redesign of the current Mac operating system.</p>
					<h1>To Start...</h1>
					<p>I needed a set of objectives, something to guide the direction this design would go in, so I came up with these:</p>
					<h3>Bring a flat, iOS 7 like look to OS X</h3>
					<p>The primary objective here is not to copy iOS and blow it up to desktop proportions, but to take some iOS influences and keep it feeling like a desktop computer.</p>
					<h3>Create a light and airy interface</h3>
					<p>As Apple’s hardware gets lighter and thinner, the operating system should feel like it is too. Using translucent elements and a brighter, more vibrant interface will help accomplish this.</p>
					<h3>Redesign realistically</h3>
					<p>I didn’t want to go so over the top with the design that it wouldn’t conceivably be done. Keeping it realistic I felt was important.</p>
					<h3>Simplify</h3>
					<p>Over the years, more and more features and apps have been added without an overhaul of the operating system. More features are great, but it’s at the cost of adding more, and more buttons. I want to hide all but the essentials, making for a simpler, more efficient interface.</p>
					<h1>The desktop…</h1>
				</div>
				<img class="mockup" src="img/osxmockup.png" alt="">
				<div class="col-md-8 col-md-offset-2">
					<h3>The dock</h3>
					<p>I completely redesigned the entire dock from scratch. Dropping the skeuomorphic design of it’s predecessor, I created bright, new icons to complement the airy feel of the new dock.</p>
				</div>
				<img class="mockup" src="img/osxdock.png" alt="">
				<div class="col-md-8 col-md-offset-2">
					<h3>The status bar</h3>
					<p>The status bar also got an upgrade. In addition to simplifying the right side, I added something that I'd like to call “Adaptive Status”. What Adaptive Status does is display information of interest to you. Whether it’s the song that you’re listening to, or your stock portfolio going up, It displays quick information that you can look at any time - which is the point of a status bar.</p>
					<img class="mockup" src="img/osxadaptive.png" alt="">
					<h1>Spotlight...</h1>
				</div>
				<img class="mockup" src="img/osxspotlight.png" alt="">
				<div class="col-md-8 col-md-offset-2">
					<p>A visual upgrade of spotlight isn’t a big deal, but the icon next to it is. Let’s take a closer look!</p>
					<img src="img/osxspotlight+.png" alt="" class="mockup">
					<p>You may recognize the icon as Siri, the iOS voice assistant. I truly believe Siri’s addition to OS X is long overdue. After long deliberation on how to add Siri to the operating system, I decided that there is no better way than integrating it with spotlight. Spotlight acts as a quick way to launch apps, and open files, and Siri is another great way to quickly and conveniently perform tasks without stopping what you’re doing.</p>
					<p>The current keybinding for spotlight is command+[space], and with this change, holding down command+space for over 2 seconds will activate Siri.</p>
					<h1>Control enter...</h1>
				</div>
			</div>
		</section>
		<?php
			include('inc/environment.php')
		?>
		<script>
			require(['skrollr'], function(skrollr){
				var s = skrollr.init();
				if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
				    skrollr.init({
				        forceHeight: false
				    });
				}
			});
        </script>
	</body>
</html>