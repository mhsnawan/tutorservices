@extends('tportal.tprofile-layouts.tprofile-layout')

@section('content')
<br><br><br><br>
<div class="row">
    @foreach ($courses as $course)
    <form method="POST" action="{{ route('enroll.store') }}" >
        @csrf 
        <div class="column width-12">
            <div class="column width-4">
                <div class="field-wrapper">
                        <input type="text" value="{{ $course->teacher_id }}" name="teacher_id" hidden>
                        <input type="text" value="{{ $course->course_id }}" name="course_id" hidden>
                    <input type="submit" value="Enroll" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                </div>
            </div>
        </div>
        
        <br><br><br><br><br>
        <div class="column width-4"><br><br></div>
    </form>
    @endforeach
    <div class="form-response show"></div>
</div>
<br>

@endsection
