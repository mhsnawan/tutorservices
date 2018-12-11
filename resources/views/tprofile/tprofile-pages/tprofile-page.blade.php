@extends('tprofile.tprofile-layouts.tprofile-layout')
@section('content')
<br><br><br>
<div class="row">
<div class="profile clearfix">
  <div class="imag">
    <img src="/storage/{{ $user->cover_img}}" class="img-cover cover-img">
    @if (Auth::user()->id == $user->id)
    <form id="cover" method="post" action={{ route('ucover') }} enctype="multipart/form-data">
      @csrf
      <input type="hidden" value="{{ $user->id }}" name="id">
      <div class="column width-2">
      <input style="bottom:0%;left:40%" type="file" name="cover_img" id="cover_img" value="Update" class="form-submit button pill small border-theme bkg-hover-theme color-theme color-hover-white"></div>
    </form>
    @endif
    {{--  <input style="top:5%;right:82%" type="submit" value="Update" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">  --}}
  </div>
    <div class="user clearfix">
      <div class="avatar">
        <img src="/storage/{{ $user->profile_img}}" class="img-thumbnail img-profile profile-img">
        @if (Auth::user()->id == $user->id)
        <form id="target" method="post" action={{ route('uprofile') }} enctype="multipart/form-data">
          @csrf
          <input type="hidden" value="{{ $user->id }}" name="id">
          <input style="bottom:0;left:22%" type="file" name="profile_img" id="profile_img" value="Update" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
        </form>
        @endif
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
        <p>@if($user->verified == 1) <span class="icon-circled icon-check small rounded border-green-light color-green bkg-hover-blue-light color-hover-white thick"></span>@endif</p>
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
      <input type="button" onclick="getMessages({{ $user->id }})" value="contact" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
      @endif
    </div>
   <div class="image" style="background-color:#E7DFDD;width:1000px;left:120px;">
      <!-- Boxed Feature Columns
      <div class="section-block pb-0 bkg-grey-ultralight">-->
        <div class="row flex boxes">

          <div class="column width-12">
            <div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;" data-threshold="1">
              <div class="feature-text">
                <div class="column width-3">
                    <h6>Hourly Charges</h6>
                    <p>PKR @if($teacher){{ $teacher->hourly_charges }} @endif</p>
                </div>
                <div class="column width-3">
                    <h6>Daily Charges</h6>
                    <p>PKR @if($teacher){{ $teacher->daily_charges }}@endif</p>
                </div>
                <div class="column width-3">
                    <h6>Weekly Charges</h6>
                    <p>PKR @if($teacher){{ $teacher->weekly_charges }}@endif</p>
                </div>
                <div class="column width-3">
                    <h6>Monthly Charges</h6>
                    <p>PKR @if($teacher){{ $teacher->monthly_charges }}@endif</p>
                </div>
              </div>
            </div>
          </div>
          {{--  <div class="column width-12">
            <div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;" data-threshold="1">
              <div class="feature-text">
                <h5>Rate</h5>
                <div class="column width-2">	<p>	<span class="icon-credit icon-boxed color-grey circled xlarge bkg-navy border-hover-red"></p></div>
                <div class="column width-8">
                  <table class="table non-responsive">
                    <tbody>
                      <tr class="cart-subtotal">
                        <th>Hourly-Rate</th>
                        <td><span class="amount">$77.00</span></td>
                      </tr>
                      <tr class="cart-order-total">
                        <th>Weekly-Rate</th>
                        <td><span class="amount">$77.00</span></td>
                      </tr>
                      <tr class="cart-order-total">
                        <th>Monthly-Rate</th>
                        <td><span class="amount">$77.00</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>  --}}
          {{--  <div class="column width-6">
            <div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:200ms;" data-threshold="1">
              <div class="feature-text">
                <h5>Education</h5>
                <div class="column width-2"><p><span class="icon-graduation-cap icon-boxed color-grey circled xlarge bkg-navy border-hover-red"></p></div>
                  <div class="column width-8">
                    <table class="table non-responsive">
                      <tbody>
                        <tr class="cart-order-total">
                          <th>degree</th>
                          <td><span >asdsds</span></td>
                        </tr>
                        <tr class="cart-order-total">
                          <th>Weekly-Rate</th>
                          <td><span >abc</span></td>
                        </tr>
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>  --}}
          <div class="column width-6">
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
          {{--  <div class="column width-6">
            <div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:400ms;" data-threshold="1">
              <div class="feature-text">
                <h5>Experience</h5>
                <div class="column width-2">	<p>	<span class="icon-briefcase icon-boxed color-grey circled xlarge bkg-navy border-hover-red"></p></div>
                <div class="column width-8">
                  <table class="table non-responsive">
                  <tbody>
                    <tr class="cart-subtotal">
                      <th>Hourly-Rate</th>
                      <td><span class="amount">$77.00</span></td>
                    </tr>
                    <tr class="cart-order-total">
                      <th>Weekly-Rate</th>
                      <td><span class="amount">$77.00</span></td>
                    </tr>
                    <tr class="cart-order-total">
                      <th>Monthly-Rate</th>
                      <td><span class="amount">$77.00</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>  --}}
          <div class="column width-6">
            <div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:200ms;" data-threshold="1">
              <div class="feature-text">
                  <h5>Certifications</h5>
                  @foreach ($certifications as $certification)
                  <b>{{ $certification->title}}</b>
                  <p> {{$certification->institute }}  | {{ $certification->year }}</p><br>
                  @endforeach
              </div>
              {{--  <div class="feature-text">
                <h5>certification</h5>
                <div class="column width-2">	<p>	<span class="icon-shield icon-boxed color-grey circled xlarge bkg-navy border-hover-red"></p></div>
                <div class="column width-8">
                  <table class="table non-responsive">
                  <tbody>
                    <tr class="cart-subtotal">
                      <th>Hourly-Rate</th>
                      <td><span class="amount">$77.00</span></td>
                    </tr>
                    <tr class="cart-order-total">
                      <th>Weekly-Rate</th>
                      <td><span class="amount">$77.00</span></td>
                    </tr>
                    <tr class="cart-order-total">
                      <th>Monthly-Rate</th>
                      <td><span class="amount">$77.00</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>  --}}
            </div>
          </div>
          <div class="column width-12">
            <div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:200ms;" data-threshold="1">
                <div class="feature-text">
                  <h5>Experience</h5>
                    @foreach ($experiences as $experience)
                    <b>{{ $experience->title }} - {{ $experience->company }}</b>
                    <p>{{ $experience->startdate }} - {{ $experience->enddate }}</p>
                    @endforeach
              </div>
            </div>
          </div>
          {{--  <div class="column width-6">
            <div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:400ms;" data-threshold="1">

              <div class="feature-text">
                <h5>Tutions</h5>
                <div class="column width-2">	<p>	<span class="icon-open-book icon-boxed color-grey circled xlarge bkg-navy border-hover-red"></p></div>
                <div class="column width-8">
                  <table class="table non-responsive">
                  <tbody>
                    <tr class="cart-subtotal">
                      <th>Hourly-Rate</th>
                      <td><span class="amount">$77.00</span></td>
                    </tr>
                    <tr class="cart-order-total">
                      <th>Weekly-Rate</th>
                      <td><span class="amount">$77.00</span></td>
                    </tr>
                    <tr class="cart-order-total">
                      <th>Monthly-Rate</th>
                      <td><span class="amount">$77.00</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>  --}}
          {{--  <div class="column width-12">
            <div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:400ms;" data-threshold="1">

              <div class="feature-text">
                <h5>No Of Students</h5>
                <div class="column width-2">	<p>	<span class="icon-network icon-boxed color-grey circled xlarge bkg-navy border-hover-red"></p></div>
                <div class="column width-8">
                  <table class="table non-responsive">
                  <tbody>
                    <tr class="cart-subtotal">
                      <th>Hourly-Rate</th>
                      <td><span class="amount">dsdfs</span></td>
                    </tr>
                    <tr class="cart-order-total">
                      <th>Weekly-Rate</th>
                      <td><span >dkcdk</span></td>
                    </tr>
                    <tr class="cart-order-total">
                      <th>Monthly-Rate</th>
                      <td><span >ddsdks</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
        </div>  --}}
        {{--  <br>
        <br>
        <div class="column width-6">
          <input type="submit" value="Join a tution" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
       </div>
       <div class="column width-6">
         <input type="submit" value="post a review" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
   <  /div>  --}}
      </div>
				<!-- Boxed Feature Columns End -->

  <!--   </div>-->
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
