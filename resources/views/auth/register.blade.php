@extends('layouts.default')

@section('content')
<div class="section-block cart-overview">
    <div class="row">
        <div class="push-3 column width-6">
          <p style="margin-top:-50px"><h4>Get yourself Register and enjoy Tutor Services.....</h4></p>
            <div class="payment-details box large">
                <div class="tabs style-2">
                    <ul class="tab-nav">
                        <li class="active">
                            <a href="#tabs-1-pane-1">Registeration</a>
                        </li>
                    </ul>
                    <div class="tab-panes">
                        <div id="tabs-1-pane-1" class="active animate">
                            <div class="tab-content">
                                <div class="billing-form-container">
                                    <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                        <div class="row">
                                            <div class="column width-12">
                                                <div class="column width-6">
                                                    <input id="radio-1" class="form-element radio" name="role" type="radio" value="1" checked required>
                                                    <label for="radio-1" class="radio-label">Become Student</label>
                                                </div>
                                                <div class="column width-6">
                                                    <input id="radio-2" class="form-element radio" name="role" type="radio" value="2">
                                                    <label for="radio-2" class="radio-label">Become Tutor</label>
                                                </div>
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

@endsection
