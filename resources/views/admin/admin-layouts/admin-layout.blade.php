<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.admin-partials.head')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    @include('admin.admin-partials.sidebar')
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        @include('admin.admin-partials.navbar')
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      <footer class="footer">
        @include('admin.admin-partials.footer')
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('admin.admin-partials.scripts')
</body>

</html>
