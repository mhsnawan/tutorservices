@extends('layouts.default')
@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf
    <br>
        <div class="row">
            
            <div class="column width-12">
                <input type="text" name="role" class="form-fname form-element large" value="3" placeholder="Name*" tabindex="1" required>
            </div>

            <div class="column width-12">
                <input type="text" name="name" class="form-fname form-element large" placeholder="Name*" tabindex="1" required>
            </div>
            {{--  <div class="column width-12">
                <input type="text" name="lname" class="form-lname form-element large" placeholder="Last Name" tabindex="2" required>
            </div>  --}}
            <div class="column width-6">
                <input type="email" name="email" class="form-email form-element large{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email Address*"  tabindex="2" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            
            </div>
            <div class="column width-6">
                <input type="text" name="username" class="form-telephone form-element large{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Username*" value="{{ old('username') }}" tabindex="3" required>
            
                @if ($errors->has('username'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
            </div>
            <div class="column width-6">
                <input type="password" name="password" class="form-email form-element large{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" tabindex="4" required>
            
                @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="column width-6">
                <input type="password" name="password_confirmation" class="form-email form-element large" placeholder="Confirm Password" tabindex="5" required>
            </div>
            <div class="column width-6">
                <input type="submit" value="Register" class="form-submit button pill no-margin-bottom" tabindex="6">
            </div>
        </div>
    </form>

  @endsection