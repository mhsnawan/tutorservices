<!-- <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

         Styles
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body> -->
    @extends('layouts.default')

    @section('content')
<br>
<br>
<br>




        <!-- Content -->
        			<div class="content clearfix">

        				<!-- Fullscreen Slider Section -->
        				<section class="section-block featured-media window-height tm-slider-parallax-container">
        					<div class="tm-slider-container full-width-slider" data-featured-slider data-parallax data-scale-under="960" data-speed="1100">
        						<ul class="tms-slides">
        							<li class="tms-slide" data-image data-force-fit data-animation="scaleIn" data-overlay-bkg-color="#000000" data-overlay-bkg-opacity="0.3">
        								<div class="tms-content">
        									<div class="tms-content-inner center v-align-middle">
        										<div class="row">
        											<div class="column width-12">
        												<h1 class="title-xlarge font-alt-2 weight-light color-white mb-40">
        													<span class="tms-caption" data-animate-in="preset:slideInDownShort;duration:800ms;delay:200;" data-no-scale>Welcome To:</span>
        													<span class="tms-caption" data-animate-in="preset:flipInX;duration:800ms;delay:500ms;" data-no-scale>Tutor</span>
        													<span class="tms-caption" data-animate-in="preset:slideInUpShort;duration:800ms;delay:800ms;" data-no-scale>Services</span>
        												</h1>
        												<div class="clear"></div>
        												<a class="tms-caption button medium pill bkg-theme border-hover-white color-white color-hover-white text-uppercase"
        													data-animate-in="preset:scaleOut;duration:1000ms;delay:500ms;"
        													data-no-scale
        												><span class="icon-play left"></span> Play Concept</a>
        											</div>
        										</div>
        									</div>
        								</div>
        								<img data-src="images/slider/slide-1-fs.jpg" data-retina src="images/blank.png" alt=""/>
        							</li>
        							<li class="tms-slide" data-video data-video-bkg data-animation="slideLeftRight" data-overlay-bkg-color="#000000" data-overlay-bkg-opacity="0.4">
        								<div class="tms-content">
        									<div class="tms-content-inner center v-align-middle">
        										<div class="row">
        											<div class="column width-12">
        												<h1 class="title-xlarge font-alt-2 weight-light color-white mb-10">
        													<span class="tms-caption" data-animate-in="preset:flipInY;duration:800ms;;" data-no-scale>Big Beards</span>
        													<span class="tms-caption" data-animate-in="preset:flipInX;duration:800ms;delay:300ms;" data-no-scale>&amp;</span>
        													<span class="tms-caption" data-animate-in="preset:flipInY;duration:800ms;delay:600ms;" data-no-scale>Tattoos</span>
        												</h1>
        												<div class="clear"></div>
        												<p class="tms-caption lead color-white mb-50"
        													data-animate-in="preset:slideInUpShort;duration:900ms;delay:200ms;"
        													data-no-scale
        												>Showcasing A Slider Background Video</p>
        												<div class="clear"></div>
        												<a href="project-style-four.html" class="tms-caption button medium pill border-white bkg-hover-theme color-white color-hover-white text-uppercase fade-location"
        													data-animate-in="preset:scaleOut;duration:1000ms;delay:500ms;"
        													data-no-scale
        												>View Project</a>
        											</div>
        										</div>
        									</div>
        								</div>
        								<video poster="images/blank.png">
        									<source type="video/mp4" src="images/slider/barber.mp4" />
        									<source type="video/webm" src="images/slider/barber.webm" />
        								</video>
        								<img data-src="images/slider/slide-10-fs.jpg" data-retina src="images/blank.png" alt=""/>
        							</li>
        							<li class="tms-slide" data-image data-force-fit data-animation="scaleOut" data-overlay-bkg-color="#000000" data-overlay-bkg-opacity="0.2">
        								<div class="tms-content">
        									<div class="tms-content-inner center v-align-middle">
        										<div class="row">
        											<div class="column width-12">
        												<h1 class="title-xlarge font-alt-2 weight-light color-white mb-10">
        													<span class="tms-caption" data-animate-in="preset:signSwingLeft;duration:800ms;easing:swing;" data-no-scale>Saving</span>
        													<span class="tms-caption" data-animate-in="preset:signSwingLeft;duration:800ms;delay:300ms;easing:swing;" data-no-scale>Nature</span>
        													<span class="tms-caption" data-animate-in="preset:signSwingLeft;duration:800ms;delay:600ms;easing:swing;" data-no-scale>Today</span>
        												</h1>
        												<div class="clear"></div>
        												<p class="tms-caption lead color-white mb-50"
        													data-animate-in="preset:slideInUpShort;duration:900ms;delay:200ms;"
        													data-no-scale
        												>A Movement For Environment Awareness</p>
        												<div class="clear"></div>
        												<a href="project-style-three.html" class="tms-caption button medium pill border-white bkg-hover-theme color-white color-hover-white text-uppercase fade-location"
        													data-animate-in="preset:scaleOut;duration:1000ms;delay:500ms;"
        													data-no-scale
        												>View Project</a>
        											</div>
        										</div>
        									</div>
        								</div>
        								<img data-src="images/slider/slide-11-fs.jpg" data-retina src="images/blank.png" alt=""/>
        							</li>
        							<li class="tms-slide" data-image data-force-fit data-animation="fade" data-overlay-bkg-color="#000000" data-overlay-bkg-opacity="0.4">
        								<div class="tms-content">
        									<div class="tms-content-inner center v-align-middle">
        										<div class="row">
        											<div class="column width-12">
        												<h1 class="title-xlarge font-alt-2 weight-light color-white mb-10">
        													<span class="tms-caption" data-animate-in="preset:slideInDownShort;duration:800ms;easing:swing;" data-no-scale>Spring</span>
        													<span class="tms-caption" data-animate-in="preset:slideInDownShort;duration:800ms;delay:300ms;easing:swing;" data-no-scale>&amp;</span>
        													<span class="tms-caption" data-animate-in="preset:slideInDownShort;duration:800ms;delay:600ms;easing:swing;" data-no-scale>The</span>
        													<span class="tms-caption" data-animate-in="preset:slideInDownShort;duration:800ms;delay:900ms;easing:swing;" data-no-scale>Hippie</span>
        												</h1>
        												<div class="clear"></div>
        												<p class="tms-caption lead color-white mb-50"
        													data-animate-in="preset:slideInUpShort;duration:900ms;delay:200ms;"
        													data-no-scale
        												>Branding For American Apparel Clothing</p>
        												<div class="clear"></div>
        												<a href="project-style-two.html" class="tms-caption button medium pill border-white bkg-hover-theme color-white color-hover-white text-uppercase fade-location"
        													data-animate-in="preset:scaleOut;duration:1000ms;delay:500ms;"
        													data-no-scale
        												>View Project</a>
        											</div>
        										</div>
        									</div>
        								</div>
        								<img data-src="images/slider/slide-12-fs.jpg" data-retina src="images/blank.png" alt=""/>
        							</li>
        						</ul>
        					</div>
        				</section>
        				<!-- Fullscreen Slider Section End -->
