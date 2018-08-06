@extends('sportal.sportal-layouts.sportal-layout')

@section('content')

<div class="row">
    <div class="column width-12">
      <div style="height:30px" class="progress-bar large pill bkg-turquoise-light color-white">
    <div class="bar border-turquoise color-white horizon" style="width:100%;" data-animate-in="transX:-400;duration:1000ms;delay:400ms;easing:swing;">
      100%
    </div>
  </div>
        <hr class="mt-20 mb-60">
        <div class="tabs style-2 vertical left">
          <ul class="tab-nav">
            <li>
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
            <li class="active">
                <a href="./suploads">Uploads</a>
            </li>
          </ul>
        <div class="tab-panes left">
            <div id="tabs-team-pane-2" class="active animate">
                <div class="tab-content">
                    <!-- Team Grid -->
                    <div style="width:500; height:500;background-color:#daf2f2" class="row content-grid-2">
                        <div >
                          <div class="signup-form-container create-account horizontal">
    <form class="contact-form" action="php/send-email.php" method="post" novalidate>
                      <div class="column width-12">
                        <div class="column width-4">

                        <div class="column width-4">
                          <input type="text" name="honeypot" class="form-honeypot form-element">
                        </div>
                      </div>
                      <div class="row">
                        <div class="column width-4">
                          <div class="column width-12">
                            <input type="file" name="fileToUpload" id="fileToUpload" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                              <input type="submit" value="Upload Cnic" name="submit"   class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                          </div>
                        </div>
                        <div class="column width-4">
                          <div class="column width-12">
                            <input type="file" name="fileToUpload" id="fileToUpload" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                                                    <input type="submit" value="Upload Transcript" name="submit"   class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                          </div>
                        </div>

                      </div>
                      <div class="column width-12"><br><br></div>
                    </form>
                    </div>
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
