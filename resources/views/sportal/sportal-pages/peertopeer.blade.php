@extends('sportal.sportal-layouts.sportal-layout')

@section('content')

<div class="row">
    <div class="column width-12">
      <div style="height:30px" class="progress-bar large pill bkg-turquoise-light color-white">
    <div class="bar border-turquoise color-white horizon" style="width:80%;" data-animate-in="transX:-400;duration:1000ms;delay:400ms;easing:swing;">
      80%
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


            <li>
                <a href="./scourses">Courses</a>
            </li>

            <li class="active">
                <a href="./peertopeer">Avail To Teach</a>

            </li>
            <li >
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
                                                <div class="column width-2">
                                                    <label >Become Tutor</label> </div>
                                                <div class="column width-3">

                                                  <input id="check"  name="check" type="checkbox" value="1" checked required>
                                              </div>

                                          </form>
                                          </div>

					<div class="row">
						<div class="column width-6 push-2">
							<div class="aux-details box large">
								<div class="accordion product-addtional-info style-2">
									<ul>
										<li class="active returning-customer">
											<a href="#accordion-returning-customer">Become a Tutor</a>
											<div id="accordion-returning-customer">
												<div class="accordion-content">
													<div class="returning-customer-form-container">
                            <form class="contact-form" action="php/send-email.php" method="post" novalidate>
                                              <div class="column width-12">
                                                <div class="column width-4">
                                                  <div class="field-wrapper">
                                                    <input type="text" name="fname" class="form-fname form-element large" placeholder="Course Code1 *" tabindex="1" required>
                                                  </div>
                                                </div>
                                                <div class="column width-4">
                                                  <div class="field-wrapper">
                                                    <input type="text" name="lname" class="form-lname form-element large" placeholder="Course Title1" tabindex="2">
                                                  </div>
                                                </div>
                                                  <div class="field-wrapper">
                                                    <input type="text" name="fname" class="form-fname form-element large" placeholder="Course Code2 *" tabindex="1" required>
                                                  </div>

                                                <div class="column width-4">
                                                  <div class="field-wrapper">
                                                    <input type="text" name="lname" class="form-lname form-element large" placeholder="Course Title2" tabindex="2">
                                                  </div>
                                                </div>
                                                <div class="column width-4">
                                                  <div class="field-wrapper">
                                                    <input type="text" name="fname" class="form-fname form-element large" placeholder="Course Code3 *" tabindex="1" required>
                                                  </div>
                                              </div>
                                                <div class="column width-4">
                                                  <div class="field-wrapper">
                                                    <input type="text" name="lname" class="form-lname form-element large" placeholder="Course Title3" tabindex="2">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="column width-12">
                                                <input type="submit" value="Save" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                                              </div>
                                              <div class="column width-12"><br><br></div>
                                            </form>
														<div class="form-response"></div>
													</div>
												</div>
											</div>
										</li>
                  </div>
              </div>
          </div>
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
