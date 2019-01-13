@extends('layouts.default')

@section('content')
<div class="section-block cart-overview">
    <div class="row">
        <div class="push-3 column width-6">
          <p style="Margin-top:-50px"><p><h2>Admin Log in to Online Tutor</h2></p>
            <h5>Admin Login Here...</h5></p>
            <div class="payment-details box large">
              <div class="cart-totals box xlarge bkg-grey-ultralight">
                <div class="tabs style-2">
                    <ul class="tab-nav">
                        <li class="active">
                            <a href="#tabs-1-pane-1">Sign In</a>
                        </li>

                    </ul>
                    <div class="tab-panes">
                        <div id="tabs-1-pane-1" class="active animate">
                            <div class="tab-content">
                                <div class="billing-form-container">
                                    <form method="POST" action="{{ route('admin.login.submit') }}">
                                            @csrf
                                        <div class="row">
                                            <div class="column width-12">
                                                <div class="field-wrapper">
                                                  <p style="Margin-bottom:3px">Email/Username</p>
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
                                                  <p style="Margin-bottom:3px">Password</p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="column width-12">
            <hr>
        </div>
      </div>
    </div>
    <!-- Checkout End -->
</div>

@endsection
