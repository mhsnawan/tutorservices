@extends('admin.admin-layouts.admin-layout')

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Add User</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf        
                <div class="row">
                    <input type="hidden" class="form-control" name="role" value="3" placeholder="">
                    <div class="form-group col-md-6">
                        <label >Full Name</label>
                        <input type="text" class="form-control" name="fullname" value="" placeholder="Mark johnson">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label >Email</label>
                        <input type="text" class="form-control" name="email" value="" placeholder="johnson123@gmail.com">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row form-group col-md-6">
                        <label >Username</label>
                        <input type="text" class="form-control" name="username" value="" placeholder="johnson">
                        @if ($errors->has('username'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label >Password</label>
                        <input type="password" class="form-control" name="password" value="" placeholder="password">
                        @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label >confirmation</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    </div>                            
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  @endsection