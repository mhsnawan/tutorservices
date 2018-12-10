@extends("admin.admin-layouts.admin-layout")

@section("content")

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Edit Degree</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('degree.update', $degrees[0]->id) }}">
                @csrf
                {{ method_field("PUT") }}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="id">Degree ID</label>
                        <input type="text" class="form-control" name="id" id="id" value="{{ $degrees[0]->id }}" disabled>   
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Degree Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $degrees[0]->name }}" placeholder="Mathematics">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  @endsection