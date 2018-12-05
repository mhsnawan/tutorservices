<!-- Intro Title Section 2 End -->
@extends('current-tech-course.clayouts.clayout')

@section('content')
	<div class="section-block clearfix no-padding-bottom">
		<div class="row">
			<!-- Content Inner -->
			<div class="column width-9 content-inner">
				<!-- Filter -->
				<div class="section-block pt-0 pb-50">
					<div class="row">
						<div class="column width-4">
							<div class="product-result-count pd-10">
								<p>Showing 1–10 of 46 results</p>
							</div>
						</div>
						<div class="column width-3 offset-2">
							<div class="form-select form-element medium pull-right">
								<select name="type">
									<option selected="selected" value="">Category: All</option>
									<option value="">Computer science</option>
									<option value="">Biology</option>
									<option value="">Physics</option>
									<option value="">Eng.Sciences</option>
									<option value="">Arts</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<!-- Filter End -->

				<!-- Product Grid -->
				<div id="product-grid" class="grid-container products fade-in-progressively no-padding-top" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="700">
					<div class="row">
						<div class="column width-12">
							<div class="row grid content-grid-3">
								<div class="grid-item product portrait grid-sizer">
									<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
										<span class="onsale"></span>
										<a class="overlay-link" href="single-product.html">
											<img src="images/shop/grid/large-margins/product-1-portrait.jpg" alt=""/>
										</a>
										<div class="product-actions center">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
									<div class="product-details center">
										<h3 class="product-title">
											<a href="#">
												<span class="font-alt-2">&amp;</span> Database
											</a>
										</h3>
										<span class="product-price price"><del><span class="amount"></span></del><ins><span class="amount">0065.00</span></ins></span>
										<div class="product-actions-mobile">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
								</div>
								<div class="grid-item product portrait">
									<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
										<a class="overlay-link" href="single-product.html">
											<img src="images/shop/grid/large-margins/product-2-portrait.jpg" alt=""/>
										</a>
										<div class="product-actions center">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
									<div class="product-details center">
										<h3 class="product-title">
											<a href="#">
												Networking
											</a>
										</h3>
										<span class="product-price price"><ins><span class="amount">5.00</span></ins></span>
										<div class="product-actions-mobile">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
								</div>
								<div class="grid-item product portrait">
									<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
										<a class="overlay-link" href="single-product.html">
											<img src="images/shop/grid/large-margins/product-5-portrait.jpg" alt=""/>
										</a>
										<div class="product-actions center">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
									<div class="product-details center">
										<h3 class="product-title">
											<a href="#">
													<span class="font-alt-2">&amp;</span> OS
											</a>
										</h3>
										<span class="product-price price"><ins><span class="amount">125.00</span></ins></span>
										<div class="product-actions-mobile">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
								</div>
								<div class="grid-item product portrait">
									<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
										<a class="overlay-link" href="single-product.html">
											<img src="images/shop/grid/large-margins/product-10-portrait.jpg" alt=""/>
										</a>
										<div class="product-actions center">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
									<div class="product-details center">
										<h3 class="product-title">
											<a href="#">
												asds
											</a>
										</h3>
										<span class="product-price price"><ins><span class="amount">35.00</span></ins></span>
										<div class="product-actions-mobile">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
								</div>
								<div class="grid-item product portrait">
									<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
										<a class="overlay-link" href="single-product.html">
											<img src="images/shop/grid/large-margins/product-4-portrait.jpg" alt=""/>
										</a>
										<div class="product-actions center">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
									<div class="product-details center">
										<h3 class="product-title">
											<a href="#">
												Phs
											</a>
										</h3>
										<span class="product-price price"><ins><span class="amount">55.00</span></ins></span>
										<div class="product-actions-mobile">
											<a href="#" class="button pill add-to-cart-button medium">study</a>
										</div>
									</div>
								</div>
								<div class="grid-item product portrait">
									<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
										<a class="overlay-link" href="single-product.html">
											<img src="images/shop/grid/large-margins/product-6-portrait.jpg" alt=""/>
										</a>
										<div class="product-actions center">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
									<div class="product-details center">
										<h3 class="product-title">
											<a href="#">
												Fdfsdf
											</a>
										</h3>
										<span class="product-price price"><ins><span class="amount">47.00</span></ins></span>
										<div class="product-actions-mobile">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
								</div>
								<div class="grid-item product portrait">
									<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
										<a class="overlay-link" href="single-product.html">
											<img src="images/shop/grid/large-margins/product-7-portrait.jpg" alt=""/>
										</a>
										<div class="product-actions center">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
									<div class="product-details center">
										<h3 class="product-title">
											<a href="#">
												Hipster Nylon <span class="font-alt-2">&amp;</span> Architecture
											</a>
										</h3>
										<span class="product-price price"><ins><span class="amount">99.00</span></ins></span>
										<div class="product-actions-mobile">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
								</div>
								<div class="grid-item product portrait">
									<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
										<a class="overlay-link" href="single-product.html">
											<img src="images/shop/grid/large-margins/product-3-portrait.jpg" alt=""/>
										</a>
										<div class="product-actions center">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
									<div class="product-details center">
										<h3 class="product-title">
											<a href="#">
												Cotton <span class="font-alt-2">&amp;</span>
											</a>
										</h3>
										<span class="product-price price"><ins><span class="amount">135.00</span></ins></span>
										<div class="product-actions-mobile">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
								</div>
								<div class="grid-item product portrait">
									<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
										<a class="overlay-link" href="single-product.html">
											<img src="images/shop/grid/large-margins/product-9-portrait.jpg" alt=""/>
										</a>
										<div class="product-actions center">
											<a href="#" class="button pill add-to-cart-button medium">Study</a>
										</div>
									</div>
									<div class="product-details center">
										<h3 class="product-title">
											<a href="#">
												chemistry
											</a>
										</h3>
										<span class="product-price price"><ins><span class="amount">129.00</span></ins></span>
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
			<!-- Product Grid End -->

			<!-- Sidebar -->
			<aside class="column width-3 sidebar right">
				<div class="sidebar-inner">
					<div class="widget widget-product-categories">
						<h3 class="widget-title">Categories</h3>
						<ul class="product-categories">
							<li><a href="#">All Courses</a></li>
							<li><a href="#">Computer Science</a></li>
							<li><a href="#">Data Scineces</a></li>
							<li><a href="#">Arts</a></li>
							<li><a href="#">Medical Sceinces</a></li>
							<li><a href="#"Eng. Sciences</a></li>
						</ul>
					</div>
					<div class="widget widget-top-rated-products">
						<h3 class="widget-title">Top Rated</h3>
						<ul class="product-list list-group">
							<li>
								<a href="#">
									<span class="product-thumbnail">
										<img src="images/shop/cart/cart-thumb-small-4.jpg" alt="" />
									</span>
									<span class="product-title">Comuter</span>
								</a>
								<span class="star-rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-outlined"></span></span>
								<span class="product-price price"><del><span class="amount"></span></del><ins><span class="amount">17.00</span></ins></span>
							</li>
							<li>
								<a href="#">
									<span class="product-thumbnail">
										<img src="images/shop/cart/cart-thumb-small-5.jpg" alt="" />
									</span>
									<span class="product-title">Medical science</span>
								</a>
								<span class="star-rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-outlined"></span><span class="icon-star-outlined"></span></span>
								<span class="product-price price"><ins><span class="amount">17.00</span></ins></span>
							</li>
						</ul>
					</div>
					<div class="widget widget-product-tag-cloud">
						<h3 class="widget-title">Corse Tags</h3>
						<ul class="product-tag-cloud tag-cloud">
							<li>
								<a href="#">Vintage</a>
								<a href="#">Sounds</a>
								<a href="#">Photo Trends</a>
								<a href="#">Hobby</a>
								<a href="#">Illustrations</a>
								<a href="#">Work</a>
								<a href="#">Cultural</a>
								<a href="#">Urban Design</a>
								<a href="#">Oldschool</a>
							</li>
						</ul>
					</div>
					<div class="widget widget-shopping-cart-overview">
						<h3 class="widget-title">Cart</h3>
						<ul class="product-list cart-overview list-group">
							<li class="cart-item">
								<a href="#" class="product-remove icon-cancel"></a>
								<a href="#">
									<span class="product-thumbnail">
										<img src="images/shop/cart/cart-thumb-small.jpg" alt="" />
									</span>
									<span class="product-title">Deep V-Nect</span>
								</a>
								<span class="product-price price"><del><span class="amount"></span></del><ins><span class="amount">17.00</span></ins></span>
							</li>
							<li class="cart-item">
								<a href="#" class="product-remove icon-cancel"></a>
								<a href="#">
									<span class="product-thumbnail">
										<img src="images/shop/cart/cart-thumb-small-3.jpg" alt="" />
									</span>
									<span class="product-title">Biology</span>
								</a>
								<span class="product-price price"><ins><span class="amount">17.00</span></ins></span>
							</li>
							
							<li class="cart-actions">
								<a href="cart.html" class="view-cart fade-location">View Cart</a>
								<a href="checkout.html" class="checkout fade-location"><span class="icon-check"></span> Checkout</a>
							</li>
						</ul>
					</div>
					<!-- Recently Viewed -->
					<div class="widget widget-recently-viewed-products">
						<h3 class="widget-title">Recently Viewed</h3>
						<ul class="product-list list-group">
							<li>
								<a href="#">
									<span class="product-thumbnail">
										<img src="images/shop/cart/cart-thumb-small-2.jpg" alt="" />
									</span>
									<span class="product-title">Cot</span>
								</a>
								<span class="product-price price"><del><span class="amount"></span></del><ins><span class="amount">17.00</span></ins></span>
							</li>
							<li>
								<a href="#">
									<span class="product-thumbnail">
										<img src="images/shop/cart/cart-thumb-small-3.jpg" alt="" />
									</span>
									<span class="product-title">Cros</span>
								</a>
								<span class="product-price price"><ins><span class="amount">17.00</span></ins></span>
							</li>
						</ul>
					</div>
					<div class="widget">
						<div class="box bkg-grey-ultralight mb-50">
							<h3 class="widget-title">Shipping Options</h3>
							<p><strong>Starting a new business?</strong> Then Warhol is for you! Warhol comes with a multitude of carfully designed page layouts and purpose built content blocks that when pieced together create stunning, professional layouts.<p>
						</div>
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
					<li><a class="pagination-previous disabled" href="#"><span class="icon-left-open-mini"></span></a></li>
					<li><a class="current" href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a class="pagination-next" href="#"><span class="icon-right-open-mini"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Pagination Section 3 End -->
@endsection
