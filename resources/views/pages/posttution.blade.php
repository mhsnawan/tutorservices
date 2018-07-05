@extends('layouts.default')

@section('content')
<br><br><br><br>
<div class="signup-form-container create-account horizontal">
        <form class="signup-form" method="POST" action="{{ route('teacher.store') }}" >
        @csrf
        <div class="column width-12">
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>Select Course</label>
                    <select class="selectpicker" data-live-search="true" name="course">
                        @foreach ($courses as $course)
                        <option data-tokens="ketchup mustard" value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>Course Fee</label>
                    <select class="selectpicker" data-live-search="true" name="fee">
                        @for ($i = 500; $i <= 20000; $i=$i+500)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    <select>
                </div>
            </div>
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>Course Type</label>
                    <select class="selectpicker" data-live-search="true" name="type">
                        <option value="Student Home">Student Home</option>
                        <option value="Teacher Home">Teacher Home</option>
                        <option value="Academy">Academy</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="column width-12">
            <div class="column width-4">
                <div class="field-wrapper">
                    <input type="submit" value="Save" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                </div>
            </div>
        </div>

        <br><br><br>
        <div class="column width-12"><br><br></div>
        <input type="text" name="honeypot" class="form-honeypot form-element">
        
    </form>
    <div class="form-response show"></div>
</div>
@endsection