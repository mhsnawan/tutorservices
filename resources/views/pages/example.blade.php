@extends('layouts.default')

@section('content')
<div class="section-block pb-0">
    <div class="row">
        <div class="column width-10 offset-1 center">
            <p class="lead weight-regular mb-70">Our templates come with working AJAX contact forms that can be inserted into any page or section. Add fields, dropdowns, checkboxes, radio buttons on the fly without knowing JS or PHP.</p>
        </div>
        <div class="column width-12">
            <hr class="mb-70">
        </div>
    </div>
</div>
<!-- Intro End -->

<!-- Form Style Default -->
<div class="section-block replicable-content pt-0">
    <div class="row">
        <div class="column width-4">
            <h3 class="mb-50">Basic Form</h3>
        </div>
        <div class="column width-8">
            <div class="contact-form-container">
                <form class="contact-form" action="php/send-email.php" method="post" novalidate>
                    <div class="row">
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="text" name="fname" class="form-fname form-element large" placeholder="First Name*" tabindex="1" required>
                            </div>
                        </div>
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="text" name="lname" class="form-lname form-element large" placeholder="Last Name" tabindex="2">
                            </div>
                        </div>
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="email" name="email" class="form-email form-element large" placeholder="Email address*" tabindex="3" required>
                            </div>
                        </div>
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="text" name="website" class="form-wesite form-element large" placeholder="Website" tabindex="4">
                            </div>
                        </div>
                        <div class="column width-6">
                            <input type="text" name="honeypot" class="form-honeypot form-element">
                        </div>
                    </div>
                    <div class="row">
                        <div class="column width-12">
                            <div class="field-wrapper">
                                <textarea name="message" class="form-message form-element large" placeholder="Message*" tabindex="7" required></textarea>
                            </div>
                            <input type="submit" value="Send Email" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                        </div>
                    </div>
                </form>
                <div class="form-response"></div>
            </div>
        </div>
    </div>
</div>
<!-- Form Style Default End -->

<!-- Form Advanced -->
<div class="section-block replicable-content bkg-grey-ultralight">
    <div class="row">
        <div class="column width-4">
            <h3 class="mb-50">Advanced Forms</h3>
        </div>
        <div class="column width-8">
            <div class="contact-form-container">
                <form class="contact-form" action="php/send-email.php" method="post" novalidate>
                    <div class="row">
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="text" name="fname" class="form-fname form-element large" placeholder="First Name*" tabindex="1" required>
                            </div>
                        </div>
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="text" name="lname" class="form-lname form-element large" placeholder="Last Name" tabindex="2">
                            </div>
                        </div>
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="email" name="email" class="form-email form-element large" placeholder="Email address*" tabindex="3" required>
                            </div>
                        </div>
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="text" name="website" class="form-wesite form-element large" placeholder="Website" tabindex="4">
                            </div>
                        </div>
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="text" name="date" class="form-aux form-date form-element large" placeholder="Day/Month/Year" tabindex="5">
                            </div>
                        </div>
                        <div class="column width-6">
                            <div class="form-select form-element large">
                                <select name="budget" tabindex="6" class="form-aux" data-label="Project Budget">
                                    <option selected="selected" value="Project Budget">Project Budget</option>
                                    <option value="">$500-$1000</option>
                                    <option value="">$1000-$2000</option>
                                    <option value="">$2000-$3500</option>
                                    <option value="">$5000+</option>
                                </select>
                            </div>
                        </div>
                        <div class="column width-12">
                            <div class="field-wrapper pt-10 pb-10">
                                <input id="radio-1" class="form-element radio" name="radio-group" type="radio" checked>
                                <label for="radio-1" class="radio-label">I need my website reworked</label>
                                <input id="radio-2" class="form-element radio" name="radio-group" type="radio">
                                <label for="radio-2" class="radio-label">I need a new website</label>
                            </div>
                        </div>
                        <div class="column width-6">
                            <input type="text" name="honeypot" class="form-honeypot form-element">
                        </div>
                    </div>
                    <div class="row">
                        <div class="column width-12">
                            <div class="field-wrapper">
                                <textarea name="message" class="form-message form-element large" placeholder="Message*" tabindex="7" required></textarea>
                            </div>
                        </div>
                        <div class="column width-12">
                            <div class="field-wrapper pt-10 pb-10">
                                 <input id="checkbox-1" class="form-element checkbox rounded" name="checkbox-1" type="checkbox" required>
                                <label for="checkbox-1" class="checkbox-label">I agree to the terms</label>
                            </div>
                        </div>
                        <div class="column width-12">
                            <input type="submit" value="Send Email" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                        </div>
                    </div>
                </form>
                <div class="form-response"></div>
            </div>
        </div>
    </div>
