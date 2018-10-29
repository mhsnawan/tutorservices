@extends('admin.admin-layouts.admin-layout')

@section('content')s="card-header">{{ __('Admin Login') }}</div>
<div class="card-body">
  <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <div class="row">
            <div class="column width-12">
                <div class="field-wrapper">
                    <input type="text" name="email" class="form-name form-element large{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}" tabindex="1" required autofocus>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="column width-12">
                <div class="field-wrapper">
                    <input type="password" name="password" class="form-email form-element large{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" tabindex="2" required>
                
                    @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="column width-12">
                <div class="column width-1">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                </div>
                <div class="column width-3">
                    <label for="remember">{{ __('Remember Me') }}</label> 
                    
                </div>
                <div class="column width-3">
                    <input type="submit" value="Sign In" class="form-submit button pill no-margin-bottom">
                </div>
                <div class="column width-5 right">
                    <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                </div>
            </div>

        </div>
            
        <input type="text" name="honeypot" class="form-honeypot form-element">
  </form>
</div>

@endsection