<!DOCTYPE html>
<html lang="en">

	<head>
		@include('partials.head')
	</head>

	<body class="shop checkout">

		@include('partials.header')
		<!-- Side Navigation Menu -->
		<aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="scale-in">
			@include('partials.sidebar')
		</aside>
		<!-- Side Navigation Menu End -->

  		<div class="wrapper">
			<div class="wrapper-inner">
				<div class="section-block replicable-content team-2">
      				@yield('content')
				</div>
			</div>
		</div>
		<footer  class="footer">
			@include('partials.footer')
		</footer>
		<!-- Js -->
		<script data-cfasync="false" src="/cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="../js/timber.master.min.js"></script>
		<script>
			$( document ).ready( function() {
				$( '.horizon' ).horizon({
					easing: 'easeInOutQuint'
				});
			});
		</script>

		<!-- Js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
		<script src="js/timber.master.min.js"></script>

	</body>
</html>
