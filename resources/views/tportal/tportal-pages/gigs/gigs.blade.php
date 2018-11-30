@extends('current-tech-course.clayouts.clayout')

@section('content')

<!-- Cart Overview -->
<div class="section-block cart-overview">
	<div class="row">
		<div class="column width-12"><h5>Gigs</h5>
			<div class="row">
				<div class="offset width-5">
					<a href="#" class="button pill thick border-theme border-hover-theme color-theme color-hover-theme">Just Border</a>
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
								<th class="product-price">Budget</th>
								<th class="product-price">Tution Type</th>
								<th class="product-quantity">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tutions as $tution)
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
									<a href="" class="product-title">{{ $tution->title }}</a>
								</td>
								<td class="product-price">
									<span class="amount">{{ $tution->area }}, {{ $tution->city }}</span>
								</td>
								<td class="product-quantity">
									<span class="amount">1</span>
								</td>
								<td class="product-quantity">
									<span class="amount">{{ $tution->fee }}</span>
								</td>
								<td class="product-quantity">
									<span class="amount">{{ $tution->type }}</span>
								</td>
								<td>
									<div class="row">
										<form method="GET" action="{{ route('gigs.edit', $tution->id) }}">
											<button class="btn btn-primary btn-link btn-sm" type="submit" rel="tooltip" title="Edit Course">
												<i class="material-icons">edit</i>
											</button>
										</form>
										<form method="post" action="{{ route('gigs.destroy', $tution->id) }}">
											@csrf
											{{ method_field('DELETE') }}
											<button type="submit" rel="tooltip" title="Delete Course" class="btn btn-danger btn-link btn-sm">
												<i class="material-icons">close</i>
											</button>
										</form>
									</div>
								</td>
								{{--  <td>
									<a href="{{ route('gigs.destroy', $tution->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a>
									<a href="{{ route('gigs.edit', $tution->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Edit</a>
									
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
