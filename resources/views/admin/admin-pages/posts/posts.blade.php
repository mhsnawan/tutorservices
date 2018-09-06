@extends("admin.admin-layouts.admin-layout")

@section("content")

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Posts</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
          <div class="row">
            <div class="offset-md-10 col-md-1">
              <form method="GET" action="addpost">
                <input type="submit" class="btn btn-primary" href="addpost" value="Add Post">
              </form>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="text-primary">
                <th>ID</th>
                <th>Post Name</th>
                <th>Author</th>
                <th>Date</th>
                <th>Actions</th>
              </thead>
              <tbody>
                @foreach ($posts as $post)
                <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->title }}</td>
                  <td>admin</td>
                  <td>{{ $post->created_at }}</td>
                  <td class="td-actions">
                    <div class="row">
                      <form method="GET" action="{{ route('posts.edit', $post->id) }}">
                        <button class="btn btn-primary btn-link btn-sm" type="submit" rel="tooltip" title="Edit Post">
                          <i class="material-icons">edit</i>
                        </button>
                      </form>
                      <form method="post" action="{{ route('posts.destroy', $post->id) }}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" rel="tooltip" title="Delete Post" class="btn btn-danger btn-link btn-sm">
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