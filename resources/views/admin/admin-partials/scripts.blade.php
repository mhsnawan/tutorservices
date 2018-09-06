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
 
<script>
  function uploadimg(){

 
    var brand = document.getElementById('logo-id');
    brand.className = 'attachment_upload';
    brand.onchange = function() {
        document.getElementById('fakeUploadLogo').value = this.value.substring(12);
    };

    // Source: http://stackoverflow.com/a/4459419/6396981
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo-id").change(function() {
      console.log('hello')
        readURL(this);
    });
  }
</script>
