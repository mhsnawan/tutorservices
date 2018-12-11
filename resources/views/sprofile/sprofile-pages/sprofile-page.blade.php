@extends('tprofile.tprofile-layouts.tprofile-layout')

@section('content')

<br>
<br>
<br>
<div class="row" >
<div class="profile clearfix">
    <div class="imag">
        <img src="/storage/{{Auth::user()->cover_img}}" class="img-cover cover-img">
        <form id="cover" method="post" action={{ route('ucover') }} enctype="multipart/form-data">
          @csrf
          <input type="hidden" value="{{ $user->id }}" name="id">
          <div class="column width-2">
          <input style="bottom:0%;left:40%" type="file" name="cover_img" id="cover_img" value="Update" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white"></div>
        </form>
        <input style="top:5%;right:82%" type="submit" value="Update" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
      </div>
      <div class="user clearfix">
          <div class="avatar">
            <img src="/storage/{{Auth::user()->profile_img}}" class="img-thumbnail img-profile profile-img">
            <form id="target" method="post" action={{ route('uprofile') }} enctype="multipart/form-data">
              @csrf
              <input type="hidden" value="{{ $user->id }}" name="id">
              <input style="bottom:0;left:22%" type="file" name="profile_img" id="profile_img" value="Update" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
            </form>
    
          </div>
          <br>
          <div class="column width-2">
            <div class="widget" >
                <h4 class="widget-title weight-light"><a href=""></a></h4>
            </div>
          </div>
          <div class="column width-4">
            <h2>{{ $user->name }}</h2>
          </div>
          <div class="column width-2" >
            <p>@if(Auth::user()->verified == 1) <span class="icon-circled icon-check small rounded border-green-light color-green bkg-hover-blue-light color-hover-white thick"></span>@endif</p>
          </div>
        </div>
        <div class="column width-2">
            <div class="widget" >
                <h4 class="widget-title weight-light"><a href=""></a></h4>
            </div>
        </div>
          <div class="column width-4">
            <span>Rating</span>
            <div class="widget">
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
          <div class="column width-6">
              <div class="widget" >
                  <h4 class="widget-title weight-light"><a href=""></a></h4>
              </div>
          </div>
        <div class="column width-4">   
          @if(Auth::user()->id != $user->id)
          <input type="submit" value="contact" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
          @endif
        </div>
    <div class="image"style="background-color:#E7DFDD ;width:1000px;left: 120px;">
      <!-- Boxed Feature Columns
				<div class="section-block pb-0 bkg-grey-ultralight">-->

					<div class="row flex boxes">
						{{--  <div class="column width-12">
							<div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;" data-threshold="1">

								<div class="feature-text">
									<h5>Education</h5>
								<div class="column width-2">	  <a style="" href="#" class="contains-sub-menu profile-image">
                      <img style="width:32px;height:32px;position:inline;top:25px;left:10px;border-radius:50%;" src="storage/{{Auth::user()->profile_img}}" class="img-circle special-img">
                  </a></div>
              	<div class="column width-8">
                  <table class="table non-responsive">
                 <tbody>
                   <tr class="cart-subtotal">
                     <th>Degree</th>
                     <td><span class="amount">Bscs</span></td>
                   </tr>
                   <tr class="cart-order-total">
                     <th>Subjects</th>
                     <td><span class="amount">dsfs</span></td>
                   </tr>
                   <tr class="cart-order-total">
                     <th></th>
                     <td><span class="amount">sd</span></td>
                   </tr>
                 </tbody>
               </table>
             </div>
								</div>
							</div>
            </div>  --}}
            <div class="column width-12">
                <div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:200ms;" data-threshold="1">
                  <div class="feature-text">
                    <h5>Education</h5>
                    @foreach ($edinfos as $edinfo)
                    <b>{{ $edinfo->degree_level}} - {{$edinfo->title }}</b>
                    <p>{{ $edinfo->institute}} | {{ $edinfo->startdate }} - {{ $edinfo->enddate }}</p>
                    @endforeach
                  </div>
                </div>
              </div>
						<div class="column width-12">
							<div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:200ms;" data-threshold="1">

								<div class="feature-text">
									<h5>Tutors</h5>

                	<div class="column width-8">
                    <!--   <table class="table non-responsive">
                   <tbody>
                     <tr class="cart-order-total">
                       <th>T_Name</th>
                       <td><span >asdsds</span></td>
                     </tr>
                     <tr class="cart-order-total">
                       <th>Location</th>
                       <td><span >abc</span></td>
                     </tr>

                   </tbody>
                 </table>-->
                 <!
					-- Products Similar -->
					<div class="row products-similar">
						<div class="column width-12">
							<hr>

							<div id="product-grid" class="grid-container products fade-in-progressively no-padding-top" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="0">
								<div class="row">
									<div class="column width-12">
										<div class="row grid content-grid-3">
                      {{--  Loop HERE  --}}
                      @foreach ($data as $profile)
											<div class="grid-item grid-sizer product design">
												<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
													<span class="onsale">{{ $profile['course_name'] }}</span>
													<a class="overlay-link" href="single-product.html">
                            <img src="/storage/{{$profile['profile_img']}}" class="img-thumbnail img-profile profile-img">
													</a>
													<div class="product-actions center">
														<a onclick="getMessages({{ $user->id }})" class="button pill add-to-cart-button medium">Contact</a>
													</div>
												</div>
												<div class="product-details center">
													<h3 class="product-title">
														<a href="{{ route('profile.id', $profile['id']) }}">
															{{ $profile['name'] }}
														</a>
													</h3>

													<div class="product-actions-mobile">
														<a href="#" class="button pill add-to-cart-button medium">Contactt</a>
													</div>
												</div>
                      </div>
                      @endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Products Similar End -->

               </div>
								</div>
							</div>
						</div>
						<div class="column width-12">
							<div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:400ms;" data-threshold="1">

								<div class="feature-text">
									<h5>Tutions</h5>
                  <div class="column width-2">	 <a style="" href="#" class="contains-sub-menu profile-image">
                        <img style="width:32px;height:32px;position:inline;top:25px;left:10px;border-radius:50%;" src="storage/{{Auth::user()->profile_img}}" class="img-circle special-img"></div>
                	<div class="column width-12">
                  <table class="table non-responsive">
                  <tbody>
                     <tr class="cart-subtotal">
                       <th>Subject</th>
                       <td><span class="amount">English</span></td>
                     </tr>
                     <tr class="cart-order-total">
                       <th>Time</th>
                       <td><span class="amount"></span></td>
                     </tr>
                     <tr class="cart-order-total">
                       <th>LOcation</th>
                       <td><span class="amount">dssd</span></td>
                     </tr>
                   </tbody>
                 </table>
               </div>
								</div>
							</div>
						</div>



				<!--	</div>-->
				</div>
        <br>
        <br>
        {{--  <div class="column width-6">
          <input type="submit" value="Join a tution" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
        </div>
        <div class="column width-6">
         <input type="submit" value="post a review" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
        </div>  --}}
				<!-- Boxed Feature Columns End -->

   </div>
</div>
</div>

<script>
    function getMessages(user_id){
      $.ajax({
          url: "{{ route('get-con') }}",
          data: {
              _token: '{{ csrf_token() }}',
              user_id: user_id
              },
          success: function(data){
              if(data.check == 1){
                  window.location = "/inbox";
                  console.log('check is 1');
              }
              else{
                  window.location = "/new-chat/"+data.user2;
              }

          },
          error: function(){
          }
      });
  }

    $('#profile_img').change(function() {
      $('#target').submit();
    });

    $('#cover_img').change(function() {
      $('#cover').submit();
    });
</script>
  @endsection
