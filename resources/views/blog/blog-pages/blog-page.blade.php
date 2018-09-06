@extends('blog.blog-layouts.blog-layout')

@section('content')
<div class="row">
	<!-- Full Width Slider Section -->
	<div class="column width-12">
		<section class="section-block featured-media page-intro ">
			<div class="tm-slider-container full-width-slider" data-parallax data-parallax-fade-out data-animation="slide" data-scale-under="1140">
				<ul class="tms-slides">
					<li class="tms-slide" data-image data-force-fit data-overlay-bkg-color="#333333" data-overlay-bkg-opacity="0.7">
						<div class="tms-content">
							<div class="tms-content-inner center">
								<div class="row">
									<div class="column width-12">
										<h1 class="tms-caption title-xlarge font-alt-2 weight-light color-white mb-0"
											data-animate-in="preset:scaleOut;duration:1000ms;"
											data-no-scale
										>
											Blog Creative
										</h1>
									</div>
								</div>
							</div>
						</div>
						<img data-src="images/slider/slide-8-page-intro.jpg" data-retina src="images/blank.png" alt=""/>
					</li>
				</ul>
			</div>
		</section>
		<!-- Full Width Slider Section -->
	</div>

	<!-- Masonry Blog Grid -->
	<div class="section-block content-inner blog-masonry grid-container fade-in-progressively full-width no-margins pt-30" data-layout-mode="masonry" data-grid-ratio="1" data-animate-resize data-set-dimensions data-animate-resize-duration="600">
		<div class="row">
			<div class="column width-12">
				<div class="row grid content-grid-4">
					<div class="grid-item grid-sizer wide">
						<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
							<a class="overlay-link" href="./forum">
								<img src="images/blog/grid/blog-6-wide.jpg" alt=""/>
								<span class="overlay-info">
									<span>
										<span>
											<span class="post-title">A Photo Journey</span>
											<span class="post-info">14 Jul 2015</span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="grid-item">
						<div class="content-outer bkg-theme color-white">
							<div class="content-inner center">
								<h2 class="post-title"><a href="./forum">Design Quotes</a></h2>
								<div class="post-info">
									<span class="post-date">05 Jul 2015</span>
								</div>
								<blockquote class="center opacity-08">
									<p>Don’t ask what the world needs. Ask what makes you come alive and go do it.
										<cite>Howard Thurman</cite>
									</p>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
							<a class="overlay-link" href="./forum">
								<img src="images/blog/grid/blog-7-square.jpg" alt=""/>
								<span class="overlay-info">
									<span>
										<span>
											<span class="post-title">Bananorama</span>
											<span class="post-info">03 Jul 2015</span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="grid-item">
						<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
							<a class="overlay-link" href="./forum">
								<img src="images/blog/grid/blog-3-square.jpg" alt=""/>
								<span class="overlay-info">
									<span>
										<span>
											<span class="post-title">Hipsters Unite</span>
											<span class="post-info">22 Jun 2015</span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="grid-item portrait">
						<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
							<a class="overlay-link" href="./forum">
								<img src="images/blog/grid/blog-8-portrait.jpg" alt=""/>
								<span class="overlay-info">
									<span>
										<span>
											<span class="post-title">From Design To Ink</span>
											<span class="post-info">18 Jun 2015</span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="grid-item">
						<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
							<a class="overlay-link" href="./forum">
								<img src="images/blog/grid/blog-9-square.jpg" alt=""/>
								<span class="overlay-info">
									<span>
										<span>
											<span class="post-title">Floral Prints</span>
											<span class="post-info">01 Jun 2015</span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="grid-item">
						<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
							<a class="overlay-link" href="./forum">
								<img src="images/blog/grid/blog-8-square.jpg" alt=""/>
								<span class="overlay-info">
									<span>
										<span>
											<span class="post-title">Discovering Natures<br> Hidden Gems</span>
											<span class="post-info">16 May 2015</span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="grid-item">
						<div class="content-outer bkg-charcoal-light color-white">
							<div class="content-inner center">
								<h2 class="post-title"><a href="./forum">Design Quotes</a></h2>
								<div class="post-info">
									<span class="post-date">05 Jul 2015</span>
								</div>
								<blockquote class="center opacity-08">
									<p>Don’t ask what the world needs. Ask what makes you come alive and go do it.
										<cite>Howard Thurman</cite>
									</p>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="grid-item wide">
						<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
							<a class="overlay-link" href="./forum">
								<img src="images/blog/grid/blog-2-wide.jpg" alt=""/>
								<span class="overlay-info">
									<span>
										<span>
											<span class="post-title">Our New Member</span>
											<span class="post-info">02 May 2015</span>
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
</div>
	<!-- Masonry Blog Grid End -->
        @endsection
