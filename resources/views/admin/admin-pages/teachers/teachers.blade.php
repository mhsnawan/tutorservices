@extends("admin.admin-layouts.admin-layout")

@section("content")

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Teachers</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="text-primary">
                <th>Picture</th>
                <th>ID</th>
                <th>Teacher Name</th>
                <th>Documents</th>
                <th>Status</th>
                <th>Actions</th>
              </thead>
              <tbody>
                  @foreach ($teachers as $teacher)
                <tr>
                    <td >
                      <img src="{{asset("storage/$teacher->profile_img")}}" class="img-responsive avatar_all_students" >
                    </td>
                    
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>
                        <form method="GET" action="{{ route('admin-tutor.update', $teacher->id) }}">
                          <input type="submit" value="documents">
                        </form>
                    </td>
                    <td>
                      @if($teacher->verified == 0) Not Verified @else Verified @endif
                    </td>
                    <td>
                        <div class="row">
                          <form method="GET" action="{{ route('admin-tutor.edit', $teacher->id) }}">
                            <button class="btn btn-primary btn-link btn-sm" type="submit" rel="tooltip" title="Edit Teacher">
                              <i class="material-icons">edit</i>
                            </button>
                          </form>

                          <form method="POST" action="{{ route('admin-tutor.destroy', $teacher->id) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" rel="tooltip" title="Delete Teacher" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </form>

                          @if($teacher->verified == 0)
                          <form method="GET" action="{{ route('verify.tutor', $teacher->id) }}">
                            @csrf
                            <button type="submit" rel="tooltip" title="Verify" class="btn btn-danger btn-link btn-sm">
                             <i class="material-icons">done</i>
                            </button>
                          </form>
                          @endif
                            
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