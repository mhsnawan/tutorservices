@extends('current-tech-course.clayouts.clayout')

@section('content')

<!-- Cart Overview -->


				<div class="section-block cart-overview">
					<div class="row">

						<div class="column width-12"><h5>Pending Requests.</h5>

              <div class="payment-details box large">
							<div class="cart-review">
								<table class="table non-responsive">
									<thead>
										<tr>
											<th class="product-remove"></th>
											<th class="product-thumbnail"></th>
											<th class="product-name">Student Name</th>
											<th class="product-price">Course</th>
											<th class="product-quantity">Location</th>
                      <th class="product-quantity">Due From</th>
											<th class="product-subtotal">Status</th>
										</tr>
									</thead>
									<tbody>
										<tr class="cart-item">
											<td class="product-remove center">
												<a href="#" class="product-remove icon-cancel"></a>
											</td>
											<td class="product-thumbnail">
												<a href="#">
													<img src="images/shop/cart/cart-thumb-large.jpg" alt="" />
												</a>
											</td>
											<td class="product-name">
												<a href="" class="product-title">Aqeel</a>
											</td>
											<td class="product-price">
												<span class="amount">15.00</span>
											</td>
											<td class="product-quantity">
												<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="form-element quantity" size="4">
											</td>
											<td class="product-subtotal">
												<span class="amount">15.00</span>
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
 				</div>
    
@endsection
