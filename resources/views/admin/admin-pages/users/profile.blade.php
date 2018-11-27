@extends('admin.admin-layouts.admin-layout')

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Profile</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
                <form method="POST" action="">
                        @csrf
                        {{ method_field("PUT") }}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="id">User ID</label>
                                <input type="text" class="form-control" name="id" id="id" value="" disabled>   
                            </div>
                        </div>
                    <div class="row">
                        <div class="row form-group col-md-6">
                            <label for="course_name">Last Name</label>
                            <input type="text" class="form-control" name="course_name" id="course_name" value="" placeholder="johnson">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">nickname</label>
                                <input type="text" class="form-control" name="" id="" value="" placeholder="johny">
                        </div>
                    </div>
               
                    <h3>Contact Info</h3>
                    <div class="row">
                        <div class="form-group col-md-6">
                                <label for="course_name">Email</label>
                                <input type="text" class="form-control" name="" id="" value="" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">Website</label>
                                <input type="text" class="form-control" name="" id="" value="" placeholder="johnson">
                        </div>
                        
                    </div>
                    <h3>About Yourself</h3>
                    <div class="row">
                            <div class="form-group col-md-12">
                                    <label for="course_name">Biographical info</label>
                                    <input type="textbox" class="form-control" name="" id="" value="" placeholder="Mark">
                            </div>
                          
                        </div>
                        <h3>Profile picture</h3>
                        <div class="row">
                                <div class="form-group col-md-6">
                                        <td style="width:100px;height:100px;cover;border-radius:50%;"><img  src="#" class="img-responsive" ></td>
                    
                                </div>
                              
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
        </div>
      </div>
    </div>
  </div>

  @endsection