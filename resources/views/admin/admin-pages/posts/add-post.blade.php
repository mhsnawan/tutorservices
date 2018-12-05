@extends('admin.admin-layouts.admin-layout')

@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=zbs0xlidxna66ih211hj7qmpf1kuzj16swlgz7s0lpom7nb8"></script>
<script>
  tinymce.init({ 
    selector:'textarea',
    plugins: ["image imagetools", 
              "link",
              "table",
              "media",
            ]
  });
</script>

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Add Post</h4>
          {{--  <p class="card-category"> Here is a subtitle for this table</p>  --}}
        </div>
        <div class="card-body">
          <form method="POST" action=" {{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col col-md-8">
                <div class="form-group">
                    <label for="post_title">Post Name</label>
                    <input type="text" class="form-control" name="title" id="post_title" placeholder="Title">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-md-8">
                <div class="form-group">
                  <label for="editor">Description</label>
                  <textarea class="form-group" name="description" id="editor" style="height:300px;" placeholder="Write Content Here"></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <div class="main-img-preview">
                    <img class="thumbnail img-preview" src="{{ asset("admin-assets/img/featured-blog-post-image.jpg") }}" title="Preview Image">
                  </div>
                  <div class="input-group text-center">
                    <div class="input-group-btn">
                      <div class="fileUpload btn btn-danger fake-shadow">
                        <span><i class="glyphicon glyphicon-upload"></i> Upload Picture</span>
                        <input id="logo-id" name="img" type="file" class="attachment_upload" onclick="uploadimg();" required>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Publish</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  

 
  @endsection