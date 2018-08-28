@extends('tportal.tportal-layouts.tportal-layout')

@section('content')
        <div class="tab-panes left">
            <div id="tabs-team-pane-2" class="active animate">
                <div class="tab-content">
                    <!-- Team Grid -->
                    <div style="width:500; height:500;background-color:#daf2f2"class="row content-grid-2">
                        <div>
                          <div>
                            <form method="POST" action="{{ route("experience.store") }}" enctype="multipart/form-data">
                              @csrf
                              <div  class="column width-12">
                                <div class="column width-4">
                                  <div class="field-wrapper">
                                    <input type="text" name="title" class="form-fname form-element large" placeholder="Work Title*" tabindex="1" required>
                                  </div>
                                </div>
                                <div class="column width-4">
                                  <div class="field-wrapper">
                                    <input type="text" name="company" class="form-lname form-element large" placeholder="Work Company" tabindex="2">
                                  </div>
                                </div>
                                <div class="column width-4">
                                  <div class="field-wrapper">
                                    <input type="text" name="duration" class="form-email form-element large" placeholder="Work Duration*" tabindex="3" required>
                                  </div>
                                </div>

                                <br><br><br>
                                <div class="column width-1">
                                    <div class="field-wrapper">
                                <span>From</span>
                                    </div>
                                </div>
                                <div class="column width-5">
                                    <div class="field-wrapper">
                                        <input type="date" name="startdate" class="form-email form-element large" placeholder="Year of passing*" tabindex="3" required>
                                    </div>
                                </div>
                                <div class="column width-1">
                                    <div class="field-wrapper">
                                <span>To</span>
                                    </div>
                                </div>
                                <div class="column width-5">
                                    <div class="field-wrapper">
                                        <input type="date" name="enddate" class="form-email form-element large" placeholder="Year of passing*" tabindex="3" required>
                                    </div>
                                </div>
                              </div>
                              <div class="column width-12">
                                <div class="column width-12">
                                  <div class="field-wrapper">
                                    <textarea name="description" class="form-message form-element large" placeholder="Description*" tabindex="7" required></textarea>
                                  </div>
                                </div>


                              </div>
                              <div class="column width-12">
                                <div class="field-wrapper">
                                    <input type="file" name="experience_img" id="fileToUpload" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
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


                    <!-- Update -->
                    @foreach ($experiences as $experience)
                    <div style="width:500; height:500;background-color:#daf2f2"class="row content-grid-2">
                      <div>
                        <div>
                          <form method="POST" action="{{ route("experience.update", $experience->id) }}" enctype="multipart/form-data">
                            @csrf
                            {{ method_field("PUT") }}
                            <div  class="column width-12">
                              <div class="column width-4">
                                <div class="field-wrapper">
                                  <input type="text" name="title" value="{{ $experience->title }}" class="form-fname form-element large" placeholder="Work Title*" tabindex="1" required>
                                </div>
                              </div>
                              <div class="column width-4">
                                <div class="field-wrapper">
                                  <input type="text" name="company" value="{{ $experience->company }}" class="form-lname form-element large" placeholder="Work Company" tabindex="2">
                                </div>
                              </div>
                              <div class="column width-4">
                                <div class="field-wrapper">
                                  <input type="text" name="duration" value="{{ $experience->duration }}" class="form-email form-element large" placeholder="Work Duration*" tabindex="3" required>
                                </div>
                              </div>

                              <br><br><br>
                              <div class="column width-1">
                                  <div class="field-wrapper">
                              <span>From</span>
                                  </div>
                              </div>
                              <div class="column width-5">
                                  <div class="field-wrapper">
                                      <input type="date" name="startdate" value="{{ $experience->startdate }}" class="form-email form-element large" placeholder="Year of passing*" tabindex="3" required>
                                  </div>
                              </div>
                              <div class="column width-1">
                                  <div class="field-wrapper">
                              <span>To</span>
                                  </div>
                              </div>
                              <div class="column width-5">
                                  <div class="field-wrapper">
                                      <input type="date" name="enddate" value="{{ $experience->enddate }}" class="form-email form-element large" placeholder="Year of passing*" tabindex="3" required>
                                  </div>
                              </div>
                            </div>
                            <div class="column width-12">
                              <div class="column width-12">
                                <div class="field-wrapper">
                                  <textarea name="description" value="{{ $experience->description }}" class="form-message form-element large" placeholder="Description*" tabindex="7" required></textarea>
                                </div>
                              </div>


                            </div>
                            <div class="column width-12">
                              <div class="field-wrapper">
                                  <input type="file" name="experience_img" value="{{ $experience->img }}" id="fileToUpload" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
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
                    @endforeach
                </div>
            </div>
        </div>




  @endsection
