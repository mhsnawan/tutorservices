@extends('current-tech-course.clayouts.clayout')

@section('content')

<div class="section-block clearfix no-padding-bottom">
	<div class="row">
		<div class="column width-9 content-inner">

			<!-- Filter -->
			<div class="section-block pt-0 pb-50">
			<!--	<div class="row">-->
					<!-- Content -->
					<div class="section-block replicable-content pb-0">
						<div class="row">
							<div style="left:200px" class="column width-12  left-on-mobile">
								<div class="pu-100">
									<p class="title-medium font-alt-2 weight-light color-theme pu-10 mb-0" >{{ $course->title }}</p>
									<p class="mb-0">Posted By : {{ $user->name }}  |  Posted On : {{ $course->created_at->format('d/m/y') }}
										{{--  |Email<span  class="icon-circled icon-check small rounded border-green-light color-green bkg-hover-blue-light color-hover-white thick"></span>|Phone  --}}
										<span  ></span></p><hr>
										<h4>Description</h4>
										<p>{{ $course->description }}</p>
										<hr>
									<div class="row">
										<div class="column width-6">
											<h3>Course Information</h3>
                       						<div class="column width-8">
												<p class="project-attribute">
													<span class="project-label">Course Name: </span><span class="project-value"> {{ $subject->course_name }}</span>
												</p>
												<p class="project-attribute">
													<span class="project-label">Class: </span><span class="project-value"> {{ $course->class }}</span>
												</p>
												<p class="project-attribute">
													<span class="project-label">Tution Type: </span><span class="project-value"> {{ $course->type }}</span>
												</p>
												<p class="project-attribute">
													<span class="project-label">Budget: </span><span class="project-value"> {{ $course->fee }}</span>
												</p>
												<p class="project-attribute">
													<span class="project-label">Location:</span><span class="project-value">{{ $course->area }}, {{ $course->city }}</span>
												</p>
												<p class="project-attribute">
													<span class="project-label">Prefered Days:  </span><span class="project-value">{{ $course->day_from }} - {{ $course->day_to }}</span>
												</p>
												<p class="project-attribute">
													<span class="project-label">Prefered Timing:  </span><span class="project-value">{{ $course->time_from }} - {{ $course->time_to }}</span>
												</p>
											</div>
										</div>
										<div class="column width-4">
											<h3>Tutor Information</h3>
											<p class="project-attribute">
												<span class="project-label">Name:</span><span class="project-value"><a href="{{ route('profile.id', $user->id) }}">{{ $user->name }}</a></span>
											</p>
											<p class="project-attribute">
												<span class="project-label">Email:</span><span class="project-value">{{ $user->email }}</span>
											</p>
											<p class="project-attribute">
												<span class="project-label">Phone:</span><span class="project-value">{{ $user->phone }}</span>
											</p>
											<p class="project-attribute">
												<span class="project-label">City:</span><span class="project-value">{{ $user->city }}</span>
											</p>
											<p class="project-attribute">
												<span class="project-label">Status:</span><span class="project-value">@if($user->verified == 0) Not Verified @else Verified @endif</span>
											</p>
										</div>
									</div>

								</div>
								{{--  <div class="column width-12">
									<p class="project-attribute">
										<span class="project-label">Subjects :</span><span class="project-value">The NatGeo Company</span>
									</p>
									<p class="project-attribute">
										<span class="project-label">Required Days:</span><span class="project-value">MOnday,Tuesday,Wednesday</span>
									</p>
									<p class="project-attribute">
										<span class="project-label">Requirements:</span><span class="project-value">Videography, Photography</span>
									</p>
								</div>  --}}
								<h5 class="mb-30">Give Feedback Here.</h5>
							</div>
						</div>
					</div>
					<!-- Content
				</div>-->
			</div>
			<!-- Filter End -->
		</div>

		<!-- Sidebar -->
		<aside class="column width-3 sidebar right">
			<div class="sidebar-inner">
				<div class="widget widget-top-rated-products">
					<div class="row">
							<div class="button-group">
								<form method="POST" action="{{ route('enroll.store') }}" >
									@csrf
									<div class="field-wrapper">
										<input type="text" value="{{ $course->id }}" name="course_teacher_id" hidden>
										<input type="text" value="{{ $course->teacher_id }}" name="teacher_id" hidden>
										<input type="text" value="{{ $course->course_id }}" name="course_id" hidden>
										@if(Auth::user()->role == 1)
											@if($check_enrolled == true)
											<input type="submit" value="Enroll Now" class="button pill thick border-theme border-hover-theme color-theme color-hover-theme">
											@else
											<input type="submit" value="Enrolled" class="button pill thick border-theme border-hover-theme color-theme color-hover-theme" disabled>
											@endif
										@endif
									</div>
								</form>
								@if($course->user_id != Auth::user()->id)
								<a onclick="getMessages({{ $course['user_id'] }})" class="button pill thick border-theme border-hover-theme color-theme color-hover-theme">Message</a><br>
								@endif
							</div>

					</div>
					{{--  <h3 class="widget-title">More Jobs For U</h3>
					<ul class="product-list list-group">
						<li>
							<a href="#">
								<span class="product-thumbnail">
								<img src="images/shop/cart/cart-thumb-small-4.jpg" alt="" />
							</span>
								<span class="product-title">Need Chemistry<br> for 2nd year</span>
							</a>
						</li>

						<li>
							<a href="#">
								<span class="product-thumbnail">
								<img src="images/shop/cart/cart-thumb-small-4.jpg" alt="" />
							</span>
								<span class="product-title">Need Chemistry<br> for 2nd year</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="product-thumbnail">
									<img src="images/shop/cart/cart-thumb-small-4.jpg" alt="" />
								</span>
								<span class="product-title">Need Spoken <br>English</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="product-thumbnail">
									<img src="images/shop/cart/cart-thumb-small-4.jpg" alt="" />
								</span>
								<span class="product-title">Need Spoken English</span>
							</a>
						</li>
					</ul>  --}}
				</div>
			</div>
		</aside>
		<!-- Sidebar End -->

		<div Class="row">
		<div class="checkout-payment">

										<table class="table non-responsive">
										<tbody>
												<tr class="payment-method-1">
													<td>
		                        <form method=""><div class="column width-4"><p>How do you rate your overall experience?</p></div>
															<div class="column width-4">
													 				<div class="widget">
													 					<span class="rating">
													 					<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
													 					<input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
													 					<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
													 					<input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
													 					<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
													 					<input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
													 					<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
													 					<input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
													 					<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
													 					<input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
													 					</span>
													 				</div>
													 			</div>
		                    </form>
													</td>
												</tr>
												<tr class="payment-method-2">
													<td>
														<form method=""><div class="column width-4"><p>Was Your Tutor Punctual?</p></div>
														 <div class="column width-4">
																 <div class="widget">
																	 <span class="rating">
 																	<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
 																	<input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
 																	<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
 																	<input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
 																	<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
 																	<input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
 																	<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
 																	<input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
 																	<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
 																	<input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
 																	</span>
																 </div>
															 </div>
														 </form>
													</td>
												</tr>
		                    <tr class="payment-method-3">
													<td>
														<form method=""><div class="column width-4">	<p>Does He Has copmlete Knowledge About Subject He is Teaching?</p></div>
														 <div class="column width-4">
																 <div class="widget">
																	 <span class="rating">
																	 <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
																	 <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
																	 <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
																	 <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
																	 <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
																	 <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
																	 <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
																	 <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
																	 <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
																	 <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
																	 </span>
																 </div>
															 </div>
														 </form>
													</td>
												</tr>
		                    <tr class="payment-method-4">
													<td>

														<form method=""><div class="column width-4"><p>Does he has ability to deliver what he is teaching?</p></div>
														 <div class="column width-4">
																 <div class="widget">
																	 <span class="rating">
																	 <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
																	 <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
																	 <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
																	 <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
																	 <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
																	 <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
																	 <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
																	 <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
																	 <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
																	 <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
																	 </span>
																 </div>
															 </div>
														 </form>
													</td>
												</tr>
		                    <tr class="payment-method-5">
													<td>
														<form method=""><div class="column width-4">	<p>His method of Teaching meet Yours Demand?</p></div>
														 <div class="column width-4">
																 <div class="widget">
																	 <span class="rating">
																	 <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
																	 <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
																	 <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
																	 <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
																	 <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
																	 <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
																	 <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
																	 <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
																	 <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
																	 <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
																	 </span>
																 </div>
															 </div>
														 </form>
													</td>
												</tr>
											</tbody>
										</table>
			</div>
		    <div class="post-comment-respond">
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
													<input type="date" name="date" class="form-website form-element" placeholder="Website" tabindex="4">
												</div>
												<div class="column width-6">
													<input type="text" name="honeypot" class="form-honeypot form-element">
												</div>
											</div>
											<div class="row">
												<div class="column width-12">
													<textarea name="message" class="form-message form-element" placeholder="Message*" tabindex="5" required></textarea>
		                         <div class="column width-6"><a href=""></a>.</div>
		                    	<input type="submit" value="Add Review" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white no-margin-bottom">
												</div>
											</div>
										</form>
		                <br>
									</div>
		</div>
	<!--	<form method="post" action="{{ route('reviews.store') }}">
			@csrf
			<input type="hidden" value="{{ $id }}" name="course_teacher_id">
		<div class="column width-4">
				<span>Rating</span>
				<div class="widget">
					<span class="rating">
					<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
					<input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
					<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
					<input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
					<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
					<input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
					<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
					<input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
					<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
					<input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
					</span>
				</div>
			</div>
			<div class="column width-10">
				<div class="field-wrapper">
					<label>Comment</label>
					<input type="text" name="comment" class="form-lname form-element large" placeholder="" tabindex="2">
				</div>
			</div>
			<div class="column width-12">
				<input type="submit" value="Add Review" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
			</div>
		</form>-->
	</div>
