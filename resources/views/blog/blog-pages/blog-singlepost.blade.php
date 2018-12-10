@extends('blog.blog-layouts.blog-layout')

@section('content')
<!-- Intro Title Section 2 -->
<div class="section-block intro-title-2 intro-title-2-2">
	<div class="media-overlay bkg-charcoal-light opacity-07"></div>
	<div class="row">
		<div class="column width-12">
			<div class="title-container">
				<div class="title-container-inner">
					<h1 class="title-xlarge font-alt-2 weight-light mb-0">{{ $blog->title }}</h1>
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

			</ul>
		</div>
	</div>
</div>
<!-- Breadcrum End -->

<div class="section-block clearfix no-padding">
	<div class="row">

		<!-- Content Inner -->
		<div class="column width-9 content-inner blog-single-post">
			<article class="post">
				<div class="post-content">
					{!! $blog->description !!}
				</div>
			</article>

			<!-- Post Author -->
			<div id="author" class="post-author">
				<div class="post-author-aside">
					<span class="author-title">Author</span>
					<a href="#"><span class="icon-paper"></span>{{ $blog->created_at->format('d-m-y | H:i:s') }}</a>
				</div>
				<article class="author-bio">
					<div class="author-avatar">
						<img src={{ asset("images/blog/bio-avatar.jpg") }} alt="Avatar"/>
					</div>
					<div class="author-content">
						<div class="row">
							<div class="column width-12">
								<h5 class="name">Admin</h5>
								{{--  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>  --}}
							</div>
						</div>
					</div>
				</article>
			</div>

			<!-- Post Comments -->
			{{--  <div class="post-comments">
				<h3 class="comments-title">3 Comments</h3>
				<div class="comments">
					<ul class="comment-list">
						<li>
							<article class="comment">
								<div class="user-avatar">
									<img src="images/blog/comment-avatar.jpg" alt="Avatar"/>
								</div>
								<div class="comment-content">
									<h5 class="name">John Andersson</h5>
									<div class="comment-meta">
										<span class="post-date">17 Jul 2015</span>/<a href="#" class="comment-reply-link">Reply</a>
									</div>
									<p>Whistler Mountain is a mountain in the Fitzsimmons Range of the Pacific Ranges of the Coast Mountains, located on the northwestern.</p>
								</div>
							</article>
							<ul>
								<li>
									<article class="comment">
										<div class="user-avatar">
											<img src="images/blog/comment-avatar-3.jpg" alt="Avatar"/>
										</div>
										<div class="comment-content">
											<h5 class="name">Emma Courtier</h5>
											<div class="comment-meta">
												<span class="post-date">23 Jul 2015</span>/<a href="#" class="comment-reply-link">Reply</a>
											</div>
											<p>Whistler Mountain is a mountain in the Fitzsimmons Range of the Pacific Ranges of the Coast Mountains, located on the northwestern.</p>
										</div>
									</article>
								</li>
							</ul>
						</li>
						<li>
							<article class="comment">
								<div class="user-avatar">
									<img src="images/blog/comment-avatar-2.jpg" alt="Avatar"/>
								</div>
								<div class="comment-content">
									<h5 class="name">Michael Cunningham</h5>
									<div class="comment-meta">
										<span class="post-date">24 Jul 2015</span>/<a href="#" class="comment-reply-link">Reply</a>
									</div>
									<p>Whistler Mountain is a mountain in the Fitzsimmons Range of the Pacific Ranges of the Coast Mountains, located on the northwestern.</p>
								</div>
							</article>
						</li>
					</ul>
				</div>
			</div>  --}}
			{{--  <div class="post-comment-respond">
				<h3 class="reply-title">Leave a Comment</h3>
				<form class="comment-form" action="#" method="post" novalidate>
					<div class="row">
						<div class="column width-4">
							<input type="text" name="fname" class="form-name form-element" placeholder="Name*" tabindex="1" required>
						</div>
						<div class="column width-4">
							<input type="email" name="email" class="form-email form-element" placeholder="Email*" tabindex="3" required>
						</div>
						<div class="column width-4">
							<input type="text" name="website" class="form-website form-element" placeholder="Website" tabindex="4">
						</div>
						<div class="column width-6">
							<input type="text" name="honeypot" class="form-honeypot form-element">
						</div>
					</div>
					<div class="row">
						<div class="column width-12">
							<textarea name="message" class="form-message form-element" placeholder="Message*" tabindex="5" required></textarea>
							<input type="submit" value="Post Comment" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white no-margin-bottom">
						</div>
					</div>
				</form>
			</div>  --}}
		</div>
		<!-- Content Inner End -->

	 <!--	Sidebar -->
		<aside class="column width-3 sidebar right">
			<div class="sidebar-inner">
				<div class="widget">
					<!--	<h3 class="widget-title">Find Something</h3>
					<div class="search-form-container site-search">-->
						<form action="#" method="get" novalidate>
							<div class="row">
								<div class="column width-12">
									<div class="field-wrapper">
							<!--			<input type="text" name="search" class="form-search form-element" placeholder="type &amp; hit enter...">-->
										<span class="border"></span>
									</div>
								</div>
							</div>
						</form>
						<div class="form-response"></div>
					</div>
				</div>
				<div class="widget">

				</div>
				<div class="widget">
					<div class="box bkg-grey-ultralight mb-50">

					</div>
				</div>
				<div class="widget">

					<ul class="list-group">

					</ul>
				</div>
				<div class="widget">

					<!-- twitter -->

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
				<li><a class="pagination-next disabled" href="#"><span class="icon-right-open-mini"></span></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- Pagination Section 3 End -->
        @endsection
