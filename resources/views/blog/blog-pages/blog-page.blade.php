@extends('blog.blog-layouts.blog-layout')

@section('content')

<!-- Intro Title Section 2 -->
<div class="section-block intro-title-2 intro-title-2-1">
	<div class="media-overlay bkg-charcoal-light opacity-07"></div>
	<div class="row">
		<div class="column width-12">
			<div class="title-container">
				<div class="title-container-inner">
					<h1 class="title-xlarge font-alt-2 weight-light mb-0">Blog Sidebar Right</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Intro Title Section 2 End -->

<!-- Breadcrum -->
<div class="section-block pt-50 pb-0">
	<div class="row">
		<div class="column width-12">
			<ul class="breadcrumb mb-50">
				<li>
					<a href="index.html">Demos</a>
				</li>
				<li>
					<a href="index.html">Blog</a>
				</li>
				<li>
					Blog Masonry
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- Breadcrum End -->

<div class="section-block clearfix pt-0 no-padding-bottom">
	<div class="row">

		<!-- Content Inner -->
		<div class="column width-9 content-inner blog-regular">
			@foreach ($posts as $post)
			<div class="post">
				<div class="post-media">
					<div class="thumbnail overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
						<a class="overlay-link" href="{{ route('blog.show', $post->id) }}">
							<img src="images/blog/regular/image-regular-2.jpg" alt=""/>
							<span class="overlay-info">
								<span>
									<span>
										<span class="post-title">{{ $post->title }}</span>
										<span class="post-info"><span class="post-date">{{$post->updated_at}}</span>/<span class="post-autor">{{ $post->author }}</span></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="post-content with-background">
					<p>{!! Str::words($post->description, $words = 200)  !!}</p>
					<a href="{{ route('blog.show', $post->id) }}" class="read-more"><span class="icon-right-open-mini"></span> More</a>
				</div>
			</div>
			@endforeach
		</div>
		<!-- Content Inner End -->

		<!-- Sidebar -->
		<aside class="column width-3 sidebar right">
			<div class="sidebar-inner">
				<div class="widget">
					<h3 class="widget-title">Find Something</h3>
					<div class="search-form-container site-search">
						<form action="#" method="get" novalidate>
							<div class="row">
								<div class="column width-12">
									<div class="field-wrapper">
										<input type="text" name="search" class="form-search form-element" placeholder="type &amp; hit enter...">
										<span class="border"></span>
									</div>
								</div>
							</div>
						</form>
						<div class="form-response"></div>
					</div>
				</div>
				<div class="widget">
					<h3 class="widget-title">Categories</h3>
					<ul>
						<li><a href="#">Art</a></li>
						<li><a href="#">Vintage</a></li>
						<li><a href="#">Photography</a></li>
						<li><a href="#">Illustration</a></li>
						<li><a href="#">Design</a></li>
						<li><a href="#">Conceptual</a></li>
						<li><a href="#">Music</a></li>
					</ul>
				</div>
				<div class="widget">
					<div class="box bkg-grey-ultralight mb-50">
						<h3 class="widget-title">About</h3>
						<p><strong>Starting a new business?</strong> Then Warhol is for you! Warhol comes with a multitude of carfully designed page layouts and purpose built content blocks that when pieced together create stunning, professional layouts.<p>
					</div>
				</div>
				<div class="widget">
					<h3 class="widget-title">Recent Posts</h3>
					<ul class="list-group">
						<li>
							<span class="post-info"><span class="post-date">27 Jul 2014</span></span>
							<a href="#">Our New Los Angeles Downtown Office</a>
						</li>
						<li>
							<span class="post-info"><span class="post-date">02 Jun 2014</span></span>
							<a href="#">Tutorial - Hidden Gems of Sublime</a>
						</li>
						<li>
							<span class="post-info"><span class="post-date">15 May 2014</span></span>
							<a href="#">New Team Member - Jason Adams</a>
						</li>
					</ul>
				</div>
				<div class="widget">
					<h3 class="widget-title">Tweets</h3>
					<!-- twitter -->
					<a class="twitter-timeline" href="https://twitter.com/thememountainco" data-chrome="noheader nofooter noborders transparent"  data-tweet-limit="2" data-link-color="#0cbacf" data-widget-id="572782546753429504">Tweets by @thememountainco</a> 
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>
		</aside>
		<!-- Sidebar End -->

	</div>
</div>

<!-- Pagination Section 3 -->
<div class="section-block pagination-3">
	<div class="row">
		<div class="column width-9">
			<ul>
				<li><a class="pagination-previous icon-left-open" href="#"><span class="icon-left-open-mini"></span></a></li>
				<li><a class="current" href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a class="pagination-next disabled" href="#"><span class="icon-right-open-mini"></span></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- Pagination Section 3 End -->
        @endsection