</div>

<!-- Related Info -->
					<div class="row product-related">
						<div class="column width-12">
							<div class="tabs product-tabs style-2">
								<ul class="tab-nav">
								<!--	<li >
										<a href="#tabs-1-pane-1">Description</a>
									</li>
									<li>
										<a href="#tabs-1-pane-2">More Info</a>
									</li>-->
									<li class="active">
										<a href="#tabs-1-pane-3" id="reviews">Reviews (3)</a>
									</li>
								</ul>
								<div class="tab-panes">
									<div id="tabs-1-pane-1" >
										<div class="tab-content">
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidun.</p>
										</div>
									</div>
									<div id="tabs-1-pane-2">
										<div class="tab-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
									<div id="tabs-1-pane-3" class="active animate">
										<div class="tab-content left">
											<!-- Reviews -->
											<div class="review-comments">

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

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Related Info End -->

<script>
		function getMessages(user_id){
			$.ajax({
				url: "{{ route('get-con') }}",
				data: {
					_token: '{{ csrf_token() }}',
					user_id: user_id
					},
				success: function(data){
					if(data.check == 1){
						window.location = "/inbox";
						console.log('check is 1');
					}
					else{
						window.location = "/new-chat/"+data.user2;
					}

				},
				error: function(){
				}
			});
		}
	</script>
@endsection
