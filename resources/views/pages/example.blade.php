@extends('layouts.default')

@section('content')
<br><br><br>
<form method="POST" action="{{ route('account.store') }}">
    @csrf
        <div class="row">

            <div class="column width-12">
                <input type="text" name="cnic" class="form-fname form-element large" placeholder="CNIC*" tabindex="1" required>
            </div>
            <div class="column width-12">
                <input type="text" name="phone" class="form-fname form-element large" placeholder="Phone*" tabindex="1" required>
            </div>
            <div class="column width-12">
                <input type="text" name="gender" class="form-fname form-element large" placeholder="Name*" tabindex="1" required>
            </div>
            <div class="column width-12">
                <input type="number" name="age" class="form-fname form-element large" placeholder="Name*" tabindex="1" required>
            </div>
            <div class="column width-12">
                <input type="text" name="nationality" class="form-fname form-element large" placeholder="Name*" tabindex="1" required>
            </div>
            <div class="column width-12">
                <input type="text" name="address1" class="form-fname form-element large" placeholder="Name*" tabindex="1" required>
            </div>
            <div class="column width-12">
                <input type="text" name="address2" class="form-fname form-element large" placeholder="Name*" tabindex="1" required>
            </div>
            <div class="column width-12">
                <input type="text" name="city" class="form-fname form-element large" placeholder="Name*" tabindex="1" required>
            </div>
            
            <div class="column width-6">
                <input type="submit" value="Register" class="form-submit button pill no-margin-bottom" tabindex="6">
            </div>
        </div>
    </form>
<!-- Search Modal End -->

@endsection