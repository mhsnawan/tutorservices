@extends("admin.admin-layouts.admin-layout")

@section("content")

<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Edit Student</h4>
              {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
            </div>
            <div class="card-body col-md-12">
            <form method="POST" action="../updatestudent/{{ $students->id }}">
                        @csrf
                        {{ method_field("PUT") }}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="id">User ID</label>
                            <input type="text" class="form-control" name="id" id="id" value="{{ $students->id }}" disabled>   
                            </div>
                        </div>
                    <div class="row">
                        <div class="row form-group col-md-6">
                            <label for="course_name">Full Name</label>
                        <input type="text" class="form-control" name="name" id="course_name" value="{{ $students->name }}" placeholder="Mathematics">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">Username</label>
                        <input type="text" class="form-control" name="username" id="" value="{{ $students->username }}" placeholder="Mark johnson" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                                <label for="course_name">Cnic</label>
                        <input type="text" class="form-control" name="cnic" id="" value="{{ $students->cnic }}" placeholder="37408-2121454-3">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">Phone number</label>
                        <input type="number" class="form-control" name="phone" id="" value="{{ $students->phone }}" placeholder="+923453045874">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                                <label for="course_name">Gender</label>
                                <input type="text" class="form-control" name="gender" id="" value="{{ $students->gender }}" placeholder="Male">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">Age</label>
                                <input type="number" class="form-control" name="age" id="" value="{{ $students->age }}" placeholder="25">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                                <label for="course_name">Nationality</label>
                                <input type="text" class="form-control" name="nationality" id="" value="{{ $students->nationality }}" placeholder="Pakistani">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">Address Line 1</label>
                                <input type="text" class="form-control" name="address1" id="" value="{{ $students->address1 }}" placeholder="H#50 Lane 4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                                <label for="course_name">Address Line 2</label>
                        <input type="text" class="form-control" name="address2" id="" value="{{ $students->address2 }}" placeholder="Sector F-10">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">City</label>
                        <input type="text" class="form-control" name="city" id="" value="{{ $students ->city }}" placeholder="Islamabad">
                        </div>
                    </div>    

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        
          @endsection