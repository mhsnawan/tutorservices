<script src={{ asset("admin-assets/js/core/jquery.min.js") }} type="text/javascript"></script>
<script src={{ asset("admin-assets/js/core/popper.min.js") }} type="text/javascript") }}></script>
<script src={{ asset("admin-assets/js/core/bootstrap-material-design.min.js") }} type="text/javascript"></script>
<script src={{ asset("admin-assets/js/plugins/perfect-scrollbar.jquery.min.js") }}></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src={{ asset("admin-assets/js/plugins/chartist.min.js") }}></script>
<!--  Notifications Plugin    -->
<script src={{ asset("admin-assets/js/plugins/bootstrap-notify.js") }}></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src={{ asset("admin-assets/js/material-dashboard.min.js?v=2.1.0") }} type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, dont include it in your project! -->
<script src={{ asset("admin-assets/demo/demo.js") }}></script>
<script>
  $(document).ready(function() {
    // Javascript methods body can be found in assets/js/demos.js
    md.initDashboardPageCharts();

  });
</script>