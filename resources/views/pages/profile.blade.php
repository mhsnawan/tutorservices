@extends('layouts.default')

@section('content')
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail" src="http://lorempixel.com/180/180/people/9/" alt="Profile image example"/>
        <div class="fb-profile-text">
            
            @foreach ($blogs as $blog)
                <h1>{{ $blog->title }}<h1>
                <h6>Description</h6>
                {{$blog->description}}
                <h6>Path img</h6>
                {{$blog->img}}
            @endforeach}}
        </div>
    </div>
@endsection
