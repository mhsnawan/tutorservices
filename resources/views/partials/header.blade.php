<header  class="header header-fixed header-fixed-on-mobile" data-bkg-threshold="100" data-compact-threshold="100">
    <div class="header-inner">
        <div class="row nav-bar">
            <div class="column width-12 nav-bar-inner">
                <div class="logo">
                    <div class="logo-inner">
                        <a href="/"><img src={{ asset("images/logo-dark.png") }} alt="Tutor Services" /></a>
                        <a href="/"><img src={{ asset("images/logo.png") }} alt="Tutor Services" /></a>
                    </div>
                </div>
                <nav class="navigation nav-block secondary-navigation nav-right">
                    <ul>
                        <li style="">
                            {{--  <!-- Search -->
                            <a  onclick="myFunction()" type="submit">
                                <span class="icon-magnifying-glass"></span>
                            </a>

                            <div style=" width:100%;margin-top:-25px;margin-left:-162px;" id="myDIV">
                                <form action="./searchresult" method="post">
                                    {{csrf_field()}}
                                    <input style="border-radius:40px;height:5px;width:222px;" type="text" class="form-control" id="search" name="search" placeholder="search">

                                </form>
                            </div>
                            <script>
                                function myFunction() {
                                    var x = document.getElementById("myDIV");
                                    if (x.style.display === "none") {
                                        x.style.display = "block";
                                    } else {
                                        x.style.display = "none";
                                    }
                                }
                            </script>
                            <a href="#search-modal" data-content="inline" data-toolbar="" data-aux-classes="tml-search-modal" data-modal-mode data-modal-width="1000" data-lightbox-animation="fade" data-nav-exit="false" class="lightbox-link nav-icon">
                                <span class="icon-magnifying-glass"></span>
                            </a>  --}}
                        </li>
                        <li>
                            <!-- Search -->
                            <a href="#search-modal" data-content="inline" data-toolbar="" data-aux-classes="tml-search-modal" data-modal-mode data-modal-width="1000" data-lightbox-animation="fade" data-nav-exit="false" class="lightbox-link nav-icon">
                                <span class="icon-magnifying-glass"></span>
                            </a>
                        </li>
                        <li class="aux-navigation hide">
                            <!-- Aux Navigation -->
                            <a href="#" class="navigation-show side-nav-show nav-icon">
                                <span class="icon-menu"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="navigation nav-block primary-navigation nav-right">
                    <ul>
                        <li>
                            <a href="/blog">Blog</a>
                        </li>
                    @guest

                        <li>
                            <a href="{{ route('login') }}">Sign In</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">Join</a>
                        </li>
                        @else

                        <li><a href="{{ route('courses') }}">Courses</a></li>
                        
                        @if (Auth::user()->role == 1)
                        <li><a href="{{ route('enrolledin') }}">Enrolled In</a></li>
                        @endif
                        @if(Auth::user()->role == 2)
                        <li><a  href="{{ route('pending.request') }}" >Requests</a></li>
                        <li>
                            <a href="{{ route('all-enrolled-students') }}">Enrolled Students</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('all-enrolled-students') }}">All Students</a>
                                </li>
                                <li>
                                    <a href="{{ route('gigs.create') }}">Student by Course</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('gigs.index') }}">Tutions</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('gigs.index') }}">Tutions</a>
                                </li>
                                <li>
                                    <a href="{{ route('gigs.create') }}">Create New</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        <li><a href="/inbox">Messages</a></li>
                        <li></li>
                        <li>
                            <a style="" href="#" class="contains-sub-menu profile-image">
                                <img style="width:32px;height:32px;position:inline;top:25px;left:10px;border-radius:50%;" src="/storage/{{ Auth::user()->profile_img }}" class="img-circle special-img">
                                <i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/profile">My Profile</a>
                                </li>
                                <li>
                                    <a href="/account">Account Setting</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li></li>
                        <li></li>


                    @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
