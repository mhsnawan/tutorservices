<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials.head')
	</head>

	<body class="shop home-page">
        <div class="wrapper">
            <div class="wrapper-inner">
                
                <!-- Header -->
                @include('partials.header')
                <!-- Header End -->

                <!-- Content -->
                <div class="content clearfix">
                    <div class="section-block replicable-content team-2">
                        <div class="row">
                            <div class="column width-12">
                                @include('tportal.tportal-partials.progressbar')
                                <div class="tabs style-2 vertical left">
                                    @include('tportal.tportal-partials.sidebar')
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- Content End -->
                <footer  class="footer">
                    @include('partials.footer')
                </footer>
            </div>
        </div>
                    @include('partials.searchmodal')
        
		<!-- Js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
        
        <script src="js/timber.master.min.js"></script>
	</body>
</html>
