@extends('tportal.tportal-layouts.tportal-layout')

@section('content')

<div class="row">
    <div class="column width-12">
      <div style="height:30px" class="progress-bar large pill bkg-turquoise-light color-white">
    <div class="bar border-turquoise color-white horizon" style="width:50%;" data-animate-in="transX:-400;duration:1000ms;delay:400ms;easing:swing;">
      50%
    </div>
  </div>
        <hr class="mt-20 mb-60">
        <div class="tabs style-2 vertical left">
            <ul class="tab-nav">
                <li class="active"><a href="{{ route('account.index') }}">Personal Info</a></li>
                <li><a href="{{ route('edinfo.index') }}">Educational Info</a></li>
                <li><a href="{{ route('experience.index') }}">Experience</a></li>
                <li><a href="./courses">Courses</a></li>
                <li><a href="./certification">Certification</a></li>
                <li><a href="./availability">Availablity</a> </li>
                <li><a href="./current-tutions">Current-Tutions</a></li>
                <li><a href="./rate">Rate</a></li>
                <li><a href="./uploads">Uploads</a></li>
            </ul>
        <div class="tab-panes left">
            <div id="tabs-team-pane-2" class="active animate">
                <div class="tab-content">
                    <!-- Team Grid -->
                    <div style="width:500; height:500;background-color:#daf2f2"class="row content-grid-2">
                        <div>
                          <div>
                            <form method="POST" action="{{ route("experience.store") }}">
                                @csrf
                      <div  class="column width-12">
                        <div class="column width-4">
                          <div class="field-wrapper">
                            <input type="text" name="title" class="form-fname form-element large" placeholder="Work Title*" tabindex="1" required>
                          </div>
                        </div>
                        <div class="column width-4">
                          <div class="field-wrapper">
                            <input type="text" name="company" class="form-lname form-element large" placeholder="Work Company" tabindex="2">
                          </div>
                        </div>
                        <div class="column width-4">
                          <div class="field-wrapper">
                            <input type="text" name="duration" class="form-email form-element large" placeholder="Work Duration*" tabindex="3" required>
                          </div>
                        </div>

                        <br><br><br>
                        <div class="column width-1">
                            <div class="field-wrapper">
                        <span>From</span>
                            </div>
                        </div>
                        <div class="column width-5">
                            <div class="field-wrapper">
                                <input type="date" name="startdate" class="form-email form-element large" placeholder="Year of passing*" tabindex="3" required>
                            </div>
                        </div>
                        <div class="column width-1">
                            <div class="field-wrapper">
                        <span>To</span>
                            </div>
                        </div>
                        <div class="column width-5">
                            <div class="field-wrapper">
                                <input type="date" name="enddate" class="form-email form-element large" placeholder="Year of passing*" tabindex="3" required>
                            </div>
                        </div>
                      </div>
                      <div class="column width-12">
                        <div class="column width-12">
                          <div class="field-wrapper">
                            <textarea name="description" class="form-message form-element large" placeholder="Description*" tabindex="7" required></textarea>
                          </div>
                        </div>


                      </div>
                      <div class="column width-12">
                        <input type="submit" value="Save" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                     </div>
                      <div class="column width-12"><br><br></div>
                    </form>
    <div class="form-response show"></div>
</div>
                        </div>
                    </div>
                    <!-- Team Grid End -->
                </div>
            </div>
        </div>
    </div>
    </div>
</div>





  @endsection
