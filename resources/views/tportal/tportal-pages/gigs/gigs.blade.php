@extends('current-tech-course.clayouts.clayout')

@section('content')

<!-- Cart Overview -->
<div class="section-block cart-overview">
	<div class="row">
		<div class="column width-12">
			{{--  <h5>Gigs</h5>  --}}
			<div class="row">
				<div class="offset width-5">
					<a href="{{ route('gigs.create') }}" class="button pill thick border-theme border-hover-theme color-theme color-hover-theme">ADD NEW</a>
				</div>
				</div>
			<div class="payment-details box large">
				<div class="cart-review">
					<table class="table non-responsive">
						<thead>
							<tr>
								{{--  <th class="product-remove"></th>  --}}
								{{--  <th class="product-thumbnail"></th>  --}}
								<th class="product-name">Course Title</th>
								<th class="product-quantity">Location</th>
								<th class="product-price">Enrolled</th>
								<th class="product-price">Charges Type</th>
								<th class="product-price">Charges</th>
								<th class="product-price">Tuition Type</th>
								<th class="product-quantity">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tuitions as $tuition)
							<tr class="cart-item">
								{{--  <td class="product-remove center">
									<a href="#" class="product-remove icon-cancel"></a>
								</td>  --}}
								{{--  <td class="product-thumbnail">
									<a href="#">
										<img src="images/shop/cart/cart-thumb-large.jpg" alt="" />
									</a>
								</td>  --}}
								<td class="product-name">
									<a href="" class="product-title">{{ $tuition->title }}</a>
								</td>
								<td class="product-price">
									<span class="amount">{{ $tuition->area }}, {{ $tuition->city }}</span>
								</td>
								<td class="product-quantity">
									<span class="amount">1</span>
								</td>
								<td class="product-quantity">
									<span class="amount">{{ $tuition->charges_type }}</span>
								</td>
								<td class="product-quantity">
									<span class="amount">{{ $tuition->charges }}</span>
								</td>
								<td class="product-quantity">
									<span class="amount">{{ $tuition->type }}</span>
								</td>
								<td>
									<div class="row"><!--action="{{ route('gigs.edit', $tuition->id) }}"-->
                    					<div class="column width-4">
										<form method="GET" action="{{ route('gigs.edit', $tuition->id) }}" >
								<button href="{{ route('gigs.edit', $tuition->id) }}">	<i class="material-icons">edit</i></button>
										</form>
										</div>
										<div class="column width-2">
											<form method="POST" action="{{ route('gigs.destroy', $tuition->id) }}">
												@csrf
												{{ method_field('DELETE') }}
												<button type="submit"><a>	<i class="material-icons">close</i></a></button>
											</form>
										</div>
									</div>
								</td>
								{{--  <td>
									<a href="{{ route('gigs.destroy', $tuition->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a>
									<a href="{{ route('gigs.edit', $tuition->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Edit</a>

								</td>  --}}
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
