@extends('tportal.tportal-layouts.tportal-layout')

@section('content')

<div class="row">
    <div class="column width-12">
      <div style="height:30px"class="progress-bar large pill bkg-turquoise-light color-white">
    <div class="bar border-turquoise color-white horizon" style="width:80%;" data-animate-in="transX:-400;duration:1000ms;delay:400ms;easing:swing;">
      80%
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
                          <div class="signup-form-container create-account horizontal">
      <form class="contact-form" action="php/send-email.php" method="post" novalidate>
                        <div  class="column width-12">
                          <div class="column width-4">

                            Daily<div class="field-wrapper">
                              <input type="time" name="fname" class="form-fname form-element large" placeholder="First Name*" tabindex="1" required>
                            </div>
                          </div>
                          <div class="column width-4">
                            Weekly<div class="field-wrapper">
                              <input type="week" name="lname" class="form-lname form-element large" placeholder="Last Name" tabindex="2">
                            </div>
                          </div>
                          <div class="column width-4">
                            Monthly<div class="field-wrapper">
                              <input type="date" name="email" class="form-email form-element large" placeholder="Email address*" tabindex="3" required>
                            </div>To
                            <div class="field-wrapper">
                              <input type="date" name="email" class="form-email form-element large" placeholder="Email address*" tabindex="3" required>
                            </div>
                          </div>




                        </div>
                        <div class="row">



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