@extends('layouts.default')

@section('content')
<br><br><br><br>
<div class="signup-form-container create-account horizontal">
    <form class="signup-form" method="POST" action="{{ route('course.store') }}" >
        @csrf
        <div class="column width-12">
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>Course Name</label>
                    <input type="text" name="course_name" class="form-email form-element large" placeholder="Automata Theory" tabindex="1" required>
                </div>
            </div>
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