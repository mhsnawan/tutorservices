@extends('current-tech-course.clayouts.clayout')

@section('content')


<div class="section-block cart-overview">
	<div class="row">
		<div class="column width-12"><h5>Pending Requests.</h5>
			<div class="payment-details box large">
				<div class="cart-review">
					<table class="table non-responsive">
						<thead>
							<tr>
								<th class="product-name">Course</th>
								<th class="product-price">Student Name</th>
								<th class="product-quantity">Phone Number</th>
								<th class="product-quantity">Location</th>
								<th class="product-quantity">Request At</th>
								<th class="product-subtotal">Status</th>
								<th class="product-quantity">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($data as $item)
							<tr class="cart-item">
								<td class="product-name">
									<a href="{{ route('course.view', $item['course_id']) }}" class="product-title">{{ $item['tution_title'] }}</a>
								</td>
								<td class="product-price">
									<span class="amount">{{ $item['student_name'] }}</span>
								</td>
								<td class="product-quantity">
									<span class="amount">{{ $item['student_phone'] }}</span>
								</td>
								<td class="product-subtotal">
									<span class="amount">{{ $item['tution_area'] }}, {{ $item['tution_city'] }}</span>
								</td>
								<td class="product-subtotal">
									<span class="amount">{{ $item['created_at'] }}</span>
								</td>
								<td class="product-subtotal">
									<span class="amount">Not Verified</span>
								</td>
								<td>
									<div class="row">
										<form method="GET" action="{{ route('accept.course', $item['id']) }}">
											<button class="btn btn-primary btn-link btn-sm" type="submit" rel="tooltip" title="Verify User">
												<i class="material-icons">verified_user</i>
											</button>
										</form>
										<form method="post" action="">
											@csrf
											{{ method_field('DELETE') }}
											<button type="submit" rel="tooltip" title="Delete Course" class="btn btn-danger btn-link btn-sm">
												<i class="material-icons">clear</i>
											</button>
										</form>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
    
@endsection
