@extends('tportal.tportal-layouts.tportal-layout')
@section('title', 'Charges')
@section('content')

      <div class="tab-panes left">
        <div id="tabs-team-pane-2" class="active animate">
          <div class="tab-content">
            <div style="width:500; height:500;background-color:#daf2f2"class="row content-grid-2">
              <div>
                <div class="signup-form-container create-account horizontal">
                  <form method="POST" action="{{ route('teacher.update', $rate->user_id) }}">
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




@endsection
