@extends('tportal.tportal-layouts.tportal-layout')
@section('title', 'Certifications')
@section('content')
    <div class="tab-panes left">
        <div id="tabs-team-pane-1" class="active animate">
            <div class="tab-content">
                <!-- Accordions Style Default -->
                <div class="section-block pt-0 pb-0">
                    <div class="row">
                        <div class="column width-12">
                            <div class="accordion rounded" data-toggle-icon data-toggle-multiple>
                                <ul>
                                    <li class="active">
                                        <a href="#addnew">Add Certification</a>
                                        <div id="addnew">
                                            <div class="accordion-content">
                                                <form method="POST" action="{{ route('certification.store') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="column width-10">
                                                            <div class="field-wrapper">
                                                                <label>Certification Name</label>
                                                                <input type="text" name="title" class="form-fname form-element large" placeholder="Certification or Reward*" tabindex="1" required>
                                                            </div>
                                                        </div>
                                                        <div class="column width-10">
                                                            <div class="field-wrapper">
                                                                <label>Certified From</label>
                                                                <input type="text" name="institute" class="form-lname form-element large" placeholder="Certified From (E.G. Adobe)" tabindex="2">
                                                            </div>
                                                        </div>

                                                        <div class="column width-6">
                                                            <div class="field-wrapper">
                                                                <label>Year of Passing</label>
                                                                <div class="form-select form-element large">
                                                                    <select name="year" tabindex="3" class="form-aux" data-label="Year">
                                                                        @for ($i = 2018; $i >= 1960; $i--)
                                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>     
                                                    <div class="row">
                                                        <div class="column width-6">
                                                            <label>Upload Certification Image</label>
                                                            <input type="file" name="img" id="fileToUpload" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                                                        </div>
                                                    </div>
                                                    <div class="column width-12">
                                                        <input type="submit" value="Save" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                                                    </div>
                                                    <div class="column width-12"><br><br></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </li>

                                    @if ($certifications)
                                    @foreach ($certifications as $certification)
                                    <li>
                                        <a href="#{{ $certification->id }}">{{ $certification->title }}</a>
                                        <div id="{{ $certification->id }}">
                                            <div class="accordion-content">
                                                <form method="POST" action="{{ route("certification.update", $certification->id) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    {{ method_field("PUT") }}
                                                    <div class="row">
                                                        <div class="column width-12">
                                                            <div class="column width-4">
                                                                <div class="field-wrapper">
                                                                    <input type="text" name="title" value="{{ $certification->title }}" class="form-fname form-element large" placeholder="Certification or Reward*" tabindex="1" required>
                                                                </div>
                                                            </div>
                                                            <div class="column width-4">
                                                                <div class="field-wrapper">
                                                                    <input type="text" name="institute" value="{{ $certification->institute }}" class="form-lname form-element large" placeholder="Certified From (E.G. Adobe)" tabindex="2">
                                                                </div>
                                                            </div><br>
                                                            <div class="column width-4">
                                                                <div class="column width-12">
                                                                    <br>
                                                                    <input type="file" name="certification_img" value="{{ $certification->img }}" id="fileToUpload" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="column width-6">
                                                            <div class="form-select form-element large">
                                                                <select name="year" tabindex="3" class="form-aux" data-label="Year">
                                                                    @for ($i = 2018; $i >= 1960; $i--)
                                                                    <option value="{{ $i }}" @if($certification->year == $i) selected="selected"  @endif>{{ $i }}</option>
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
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Accordions Style Default -->
            </div>
        </div>
    </div>
       
@endsection
