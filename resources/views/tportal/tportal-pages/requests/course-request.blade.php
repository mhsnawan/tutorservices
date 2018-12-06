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
							<tr class="cart-item">
								<td class="product-name">
									<a href="" class="product-title">Automata Theory</a>
								</td>
								<td class="product-price">
									<span class="amount">Aqeel Ahmed Khan</span>
								</td>
								<td class="product-quantity">
									<span class="amount">0345-3044532</span>
								</td>
								<td class="product-subtotal">
									<span class="amount">Chaklala Scheme 3, Islamabad</span>
								</td>
								<td class="product-subtotal">
									<span class="amount">Date and time</span>
								</td>
								<td class="product-subtotal">
									<span class="amount">Not Verifieds</span>
								</td>
								<td>
									<div class="row">
										<form method="GET" action="">
											<button class="btn btn-primary btn-link btn-sm" type="submit" rel="tooltip" title="Edit Course">
												<i class="material-icons">edit</i>
											</button>
										</form>
										<form method="post" action="">
											@csrf
											{{ method_field('DELETE') }}
											<button type="submit" rel="tooltip" title="Delete Course" class="btn btn-danger btn-link btn-sm">
												<i class="material-icons">close</i>
											</button>
										</form>
									</div>
								</td>
							</tr>
							<tr class="cart-item">
								<td class="product-remove center">
									<a href="#" class="product-remove icon-cancel"></a>
								</td>
								<td class="product-thumbnail">
									<a href="#">
										<img src="images/shop/cart/cart-thumb-large-2.jpg" alt="" />
									</a>
								</td>
								<td class="product-name">
									<a href="" class="product-title">Mudassar</a>
								</td>
								<td class="product-price">
									<span class="amount">450</span>
								</td>
								<td class="product-quantity">
									<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="form-element quantity" size="4">
								</td>
								<td class="product-subtotal">
									<span class="amount">4500</span>
								</td>
							</tr>
							<tr class="cart-item">
								<td class="product-remove center">
									<a href="#" class="product-remove icon-cancel"></a>
								</td>
								<td class="product-thumbnail">
									<a href="#">
										<img src="images/shop/cart/cart-thumb-large-3.jpg" alt="" />
									</a>
								</td>
								<td class="product-name">
									<a href="" class="product-title">Mohsin</a>
								</td>
								<td class="product-price">
									<span class="amount">1700</span>
								</td>
								<td class="product-quantity">
									<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="form-element quantity" size="4">
								</td>
								<td class="product-subtotal">
									<span class="amount">1700</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
    
@endsection
