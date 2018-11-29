@extends('current-tech-course.clayouts.clayout')

@section('content')

<div class="section-block replicable-content">

					<!-- Product Details -->
					<div class="row product">
						<div class="column width-6">
							<div class="product-images">
								<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
									<a class="overlay-link lightbox-link" data-group="product-lightbox-gallery" href="images/shop/single/product-1.jpg">
										<img src="images/shop/single/product-1.jpg" alt=""/>
										<span class="overlay-info">
											<span>
												<span>
													<span class="icon-plus large"></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
						</div>
						<div class="column width-5 offset-1">
							<div class="product-summary">
								<ul class="breadcrumb left mb-20">
									<li>
										<a href="index.html">Networking</a>
									</li>
									<li>
										<a href="index.html">Automata</a>
									</li>
									<li>
										Data Structure
									</li>
								</ul>
								<h1 class="product-title">Databases</h1>
								<hr>
								<div class="product-rating">
									<span class="star-rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-outlined"></span></span>
									<a href="#reviews" class="product-review-link scroll-link tab-trigger-click" data-offset="-80" data-target-tab="#reviews">(3 reviews)</a>
								</div>
								<div class="product-price price"><ins><span class="amount">6800</span></ins></div>
								<div class="product-description">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
								</div>
								<div class="product-cart">

								
									<button class="button pill add-to-cart-button">Study</button>
								</div>
								<hr>

								<hr>
								<ul class="social-list list-horizontal">
									<li><a href="#"><span class="icon-twitter-with-circle medium"></span></a></li>
									<li><a href="#"><span class="icon-facebook-with-circle medium"></span></a></li>
									<li><a href="#"><span class="icon-pinterest-with-circle medium"></span></a></li>
								</ul>
								<hr class="hide show-on-mobile">
							</div>
						</div>
					</div>
					<!-- Product Details End -->

					<!-- Related Info -->
					<div class="row product-related">
						<div class="column width-12">
							<div class="tabs product-tabs style-2">
								<ul class="tab-nav">
									<li class="active">
										<a href="#tabs-1-pane-1">Description</a>
									</li>
									<li>
										<a href="#tabs-1-pane-2">More Info</a>
									</li>
									<li>
										<a href="#tabs-1-pane-3" id="reviews">Reviews (3)</a>
									</li>
								</ul>
								<div class="tab-panes">
									<div id="tabs-1-pane-1" class="active animate">
										<div class="tab-content">
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidun.</p>
										</div>
									</div>
									<div id="tabs-1-pane-2">
										<div class="tab-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
									<div id="tabs-1-pane-3">
										<div class="tab-content left">
											<!-- Reviews -->
											<div class="review-comments">
												<h5 class="comments-title mb-50">Reviews</h5>
												<div class="comments">
													<ul class="comment-list">
														<li>
															<article class="comment">
																<div class="user-avatar">
																	<img src="images/shop/review-avatar.jpg" alt="Avatar"/>
																</div>
																<div class="comment-content">
																	<h5 class="name">Jane Mullner</h5>
																	<div class="comment-meta">
																		<span class="post-date">24 Jul 2015</span><span class="review-star-rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-outlined"></span></span>
																	</div>
																	<p>Exactly what I expected, a great durable jacket for a good price. Very happy with my purchase although delivery was delayed by a few days, no big deal though.</p>
																</div>
															</article>
														</li>
														<li>
															<article class="comment">
																<div class="user-avatar">
																	<img src="images/shop/review-avatar-2.jpg" alt="Avatar"/>
																</div>
																<div class="comment-content">
																	<h5 class="name">Michael Cunningham</h5>
																	<div class="comment-meta">
																		<span class="post-date">24 Jul 2015</span><span class="review-star-rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-outlined"></span></span>
																	</div>
																	<p>Description says it's water proof. This isn't really the case, but then again I guess it's obvious from the title of the product. Overall very happy that I purchased this jacked, plus I got a discount!</p>
																</div>
															</article>
														</li>
														<li>
															<article class="comment">
																<div class="user-avatar">
																	<img src="images/shop/review-avatar-3.jpg" alt="Avatar"/>
																</div>
																<div class="comment-content">
																	<h5 class="name">Jamie Sanders</h5>
																	<div class="comment-meta">
																		<span class="post-date">24 Jul 2015</span><span class="review-star-rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-outlined"></span></span>
																	</div>
																	<p>Not overly thirlled with this jacket, but I guess it's good value for the money spent.</p>
																</div>
															</article>
														</li>
													</ul>
												</div>
											</div>
											<!-- Leave Review -->
											<div class="row">
												<div class="column width-12">
													<h5 class="mb-30">Leave A Rating</h5>
													<div class="review-form-container">
														<form class="review-form" action="#" method="post" novalidate>
															<div class="row">
																<div class="column width-4">
																	<input type="text" name="fname" class="form-fname form-element large" placeholder="First Name*" tabindex="1" required>
																</div>
																<div class="column width-4">
																	<input type="email" name="email" class="form-email form-element large" placeholder="Email*" tabindex="2" required>
																</div>
																<div class="column width-4">
																	<div class="form-select form-element large">
																		<select name="type" required>
																			<option selected="selected" value="">Rating*</option>
																			<option value="">1</option>
																			<option value="">2</option>
																			<option value="">3</option>
																			<option value="">4</option>
																			<option value="">5</option>
																		</select>
																	</div>
																</div>
																<div class="column width-6">
																	<input type="text" name="honeypot" class="form-honeypot form-element large">
																</div>
															</div>
															<div class="row">
																<div class="column width-12 center">
																	<textarea name="message" class="form-message form-element large" placeholder="Review*" tabindex="5" required></textarea>
																	<input type="submit" value="Post Comment" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
																</div>
															</div>
														</form>
														<div class="form-response center"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Related Info End -->

					<!-- Products Similar -->
					<div class="row products-similar">
						<div class="column width-12">
							<hr>
							<h5 class="mb-50">Related Courses</h5>
							<div id="product-grid" class="grid-container products fade-in-progressively no-padding-top" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="0">
								<div class="row">
									<div class="column width-12">
										<div class="row grid content-grid-3">
											<div class="grid-item grid-sizer product design">
												<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
													<span class="onsale"></span>
													<a class="overlay-link" href="single-product.html">
														<img src="images/shop/grid/large-margins/product-related-1.jpg" alt=""/>
													</a>
													<div class="product-actions center">
														<a href="#" class="button pill add-to-cart-button medium">Study</a>
													</div>
												</div>
												<div class="product-details center">
													<h3 class="product-title">
														<a href="#">
															Biker Leather Bag
														</a>
													</h3>
													<span class="product-price price"><del><span class="amount">45.00</span></del><ins><span class="amount">35.00</span></ins></span>
													<div class="product-actions-mobile">
														<a href="#" class="button pill add-to-cart-button medium">Study</a>
													</div>
												</div>
											</div>
											<div class="grid-item product design identity">
												<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
													<span class="outofstock"></span>
													<a class="overlay-link" href="single-product.html">
														<img src="images/shop/grid/large-margins/product-related-2.jpg" alt=""/>
													</a>
													<div class="product-actions center">
														<a href="#" class="button pill add-to-cart-button medium">Study</a>
													</div>
												</div>
												<div class="product-details center">
													<h3 class="product-title">
														<a href="#">
															Brogue Low Boots
														</a>
													</h3>
													<span class="product-price price"><ins><span class="amount">68.00</span></ins></span>
													<div class="product-actions-mobile">
														<a href="#" class="button pill add-to-cart-button medium">Study</a>
													</div>
												</div>
											</div>
											<div class="grid-item product design identity">
												<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
													<a class="overlay-link" href="single-product.html">
														<img src="images/shop/grid/large-margins/product-related-3.jpg" alt=""/>
													</a>
													<div class="product-actions center">
														<a href="#" class="button pill add-to-cart-button medium">Study</a>
													</div>
												</div>
												<div class="product-details center">
													<h3 class="product-title">
														<a href="#">
															Hipster Leather Bag
														</a>
													</h3>
													<span class="product-price price"><ins><span class="amount">25.00</span></ins></span>
													<div class="product-actions-mobile">
														<a href="#" class="button pill add-to-cart-button medium">Study</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Products Similar End -->

				</div>


@endsection
