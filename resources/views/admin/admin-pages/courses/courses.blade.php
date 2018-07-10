@extends("admin.admin-layouts.admin-layout")

@section("content")

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Courses</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
          <div class="row">
            <form method="GET" action="addcourse">
              <input type="submit" href="addcourse">
            </form>
            
          </div>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="text-primary">
                <th>ID</th>
                <th>Course Name</th>
                <th>Actions</th>
              </thead>
              <tbody>
                @foreach ($courses as $course)
                <tr>
                  <td>{{ $course->id }}</td>
                  <td>{{ $course->course_name }}</td>
                  <td class="td-actions">
                    <div class="row">
                      <form method="GET" action="{{ route('course.edit', $course->id) }}">
                        <button class="btn btn-primary" type="submit" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                      </form>
                      <form method="post" action="{{ url("course/". $course->id) }}" }}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
                    </div>
                </td>
        
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection