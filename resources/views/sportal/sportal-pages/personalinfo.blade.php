@extends('sportal.sportal-layouts.sportal-layout')

@section('content')

  <div class="row">
    <div class="column width-12">
      <div style="height:30px" class="progress-bar large pill bkg-turquoise-light color-white">
  	<div class="bar border-turquoise color-white horizon" style="width:30%;" data-animate-in="transX:-400;duration:1000ms;delay:400ms;easing:swing;">
  		20%
  	</div>
  </div>
        <hr class="mt-20 mb-60">
        <div class="tabs style-2 vertical left">
          <ul class="tab-nav">
            <li class="active">
                <a href="./spersonalinfo">Personal Info</a>
            </li>
            <li>
                <a href="./seducationalinfo">Educational Info</a>
            </li>


            <li >
                <a href="./scourses">Courses</a>
            </li>

            <li>
                <a href="./peertopeer">Avail To Teach</a>

            </li>
            <li >
                <a href="./suploads">Uploads</a>
            </li>
          </ul>
        <div class="tab-panes left">

            <div id="tabs-team-pane-1" class="active animate">
                <div class="tab-content">

                    <!-- Team Grid -->
                    <div style="width:500; height:500;background-color:#daf2f2"class="row content-grid-2">
                        <div >
                            <div  class="signup-form-container create-account horizontal">
                                <form class="signup-form" method="POST"  >
                                @csrf
                                    <div class="column width-12">
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <label>Full Name*</label>
                                                <input type="text" name="name"  class="form-email form-element large" placeholder="Mark Johnson" tabindex="1" required>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <label>Username</label>
                                                <input type="text" name="username"  class="form-password form-element large" placeholder="markjohn" tabindex="2" readonly>
                                            </div>
                                        </div>
                                    </div>
                                <div class="column width-12">
                                    <div class="column width-4">
                                        <div class="field-wrapper">
                                            <label>CNIC*</label>
                                            <input type="text" name="cnic"  class="form-email form-element large" placeholder="37408-2121454-3" tabindex="3" required>
                                        </div>
                                    </div>
                                    <div class="column width-4">
                                        <div class="field-wrapper">
                                            <label>Phone*</label>
                                            <input type="text" name="phone"  class="form-password form-element large" placeholder="+923453045874" tabindex="4" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-12">
                                    <div class="column width-2">
                                        <div class="field-wrapper">
                                            <label>Gender*</label>
                                            <div class="form-select form-element large">
                                                <select name="gender" tabindex="5" class="form-aux" data-label="Gender">
                                                <option selected="selected" value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column width-2">
                                        <div class="field-wrapper">
                                            <label>Age*</label>
                                            <input type="number" name="age"  class="form-password form-element large" placeholder="25" tabindex="6" required>
                                        </div>
                                    </div>
                                    <div class="column width-4">
                                        <div class="field-wrapper">
                                            <label>Nationality*</label>
                                            <input type="text" name="nationality"  class="form-password form-element large" placeholder="Pakistani" tabindex="7" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-12">
                                <div class="column width-4">
                                <div class="field-wrapper">
                                <label>Adress Line 1*</label>
                                <input type="text" name="address1"  class="form-password form-element large" placeholder="H#50 Lane 4" tabindex="8" required>
                                </div>
                                </div>
                                <div class="column width-4">
                                <div class="field-wrapper">
                                <label>Adress Line 2</label>
                                <input type="text" name="address2"  class="form-password form-element large" placeholder="Sector F-10" tabindex="9">
                                </div>
                                </div>
                                </div>
                                <div class="column width-12">
                                <div class="column width-4">
                                <div class="field-wrapper">
                                <label>City*</label>
                                <input type="text" name="city"  class="form-password form-element large" placeholder="Islamabad" tabindex="10" required>
                                </div>
                                </div>
                                </div>
                                <div class="column width-12">
                                <input onclick="move()" type="submit" value="Save" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                                </div>
                                <div class="column width-12"><br><br></div>
                                <input type="text" name="honeypot" class="form-honeypot form-element">
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
