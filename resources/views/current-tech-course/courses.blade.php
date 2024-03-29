
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
								<p>Showing {{ count($courses) }} results</p>
							</div>
						</div>
						{{--  <div class="column width-3 offset-2">
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
						</div>  --}}
					</div>
				</div>
				<!-- Filter End -->

				<!-- Product Grid -->
				<div id="product-grid" class="grid-container products fade-in-progressively no-padding-top" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="700">
					<div class="row">
						@foreach ($courses as $course)
						<div class="column width-12">
							<div class="cart-totals box xlarge bkg-grey-ultralight">
                 				<p class="title-medium font-alt-2 weight-light color-theme pu-10 mb-0" ><a href="{{ route('course.view', $course['id']) }}">{{ $course['title'] }}</a></p>
                  				<div class="column width-3">
							       	<p class="mb-0">Posted By : <a href="{{ route('profile.id', $course['user_id']) }}">{{ $course['tutor_name'] }}</a><br>Posted : {{ $course['created_at']->format('d-m-Y') }}</p>
							    </div>
                  				<div class="column width-3">
								    <span class="text-small weight-bold"><span class="icon-location"></span>{{ $course['area'] }}, {{ $course['city'] }}</span>
								</div>
								<br>
                   				<div class="column width-6">
								@if(Auth::check())
									@if(Auth::user()->id != $course['user_id'])<a onclick="getMessages({{ $course['user_id'] }})" class="button pill checkout no-margin-bottom fade-location">Send Message</a> @endif
								@endif
								    <a href="{{ route('course.view', $course['id']) }}" class="button pill checkout no-margin-bottom fade-location">View Details</a>
								</div>
	                    		{{--  <a href="#">Requirements</a>  --}}
						  	</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- Product Grid End -->

			<!-- Sidebar -->
			<aside class="column width-3 sidebar right">
				<div class="sidebar-inner">
					<div class="widget widget-product-tag-cloud">
						<ul class="product-tag-cloud tag-cloud">
							<li>
							</li>
						</ul>
					</div>
					<div class="widget widget-shopping-cart-overview">
						<ul class="product-list cart-overview list-group">
							<li >
							</li>
							<li class="cart-item">
								
							</li>
							<li class="cart-actions">
							</li>
						</ul>
					</div>
					<!-- Recently Viewed -->
					<div class="widget widget-recently-viewed-products">
						<ul class="product-list list-group">
							<li>
								<a href="#">
									<span class="product-thumbnail">

									</span>
									<span class="product-title"></span>
								</a>
							</li>
						</ul>
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
