@extends('tportal.tportal-layouts.tportal-layout')
@section('content')
  <div class="tab-panes left">
    <div id="tabs-team-pane-2" class="active animate">
      <div class="tab-content">
        <!-- Team Grid -->
        <div class="cart-totals box xlarge bkg-grey-ultralight">
        <div class="row content-grid-2">
          <div>
            <div class="signup-form-container create-account horizontal">
              <form method="POST" action="{{ route('availability.update', $user->user_id) }}">
                @csrf
                {{ method_field("PUT") }}
                <div class="row">
                  <div class="column width-8">
                    <div class="field-wrapper">
                      <fieldset>
                        <legend>Prefferable Days</legend>
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="column width-6">
                          <label>From</label>
                          <select class="form-control dropdown" name="day_from" tabindex="8" required>
                            <option value="" @if($user->day_from == '') selected @endif disabled="disabled">Select One</option>
                            <option value="Monday" @if($user->day_from == 'Monday') selected @endif>Monday</option>
                            <option value="Tuesday" @if($user->day_from == 'Tuesday') selected @endif>Tuesday</option>
                            <option value="Wednesday" @if($user->day_from == 'Wednesday') selected @endif>Wednesday</option>
                            <option value="Thursday" @if($user->day_from == 'Thursday') selected @endif>Thursday</option>
                            <option value="Friday" @if($user->day_from == 'Friday') selected @endif>Friday</option>
                            <option value="Saturday" @if($user->day_from == 'Saturday') selected @endif>Saturday</option>
                            <option value="Sunday" @if($user->day_from == 'Sunday') selected @endif>Sunday</option>
                          </select>
                        </div>
                        <div class="column width-6">
                          <label>To</label>
                          <select class="form-control dropdown" name="day_to" tabindex="9" required>
                            <option value="" @if($user->day_to == '') selected @endif disabled="disabled">Select One</option>
                            <option value="Monday" @if($user->day_to == 'Monday') selected @endif>Monday</option>
                            <option value="Tuesday" @if($user->day_to == 'Tuesday') selected @endif>Tuesday</option>
                            <option value="Wednesday" @if($user->day_to == 'Wednesday') selected @endif>Wednesday</option>
                            <option value="Thursday" @if($user->day_to == 'Thursday') selected @endif>Thursday</option>
                            <option value="Friday" @if($user->day_to == 'Friday') selected @endif>Friday</option>
                            <option value="Saturday" @if($user->day_to == 'Saturday') selected @endif>Saturday</option>
                            <option value="Sunday" @if($user->day_to == 'Sunday') selected @endif>Sunday</option>
                          </select>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="column width-8">
                    <div class="field-wrapper">
                      <fieldset>
                        <legend>Prefferable Time</legend>
                        <div class="column width-6">
                          <label>From</label>
                          <select class="form-control dropdown" id="time_from" name="time_from" tabindex="10" required>
                            <option value="" selected="selected" disabled="disabled">Select One</option>
                            @for ($a=0; $a<=23; $a++)
                            <option value="{{ $a }}:00" @if($user->time_from == $a.':00') selected @endif>{{ $a }}:00</option>
                            @endfor
                          </select>
                        </div>
                        <div class="column width-6">
                          <label>To</label>
                          <select class="form-control dropdown" id="time_to" name="time_to" tabindex="11" required>
                            <option value="" selected="selected" disabled="disabled">Select One</option>
                            @for ($a=0; $a<=23; $a++)
                            <option value="{{ $a }}:00" @if($user->time_to == $a.':00') selected @endif>{{ $a }}:00</option>
                            @endfor
                          </select>
                        </div>
                      </fieldset>
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
        <!-- Team Grid End -->
      </div>
      </div>
    </div>
  </div>

@endsection
