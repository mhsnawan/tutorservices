@extends('tportal.tportal-layouts.tportal-layout')

@section('content')

<div class="row">
    <div class="column width-12">
      <div style="height:30px" class="progress-bar large pill bkg-turquoise-light color-white">
    <div class="bar border-turquoise color-white horizon" style="width:40%;" data-animate-in="transX:-400;duration:1000ms;delay:400ms;easing:swing;">
      40%
    </div>
  </div>
        <hr class="mt-20 mb-60">
        <div class="tabs style-2 vertical left">
            <ul class="tab-nav">
                <li class="active"><a href="{{ route('account.index') }}">Personal Info</a></li>
                <li class="active"><a href="{{ route('edinfo.index') }}">Educational Info</a></li>
                <li><a href="{{ route('experience.index') }}">Experience</a></li>
                <li><a href="./certification">Certification</a></li>
                <li><a href="./availability">Availablity</a> </li>
                <li><a href="./rate">Rate</a></li>
              </ul>
        <div class="tab-panes left">
            <div id="tabs-team-pane-2" class="active animate">
                <div class="tab-content">
                    <!-- Team Grid -->
                    <div style="width:500; height:500;background-color:#daf2f2" class="row content-grid-2">
                        <div>
                            <div>
                                <form method="POST" action="{{ route("edinfo.store") }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="column width-12" >

                                          <div class="field-wrapper">
                                       <fieldset>
                                       <legend>Degree Level</legend>
                                       <select class="form-control dropdown" id="education" name="degree_level">
                                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                            <option value="No formal education">No formal education</option>
                                            <option value="Primary education">Primary education</option>
                                            <option value="Secondary education">Secondary education or high school</option>
                                            <option value="GED">GED</option>
                                            <option value="Vocational qualification">Vocational qualification</option>
                                            <option value="Bachelors degree">Bachelors degree</option>
                                            <option value="Masters degree">Masters degree</option>
                                            <option value="Doctorate or higher">Doctorate or higher</option>
                                        </select>
                                      </fieldset>
                                     </div>


                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="text" name="title" class="form-email form-element large" placeholder="Degree Title*" tabindex="1" required>
                                            </div>
                                        </div>
                                        <div class="column width-1">
                                          <div class="field-wrapper">
                                            <p>&nbsp</p>
                                          </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="text" name="institute" class="form-lname form-element large" placeholder="Institute/university" tabindex="2">
                                            </div>
                                        </div><br><br><br>
                                        <div class="column width-1">
                                            <div class="field-wrapper">
                                        <span>From</span>
                                            </div>
                                        </div>
                                        <div class="column width-3">
                                            <div class="field-wrapper">
                                                <input type="date" name="startdate" class="form-email form-element large" placeholder="Year of passing*" tabindex="3" required>
                                            </div>
                                        </div>
                                        <div class="column width-1">
                                            <div class="field-wrapper">
                                        <span>To</span>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="date" name="enddate" class="form-email form-element large" placeholder="Year of passing*" tabindex="3" required>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="Percentage" name="percentage" class="form-email form-element large" placeholder="Percentage*" tabindex="3" required>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="file" name="degree_img" class="form-email form-element large" placeholder="Upload Degree*" tabindex="3">
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
                    <!-- Team Grid End -->

                    
                    
                    <div style="width:500; height:500;background-color:#daf2f2" class="row content-grid-2">
                        <div>
                            <div>
                                @if($edinfos)
                                @foreach ($edinfos as $edinfo)
                                <form method="POST" action="{{ route("edinfo.update", $edinfo->id) }}" enctype="multipart/form-data" >
                                    @csrf
                                    {{ method_field("PUT") }}
                                    <div class="column width-12" >

                                          <div class="field-wrapper">
                                       <fieldset>
                                       <legend>Degree Level</legend>
                                       <select class="form-control dropdown" id="education" name="degree_level">
                                            <option value="" disabled="disabled">-- select one --</option>
                                            <option value="No formal education" @if($edinfo->degree_level == 'No formal education') selected="selected" @endif>No formal education</option>
                                            <option value="Primary education" @if($edinfo->degree_level == 'Primary education') selected="selected" @endif>Primary education</option>
                                            <option value="Secondary education" @if($edinfo->degree_level == 'Secondary education') selected="selected" @endif>Secondary education or high school</option>
                                            <option value="GED" @if($edinfo->degree_level == 'GED') selected="selected" @endif>GED</option>
                                            <option value="Vocational qualification" @if($edinfo->degree_level == 'Vocational qualification') selected="selected" @endif>Vocational qualification</option>
                                            <option value="Bachelors degree" @if($edinfo->degree_level == 'Bachelors degree') selected="selected" @endif>Bachelors degree</option>
                                            <option value="Masters degree" @if($edinfo->degree_level == 'Masters degree') selected="selected" @endif>Masters degree</option>
                                            <option value="Doctorate or higher" @if($edinfo->degree_level == 'Doctorate or higher') selected="selected" @endif>Doctorate or higher</option>
                                        </select>
                                      </fieldset>
                                     </div>


                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="text" name="title" value="{{ $edinfo->title }}" class="form-email form-element large" placeholder="Degree Title*" tabindex="1" required>
                                            </div>
                                        </div>
                                        <div class="column width-1">
                                          <div class="field-wrapper">
                                            <p>&nbsp</p>
                                          </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="text" name="institute" value="{{ $edinfo->institute }}" class="form-lname form-element large" placeholder="Institute/university" tabindex="2">
                                            </div>
                                        </div><br><br><br>
                                        <div class="column width-1">
                                            <div class="field-wrapper">
                                        <span>From</span>
                                            </div>
                                        </div>
                                        <div class="column width-3">
                                            <div class="field-wrapper">
                                                <input type="date" name="startdate" value="{{ $edinfo->startdate }}" class="form-email form-element large" placeholder="Year of passing*" tabindex="3" required>
                                            </div>
                                        </div>
                                        <div class="column width-1">
                                            <div class="field-wrapper">
                                        <span>To</span>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="date" name="enddate" value="{{ $edinfo->enddate }}" class="form-email form-element large" placeholder="Year of passing*" tabindex="3" required>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="Percentage" name="percentage" value="{{ $edinfo->percentage }}" class="form-email form-element large" placeholder="Percentage*" tabindex="3" required>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <input type="file" name="degree_img" value="{{ $edinfo->degree_img }}" class="form-email form-element large" placeholder="Upload Degree*" tabindex="3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column width-12">
                                        <input type="submit" value="Save" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                                    </div>
                                    <div class="column width-12"><br><br></div>
                                </form>
                                @endforeach
                                @endif
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
