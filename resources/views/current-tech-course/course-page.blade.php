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

								</div><hr>
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
										@if(Auth::user()->role != 2)
										<input type="submit" value="Enroll Now" class="button pill thick border-theme border-hover-theme color-theme color-hover-theme">
										@endif
									</div>
								</form>

								<a href="#" class="button pill thick border-theme border-hover-theme color-theme color-hover-theme">Message</a><br>
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

	</div>
</div>
@endsection
