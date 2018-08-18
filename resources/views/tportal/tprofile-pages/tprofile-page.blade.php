@extends('tportal.tprofile-layouts.tprofile-layout')

@section('content')

<br>
<br>
<br>
<div class="profile clearfix">
        <div class="image">
            <img src="images/team/team-member-8.jpg" class="img-cover">
        </div>
        <div class="user clearfix">
            <div class="avatar">
                <img src="images/team/team-member-8.jpg"class="img-thumbnail img-profile">
            </div>
            <br>
            <div class="column width-3">
                <div class="widget" >
                    <h4 class="widget-title weight-light"><a href=""></a></h4>

                </div>
            </div>
            <h2>{{ $user->name }}</h2>


        </div>

        <div class="column width-8">
            <div class="widget" >
                <h4 class="widget-title weight-light"><a href=""></a></h4>

            </div>
        </div>
        <div >
            <p></span> <span class="title">Verification Status:</span> <span  class="icon-circled icon-check large rounded border-green-light color-white bkg-hover-green-light color-hover-white thick"></span></p>

        </div>
        <div class="column width-2">
            <div class="widget" >
                <h4 class="widget-title weight-light"><a href=""></a></h4>

            </div>
        </div>

          <div class="column width-4">
            <span>Rating</span>
            <div class="widget" >



                <span class="rating">
                  <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                  <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </span>


            </div>
          </div>
          <div class="column width-4">
              <div class="widget" >
                  <h4 class="widget-title weight-light"><a href=""></a></h4>

              </div>
          </div>
        <div class="column width-4">
          <input type="submit" value="contact" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
       </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <div class="image"style="background-color:gray;width:1110px;height:1000px;left: 120px;">
      <!-- Boxed Feature Columns -->
				<div class="section-block pb-0 bkg-grey-ultralight">

					<div class="row flex boxes">
						<div class="column width-12">
							<div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;" data-threshold="1">
                                <div class="feature-text">
                                    <div class="column width-3">
                                        <h6>Hourly Rate</h6>
                                        
                                        <p>PKR @if($teacher){{ $teacher->hourly_rate }} @endif</p>
                                    </div>
                                    <div class="column width-3">
                                        <h6>Daily Rate</h6>
                                        <p>PKR @if($teacher){{ $teacher->daily_rate }}@endif</p>
                                    </div>
                                    <div class="column width-3">
                                        <h6>Weekly Rate</h6>
                                        <p>PKR @if($teacher){{ $teacher->weekly_rate }}@endif</p>
                                    </div>
                                    <div class="column width-3">
                                        <h6>Monthly Rate</h6>
                                        <p>PKR @if($teacher){{ $teacher->monthly_rate }}@endif</p>
                                    </div>
                                </div>
                                
                                
							</div>
						</div>
						<div class="column width-6">
							<div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:200ms;" data-threshold="1">

								<div class="feature-text">
									<h5>Education</h5>
									<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
								</div>
							</div>
						</div>
						<div class="column width-6">
							<div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:400ms;" data-threshold="1">

								<div class="feature-text">
									<h5>Experience</h5>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
								</div>
							</div>
						</div>
            <div class="column width-6">
							<div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:200ms;" data-threshold="1">

								<div class="feature-text">
									<h5>certification</h5>
									<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
								</div>
							</div>
						</div>
						<div class="column width-6">
							<div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:400ms;" data-threshold="1">

								<div class="feature-text">
									<h5>Tutions</h5>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
								</div>
							</div>
						</div>
            <div class="column width-12">
							<div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:400ms;" data-threshold="1">

								<div class="feature-text">
									<h5>No Of Students</h5>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Boxed Feature Columns End -->
        <br>
        <br>
        <div class="column width-6">
          <input type="submit" value="Join a tution" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
       </div>
       <div class="column width-6">
         <input type="submit" value="post a review" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
      </div>
   </div>
</div>

  @endsection
