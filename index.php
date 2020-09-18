<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="XDP App :: Parcel Tracking">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-itunes-app" content="app-id=1485292140">
		<meta property="og:url" content="https://xdp.co.uk">
		<meta property="og:title" content="XDP">
		<meta property="og:description" content="Parcel Tracking">
		<title>XDP App :: Parcel Tracking</title>
		<link href="assets/css/index.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	</head>
	<body>
		<header class="container">
			<div class="responsive intro-container">
				<div class="app-icon">
					<img alt="App icon" src="assets/img/app-icon.png">
					<p>XDP</p>
				</div>
				<div class="intro">
					<h2>Core functionality of the mobile app can be used directly in the browser using the 'phone' on this page.</h2>
				</div>
				<div class="sep"></div>
				<div class="use-app">
					<h5>For the best possible user experience, we recommend installing the app on your preferred mobile device:</h6>
				</div>
				<a class="store-btn" href="https://apps.apple.com/gb/app/xdp/id1485292140">
					<img src="assets/img/app-store.png" alt="App Store">
				</a>
				<a class="store-btn" href="https://play.google.com/store/apps/details?id=uk.co.sysx.xdp.deliveryx">
					<img src="assets/img/google-play.png" alt="Google Play">
				</a>				
			</div>
			<div class="responsive iphone">
				<div class="iphone-screenshot">
					<!--<img src="assets/img/app-screenshot.png" alt="App screenshot">-->
					<!--<iframe src="http://deliveryx-app" frameBorder="0"></iframe>-->
					<iframe id="phone-iframe" src="https://app.xdp.co.uk<?php echo urlPostfix(); ?>" frameBorder="0"></iframe>
				</div>
				<img class="iphone-mask" src="assets/img/iphone.png">
			</div>
		</header>
		<footer class="container footer">
			<div class="sep"></div>
			<div class="responsive contact"><span>Copyright &copy; 2020</span></div>
			<p class="responsive credit"><a href="https://sysx.co.uk"><img src="assets/img/systemx-light.svg" alt="System X" /></a></p>
		</footer>
		<script>
			/*
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-XXXXXXXX-XX', 'auto');
			ga('send', 'pageview');
			*/
			
            function isIE() {
				var ua = window.navigator.userAgent;
				var msie = ua.indexOf("MSIE ");
  
				if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
					console.log('Unsupported browser');
					document.getElementById('phone-iframe').src = 'unsupported.html';
					return true;
				} else {
					return false;
				}
			}
			
			document.addEventListener("DOMContentLoaded", function(event) {
				isIE();
			});
        </script>
	</body>
</html>
<?php
	function urlPostfix() {
		if (isset($_GET['c']) && ($c = $_GET['c'])) {
			return '/Home/Deliveries?c=' . $c;
		}
		return '';
	}