</div>
<!-- Form Advanced End -->

<!-- Form Modal -->
<div class="section-block">
    <div class="row">
        <div class="column width-4">
            <h3 class="mb-50">Forms &amp; Modals</h3>
        </div>
        <div class="column width-8">
            <p>Need a contact modal? No problem, our forms work seamlessly without our Summit lightbox and its modal mode. Style on the fly as necessary by adding specific classes at runtime.</p>
            <a data-content="inline" data-toolbar="" data-aux-classes="tml-contact-modal tml-exit-light" data-modal-mode data-modal-width="700" data-lightbox-animation="fadeIn" href="#contact-modal" class="lightbox-link button pill border-theme bkg-hover-theme color-theme color-hover-white"><span class="icon-mail left"></span> Shoot us an email</a>
        </div>
    </div>
</div>
<!-- Form Modal End  -->

<!-- Contact Advanced Modal End -->
<div id="contact-modal" class="section-block pt-0 pb-30 background-none hide">
    
    <!-- Intro Title Section 2 -->
    <div class="section-block intro-title-2-1 xsmall bkg-grey-ultralight">
        <div class="media-overlay bkg-black opacity-03"></div>
        <div class="row">
            <div class="column width-12">
                <div class="title-container">
                    <div class="title-container-inner center color-white">
                        <h1 class="title-medium mb-0">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Title Section 2 End -->

    <!-- Form -->
    <div class="section-block pt-60 pb-0">
        <div class="row">
            <div class="column width-10 offset-1">
                <div class="signup-form-container">
                    <form class="contact-form" action="php/send-email.php" method="post" novalidate>
                        <div class="row">
                            <div class="column width-12">
                                <input type="text" name="fname" class="form-fname form-element large" placeholder="First Name*" tabindex="1" required>
                            </div>
                            <div class="column width-12">
                                <input type="email" name="email" class="form-email form-element large" placeholder="Email address*" tabindex="3" required>
                            </div>
                            <div class="column width-6">
                                <input type="text" name="honeypot" class="form-honeypot form-element large">
                            </div>
                        </div>
                        <div class="row">
                            <div class="column width-12">
                                <div class="field-wrapper">
                                    <textarea name="message" class="form-message form-element large" placeholder="Message*" tabindex="7" required></textarea>
                                </div>
                            </div>
                            <div class="column width-12">
                                <input type="submit" value="Send Email" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
                            </div>
                        </div>
                    </form>
                    <div class="form-response center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
</div>

<!-- Search Modal End -->
<div id="search-modal" class="hide">
    <div class="row">
        <div class="column width-12 center">
            <div class="search-form-container site-search">
                <form action="#" method="get" novalidate>
                    <div class="row">
                        <div class="column width-12">
                            <div class="field-wrapper">
                                <input type="text" name="search" class="form-search form-element" placeholder="type &amp; hit enter...">
                                <span class="border"></span>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="form-response"></div>
            </div>
            <a href="#" class="tml-aux-exit">Close</a>
        </div>
    </div>
</div>
<!-- Search Modal End -->

@endsection