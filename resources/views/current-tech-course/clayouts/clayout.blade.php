
<!DOCTYPE html>
<html lang="en">

<head>
@include("partials.head")
</head>

<body class="shop cart">
  <!-- Side Navigation Menu -->
  <aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="scale-in">
    @include("partials.sidebar")
  </aside>
  <!-- Side Navigation Menu End -->
  @include("partials.header")
  <div class="col-md-8">
    <div class="content clearfix">
    @yield("content")
    </div>
  </div>
  <footer  class="footer">
    @include("partials.footer")
  </footer>
  @include("partials.searchmodal")
<!-- Js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
<script src="{{ asset('js/timber.master.min.js') }}"></script>
<!-- Js proofile -->


</script>
</body>

</html>
