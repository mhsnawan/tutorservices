@extends('current-tech-course.clayouts.clayout')

@section('content')

<!-- Cart Overview -->
<div class="section-block cart-overview">
	<div class="row">
		<div class="column width-12"><h5>Gigs</h5>
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
									<a href="" class="product-title">Automata</a>
								</td>
								<td class="product-price">
									<span class="amount">15.00</span>
								</td>
								<td class="product-quantity">
									<span class="amount">15.00</span>
								</td>
								<td class="product-quantity">
									<span class="amount">1500</span>
								</td>
								<td class="product-quantity">
									<span class="amount">Online</span>
								</td>
								<td>
									<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Edit</a>
									<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a>
								</td>
							</tr>
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
									<a href="" class="product-title">Automata</a>
								</td>
								<td class="product-price">
									<span class="amount">15.00</span>
								</td>
								<td class="product-quantity">
									<span class="amount">15.00</span>
								</td>
								<td class="product-quantity">
									<span class="amount">1500</span>
								</td>
								<td class="product-quantity">
									<span class="amount">Online</span>
								</td>
								<td>
									<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Edit</a>
									<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a>
								</td>
							</tr>
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
									<a href="" class="product-title">Automata</a>
								</td>
								<td class="product-price">
									<span class="amount">15.00</span>
								</td>
								<td class="product-quantity">
									<span class="amount">15.00</span>
								</td>
								<td class="product-quantity">
									<span class="amount">1500</span>
								</td>
								<td class="product-quantity">
									<span class="amount">Online</span>
								</td>
								<td>
									<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Edit</a>
									<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a>
								</td>
							</tr>
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
									<a href="" class="product-title">Automata</a>
								</td>
								<td class="product-price">
									<span class="amount">15.00</span>
								</td>
								<td class="product-quantity">
									<span class="amount">15.00</span>
								</td>
								<td class="product-quantity">
									<span class="amount">1500</span>
								</td>
								<td class="product-quantity">
									<span class="amount">Online</span>
								</td>
								<td>
									<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Edit</a>
									<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a>
								</td>
							</tr>
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
									<a href="" class="product-title">Automata</a>
								</td>
								<td class="product-price">
									<span class="amount">15.00</span>
								</td>
								<td class="product-quantity">
									<span class="amount">15.00</span>
								</td>
								<td class="product-quantity">
									<span class="amount">1500</span>
								</td>
								<td class="product-quantity">
									<span class="amount">Online</span>
								</td>
								<td>
									<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Edit</a>
									<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a>
								</td>
							</tr>
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
									<a href="" class="product-title">Automata</a>
								</td>
								<td class="product-price">
									<span class="amount">15.00</span>
								</td>
								<td class="product-quantity">
									<span class="amount">15.00</span>
								</td>
								<td class="product-quantity">
									<span class="amount">1500</span>
								</td>
								<td class="product-quantity">
									<span class="amount">Online</span>
								</td>
								<td>
									<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Edit</a>
									<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a>
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
