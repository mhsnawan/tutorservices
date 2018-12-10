@extends('admin.admin-layouts.admin-layout')

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Add Sub Degree</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
            <form method="POST" action=" {{ route('subdegree.store') }}">
                @csrf
                <div class="form-group col-md-6">
                    <label for="degree_id">Degree Level</label>
                    <select class="form-control" name="degree_id">
                        @foreach ($degrees as $degree)
                        <option value="{{ $degree->id }}">{{ $degree->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Degree Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="CS">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  @endsection