@extends("admin.admin-layouts.admin-layout")

@section("content")

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Edit City</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('city.update', $city->id) }}">
                @csrf
                {{ method_field("PUT") }}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="id">City ID</label>
                        <input type="text" class="form-control" name="id" id="id" value="{{ $city->id }}" disabled>   
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">City</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $city->name }}" placeholder="Rawalpindi">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  @endsection