<div class="row">
        				<!-- Content -->
        				<div class="section-block replicable-content pb-0">
        					<div class="row">
        						<div class="column width-12 center left-on-mobile">
        							<div class="pu-10">
        								<p class="lead text-large weight-bold mb-20 mb-mobile-0">Hello! We're  in Islamabad City Providing Tutors &amp; Students.</p>
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="section-block pt-50">
        					<div class="row flex">
        						<div class="column width-5 right center-on-mobile">
        							<p class="title-xlarge font-alt-2 weight-light color-theme pu-20 mb-10">5+ years</p>
        							<p class="weight-bold tex-large pu-20 mb-mobile-50">Our Combined Experience</p>
        						</div>
        						<div class="column width-5 offset-1">
        							<p class="mb-30">Tutor Servicse  bold and beautiful. It combines elegance, functionality and design. If you are looking for a template that breaks the norm of multi-purpose template design, then Warhold is for you. With some 70+ pages, layouts, components, Warhold gives you a design toolkit to help you create an amazing project for you or your client!</p>
        							<a href="about-style-one.html" class="button pill medium left border-theme bkg-hover-theme color-theme color-hover-white text-uppercase fade-location">More About Us</a>
        						</div>
        					</div>
        				</div>
        				<!-- Content -->
                <!-- Portfolio Grid -->
                				<div class="section-block replicable-content pb-60 bkg-grey-ultralight">
                					<div class="row">
                						<div class="column width-12 center">
                							<h2 class="mb-30">Creations</h2>
                						</div>
                					</div>
                				</div>
                				<div class="section-block grid-container fade-in-progressively pt-0 bkg-grey-ultralight" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-filter-duration="700" data-set-dimensions data-animate-resize data-animate-resize-duration="700">
                					<div class="row">
                						<div class="column width-12">
                							<div class="row grid content-grid-3">
                								<div class="grid-item grid-sizer">
                									<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
                										<a class="overlay-link" href="project-style-one.html">
                											<img src="images/portfolio/grid/large-margins/project-1-landscape.jpg" alt=""/>
                											<span class="overlay-info">
                												<span>
                													<span>
                														<span class="project-title">Palm <span class="font-alt-2">&amp;</span> Bananas</span>
                														<span class="project-description">for Cinque</span>
                													</span>
                												</span>
                											</span>
                										</a>
                									</div>
                								</div>
                								<div class="grid-item">
                									<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
                										<a class="overlay-link" href="project-style-one.html">
                											<img src="images/portfolio/grid/large-margins/project-15-landscape.jpg" alt=""/>
                											<span class="overlay-info">
                												<span>
                													<span>
                														<span class="project-title">Inked Up <span class="font-alt-2">&amp;</span> Cool</span>
                														<span class="project-description">for Type Factory</span>
                													</span>
                												</span>
                											</span>
                										</a>
                									</div>
                								</div>
                								<div class="grid-item">
                									<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
                										<a class="overlay-link" href="project-style-one.html">
                											<img src="images/portfolio/grid/large-margins/project-6-landscape.jpg" alt=""/>
                											<span class="overlay-info">
                												<span>
                													<span>
                														<span class="project-title">Alike</span>
                														<span class="project-description">for Helwen Clothing</span>
                													</span>
                												</span>
                											</span>
                										</a>
                									</div>
                								</div>
                								<div class="grid-item">
                									<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
                										<a class="overlay-link" href="project-style-one.html">
                											<img src="images/portfolio/grid/large-margins/project-7-landscape.jpg" alt=""/>
                											<span class="overlay-info">
                												<span>
                													<span>
                														<span class="project-title">The Boutique</span>
                														<span class="project-description">for Vintage Co</span>
                													</span>
                												</span>
                											</span>
                										</a>
                									</div>
                								</div>
                								<div class="grid-item">
                									<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
                										<a class="overlay-link" href="project-style-one.html">
                											<img src="images/portfolio/grid/large-margins/project-14-landscape.jpg" alt=""/>
                											<span class="overlay-info">
                												<span>
                													<span>
                														<span class="project-title">Big Beards <span class="font-alt-2">&amp;</span> Home Brewed Ale</span>
                														<span class="project-description">for Hendricks Brewery</span>
                													</span>
                												</span>
                											</span>
                										</a>
                									</div>
                								</div>
                								<div class="grid-item">
                									<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
                										<a class="overlay-link" href="project-style-one.html">
                											<img src="images/portfolio/grid/large-margins/project-12-landscape.jpg" alt=""/>
                											<span class="overlay-info v-align-middle">
                												<span>
                													<span>
                														<span class="project-title">Spring <span class="font-alt-2">&amp;</span> Hippie</span>
                														<span class="project-description">for American Apparel</span>
                													</span>
                												</span>
                											</span>
                										</a>
                									</div>
                								</div>
                							</div>
                						</div>
                					</div>
                				</div>
                				<!-- Portfolio Grid End -->

                				<!-- Stat Section 1 -->
                				<div class="section-block stats-1 bkg-charcoal color-white feature-column-group pt-40 pb-40 center">
                					<div class="row flex">
                						<div class="column width-4">
                							<div class="feature-column">
                								<div class="stat">
                									<div class="stat-inner">
                										<h4 class="mb-20 font-alt-2 weight-light"><em>Tutors</em></h4>
                										<p class="counter"><strong><span class="stat-counter" data-count-from="1100" data-count-to="1234">1,100</span>+</strong></p>
                										<p class="description mt-10">Since Creation in 2013</p>
                									</div>
                								</div>
                							</div>
                						</div>
                						<div class="column width-4">
                							<div class="feature-column">
                								<div class="stat">
                									<div class="stat-inner">
                										<h4 class="mb-20 font-alt-2 weight-light"><em>Students</em></h4>
                										<p class="counter"><strong><span class="stat-counter" data-count-from="1440" data-count-to="1640">1440</span>+</strong></p>
                										<p class="description mt-10">Best Design/Developer</p>
                									</div>
                								</div>
                							</div>
                						</div>
                						<div class="column width-4">
                							<div class="feature-column">
                								<div class="stat">
                									<div class="stat-inner">
                										<h4 class="mb-20 font-alt-2 weight-light"><em>Global Rank</em></h4>
                										<p class="counter"><strong><span class="stat-counter" data-count-from="365" data-count-to="645">640</span>K</strong></p>
                										<p class="description">Entrepreneur Magazine</p>
                									</div>
                								</div>
                							</div>
                						</div>
                					</div>
                				</div>
                				<!-- Stat Section 1 -->

                				<!-- Recent Posts -->
                				<div class="section-block replicable-content pb-60 bkg-grey-ultralight">
                					<div class="row">
                						<div class="column width-6 offset-3 center">
                							<h2 class="mb-30">News &amp; Updates</h2>
                						</div>
                					</div>
                				</div>
                				<div class="section-block content-inner pt-0 pb-0 bkg-grey-ultralight">
                					<div class="blog-masonry grid-container fade-in-progressively" data-layout-mode="fitRows" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="700">
                						<div class="row">
                							<div class="column width-12">
                								<div class="row grid content-grid-3 clearfix flex">
                									<div class="grid-item column grid-sizer">
                										<article class="post">
                											<div class="post-content with-background">
                												<h2 class="post-title"><a href="blog-single-post-sidebar-right.html">New Vintage</a></h2>
                												<div class="post-info">
                													<span class="post-date">25 Aug 2015</span>/<span class="post-autor">By Jayden</span>
                												</div>
                												<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
                												<a href="blog-single-post-sidebar-right.html" class="read-more"><span class="icon-right-open-mini"></span> More</a>
                											</div>
                										</article>
                									</div>
                									<div class="grid-item column">
                										<article class="post">
                											<div class="post-content with-background">
                												<h2 class="post-title"><a href="blog-single-post-sidebar-right.html">From Plan to Execution</a></h2>
                												<div class="post-info">
                													<span class="post-date">25 Aug 2015</span>/<span class="post-autor">By Maddy</span>
                												</div>
                												<p>Mauris sodales in enim sit sodales dolor, placerat ultrices ut pede justo odio. In accumsan morbi at, mi luctus nullam volutpat facilisis cursus sed quis autem vel eum iure.</p>
                												<a href="blog-single-post-sidebar-right.html" class="read-more"><span class="icon-right-open-mini"></span> More</a>
                											</div>
                										</article>
                									</div>
                									<div class="grid-item column">
                										<article class="post">
                											<div class="post-content with-background">
                												<h2 class="post-title"><a href="blog-single-post-sidebar-right.html">New Team Member</a></h2>
                												<div class="post-info">
                													<span class="post-date">25 Aug 2015</span>/<span class="post-autor">By Haley</span>
                												</div>
                												<p>Tincidunt mauris sit suspendisse. Scelerisque lorem nec, tempus quis nullam nec gravida, convallis ac, nascetur id eget lectus nibh quam ad, in magna mi est adipiscing donec dui. </p>
                												<a href="blog-single-post-sidebar-right.html" class="read-more"><span class="icon-right-open-mini"></span> More</a>
                											</div>
                										</article>
                									</div>
                								</div>
                							</div>
                						</div>
                					</div>
                				</div>
                				<!-- Recent Posts End -->

                				<!-- More -->
                				<div class="section-block pt-70 pb-60 bkg-grey-ultralight">
                					<div class="row flex">
                						<div class="column width-12 center">
                							<a href="blog.html" class="button pill medium left border-theme bkg-hover-theme color-theme color-hover-white text-uppercase fade-location">View All Posts</a>
                						</div>
                					</div>
                				</div>
                				<!-- More End -->

    </div>


      <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
!-->
            <div class="content">


                {{--  <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>  --}}
            </div>

      </div>
@endsection
