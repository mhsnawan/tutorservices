@extends("admin.admin-layouts.admin-layout")

@section("content")

<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Edit Teacher</h4>
              {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
            </div>
            <div class="card-body col-md-12">
                <form method="POST" action="{{ route('admin-tutor.update', $teachers->id) }}">
                    @csrf
                    {{ method_field("PUT") }}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="id">User ID</label>
                        <input type="text" class="form-control" name="id" id="id" value="{{ $teachers->id }}" disabled>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="row form-group col-md-6">
                            <label for="course_name">Full Name</label>
                        <input type="text" class="form-control" name="name" id="course_name" value="{{ $teachers->name }}" placeholder="Mathematics">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">Username</label>
                        <input type="text" class="form-control" name="username" id="" value="{{ $teachers->username }}" placeholder="Mark johnson" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                                <label for="course_name">Cnic</label>
                        <input type="text" class="form-control" name="cnic" id="" value="{{ $teachers->cnic }}" placeholder="37408-2121454-3">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">Phone number</label>
                        <input type="number" class="form-control" name="phone" id="" value="{{ $teachers->phone }}" placeholder="+923453045874">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                                <label for="course_name">Gender</label>
                                <input type="text" class="form-control" name="gender" id="" value="{{ $teachers->gender }}" placeholder="Male">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">Age</label>
                                <input type="number" class="form-control" name="age" id="" value="{{ $teachers->age }}" placeholder="25">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                                <label for="course_name">Nationality</label>
                                <input type="text" class="form-control" name="nationality" id="" value="{{ $teachers->nationality }}" placeholder="Pakistani">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">Address Line 1</label>
                                <input type="text" class="form-control" name="address1" id="" value="{{ $teachers->address1 }}" placeholder="H#50 Lane 4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                                <label for="course_name">Address Line 2</label>
                        <input type="text" class="form-control" name="address2" id="" value="{{ $teachers->address2 }}" placeholder="Sector F-10">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="course_name">City</label>
                        <input type="text" class="form-control" name="city" id="" value="{{ $teachers->city }}" placeholder="Islamabad">
                        </div>
                    </div>    
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
        
          @endsection