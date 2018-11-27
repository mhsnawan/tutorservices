@extends("admin.admin-layouts.admin-layout")

@section("content")

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Students</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
          <div class="row">
            <div class="offset-md-10 col-md-1">
              <form method="GET" action="">
                <input type="submit" class="btn btn-primary" href="" value="Add Student">
              </form>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="text-primary">
                <th>Picture</th>
                <th>ID</th>
                <th>Student Name</th>
                <th>Actions</th>
              </thead>
              <tbody>
              @foreach ($students as $student)
                <tr>
                    <td style="width:70px;height:70px;cover;border-radius:50%;"><img  src="abc.png" class="img-responsive" ></td>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>
                        <div class="row">
                            <form method="GET" action="./editstudent/{{ $student->id }}">
                        <button class="btn btn-primary btn-link btn-sm" type="submit" rel="tooltip" title="Edit Student">
                            <i class="material-icons">edit</i>
                          </button>
                            </form>

                          <form method="POST" action="./deletestudent/{{ $student->id }}">
                            @csrf
                            {{ method_field('DELETE') }}
                          <button type="submit" rel="tooltip" title="Delete Student" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                            </form>

                            <form method="GET" action="#">
                          <button type="submit" rel="tooltip" title="Verify" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">done</i>
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