@extends('layouts.default')

@section('content')
<div class="section-block pt-60 pb-0">
    <div class="row">
        <div class="column width-12">
            <hr class="mb-100">
        </div>
        <h3 class="center">Account Setting</h2>
        <div class="push-3 column width-8">
            <div class="tabs style-2 left">
                <ul class="tab-nav">
                    <li class="active">
                        <a href="#tabs-4-pane-1">Personal Info</a>
                    </li>
                    <li>
                        <a href="#tabs-4-pane-2">Educational Info</a>
                    </li>
                    @if ($user['role']=='2')
                    <li>
                        <a href="#tabs-4-pane-3">Certifications</a>
                    </li>
                    @endif
                </ul>
                <div class="tab-panes">
                    <div id="tabs-4-pane-1" class="active animate">
                        <div class="tab-content">
                            <div class="signup-form-container create-account horizontal">
                                <form class="signup-form" method="POST" action="{{ route('account.store') }}" >
                                    @csrf
                                    <div class="column width-12">
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <label>Full Name*</label>
                                                <input type="text" name="name" value="{{ $user['name'] }}" class="form-email form-element large" placeholder="Mark Johnson" tabindex="1" required>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <label>Username</label>
                                                <input type="text" name="username" value="{{ $user['username'] }}" class="form-password form-element large" placeholder="markjohn" tabindex="2" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column width-12">
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <label>CNIC*</label>
                                                <input type="text" name="cnic" value="{{ $user['cnic'] }}" class="form-email form-element large" placeholder="37408-2121454-3" tabindex="3" required>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <label>Phone*</label>
                                                <input type="text" name="phone" value="{{ $user['phone'] }}" class="form-password form-element large" placeholder="+923453045874" tabindex="4" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column width-12">
                                        <div class="column width-2">
                                            <div class="field-wrapper">
                                                <label>Gender*</label>
                                                <div class="form-select form-element large">
                                                    <select name="gender" tabindex="5" class="form-aux" data-label="Gender">
                                                        <option selected="selected" value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-2">
                                            <div class="field-wrapper">
                                                <label>Age*</label>
                                                <input type="number" name="age" value="{{ $user['age'] }}" class="form-password form-element large" placeholder="25" tabindex="6" required>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <label>Nationality*</label>
                                                <input type="text" name="nationality" value="{{ $user['nationality'] }}" class="form-password form-element large" placeholder="Pakistani" tabindex="7" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column width-12">
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <label>Adress Line 1*</label>
                                                <input type="text" name="address1" value="{{ $user['address1'] }}" class="form-password form-element large" placeholder="H#50 Lane 4" tabindex="8" required>
                                            </div>
                                        </div>
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <label>Adress Line 2</label>
                                                <input type="text" name="address2" value="{{ $user['address2'] }}" class="form-password form-element large" placeholder="Sector F-10" tabindex="9">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column width-12">
                                        <div class="column width-4">
                                            <div class="field-wrapper">
                                                <label>City*</label>
                                                <input type="text" name="city" value="{{ $user['city'] }}" class="form-password form-element large" placeholder="Islamabad" tabindex="10" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column width-12">
                                        <input type="submit" value="Save" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                                    </div>
                                    <div class="column width-12"><br><br></div>
                                    <input type="text" name="honeypot" class="form-honeypot form-element">
                                </form>
                                <div class="form-response show"></div>
                            </div>
                        </div>
                    </div>
                    <div id="tabs-4-pane-2">
                            <div class="tab-content">
                                <div class="signup-form-container create-account horizontal">
                                    <form class="signup-form" action="#" method="post" novalidate>
                                        <div class="column width-12">
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Full Name*</label>
                                                    <input type="text" name="name" class="form-email form-element large" placeholder="Mark Johnson" tabindex="1" required>
                                                </div>
                                            </div>
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-password form-element large" placeholder="markjohn" tabindex="2" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>CNIC*</label>
                                                    <input type="text" name="cnic" class="form-email form-element large" placeholder="37408-2121454-3" tabindex="3" required>
                                                </div>
                                            </div>
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Phone*</label>
                                                    <input type="text" name="phone" class="form-password form-element large" placeholder="+923453045874" tabindex="4" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="column width-2">
                                                <div class="field-wrapper">
                                                    <label>Gender*</label>
                                                    <div class="form-select form-element large">
                                                        <select name="gender" tabindex="5" class="form-aux" data-label="Gender">
                                                            <option selected="selected" value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column width-2">
                                                <div class="field-wrapper">
                                                    <label>Age*</label>
                                                    <input type="number" name="age" class="form-password form-element large" placeholder="25" tabindex="6" required>
                                                </div>
                                            </div>
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Nationality*</label>
                                                    <input type="text" name="nationality" class="form-password form-element large" placeholder="Pakistani" tabindex="7" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Adress Line 1*</label>
                                                    <input type="text" name="address1" class="form-password form-element large" placeholder="H#50 Lane 4" tabindex="8" required>
                                                </div>
                                            </div>
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>Adress Line 2</label>
                                                    <input type="text" name="address2" class="form-password form-element large" placeholder="Sector F-10" tabindex="9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="column width-4">
                                                <div class="field-wrapper">
                                                    <label>City*</label>
                                                    <input type="text" name="city" class="form-password form-element large" placeholder="Islamabad" tabindex="10" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <input type="submit" value="Save" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                                        </div>
                                        <div class="column width-12"><br><br></div>
                                        <input type="text" name="honeypot" class="form-honeypot form-element">
                                    </form>
                                    <div class="form-response show"></div>
                                </div>
                            </div>
                    </div>
                    
                    <div id="tabs-4-pane-3">
                        <div class="tab-content">
                            <p class="lead">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tabs Style 2 End -->


@endsection