@extends("admin.admin-layouts.admin-layout")

@section("content")

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Edit Sub Degree</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('subdegree.update', $degrees->id) }}">
                @csrf
                {{ method_field("PUT") }}
                <div class="form-group col-md-6">
                    <label for="degree_id">Degree Level</label>
                    <select class="form-control" name="degree_id">
                        @foreach ($levels as $level)
                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="course_name">Degree Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $degrees->name }}" placeholder="Mathematics">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  @endsection