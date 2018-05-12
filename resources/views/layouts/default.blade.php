<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.head')
</head>
<body class="shop">

	<!-- Side Navigation Menu -->
	<aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="scale-in">
    @include('includes.sidebar')
	</aside>
	<!-- Side Navigation Menu End -->

	<div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">

			<!-- Header -->
            @include('includes.header')
			<!-- Header End -->

			<!-- Content -->
			<div class="content clearfix">
			@yield('content')
			</div>
			<!-- Content End -->

			<!-- Search Modal -->
			@include('includes.searchmodal')
			<!-- Seach Modal End -->
			
			<!-- Footer -->
			<footer class="footer">
			@include('includes.footer')
			</footer>
			<!-- Footer End -->

		</div>
	</div>

	<!-- Js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
	<script src="js/timber.master.min.js"></script>
</body>
</html>