@extends('tportal.tprofile-layouts.tprofile-layout')

@section('content')
<br><br><br><br>
<div class="row">
    <form method="POST" action="{{ route('post-tution.store') }}" >
        @csrf 
        <div class="column width-12">
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>Select Course</label>
                    <select class="selectpicker" data-live-search="true" name="course_id" tabindex="1">
                        <option disabled selected>Choose Course</option>
                        @foreach ($courses as $course)
                        <option value={{ $course->id }}>{{ $course->course_name }}</option>
                        @endforeach
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
                    <select class="selectpicker" data-live-search="true" name="availability">
                        <option value="Daily">Daily</option>
                        <option value="Weekly">Weekly</option>
                        <option value="Monthly">Monthly</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="column width-12">
        <br><br>
        </div>
        <div class="column width-12">
            <div class="field-wrapper">
                <textarea name="description" class="form-message form-element large" placeholder="Description Here*" tabindex="7" required></textarea>
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
