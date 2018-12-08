@extends('current-tech-course.clayouts.clayout')

@section('content')
	<div class="section-block cart-overview">
	    <div class="row">
            <div class="payment-details box large">
                <div class="cart-review">
                    <table class="table non-responsive">
                        <thead>
                            <tr>
                                <th class="product-thumbnail"></th>
                                <th class="product-name">Student Name</th>
                                <th class="product-price">Course</th>
                                <th class="product-quantity">Location</th>
                                <th class="product-quantity">Tution Type</th>
                                <th class="product-quantity">Enrolled Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart-item">
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img src="images/shop/cart/cart-thumb-small.jpg" class="avatar" alt="" />
                                    </a>
                                </td>
                                <td class="product-name">
                                    <a href="" class="product-title">Aqeel</a>
                                </td>
                                <td class="product-price">
                                    <span class="amount">Automata Theory</span>
                                </td>
                                <td class="product-quantity">
                                    <span class="amount">Chakala Scheme 3, Rawalpindi</span>
                                </td>
                                <td class="product-subtotal">
                                    <span class="amount">Online Tution</span>
                                </td>
                                <td class="product-quantity">
                                    <span class="amount">15 Oct, 2018</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
