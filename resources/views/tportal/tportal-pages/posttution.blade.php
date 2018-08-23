@extends('tportal.tprofile-layouts.tprofile-layout')

@section('content')
<br><br><br><br>
<div class="row">
    <form method="POST" action="{{ route('teacher.store') }}" >
        <div class="column width-12">
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>Select Course</label>
                    <select class="selectpicker" data-live-search="true" name="course" tabindex="1">
                        <option value="English">English</option>
                        <option value="Automata">Automata</option>
                        <option value="Algorithm">Algorithm</option>
                        <option data-tokens="ketchup mustard" value=""></option>
                    </select>
                </div>
            </div>
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>Course Fee</label>
                    <input type="text" name="fee" class="form-fname form-element large" placeholder="Course Fee*" tabindex="2" required>
                </div>
            </div>
            <div class="column width-3">
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
        <br><br>
        </div>
        <div class="column width-12">
            <div class="column width-3">
                <div class="field-wrapper">
                    <label>Availability</label>
                    <select class="selectpicker" data-live-search="true" name="type">
                        <option value="Student Home">Daily</option>
                        <option value="Teacher Home">Weekly</option>
                        <option value="Academy">Monthly</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="column width-12">
        <br><br>
        </div>
        <div class="column width-12">
            <div class="field-wrapper">
                <textarea name="message" class="form-message form-element large" placeholder="Description Here*" tabindex="7" required></textarea>
            </div>
        </div>
        <div class="column width-12">
            <div class="column width-4">
                <div class="field-wrapper">
                    <input type="submit" value="post-tution" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                </div>
            </div>
        </div>

        <br><br><br><br><br>
        <div class="column width-4"><br><br></div>
    </form>
    <div class="form-response show"></div>
</div>
<br>

@endsection
