@extends('tportal.tportal-layouts.forsearchresults')

@section('content')
<br><br><br>
<div class="container-fluid">
    <aside class="column width-3 sidebar " style="float:left">
        <div class="sidebar-inner">
            <div class="widget">
                <h1 class="widget-title">Filter Course By Type</h1>
                <form method="POST" action="{{ route('advance-results') }}">
                    {{ csrf_field() }}
                    <fieldset>
                        <legend>Filter By Subject *</legend>
                        <select class="form-control dropdown" id="education" name="subject">
                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                @foreach($courses as $course)		 
                                <option value="{{ $course->id }}">{{$course->course_name}}</option>
                                @endforeach
                        </select>
                    </fieldset>

                    <fieldset>
                    <legend>Filter By Class</legend>
                        <select class="form-control dropdown" id="education" name="class">
                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                            @foreach($classes as $class)
                            <option value="{{ $class->class }}">{{ $class->class }}</option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset>
                        <legend>Filter By city</legend>
                        <select class="form-control dropdown" id="education" name="city">
                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                            @foreach($cities as $city)
                            <option value="{{ $city->city }}">{{$city->city}}</option>
                            @endforeach
                        </select>
                    </fieldset>

                    <input type="submit" value="Search">
                </form>
            </div>
        </div>
    </aside>
    <div id="general" class="column width-9">
        <h3 class="mb-30 color-grey inline pull-left">Displaying {{ count($results) }} results</h3>
    </div> 

    <div class="column width-9" style="float:right;">
        <div class="bkg-white">
            <div class="row">
                @foreach ($results as $result)
                <div class="column width-12">
                    <div class="cart-totals box xlarge bkg-grey-ultralight">
                            <p class="title-medium font-alt-2 weight-light color-theme pu-10 mb-0" ><a href="{{ route('course.view', $result->course->id) }}"> {{ $result->title }}</a></p>
                            <div class="column width-3">
                                <p class="mb-0">Posted By : <a href="{{ route('profile.id', $result->user->id) }}"> {{ $result->user->name }} </a><br>Posted : {{ $result->created_at->format('d M, Y') }}</p>
                        </div>
                            <div class="column width-3">
                            <span class="text-small weight-bold"><span class="icon-location"></span>{{ $result->area }}, {{ $result->city }}</span>
                        </div>
                        <br>
                            <div class="column width-6">
                            <a href="{{ route('course.view', $result->course->id) }}" class="button pill checkout no-margin-bottom fade-location">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
<!-- Product Details End -->


<!-- Pagination Section 3 -->
    <div class="section-block pagination-3 pt-0">
        <div class="row">
            <div class="column width-9">
                <ul>
                    {{ $results->links() }}
                    {{--  <li><a class="pagination-previous icon-left-open" href="#"><span class="icon-left-open-mini"></span></a></li>
                    <li><a class="current" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a class="pagination-next disabled" href="#"><span class="icon-right-open-mini"></span></a></li>  --}}
                </ul>
            </div>
        </div>
    </div>
<!-- Pagination Section 3 End -->

</div>
<!-- Content End -->

@endsection
