@extends('admin.admin-layouts.admin-layout')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Edit User</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
                <form method="POST" action="">
                        @csrf
                        {{ method_field("PUT") }}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="id">User ID</label>
                                <input type="text" class="form-control" name="id" id="id" value="{{ $admin->id }}" disabled>   
                            </div>
                        </div>
                    <div class="row">
                        <div class="row form-group col-md-6">
                            <label for="course_name">Username</label>
                            <input type="text" class="form-control" name="username" id="" value="{{ $admin->username }}" placeholder="johnson">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">First Name</label>
                                <input type="text" class="form-control" name="name" id="" value="{{ $admin->name }}" placeholder="Mark">
                        </div>
                        
                    </div>
                    <div class="row">
                       
                     <div class="form-group col-md-6">
                                <label for="course_name">Email</label>
                                <input type="text" class="form-control" name="email" id="" value="{{ $admin->email }}" placeholder="johnson123@gmail.com">
                        </div>
                
                        <div class="form-group col-md-6">
                                <label for="course_name">Password</label>
                                <input type="text" class="form-control" name="password" id="" value="{{ $admin->password }}" placeholder="password">
                        </div>
                        
                    </div>
                   

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
        </div>
      </div>
    </div>
  </div>

  @endsection