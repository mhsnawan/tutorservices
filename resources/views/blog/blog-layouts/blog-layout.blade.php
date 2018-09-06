<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body class="shop blog">
  <aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="push-in">
      @include('partials.sidebar')
    </aside>
    <div class="wrapper reveal-side-navigation">
      <div class="wrapper-inner">

        <!-- Header -->
              @include('partials.header')
        <!-- Header End -->

        <!-- Content -->
        <div class="content clearfix">
        @yield('content')
        </div>
        <!-- Content End -->

        <!-- Search Modal -->
        @include('partials.searchmodal')
        <!-- Seach Modal End -->

        <!-- Footer -->
        <footer  class="footer">
        @include('partials.footer')
        </footer>
        <!-- Footer End -->

      </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
<script src="js/timber.master.min.js"></script>
</body>
</html>
