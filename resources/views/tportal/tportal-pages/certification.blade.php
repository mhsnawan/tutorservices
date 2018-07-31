@extends('tportal.tportal-layouts.tportal-layout')

@section('content')

<div class="row">
    <div class="column width-12">
        <div style="height:30px" class="progress-bar large pill bkg-turquoise-light color-white">
            <div class="bar border-turquoise color-white horizon" style="width:30%;" data-animate-in="transX:-400;duration:1000ms;delay:400ms;easing:swing;">
            30%
            </div>
        </div>
        <hr class="mt-20 mb-60">
        <div class="tabs style-2 vertical left">
            <ul class="tab-nav">
                <li class="active"><a href="{{ route('account.index') }}">Personal Info</a></li>
                <li><a href="{{ route('edinfo.index') }}">Educational Info</a></li>
                <li><a href="{{ route('experience.index') }}">Experience</a></li>
                <li><a href="./courses">Courses</a></li>
                <li><a href="./certification">Certification</a></li>
                <li><a href="./availability">Availablity</a> </li>
                <li><a href="./current-tutions">Current-Tutions</a></li>
                <li><a href="./rate">Rate</a></li>
                <li><a href="./uploads">Uploads</a></li>
            </ul>
            <div class="tab-panes left">
                <div id="tabs-team-pane-1" class="active animate">
                    <div class="tab-content">
                        <div style="width:500; height:500;background-color:#daf2f2"class="row content-grid-2">
                            <div>
                                <div>
                                    <form method="POST" action="{{ route("certification.store") }}">
                                        @csrf
                                        <div class="row">
                                            <div class="column width-12">
                                                <div class="column width-4">
                                                    <div class="field-wrapper">
                                                        <input type="text" name="title" class="form-fname form-element large" placeholder="Certification or Reward*" tabindex="1" required>
                                                    </div>
                                                </div>
                                                <div class="column width-4">
                                                    <div class="field-wrapper">
                                                        <input type="text" name="institute" class="form-lname form-element large" placeholder="Certified From (E.G. Adobe)" tabindex="2">
                                                    </div>
                                                </div><br>
                                                <div class="column width-4">
                                                    {{-- <div class="column width-12">
                                                        <br>
                                                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                                                        <input type="submit" value="Upload File" name="submit"   class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="column width-6">
                                                <div class="form-select form-element large">
                                                    <select name="year" tabindex="3" class="form-aux" data-label="Year">
                                                        @for ($i = 2018; $i >= 1960; $i--)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
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
    </div>
</div>
@endsection
