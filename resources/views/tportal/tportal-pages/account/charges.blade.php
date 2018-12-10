@extends('tportal.tportal-layouts.tportal-layout')
@section('title', 'Charges')
@section('content')
  <div class="tab-panes left">
    <div id="tabs-team-pane-2" class="active animate">
      <div class="tab-content">
        <div class="cart-totals box xlarge bkg-grey-ultralight">
        <div style="width:500; height:500;"class="row content-grid-2">
          <div>
            <div class="signup-form-container create-account horizontal">
              <form method="POST" action="{{ route('teacher.update', $rate->user_id) }}">
                  @csrf
                  {{ method_field("PUT") }}
                <div class="row">
                  <div class="column width-4">
                    <div class="field-wrapper">
                      <input type="number" name="hourly_charges" value="{{ $rate->hourly_charges }}" class="form-fname form-element large" placeholder="Pkr Hourly" tabindex="1" required>
                    </div>
                  </div>
                  <div class="column width-4">
                    <div class="field-wrapper">
                      <input type="number" name="daily_charges" value="{{ $rate->daily_charges }}" class="form-lname form-element large" placeholder="Pkr Daily" tabindex="2">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="column width-4">
                    <div class="field-wrapper">
                      <input type="number" name="weekly_charges" value="{{ $rate->weekly_charges }}" class="form-email form-element large" placeholder="Pkr Weekly" tabindex="3" required>
                    </div>
                  </div>
                  <div class="column width-4">
                    <div class="field-wrapper">
                      <input type="number" name="monthly_charges" value="{{ $rate->monthly_charges }}" class="form-email form-element large" placeholder="Pkr Monthly" tabindex="3" required>
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
      </div>
      </div>
    </div>
  </div>




@endsection
