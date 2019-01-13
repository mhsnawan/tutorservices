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
										<span></span></p><hr>
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
													<span class="project-label">Charges Type: </span><span class="project-value"> {{ $course->charges_type }}</span>
												</p>
												<p class="project-attribute">
													<span class="project-label">Charges: </span><span class="project-value"> {{ $course->charges }}</span>
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
									@if(Auth::check())
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
		@if(Auth::check())
		@if(Auth::user()->role == 1 && !$check_enrolled && !$check_review)
		<!-- Sidebar End -->
		<form method="post" action="{{ route('reviews.store') }}">
			@csrf
			<div Class="row">
				<div class="checkout-payment">
					<table class="table non-responsive">
						<tbody>
							<tr class="payment-method-1">
								<td>
									<div class="column width-4">
										<p>How do you rate your overall experience?</p>
									</div>
									<div class="column width-4">
										<div class="widget">
											<span class="rating">
											<input type="radio" id="star51" name="overall_rating" value="5" /><label class = "full" for="star51" title="Awesome - 5 stars"></label>
											<input type="radio" id="star4half1" name="overall_rating" value="4.5" /><label class="half" for="star4half1" title="Pretty good - 4.5 stars"></label>
											<input type="radio" id="star41" name="overall_rating" value="4" /><label class = "full" for="star41" title="Pretty good - 4 stars"></label>
											<input type="radio" id="star3half1" name="overall_rating" value="3.5" /><label class="half" for="star3half1" title="Meh - 3.5 stars"></label>
											<input type="radio" id="star31" name="overall_rating" value="3" /><label class = "full" for="star31" title="Meh - 3 stars"></label>
											<input type="radio" id="star2half1" name="overall_rating" value="2.5" /><label class="half" for="star2half1" title="Kinda bad - 2.5 stars"></label>
											<input type="radio" id="star21" name="overall_rating" value="2" /><label class = "full" for="star21" title="Kinda bad - 2 stars"></label>
											<input type="radio" id="star1half1" name="overall_rating" value="1.5" /><label class="half" for="star1half1" title="Meh - 1.5 stars"></label>
											<input type="radio" id="star11" name="overall_rating" value="1" /><label class = "full" for="star11" title="Sucks big time - 1 star"></label>
											<input type="radio" id="starhalf1" name="overall_rating" value="0.5" /><label class="half" for="starhalf1" title="Sucks big time - 0.5 stars"></label>
											</span>
										</div>
									</div>
								</td>
							</tr>
							<tr class="payment-method-2">
								<td>
									<div class="column width-4">
										<p>Was your tutor punctual?</p>
									</div>
									<div class="column width-4">
										<div class="widget">
											<span class="rating">
												<input type="radio" id="star52" name="punctual_rating" value="5" /><label class = "full" for="star52" title="Awesome - 5 stars"></label>
												<input type="radio" id="star4half2" name="punctual_rating" value="4.5" /><label class="half" for="star4half2" title="Pretty good - 4.5 stars"></label>
												<input type="radio" id="star42" name="punctual_rating" value="4" /><label class = "full" for="star42" title="Pretty good - 4 stars"></label>
												<input type="radio" id="star3half2" name="punctual_rating" value="3.5" /><label class="half" for="star3half2" title="Meh - 3.5 stars"></label>
												<input type="radio" id="star32" name="punctual_rating" value="3" /><label class = "full" for="star32" title="Meh - 3 stars"></label>
												<input type="radio" id="star2half2" name="punctual_rating" value="2.5" /><label class="half" for="star2half2" title="Kinda bad - 2.5 stars"></label>
												<input type="radio" id="star22" name="punctual_rating" value="2" /><label class = "full" for="star22" title="Kinda bad - 2 stars"></label>
												<input type="radio" id="star1half2" name="punctual_rating" value="1.5" /><label class="half" for="star1half2" title="Meh - 1.5 stars"></label>
												<input type="radio" id="star12" name="punctual_rating" value="1" /><label class = "full" for="star12" title="Sucks big time - 1 star"></label>
												<input type="radio" id="starhalf2" name="punctual_rating" value="0.5" /><label class="half" for="starhalf2" title="Sucks big time - 0.5 stars"></label>
											</span>
										</div>
									</div>
								</td>
							</tr>
							<tr class="payment-method-3">
								<td>
									<div class="column width-4">
										<p>Does he has complete knowledge about the subject he is teaching?</p>
									</div>
									<div class="column width-4">
										<div class="widget">
											<span class="rating">
											<input type="radio" id="star53" name="subject_rating" value="5" /><label class = "full" for="star53" title="Awesome - 5 stars"></label>
											<input type="radio" id="star4half3" name="subject_rating" value="4.5" /><label class="half" for="star4half3" title="Pretty good - 4.5 stars"></label>
											<input type="radio" id="star43" name="subject_rating" value="4" /><label class = "full" for="star43" title="Pretty good - 4 stars"></label>
											<input type="radio" id="star3half3" name="subject_rating" value="3.5" /><label class="half" for="star3half3" title="Meh - 3.5 stars"></label>
											<input type="radio" id="star33" name="subject_rating" value="3" /><label class = "full" for="star33" title="Meh - 3 stars"></label>
											<input type="radio" id="star2half3" name="subject_rating" value="2.5" /><label class="half" for="star2half3" title="Kinda bad - 2.5 stars"></label>
											<input type="radio" id="star23" name="subject_rating" value="2" /><label class = "full" for="star23" title="Kinda bad - 2 stars"></label>
											<input type="radio" id="star1half3" name="subject_rating" value="1.5" /><label class="half" for="star1half3" title="Meh - 1.5 stars"></label>
											<input type="radio" id="star13" name="subject_rating" value="1" /><label class = "full" for="star13" title="Sucks big time - 1 star"></label>
											<input type="radio" id="starhalf3" name="subject_rating" value="0.5" /><label class="half" for="starhalf3" title="Sucks big time - 0.5 stars"></label>
											</span>
										</div>
									</div>
								</td>
							</tr>
							<tr class="payment-method-4">
								<td>
									<div class="column width-4">
										<p>Does he has ability to deliver what he is teaching?</p>
									</div>
									<div class="column width-4">
										<div class="widget">
											<span class="rating">
											<input type="radio" id="star54" name="ability_rating" value="5" /><label class = "full" for="star54" title="Awesome - 5 stars"></label>
											<input type="radio" id="star4half4" name="ability_rating" value="4.5" /><label class="half" for="star4half4" title="Pretty good - 4.5 stars"></label>
											<input type="radio" id="star44" name="ability_rating" value="4" /><label class = "full" for="star44" title="Pretty good - 4 stars"></label>
											<input type="radio" id="star3half4" name="ability_rating" value="3.5" /><label class="half" for="star3half4" title="Meh - 3.5 stars"></label>
											<input type="radio" id="star34" name="ability_rating" value="3" /><label class = "full" for="star34" title="Meh - 3 stars"></label>
											<input type="radio" id="star2half4" name="ability_rating" value="2.5" /><label class="half" for="star2half4" title="Kinda bad - 2.5 stars"></label>
											<input type="radio" id="star24" name="ability_rating" value="2" /><label class = "full" for="star24" title="Kinda bad - 2 stars"></label>
											<input type="radio" id="star1half4" name="ability_rating" value="1.5" /><label class="half" for="star1half4" title="Meh - 1.5 stars"></label>
											<input type="radio" id="star14" name="ability_rating" value="1" /><label class = "full" for="star14" title="Sucks big time - 1 star"></label>
											<input type="radio" id="starhalf4" name="ability_rating" value="0.5" /><label class="half" for="starhalf4" title="Sucks big time - 0.5 stars"></label>
											</span>
										</div>
									</div>
								</td>
							</tr>
							<tr class="payment-method-5">
								<td>
									<div class="column width-4">
										<p>His method of teaching meet your demands?</p>
									</div>
									<div class="column width-4">
										<div class="widget">
											<span class="rating">
											<input type="radio" id="star55" name="demands_rating" value="5" /><label class = "full" for="star55" title="Awesome - 5 stars"></label>
											<input type="radio" id="star4half5" name="demands_rating" value="4.5" /><label class="half" for="star4half5" title="Pretty good - 4.5 stars"></label>
											<input type="radio" id="star45" name="demands_rating" value="4" /><label class = "full" for="star45" title="Pretty good - 4 stars"></label>
											<input type="radio" id="star3half5" name="demands_rating" value="3.5" /><label class="half" for="star3half5" title="Meh - 3.5 stars"></label>
											<input type="radio" id="star35" name="demands_rating" value="3" /><label class = "full" for="star35" title="Meh - 3 stars"></label>
											<input type="radio" id="star2half5" name="demands_rating" value="2.5" /><label class="half" for="star2half5" title="Kinda bad - 2.5 stars"></label>
											<input type="radio" id="star25" name="demands_rating" value="2" /><label class = "full" for="star25" title="Kinda bad - 2 stars"></label>
											<input type="radio" id="star1half5" name="demands_rating" value="1.5" /><label class="half" for="star1half5" title="Meh - 1.5 stars"></label>
											<input type="radio" id="star15" name="demands_rating" value="1" /><label class = "full" for="star15" title="Sucks big time - 1 star"></label>
											<input type="radio" id="starhalf5" name="demands_rating" value="0.5" /><label class="half" for="starhalf5" title="Sucks big time - 0.5 stars"></label>
											</span>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="post-comment-respond">
					<h3 class="reply-title">Leave a Feedback</h3>
						<input type="hidden" value="{{ $id }}" name="course_teacher_id">
						<div class="row">
							<div class="column width-12">
								<input type="text" name="comment" class="form-message form-element" rows="2" placeholder="Feedback*" tabindex="5" required>
								<div class="column width-6"><a href=""></a>.</div>
								<input type="submit" value="Add Review" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white no-margin-bottom">
							</div>
						</div>
					<br>
				</div>
			</div>
		</form>
		@endif
		@endif
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
					<a href="#tabs-1-pane-3" id="reviews">Reviews({{ $count }})</a>
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
									@foreach($reviews as $review)
									<li>
										<article class="comment">
											<div class="user-avatar">
												<img class="avatar_all_students" src="/storage/{{ App\User::find($review->user_id)->profile_img}}" alt="Avatar"/>
											</div>
											<div class="comment-content">
									<h5 class="name">{{ App\User::find($review->user_id)->name }}</h5>
												<div class="comment-meta">
															<div class="column width-2">
													<span class="post-date">{{ $review->created_at->format('d M,Y') }}</span></div>{{--<span class="review-star-rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-outlined"></span></span>--}}
													<div class="column width-3">
														<div class="widget">
															<span class="rating">
															<input type="radio" id="star55" name="demands_rating" value="5" /><label class = "full" for="star55" title="Awesome - 5 stars"></label>
															<input type="radio" id="star4half5" name="demands_rating" value="4.5" /><label class="half" for="star4half5" title="Pretty good - 4.5 stars"></label>
															<input type="radio" id="star45" name="demands_rating" value="4" /><label class = "full" for="star45" title="Pretty good - 4 stars"></label>
															<input type="radio" id="star3half5" name="demands_rating" value="3.5" /><label class="half" for="star3half5" title="Meh - 3.5 stars"></label>
															<input type="radio" id="star35" name="demands_rating" value="3" /><label class = "full" for="star35" title="Meh - 3 stars"></label>
															<input type="radio" id="star2half5" name="demands_rating" value="2.5" /><label class="half" for="star2half5" title="Kinda bad - 2.5 stars"></label>
															<input type="radio" id="star25" name="demands_rating" value="2" /><label class = "full" for="star25" title="Kinda bad - 2 stars"></label>
															<input type="radio" id="star1half5" name="demands_rating" value="1.5" /><label class="half" for="star1half5" title="Meh - 1.5 stars"></label>
															<input type="radio" id="star15" name="demands_rating" value="1" /><label class = "full" for="star15" title="Sucks big time - 1 star"></label>
															<input type="radio" id="starhalf5" name="demands_rating" value="0.5" /><label class="half" for="starhalf5" title="Sucks big time - 0.5 stars"></label>
															</span>
														</div>
													</div>
												</div>
                       <br>
											 <br>
												<p>{{ $review->comment }}</p>
											</div>
										</article>
									</li>
									@endforeach
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
