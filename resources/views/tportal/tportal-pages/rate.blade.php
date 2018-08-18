@extends('tportal.tportal-layouts.tportal-layout')

@section('content')

<div class="row">
  <div class="column width-12">
    <h5 class="text-uppercase mb-0">Register Here</h5>
    <hr class="mt-20 mb-60">
    <div style="height:30px" class="tabs style-2 vertical left">
      <ul class="tab-nav">
        <li><a href="{{ route('account.index') }}">Personal Info</a></li>
        <li><a href="{{ route('edinfo.index') }}">Educational Info</a></li>
        <li><a href="{{ route('experience.index') }}">Experience</a></li>
        <li><a href="./certification">Certification</a></li>
        <li><a href="./availability">Availablity</a> </li>
        <li class="active"><a href="./rate">Rate</a></li>
      </ul>
      <div class="tab-panes left">
        <div id="tabs-team-pane-2" class="active animate">
          <div class="tab-content">
            <div style="width:500; height:500;background-color:#daf2f2"class="row content-grid-2">
              <div>
                <div class="signup-form-container create-account horizontal">
                  <form @if($rate)action="{{ route('teacher.update', $rate->user_id) }}"
                      @else(!$rate)action="{{ route('teacher.store') }}"@endif method="post">
                      @csrf
                      {{ method_field("PUT") }}
                    <div  class="column width-12">
                      <div class="column width-4">
                        <div class="field-wrapper">
                          <input type="number" name="hourly_rate" value="{{ $rate->hourly_rate }}" class="form-fname form-element large" placeholder="Pkr Hourly" tabindex="1" required>
                        </div>
                      </div>
                      <div class="column width-4">
                        <div class="field-wrapper">
                          <input type="number" name="daily_rate" value="{{ $rate->daily_rate }}" class="form-lname form-element large" placeholder="Pkr Daily" tabindex="2">
                        </div>
                      </div>
                      <div class="column width-4">
                        <div class="field-wrapper">
                          <input type="number" name="weekly_rate" value="{{ $rate->weekly_rate }}" class="form-email form-element large" placeholder="Pkr Weekly" tabindex="3" required>
                        </div>
                      </div>
                      <div class="column width-4">
                        <div class="field-wrapper">
                          <input type="number" name="monthly_rate" value="{{ $rate->monthly_rate }}" class="form-email form-element large" placeholder="Pkr Monthly" tabindex="3" required>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





@endsection
