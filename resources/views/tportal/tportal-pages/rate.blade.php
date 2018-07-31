@extends('tportal.tportal-layouts.tportal-layout')

@section('content')

<div class="row">
    <div class="column width-12">
        <h5 class="text-uppercase mb-0">Register Here</h5>
        <hr class="mt-20 mb-60">
        <div style="height:30px" class="tabs style-2 vertical left">
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
                        <div >
                          <div class="signup-form-container create-account horizontal">
        <form class="contact-form" action="php/send-email.php" method="post" novalidate>
                          <div  class="column width-12">
                            <div class="column width-4">
                              <div class="field-wrapper">
                                <input type="text" name="fname" class="form-fname form-element large" placeholder="Pkr Hourly" tabindex="1" required>
                              </div>
                            </div>
                            <div class="column width-4">
                              <div class="field-wrapper">
                                <input type="text" name="lname" class="form-lname form-element large" placeholder="Pkr Daily" tabindex="2">
                              </div>
                            </div>
                            <div class="column width-4">
                              <div class="field-wrapper">
                                <input type="email" name="email" class="form-email form-element large" placeholder="Pkr Weekly" tabindex="3" required>
                              </div>
                            </div>
                            <div class="column width-4">
                              <div class="field-wrapper">
                                <input type="password" name="pass" class="form-email form-element large" placeholder="Pkr Monthly" tabindex="3" required>
                              </div>
                            </div>



                            <div class="column width-4">
                              <input type="text" name="honeypot" class="form-honeypot form-element">
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
