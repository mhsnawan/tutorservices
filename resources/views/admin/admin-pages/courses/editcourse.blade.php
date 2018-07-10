@extends("admin.admin-layouts.admin-layout")

@section("content")

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Edit Course</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
            <form method="POST" action=" {{ route('course.store') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="id">Course ID</label>
                        <input type="text" class="form-control" name="id" id="id" disabled>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="course_name">Course Name</label>
                    <input type="text" class="form-control" name="course_name" id="course_name" placeholder="Mathematics">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  @endsection