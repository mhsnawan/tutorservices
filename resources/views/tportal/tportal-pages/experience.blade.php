@extends('tportal.tportal-layouts.tportal-layout')
@section('title', 'Employment History')
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
                      <a href="#addnew">Add Experience</a>
                        <div id="addnew">
                          <div class="accordion-content">
                            <form method="POST" action="{{ route("experience.store") }}" enctype="multipart/form-data">
                              @csrf
                              <div  class="column width-12">
                                <div class="column width-12">
                                  <div class="field-wrapper">
                                    <label>Company Name</label>
                                    <input type="text" name="company" id="company" class="form-lname form-element large" placeholder="Company" tabindex="1">
                                  </div>
                                </div>
                                <div class="column width-6">
                                  <div class="field-wrapper">
                                      <label>Location</label>
                                    <input type="text" name="location" class="form-lname form-element large" placeholder="Location" tabindex="2">
                                  </div>
                                </div>
                                <div class="column width-6">
                                  <div class="field-wrapper">
                                    <label>Country</label>
                                    <input type="text" name="country" class="form-lname form-element large" placeholder="Country" tabindex="3">
                                  </div>
                                </div>
                                <div class="column width-12">
                                  <div class="field-wrapper">
                                      <label>Title</label>
                                    <input type="text" name="title" class="form-fname form-element large" placeholder="Title*" tabindex="4" required>
                                  </div>
                                </div>
                                <div class="column width-6">
                                    <div class="field-wrapper">
                                        <label>To</label>
                                        <input type="date" name="startdate" class="form-email form-element large" placeholder="To*" tabindex="5" required>
                                    </div>
                                </div>
                                <div class="column width-6">
                                    <div class="field-wrapper">
                                        <label>From</label>
                                        <input type="date" name="enddate" class="form-email form-element large" placeholder="From*" tabindex="6" >
                                    </div>
                                </div>
                                <div class="column width-6"></div>
                                <div class="column width-6 push-6">
                                  <div class="coulumn width-2">
                                      <input type="checkbox" class="custom-control-input" name="currently_working" id="currently_working">
                                  </div>
                                  <div class="column width-3">
                                      <label for="currently_working">Currently Working</label>
                                  </div>
                                </div>
                              </div>
                              
                                <div class="column width-12">
                                  <div class="field-wrapper">
                                      <label>Description</label>
                                    <textarea name="description" class="form-message form-element large" placeholder="Description*" tabindex="7" required></textarea>
                                  </div>
                                </div>
                              <div class="column width-12">
                                <label>Upload Experience(Optional)</label>
                                <div class="field-wrapper">
                                    <input type="file" name="experience_img" id="fileToUpload" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
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

                    @if ($experiences)
                    @foreach ($experiences as $experience)
                    <li>
                      <a href="#{{ $experience->id }}">{{ $experience->company }}</a>
                      <div id="{{ $experience->id }}">
                        <div class="accordion-content">
                          <form method="POST" action="{{ route("experience.update", $experience->id) }}" enctype="multipart/form-data">
                            @csrf
                            {{ method_field("PUT") }}
                            <div  class="column width-12">
                              <div class="column width-12">
                                <div class="field-wrapper">
                                  <input type="text" name="company" id="company" class="form-lname form-element large" value="{{ $experience->company }}" placeholder="Company" tabindex="1">
                                </div>
                              </div>
                              <div class="column width-6">
                                <div class="field-wrapper">
                                  <input type="text" name="location" class="form-lname form-element large" value="{{ $experience->location }}" placeholder="Location" tabindex="2">
                                </div>
                              </div>
                              <div class="column width-6">
                                <div class="field-wrapper">
                                  <input type="text" name="country" class="form-lname form-element large" value="{{ $experience->country }}" placeholder="Country" tabindex="3">
                                </div>
                              </div>
                              <div class="column width-12">
                                <div class="field-wrapper">
                                  <input type="text" name="title" class="form-fname form-element large" value="{{ $experience->title }}" placeholder="Title*" tabindex="1" required>
                                </div>
                              </div>
                              <div class="column width-6">
                                  <div class="field-wrapper">
                                      <label>To</label>
                                      <input type="date" name="startdate" class="form-email form-element large" value="{{ $experience->startdate }}" placeholder="To*" tabindex="3" required>
                                  </div>
                              </div>
                              <div class="column width-6">
                                  <div class="field-wrapper">
                                      <label>From</label>
                                      <input type="date" name="enddate" id="enddate" class="form-email form-element large" value="{{ $experience->enddate }}" placeholder="From*" tabindex="3">
                                  </div>
                              </div>
                              <div class="column width-6"></div>
                              <div class="column width-6 push-6">
                                <div class="coulumn width-2">
                                    <input type="checkbox" class="custom-control-input" name="currently_working" id="defaultUnchecked">
                                </div>
                                <div class="column width-3">
                                    <label for="defaultUnchecked">Currently Working</label>
                                </div>
                              </div>
                            </div>
                            
                              <div class="column width-12">
                                <div class="field-wrapper">
                                  <textarea name="description" class="form-message form-element large" value="{{ $experience->description }}" placeholder="Description*" tabindex="7" required></textarea>
                                </div>
                              </div>
                            <div class="column width-12">
                              <label>Upload Experience(Optional)</label>
                              <div class="field-wrapper">
                                  <input type="file" name="experience_img" id="fileToUpload" value="{{ $experience->experience_img }}" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
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

  <script>
    $(document).ready(function(){
      $('#currently_working').change(function(){
        $("#enddate").prop("disabled",false);
    });
    });
    </script>
       
@endsection


