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
          <div class="row">
            <div class="offset-md-10 col-md-1">
              <form method="GET" action="addcourse">
                <input type="submit" class="btn btn-primary" href="addcourse" value="Add Teacher">
              </form>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="text-primary">
                <th>ID</th>
                <th>Teacher Name</th>
                <th>Actions</th>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>Muhammad Mohsin</td>
                    <td>
                        <button class="btn btn-primary btn-link btn-sm" type="submit" rel="tooltip" title="Edit Course">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="submit" rel="tooltip" title="Delete Course" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection