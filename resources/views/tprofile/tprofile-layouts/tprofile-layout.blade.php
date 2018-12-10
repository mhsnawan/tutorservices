<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href={{ asset("css/a.css") }}>
    	@include('partials.head')
      <style type="text/css">
      .imag{
      display: block;
      position: relative;
      z-index: 1;
      overflow: hidden;
      text-align: center;
      border: 5px solid #FFF;}
      div.imag:hover img{
          opacity:0.5;
      }
      div.imag:hover input {
          display: block;
      }
      div.imag input {
          position:absolute;
          display:none;
      }

    	body{margin-top:20px;}

.profile {
  width: 100%;
  position: relative;
  background: #FFF;
  border: 1px solid #D5D5D5;
  padding-bottom: 5px;
  margin-bottom: 20px;
}

.profile .image {
  display: block;
  position: relative;
  z-index: 1;
  overflow: hidden;
  text-align: center;
  border: 5px solid #FFF;
}

.profile .user {
  position: relative;
  padding: 0px 5px 5px;
}

.profile .user .avatar {
  position: absolute;
  left: 170px;
  top: -85px;
  z-index: 2;
}

.profile .user h2 {
  font-size: 16px;
  line-height: 20px;
  display: block;
  float: left;
  margin: 4px 0px 0px 135px;
  font-weight: bold;
}

.profile .user .actions {
  float: right;
}

.profile .user .actions .btn {
  margin-bottom: 0px;
}

.profile .info {
  float: left;
  margin-left: 20px;
}

.img-profile{
    height:180px;
    width:170px;
}

.img-cover{
    width:1100px;
    height:300px;
}

@media (max-width: 768px) {
  .btn-responsive {
    padding:2px 4px;
    font-size:80%;
    line-height: 1;
    border-radius:3px;
  }
}

@media (min-width: 769px) and (max-width: 992px) {
  .btn-responsive {
    padding:4px 9px;
    font-size:90%;
    line-height: 1.2;
  }
}
div.avatar:hover img{
    opacity:0.5;
}
div.avatar:hover input {
    display: block;
}
div.avatar input {
    position:absolute;
    display:none;
}

    </style>



</head>

<body class="shop home-page">
  <!-- Side Navigation Menu -->
  <aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="scale-in">
    @include('partials.sidebar')
  </aside>
  <!-- Side Navigation Menu End -->

@include('partials.header')
<div class="col-md-8">
@yield('content')
</div>
<footer  class="footer">
@include('partials.footer')
</footer>

<!-- Js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
<script src="{{ asset("js/timber.master.min.js") }}"></script>
<!-- Js proofile -->


</script>
</body>

</html>
