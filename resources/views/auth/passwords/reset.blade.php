@extends('layouts.default')

@section('content')
<section class="section-block signup-1 pt-0">
        <div class="row">
            <div class="column width-6 offset-3 center">
                <h3 class="mb-10">Reset Password</h3>
            </div>
            <div class="column width-8 offset-2 center">
                <div class="signup-form-container">
                    <form method="POST" action="{{ route('password.request') }}">
                        <div class="row">
                            <div class="column width-8 offset-2">
                                <div class="field-wrapper">
                                    <input type="email" name="email" class="form-email form-element large center" placeholder="Email address*" tabindex="2" required>
                                </div>
                            </div>
                            <div class="column width-4 offset-4">
                                <input type="submit" value="Subscribe" class="form-submit button pill large border-theme bkg-hover-theme color-theme color-hover-white">
                            </div>
                        </div>
                        <input type="text" name="honeypot" class="form-honeypot form-element">
                    </form>
                    <div class="form-response show"></div>
                </div>
            </div>
        </div>
    </section>

@endsection