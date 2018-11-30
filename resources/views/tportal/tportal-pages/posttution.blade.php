@extends('tportal.tprofile-layouts.tprofile-layout')

@section('content')
<br><br><br><br>
<div class="row">
    <form method="POST" action="{{ route('gigs.store') }}" >
        @csrf 
        <div class="row">
            <div class="column width-8">
                <div class="field-wrapper">
                    <label>Title</label>
                    <input type="text" name="title" class="form-fname form-element large" placeholder="Tution Title*" tabindex="1" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>Area</label>
                    <input type="text" name="area" class="form-fname form-element large" placeholder="Airport Colony*" tabindex="2" required>
                </div>
            </div>
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>City</label>
                    <input type="text" name="city" class="form-fname form-element large" placeholder="Islamabad*" tabindex="3" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>Select Course</label>
                    <div class="form-select form-element large">
                        <select class="form-aux" name="course_id" data-live-search="true" tabindex="4" required>
                            <option disabled selected>Choose Course</option>
                            @foreach ($courses as $course)
                            <option value={{ $course->id }}>{{ $course->course_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>For Class</label>
                    <input type="text" name="class" class="form-fname form-element large" placeholder="Engineering*" tabindex="5" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column width-2">
                <div class="field-wrapper">
                    <label>Budget</label>
                    <input type="text" name="fee" class="form-fname form-element large" placeholder="Course Budget*" tabindex="6" required>
                </div>
            </div>
            <div class="column width-2">
                <div class="field-wrapper">
                    <label>Course Type</label>
                    <div class="form-select form-element large">
                        <select class="form-aux" name="type" data-live-search="true" tabindex="7" required>
                            <option disabled selected>Choose Type</option>
                            <option value="Institute">Institute</option>
                            <option value="Student's Home">Student Home</option>
                            <option value="Tutor's Home">Tutor Home</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column width-4">
                <div class="field-wrapper">
                    <fieldset>
                        <legend>Prefferable Days</legend>
                        <div class="column width-6">
                            <label>From</label>
                            <select class="form-control dropdown" name="day_from" tabindex="8" required>
                                <option value="" selected="selected" disabled="disabled">Select One</option>
                                <option value="Monday">Monday</option> 
                                <option value="Tuesday">Tuesday</option>  
                                <option value="Wednesday">Wednesday</option>  
                                <option value="Thursday">Thursday</option>  
                                <option value="Friday">Friday</option>  
                                <option value="Saturday">Saturday</option>  
                                <option value="Sunday">Sunday</option>      
                            </select>
                        </div>
                        <div class="column width-6">
                            <label>To</label>
                            <select class="form-control dropdown" name="day_to" tabindex="9" required>
                                <option value="" selected="selected" disabled="disabled">Select One</option>
                                <option value="Monday">Monday</option> 
                                <option value="Tuesday">Tuesday</option>  
                                <option value="Wednesday">Wednesday</option>  
                                <option value="Thursday">Thursday</option>  
                                <option value="Friday">Friday</option>  
                                <option value="Saturday">Saturday</option>  
                                <option value="Sunday">Sunday</option>      
                            </select>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="column width-4">
                <div class="field-wrapper">
                    <fieldset>
                        <legend>Prefferable Time</legend>
                        <div class="column width-6">
                            <label>From</label>
                            <select class="form-control dropdown" id="time_from" name="time_from" tabindex="10" required>
                                <option value="" selected="selected" disabled="disabled">Select One</option>
                                @for ($a=0; $a<=23; $a++)
                                <option value="{{ $a }}:00">{{ $a }}:00</option> 
                                @endfor       
                            </select>
                        </div>
                        <div class="column width-6">
                            <label>To</label>
                            <select class="form-control dropdown" id="time_to" name="time_to" tabindex="11" required>
                                <option value="" selected="selected" disabled="disabled">Select One</option>
                                @for ($a=0; $a<=23; $a++)
                                <option value="{{ $a }}:00">{{ $a }}:00</option> 
                                @endfor       
                            </select>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="field-wrapper">
                <label>Description</label>
                <textarea name="description" class="form-message form-element large" placeholder="Description Here*" tabindex="7" required></textarea>
            </div>
        </div>
        <div class="column width-12">
            <div class="column width-4">
                <div class="field-wrapper">
                    <input type="submit" value="Post Tution" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
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
