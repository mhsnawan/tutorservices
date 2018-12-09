@extends("admin.admin-layouts.admin-layout")

@section("content")

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Admins</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
          <div class="row">
            <div class="offset-md-10 col-md-1">
              <form method="GET" action="{{ route('admin-user.create') }}">
                <input type="submit" class="btn btn-primary" href="{{ route('admin-user.create') }}" value="Add User">
              </form>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="text-primary">
                <th>Picture</th>
                <th>ID</th>
                <th>Admin Name</th>
                <th>Actions</th>
              </thead>
              <tbody>
              @foreach ($admins as $admin)
                <tr>
                  <td><img class="img-responsive avatar_all_students" ></td>
                  <td>{{ $admin->id }}</td>
                  <td>{{ $admin->name }}</td>
                  <td>
                    <div class="row">
                      <form method="GET" action="./edituser/{{ $admin->id }}">
                        <button class="btn btn-primary btn-link btn-sm" type="submit" rel="tooltip" title="Edit User">
                          <i class="material-icons">edit</i>
                        </button>
                      </form>

                      <form method="POST" action="./deleteuser/{{ $admin->id }}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" rel="tooltip" title="Delete User" class="btn btn-danger btn-link btn-sm">
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