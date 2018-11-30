@extends('tportal.tprofile-layouts.tprofile-layout')

@section('content')
<br><br><br><br>
<div class="row">
    <form method="POST" action="{{ route('gigs.update', $tution->id) }}" >
        @csrf 
        {{ method_field("PUT") }}
        <div class="row">
            <div class="column width-8">
                <div class="field-wrapper">
                    <label>Title</label>
                    <input type="text" name="title" value="{{ $tution->title }}" class="form-fname form-element large" placeholder="Tution Title*" tabindex="1" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>Area</label>
                    <input type="text" name="area" value="{{ $tution->area }}" class="form-fname form-element large" placeholder="Airport Colony*" tabindex="2" required>
                </div>
            </div>
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>City</label>
                    <input type="text" name="city" value="{{ $tution->city }}" class="form-fname form-element large" placeholder="Islamabad*" tabindex="3" required>
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
                            <option value={{ $course->id }} @if($course->id == $tution->course_id) selected @endif>{{ $course->course_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="column width-4">
                <div class="field-wrapper">
                    <label>For Class</label>
                    <input type="text" name="class" value="{{ $tution->class }}" class="form-fname form-element large" placeholder="Engineering*" tabindex="5" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column width-2">
                <div class="field-wrapper">
                    <label>Budget</label>
                    <input type="text" name="fee" value={{ $tution->fee }} class="form-fname form-element large" placeholder="Course Budget*" tabindex="6" required>
                </div>
            </div>
            <div class="column width-2">
                <div class="field-wrapper">
                    <label>Course Type</label>
                    <div class="form-select form-element large">
                        <select class="form-aux" name="type" data-live-search="true" tabindex="7" required>
                            <option disabled selected>Choose Type</option>
                            <option value="Institute" @if($tution->type == "Institute") selected @endif>Institute</option>
                            <option value="Students Home" @if($tution->type == "Student's Home") selected @endif>Student Home</option>
                            <option value="Tutor's Home" @if($tution->type == "Tutor's Home") selected @endif>Tutor Home</option>
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
                                <option value="Monday" @if($tution->day_from == 'Monday') selected @endif>Monday</option> 
                                <option value="Tuesday" @if($tution->day_from == 'Tuesday') selected @endif>Tuesday</option>  
                                <option value="Wednesday" @if($tution->day_from == 'Wednesday') selected @endif>Wednesday</option>  
                                <option value="Thursday" @if($tution->day_from == 'Thursday') selected @endif>Thursday</option>  
                                <option value="Friday" @if($tution->day_from == 'Friday') selected @endif>Friday</option>  
                                <option value="Saturday" @if($tution->day_from == 'Saturday') selected @endif>Saturday</option>  
                                <option value="Sunday" @if($tution->day_from == 'Sunday') selected @endif>Sunday</option>      
                            </select>
                        </div>
                        <div class="column width-6">
                            <label>To</label>
                            <select class="form-control dropdown" name="day_to" tabindex="9" required>
                                <option value="" selected="selected" disabled="disabled">Select One</option>
                                <option value="Monday" @if($tution->day_to == 'Monday') selected @endif>Monday</option> 
                                <option value="Tuesday" @if($tution->day_to == 'Tuesday') selected @endif>Tuesday</option>  
                                <option value="Wednesday" @if($tution->day_to == 'Wednesday') selected @endif>Wednesday</option>  
                                <option value="Thursday" @if($tution->day_to == 'Thursday') selected @endif>Thursday</option>  
                                <option value="Friday" @if($tution->day_to == 'Friday') selected @endif>Friday</option>  
                                <option value="Saturday" @if($tution->day_to == 'Saturday') selected @endif>Saturday</option>  
                                <option value="Sunday" @if($tution->day_to == 'Sunday') selected @endif>Sunday</option>       
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
                                <option value="{{ $a }}:00" @if($tution->time_from == "{{$a }}:00") selected @endif>{{ $a }}:00</option> 
                                @endfor       
                            </select>
                        </div>
                        <div class="column width-6">
                            <label>To</label>
                            <select class="form-control dropdown" id="time_to" name="time_to" tabindex="11" required>
                                <option value="" selected="selected" disabled="disabled">Select One</option>
                                @for ($a=0; $a<=23; $a++)
                                <option value="{{ $a }}:00" @if($tution->time_to == "{{ $a }}:00") selected @endif>{{ $a }}:00</option> 
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
                <textarea name="description" class="form-message form-element large" placeholder="Description Here*" tabindex="7" required>{{ $tution->description }}</textarea>
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
