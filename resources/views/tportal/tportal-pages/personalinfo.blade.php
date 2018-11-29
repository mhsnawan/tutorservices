@extends('tportal.tportal-layouts.tportal-layout')
@section('title', 'Personal Info')
@section('content')

    <div class="tab-panes left">
        <div id="tabs-team-pane-1" class="active animate">
            <div class="tab-content">
                <div style="width:500; height:500;background-color:#daf2f2"class="row content-grid-2">
                    <div>
                        <div>
                            <form method="POST" action="{{ route('account.update', $user->id) }}">
                                @csrf
                                {{ method_field("PUT") }}
                                <div class="column width-12">
                                    <div class="column width-4">
                                        <div class="field-wrapper">
                                            <label>Full Name*</label>
                                            <input type="text" name="name" value="{{ $user['name'] }}" class="form-email form-element large" placeholder="Mark Johnson" index="1" required>
                                        </div>
                                    </div>
                                    <div class="column width-4">
                                        <div class="field-wrapper">
                                            <label>Username</label>
                                            <input type="text" value="{{ $user->username }}" class="form-password form-element large" placeholder="markjohn" tabindex="2" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-12">
                                    <div class="column width-4">
                                        <div class="field-wrapper">
                                            <label>CNIC* (Enter Without Dashes)</label>
                                            <input type="text" name="cnic" id="cnic" value="{{ $user->cnic }}" class="form-email form-element large" placeholder="37408-2121454-3" tabindex="3" maxlength="15" pattern="[0-9]{5}[-]{1}[0-9]{7}[-]{1}[0-9]{1}" title="Example: 12345-1234567-1" required onkeydown="addhyphen();">
                                        </div>
                                    </div>
                                    <div class="column width-4">
                                        <div class="field-wrapper">
                                            <label>Phone*</label>
                                            <input type="text" name="phone" id="phone" value="{{ $user->phone }}" class="form-password form-element large" placeholder="0345-3045874" tabindex="4" maxlength="12" pattern="[0-9]{4}[-][0-9]{7}" title="Example: 0345-3045874" required onkeydown="phonee();">
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-12">
                                    <div class="column width-2">
                                        <div class="field-wrapper">
                                            <label>Gender*</label>
                                            <div class="form-select form-element large">
                                                <select name="gender" value="{{ $user->gender }}" tabindex="5" class="form-aux" data-label="Gender">
                                                    <option selected="selected" value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column width-2">
                                        <div class="field-wrapper">
                                            <label>Age*</label>
                                            <input type="number" name="age" value="{{ $user->age }}" class="form-password form-element large" placeholder="25" tabindex="6" required>
                                        </div>
                                    </div>
                                    <div class="column width-4">
                                        <div class="field-wrapper">
                                            <label>Nationality*</label>
                                            <input type="text" name="nationality" value="{{ $user->nationality }}" class="form-password form-element large" placeholder="Pakistani" tabindex="7" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-12">
                                    <div class="column width-4">
                                        <div class="field-wrapper">
                                            <label>Adress Line 1*</label>
                                            <input type="text" name="address1" value="{{ $user->address1 }}" class="form-password form-element large" placeholder="H#50 Lane 4" tabindex="8" required>
                                        </div>
                                    </div>
                                    <div class="column width-4">
                                        <div class="field-wrapper">
                                            <label>Adress Line 2</label>
                                            <input type="text" name="address2" value="{{ $user->address2 }}" class="form-password form-element large" placeholder="Sector F-10" tabindex="9">
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-12">
                                    <div class="column width-4">
                                        <div class="field-wrapper">
                                            <label>City*</label>
                                            <input type="text" name="city" value="{{ $user->city }}" class="form-password form-element large" placeholder="Islamabad" tabindex="10" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-12">
                                    <div class="column width-4">
                                        <div class="field-wrapper">
                                            <label>Upload CNIC*</label>
                                            <input type="file" name="cnic_img" value="{{ $user->cnic_img }}" class="form-password form-element large" placeholder="Upload CNIC Image" tabindex="10" required>
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
            {{--  <div class="tab-panes left">
                <div id="tabs-team-pane-1" class="active animate">
                    <div class="tab-content">
                        <div style="width:500; height:500;background-color:#daf2f2"class="row content-grid-2">
                            <div>
                                <div>
                                    <form method="POST" action="{{ route('account.update', $user->id) }}">
                                        @csrf
                                        {{ method_field("PUT") }}
                                        <div class="column width-12">
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Full Name*</label>
                                                    <input type="text" name="name" value="{{ $user->name }}" class="form-email form-element large" placeholder="Mark Johnson" index="1" required>
                                                </div>
                                            </div>
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Username</label>
                                                    <input type="text" name="username" value="{{ $user->username }}" class="form-password form-element large" placeholder="markjohn" tabindex="2" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>CNIC*</label>
                                                    <input type="text" name="cnic" value="{{ $user->cnic }}" class="form-email form-element large" placeholder="37408-2121454-3" tabindex="3" required>
                                                </div>
                                            </div>
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Phone*</label>
                                                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-password form-element large" placeholder="+923453045874" tabindex="4" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="column width-2">
                                                <div class="field-wrapper">
                                                    <label>Gender*</label>
                                                    <div class="form-select form-element large">
                                                        <select name="gender" value="{{ $user->gender }}" tabindex="5" class="form-aux" data-label="Gender">
                                                            <option selected="selected" value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column width-2">
                                                <div class="field-wrapper">
                                                    <label>Age*</label>
                                                    <input type="number" name="age" value="{{ $user->age }}" class="form-password form-element large" placeholder="25" tabindex="6" required>
                                                </div>
                                            </div>
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Nationality*</label>
                                                    <input type="text" name="nationality" value="{{ $user->nationality }}" class="form-password form-element large" placeholder="Pakistani" tabindex="7" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Adress Line 1*</label>
                                                    <input type="text" name="address1" value="{{ $user->address1 }}" class="form-password form-element large" placeholder="H#50 Lane 4" tabindex="8" required>
                                                </div>
                                            </div>
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Adress Line 2</label>
                                                    <input type="text" name="address2" value="{{ $user->address2 }}" class="form-password form-element large" placeholder="Sector F-10" tabindex="9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>City*</label>
                                                    <input type="text" name="city" value="{{ $user->city }}" class="form-password form-element large" placeholder="Islamabad" tabindex="10" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Upload CNIC*</label>
                                                    <input type="file" name="cnic_img" value="{{ $user->cnic_img }}" class="form-password form-element large" placeholder="Islamabad" tabindex="10" required>
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
            </div>  --}}

            <script language="javascript">
                function addhyphen()
                {
                    str = document.getElementById("cnic").value;
                    if(str.length==5 && event.keyCode!=8){
                        str = str + '-';
                    }
                    if(str.length==13 && event.keyCode!=8){
                        str = str + '-';
                    }
                    if(str.length==15 && event.keyCode!=8){
                        str = str + '-';
                    }
                    if(str.length <= 15){
                        document.getElementById("cnic").value = str;
                    }  
                }

                function phonee()
                {
                    str = document.getElementById("phone").value;
                    if(str.length==4 && event.keyCode!=8){
                        str = str + '-';
                    }
                    if(str.length <= 12){
                        document.getElementById("phone").value = str;
                    }
                }    
            </script>
@endsection
