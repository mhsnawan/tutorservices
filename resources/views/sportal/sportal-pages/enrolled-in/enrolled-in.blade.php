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
                                <th class="product-name">Tutor Name</th>
                                <th class="product-price">Course</th>
                                <th class="product-price">Contact</th>
                                <th class="product-quantity">Location</th>
                                <th class="product-quantity">Tution Type</th>
                                <th class="product-quantity">Status</th>
                                <th class="product-quantity">Enrolled Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr class="cart-item">
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img src="storage/{{ $item['tutor_profile_img'] }}" class="avatar_all_students" alt="" />
                                    </a>
                                </td>
                                <td class="product-name">
                                    <a href="{{ route('profile.id', $item['tutor_user_id']) }}" class="product-title">{{ $item['tutor_name'] }}</a>
                                </td>
                                <td class="product-price">
                                    <span class="amount">{{ $item['course_name'] }}</span>
                                </td>
                                <td class="product-price">
                                    <span class="amount">{{ $item['tutor_contact'] }}</span>
                                </td>
                                <td class="product-quantity">
                                    <span class="amount">{{ $item['tution_area'] }}, {{ $item['tution_city'] }}</span>
                                </td>
                                <td class="product-subtotal">
                                    <span class="amount">{{ $item['tution_type'] }}</span>
                                </td>
                                <td class="product-subtotal">
                                    <span class="amount">@if($item['tution_verified']==0) Pending @else Enrolled @endif</span>
                                </td>
                                <td class="product-quantity">
                                    <span class="amount">{{ $item['created_at']->format('d-m-Y') }}</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
