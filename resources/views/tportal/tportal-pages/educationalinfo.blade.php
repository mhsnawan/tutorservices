@extends('tportal.tportal-layouts.tportal-layout')

@section('content')

<div class="row">
    <div class="column width-12">
      <div style="height:30px" class="progress-bar large pill bkg-turquoise-light color-white">
    <div class="bar border-turquoise color-white horizon" style="width:40%;" data-animate-in="transX:-400;duration:1000ms;delay:400ms;easing:swing;">
      40%
    </div>
  </div>
        <hr class="mt-20 mb-60">
        <div class="tabs style-2 vertical left">
            <ul class="tab-nav">
              <li>
                  <a href="./personalinfo">Personal Info</a>
              </li>
              <li class="active">
                  <a href="./educationalinfo">Educational Info</a>
              </li>

              <li>
                  <a href="./experience">Experience</a>
              </li>
              <li>
                  <a href="./courses">Courses</a>
              </li>
              <li>
                  <a href="./certification">Certification</a>
              </li>
              <li>
                  <a href="./availability">Availablity</a>
              </li>
              <li>
                  <a href="./current-tutions">Current-Tutions</a>
              </li>
              <li>
                  <a href="./rate">Rate</a>

              </li>
              <li>
                  <a href="./uploads">Uploads</a>
              </li>
            </ul>
        <div class="tab-panes left">
            <div id="tabs-team-pane-2" class="active animate">
                <div class="tab-content">
                    <!-- Team Grid -->
                    <div style="width:500; height:500;background-color:#daf2f2" class="row content-grid-2">
                        <div>
                            <div class="signup-form-container create-account horizontal">
                                <form class="contact-form" action="php/send-email.php" method="post" novalidate>
                                    <div class="column width-12" >

                                          <div class="field-wrapper">
                                       <fieldset>
                                       <legend>Degree Level</legend>
                                       <select class="form-control dropdown" id="education" name="education">
                                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                            <option value="No formal education">No formal education</option>
                                            <option value="Primary education">Primary education</option>
                                            <option value="Secondary education">Secondary education or high school</option>
                                            <option value="GED">GED</option>
                                            <option value="Vocational qualification">Vocational qualification</option>
                                            <option value="Bachelor's degree">Bachelor's degree</option>
                                            <option value="Master's degree">Master's degree</option>
                                            <option value="Doctorate or higher">Doctorate or higher</option>
                                        </select>
                                      </fieldset>
                                     </div>


                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="text" name="fname" class="form-email form-element large" placeholder="Degree Title*" tabindex="1" required>
                                            </div>
                                        </div>
                                        <div class="column width-1">
                                          <div class="field-wrapper">
                                            <p>&nbsp</p>
                                          </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="text" name="lname" class="form-lname form-element large" placeholder="Institute/university" tabindex="2">
                                            </div>
                                        </div><br><br><br>
                                        <div class="column width-1">
                                            <div class="field-wrapper">
                                        <span>From</span>
                                            </div>
                                        </div>
                                        <div class="column width-3">
                                            <div class="field-wrapper">
                                                <input type="date" name="email" class="form-email form-element large" placeholder="Year of passing*" tabindex="3" required>
                                            </div>
                                        </div>
                                        <div class="column width-1">
                                            <div class="field-wrapper">
                                        <span>To</span>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="date" name="email" class="form-email form-element large" placeholder="Year of passing*" tabindex="3" required>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="Percentage" name="pass" class="form-email form-element large" placeholder="Percentage*" tabindex="3" required>
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
